
Event triggered when issuing a VoicemailUsersList action.

PHP Version 5

***

* Full name: `\PAMI\Message\Event\VoicemailUserEntryEvent`
* Parent class: [`\PAMI\Message\Event\EventMessage`](./EventMessage)

**See Also:**

* http://marcelog.github.com/PAMI/

## Methods

### getNewMessageCount

Returns key: 'NewMessageCount'.

```php
public getNewMessageCount(): string
```

***

### getMaxMessageLength

Returns key: 'MaxMessageLength'.

```php
public getMaxMessageLength(): string
```

***

### getMaxMessageCount

Returns key: 'MaxMessageCount'.

```php
public getMaxMessageCount(): string
```

***

### getCallOperator

Returns key: 'CallOperator'.

```php
public getCallOperator(): string
```

***

### getCanReview

Returns key: 'CanReview'.

```php
public getCanReview(): string
```

***

### getVolumeGain

Returns key: 'VolumeGain'.

```php
public getVolumeGain(): string
```

***

### getDeleteMessage

Returns key: 'DeleteMessage'.

```php
public getDeleteMessage(): string
```

***

### getAttachmentFormat

Returns key: 'AttachmentFormat'.

```php
public getAttachmentFormat(): string
```

***

### getAttachMessage

Returns key: 'AttachMessage'.

```php
public getAttachMessage(): string
```

***

### getSayCID

Returns key: 'SayCID'.

```php
public getSayCID(): string
```

***

### getSayEnvelope

Returns key: 'SayEnvelope'.

```php
public getSayEnvelope(): string
```

***

### getSayDurationMin

Returns key: 'SayDurationMin'.

```php
public getSayDurationMin(): string
```

***

### getExitContext

Returns key: 'ExitContext'.

```php
public getExitContext(): string
```

***

### getUniqueID

Returns key: 'UniqueID'.

```php
public getUniqueID(): string
```

***

### getDialOut

Returns key: 'DialOut'.

```php
public getDialOut(): string
```

***

### getCallback

Returns key: 'Callback'.

```php
public getCallback(): string
```

***

### getTimezone

Returns key: 'Timezone'.

```php
public getTimezone(): string
```

***

### getLanguage

Returns key: 'Language'.

```php
public getLanguage(): string
```

***

### getMailCommand

Returns key: 'MailCommand'.

```php
public getMailCommand(): string
```

***

### getServerEmail

Returns key: 'ServerEmail'.

```php
public getServerEmail(): string
```

***

### getPager

Returns key: 'Pager'.

```php
public getPager(): string
```

***

### getEmail

Returns key: 'Email'.

```php
public getEmail(): string
```

***

### getFullname

Returns key: 'Fullname'.

```php
public getFullname(): string
```

***

### getVoicemailBox

Returns key: 'VoicemailBox'.

```php
public getVoicemailBox(): string
```

***

### getVoicemailContext

Returns key: 'VmContext'.

```php
public getVoicemailContext(): string
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
