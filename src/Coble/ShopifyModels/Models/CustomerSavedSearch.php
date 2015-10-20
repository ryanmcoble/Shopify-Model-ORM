<?php 
namespace Coble\ShopifyModels\Models;


use Coble\ShopifyModels\Model;


class CustomerSavedSearch extends Model
{
	public $modelType = 'customer_saved_searches';

	protected $modelAttributes = [
		'created_at',
		'id',
		'name',
		'query',
		'update_at',
	];

}