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
