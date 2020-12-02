<?php

namespace Orh\Tapd\Modules;

class Bug extends Base
{
    /**
     * 获取缺陷接口
     * @url https://www.tapd.cn/help/view#1120003271001003101
     *
     * @param array $query
     *
     * @return array
     */
    public function list(array $query): array
    {
        $uri = 'bugs';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 缺陷计数接口
     * @url https://www.tapd.cn/help/view#1120003271001002734
     *
     * @param array $query
     *
     * @return array
     */
    public function count(array $query): array
    {
        $uri = 'bugs/count';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 缺陷统计接口
     * @url https://www.tapd.cn/help/view#1120003271001001061
     *
     * @param array $query
     *
     * @return array
     */
    public function groupCount(array $query): array
    {
        $uri = 'bugs/group_count';

        $rules = [
            'workspace_id',
            'group_field',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 添加缺陷接口
     * @url https://www.tapd.cn/help/view#1120003271001002376
     *
     * @param array $data
     *
     * @return array
     */
    public function store(array $data): array
    {
        $uri = 'bugs';

        $rules = [
            'title',
            'workspace_id',
        ];
        $this->validate($data, $rules);

        return $this->http->post($uri, $data);
    }

    /**
     * 更新缺陷接口
     * @url https://www.tapd.cn/help/view#1120003271001002672
     *
     * @param array $data
     *
     * @return array
     */
    public function update(array $data): array
    {
        $uri = 'bugs';

        $rules = [
            'id',
            'workspace_id',
        ];
        $this->validate($data, $rules);

        return $this->http->post($uri, $data);
    }

    /**
     * 获取缺陷自定义字段配置
     * @url https://www.tapd.cn/help/view#1120003271001001455
     *
     * @param array $query
     *
     * @return array
     */
    public function customFieldsSettings(array $query): array
    {
        $uri = 'bugs/custom_fields_settings';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 获取缺陷变更历史接口
     * @url https://www.tapd.cn/help/view#1120003271001001656
     *
     * @param array $query
     *
     * @return array
     */
    public function changes(array $query): array
    {
        $uri = 'bug_changes';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 获取缺陷变更历史数量
     * @url https://www.tapd.cn/help/view#1120003271001001849
     *
     * @param array $query
     *
     * @return array
     */
    public function changesCount(array $query): array
    {
        $uri = 'bug_changes/count';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 获取缺陷与其它缺陷的所有关联关系
     * @url https://www.tapd.cn/help/view#1120003271001003133
     *
     * @param array $query
     *
     * @return array
     */
    public function getLinkBugs(array $query): array
    {
        $uri = 'bug_changes/count';

        $rules = [
            'workspace_id',
            'bug_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }
}
