
A generic response message from ami.

PHP Version 5

***

* Full name: `\PAMI\Message\Response\ResponseMessage`
* Parent class: [`\PAMI\Message\IncomingMessage`](../IncomingMessage)

**See Also:**

* http://marcelog.github.com/PAMI/

## Properties

### events

Child events.

```php
private \PAMI\Message\Event\EventMessage[] $events
```

***

### completed

Is this response completed? (with all its events).

```php
private bool $completed
```

***

## Methods

### __sleep

Serialize function.

```php
public __sleep(): string[]
```

***

### isComplete

True if this response is complete. A response is considered complete
if it's not a list OR it's a list with its last child event containing
an EventList = Complete.

```php
public isComplete(): bool
```

***

### addEvent

Adds an event to this response.

```php
public addEvent(\PAMI\Message\Event\EventMessage $event): void
```

**Parameters:**

| Parameter | Type                                 | Description         |
|-----------|--------------------------------------|---------------------|
| `$event`  | **\PAMI\Message\Event\EventMessage** | Child event to add. |

***

### getEvents

Returns all associated events for this response.

```php
public getEvents(): \PAMI\Message\Event\EventMessage[]
```

***

### isSuccess

Checks if the Response field has the word Error in it.

```php
public isSuccess(): bool
```

***

### isList

Returns true if this response contains the key EventList with the
word 'start' in it. Another way is to have a Message key, like:
Message: Result will follow

```php
public isList(): bool
```

***

### getMessage

Returns key: 'Privilege'.

```php
public getMessage(): string
```

***

### setActionId

Sets an action id. This should not be necessary, but asterisk sometimes
decides to not send the Response: or Event: headers.

```php
public setActionId(string $actionId): void
```

**Parameters:**

| Parameter   | Type       | Description   |
|-------------|------------|---------------|
| `$actionId` | **string** | New ActionId. |

***

### __construct

Constructor.

```php
public __construct(string $rawContent): void
```

**Parameters:**

| Parameter     | Type       | Description                           |
|---------------|------------|---------------------------------------|
| `$rawContent` | **string** | Literal message as received from ami. |

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
