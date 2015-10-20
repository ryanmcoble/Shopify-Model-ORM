<?php 
namespace Coble\ShopifyModels;



class Response
{

	private $error = null;
	private $modelData = [];

	private $hiddenProperties = [
		''
	];


	public function __construct($modelResponse, $errorData = null)
	{
		$this->error = $errorData;
		$this->modelData = $modelResponse;
	}


	public function hasErrors()
	{
		$errorNumber = intval($this->error['NUMBER']);

		return $errorNumber > 0 ? true : false;
	}


	public function getError()
	{
		return $this->error;
	}



	public function toArray()
	{
		$data = [];
		
		if(is_array($this->modelData))
		{
			for($i = 0; $i < count($this->modelData); $i++)
			{
				foreach($this->modelData[$i] as $property => $value)
				{
					if(!in_array($property, $this->hiddenProperties)) $data[$i][$property] = $value;
				}
			}
		}
		else
		{
			foreach($this->modelData as $property => $value)
			{
				if(!in_array($property, $this->hiddenProperties)) $data[$property] = $value;
			}
		}


		return $data;
	}

	public function toJSON()
	{
		return json_encode($this->toArray());
	}
}