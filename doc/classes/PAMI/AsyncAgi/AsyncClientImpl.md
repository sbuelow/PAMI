
An AGI client implementation.

PHP Version 5

***

* Full name: `\PAMI\AsyncAgi\AsyncClientImpl`
* Parent class: [`AbstractClient`](../../PAGI/Client/AbstractClient)
* This class implements:
  [`\PAMI\Listener\IEventListener`](../Listener/IEventListener)

**See Also:**

* http://marcelog.github.com/PAMI/

## Properties

### pamiClient

The pami client to be used.

```php
private \PAMI\Client\IClient $pamiClient
```

***

### asyncAgiEvent

The event that originated this async agi request.

```php
private \PAMI\Message\Event\AsyncAGIEvent $asyncAgiEvent
```

***

### channel

The channel that originated this async agi request.

```php
private string $channel
```

***

### listenerId

The listener id after registering with the pami client.

```php
private string $listenerId
```

***

### lastCommandId

Last CommandId issued, so we can track responses for agi commands.

```php
private string $lastCommandId
```

***

### lastAgiResult

Filled when an async agi event has been received, with command id equal
to the last command id sent.

```php
private string $lastAgiResult
```

***

## Methods

### handle

Handles pami events.

```php
public handle(\PAMI\Message\Event\EventMessage $event): void
```

**Parameters:**

| Parameter | Type                                 | Description |
|-----------|--------------------------------------|-------------|
| `$event`  | **\PAMI\Message\Event\EventMessage** |             |

***

### send

(non-PHPdoc)

```php
protected send(mixed $text): mixed
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$text`   | **mixed** |             |

**See Also:**

* \PAMI\AsyncAgi\ClientImpl::send()

***

### open

(non-PHPdoc)

```php
protected open(): mixed
```

**See Also:**

* \PAMI\AsyncAgi\ClientImpl::open()

***

### close

(non-PHPdoc)

```php
protected close(): mixed
```

**See Also:**

* \PAMI\AsyncAgi\ClientImpl::close()

***

### __construct

Constructor.

```php
public __construct(array $options = []): void
```

Note: The client accepts an array with options. The available options are

pamiClient => The PAMI client that will be used to run this async client.

environment => Environment as received by the AsyncAGI Event.

**Parameters:**

| Parameter  | Type      | Description          |
|------------|-----------|----------------------|
| `$options` | **array** | Optional properties. |

***
