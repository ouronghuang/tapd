<?php

namespace Orh\Tapd\Modules;

class Role extends Base
{
    /**
     * 获取项目角色接口
     * @url https://www.tapd.cn/help/view#1120003271001002373
     *
     * @param array $query
     *
     * @return array
     */
    public function list(array $query): array
    {
        $uri = 'roles';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }
}
