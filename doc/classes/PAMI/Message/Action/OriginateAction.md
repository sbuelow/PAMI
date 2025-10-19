
Originate action message.

PHP Version 5

***

* Full name: `\PAMI\Message\Action\OriginateAction`
* Parent class: [`\PAMI\Message\Action\ActionMessage`](./ActionMessage)

**See Also:**

* http://marcelog.github.com/PAMI/

## Methods

### setExtension

Sets Exten key.

```php
public setExtension(string $extension): void
```

**Parameters:**

| Parameter    | Type       | Description                                       |
|--------------|------------|---------------------------------------------------|
| `$extension` | **string** | Extension to use (requires Context and Priority). |

***

### setContext

Sets Context key.

```php
public setContext(string $context): void
```

**Parameters:**

| Parameter  | Type       | Description                                   |
|------------|------------|-----------------------------------------------|
| `$context` | **string** | Context to use (requires Exten and Priority). |

***

### setPriority

Sets Priority key.

```php
public setPriority(string $priority): void
```

**Parameters:**

| Parameter   | Type       | Description                                   |
|-------------|------------|-----------------------------------------------|
| `$priority` | **string** | Priority to use (requires Exten and Context). |

***

### setApplication

Sets Application key.

```php
public setApplication(string $application): void
```

**Parameters:**

| Parameter      | Type       | Description             |
|----------------|------------|-------------------------|
| `$application` | **string** | Application to execute. |

***

### setData

Sets Data key.

```php
public setData(string $data): void
```

**Parameters:**

| Parameter | Type       | Description                         |
|-----------|------------|-------------------------------------|
| `$data`   | **string** | Data to use (requires Application). |

***

### setTimeout

Sets Timeout key.

```php
public setTimeout(int $timeout): void
```

**Parameters:**

| Parameter  | Type    | Description                                       |
|------------|---------|---------------------------------------------------|
| `$timeout` | **int** | How long to wait for call to be answered (in ms). |

***

### setCallerId

Sets CallerID key.

```php
public setCallerId(string $clid): void
```

**Parameters:**

| Parameter | Type       | Description                                  |
|-----------|------------|----------------------------------------------|
| `$clid`   | **string** | Caller ID to be set on the outgoing channel. |

***

### setAccount

Sets Account key.

```php
public setAccount(mixed $account): void
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$account` | **mixed** |             |

***

### setAsync

Sets Async key.

```php
public setAsync(bool $async): void
```

**Parameters:**

| Parameter | Type     | Description                       |
|-----------|----------|-----------------------------------|
| `$async`  | **bool** | Set to true for fast origination. |

***

### setCodecs

Sets Codecs key.

```php
public setCodecs(string[] $codecs): void
```

**Parameters:**

| Parameter | Type         | Description                          |
|-----------|--------------|--------------------------------------|
| `$codecs` | **string[]** | List of codecs to use for this call. |

***

### __construct

Constructor.

```php
public __construct(string $channel): void
```

**Parameters:**

| Parameter  | Type       | Description         |
|------------|------------|---------------------|
| `$channel` | **string** | Channel to call to. |

***

## Inherited methods

### __sleep

Serialize function.

```php
public __sleep(): string[]
```

***

### getCreatedDate

Returns created date.

```php
public getCreatedDate(): int
```

***

### setVariable

Adds a variable to this message.

```php
public setVariable(string $key, string $value): void
```

**Parameters:**

| Parameter | Type       | Description     |
|-----------|------------|-----------------|
| `$key`    | **string** | Variable name.  |
| `$value`  | **string** | Variable value. |

***

### getVariable

Returns a variable by name.

```php
public getVariable(string $key): string
```

**Parameters:**

| Parameter | Type       | Description    |
|-----------|------------|----------------|
| `$key`    | **string** | Variable name. |

***

### setKey

Adds a variable to this message.

```php
protected setKey(string $key, string $value): void
```

**Parameters:**

| Parameter | Type       | Description             |
|-----------|------------|-------------------------|
| `$key`    | **string** | Key name (i.e: Action). |
| `$value`  | **string** | Key value.              |

***

### getKey

Returns a key by name.

```php
public getKey(string $key): string
```

**Parameters:**

| Parameter | Type       | Description             |
|-----------|------------|-------------------------|
| `$key`    | **string** | Key name (i.e: Action). |

***

### getKeys

Returns all keys for this message.

```php
public getKeys(): string[]
```

***

### getVariables

Returns all variabels for this message.

```php
public getVariables(): string[]
```

***

### finishMessage

Returns the end of message token appended to the end of a given message.

```php
protected finishMessage(mixed $message): string
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$message` | **mixed** |             |

***

### serialize

Gives a string representation for this message, ready to be sent to
ami.

```php
public serialize(): string
```

***

### getActionID

Returns key: 'ActionID'.

```php
public getActionID(): string
```

***

### __construct

Constructor.

```php
public __construct(string $what): void
```

**Parameters:**

| Parameter | Type       | Description     |
|-----------|------------|-----------------|
| `$what`   | **string** | Action command. |

***

### setActionID

Sets Action ID.

```php
public setActionID(mixed $actionID): void
```

The ActionID can be at most 69 characters long, according to


- **See:** .

Therefore we'll throw an exception when the ActionID is too long.

**Parameters:**

| Parameter   | Type      | Description                                |
|-------------|-----------|--------------------------------------------|
| `$actionID` | **mixed** | The Action ID to have this action known by |

**Throws:**

When the ActionID is more then 69 characters long
- [`PAMIException`](../../Exception/PAMIException)

***
