<?php

use App\ModelControllers\CountryModelController;

if ( ! function_exists('countryModelController')) {
	/*** @return CountryModelController */
	function countryModelController(): CountryModelController
	{
		return app('countryModelController');
	}
}