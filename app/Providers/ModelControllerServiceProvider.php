<?php

namespace App\Providers;

use App\ModelControllers\CountryModelController;
use Illuminate\Support\ServiceProvider;

/**
 * Class ModelControllerServiceProvider
 * @package App\Providers
 */
class ModelControllerServiceProvider extends ServiceProvider
{
	/*** @return void */
	public function boot(): void
	{
		$this->app->singleton(CountryModelController::class);
		$this->app->alias(CountryModelController::class, 'countryModelController');
	}
}