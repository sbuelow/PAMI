
Not all methods were implemented. For reference please check
http://open.voismart.it/index.php/VGSM_Manager_Interface

PHP Version 5

***

* Full name: `\PAMI\Message\Action\VGSMSMSTxAction`
* Parent class: [`\PAMI\Message\Action\ActionMessage`](./ActionMessage)

**See Also:**

* http://www.lionix.com/

## Methods

### setTo

Sets CellPhone Number . Mandatory

```php
public setTo(string $target): void
```

**Parameters:**

| Parameter | Type       | Description                                                               |
|-----------|------------|---------------------------------------------------------------------------|
| `$target` | **string** | phone to send SMS to. Sign + and Countr code is needed in some countries. |

***

### setContentType

Sets Content  Type. Optional

```php
public setContentType(string $contentType): void
```

**Parameters:**

| Parameter      | Type       | Description                                       |
|----------------|------------|---------------------------------------------------|
| `$contentType` | **string** | Content to use, default text/plain; charset=ASCII |

***

### setContentEncoding

Sets Content  Type Encoding.Optional

```php
public setContentEncoding(string $encoding): void
```

**Parameters:**

| Parameter   | Type       | Description                                       |
|-------------|------------|---------------------------------------------------|
| `$encoding` | **string** | Content to use, default text/plain; charset=ASCII |

***

### setMe

Sets Chip Id - It will use the chip_id provided.Optional

```php
public setMe(string $chipId): void
```

**Parameters:**

| Parameter | Type       | Description                                          |
|-----------|------------|------------------------------------------------------|
| `$chipId` | **string** | Chip Id to use format meX , eg. me0 for VGSM 2 cards |

***

### setContent

Sets $content  - Message to send. Mandatory

```php
public setContent(string $content): void
```

**Parameters:**

| Parameter  | Type       | Description                                 |
|------------|------------|---------------------------------------------|
| `$content` | **string** | Should be ASCII not utf8, no accents nada!. |

***

### setSmsClass

Sets X-SMS-Class  key. Optional

```php
public setSmsClass(mixed $class): void
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$class`  | **mixed** |             |

***

### setConcatRefId

Sets X-SMS-Concatenate-RefID . Optional. Should be set with
setConcatSeqNum and setConcatSeqNum

```php
public setConcatRefId(mixed $refid): void
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$refid`  | **mixed** |             |

***

### setConcatSeqNum

Sets X-SMS-Concatenate-Sequence-Number. Optional. Should be set with
setConcatSeqNum: setConcatTotalMsg

```php
public setConcatSeqNum(mixed $seqnum): void
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$seqnum` | **mixed** |             |

***

### setConcatTotalMsg

Sets X-SMS-Concatenate-Total-Messages. Optional. Should be set with
setConcatRefId and setConcatSeqNum

```php
public setConcatTotalMsg(mixed $totalmsg): void
```

**Parameters:**

| Parameter   | Type      | Description |
|-------------|-----------|-------------|
| `$totalmsg` | **mixed** |             |

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
