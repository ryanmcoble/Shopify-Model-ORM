<?php 
namespace Coble\ShopifyModels\Models;


use Coble\ShopifyModels\Model;


class Customer extends Model
{
	public $modelType = 'customers';

	protected $modelAttributes = [
		'accepts_marketing',
		'addresses',
		'created_at',
		'default_address',
		'email',
		'first_name',
		'id',
		'metafield',
		'multipass_identifier',
		'last_name',
		'last_order_id',
		'last_order_name',
		'note',
		'orders_count',
		'state',
		'tags',
		'tax_exempt',
		'total_spent',
		'updated_at',
		'verified_email',
	];

}