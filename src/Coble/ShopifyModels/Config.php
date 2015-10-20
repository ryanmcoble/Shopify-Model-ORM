<?php 
namespace Coble\ShopifyModels;


/**
 * Shopify Configuration
 * This class will piggy-back on the Illuminate Config facade.
 */
class Config
{

	private $configs = [];

	public function __construct($configs = []){
		$this->configs = $configs;
	}


	/**
	 * Automatically load configurations from a ConfigReader instance
	 * @param ConfigReader $reader
	 * @param string $fileName
	 * @return array;
	 */
	public function loadConfigs(ConfigReader $reader, $fileName = 'shopify')
	{
		$this->configs = $reader->read($fileName);

		return $this->configs;
	}


	/**
	 * Manually set a configuration key/value pair
	 * @param $key string
	 * @param $value string
	 */
	public function set($key, $value)
	{
		$this->configs[$key] = $value;
	}

	/**
	 * Manually retrieve a configuration by key
	 * @param $key string
	 * @return mixed
	 */
	public function get($key)
	{
		if(isset($this->configs[$key])) return $this->configs[$key];

		return null;
	}

	/**
	 * Get all configurations
	 * @return mixed
	 */
	public function getAll()
	{
		return $this->configs;
	}
}