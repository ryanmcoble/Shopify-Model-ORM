<?php 
namespace Coble\ShopifyModels;

use Exception;


class ResponseBuilder
{

	private function __construct() {}

	public static function build(Request $request, $raw)
	{

		if(!$raw) throw new Exception('No raw request data found, please make valid request!');

		$model = $request->getModel();

		$modelTypePlural = $model->modelType . 's'; // pural version
		$modelTypeSingular = $model->modelType;

		if(!$modelTypePlural && !$modelTypeSinglar) throw new Exception('The model results you are looking doesn\'t exist!');

		$modelType = isset($raw->$modelTypePlural) ? $modelTypePlural : $modelTypeSingular;

		$newModel = $raw->$modelType;

		$errorData = null;
		if(intval($raw->_ERROR['NUMBER'])) $errorData = $raw->_ERROR;

		$response = new Response($newModel, $errorData);

		return $response;

	}

}