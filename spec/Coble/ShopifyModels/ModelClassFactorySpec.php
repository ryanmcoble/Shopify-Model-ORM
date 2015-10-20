<?php

namespace spec\Coble\ShopifyModels;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ModelClassNameBuilderSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Coble\ShopifyModels\ModelClassNameBuilder');
    }

    function it_should_concatenate_a_shopify_model_class_with_namespace()
    {
    	// will throw an exception
    	$this->beConstructedThrough('make', ['TestModel']);
    	$this->shouldThrow('Exception')->duringInstantiation();


    	$this->beConstructedThrough('make', ['Product']);
    	$this->shouldBeEqualTo('Coble\ShopifyModels\Models\Product');
    	
    }
}
