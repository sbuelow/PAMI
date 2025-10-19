
Event triggered when a channel is unmuted in a confbridge.

PHP Version 5

***

* Full name: `\PAMI\Message\Event\ConfbridgeUnmuteEvent`
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

### getConference

Returns key: 'Conference'.

```php
public getConference(): string
```

***

### getBridgeUniqueid

Returns key: 'BridgeUniqueid'.

```php
public getBridgeUniqueid(): string
```

***

### getBridgeType

Returns key: 'BridgeType'.

```php
public getBridgeType(): string
```

***

### getBridgeTechnology

Returns key: 'BridgeTechnology'.

```php
public getBridgeTechnology(): string
```

***

### getBridgeCreator

Returns key: 'BridgeCreator'.

```php
public getBridgeCreator(): string
```

***

### getBridgeName

Returns key: 'BridgeName'.

```php
public getBridgeName(): string
```

***

### getBridgeNumChannels

Returns key: 'BridgeNumChannels'.

```php
public getBridgeNumChannels(): string
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

### getLinkedid

Returns key: 'Linkedid'.

```php
public getLinkedid(): string
```

***

### getAdmin

Returns key: 'Admin'.

```php
public getAdmin(): string
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
