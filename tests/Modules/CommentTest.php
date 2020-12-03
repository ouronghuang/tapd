<?php

namespace Orh\Tapd\Tests\Modules;

class CommentTest extends TestCase
{
    public function testList()
    {
        $comment = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $comment->list($query));
    }

    public function testCount()
    {
        $comment = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $comment->count($query));
    }

    public function testStore()
    {
        $comment = $this->getModule([__METHOD__]);
        $data = [
            'workspace_id' => 'mock',
            'description' => 'mock',
            'author' => 'mock',
            'entry_type' => 'mock',
            'entry_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $comment->store($data));
    }

    public function testUpdate()
    {
        $comment = $this->getModule([__METHOD__]);
        $data = [
            'id' => 'mock',
            'workspace_id' => 'mock',
            'description' => 'mock',
        ];

        $this->assertSame([__METHOD__], $comment->update($data));
    }
}
