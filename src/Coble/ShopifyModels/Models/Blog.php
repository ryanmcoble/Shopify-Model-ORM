<?php 
namespace Coble\ShopifyModels\Models;


use Coble\ShopifyModels\Model;


class Blog extends Model
{
	public $modelType = 'blogs';

	protected $modelAttributes = [
		'commentable',
		'created_at',
		'feedburner',
		'feedburner_location',
		'handle',
		'id',
		'metafield',
		'template_suffix',
		'title',
		'updated_at',
	];

}