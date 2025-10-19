
Implement this interface in your own classes to make them event listeners.

PHP Version 5

***

* Full name: `\PAMI\Listener\IEventListener`

**See Also:**

* http://marcelog.github.com/PAMI/

## Methods

### handle

Event handler.

```php
public handle(\PAMI\Message\Event\EventMessage $event): void
```

**Parameters:**

| Parameter | Type                                 | Description         |
|-----------|--------------------------------------|---------------------|
| `$event`  | **\PAMI\Message\Event\EventMessage** | The received event. |

***
