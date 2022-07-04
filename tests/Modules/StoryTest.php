<?php

namespace Orh\Tapd\Tests\Modules;

class StoryTest extends TestCase
{
    public function testList()
    {
        $story = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $story->list($query));
    }

    public function testCount()
    {
        $story = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $story->count($query));
    }

    public function testStore()
    {
        $story = $this->getModule([__METHOD__]);
        $data = [
            'workspace_id' => 'mock',
            'name' => 'mock',
        ];

        $this->assertSame([__METHOD__], $story->store($data));
    }

    public function testUpdate()
    {
        $story = $this->getModule([__METHOD__]);
        $data = [
            'id' => 'mock',
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $story->update($data));
    }

    public function testCustomFieldsSettings()
    {
        $story = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $story->customFieldsSettings($query));
    }

    public function testGetLinkStories()
    {
        $story = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
            'story_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $story->getLinkStories($query));
    }

    public function testChanges()
    {
        $story = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $story->changes($query));
    }

    public function testChangesCount()
    {
        $story = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $story->changesCount($query));
    }

    public function testCategories()
    {
        $story = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $story->categories($query));
    }

    public function testCategoriesCount()
    {
        $story = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $story->categoriesCount($query));
    }

    public function testGetStoryTcase()
    {
        $story = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
            'story_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $story->getStoryTcase($query));
    }

    public function testUpdateStorySelectFieldOptions()
    {
        $story = $this->getModule([__METHOD__]);
        $data = [
            'id' => 'mock',
            'workspace_id' => 'mock',
            'options' => 'mock',
        ];

        $this->assertSame([__METHOD__], $story->updateStorySelectFieldOptions($data));
    }

    public function testGetFieldsInfo()
    {
        $story = $this->getModule([__METHOD__]);
        $data = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $story->getFieldsInfo($data));
    }
}
