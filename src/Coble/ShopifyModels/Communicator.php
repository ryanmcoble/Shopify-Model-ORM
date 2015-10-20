<?php 
namespace Coble\ShopifyModels;

use Coble\ShopifyModels\Models\ShopifyShop as Shop;
use Illuminate\Support\Facades\Config as LConfig;


interface CommunicationInterface
{
	public function send(Request $request);
}


class Communicator implements CommunicationInterface
{
	private $connection;

	private function __construct() {}

	

	public static function createConnection(Config $config = null, Shop $shop = null)
	{
		if(!$shop) $shop = (new Shop)->getAuthenticated();

		if(!$config) {
			$config = new Config;
			$config->loadConfigs(new LaravelConfigReader(new LConfig));
		}
		$settings = $config->getAll();
		$settings['ACCESS_TOKEN'] = isset($settings['ACCESS_TOKEN']) ? $settings['ACCESS_TOKEN'] : $shop->getAccessToken();

		$instance = new static;

		$instance->connection = APIConnection::createConnection($settings);
		

		return $instance;
	}

	public function send(Request $request)
	{
		$this->connection->makeRequest($request);

		$response = $this->connection->getResponse();

		return $response;

	}
}

