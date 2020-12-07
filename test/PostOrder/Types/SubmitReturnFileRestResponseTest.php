<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\PostOrder\Types;

use DTS\eBaySDK\PostOrder\Types\SubmitReturnFileRestResponse;

class SubmitReturnFileRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\SubmitReturnFileRestResponse', $this->obj);
    }

    public function testExtendsSubmitFileResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\SubmitFileResponse', $this->obj);
    }

    protected function setUp()
    {
        $this->obj = new SubmitReturnFileRestResponse();
    }
}
