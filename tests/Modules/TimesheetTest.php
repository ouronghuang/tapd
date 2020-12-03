<?php

namespace Orh\Tapd\Tests\Modules;

class TimesheetTest extends TestCase
{
    public function testList()
    {
        $timesheet = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $timesheet->list($query));
    }

    public function testCount()
    {
        $timesheet = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $timesheet->count($query));
    }

    public function testStore()
    {
        $timesheet = $this->getModule([__METHOD__]);
        $data = [
            'workspace_id' => 'mock',
            'entity_type' => 'mock',
            'entity_id' => 'mock',
            'timespent' => 'mock',
            'owner' => 'mock',
        ];

        $this->assertSame([__METHOD__], $timesheet->store($data));
    }

    public function testUpdate()
    {
        $timesheet = $this->getModule([__METHOD__]);
        $data = [
            'id' => 'mock',
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $timesheet->update($data));
    }
}
