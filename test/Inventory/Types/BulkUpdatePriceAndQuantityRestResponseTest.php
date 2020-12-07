<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Inventory\Types;

use DTS\eBaySDK\Inventory\Types\BulkUpdatePriceAndQuantityRestResponse;

class BulkUpdatePriceAndQuantityRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Types\BulkUpdatePriceAndQuantityRestResponse', $this->obj);
    }

    public function testExtendsBulkPriceQuantityResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Types\BulkPriceQuantityResponse', $this->obj);
    }

    protected function setUp()
    {
        $this->obj = new BulkUpdatePriceAndQuantityRestResponse();
    }
}
