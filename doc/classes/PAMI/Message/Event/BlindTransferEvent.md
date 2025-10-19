
Event triggered when a blind transfer is complete.

PHP Version 5

***

* Full name: `\PAMI\Message\Event\BlindTransferEvent`
* Parent class: [`\PAMI\Message\Event\EventMessage`](./EventMessage)

**See Also:**

* http://marcelog.github.com/PAMI/

## Constants

| Constant               | Visibility | Type | Value           |
|------------------------|------------|------|-----------------|
| `RESULT_FAIL`          | public     |      | 'Fail'          |
| `RESULT_INVALID`       | public     |      | 'Invalid'       |
| `RESULT_NOT_PERMITTED` | public     |      | 'Not Permitted' |
| `RESULT_SUCCESS`       | public     |      | 'Success'       |

## Methods

### getPrivilege

Returns key: 'Privilege'.

```php
public getPrivilege(): string
```

***

### getResult

Returns key: 'Result'.

```php
public getResult(): string
```

Result - Indicates if the transfer was successful or if it failed.

- Fail - An internal error occurred.
- Invalid - Invalid configuration for transfer (e.g. Not bridged)
- Not Permitted - Bridge does not permit transfers
- Success - Transfer completed successfully

***

### getTransfererChannel

Returns key: 'TransfererChannel'.

```php
public getTransfererChannel(): string
```

***

### getTransfererChannelState

Returns key: 'TransfererChannelState'.

```php
public getTransfererChannelState(): string
```

TransfererChannelState - A numeric code for the channel's current state, related to TransfererChannelStateDesc

***

### getTransfererChannelStateDesc

Returns key: 'TransfererChannelStateDesc'.

```php
public getTransfererChannelStateDesc(): string
```

Down
Rsrvd
OffHook
Dialing
Ring
Ringing
Up
Busy
Dialing Offhook
Pre-ring
Unknown

***

### getTransfererCallerIDNum

Returns key: 'TransfererCallerIDNum'.

```php
public getTransfererCallerIDNum(): string
```

***

### getTransfererCallerIDName

Returns key: 'TransfererCallerIDName'.

```php
public getTransfererCallerIDName(): string
```

***

### getTransfererConnectedLineNum

Returns key: 'TransfererConnectedLineNum'.

```php
public getTransfererConnectedLineNum(): string
```

***

### getTransfererConnectedLineName

Returns key: 'TransfererConnectedLineName'.

```php
public getTransfererConnectedLineName(): string
```

***

### getTransfererAccountCode

Returns key: 'TransfererAccountCode'.

```php
public getTransfererAccountCode(): string
```

***

### getTransfererContext

Returns key: 'TransfererContext'.

```php
public getTransfererContext(): string
```

***

### getTransfererExten

Returns key: 'TransfererExten'.

```php
public getTransfererExten(): string
```

***

### getTransfererPriority

Returns key: 'TransfererPriority'.

```php
public getTransfererPriority(): string
```

***

### getTransfererUniqueid

Returns key: 'TransfererUniqueid'.

```php
public getTransfererUniqueid(): string
```

***

### getTransfereeChannel

Returns key: 'TransfereeChannel'.

```php
public getTransfereeChannel(): string
```

***

### getTransfereeChannelState

Returns key: 'TransfereeChannelState'.

```php
public getTransfereeChannelState(): string
```

TransfereeChannelState - A numeric code for the channel's current state, related to TransfereeChannelStateDesc

***

### getTransfereeChannelStateDesc

Returns key: 'TransfereeChannelStateDesc'.

```php
public getTransfereeChannelStateDesc(): string
```

Down
Rsrvd
OffHook
Dialing
Ring
Ringing
Up
Busy
Dialing Offhook
Pre-ring
Unknown

***

### getTransfereeCallerIDNum

Returns key: 'TransfereeCallerIDNum'.

```php
public getTransfereeCallerIDNum(): string
```

***

### getTransfereeCallerIDName

Returns key: 'TransfereeCallerIDName'.

```php
public getTransfereeCallerIDName(): string
```

***

### getTransfereeConnectedLineNum

Returns key: 'TransfereeConnectedLineNum'.

```php
public getTransfereeConnectedLineNum(): string
```

***

### getTransfereeConnectedLineName

Returns key: 'TransfereeConnectedLineName'.

```php
public getTransfereeConnectedLineName(): string
```

***

### getTransfereeAccountCode

Returns key: 'TransfereeAccountCode'.

```php
public getTransfereeAccountCode(): string
```

***

### getTransfereeContext

Returns key: 'TransfereeContext'.

```php
public getTransfereeContext(): string
```

***

### getTransfereeExten

Returns key: 'TransfereeExten'.

```php
public getTransfereeExten(): string
```

***

### getTransfereePriority

Returns key: 'TransfereePriority'.

```php
public getTransfereePriority(): string
```

***

### getTransfereeUniqueid

Returns key: 'TransfereeUniqueid'.

```php
public getTransfereeUniqueid(): string
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

BridgeType - The type of bridge

***

### getBridgeTechnology

Returns key: 'BridgeTechnology'.

```php
public getBridgeTechnology(): string
```

BridgeTechnology - Technology in use by the bridge

***

### getBridgeCreator

Returns key: 'BridgeCreator'.

```php
public getBridgeCreator(): string
```

BridgeCreator - Entity that created the bridge if applicable

***

### getBridgeName

Returns key: 'BridgeName'.

```php
public getBridgeName(): string
```

BridgeName - Name used to refer to the bridge by its BridgeCreator if applicable

***

### getBridgeNumChannels

Returns key: 'BridgeNumChannels'.

```php
public getBridgeNumChannels(): string
```

BridgeNumChannels - Number of channels in the bridge

***

### getIsExternal

Returns key: 'IsExternal'.

```php
public getIsExternal(): string
```

IsExternal - Indicates if the transfer was performed outside of Asterisk.
For instance, a channel protocol native transfer is external. A DTMF transfer is internal.

Yes
No

***

### isExternal

Indicates if the transfer was performed outside of Asterisk.

```php
public isExternal(): bool
```

For instance, a channel protocol native transfer is external. A DTMF transfer is internal.

***

### getContext

Returns key: 'Context'.

```php
public getContext(): string
```

Context - Destination context for the blind transfer.

***

### getExtension

Returns key: 'Extension'.

```php
public getExtension(): string
```

Extension - Destination extension for the blind transfer.

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
