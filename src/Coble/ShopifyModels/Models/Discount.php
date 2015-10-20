<?php 
namespace Coble\ShopifyModels\Models;


use Coble\ShopifyModels\Model;


class Discount extends Model
{
	public $modelType = 'discounts';

	protected $modelAttributes = [
		'id',
		'discount_type',
		'code',
		'value',
		'ends_at',
		'starts_at',
		'status',
		'minimum_order_amount',
		'usage_limit',
		'applies_to_id',
		'applies_once',
		'applies_to_resource',
		'times_used',
	];

}