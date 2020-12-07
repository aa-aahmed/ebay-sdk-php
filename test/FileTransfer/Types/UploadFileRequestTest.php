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

use DTS\eBaySDK\FileTransfer\Types\UploadFileRequest;

class UploadFileRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\FileTransfer\Types\UploadFileRequest', $this->obj);
    }

    public function testExtendsBaseServiceRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\FileTransfer\Types\BaseServiceRequest', $this->obj);
    }

    protected function setUp()
    {
        $this->obj = new UploadFileRequest();
    }
}
