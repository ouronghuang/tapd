<?php

namespace Orh\Tapd\Modules;

class Module extends Base
{
    /**
     * 获取模块接口
     * @url https://www.tapd.cn/help/view#1120003271001002218
     *
     * @param array $query
     *
     * @return array
     */
    public function list(array $query): array
    {
        $uri = 'modules';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 获取模块数量接口
     * @url https://www.tapd.cn/help/view#1120003271001002219
     *
     * @param array $query
     *
     * @return array
     */
    public function count(array $query): array
    {
        $uri = 'modules/count';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 新建模块接口
     * @url https://www.tapd.cn/help/view#1120003271001003028
     *
     * @param array $data
     *
     * @return array
     */
    public function store(array $data): array
    {
        $uri = 'modules';

        $rules = [
            'name',
            'workspace_id',
        ];
        $this->validate($data, $rules);

        return $this->http->post($uri, $data);
    }

    /**
     * 更新模块接口
     * @url https://www.tapd.cn/help/view#1120003271001003027
     *
     * @param array $data
     *
     * @return array
     */
    public function update(array $data): array
    {
        $uri = 'modules';

        $rules = [
            'id',
            'workspace_id',
        ];
        $this->validate($data, $rules);

        return $this->http->post($uri, $data);
    }
}
