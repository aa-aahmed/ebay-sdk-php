<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Marketing\Types;

use DTS\eBaySDK\Marketing\Types\BulkDeleteAdsByListingIDRestRequest;

class BulkDeleteAdsByListingIDRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\BulkDeleteAdsByListingIDRestRequest', $this->obj);
    }

    public function testExtendsBulkDeleteAdRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\BulkDeleteAdRequest', $this->obj);
    }

    protected function setUp()
    {
        $this->obj = new BulkDeleteAdsByListingIDRestRequest();
    }
}
