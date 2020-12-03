<?php

namespace Orh\Tapd\Tests\Modules;

class RoleTest extends TestCase
{
    public function testList()
    {
        $role = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $role->list($query));
    }
}
