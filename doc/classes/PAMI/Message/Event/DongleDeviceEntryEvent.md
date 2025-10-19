
Event triggered when getting a dongle device.

PHP Version 5

***

* Full name: `\PAMI\Message\Event\DongleDeviceEntryEvent`
* Parent class: [`\PAMI\Message\Event\EventMessage`](./EventMessage)

**See Also:**

* http://marcelog.github.com/PAMI/

## Methods

### getDevice

Returns key: 'Device'.

```php
public getDevice(): string
```

***

### getAudioSetting

Returns key: 'AudioSetting'.

```php
public getAudioSetting(): string
```

***

### getDataSetting

Returns key: 'DataSetting'.

```php
public getDataSetting(): string
```

***

### getIMEISetting

Returns key: 'IMEISetting'.

```php
public getIMEISetting(): string
```

***

### getIMSISetting

Returns key: 'IMSISetting'.

```php
public getIMSISetting(): string
```

***

### getChannelLanguage

Returns key: 'ChannelLanguage'.

```php
public getChannelLanguage(): string
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

### getGroup

Returns key: 'Group'.

```php
public getGroup(): string
```

***

### getRXGain

Returns key: 'RXGain'.

```php
public getRXGain(): string
```

***

### getTXGain

Returns key: 'TXGain'.

```php
public getTXGain(): string
```

***

### getU2DIAG

Returns key: 'U2DIAG'.

```php
public getU2DIAG(): string
```

***

### getUseCallingPres

Returns key: 'UseCallingPres'.

```php
public getUseCallingPres(): string
```

***

### getDefaultCallingPres

Returns key: 'DefaultCallingPres'.

```php
public getDefaultCallingPres(): string
```

***

### getAutoDeleteSMS

Returns key: 'AutoDeleteSMS'.

```php
public getAutoDeleteSMS(): string
```

***

### getDisableSMS

Returns key: 'DisableSMS'.

```php
public getDisableSMS(): string
```

***

### getResetDongle

Returns key: 'ResetDongle'.

```php
public getResetDongle(): string
```

***

### getSMSPDU

Returns key: 'SMSPDU'.

```php
public getSMSPDU(): string
```

***

### getCallWaitingSetting

Returns key: 'CallWaitingSetting'.

```php
public getCallWaitingSetting(): string
```

***

### getDTMF

Returns key: 'DTMF'.

```php
public getDTMF(): string
```

***

### getMinimalDTMFGap

Returns key: 'MinimalDTMFGap'.

```php
public getMinimalDTMFGap(): string
```

***

### getMinimalDTMFDuration

Returns key: 'MinimalDTMFDuration'.

```php
public getMinimalDTMFDuration(): string
```

***

### getMinimalDTMFInterval

Returns key: 'MinimalDTMFInterval'.

```php
public getMinimalDTMFInterval(): string
```

***

### getState

Returns key: 'State'.

```php
public getState(): string
```

***

### getAudioState

Returns key: 'AudioState'.

```php
public getAudioState(): string
```

***

### getDataState

Returns key: 'DataState'.

```php
public getDataState(): string
```

***

### getVoice

Returns key: 'Voice'.

```php
public getVoice(): string
```

***

### getSMS

Returns key: 'SMS'.

```php
public getSMS(): string
```

***

### getManufacturer

Returns key: 'Manufacturer'.

```php
public getManufacturer(): string
```

***

### getModel

Returns key: 'Model'.

```php
public getModel(): string
```

***

### getFirmware

Returns key: 'Firmware'.

```php
public getFirmware(): string
```

***

### getIMEIState

Returns key: 'IMEIState'.

```php
public getIMEIState(): string
```

***

### getIMSIState

Returns key: 'IMSIState'.

```php
public getIMSIState(): string
```

***

### getGSMRegistrationStatus

Returns key: 'GSMRegistrationStatus'.

```php
public getGSMRegistrationStatus(): string
```

***

### getRSSI

Returns key: 'RSSI'.

```php
public getRSSI(): string
```

***

### getMode

Returns key: 'Mode'.

```php
public getMode(): string
```

***

### getSubmode

Returns key: 'Submode'.

```php
public getSubmode(): string
```

***

### getProviderName

Returns key: 'ProviderName'.

```php
public getProviderName(): string
```

***

### getLocationAreaCode

Returns key: 'LocationAreaCode'.

```php
public getLocationAreaCode(): string
```

***

### getCellID

Returns key: 'CellID'.

```php
public getCellID(): string
```

***

### getSubscriberNumber

Returns key: 'SubscriberNumber'.

```php
public getSubscriberNumber(): string
```

***

### getSMSServiceCenter

Returns key: 'SMSServiceCenter'.

```php
public getSMSServiceCenter(): string
```

***

### getUseUCS2Encoding

Returns key: 'UseUCS2Encoding'.

```php
public getUseUCS2Encoding(): string
```

***

### getUSSDUse7BitEncoding

Returns key: 'USSDUse7BitEncoding'.

```php
public getUSSDUse7BitEncoding(): string
```

***

### getUSSDUseUCS2Decoding

Returns key: 'USSDUseUCS2Decoding'.

```php
public getUSSDUseUCS2Decoding(): string
```

***

### getTasksInQueue

Returns key: 'TasksInQueue'.

```php
public getTasksInQueue(): string
```

***

### getCommandsInQueue

Returns key: 'CommandsInQueue'.

```php
public getCommandsInQueue(): string
```

***

### getCallWaitingState

Returns key: 'CallWaitingState'.

```php
public getCallWaitingState(): string
```

***

### getCurrentDeviceState

Returns key: 'CurrentDeviceState'.

```php
public getCurrentDeviceState(): string
```

***

### getDesiredDeviceState

Returns key: 'DesiredDeviceState'.

```php
public getDesiredDeviceState(): string
```

***

### getCallsChannels

Returns key: 'CallsChannels'.

```php
public getCallsChannels(): string
```

***

### getActive

Returns key: 'Active'.

```php
public getActive(): string
```

***

### getHeld

Returns key: 'Held'.

```php
public getHeld(): string
```

***

### getDialing

Returns key: 'Dialing'.

```php
public getDialing(): string
```

***

### getAlerting

Returns key: 'Alerting'.

```php
public getAlerting(): string
```

***

### getIncoming

Returns key: 'Incoming'.

```php
public getIncoming(): string
```

***

### getWaiting

Returns key: 'Waiting'.

```php
public getWaiting(): string
```

***

### getReleasing

Returns key: 'Releasing'.

```php
public getReleasing(): string
```

***

### getInitializing

Returns key: 'Initializing'.

```php
public getInitializing(): string
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
