<?php

namespace Orh\Tapd\Modules;

class Story extends Base
{
    /**
     * 获取需求接口.
     *
     * @url https://www.tapd.cn/help/view#1120003271001003102
     */
    public function list(array $query = []): array
    {
        $uri = 'stories';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 需求计数接口.
     *
     * @url https://www.tapd.cn/help/view#1120003271001001487
     */
    public function count(array $query = []): array
    {
        $uri = 'stories/count';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 新建需求接口.
     *
     * @url https://www.tapd.cn/help/view#1120003271001002374
     */
    public function store(array $data): array
    {
        $uri = 'stories';

        $rules = [
            'name',
            'workspace_id',
        ];
        $this->validate($data, $rules);

        return $this->http->post($uri, $data);
    }

    /**
     * 更新需求接口.
     *
     * @url https://www.tapd.cn/help/view#1120003271001002905
     */
    public function update(array $data): array
    {
        $uri = 'stories';

        $rules = [
            'id',
            'workspace_id',
        ];
        $this->validate($data, $rules);

        return $this->http->post($uri, $data);
    }

    /**
     * 获取需求自定义字段配置.
     *
     * @url https://www.tapd.cn/help/view#1120003271001001456
     */
    public function customFieldsSettings(array $query): array
    {
        $uri = 'stories/custom_fields_settings';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 获取需求与其它需求的所有关联关系.
     *
     * @url https://www.tapd.cn/help/view#1120003271001002372
     */
    public function getLinkStories(array $query): array
    {
        $uri = 'stories/get_link_stories';

        $rules = [
            'workspace_id',
            'story_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 获取需求变更历史接口.
     *
     * @url https://www.tapd.cn/help/view#1120003271001003048
     */
    public function changes(array $query): array
    {
        $uri = 'story_changes';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 获取需求变更次数.
     *
     * @url https://www.tapd.cn/help/view#1120003271001001496
     */
    public function changesCount(array $query): array
    {
        $uri = 'story_changes/count';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 获取需求分类接口.
     *
     * @url https://www.tapd.cn/help/view#1120003271001001564
     */
    public function categories(array $query): array
    {
        $uri = 'story_categories';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 获取需求分类数量.
     *
     * @url https://www.tapd.cn/help/view#1120003271001001565
     */
    public function categoriesCount(array $query): array
    {
        $uri = 'story_categories/count';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 获取需求与测试用例关联关系接口.
     *
     * @url https://www.tapd.cn/help/view#1120003271001003025
     */
    public function getStoryTcase(array $query): array
    {
        $uri = 'stories/get_story_tcase';

        $rules = [
            'story_id',
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 更新需求下拉类型自定义字段候选值
     *
     * @url https://www.tapd.cn/help/view#1120003271001003130
     */
    public function updateStorySelectFieldOptions(array $data): array
    {
        $uri = 'custom_field_configs/update_story_select_field_options';

        $rules = [
            'id',
            'workspace_id',
            'options',
        ];
        $this->validate($data, $rules);

        return $this->http->post($uri, $data);
    }

    /**
     * 获取需求所有字段及候选值
     *
     * @url https://www.tapd.cn/help/show#1120003271001000817
     */
    public function getFieldsInfo(array $data): array
    {
        $uri = 'stories/get_fields_info';

        $rules = [
            'workspace_id',
        ];
        $this->validate($data, $rules);

        return $this->http->get($uri, $data);
    }
}
