<?php

namespace Orh\Tapd\Tests\Modules;

class RelationTest extends TestCase
{
    public function testList()
    {
        $relation = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $relation->list($query));
    }
}
