<?php 
namespace Coble\ShopifyModels;


class Request
{
	private $request;
	private $data;
	private $model;


	public function setURL($url)
	{
		$this->request['url'] = $url;
	}

	public function getURL()
	{
		return $this->request['url'];
	}

	public function setData($data)
	{
		$this->data = $data;
	}

	public function getData()
	{
		return $this->data;
	}

	public function setMethod($method)
	{
		$this->request['method'] = $method;
	}

	public function getMethod()
	{
		return $this->request['method'];
	}

	public function setModel(Model $model)
	{
		$this->model = $model;
	}

	public function getModel()
	{
		return $this->model;	
	}
	

	public function toArray()
	{
		$data = [
			'URL' => $this->request['url'],
			'METHOD' => $this->request['method'],
			'FAILONERROR' => FALSE,
			'ALLDATA' => true,
		];


		if( $this->request['method'] == 'POST' || $this->request['method'] == 'PUT' )
		{
			$data['DATA'] = $this->data;
		}

		return $data;
	}
}