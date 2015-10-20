<?php 
namespace Coble\ShopifyModels;

trait ModelSelfUpdatable
{

	private function selfUpdate($data = [])
	{
		foreach($this->modelAttributes as $attribute)
		{
			foreach($data as $attributeName => $attributeValue)
			{
				if($attribute == $attributeName)
				{
					$this->$attribute = $attributeValue;
				}
			}
		}
	}
}