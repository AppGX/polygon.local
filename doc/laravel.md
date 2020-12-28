# Контролеры
#### Создание REST-контролера
```
php artisan make:controller RestTestController --resource
```
```
php artisan route:list
```
#### Контролеры приложения
Базовый контролер
````
php artisan make:controller Blog/BaseController --resource
````
Контроллер статей блога
````
php artisan make:controller Blog/PostController --resource
````
#### Аунтификация
Создание базовых файлов аунтитификации
````
php artisan make:auth
````
Запуск миграции
````
php artisan migrate
````
Тест...
````
https://polygon.local/register
````
## Контролер категорий
#### Создание маршута
web.php
````
Route::resource('categories', 'CategoryController')
    ->only($methods)
    ->names('blog.admin.categories);
````
создание контролера
```
php artisan make:controller Blog/Admin/CategoryController --resource
```

