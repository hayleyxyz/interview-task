# Interview task - Oscar Berry

## Installing

These steps assume you already have php and composer installed.

Then install the composer dependencies:

```
$ composer install
```

Copy the example .env configuration and generate the server key:

```
$ cp .env.example .env
$ php artisan key:generate
```

Then start the built-in webserver and navigate to the address provided in the terminal window:

```
$ php artisan serve
```