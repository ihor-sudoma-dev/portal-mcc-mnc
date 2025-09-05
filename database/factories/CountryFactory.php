<?php

namespace Database\Factories;

use App\Models\Country;

/**
 * Class CountryFactory
 * @package Database\Factories
 */
class CountryFactory
{
	/**
	 * @param string $name
	 * @param string $iso2
	 * @param string $continent
	 * @return Country
	 */
	public static function create(string $name, string $iso2, string $continent): Country
	{
		$country = new Country();
		$country->setName($name);
		$country->setIso2($iso2);
		$country->setContinent($continent);
		$country->save();
		return $country;
	}
}