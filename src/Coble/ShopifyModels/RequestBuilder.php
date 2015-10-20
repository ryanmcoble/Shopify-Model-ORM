<?php 
namespace Coble\ShopifyModels;

class RequestBuilder
{

	private function __construct() {}

	public static function build(Model $model, $queryType = 'GET')
	{
		$request = new Request;
		$request->setMethod($queryType);
		$request->setModel($model);

		if($model->getId()) $request->setURL(str_replace('.json', '', $model->endpointURL) . '/' . $model->getId() . '.json');
		else $request->setURL($model->endpointURL);

		if($queryType == 'POST' || $queryType == 'PUT')
		{
			// translate ShopifyModel class into Shopify request object
			$translator = new ShopifyRequestToModel($model);
			$data = $translator->toArray();
			
			if( !is_array($data) ) throw new Exception('Unable to translate model!');

			$request->setData($data);
		}

		return $request;
	}

}