<?php

namespace DTS\eBaySDK\Types\Test;

use DTS\eBaySDK\Types\BaseType;

class BaseTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }

    protected function setUp()
    {
        $this->obj = new BaseType();
    }
}
