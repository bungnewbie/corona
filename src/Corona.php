<?php

namespace Bungnewbie\Corona;

use Bungnewbie\Corona\Repositories\CoronaServiceRepository;

class Corona
{
	protected $corona;

	public function __construct(CoronaServiceRepository $corona)
	{
		$this->corona = $corona;
	}

	public function all()
	{
		return $this->corona->allCountry();
	}

	public function whereCountry($region)
	{
		return $this->corona->whereCountry($region);
	}

	public function totalConfirmed()
    {
        return $this->corona->totalConfirmed();
    }

    public function totalRecovered()
    {
        return $this->corona->totalRecovered();
    }

    public function totalDeaths()
    {
        return $this->corona->totalDeaths();
    }
}