<?php

namespace Orh\Tapd\Tests\Modules;

class ReleaseTest extends TestCase
{
    public function testList()
    {
        $release = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $release->list($query));
    }

    public function testCount()
    {
        $release = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $release->count($query));
    }
}
