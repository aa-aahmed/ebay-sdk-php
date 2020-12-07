<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\FileTransfer\Types;

use DTS\eBaySDK\FileTransfer\Types\UploadFileResponse;

class UploadFileResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\FileTransfer\Types\UploadFileResponse', $this->obj);
    }

    public function testExtendsBaseServiceResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\FileTransfer\Types\BaseServiceResponse', $this->obj);
    }

    protected function setUp()
    {
        $this->obj = new UploadFileResponse();
    }
}
