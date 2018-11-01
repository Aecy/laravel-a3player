<h1 align="center">Laravel - Arma 3 Player</h1>

<p align="center">:heart: This package helps you to show the information of a player in the database and more..</p>

<p align="center">

[![GitHub issues](https://img.shields.io/github/issues/aecy/laravel-a3player.svg)](https://github.com/aecy/laravel-a3player/issues)

[![GitHub forks](https://img.shields.io/github/forks/aecy/laravel-a3player.svg)](https://github.com/aecy/laravel-a3player/network)

[![GitHub stars](https://img.shields.io/github/stars/aecy/laravel-a3player.svg)](https://github.com/aecy/laravel-a3player/stargazers)

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
$ composer require aecy/a3player
```

Publish the config file (optionnal):

```sh
$ php artisan vendor:publish --provider='Aecy\A3Player\A3PlayerServiceProvider' --tag="config"
```

## License

MIT