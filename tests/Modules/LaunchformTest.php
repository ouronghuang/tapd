<?php

namespace Orh\Tapd\Tests\Modules;

class LaunchformTest extends TestCase
{
    public function testList()
    {
        $launchForm = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $launchForm->list($query));
    }

    public function testCount()
    {
        $launchForm = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $launchForm->count($query));
    }

    public function testCustomFieldsSettings()
    {
        $launchForm = $this->getModule([__METHOD__]);
        $query = [
            'workspace_id' => 'mock',
        ];

        $this->assertSame([__METHOD__], $launchForm->customFieldsSettings($query));
    }
}
