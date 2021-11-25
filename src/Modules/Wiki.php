<?php

namespace Orh\Tapd\Modules;

class Wiki extends Base
{
    /**
     * 获取 wiki 接口.
     *
     * @url https://www.tapd.cn/help/view#1120003271001000781
     */
    public function list(array $query): array
    {
        $uri = 'tapd_wikis';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 获取 wiki 数量接口.
     *
     * @url https://www.tapd.cn/help/view#1120003271001000782
     */
    public function count(array $query): array
    {
        $uri = 'tapd_wikis/count';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 创建 wiki.
     *
     * @url https://www.tapd.cn/help/view#1120003271001000783
     */
    public function store(array $data): array
    {
        $uri = 'tapd_wikis';

        $rules = [
            'name',
            'creator',
            'workspace_id',
        ];
        $this->validate($data, $rules);

        return $this->http->post($uri, $data);
    }

    /**
     * 更新 wiki.
     *
     * @url https://www.tapd.cn/help/view#1120003271001000784
     */
    public function update(array $data): array
    {
        $uri = 'tapd_wikis';

        $rules = [
            'id',
            'workspace_id',
        ];
        $this->validate($data, $rules);

        return $this->http->post($uri, $data);
    }
}
