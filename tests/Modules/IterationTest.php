<?php

namespace Orh\Tapd\Tests\Modules;

class IterationTest extends TestCase
{
    public function testList()
    {
        $iteration = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $iteration->list($query));
    }

    public function testCount()
    {
        $iteration = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $iteration->count($query));
    }

    public function testStore()
    {
        $iteration = $this->getModule([__METHOD__]);
        $data = [
            'workspace_id' => 'mock',
            'name' => 'mock',
            'startdate' => 'mock',
            'enddate' => 'mock',
            'creator' => 'mock',
        ];

        $this->assertSame([__METHOD__], $iteration->store($data));
    }

    public function testUpdate()
    {
        $iteration = $this->getModule([__METHOD__]);
        $data = [
            'id' => 'mock',
            'workspace_id' => 'mock',
            'current_user' => 'mock',
        ];

        $this->assertSame([__METHOD__], $iteration->update($data));
    }

    public function testCustomFieldsSettings()
    {
        $iteration = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $iteration->customFieldsSettings($query));
    }
}
