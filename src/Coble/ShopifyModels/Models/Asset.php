<?php 
namespace Coble\ShopifyModels\Models;


use Coble\ShopifyModels\Model;


class Asset extends Model
{
	public $modelType = 'assets';

	protected $modelAttributes = [
		'attachment',
		'content_type',
		'created_at',
		'key',
		'public_url',
		'size',
		'source_key',
		'src',
		'theme_id',
		'updated_at',
		'value',
	];

}