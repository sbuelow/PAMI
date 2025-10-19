
On reception of an inbound SMS (SMS-DELIVERY) the message will also be
reported as a manager event, however, acknowledgment still relies on SMS
spooler to handle the message. This event is generated starting from 0.21.0

PHP Version 5

***

* Full name: `\PAMI\Message\Event\VgsmSmsRxEvent`
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

### getReceived

Returns key: 'Received'.

```php
public getReceived(): string
```

***

### getFrom

Returns key: 'From'.

```php
public getFrom(): string
```

***

### getSubject

Returns key: 'Subject'.

```php
public getSubject(): string
```

***

### getMimeVersion

Returns key: 'MIME-Version'.

```php
public getMimeVersion(): string
```

***

### getContentType

Returns key: 'Content-Type'.

```php
public getContentType(): string
```

***

### getContentEncoding

Returns key: 'Content-Transfer-Encoding'.

```php
public getContentEncoding(): string
```

***

### getDate

Returns key: 'Date'.

```php
public getDate(): string
```

***

### getContent

Returns key: 'Content'.

```php
public getContent(): string
```

***

### getMessageType

Returns key: 'X-SMS-Message-Type:'.

```php
public getMessageType(): string
```

***

### getSenderNP

Returns key: 'X-SMS-Sender-NP'.

```php
public getSenderNP(): string
```

***

### getSenderTON

Returns key: 'X-SMS-Sender-TON'.

```php
public getSenderTON(): string
```

***

### getSenderNumber

Returns key: 'X-SMS-Sender-Number'.

```php
public getSenderNumber(): string
```

***

### getSMCCNP

Returns key: 'X-SMS-SMCC-NP'.

```php
public getSMCCNP(): string
```

***

### getSMCCTON

Returns key: 'X-SMS-SMCC-TON'.

```php
public getSMCCTON(): string
```

***

### getSMCCNumber

Returns key: 'X-SMS-SMCC-Number'.

```php
public getSMCCNumber(): string
```

***

### getMoreMessagesToSend

Returns key: 'X-SMS-More-Messages-To-Send'.

```php
public getMoreMessagesToSend(): string
```

***

### getReplyPath

Returns key: 'X-SMS-Reply-Path'.

```php
public getReplyPath(): string
```

***

### getDataHeaderIndicator

Returns key: 'XX-SMS-User-Data-Header-Indicator'.

```php
public getDataHeaderIndicator(): string
```

***

### getStatusReportIndication

Returns key: 'X-SMS-Status-Report-Indication'.

```php
public getStatusReportIndication(): string
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
