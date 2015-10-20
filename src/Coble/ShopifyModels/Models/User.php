<?php 
namespace Coble\ShopifyModels\Models;


use Coble\ShopifyModels\Model;


class User extends Model
{
	public $modelType = 'users';

	protected $modelAttributes = [
		'id',
		'account_owner',
		'bio',
		'email',
		'first_name',
		'im',
		'last_name',
		'permissions',
		'phone',
		'receive_announcements',
		'url',
		'user_type'
	];

	public $changeable = [
		'bio',
		'email',
		'first_name',
		'im',
		'last_name',
		'phone',
		'receive_announcements',
	];

	public $endpointURL  = '/admin/users.json';

}