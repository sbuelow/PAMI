
Agents action message.

PHP Version 5

***

* Full name: `\PAMI\Message\Action\AgentsAction`
* Parent class: [`\PAMI\Message\Action\ActionMessage`](./ActionMessage)

**See Also:**

* http://marcelog.github.com/PAMI/

## Methods

### __construct

Constructor.

```php
public __construct(): void
```

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
