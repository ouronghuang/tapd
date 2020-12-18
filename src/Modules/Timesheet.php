<?php

namespace Orh\Tapd\Modules;

class Timesheet extends Base
{
    /**
     * 获取花费工时接口.
     *
     * @url https://www.tapd.cn/help/view#1120003271001002265
     */
    public function list(array $query): array
    {
        $uri = 'timesheets';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 获取花费工时数量接口.
     *
     * @url https://www.tapd.cn/help/view#1120003271001002264
     */
    public function count(array $query): array
    {
        $uri = 'timesheets/count';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 创建工时花费.
     *
     * @url https://www.tapd.cn/help/view#1120003271001002979
     */
    public function store(array $data): array
    {
        $uri = 'timesheets';

        $rules = [
            'entity_type',
            'entity_id',
            'timespent',
            'owner',
            'workspace_id',
        ];
        $this->validate($data, $rules);

        return $this->http->post($uri, $data);
    }

    /**
     * 更新工时花费.
     *
     * @url https://www.tapd.cn/help/view#1120003271001002980
     */
    public function update(array $data): array
    {
        $uri = 'timesheets';

        $rules = [
            'id',
            'workspace_id',
        ];
        $this->validate($data, $rules);

        return $this->http->post($uri, $data);
    }
}
