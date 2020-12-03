<?php

namespace Orh\Tapd\Tests\Modules;

class WorkspaceTest extends TestCase
{
    public function testAddMemberByNick()
    {
        $workspace = $this->getModule([__METHOD__]);
        $data = [
            'workspace_id' => 'mock',
            'project_id' => 'mock',
            'nick' => 'mock',
        ];

        $this->assertSame([__METHOD__], $workspace->addMemberByNick($data));
    }

    public function testUsers()
    {
        $workspace = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $workspace->users($query));
    }

    public function testProjects()
    {
        $workspace = $this->getModule([__METHOD__]);
        $query = [
            'company_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $workspace->projects($query));
    }
}
