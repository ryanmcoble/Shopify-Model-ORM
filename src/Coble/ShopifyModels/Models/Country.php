<?php 
namespace Coble\ShopifyModels\Models;


use Coble\ShopifyModels\Model;


class Country extends Model
{
	public $modelType = 'countries';

	protected $modelAttributes = [
		'carrier_shipping_rate_providers',
		'code',
		'id',
		'name',
		'price_based_shipping_rates',
		'provinces',
		'tax',
		'weight_based_shipping_rates',
	];

}