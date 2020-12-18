<?php

namespace Orh\Tapd\Modules;

class Boardcard extends Base
{
    /**
     * 获取看板工作项接口.
     *
     * @url https://www.tapd.cn/help/view#1120003271001003019
     */
    public function list(array $query): array
    {
        $uri = 'board_cards';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 新建看板工作项.
     *
     * @url https://www.tapd.cn/help/view#1120003271001003020
     */
    public function store(array $data): array
    {
        $uri = 'board_cards';

        $rules = [
            'workspace_id',
            'b_board_id',
            'b_column_id',
            'name',
        ];
        $this->validate($data, $rules);

        return $this->http->post($uri, $data);
    }

    /**
     * 更新看板工作项.
     *
     * @url https://www.tapd.cn/help/view#1120003271001003021
     */
    public function update(array $data): array
    {
        $uri = 'board_cards';

        $rules = [
            'id',
            'workspace_id',
        ];
        $this->validate($data, $rules);

        return $this->http->post($uri, $data);
    }
}
