<?php 
namespace Coble\ShopifyModels;


class RequestToModel
{

	private $model;

	public function __construct(Model $model)
	{
		$this->model = $model;

	}


	public function toArray()
	{
		$data = [];
		$data[$this->model->modelType] = [];

		$changeable = $this->model->changeable;

		foreach($changeable as $attribute)
		{
			if(isset($this->model->$attribute))
			{
				$data[$this->model->modelType][$attribute] = $this->model->$attribute;
			}
		}

		return $data;
	}

	public function toJSON()
	{
		return json_encode($this->toArray());
	}

}