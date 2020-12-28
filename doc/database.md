
# add tables
```
php artisan make:model Models/BlogCategory -m
```
```
php artisan make:model Models/BlogPost -m
```

# add Seeds
```
php artisan make:seeder UsersTableSeeder
php artisan make:seeder BlogCategoriesTableSeeder
```
```
php artisan db:seed
php artisan db:seed --class=UsersTableSeeder
php artisan migrate:refresh --seed
```

