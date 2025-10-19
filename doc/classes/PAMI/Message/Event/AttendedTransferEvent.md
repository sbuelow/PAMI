
Event triggered when an attended transfer is complete.

PHP Version 5

***

* Full name: `\PAMI\Message\Event\AttendedTransferEvent`
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

### getOrigTransfererChannel

Returns key: 'OrigTransfererChannel'.

```php
public getOrigTransfererChannel(): string
```

***

### getOrigTransfererChannelState

Returns key: 'OrigTransfererChannelState'.

```php
public getOrigTransfererChannelState(): string
```

***

### getOrigTransfererChannelStateDesc

Returns key: 'OrigTransfererChannelStateDesc'.

```php
public getOrigTransfererChannelStateDesc(): string
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

### getOrigTransfererCallerIDNum

Returns key: 'OrigTransfererCallerIDNum'.

```php
public getOrigTransfererCallerIDNum(): string
```

***

### getOrigTransfererCallerIDName

Returns key: 'OrigTransfererCallerIDName'.

```php
public getOrigTransfererCallerIDName(): string
```

***

### getOrigTransfererConnectedLineNum

Returns key: 'OrigTransfererConnectedLineNum'.

```php
public getOrigTransfererConnectedLineNum(): string
```

***

### getOrigTransfererConnectedLineName

Returns key: 'OrigTransfererConnectedLineName'.

```php
public getOrigTransfererConnectedLineName(): string
```

***

### getOrigTransfererAccountCode

Returns key: 'OrigTransfererAccountCode'.

```php
public getOrigTransfererAccountCode(): string
```

***

### getOrigTransfererContext

Returns key: 'OrigTransfererContext'.

```php
public getOrigTransfererContext(): string
```

***

### getOrigTransfererExten

Returns key: 'OrigTransfererExten'.

```php
public getOrigTransfererExten(): string
```

***

### getOrigTransfererPriority

Returns key: 'OrigTransfererPriority'.

```php
public getOrigTransfererPriority(): string
```

***

### getOrigTransfererUniqueid

Returns key: 'OrigTransfererUniqueid'.

```php
public getOrigTransfererUniqueid(): string
```

***

### getOrigBridgeUniqueid

Returns key: 'OrigBridgeUniqueid'.

```php
public getOrigBridgeUniqueid(): string
```

***

### getOrigBridgeType

Returns key: 'OrigBridgeType'.

```php
public getOrigBridgeType(): string
```

***

### getOrigBridgeTechnology

Returns key: 'OrigBridgeTechnology'.

```php
public getOrigBridgeTechnology(): string
```

***

### getOrigBridgeCreator

Returns key: 'OrigBridgeCreator'.

```php
public getOrigBridgeCreator(): string
```

***

### getOrigBridgeName

Returns key: 'OrigBridgeName'.

```php
public getOrigBridgeName(): string
```

***

### getOrigBridgeNumChannels

Returns key: 'OrigBridgeNumChannels'.

```php
public getOrigBridgeNumChannels(): string
```

***

### getSecondTransfererChannel

Returns key: 'SecondTransfererChannel'.

```php
public getSecondTransfererChannel(): string
```

***

### getSecondTransfererChannelState

Returns key: 'SecondTransfererChannelState'.

```php
public getSecondTransfererChannelState(): string
```

***

### getSecondTransfererChannelStateDesc

Returns key: 'SecondTransfererChannelStateDesc'.

```php
public getSecondTransfererChannelStateDesc(): string
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

### getSecondTransfererCallerIDNum

Returns key: 'SecondTransfererCallerIDNum'.

```php
public getSecondTransfererCallerIDNum(): string
```

***

### getSecondTransfererCallerIDName

Returns key: 'SecondTransfererCallerIDName'.

```php
public getSecondTransfererCallerIDName(): string
```

***

### getSecondTransfererConnectedLineNum

Returns key: 'SecondTransfererConnectedLineNum'.

```php
public getSecondTransfererConnectedLineNum(): string
```

***

### getSecondTransfererConnectedLineName

Returns key: 'SecondTransfererConnectedLineName'.

```php
public getSecondTransfererConnectedLineName(): string
```

***

### getSecondTransfererAccountCode

Returns key: 'SecondTransfererAccountCode'.

```php
public getSecondTransfererAccountCode(): string
```

***

### getSecondTransfererContext

Returns key: 'SecondTransfererContext'.

```php
public getSecondTransfererContext(): string
```

***

### getSecondTransfererExten

Returns key: 'SecondTransfererExten'.

```php
public getSecondTransfererExten(): string
```

***

### getSecondTransfererPriority

Returns key: 'SecondTransfererPriority'.

```php
public getSecondTransfererPriority(): string
```

***

### getSecondTransfererUniqueid

Returns key: 'SecondTransfererUniqueid'.

```php
public getSecondTransfererUniqueid(): string
```

***

### getSecondBridgeUniqueid

Returns key: 'SecondBridgeUniqueid'.

```php
public getSecondBridgeUniqueid(): string
```

***

### getSecondBridgeType

Returns key: 'SecondBridgeType'.

```php
public getSecondBridgeType(): string
```

***

### getSecondBridgeTechnology

Returns key: 'SecondBridgeTechnology'.

```php
public getSecondBridgeTechnology(): string
```

***

### getSecondBridgeCreator

Returns key: 'SecondBridgeCreator'.

```php
public getSecondBridgeCreator(): string
```

***

### getSecondBridgeName

Returns key: 'SecondBridgeName'.

```php
public getSecondBridgeName(): string
```

***

### getSecondBridgeNumChannels

Returns key: 'SecondBridgeNumChannels'.

```php
public getSecondBridgeNumChannels(): string
```

***

### getDestType

Returns key: 'DestType'.

```php
public getDestType(): string
```

DestType - Indicates the method by which the attended transfer completed.

Bridge - The transfer was accomplished by merging two bridges into one.
App - The transfer was accomplished by having a channel or bridge run a dialplan application.
Link - The transfer was accomplished by linking two bridges together using a local channel pair.
Threeway - The transfer was accomplished by placing all parties into a threeway call.
Fail - The transfer failed.

***

### getDestBridgeUniqueid

Returns key: 'DestBridgeUniqueid'.

```php
public getDestBridgeUniqueid(): string
```

***

### getDestApp

Returns key: 'DestApp'.

```php
public getDestApp(): string
```

***

### getLocalOneChannel

Returns key: 'LocalOneChannel'.

```php
public getLocalOneChannel(): string
```

***

### getLocalOneChannelState

Returns key: 'LocalOneChannelState'.

```php
public getLocalOneChannelState(): string
```

***

### getLocalOneChannelStateDesc

Returns key: 'LocalOneChannelStateDesc'.

```php
public getLocalOneChannelStateDesc(): string
```

***

### getLocalOneCallerIDNum

Returns key: 'LocalOneCallerIDNum'.

```php
public getLocalOneCallerIDNum(): string
```

***

### getLocalOneCallerIDName

Returns key: 'LocalOneCallerIDName'.

```php
public getLocalOneCallerIDName(): string
```

***

### getLocalOneConnectedLineNum

Returns key: 'LocalOneConnectedLineNum'.

```php
public getLocalOneConnectedLineNum(): string
```

***

### getLocalOneConnectedLineName

Returns key: 'LocalOneConnectedLineName'.

```php
public getLocalOneConnectedLineName(): string
```

***

### getLocalOneAccountCode

Returns key: 'LocalOneAccountCode'.

```php
public getLocalOneAccountCode(): string
```

***

### getLocalOneContext

Returns key: 'LocalOneContext'.

```php
public getLocalOneContext(): string
```

***

### getLocalOneExten

Returns key: 'LocalOneExten'.

```php
public getLocalOneExten(): string
```

***

### getLocalOnePriority

Returns key: 'LocalOnePriority'.

```php
public getLocalOnePriority(): string
```

***

### getLocalOneUniqueid

Returns key: 'LocalOneUniqueid'.

```php
public getLocalOneUniqueid(): string
```

***

### getLocalTwoChannel

Returns key: 'LocalTwoChannel'.

```php
public getLocalTwoChannel(): string
```

***

### getLocalTwoChannelState

Returns key: 'LocalTwoChannelState'.

```php
public getLocalTwoChannelState(): string
```

***

### getLocalTwoChannelStateDesc

Returns key: 'LocalTwoChannelStateDesc'.

```php
public getLocalTwoChannelStateDesc(): string
```

***

### getLocalTwoCallerIDNum

Returns key: 'LocalTwoCallerIDNum'.

```php
public getLocalTwoCallerIDNum(): string
```

***

### getLocalTwoCallerIDName

Returns key: 'LocalTwoCallerIDName'.

```php
public getLocalTwoCallerIDName(): string
```

***

### getLocalTwoConnectedLineNum

Returns key: 'LocalTwoConnectedLineNum'.

```php
public getLocalTwoConnectedLineNum(): string
```

***

### getLocalTwoConnectedLineName

Returns key: 'LocalTwoConnectedLineName'.

```php
public getLocalTwoConnectedLineName(): string
```

***

### getLocalTwoAccountCode

Returns key: 'LocalTwoAccountCode'.

```php
public getLocalTwoAccountCode(): string
```

***

### getLocalTwoContext

Returns key: 'LocalTwoContext'.

```php
public getLocalTwoContext(): string
```

***

### getLocalTwoExten

Returns key: 'LocalTwoExten'.

```php
public getLocalTwoExten(): string
```

***

### getLocalTwoPriority

Returns key: 'LocalTwoPriority'.

```php
public getLocalTwoPriority(): string
```

***

### getLocalTwoUniqueid

Returns key: 'LocalTwoUniqueid'.

```php
public getLocalTwoUniqueid(): string
```

***

### getDestTransfererChannel

Returns key: 'DestTransfererChannel'.

```php
public getDestTransfererChannel(): string
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

***

### getTransfereeChannelStateDesc

Returns key: 'TransfereeChannelStateDesc'.

```php
public getTransfereeChannelStateDesc(): string
```

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
