<?php

namespace spec\Coble\ShopifyModels;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use Coble\ShopifyModels\Models\Product;

class RequestSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Coble\ShopifyModels\Request');
    }

    function it_should_store_an_array_of_settings_for_shopify_connection()
    {
    	$this->toArray()->shouldBeArray();

    	$this->toArray()->shouldHaveKey('URL');
    	$this->toArray()->shouldHaveKey('METHOD');
    }

    function it_should_store_a_shopify_model(Product $product)
    {
    	
    	$this->setModel($product);

    	$this->getModel()->shouldBeAnInstanceOf('Coble\ShopifyModels\Models\Product');
    }
}
