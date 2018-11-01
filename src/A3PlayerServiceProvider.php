<?php

namespace Aecy\A3Player;

use Illuminate\Support\ServiceProvider;

class A3PlayerServiceProvider extends ServiceProvider
{
	public function boot()
	{
		$this->loadRoutesFrom(
			__DIR__ . '/../routes/web.php'
		);
		$this->loadViewsFrom(
			__DIR__ . '/../views', 'a3player'
		);
		$this->publishes([
			__DIR__ . '/../config/a3player.php' => config_path('a3player.php'),
		]);
	}

	public function register()
	{
		$this->mergeConfigFrom(
			__DIR__ . '/../config/a3player.php', 'a3player'
		);
	}
}