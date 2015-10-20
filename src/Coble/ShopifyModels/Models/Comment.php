<?php 
namespace Coble\ShopifyModels\Models;


use Coble\ShopifyModels\Model;


class Comment extends Model
{
	public $modelType = 'comments';

	protected $modelAttributes = [
		'article_id',
		'author',
		'blog_id',
		'body',
		'body_html',
		'created_at',
		'email',
		'id',
		'ip',
		'published_at',
		'status',
		'updated_at',
		'user_agent',
	];

}