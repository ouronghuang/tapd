<?php

namespace Orh\Tapd\Tests\Modules;

class ModuleTest extends TestCase
{
    public function testList()
    {
        $module = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $module->list($query));
    }

    public function testCount()
    {
        $module = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $module->count($query));
    }

    public function testStore()
    {
        $module = $this->getModule([__METHOD__]);
        $data = [
            'workspace_id' => 'mock',
            'name' => 'mock',
        ];

        $this->assertSame([__METHOD__], $module->store($data));
    }

    public function testUpdate()
    {
        $module = $this->getModule([__METHOD__]);
        $data = [
            'id' => 'mock',
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $module->update($data));
    }
}
