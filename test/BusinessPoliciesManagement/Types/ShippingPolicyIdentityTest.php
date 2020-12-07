<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\BusinessPoliciesManagement\Types;

use DTS\eBaySDK\BusinessPoliciesManagement\Types\ShippingPolicyIdentity;

class ShippingPolicyIdentityTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BusinessPoliciesManagement\Types\ShippingPolicyIdentity', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }

    protected function setUp()
    {
        $this->obj = new ShippingPolicyIdentity();
    }
}
