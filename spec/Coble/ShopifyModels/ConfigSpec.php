<?php

namespace spec\Coble\ShopifyModels;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ConfigSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Coble\ShopifyModels\Config');
    }

    function it_should_set_values_to_array()
    {
    	$this->set('test_key', 'example');
    	$this->get('test_key')->shouldBeEqualTo('example');
    }

    function it_should_fetch_an_array()
    {
    	$this->set('test_key', 'example');

        $this->getAll()->shouldBeArray();
    	$this->getAll()->shouldHaveKeyWithValue('test_key', 'example');
    }
}
