<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\BulkDataExchange\Enums;

use DTS\eBaySDK\BulkDataExchange\Enums\AckValue;

class AckValueTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BulkDataExchange\Enums\AckValue', $this->obj);
    }

    protected function setUp()
    {
        $this->obj = new AckValue();
    }
}
