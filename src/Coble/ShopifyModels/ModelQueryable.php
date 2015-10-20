<?php 
namespace Coble\ShopifyModels;

trait ModelQueryable
{
	

	public static function find($modelId)
	{
		$model = new static;
		$model->id = $modelId;

		$request = RequestBuilder::build($model);

		$connection = Communicator::createConnection();
		$response = $connection->send($request);


		$model->selfUpdate($response->toArray());


		return $model;
	}

	public static function all()
	{
		$request = RequestBuilder::build(new static);

		$connection = Communicator::createConnection();
		$response = $connection->send($request);

		return $response;
	}


}