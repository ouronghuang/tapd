<?php

namespace Orh\Tapd\Tests\Modules;

class TaskTest extends TestCase
{
    public function testList()
    {
        $task = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $task->list($query));
    }

    public function testCount()
    {
        $task = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $task->count($query));
    }

    public function testStore()
    {
        $task = $this->getModule([__METHOD__]);
        $data = [
            'workspace_id' => 'mock',
            'name' => 'mock',
            'creator' => 'mock',
        ];

        $this->assertSame([__METHOD__], $task->store($data));
    }

    public function testUpdate()
    {
        $task = $this->getModule([__METHOD__]);
        $data = [
            'id' => 'mock',
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $task->update($data));
    }

    public function testCustomFieldsSettings()
    {
        $task = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $task->customFieldsSettings($query));
    }

    public function testChanges()
    {
        $task = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $task->changes($query));
    }

    public function testChangesCount()
    {
        $task = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $task->changesCount($query));
    }
}
