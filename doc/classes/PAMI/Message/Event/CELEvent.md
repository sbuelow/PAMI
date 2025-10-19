
Event triggered when a CEL log message is generated

PHP Version 5

***

* Full name: `\PAMI\Message\Event\CELEvent`
* Parent class: [`\PAMI\Message\Event\EventMessage`](./EventMessage)

**See Also:**

* http://marcelog.github.com/PAMI/

## Methods

### getAMAFlags

Returns key: 'AMAFlags'.

```php
public getAMAFlags(): string
```

***

### getAccountCode

Returns key: 'AccountCode'.

```php
public getAccountCode(): string
```

***

### getAppData

Returns key: 'AppData'.

```php
public getAppData(): string
```

***

### getApplication

Returns key: 'Application'.

```php
public getApplication(): string
```

***

### getCallerIDani

Returns key: 'CallerIDani'.

```php
public getCallerIDani(): string
```

***

### getCallerIDdnid

Returns key: 'CallerIDdnid'.

```php
public getCallerIDdnid(): string
```

***

### getCallerIDname

Returns key: 'CallerIDname'.

```php
public getCallerIDname(): string
```

***

### getCallerIDnum

Returns key: 'CallerIDnum'.

```php
public getCallerIDnum(): string
```

***

### getCallerIDrdnis

Returns key: 'CallerIDrdnis'.

```php
public getCallerIDrdnis(): string
```

***

### getChannel

Returns key: 'Channel'.

```php
public getChannel(): string
```

***

### getContext

Returns key: 'Context'.

```php
public getContext(): string
```

***

### getEvent

Returns key: 'Event'.

```php
public getEvent(): string
```

***

### getEventName

Returns key: 'EventName'.

```php
public getEventName(): string
```

***

### getEventTime

Returns key: 'EventTime'.

```php
public getEventTime(): string
```

***

### getExten

Returns key: 'Exten'.

```php
public getExten(): string
```

***

### getExtra

Returns key: 'Extra'.

```php
public getExtra(): string
```

***

### getLinkedID

Returns key: 'LinkedID'.

```php
public getLinkedID(): string
```

***

### getPeer

Returns key: 'Peer'.

```php
public getPeer(): string
```

***

### getPeerAccount

Returns key: 'PeerAccount'.

```php
public getPeerAccount(): string
```

***

### getPrivilege

Returns key: 'Privilege'.

```php
public getPrivilege(): string
```

***

### getTimestamp

Returns key: 'Timestamp'.

```php
public getTimestamp(): string
```

***

### getUniqueID

Returns key: 'UniqueID'.

```php
public getUniqueID(): string
```

***

### getUserfield

Returns key: 'Userfield'.

```php
public getUserfield(): string
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
