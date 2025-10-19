
A generic ami message, in-or-outbound.

PHP Version 5

***

* Full name: `\PAMI\Message\Message`
* This class is an **Abstract class**

**See Also:**

* http://marcelog.github.com/PAMI/

## Constants

| Constant | Visibility | Type   | Value      |
|----------|------------|--------|------------|
| `EOL`    | public     | string | "\r\n"     |
| `EOM`    | public     | string | "\r\n\r\n" |

## Properties

### lines

Message content, line by line. This is what it gets sent
or received literally.

```php
protected string[] $lines
```

***

### variables

Metadata. Message variables (key/value).

```php
protected string[] $variables
```

***

### keys

Metadata. Message "keys" i.e: Action: login

```php
protected string[] $keys
```

***

### createdDate

Created date (unix timestamp).

```php
protected int $createdDate
```

***

## Methods

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

### serializeVariable

Returns the string representation for an ami action variable.

```php
private serializeVariable(string $key, string $value): string
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$key`    | **string** |             |
| `$value`  | **string** |             |

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
public __construct(): void
```

***
