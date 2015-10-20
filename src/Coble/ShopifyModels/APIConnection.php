<?php
namespace Coble\ShopifyModels;

use Coble\ShopifyModels\Models\ShopifyShop as Shop;
use RocketCode\Shopify\API as API;

use Exception;

class APIConnection
{
	public static $instance;

	private $raw;
	private $lastRequest;
	//private $shop;
	private $configs;

	private function __construct() {}

	public static function createConnection($settings/*, Shop $shop*/)
	{
		// make sure the shop is installed / authenticated
		//if(!$shop->getAccessToken()) throw new Exception("You must be authenticated for this store!");

		$instance = new static;
		//$instance->shop = $shop;
		
		$instance->configs = $settings;

		return $instance;
	}


	public function makeRequest(Request $request)
	{
		//dd($this->configs);

		$connectionData = [
			'API_KEY'      => $this->configs['APP_API_KEY'],
			'API_SECRET'   => $this->configs['APP_API_SECRET'],
			'SHOP_DOMAIN'  => $this->configs['MYSHOPIFY_DOMAIN'],
			'ACCESS_TOKEN' => $this->configs['ACCESS_TOKEN'], // not de-coupled yet
		];

		$API = new API($connectionData);

		// make the  api request
		$this->raw = $API->call($request->toArray());
		$this->lastRequest = $request;

		return true;
	}

	public function getResponse()
	{
		if(!$this->lastRequest) return null;

		$response = ResponseBuilder::build($this->lastRequest, $this->raw);

		return $response;
	}

}