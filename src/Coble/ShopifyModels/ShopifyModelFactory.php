<?php 
namespace Coble\ShopifyModels;



use Coble\ShopifyModels\Models;


class ShopifyModelFactory
{
	public static function make($modelClass, $construct = true, $data = [])
	{

		$modelClass = ModelClassNameBuilder::make($modelClass);

		$modelClassInstance = null;
		if($construct) 
		{
			if(count($data)) $modelClassInstance = new $modelClass($data);
			else $modelClassInstance = new $modelClass();
		}
		else $modelClassInstance = new $modelClass;

		return $modelClassInstance;
	}

}