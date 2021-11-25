<?php

namespace Orh\Tapd\Tests\Modules;

class WikiTest extends TestCase
{
    public function testList()
    {
        $wiki = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $wiki->list($query));
    }

    public function testCount()
    {
        $wiki = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $wiki->count($query));
    }

    public function testStore()
    {
        $wiki = $this->getModule([__METHOD__]);
        $data = [
            'workspace_id' => 'mock',
            'entity_type' => 'mock',
            'entity_id' => 'mock',
            'timespent' => 'mock',
            'owner' => 'mock',
        ];

        $this->assertSame([__METHOD__], $wiki->store($data));
    }

    public function testUpdate()
    {
        $wiki = $this->getModule([__METHOD__]);
        $data = [
            'id' => 'mock',
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $wiki->update($data));
    }
}
