<?php 
namespace Coble\ShopifyModels;

use Coble\ShopifyModels\Models\ShopifyShop as Shop;


interface ModelInterface
{
	public function getId();
	public function save();
}

class Model extends ModelRepository implements ModelInterface
{

	use ModelQueryable, ModelCreatable, ModelSelfUpdatable;


	public $modelType = ''; // the model on shopify (all lowercase)

	public $filterable = []; // fields that we can filter by
	public $changeable = []; // fields we can change


	/**
	 * Creating a Shopify model instance
     * @param $data array
	 */
	public function __construct() {}


	public function getId()
	{
		return isset($this->id) ? $this->id : false;
	}


	/**
	 * Save the model's data
	 * @return boolean true success
	 */
	public function save()
	{
		$queryType = isset($this->id) ? 'PUT' : 'POST';

		$request = RequestBuilder::build($this, $queryType);

		$connection = Communicator::createConnection();
		$response = $connection->send($request);

		return $response;
	}

}