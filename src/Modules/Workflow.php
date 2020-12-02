<?php

namespace Orh\Tapd\Modules;

class Workflow extends Base
{
    /**
     * 获取工作流状态中英文名对应关系
     * @url https://www.tapd.cn/help/view#1120003271001001453
     *
     * @param array $query
     *
     * @return array
     */
    public function statusMap(array $query): array
    {
        $uri = 'workflows/status_map';

        $rules = [
            'workspace_id',
            'system',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }
}
