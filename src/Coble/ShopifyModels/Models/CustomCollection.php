<?php 
namespace Coble\ShopifyModels\Models;


use Coble\ShopifyModels\Model;


class CustomCollection extends Model
{
	public $modelType = 'custom_collections';

	protected $modelAttributes = [
		'body_html',
		'handle',
		'image',
		'id',
		'metafield',
		'published',
		'published_at',
		'published_scope',
		'sort_order',
		'template_suffix',
		'title',
		'updated_at',
	];

}