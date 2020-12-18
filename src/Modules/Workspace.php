<?php

namespace Orh\Tapd\Modules;

class Workspace extends Base
{
    /**
     * 添加公司成员到指定项目.
     *
     * @url https://www.tapd.cn/help/view#1120003271001001484
     */
    public function addMemberByNick(array $data): array
    {
        $uri = 'workspaces/add_member_by_nick';

        $rules = [
            'project_id',
            'workspace_id',
            'nick',
        ];
        $this->validate($data, $rules);

        return $this->http->post($uri, $data);
    }

    /**
     * 获取公司下或者项目下成员.
     *
     * @url https://www.tapd.cn/help/view#1120003271001003132
     */
    public function users(array $query): array
    {
        $uri = 'workspaces/users';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 获取公司项目列表.
     *
     * @url https://www.tapd.cn/help/view#1120003271001003174
     */
    public function projects(array $query): array
    {
        $uri = 'workspaces/projects';

        $rules = [
            'company_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }
}
