

composer create-project --prefer-dist laravel/laravel blog "5.7.*"

## Laravel IDE Helper Generator install

config\app.php providers -> Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class,


## laravel-debugbar install
``` composer require barryvdh/laravel-debugbar --dev "3.2.*"``` for -> laravel 5.7.*
php artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider"
