<?php 
namespace Coble\ShopifyModels\Models;


use Coble\ShopifyModels\Model;


class Collect extends Model
{
	public $modelType = 'collects';

	protected $modelAttributes = [
		'collection_id',
		'created_at',
		'featured',
		'id',
		'position',
		'product_id',
		'sort_value',
		'updated_at',
	];

}