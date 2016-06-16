# Interview task - Oscar Berry

## Installing

Clone the project and navigate a terminal to the project directory.

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