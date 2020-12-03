<?php

namespace Orh\Tapd\Tests\Modules;

use Mockery\Matcher\AnyArgs;
use Orh\Tapd\Http;
use Orh\Tapd\Modules\Base;
use PHPUnit\Framework\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function getModule(array $data = []): Base
    {
        $class = get_class($this);
        $class = basename(str_replace('\\', '/', $class));
        $module = "\\Orh\\Tapd\\Modules\\".str_replace('Test', '', $class);

        $http = \Mockery::mock(Http::class);
        $http->allows()->get(new AnyArgs())->andReturn($data);
        $http->allows()->post(new AnyArgs())->andReturn($data);

        return \Mockery::mock($module, [$http])->makePartial();
    }
}
