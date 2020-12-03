<?php

namespace Orh\Tapd\Tests\Modules;

class BoardcardTest extends TestCase
{
    public function testList()
    {
        $boardcard = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $boardcard->list($query));
    }

    public function testStore()
    {
        $boardcard = $this->getModule([__METHOD__]);
        $data = [
            'workspace_id' => 'mock',
            'b_board_id' => 'mock',
            'b_column_id' => 'mock',
            'name' => 'mock',
        ];

        $this->assertSame([__METHOD__], $boardcard->store($data));
    }

    public function testUpdate()
    {
        $boardcard = $this->getModule([__METHOD__]);
        $data = [
            'id' => 'mock',
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $boardcard->update($data));
    }
}
