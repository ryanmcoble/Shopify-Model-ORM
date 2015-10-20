<?php 
namespace Coble\ShopifyModels;


use Coble\ShopifyModels\Models;
use Exception;


class ModelClassNameBuilder
{
	public static function make($modelClass)
	{
		$modelClassWithNamespace = "Coble\ShopifyModels\Models\\" . $modelClass;

		if( !class_exists($modelClassWithNamespace) ) 
			throw new Exception('Shopify model not supported!'); // throws error if model is not supported

		return $modelClassWithNamespace;
	}

}