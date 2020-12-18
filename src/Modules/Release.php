<?php

namespace Orh\Tapd\Modules;

class Release extends Base
{
    /**
     * 获取发布计划接口.
     *
     * @url https://www.tapd.cn/help/view#1120003271001002209
     */
    public function list(array $query): array
    {
        $uri = 'releases';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 获取发布计划数量接口.
     *
     * @url https://www.tapd.cn/help/view#1120003271001001895
     */
    public function count(array $query): array
    {
        $uri = 'releases/count';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }
}
