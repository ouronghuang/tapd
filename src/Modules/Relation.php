<?php

namespace Orh\Tapd\Modules;

class Relation extends Base
{
    /**
     * 获取关联关系接口
     * @url https://www.tapd.cn/help/view#1120003271001002903
     *
     * @param array $query
     *
     * @return array
     */
    public function relations(array $query): array
    {
        $uri = 'relations';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }
}
