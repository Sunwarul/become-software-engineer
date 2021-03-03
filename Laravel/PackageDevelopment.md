# Package Development for Laravel

**Create a package that shows simple random numbers into screen**

Create a directory `test-package` and enter into it with `cd test-package`and initialize a composer project with `composer init` . After filling out the prompt, your `composer.json` file should look something like this:

```json
{
    "name": "sunwarul/test-package",
    "license": "MIT",
    "authors": [
        {
            "name": "Sunwarul Islam",
            "email": "sanoarulslm@gmail.com"
        }
    ],
    "minimum-stability": "stable",
    "require": {
        "laravel/framework": "^8.12"
    },
    "require-dev": {
        "illuminate/support": "^8.30"
    },
    "autoload": {
        "psr-4": {
            "Sunwarul\\RandomGenerator\\": "src/"
        }
    },
    "extra": {
        "laravel": {
            "providers": [
                "Sunwarul\\RandomGenerator\\RandomServiceProvider"
            ]
        }
    }
}
```



**Service Provider file**

```php
<?php

namespace Sunwarul\RandomGenerator;

use Illuminate\Support\ServiceProvider;
use Sunwarul\RandomGenerator\RandomGenerator;

/**
 * Class RandomServiceProvider
 * @package Sunwarul\RandomGenerator
 */
class RandomServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/random-generator.php' => config_path('random-generator.php'),
        ], 'config');

        $this->publishes([
            __DIR__ . '/resources/views' => resource_path('views/vendor/sunwarul'),
        ], 'views');

        $this->publishes([
            __DIR__ . '/Http/Controllers/RandomGeneratorController.php' =>
            app_path('Http/Controllers/RandomGenerator/RandomGeneratorController.php'),
        ], 'controllers');

        $this->publishes([
            __DIR__ . '/routes/random.php' =>
            base_path('routes/random.php'),
        ], 'controllers');

        $this->loadRoutesFrom(__DIR__ . '/routes/random.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'random');
    }

    public function register()
    {
        $this->app->bind('RandomGenerator', function ($app) {
            return new RandomGenerator;
        });
    }
}

```



**Controller file**

```php
// src/Http/Controllers/RandomGeneratorController.php
<?php

namespace Sunwarul\RandomGenerator\Http\Controllers;

use Sunwarul\RandomGenerator\RandomGenerator;
use Illuminate\Routing\Controller as BaseController;

class RandomGeneratorController extends BaseController
{
    public function  index()
    {
        $random_number = RandomGenerator::generate();
        return view('random::random-generator', compact('random_number'));
    }
}
/**
* The prefix before views random:: is coming from the ServiceProvider
*/
```

**Route file**

```php
// src/routes/web.php
<?php

use \Sunwarul\RandomGenerator\Http\Controllers\RandomGeneratorController;

Route::get('generate-random', [RandomGeneratorController::class, 'index']);

```



### Installing the package into a Laravel Project

To Install this package locally in a Laravel project, edit the `composer.json` of that project and add these lines:

```json
// composer.json
"repositories": [
    {
        "type" : "path",
        "url" : "/home/sunwarul/projects/packages/test-package"
    }
]
```

and run 

```php
composer require sunwarul/test-package
```

To publish publishable assets, run 

```bash
php artisan vendor:publish
```

You may add `--provider` and `--tag` if you want or select from the prompt by appropriate index number of the providers or tags.



For more:

[Laravel Package Development Website](https://laravelpackage.com/)

[Orchestra Testbench Package, Develop pacakge with testing](https://github.com/orchestral/testbench)

[Official docs, about package development](https://laravel.com/docs/8.x/packages)