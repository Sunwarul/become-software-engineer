# Dispatch Event

**Artisan Commands:**

```bash
make:event EventName
make:listener ListenerName --event=EventName
```

**Register Event Listeners**

```php
// App/Providers/EventServiceProvider.php

<?php

namespace App\Providers;

use App\Events\NewUserHasRegistered;
use App\Listeners\NewUserNotificationToAdmin;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        NewUserHasRegistered::class => [
            \App\Listeners\NewUserNotificationToAdminViaSlack::class,
            \App\Listeners\NewUserNotificationToAdminViaEmail::class,
        ]
    ];

}

```



```php
// web.php 
<?php

use App\Events\NewUserHasRegistered;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Route;

class Person
{
    private $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getUser()
    {
        return $this->name;
    }
}

$myUser = new Person("Sunwarul");
/**
 * Important to note: We use closure in rotue in laravel.
*/ 
Route::get('/', function () use ($myUser) {
    NewUserHasRegistered::dispatch($myUser);
});

```

