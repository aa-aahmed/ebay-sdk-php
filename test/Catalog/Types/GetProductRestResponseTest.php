<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Catalog\Types;

use DTS\eBaySDK\Catalog\Types\GetProductRestResponse;

class GetProductRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Catalog\Types\GetProductRestResponse', $this->obj);
    }

    public function testExtendsProduct()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Catalog\Types\Product', $this->obj);
    }

    protected function setUp()
    {
        $this->obj = new GetProductRestResponse();
    }
}
