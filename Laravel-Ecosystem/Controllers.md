# Controllers

In the MVC pattern, controllers are essentially classes that organize the logic of one or more routes together in one place. Controllers tend to group similar routes together, especially if your application is structured in a traditionally CRUD-like format; in this case, a controller might handle all the actions that can be performed on a particular resource.

> CRUD stands for create, read, update, delete, which are the four primary operations that web applications most commonly provide on a resource. For example, you can create a new blog post, you can read that post, you can update it, or you can delete it.



**creating a controller**

```
php artisan make:controller MyController
```

```
// Default generated controller
<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class MyController extends Controller
{	// constructor
	// methods
}
```

**Controller namespacing**

By default laravel look for controllers in `App\Http\Controllers` namespace. but we can use any class as our controller in route with full namespace covered. 



> Generating resource controller 
>
> ```
> php artisan make:controller TasksController --resource
> ```

**Getting user input**

```
// routes/web.php
Route::get('tasks/create', 'TasksController@create');
Route::post('tasks', 'TasksController@store');

// controller
public function store()
{
    Task::create(request()->only(['title', 'description']));
    
    OR, 
    
    Task::create([
        'title' => 'Buy milk',
        'description' => 'Remember',
        ]);

    return redirect('tasks');
}

```

**Injecting Dependencies into Controllers**

All controller methods (including the constructors) are resolved out of Laravel’s container, which means anything you typehint that the container knows how to resolve will be automatically injected.

> “Typehinting” in PHP means putting the name of a class or inter‐
> face in front of a variable in a method signature:
> `public function __construct(Logger $logger) {}`

**Resource Controllers**

```
// Binding resource controller
Route::resource('resource_name', 'ControllerClass');

// controller
Controller with all basic RESTful actions

```

> ```
> // Get all routes and their information
> php artisan route:list
> ```

**API Resource controller**

```
php artisan make:controller MySampleResourceController --api

Route::apiResource('resource_name', 'ControllerClass');
```

**Single action controller**

> The `__invoke()` method is a PHP magic method that allows you to “invoke” an instance of a class, treating it like a function and calling it. This is the tool Laravel’s single action controllers use to allow you to point a route to a single controller,

```
// \App\Http\Controllers\UpdateUserAvatar.php
public function __invoke(User $user)
{
	// Update the user's avatar image
}
// routes/web.php
Route::post('users/{user}/update-avatar', 'UpdateUserAvatar');
```

**Route model binding**

> Laravel provides a feature that simplifies this pattern called route model binding. This allows you to define that a particular parameter name (e.g., {conference} ) will indicate to the route resolver that it should look up an Eloquent database record with that ID and then pass it in as the parameter instead of just passing the ID.

```
// Instead of 
Route::get('conferences/{id}', function ($id) {
$conference = Conference::findOrFail($id);
});
// Use this
Route::get('conferences/{conference}', function (Conference $conference) {
	// Got it
});
```

1. Implicit route model binding:

   ```
   Route::get('conferences/{conference}', function (Conference $conference) {
   	return view('conferences.show')->with('conference', $conference);
   });
   ```

   **Customize route key for an eloquent model**

   ```
   // Model
   public function getRouteKeyName()
   {
   	return 'slug'; // `id` is by default the key look into
   }
   ```

2. Custom/Explicit route model binding

   ```
   // RouteServiceProvider.php
   public function boot()
   {
       // Just allows the parent's boot() method to still run
       parent::boot();
       
       // Perform the binding
       Route::model('event', Conference::class);
   }
   ```

   Now, for `/slug/{event}`, The route resolver will return an instance
   of the Conference class with the ID of that URL parameter.

   ```
   Route::get('events/{event}', function (Conference $event) {
   	return view('events.show')->with('event', $event);
   });
   ```



**Route caching**

```
php artisan route:cache
php artisan route:clear
```

This process speed up the routing, but you should clear the cache if you add new routes. 



**Form method spoofing**

```
<form action="/tasks/5" method="POST">

    <input type="hidden" name="_method" value="DELETE">
    Or, 
    @method('DELETE')
    
</form>
```

**CSRF Protection**

A cross-site request forgery is when one website pretends to be
another. The goal is for someone to hijack your users’ access to
your website, by submitting forms from their website to your web‐
site via the logged-in user’s browser.
The best way around CSRF attacks is to protect all inbound routes
— POST , DELETE , etc.—with a token, which Laravel does out of
the box.

```
<form action="/tasks/5" method="POST">
    <?php echo csrf_field(); ?>
    <!-- or: -->
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <!-- or: -->
    @csrf
</form>
```

When using javascript frameworks, use a meta tag to store CSRF token in every file as - 

```
<meta name="csrf-token" content="<?php echo csrf_token(); ?>" id="token">
```

```
// In jQuery:
$.ajaxSetup({
    headers: {
    	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

// With Axios:
window.axios.defaults.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]');
```



**Redirects**

```php
// Using the global helper to generate a redirect response
Route::get('redirect-with-helper', function () {
	return redirect()->to('login');
});
// Using the global helper shortcut
Route::get('redirect-with-helper-shortcut', function () {
	return redirect('login');
});
// Using the facade to generate a redirect response
Route::get('redirect-with-facade', function () {
	return Redirect::to('login');
});
// Using the Route::redirect shortcut in Laravel 5.5+
Route::redirect('redirect-by-route', 'login');
```

```
return redirect()->route('conferences.index');
return redirect()->route('conferences.show', ['conference' => 99]);
redirect()->back()
redirect()->home()
redirect()->secure()
redirect()->action(Class::action)
redirect()->guest()
redirect()->intended()
redirect()->with('key', 'value')
redirect()->with(['key1' => 'value1', 'key2' => 'value2'])

redirect()
	->with()
	->withInput()

Route::post('form', function () {
    return redirect('form')
        ->withInput()
        ->with(['error' => true, 'message' => 'Whoops!']);
});
<input name="username" value="<?=old('username', 'Default instructions here');?>">

Route::post('form', function (Illuminate\Http\Request $request) {
    $validator = Validator::make($request->all(), $this->validationRules);
    if ($validator->fails()) {
        return back()
            ->withErrors($validator)
            ->withInput();
    }
});

```

**Aborting the request**

```
Route::post('something-you-cant-do', function (Illuminate\Http\Request $request) {
    abort(403, 'You cannot do that!');
    abort_unless($request->has('magicToken'), 403);
    abort_if($request->user()->isBanned, 403);
});
```

**Custom response**

```
response()->make()
response()->json(array|collection|jsonAbleContents)
response()->jsonp()
response()->download()
response()->streamDownlod()
response()->file()

return response()->streamDownload(function () {
	echo DocumentService::file('myFile')->getContent();
}, 'myFile.pdf');
```

