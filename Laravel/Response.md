# Response

The `Illuminate\Http\Response` class extends `Symfony\Component\HttpFoundation\Response`

**Using and Creating Response Objects in Controllers**

```
return new Illuminate\Http\Response('Hello!');

return response('Hello!');

return response('Error!', 400)
    ->header('X-Header-Name', 'header-value')
    ->cookie('cookie-name', 'cookie-value');
```

**Setting headers**
We define a header on a response by using the `header(name, value)` fluent method

**Adding cookies**
We can also set cookies directly on the Response object if we’d like. Example: Attaching a cookie to a response

```
return response($content)
    ->cookie('signup_dismissed', true);
```

**Specialized Response Types**
There are also a few special response types for views, downloads, files, and JSON.
Each is a predefined macro that makes it easy to reuse particular templates for headers or content structure.

**View responses**
In Chapter 4, I used the global view() helper to show how to return a template—for
example, `view('view.name.here')` or something similar. But if you need to custom‐
ize the headers, HTTP status, or anything else when returning a view, you can use the
view() response type as shown in

```
Route::get('/', function (XmlGetterService $xml) {
    $data = $xml->get();
    return response()
        ->view('xml-structure', $data)
        ->header('Content-Type', 'text/xml');
 });
```

**Download responses**
Sometimes you want your application to force the user’s browser to download a file, whether you’re creating the file in Laravel or serving it from a database or a protected location. The download() response type makes this simple. The required first parameter is the path for the file you want the browser to download. If it’s a generated file, you’ll need to save it somewhere temporarily. The optional second parameter is the filename for the downloaded file (e.g., export.csv). If you don’t pass a string here, it will be generated automatically. The optional third parameter allows you to pass an a

```
public function export()
{
	// Tip: use public_path() if needed. 
    return response()
    	->download('file.csv', 'export.csv', ['header' => 'value']);
}
```

<u>If you wish to delete the original file from the disk after returning a download</u>
<u>response,</u> you can chain the `deleteFileAfterSend()` method after the download()
method:

```
public function export()
{
    return response()
        ->download('file.csv', 'export.csv')
        ->deleteFileAfterSend();
}
```

**File responses**
The file response is similar to the download response, except it allows the browser to
display the file instead of forcing a download. <u>This is most common with images</u>
<u>and PDFs</u>. The required first parameter is the filename, and the optional second parameter can
be an array of headers

```
public function invoice($id)
{
	return response()->file("./invoices/{$id}.pdf", ['header' => 'value']);
}
```



**JSON responses**
JSON responses are so common that, even though they’re not really particularly complex to program, there’s a custom response for them as well. JSON responses convert the passed data to JSON (with json_encode() ) and set the Content-Type to application/json . You can also optionally use the setCallback()
method to create a JSONP response instead of JSON, as seen in

```
public function contacts()
{
	return response()->json(Contact::all());
}

public function jsonpContacts(Request $request)
{
    return response()
        ->json(Contact::all())
        ->setCallback($request->input('callback'));
}

public function nonEloquentContacts()
{
	return response()->json(['Tom', 'Jerry']);
}

```

**Redirect responses**

```php
Example 10-11. Examples of using the redirect() global helper

return redirect('account/payment');
return redirect()->to('account/payment');
return redirect()->route('account.payment');
return redirect()->action('AccountController@showPayment');

// If redirecting to an external domain
return redirect()->away('https://tighten.co');

// If named route or controller needs parameters
return redirect()->route('contacts.edit', ['id' => 15]);
return redirect()->action('ContactsController@edit', ['id' => 15]);

```

`back()` is similar to `redirect()->back()`and `redirect()` is similar to `redirect()->to()`

```
// Redirect back with input
public function store()
{
    // If validation fails...
    return back()->withInput();
}
```

Finally, you can redirect and flash data to the session at the same time. This is common with error and success messages, like in the example:

```
Route::post('contacts', function () {
    // Store the contact
    return redirect('dashboard')->with('message', 'Contact created!');
});
```

```
Route::get('dashboard', function () {
    // Get the flashed data from session--usually handled in Blade template
    echo session('message');
});
```



**Custom response macros**

You can also create your own custom response types using macros. This allows you to
define a series of modifications to make to the response and its provided content.
Let’s recreate the json() custom response type, just to see how it works. As always,
you should probably create a custom service provider for these sorts of bindings, but
for now we’ll just put it in AppServiceProvider , as seen in

```php
use Illuminate\Support\Facades\Response;

class AppServiceProvider
{
    public function boot()
    {
        Response::macro('myJson', function ($content) {
        return response(json_encode($content))
        ->withHeaders(['Content-Type' => 'application/json']);
        });
    }
}
```

Then, we can use it just like we would use the predefined json() macro:

```
return response()->myJson(['name' => 'Sangeetha']);
```

**The Responsable interface**

```php
use Illuminate\Contracts\Support\Responsable;
class MyJson implements Responsable
{
    public function __construct($content)
    {
    	$this->content = $content;
    }
    public function toResponse()
    {
    	return response(json_encode($this->content))
    		->withHeaders(['Content-Type' => 'application/json']);
    }
}
```

Then, we can use it just like our custom macro:

```php
return new MyJson(['name' => 'Sangeetha']);
```

Using Responsable to create a view object

```php
use Illuminate\Contracts\Support\Responsable;
class GroupDonationDashboard implements Responsable
{
    public function __construct($group)
    {
    	$this->group = $group;
    }
    public function budgetThisYear()
    {
    	// ...
    }
    public function giftsThisYear()
    {
    	// ...
    }
    public function toResponse()
    {
        return view('groups.dashboard')
            ->with('annual_budget', $this->budgetThisYear())
            ->with('annual_gifts_received', $this->giftsThisYear());
    }
}
```

```php
class GroupController
{
    public function index(Group $group)
    {
    	return new GroupDonationsDashboard($group);
    }
}
```

