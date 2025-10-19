
Interface for an ami client.

PHP Version 5

***

* Full name: `\PAMI\Client\IClient`

**See Also:**

* http://marcelog.github.com/PAMI/

## Methods

### open

Opens a tcp connection to ami.

```php
public open(): void
```

**Throws:**

- [`ClientException`](./Exception/ClientException)

***

### process

Main processing loop. Also called from send(), you should call this in
your own application in order to continue reading events and responses
from ami.

```php
public process(): void
```

***

### registerEventListener

Registers the given listener so it can receive events. Returns the generated
id for this new listener. You can pass in a an IEventListener, a Closure,
and an array containing the object and name of the method to invoke. Can specify
an optional predicate to invoke before calling the callback.

```php
public registerEventListener(mixed $listener, \PAMI\Client\Closure|null $predicate = null): string
```

**Parameters:**

| Parameter    | Type                           | Description |
|--------------|--------------------------------|-------------|
| `$listener`  | **mixed**                      |             |
| `$predicate` | **\PAMI\Client\Closure\|null** |             |

***

### unregisterEventListener

Unregisters an event listener.

```php
public unregisterEventListener(string $listenerId): void
```

**Parameters:**

| Parameter     | Type       | Description                               |
|---------------|------------|-------------------------------------------|
| `$listenerId` | **string** | The id returned by registerEventListener. |

***

### close

Closes the connection to ami.

```php
public close(): void
```

***

### send

Sends a message to ami.

```php
public send(\PAMI\Message\OutgoingMessage $message): \PAMI\Message\Response\ResponseMessage
```

**Parameters:**

| Parameter  | Type                              | Description      |
|------------|-----------------------------------|------------------|
| `$message` | **\PAMI\Message\OutgoingMessage** | Message to send. |

**Throws:**

- [`ClientException`](./Exception/ClientException)

**See Also:**

* \PAMI\Client\ClientImpl::send()

***

### setLogger

Sets the logger implementation.

```php
public setLogger(\PAMI\Client\Psr\Log\LoggerInterface $logger): void
```

**Parameters:**

| Parameter | Type                                     | Description     |
|-----------|------------------------------------------|-----------------|
| `$logger` | **\PAMI\Client\Psr\Log\LoggerInterface** | The PSR3-Logger |

***
