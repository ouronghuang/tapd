<?php

namespace Orh\Tapd\Tests\Modules;

class TestTest extends TestCase
{
    public function testList()
    {
        $test = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $test->list($query));
    }

    public function testCount()
    {
        $test = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $test->count($query));
    }

    public function testStore()
    {
        $test = $this->getModule([__METHOD__]);
        $data = [
            'workspace_id' => 'mock',
            'name' => 'mock',
        ];

        $this->assertSame([__METHOD__], $test->store($data));
    }

    public function testUpdate()
    {
        $test = $this->getModule([__METHOD__]);
        $data = [
            'id' => 'mock',
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $test->update($data));
    }

    public function testPlans()
    {
        $test = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $test->plans($query));
    }

    public function testPlansCount()
    {
        $test = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $test->plansCount($query));
    }

    public function testCategories()
    {
        $test = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $test->categories($query));
    }

    public function testCategoriesCount()
    {
        $test = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $test->categoriesCount($query));
    }

    public function testResult()
    {
        $test = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
            'test_plan_id' => 'mock',
            'tcase_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $test->result($query));
    }

    public function testGetStoryByTcaseId()
    {
        $test = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
            'tcase_ids' => 'mock',
        ];

        $this->assertSame([__METHOD__], $test->getStoryByTcaseId($query));
    }
}
