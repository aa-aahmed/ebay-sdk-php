<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Merchandising\Types;

use DTS\eBaySDK\Merchandising\Types\GetTopSellingProductsRequest;

class GetTopSellingProductsRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Merchandising\Types\GetTopSellingProductsRequest', $this->obj);
    }

    public function testExtendsBaseMerchandisingServiceRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Merchandising\Types\BaseMerchandisingServiceRequest', $this->obj);
    }

    protected function setUp()
    {
        $this->obj = new GetTopSellingProductsRequest();
    }
}
