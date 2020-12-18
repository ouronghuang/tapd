<?php

namespace Orh\Tapd\Modules;

class Task extends Base
{
    /**
     * 获取任务接口.
     *
     * @url https://www.tapd.cn/help/view#1120003271001003100
     */
    public function list(array $query): array
    {
        $uri = 'tasks';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 任务计数接口.
     *
     * @url https://www.tapd.cn/help/view#1120003271001001493
     */
    public function count(array $query): array
    {
        $uri = 'tasks/count';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 新建任务接口.
     *
     * @url https://www.tapd.cn/help/view#1120003271001002342
     */
    public function store(array $data): array
    {
        $uri = 'tasks';

        $rules = [
            'name',
            'creator',
            'workspace_id',
        ];
        $this->validate($data, $rules);

        return $this->http->post($uri, $data);
    }

    /**
     * 更新任务接口.
     *
     * @url https://www.tapd.cn/help/view#1120003271001003169
     */
    public function update(array $data): array
    {
        $uri = 'tasks';

        $rules = [
            'id',
            'workspace_id',
        ];
        $this->validate($data, $rules);

        return $this->http->post($uri, $data);
    }

    /**
     * 获取任务自定义字段配置.
     *
     * @url https://www.tapd.cn/help/view#1120003271001001454
     */
    public function customFieldsSettings(array $query): array
    {
        $uri = 'tasks/custom_fields_settings';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 获取任务变更历史.
     *
     * @url https://www.tapd.cn/help/view#1120003271001003026
     */
    public function changes(array $query): array
    {
        $uri = 'task_changes';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 获取任务变更次数.
     *
     * @url https://www.tapd.cn/help/view#1120003271001003134
     */
    public function changesCount(array $query): array
    {
        $uri = 'task_changes/count';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }
}
