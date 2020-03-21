<?php

namespace Bungnewbie\Corona\Services;

use GuzzleHttp\Client;
use Bungnewbie\Corona\Helpers\Helper;
use Bungnewbie\Corona\Repositories\CoronaServiceRepository;

class CoronaService implements CoronaServiceRepository
{
	protected $client;

	public function __construct(Client $client)
	{
		$this->client = $client;
	}

	public function allCountry()
	{
		return $this->client->request('GET', config('bungnewbie.api_url'));
	}

	public function whereCountry($region)
	{
		$countries = $this->client
						  ->request('GET', config('bungnewbie.api_url'))
						  ->getBody()->getContents();

		$countries = (array)json_decode($countries, true);
		foreach($countries as $key => $country) {
			$resultsAsCountry[++$key] = $country;
		}
		foreach ($resultsAsCountry as $key => $country) {
			if($country['attributes']['Country_Region']
				=== Helper::filter_param($region)) {
				$results[] = $country;
			}
		}
		return $results;
	}

	public function totalConfirmed()
    {
    	return $this->client->request('GET', config('bungnewbie.api_url').'positif');
    }

    public function totalRecovered()
    {
    	return $this->client->request('GET', config('bungnewbie.api_url').'sembuh');
    }

    public function totalDeaths()
    {
    	return $this->client->request('GET', config('bungnewbie.api_url').'meninggal');
    }
}