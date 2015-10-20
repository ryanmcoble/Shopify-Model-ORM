<?php 
namespace Coble\ShopifyModels\Models;


use Coble\ShopifyModels\Model;


class Product extends Model
{
	public $modelType = 'product';

	protected $modelAttributes = [
		'body_html',
		'created_at',
		'handle',
		'id',
		'images',
		'options',
		'product_type',
		'published_at',
		'published_scope',
		'tags',
		'template_suffix',
		'title',
		'description',
		'updated_at',
		'variants',
		'vendor',
	];

	public $changeable = [
		'body_html',
		'product_type',
		'tags',
		'title',
		'description',
		'vendor',
	];

	public $endpointURL  = '/admin/products.json';

}