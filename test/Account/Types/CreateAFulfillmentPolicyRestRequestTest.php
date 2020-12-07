<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Account\Types;

use DTS\eBaySDK\Account\Types\CreateAFulfillmentPolicyRestRequest;

class CreateAFulfillmentPolicyRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\CreateAFulfillmentPolicyRestRequest', $this->obj);
    }

    public function testExtendsFulfillmentPolicyRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\FulfillmentPolicyRequest', $this->obj);
    }

    protected function setUp()
    {
        $this->obj = new CreateAFulfillmentPolicyRestRequest();
    }
}
