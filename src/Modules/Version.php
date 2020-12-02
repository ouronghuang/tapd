<?php

namespace Orh\Tapd\Modules;

class Version extends Base
{
    /**
     * 获取版本接口
     * @url https://www.tapd.cn/help/view#1120003271001003017
     *
     * @param array $query
     *
     * @return array
     */
    public function list(array $query): array
    {
        $uri = 'versions';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 获取版本数量接口
     * @url https://www.tapd.cn/help/view#1120003271001003018
     *
     * @param array $query
     *
     * @return array
     */
    public function count(array $query): array
    {
        $uri = 'versions/count';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 创建版本接口
     * @url https://www.tapd.cn/help/view#1120003271001003015
     *
     * @param array $data
     *
     * @return array
     */
    public function store(array $data): array
    {
        $uri = 'versions';

        $rules = [
            'workspace_id',
            'name',
            'creator',
        ];
        $this->validate($data, $rules);

        return $this->http->post($uri, $data);
    }

    /**
     * 更新版本接口
     * @url https://www.tapd.cn/help/view#1120003271001003016
     *
     * @param array $data
     *
     * @return array
     */
    public function update(array $data): array
    {
        $uri = 'versions';

        $rules = [
            'id',
            'workspace_id',
            'modifier',
        ];
        $this->validate($data, $rules);

        return $this->http->post($uri, $data);
    }
}
