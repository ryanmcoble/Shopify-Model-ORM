<?php 
namespace Coble\ShopifyModels\Models;


use Coble\ShopifyModels\Model;


class Article extends Model
{
	public $modelType = 'articles';

	protected $modelAttributes = [
		'author',
		'blog_id',
		'body_html',
		'created_at',
		'id',
		'metafield',
		'published',
		'published_at',
		'summary_html',
		'tags',
		'template_suffix',
		'title',
		'updated_at',
		'user_id',
	];

}