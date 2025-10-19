
TCP Client implementation for AMI.

PHP Version 5

***

* Full name: `\PAMI\Client\Impl\ClientImpl`
* This class implements:
  [`\PAMI\Client\IClient`](../IClient)

**See Also:**

* http://marcelog.github.com/PAMI/

## Properties

### logger

PSR-3 logger.

```php
private \Psr\Log\LoggerInterface $logger
```

***

### host

Hostname

```php
private string $host
```

***

### port

TCP Port.

```php
private int $port
```

***

### user

Username

```php
private string $user
```

***

### pass

Password

```php
private string $pass
```

***

### cTimeout

Connection timeout, in seconds.

```php
private int $cTimeout
```

***

### scheme

Connection scheme, like tcp:// or tls://

```php
private string $scheme
```

***

### eventFactory

Event factory.

```php
private \PAMI\Message\Event\Factory\Impl\EventFactoryImpl $eventFactory
```

***

### rTimeout

R/W timeout, in milliseconds.

```php
private int $rTimeout
```

***

### socket

Our stream socket resource.

```php
private resource $socket
```

***

### context

Our stream context resource.

```php
private resource $context
```

***

### eventListeners

Our event listeners

```php
private \PAMI\Listener\IEventListener[] $eventListeners
```

***

### incomingQueue

The receiving queue.

```php
private \PAMI\Message\IncomingMessage[] $incomingQueue
```

***

### currentProcessingMessage

Our current received message. May be incomplete, will be completed
eventually with an EOM.

```php
private string $currentProcessingMessage
```

***

### lastActionId

This should not happen. Asterisk may send responses without a
corresponding ActionId.

```php
private string $lastActionId
```

***

### eventMask

Event mask to apply on login action.

```php
private string|null $eventMask
```

***

## Methods

### open

Opens a tcp connection to ami.

```php
public open(): void
```

**Throws:**

- [`ClientException`](../Exception/ClientException)

***

### registerEventListener

Registers the given listener so it can receive events. Returns the generated
id for this new listener. You can pass in a an IEventListener, a Closure,
and an array containing the object and name of the method to invoke. Can specify
an optional predicate to invoke before calling the callback.

```php
public registerEventListener(mixed $listener, \Closure|null $predicate = null): string
```

**Parameters:**

| Parameter    | Type               | Description |
|--------------|--------------------|-------------|
| `$listener`  | **mixed**          |             |
| `$predicate` | **\Closure\|null** |             |

***

### unregisterEventListener

Unregisters an event listener.

```php
public unregisterEventListener(string $listenerId): void
```

**Parameters:**

| Parameter     | Type       | Description                               |
|---------------|------------|-------------------------------------------|
| `$listenerId` | **string** | The id returned by registerEventListener. |

***

### getMessages

Reads a complete message over the stream until EOM.

```php
protected getMessages(): \string[]
```

**Throws:**

- [`ClientException`](../Exception/ClientException)

***

### process

Main processing loop. Also called from send(), you should call this in
your own application in order to continue reading events and responses
from ami.

```php
public process(): void
```

***

### findResponse

Tries to find an associated response for the given message.

```php
protected findResponse(\PAMI\Message\IncomingMessage $message): \PAMI\Message\Response\ResponseMessage
```

**Parameters:**

| Parameter  | Type                              | Description               |
|------------|-----------------------------------|---------------------------|
| `$message` | **\PAMI\Message\IncomingMessage** | Message sent by asterisk. |

***

### dispatch

Dispatchs the incoming message to a handler.

```php
protected dispatch(\PAMI\Message\IncomingMessage $message): void
```

**Parameters:**

| Parameter  | Type                              | Description          |
|------------|-----------------------------------|----------------------|
| `$message` | **\PAMI\Message\IncomingMessage** | Message to dispatch. |

***

### messageToResponse

Returns a ResponseMessage from a raw string that came from asterisk.

```php
private messageToResponse(string $msg): \PAMI\Message\Response\ResponseMessage
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$msg`    | **string** | Raw string. |

***

### messageToEvent

Returns a EventMessage from a raw string that came from asterisk.

```php
private messageToEvent(string $msg): \PAMI\Message\Event\EventMessage
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$msg`    | **string** | Raw string. |

***

### getRelated

Returns a message (response) related to the given message. This uses
the ActionID tag (key).

```php
protected getRelated(\PAMI\Message\OutgoingMessage $message): \PAMI\Message\IncomingMessage
```

**Parameters:**

| Parameter  | Type                              | Description |
|------------|-----------------------------------|-------------|
| `$message` | **\PAMI\Message\OutgoingMessage** |             |

***

### send

Sends a message to ami.

```php
public send(\PAMI\Message\OutgoingMessage $message): \PAMI\Message\Response\ResponseMessage
```

**Parameters:**

| Parameter  | Type                              | Description      |
|------------|-----------------------------------|------------------|
| `$message` | **\PAMI\Message\OutgoingMessage** | Message to send. |

**Throws:**

- [`ClientException`](../Exception/ClientException)

**See Also:**

* \PAMI\Client\Impl\ClientImpl::send()

***

### close

Closes the connection to ami.

```php
public close(): void
```

***

### setLogger

Sets the logger implementation.

```php
public setLogger(\Psr\Log\LoggerInterface $logger): void
```

**Parameters:**

| Parameter | Type                         | Description     |
|-----------|------------------------------|-----------------|
| `$logger` | **\Psr\Log\LoggerInterface** | The PSR3-Logger |

***

### __construct

Constructor.

```php
public __construct(string[] $options): mixed
```

**Parameters:**

| Parameter  | Type         | Description             |
|------------|--------------|-------------------------|
| `$options` | **string[]** | Options for ami client. |

***
