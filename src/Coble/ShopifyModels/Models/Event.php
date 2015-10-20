<?php 
namespace Coble\ShopifyModels\Models;


use Coble\ShopifyModels\Model;


class Event extends Model
{
	public $modelType = 'events';

	protected $modelAttributes = [
		'arguments',
		'body',
		'created_at',
		'id',
		'description',
		'path',
		'message',
		'subject_id',
		'subject_type',
		'verb',
	];

}