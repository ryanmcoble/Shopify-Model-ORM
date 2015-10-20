<?php 
namespace Coble\ShopifyModels\Models;


use Coble\ShopifyModels\Model;


class CarrierService extends Model
{
	public $modelType = 'carrier_services';

	protected $modelAttributes = [
		'active',
		'callback_url',
		'carrier_service_type',
		'name',
		'service_discovery',
	];

}