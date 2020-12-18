<?php

namespace Orh\Tapd\Tests;

use Orh\Tapd\Exceptions\EmptyArgumentException;
use Orh\Tapd\Exceptions\InvalidArgumentException;
use Orh\Tapd\Exceptions\InvalidModuleException;
use Orh\Tapd\Exceptions\NullException;
use Orh\Tapd\Modules\Base;
use Orh\Tapd\Tapd;
use PHPUnit\Framework\TestCase;

class TapdTest extends TestCase
{
    public function testInvalidModule()
    {
        $this->expectException(InvalidModuleException::class);
        $this->expectExceptionMessage('The module [mock] is undefined.');

        $tapd = new Tapd();
        $tapd->mock;
    }

    public function testNullHttp()
    {
        $this->expectException(NullException::class);
        $this->expectExceptionMessage('The http attribute is null, please set http first.');

        $tapd = new Tapd();
        $tapd->story;
    }

    public function testUseModule()
    {
        $apiUser = 'mock-user';
        $apiPassword = 'mock-password';
        $tapd = new Tapd();
        $tapd->setHttp($apiUser, $apiPassword);

        $this->assertInstanceOf(Base::class, $tapd->story);
    }

    public function testInvalidArgument()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('The [workspace_id] field is required.');

        $apiUser = 'mock-user';
        $apiPassword = 'mock-password';
        $tapd = new Tapd();
        $tapd->setHttp($apiUser, $apiPassword);
        $query = [];
        $tapd->story->list($query);
    }

    public function testEmptyArgument()
    {
        $this->expectException(EmptyArgumentException::class);
        $this->expectExceptionMessage('The [workspace_id] field is empty.');

        $apiUser = 'mock-user';
        $apiPassword = 'mock-password';
        $tapd = new Tapd();
        $tapd->setHttp($apiUser, $apiPassword);
        $query = ['workspace_id' => ''];
        $tapd->story->list($query);
    }
}
