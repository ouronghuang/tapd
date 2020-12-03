<?php

namespace Orh\Tapd\Tests\Modules;

class VersionTest extends TestCase
{
    public function testList()
    {
        $version = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $version->list($query));
    }

    public function testCount()
    {
        $version = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $version->count($query));
    }

    public function testStore()
    {
        $version = $this->getModule([__METHOD__]);
        $data = [
            'workspace_id' => 'mock',
            'name' => 'mock',
            'creator' => 'mock',
        ];

        $this->assertSame([__METHOD__], $version->store($data));
    }

    public function testUpdate()
    {
        $version = $this->getModule([__METHOD__]);
        $data = [
            'id' => 'mock',
            'workspace_id' => 'mock',
            'modifier' => 'mock',
        ];

        $this->assertSame([__METHOD__], $version->update($data));
    }
}
