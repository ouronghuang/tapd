<?php

namespace Orh\Tapd\Modules;

class Iteration extends Base
{
    /**
     * 获取迭代接口
     * @url https://www.tapd.cn/help/view#1120003271001002220
     *
     * @param array $query
     *
     * @return array
     */
    public function iterations(array $query): array
    {
        $uri = 'iterations';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 迭代计数接口
     * @url https://www.tapd.cn/help/view#1120003271001002221
     *
     * @param array $query
     *
     * @return array
     */
    public function iterationsCount(array $query): array
    {
        $uri = 'iterations/count';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 创建迭代
     * @url https://www.tapd.cn/help/view#1120003271001003135
     *
     * @param array $data
     *
     * @return array
     */
    public function iterationsStore(array $data): array
    {
        $uri = 'iterations';

        $rules = [
            'name',
            'workspace_id',
            'startdate',
            'enddate',
            'creator',
        ];
        $this->validate($data, $rules);

        return $this->http->post($uri, $data);
    }

    /**
     * 更新迭代
     * @url https://www.tapd.cn/help/view#1120003271001003136
     *
     * @param array $data
     *
     * @return array
     */
    public function iterationsUpdate(array $data): array
    {
        $uri = 'iterations';

        $rules = [
            'id',
            'workspace_id',
            'current_user',
        ];
        $this->validate($data, $rules);

        return $this->http->post($uri, $data);
    }

    /**
     * 获取迭代自定义字段配置
     * @url https://www.tapd.cn/help/view#1120003271001001457
     *
     * @param array $query
     *
     * @return array
     */
    public function iterationsCustomFieldsSettings(array $query): array
    {
        $uri = 'iterations/custom_fields_settings';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }
}
