<?php

namespace Orh\Tapd\Modules;

class Test extends Base
{
    /**
     * 获取测试用例接口
     * @url https://www.tapd.cn/help/view#1120003271001001911
     *
     * @param array $query
     *
     * @return array
     */
    public function list(array $query): array
    {
        $uri = 'tcases';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 获取测试用例数量
     * @url https://www.tapd.cn/help/view#1120003271001001653
     *
     * @param array $query
     *
     * @return array
     */
    public function count(array $query): array
    {
        $uri = 'tcases/count';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 创建测试用例
     * @url https://www.tapd.cn/help/view#1120003271001002222
     *
     * @param array $data
     *
     * @return array
     */
    public function store(array $data): array
    {
        $uri = 'tcases';

        $rules = [
            'name',
            'workspace_id',
        ];
        $this->validate($data, $rules);

        return $this->http->post($uri, $data);
    }

    /**
     * 更新测试用例
     * @url https://www.tapd.cn/help/view#1120003271001001910
     *
     * @param array $data
     *
     * @return array
     */
    public function update(array $data): array
    {
        $uri = 'tcases';

        $rules = [
            'id',
            'workspace_id',
        ];
        $this->validate($data, $rules);

        return $this->http->post($uri, $data);
    }

    /**
     * 获取测试计划接口
     * @url https://www.tapd.cn/help/view#1120003271001001654
     *
     * @param array $query
     *
     * @return array
     */
    public function plans(array $query): array
    {
        $uri = 'test_plans';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 获取测试计划数量
     * @url https://www.tapd.cn/help/view#1120003271001001655
     *
     * @param array $query
     *
     * @return array
     */
    public function plansCount(array $query): array
    {
        $uri = 'test_plans/count';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 获取测试用例目录接口
     * @url https://www.tapd.cn/help/view#1120003271001001912
     *
     * @param array $query
     *
     * @return array
     */
    public function categories(array $query): array
    {
        $uri = 'tcase_categories';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 获取测试用例目录数量
     * @url https://www.tapd.cn/help/view#1120003271001001713
     *
     * @param array $query
     *
     * @return array
     */
    public function categoriesCount(array $query): array
    {
        $uri = 'tcase_categories/count';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 获取测试用例执行结果
     * @url https://www.tapd.cn/help/view#1120003271001003044
     *
     * @param array $query
     *
     * @return array
     */
    public function result(array $query): array
    {
        $uri = 'tcase_instance/result';

        $rules = [
            'workspace_id',
            'test_plan_id',
            'tcase_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 获取测试用例关联的需求接口
     * @url https://www.tapd.cn/help/view#1120003271001003126
     *
     * @param array $query
     *
     * @return array
     */
    public function getStoryByTcaseId(array $query): array
    {
        $uri = 'tcases/get_story_by_tcase_id';

        $rules = [
            'workspace_id',
            'tcase_ids',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }
}
