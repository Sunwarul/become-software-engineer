# Request

**Basic user input:**

Inject the Request object with IoC/DI container automatically like: 

```
public function methodName(Request $request) {
	return $request;
}
```

or access it globally with `request()` global helpers or laravel facades. 

Important methods:

- `all()`
  Returns an array of all user-provided input.
- `input(fieldName)`
  Returns the value of a single user-provided input field.
- `only(fieldName|[array,of,field,names])`
  Returns an array of all user-provided input for the specified field name(s).
- `except(fieldName|[array,of,field,names])`
  Returns an array of all user-provided input except for the specified field name(s).
- `exists(fieldName)`
  Returns a Boolean indicating whether the field exists in the input. has() is an
  alias.
- `filled(fieldName)`
  Returns a Boolean indicating whether the field exists in the input and is not
  empty (that is, has a value).
- `json()`
  Returns a *ParameterBag* if the page had JSON sent to it.
- `json(keyName)`
  Returns the value of the given key from the JSON sent to the page.



**Capture requests**

```
$request = Illuminate\Http\Request::capture();
```

***ParameterBag***

Sometimes in Laravel you’ll run into a ParameterBag object. This class is sort of like
an associative array. You can get a particular key using get() :
echo $bag->get('name');
You can also use has() to check for the existence of a key, all() to get an array of all
keys and values, count() to count the number of items, and keys() to get an array of
just the keys.

```
$bag->get('key')
$bag->has('key')
$bag->keys()
$bag->count()
```



**User and request state**
<u>The user and request state methods include input that wasn’t explicitly provided by</u>
<u>the user through a form</u>:

```
methd()
path()
url()
is()   Str::is()
ip()
header(?$name): array Example: request()->header('accept-language')
server(): array
secure(): bool
pjax(): bool
wantsJson(): bool
isJson(): bool
accepts(): bool
```

**Files:**

So far, all of the input we’ve covered is either explicit (retrieved by methods like
all() , input() , etc.) or defined by the browser or referring site (retrieved by meth‐
ods like pjax() ). File inputs are similar to explicit user input, but they’re handled
much differently:



```
file(): array
allFiles(): array
hasFile(): boolean
```

- `file()`
  Returns an array of all uploaded files, or, if a key is passed (the file upload field
  name), returns just the one file.
- `allFiles()`
  Returns an array of all uploaded files; useful as opposed to file() because of
  clearer naming.
- `hasFile()`
  Returns a Boolean indicating whether a file was uploaded at the specified key.

Every file that’s uploaded will be an instance of `Symfony\Component\HttpFoundation\File\UploadedFile` , which provides a suite of tools for validating, processing, and
storing uploaded files.

**Persistence**

The request can also provide functionality for interacting with the session. Most session functionality lives elsewhere, but there are a few methods that are particularly
relevant to the current page request:

- `flash()`
  Flashes the current requests user input to the session to be retrieved later, which
  means it’s saved to the session but disappears after the next request.
- `flashOnly()`
  Flashes the current requests user input for any keys in the provided array.
- `flashExcept()`
  Flashes the current requests user input, except for any keys in the provided array.
- `old()`
  Returns an array of all previously flashed user input, or, if passed a key, returns
  the value for that key if it was previously flashed.
- `flush()`
  Wipes all previously flashed user input.
- `cookie()`
  Retrieves all cookies from the request, or, if a key is provided, retrieves just that
  cookie.
- `hasCookie()`
  Returns a Boolean indicating whether the request has a cookie for the given key.
  The flash*() and old() methods are used for storing user input and retrieving it
  later, often after the input is validated and rejected.