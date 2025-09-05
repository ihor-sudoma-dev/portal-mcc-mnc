<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Country
 * @property string name
 * @property string iso2
 * @property string continent
 * @package App\Models
 */
class Country extends Model
{
	/*** @return string */
	public function getName(): string
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 * @return void
	 */
	public function setName(string $name): void
	{
		$this->name = $name;
	}

	/*** @return string */
	public function getIso2(): string
	{
		return $this->iso2;
	}

	/**
	 * @param string $iso2
	 * @return void
	 */
	public function setIso2(string $iso2): void
	{
		$this->iso2 = $iso2;
	}

	/*** @return string */
	public function getContinent(): string
	{
		return $this->continent;
	}

	/**
	 * @param string $continent
	 * @return void
	 */
	public function setContinent(string $continent): void
	{
		$this->continent = $continent;
	}
}
