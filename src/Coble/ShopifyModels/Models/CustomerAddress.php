<?php 
namespace Coble\ShopifyModels\Models;


use Coble\ShopifyModels\Model;


class CustomerAddress extends Model
{
	public $modelType = 'addresses';

	protected $modelAttributes = [
		'address1',
		'address2',
		'city',
		'company',
		'first_name',
		'last_name',
		'phone',
		'province',
		'country',
		'zip',
		'name',
		'province_code',
		'country_code',
		'country_name',
	];



	public $changeable = [
		'address1',
		'address2',
		'city',
		'company',
		'first_name',
		'last_name',
		'phone',
		'province',
		'country',
		'zip',
		'name',
		'province_code',
		'country_code',
		'country_name',
	];


}