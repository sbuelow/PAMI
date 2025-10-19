
UpdateConfig action message.

PHP Version 5

***

* Full name: `\PAMI\Message\Action\UpdateConfigAction`
* Parent class: [`\PAMI\Message\Action\ActionMessage`](./ActionMessage)

**See Also:**

* http://marcelog.github.com/PAMI/

## Properties

### counter

```php
protected static $counter
```

* This property is **static**.

***

## Methods

### __construct

Constructor.

```php
public __construct(): void
```

***

### setSrcFilename

Sets Src filename key.

```php
public setSrcFilename(string $filename): void
```

**Parameters:**

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$filename` | **string** | .           |

***

### setDstFilename

Sets Dst Filename key.

```php
public setDstFilename(string $filename): void
```

**Parameters:**

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$filename` | **string** | .           |

***

### setReload

Sets Reload key.

```php
public setReload(mixed $reload): void
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$reload` | **mixed** |             |

***

### setAction

Sets Action-XXXXXX key.

```php
public setAction(string $input): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$input`  | **string** | .           |

***

### setCat

Sets Cat-XXXXXX key.

```php
public setCat(mixed $input): void
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$input`  | **mixed** |             |

***

### setVar

Sets Var-XXXXXX key.

```php
public setVar(string $input): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$input`  | **string** | .           |

***

### setValue

Sets Value-XXXXXX key.

```php
public setValue(string $input): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$input`  | **string** | .           |

***

### setMatch

Sets Match-XXXXXX key.

```php
public setMatch(string $input): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$input`  | **string** | .           |

***

### setLine

Sets Line-XXXXXX key.

```php
public setLine(string $input): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$input`  | **string** | .           |

***

### getPaddedCounter

Returns the string representation for counter with leading zeroes in UpdateConfig action format.

```php
protected getPaddedCounter(): string
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
