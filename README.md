<h1 align="center">Laravel - Arma 3 Player</h1>

<p align="center">:heart: This package helps you to show the information of a player in the database and more..</p>

<p align="center">
<a href="https://packagist.org/packages/overtrue/laravel-follow"><img src="https://poser.pugx.org/overtrue/laravel-follow/downloads" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/overtrue/laravel-follow"><img src="https://poser.pugx.org/overtrue/laravel-follow/license" alt="License"></a>
</p>

## Features

- What i offer ?
    - Show a unique player.
    - Show a list of player.
    - Search trough the list.
    - more...

## Installation

### Required

- PHP 7.0 +
- Database of your arma 3 server
- Laravel 5.5 +

You can install the package using composer

```sh
$ composer require overtrue/laravel-follow -vvv
```

Then add the service provider to `config/app.php`

```php
Overtrue\LaravelFollow\FollowServiceProvider::class
```

Publish the config file:

```sh
$ php artisan vendor:publish --provider='Aecy\A3Player\A3PlayerServiceProvider' --tag="config"
```

## License

MIT