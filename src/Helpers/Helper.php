<?php

namespace Bungnewbie\Corona\Helpers;

class Helper {

	static public function filter_param($param_url)
	{
		return str_replace('\' ', '\'', ucwords(str_replace('\'', '\' ', strtolower($param_url))));
	}

}