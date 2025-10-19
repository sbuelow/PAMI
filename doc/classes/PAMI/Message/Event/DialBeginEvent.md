
Event triggered when a dial action has started.

PHP Version 5

***

* Full name: `\PAMI\Message\Event\DialBeginEvent`
* Parent class: [`\PAMI\Message\Event\EventMessage`](./EventMessage)

**See Also:**

* http://marcelog.github.com/PAMI/

## Methods

### getPrivilege

Returns key: 'Privilege'.

```php
public getPrivilege(): string
```

***

### getChannel

Returns key: 'Channel'.

```php
public getChannel(): string
```

***

### getChannelState

Returns key: 'ChannelState'.

```php
public getChannelState(): string
```

***

### getChannelStateDesc

Returns key: 'ChannelStateDesc'.

```php
public getChannelStateDesc(): string
```

***

### getCallerIDNum

Returns key: 'CallerIDNum'.

```php
public getCallerIDNum(): string
```

***

### getCallerIDName

Returns key: 'CallerIDName'.

```php
public getCallerIDName(): string
```

***

### getConnectedLineNum

Returns key: 'ConnectedLineNum'.

```php
public getConnectedLineNum(): string
```

***

### getConnectedLineName

Returns key: 'ConnectedLineName'.

```php
public getConnectedLineName(): string
```

***

### getAccountCode

Returns key: 'AccountCode'.

```php
public getAccountCode(): string
```

***

### getContext

Returns key: 'Context'.

```php
public getContext(): string
```

***

### getExten

Returns key: 'Exten'.

```php
public getExten(): string
```

***

### getPriority

Returns key: 'Priority'.

```php
public getPriority(): string
```

***

### getUniqueid

Returns key: 'Uniqueid'.

```php
public getUniqueid(): string
```

***

### getDestChannel

Returns key: 'DestChannel'.

```php
public getDestChannel(): string
```

***

### getDestChannelState

Returns key: 'DestChannelState'.

```php
public getDestChannelState(): string
```

***

### getDestChannelStateDesc

Returns key: 'DestChannelStateDesc'.

```php
public getDestChannelStateDesc(): string
```

***

### getDestCallerIDNum

Returns key: 'DestCallerIDNum'.

```php
public getDestCallerIDNum(): string
```

***

### getDestCallerIDName

Returns key: 'DestCallerIDName'.

```php
public getDestCallerIDName(): string
```

***

### getDestConnectedLineNum

Returns key: 'DestConnectedLineNum'.

```php
public getDestConnectedLineNum(): string
```

***

### getDestConnectedLineName

Returns key: 'DestConnectedLineName'.

```php
public getDestConnectedLineName(): string
```

***

### getDestAccountCode

Returns key: 'DestAccountCode'.

```php
public getDestAccountCode(): string
```

***

### getDestContext

Returns key: 'DestContext'.

```php
public getDestContext(): string
```

***

### getDestExten

Returns key: 'DestExten'.

```php
public getDestExten(): string
```

***

### getDestPriority

Returns key: 'DestPriority'.

```php
public getDestPriority(): string
```

***

### getDestUniqueid

Returns key: 'DestUniqueid'.

```php
public getDestUniqueid(): string
```

***

### getDialStatus

Returns key: 'DialStatus'.

```php
public getDialStatus(): string
```

***

### getDialString

Returns key: 'DialString'.

```php
public getDialString(): string
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
public __construct(string $rawContent): void
```

**Parameters:**

| Parameter     | Type       | Description                            |
|---------------|------------|----------------------------------------|
| `$rawContent` | **string** | Original message as received from ami. |

***

### getEventList

Returns key 'EventList'. In respones, this will surely be a "start". In
events, should be a "complete".

```php
public getEventList(): string
```

***

### getRawContent

Returns the original message content without parsing.

```php
public getRawContent(): string
```

***

### getAllChannelVariables

Returns the channel variables for all reported channels.

```php
public getAllChannelVariables(): array
```

https://github.com/marcelog/PAMI/issues/85

The channel names will be lowercased.

***

### getChannelVariables

Returns the channel variables for the given channel.

```php
public getChannelVariables(string $channel = null): array
```

https://github.com/marcelog/PAMI/issues/85

**Parameters:**

| Parameter  | Type       | Description                                                                  |
|------------|------------|------------------------------------------------------------------------------|
| `$channel` | **string** | Channel name. If not given, will return variables
for the "current" channel. |

***

### getName

Returns key 'Event'.

```php
public getName(): string
```

***
