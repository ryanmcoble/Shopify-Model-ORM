<?php 
namespace Coble\ShopifyModels\Models;


use Coble\ShopifyModels\Model;


class ApplicationCharge extends Model
{
	public $modelType = 'application_charges';

	protected $modelAttributes = [
		'confirmation_url',
		'created_at',
		'id',
		'name',
		'price',
		'return_url',
		'status',
		'test',
		'updated_at',
	];

}