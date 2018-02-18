<?php

namespace AlFaqeir\Arrayz\ServiceProvider;

use Illuminate\Support\ServiceProvider;

class ArrayzServiceProvider extends ServiceProvider {
	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */
	public function boot() {
		//
	}

	/**
	 * Register services.
	 *
	 * @return void
	 */
	public function register() {
		//
		$this->app->bind( 'Arrayz', Arrayz::class );
	}
}
