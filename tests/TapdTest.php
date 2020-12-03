<?php

namespace Orh\Tapd\Tests;

use Orh\Tapd\Exceptions\{InvalidModuleException, NullException};
use Orh\Tapd\Modules\Base;
use Orh\Tapd\Tapd;
use PHPUnit\Framework\TestCase;

class TapdTest extends TestCase
{
    public function testInvalidModule()
    {
        $this->expectException(InvalidModuleException::class);
        $this->expectExceptionMessage('Undefined module: mock.');

        $tapd = new Tapd();
        $tapd->mock;
    }

    public function testNullHttp()
    {
        $this->expectException(NullException::class);
        $this->expectExceptionMessage('Http attribute is null, please set http first.');

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
}
