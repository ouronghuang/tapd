<?php

namespace Orh\Tapd\Tests;

use Orh\Tapd\Exceptions\{InvalidModuleException, NullException};
use Orh\Tapd\Modules\Base;

class TapdTest extends TestCase
{
    public function testInvalidModule()
    {
        $this->expectException(InvalidModuleException::class);
        $this->expectExceptionMessage('Undefined module: mock.');
        $this->tapd->mock;
    }

    public function testNullHttp()
    {
        $this->expectException(NullException::class);
        $this->expectExceptionMessage('Http attribute is null, please set http first.');
        $this->tapd->story;
    }

    public function testUseModule()
    {
        $apiUser = 'mock-user';
        $apiPassword = 'mock-password';
        $this->tapd->setHttp($apiUser, $apiPassword);

        $this->assertTrue($this->tapd->story instanceof Base);
    }
}
