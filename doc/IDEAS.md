# PAMI — Implementation Notes & Extension Ideas

This project is a custom fork of `marcelog/PAMI` maintained at [`sbuelow/pami`](https://github.com/sbuelow/PAMI) (v2.0.5).

---

## Current Architecture

### Throw Sites (`ClientImpl.php`)

There are 6 places where `ClientException` is thrown:

| # | Line | Context | Message pattern |
|---|---|---|---|
| 1 | 184 | Socket connection failure | `"Error connecting to ami: " . $errstr` |
| 2 | 189 | Non-AMI endpoint | `"Unknown peer. Is this an ami?: " . $asteriskId` |
| 3 | 195 | Login/authentication failure | `"Could not connect: " . $response->getMessage()` |
| 4 | 248 | Stream read failure (connection lost) | `"Error reading"` |
| 5 | 415 | Stream write failure (connection lost) | `"Could not send message"` |
| 6 | 430 | Read timeout | `"Read timeout"` |

### `ClientException` (current)

```php
class ClientException extends PAMIException {}
```

Currently no error codes — `$e->getCode()` always returns `0`. Error type is only distinguishable by parsing `$e->getMessage()`.

### How the Application Uses It

`framework/app/Controllers/Api/V1/Server.php` catches `ClientException` in the constructor:

```php
try {
    $this->pami->open();
} catch (\PAMI\Client\Exception\ClientException $e) {
    $this->pamiError = true;
    $this->pamiErrorMessage = $e->getMessage();
    $this->pamiErrorCode = $this->classifyAmiError($e);
}
```

The private `classifyAmiError()` maps the exception to an HTTP status code:

```php
private function classifyAmiError(\PAMI\Client\Exception\ClientException $e): int
{
    $msg = strtolower($e->getMessage());
    return match(true) {
        str_contains($msg, 'auth')                => 401,
        str_contains($msg, 'refused'),
        str_contains($msg, 'timeout')              => 503,
        default                                   => 500,
    };
}
```

---

## Proposed Enhancement: Error Code Constants

Add typed error codes to `ClientException` so the application can distinguish failure modes by `$e->getCode()` instead of string matching.

### Step 1 — `ClientException.php`

```php
class ClientException extends PAMIException
{
    const ERR_GENERIC    = 0;  // unclassified
    const ERR_SOCKET     = 1;  // connection refused / host unreachable
    const ERR_AUTH       = 2;  // login / authentication failed
    const ERR_PROTOCOL   = 3;  // not an AMI endpoint
    const ERR_READ       = 4;  // stream read failure
    const ERR_WRITE      = 5;  // stream write failure
    const ERR_TIMEOUT    = 6;  // read timeout
}
```

### Step 2 — `ClientImpl.php` (6 throw sites)

| Line | Before | After |
|---|---|---|
| 184 | `throw new ClientException('Error connecting to ami: ' . $errstr)` | `throw new ClientException('Error connecting to ami: ' . $errstr, ClientException::ERR_SOCKET)` |
| 189 | `throw new ClientException("Unknown peer. Is this an ami?: $asteriskId")` | `throw new ClientException("Unknown peer. Is this an ami?: $asteriskId", ClientException::ERR_PROTOCOL)` |
| 195 | `throw new ClientException('Could not connect: ' . $response->getMessage())` | `throw new ClientException('Could not connect: ' . $response->getMessage(), ClientException::ERR_AUTH)` |
| 248 | `throw new ClientException('Error reading')` | `throw new ClientException('Error reading', ClientException::ERR_READ)` |
| 415 | `throw new ClientException('Could not send message')` | `throw new ClientException('Could not send message', ClientException::ERR_WRITE)` |
| 430 | `throw new ClientException('Read timeout')` | `throw new ClientException('Read timeout', ClientException::ERR_TIMEOUT)` |

**Backward compatibility**: `\Exception` already accepts `(string $message, int $code)`. Adding the second argument is purely additive. Existing `catch` blocks continue to work. `$e->getCode()` currently returns `0`; after the change it returns a meaningful value — no code can break from receiving *more* information.

### Step 3 — Update Application `classifyAmiError()`

```php
// Before (string matching)
private function classifyAmiError(\PAMI\Client\Exception\ClientException $e): int
{
    $msg = strtolower($e->getMessage());
    return match(true) {
        str_contains($msg, 'auth')   => 401,
        str_contains($msg, 'refused'),
        str_contains($msg, 'timeout') => 503,
        default                       => 500,
    };
}

// After (error code matching)
private function classifyAmiError(\PAMI\Client\Exception\ClientException $e): int
{
    return match($e->getCode()) {
        ClientException::ERR_AUTH     => 401,
        ClientException::ERR_SOCKET,
        ClientException::ERR_TIMEOUT  => 503,
        default                       => 500,
    };
}
```

### Release Checklist (for `sbuelow/pami` fork)

1. Apply the two-file diff to the `main` branch
2. Tag `v2.1.0`:
   ```bash
   git tag -a v2.1.0 -m "Add ClientException error code constants"
   git push origin v2.1.0
   ```
3. In the application, update `framework/composer.json`:
   ```json
   "sbuelow/pami": "^2.1"
   ```
4. Run `composer update sbuelow/pami`

---

## Other Potential PAMI Extensions

These are ideas for future PAMI improvement, not committed plans.

### 1. Event Parser Flexibility

The current event parser in `Message.php` is strict about Asterisk's response format. If Asterisk sends unexpected whitespace or ordering, parsing fails silently. Adding an `EventParserInterface` would allow the application to register a custom parser for non-standard Asterisk builds (e.g. FreePBX).

### 2. Connection Pooling

Currently each `open()` → `close()` cycle creates a fresh socket. For an API server handling many requests, this is wasteful. A connection pool (`PamiPool`) could hold persistent connections keyed by host:port, reusing them across requests and reconnecting on failure.

### 3. Action Queue / Promise Interface

The current `send()` method blocks until the response is received (or times out). An async action queue with response promises would allow:
- Sending multiple actions without waiting for each response
- Parallel action execution
- Better performance under high concurrency

```php
$future = $pami->enqueue(new OriginateAction(...));
// ... do other work ...
$response = $future->wait(); // non-blocking if response already arrived
```

### 4. Event Subscription by ActionID

Currently `getRelated($message)` matches the most recent response by ActionID. For long-running actions (e.g. Originate with async), there's no clean way to correlate later events back to the original action. Adding callback-based event matching would enable:

```php
$pami->onResponseTo(new OriginateAction(...), function($response) {
    // matched by ActionID
});
```

### 5. TLS Support

The socket connection uses `stream_socket_client()` with a plain TCP `tcp://` scheme. Adding `ssl://` and optional certificate verification would allow secure AMI connections when Asterisk is configured with `tlsenable=yes` in `manager.conf`.

### 6. Swoole / ReactPHP Adapter

An optional adapter for [ReactPHP](https://reactphp.org/) or [Swoole](https://www.swoole.co.uk/) event loops would make PAMI naturally async without blocking PHP-FPM workers.

---

## Notes

- The `ClientException` error codes are **internal to the library**. The HTTP boundary contract (`401`, `503`, `500`, etc.) is defined in `Server.php`'s `classifyAmiError()` and never changed.
- The current string-matching approach (`str_contains`) is a valid fallback if you choose not to update the PAMI fork — it works reliably on the known message patterns.
- For the frontend to consume the error details, the backend responds with `{ status: string, code: number, message: string }` and HTTP status matching the `code` field. The frontend's `ApiError` type may need extension to accommodate optional fields (`amiStatus`, `amiMessage`).

## References

- `src/PAMI/Client/Exception/ClientException.php`
- `src/PAMI/Client/Impl/ClientImpl.php`

