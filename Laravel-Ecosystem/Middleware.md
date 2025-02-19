# Middleware

The idea of middleware is that there is a series of layers wrapping around your application, like a multilayer cake or an onion. 1 Just as shown in Figure 10-1, every request passes through every middleware layer on its way into the application, and then the resulting response passes back through the middleware layers on its way out to the end user.

**Creating Custom Middleware**

```
php artisan make:middleware BanDeleteMethod
```

You can now open up the file at `app/Http/Middleware/BanDeleteMethod.php`. The
default contents are shown in

```php
class BanDeleteMethod
{
    public function handle($request, Closure $next)
    {
   	 	return $next($request);
    }
}
```

How this handle() method represents the processing of both the incoming request
and the outgoing response is the most difficult thing to understand about middle‐
ware, so let’s walk through it.

**Understanding middleware handle() method**

First, remember that middleware are layered one on top of another, and then finally
on top of the app. The first middleware that’s registered gets first access to a request
when it comes in, then that request is passed to every other middleware in turn, then
to the app; then the resulting response is passed outward through the middleware,
and finally this first middleware gets last access to the response when it goes out.

```php
class BanDeleteMethod
{
    public function handle($request, Closure $next)
    {
        // Test for the DELETE method
        if ($request->method() === 'DELETE') {
            return response(
            "Get out of here with that delete method",
            405
        );
    }
    $response = $next($request);
        
    // Assign cookie
    $response->cookie('visited-our-site', true);
        // Return response
        return $response;
    }
}
```

### Binding Middleware

We’re not quite done yet. We need to register this middleware in one of two ways:
globally or for specific routes.
Global middleware are applied to every route; route middleware are applied on a
route-by-route basis.

**Binding global middleware**

Both bindings happen in `app/Http/Kernel.php`. To add a middleware as global, add its
class name to the $middleware property, as in

```php
// app/Http/Kernel.php
protected $middleware = [
    \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
    \App\Http\Middleware\BanDeleteMethod::class,
];
```

**Binding route middleware**

```php
// app/Http/Kernel.php
protected $routeMiddleware = [
    'auth' => \App\Http\Middleware\Authenticate::class,
    ...
    'ban-delete' => \App\Http\Middleware\BanDeleteMethod::class,
];
```

And then we can use this middleware in our routes like

```php
// Doesn't make much sense for our current example...
Route::get('contacts', 'ContactsController@index')->middleware('ban-delete');
	// Makes more sense for our current example...
Route::prefix('api')->middleware('ban-delete')->group(function () {
	// All routes related to an API
});
```

**Using middleware groups**

You can apply middleware groups to routes just like you apply route middleware to
routes, with the `middleware()` fluent method:

```
Route::get('/', 'HomeController@index')->middleware('web');
```

**Passing Parameters to Middleware**

```php
Route::get('company', function () {
	return view('company.admin');
})->middleware('auth:owner');
```

```php
// Accept the parameter as third & rest of the arguments
public function handle($request, $next, $role)
{
    if (auth()->check() && auth()->user()->hasRole($role)) {
  	  	return $next($request);
    }
    return redirect('login');
}
```

```php
// Multiple params passing to middleware
Route::get('company', function () {
	return view('company.admin');
})->middleware('auth:owner,view');
```

**Trusted Proxies**

If you use any Laravel tools to generate URLs within the app, you’ll notice that Lara‐
vel detects whether the current request was via HTTP or HTTPS and will generate
any links using the appropriate protocol.
However, this doesn’t always work when you have a proxy (e.g., a load balancer or
other web-based proxy) in front of your app. Many proxies send nonstandard headers
like X_FORWARDED_PORT and X_FORWARDED_PROTO to your app, and expect your app to
“trust” those, interpret them, and use them as a part of the process of interpreting the
HTTP request. In order to make Laravel correctly treat proxied HTTPS calls like
secure calls, and in order for Laravel to process other headers from proxied requests,
you need to define how it should do so.
You likely don’t just want to allow any proxy to send traffic to your app; rather, you
want to lock your app to only trust certain proxies, and even from those proxies you
may only want to trust certain forwarded headers.