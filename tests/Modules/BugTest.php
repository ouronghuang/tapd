<?php

namespace Orh\Tapd\Tests\Modules;

class BugTest extends TestCase
{
    public function testList()
    {
        $bug = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $bug->list($query));
    }

    public function testCount()
    {
        $bug = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $bug->count($query));
    }

    public function testGroupCount()
    {
        $bug = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
            'group_field' => 'mock',
        ];

        $this->assertSame([__METHOD__], $bug->groupCount($query));
    }

    public function testStore()
    {
        $bug = $this->getModule([__METHOD__]);
        $data = [
            'workspace_id' => 'mock',
            'title' => 'mock',
        ];

        $this->assertSame([__METHOD__], $bug->store($data));
    }

    public function testUpdate()
    {
        $bug = $this->getModule([__METHOD__]);
        $data = [
            'id' => 'mock',
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $bug->update($data));
    }

    public function testCustomFieldsSettings()
    {
        $bug = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $bug->customFieldsSettings($query));
    }

    public function testChanges()
    {
        $bug = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $bug->changes($query));
    }

    public function testChangesCount()
    {
        $bug = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $bug->changesCount($query));
    }

    public function testGetLinkBugs()
    {
        $bug = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
            'bug_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $bug->getLinkBugs($query));
    }
}
