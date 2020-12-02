<?php

namespace Orh\Tapd\Modules;

class Launchform extends Base
{
    /**
     * 获取发布评审接口
     * @url https://www.tapd.cn/help/view#1120003271001003127
     *
     * @param array $query
     *
     * @return array
     */
    public function list(array $query): array
    {
        $uri = 'launch_forms';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 获取发布评审数量接口
     * @url https://www.tapd.cn/help/view#1120003271001003128
     *
     * @param array $query
     *
     * @return array
     */
    public function count(array $query): array
    {
        $uri = 'launch_forms/count';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 获取发布评审自定义字段配置
     * @url https://www.tapd.cn/help/view#1120003271001002764
     *
     * @param array $query
     *
     * @return array
     */
    public function customFieldsSettings(array $query): array
    {
        $uri = 'launch_forms/custom_fields_settings';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }
}
