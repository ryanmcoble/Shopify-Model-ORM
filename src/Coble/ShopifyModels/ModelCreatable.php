<?php 
namespace Coble\ShopifyModels;



trait ModelCreatable
{
	/**
	 * Create and save the model's data
	 * @return boolean true success
	 */
	public static function create($data)
	{
		return 'creating some data';

		//create and save to DB
		//create and save to the Shopify REST API service
	}
}