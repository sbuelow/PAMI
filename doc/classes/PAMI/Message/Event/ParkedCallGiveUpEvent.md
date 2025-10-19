
Event triggered when a channel leaves a parking lot because it hung up without being answered.

PHP Version 5

***

* Full name: `\PAMI\Message\Event\ParkedCallGiveUpEvent`
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

### getParkeeChannel

Returns key: 'ParkeeChannel'.

```php
public getParkeeChannel(): string
```

***

### getParkeeChannelState

Returns key: 'ParkeeChannelState'.

```php
public getParkeeChannelState(): string
```

***

### getParkeeChannelStateDesc

Returns key: 'ParkeeChannelStateDesc'.

```php
public getParkeeChannelStateDesc(): string
```

***

### getParkeeCallerIDNum

Returns key: 'ParkeeCallerIDNum'.

```php
public getParkeeCallerIDNum(): string
```

***

### getParkeeCallerIDName

Returns key: 'ParkeeCallerIDName'.

```php
public getParkeeCallerIDName(): string
```

***

### getParkeeConnectedLineNum

Returns key: 'ParkeeConnectedLineNum'.

```php
public getParkeeConnectedLineNum(): string
```

***

### getParkeeConnectedLineName

Returns key: 'ParkeeConnectedLineName'.

```php
public getParkeeConnectedLineName(): string
```

***

### getParkeeAccountCode

Returns key: 'ParkeeAccountCode'.

```php
public getParkeeAccountCode(): string
```

***

### getParkeeContext

Returns key: 'ParkeeContext'.

```php
public getParkeeContext(): string
```

***

### getParkeeExten

Returns key: 'ParkeeExten'.

```php
public getParkeeExten(): string
```

***

### getParkeePriority

Returns key: 'ParkeePriority'.

```php
public getParkeePriority(): string
```

***

### getParkeeUniqueid

Returns key: 'ParkeeUniqueid'.

```php
public getParkeeUniqueid(): string
```

***

### getParkerChannel

Returns key: 'ParkerChannel'.

```php
public getParkerChannel(): string
```

***

### getParkerChannelState

Returns key: 'ParkerChannelState'.

```php
public getParkerChannelState(): string
```

***

### getParkerChannelStateDesc

Returns key: 'ParkerChannelStateDesc'.

```php
public getParkerChannelStateDesc(): string
```

***

### getParkerCallerIDNum

Returns key: 'ParkerCallerIDNum'.

```php
public getParkerCallerIDNum(): string
```

***

### getParkerCallerIDName

Returns key: 'ParkerCallerIDName'.

```php
public getParkerCallerIDName(): string
```

***

### getParkerConnectedLineNum

Returns key: 'ParkerConnectedLineNum'.

```php
public getParkerConnectedLineNum(): string
```

***

### getParkerConnectedLineName

Returns key: 'ParkerConnectedLineName'.

```php
public getParkerConnectedLineName(): string
```

***

### getParkerAccountCode

Returns key: 'ParkerAccountCode'.

```php
public getParkerAccountCode(): string
```

***

### getParkerContext

Returns key: 'ParkerContext'.

```php
public getParkerContext(): string
```

***

### getParkerExten

Returns key: 'ParkerExten'.

```php
public getParkerExten(): string
```

***

### getParkerPriority

Returns key: 'ParkerPriority'.

```php
public getParkerPriority(): string
```

***

### getParkerUniqueid

Returns key: 'ParkerUniqueid'.

```php
public getParkerUniqueid(): string
```

***

### getParkerDialString

Returns key: 'ParkerDialString'.

```php
public getParkerDialString(): string
```

***

### getParkinglot

Returns key: 'Parkinglot'.

```php
public getParkinglot(): string
```

***

### getParkingSpace

Returns key: 'ParkingSpace'.

```php
public getParkingSpace(): string
```

***

### getParkingTimeout

Returns key: 'ParkingTimeout'.

```php
public getParkingTimeout(): string
```

***

### getParkingDuration

Returns key: 'ParkingDuration'.

```php
public getParkingDuration(): string
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
