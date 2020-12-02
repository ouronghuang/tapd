<?php

namespace Orh\Tapd\Modules;

class Comment extends Base
{
    /**
     * 获取评论接口
     * @url https://www.tapd.cn/help/view#1120003271001003045
     *
     * @param array $query
     *
     * @return array
     */
    public function list(array $query): array
    {
        $uri = 'comments';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 获取评论数量接口
     * @url https://www.tapd.cn/help/view#1120003271001001452
     *
     * @param array $query
     *
     * @return array
     */
    public function count(array $query): array
    {
        $uri = 'comments/count';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->http->get($uri, $query);
    }

    /**
     * 添加评论接口
     * @url https://www.tapd.cn/help/view#1120003271001003046
     *
     * @param array $data
     *
     * @return array
     */
    public function store(array $data): array
    {
        $uri = 'comments';

        $rules = [
            'description',
            'author',
            'entry_type',
            'entry_id',
            'workspace_id',
        ];
        $this->validate($data, $rules);

        return $this->http->post($uri, $data);
    }

    /**
     * 更新评论接口
     * @url https://www.tapd.cn/help/view#1120003271001002786
     *
     * @param array $data
     *
     * @return array
     */
    public function update(array $data): array
    {
        $uri = 'comments';

        $rules = [
            'id',
            'description',
            'workspace_id',
        ];
        $this->validate($data, $rules);

        return $this->http->post($uri, $data);
    }
}
