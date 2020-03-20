<?php

namespace Bungnewbie\Corona\Repositories;

interface CoronaServiceRepository {

	public function allCountry();

	public function whereCountry($region);

	public function totalConfirmed();

    public function totalRecovered();

    public function totalDeaths();

}