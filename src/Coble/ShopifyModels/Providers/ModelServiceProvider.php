<?php 
namespace Coble\ShopifyModels\Providers;


use Illuminate\Support\ServiceProvider;


class ModelServiceProvider extends ServiceProvider 
{

	public function register()
	{
		// bind the Shopify Model factory
		$this->app->bind('ShopifyModelFactory', 'Coble\ShopifyModels\ShopifyModelFactory');
	}


}