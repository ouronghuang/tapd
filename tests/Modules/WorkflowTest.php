<?php

namespace Orh\Tapd\Tests\Modules;

class WorkflowTest extends TestCase
{
    public function testStatusMap()
    {
        $workflow = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
            'system' => 'mock',
        ];

        $this->assertSame([__METHOD__], $workflow->statusMap($query));
    }
}
