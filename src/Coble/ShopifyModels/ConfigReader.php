<?php
namespace Coble\ShopifyModels;

interface ConfigReader{
	public function read($fileName);
}