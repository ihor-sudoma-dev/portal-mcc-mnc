<?php

namespace App\ModelControllers\Repositories;

use App\Models\Country;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class CountryRepository
 * @package App\ModelControllers\Repositories
 */
class CountryRepository
{
	/*** @return Collection */
	public function fetchAll(): Collection
	{
		return Country::all();
	}
}