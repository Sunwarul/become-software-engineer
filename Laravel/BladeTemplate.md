# Blade Template

Blade is Laravel's templating engine, inspired from .NETs Razor engine. It offerse concise syntax, shallow learning curve, a powerful and intuitive inheritance model and easily extensible. 

Echo with curly braces `{ {   }}` 

Directives with `@directive_name` 



**Echoing Data**

```
{{ $variable }} Same as <?= htmlentities($variable) ?>
```

```
Use {!! $data !!} if you don't want to escape
```

```
@{{ $data }} will echoed out as {{ $data }} directly. Useful when working with Frontend frameworks. 
```

**Control Structures**

```
@if 
	// Logic
@elseif
	// Login
@else

@endif
```

```
@unless($user->hasPaid())
	// Statement
@endunless
```

**Loops**

```
@for @endfor
@foreach @endforeach
@while @endwhile
```

```
// For 
@for ($i = 0; $i < $talk->slotsCount(); $i++)
	The number is {{ $i }}<br>
@endfor
```

```
// ForEach
@foreach ($talks as $talk)
	• {{ $talk->title }} ({{ $talk->length }} minutes)<br>
@endforeach
```

```
// While
@while ($item = array_pop($items))
	{{ $item->orSomething() }}<br>
@endwhile
```

```
// ForElse
@forelse ($talks as $talk)
	• {{ $talk->title }} ({{ $talk->length }} minutes)<br>
@empty
	No talks this day.
@endforelse
```

**Loop within `foreach` and `forelse`**

- index (0 based)
- iteration (1 based)
- remaining
- count
- first(boolean)
- last(boolean)
- depth
- parent

```php
<ul>
    @foreach ($pages as $page)
    	<li>{{ $loop->iteration }}: {{ $page->title }}
    	@if ($page->hasChildren())
            <ul>
                @foreach ($page->children() as $child)
                <li>
                    {{ $loop->parent->iteration }}
                    .{{ $loop->iteration }}:
                    {{ $child->title }}
                </li>
                @endforeach
            </ul>
    	@endif
        </li>
    @endforeach
</ul>
```
------

**Template Inheritance**

Blade provide a structure for template inheritance that allows views to extend, modify and include other views.

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
</head>
<body>
    @yield('content')

    @section('javascript')
        {{-- Fallback Javascript --}}
        <script src='{{  asset('js/app.js') }}'></script>
    @show
</body>
</html>

```



```php
@extends('master')

@section('title', 'My welcome page default title')

@section('content')

    <h1>Welcome page content</h1>

@endsection

@section('javascript')
    
{{-- Add parents contents into child by @parent directive --}}
@parent
    
<script>
    document.getElementById('myselection').innerHTML = "Hello world";
</script>
    
@endsection

```

**Including view partials**

```
// home.blade.php
<div class="content" data-page-name="{{ $pageName }}">
    <p>Here's why you should sign up for our app: <strong>It's Great.</strong></p>
    
    @include('sign-up-button', ['text' => 'See just how great it is'])
    
</div>
```

```
<a class="button button--callout" data-page-name="{{ $pageName }}">
	<i class="exclamation-icon"></i> {{ $text }}
</a>
```

Conditionally including views

```
{{-- Include a view if it exists --}}
@includeIf('sidebars.admin', ['some' => 'data'])

{{-- Include a view if a passed variable is truth-y --}}
@includeWhen($user->isAdmin(), 'sidebars.admin', ['some' => 'data'])

{{-- Include the first view that exists from a given array of views --}}
@includeFirst(['customs.header', 'header'], ['some' => 'data'])
```























