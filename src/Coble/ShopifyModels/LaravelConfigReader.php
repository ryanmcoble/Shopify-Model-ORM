<?php
namespace Coble\ShopifyModels;

use Illuminate\Support\Facades\Config as LConfig;


class LaravelConfigReader implements ConfigReader
{
	private $config;

	public function __construct($configClass = 'Illuminate\Support\Facades\Config')
	{
		$this->config = $configClass;
	}

	public function read($fileName)
	{
		$config = $this->config;
		return $config::get($fileName);
	}

}