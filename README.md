## How to start server 

Run this commands:
```
composer install
```

```
npm install
```

```
php artisan serve
```
## How to use PHPUnit

Run this command:
```
php vendor/bin/phpunit
```

## How to test the API

You need to access the route with method POST:

```
POST
IP:PORT/api/math/multiples
```
If you want, do you can set the params:
Send param integer "limit"´ to show new range of numbers
Send param object "comparative" to show new multiples 
Like this:
```
{
    "limit" : 10,
    "comparative" :{ "Number":"Text"} 
}
```
