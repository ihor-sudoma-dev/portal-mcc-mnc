<?php

namespace App\ModelControllers;

use App\ModelControllers\Repositories\CountryRepository;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class CountryModelController
 * @package App\ModelControllers
 */
class CountryModelController
{
	/*** @var CountryRepository */
	public CountryRepository $repo;

	/*** @param CountryRepository $repo */
	public function __construct(CountryRepository $repo)
	{
		$this->repo = $repo;
	}

	/*** @return Collection */
	public function fetchAll(): Collection
	{
		return $this->repo->fetchAll();
	}
}