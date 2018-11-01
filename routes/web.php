<?php

Route::namespace('Aecy\A3Player\Http\Controllers')->group(function() {
	Route::group(['prefix' => config('a3player.prefix')], function() {
		Route::get('/', 'PlayerController@index');
	});
});