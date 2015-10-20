<?php

namespace spec\Coble\ShopifyModels;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ShopifyModelFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Coble\ShopifyModels\ShopifyModelFactory');
    }

    function it_should_make_a_shopify_model_class_instance()
    {

    	$this->beConstructedThrough('make', ['Product']);
    	$this->shouldBeAnInstanceOf('Coble\ShopifyModels\Models\Product');

    }
}
