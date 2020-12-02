<?php

namespace Orh\Tapd;

class Story extends Base
{
    protected $client = null;

    public function __construct(Http $client)
    {
        $this->client = $client;
    }

    /**
     * 获取需求接口
     * @url https://www.tapd.cn/help/view#1120003271001003102
     *
     * @param array $query
     *
     * @return array
     */
    public function stories(array $query = []): array
    {
        $uri = 'stories';

        return $this->client->get($uri, $query);
    }

    /**
     * 需求计数接口
     * @url https://www.tapd.cn/help/view#1120003271001001487
     *
     * @param array $query
     *
     * @return array
     */
    public function storiesCount(array $query = []): array
    {
        $uri = 'stories/count';

        return $this->client->get($uri, $query);
    }

    /**
     * 新建需求接口
     * @url https://www.tapd.cn/help/view#1120003271001002374
     *
     * @param array $data
     *
     * @return array
     */
    public function storiesStore(array $data): array
    {
        $uri = 'stories';

        $rules = [
            'name',
            'workspace_id',
        ];
        $this->validate($data, $rules);

        return $this->client->post($uri, $data);
    }

    /**
     * 更新需求接口
     * @url https://www.tapd.cn/help/view#1120003271001002905
     *
     * @param array $data
     *
     * @return array
     */
    public function storiesUpdate(array $data): array
    {
        $uri = 'stories';

        $rules = [
            'id',
            'workspace_id',
        ];
        $this->validate($data, $rules);

        return $this->client->post($uri, $data);
    }

    /**
     * 获取需求自定义字段配置
     * @url https://www.tapd.cn/help/view#1120003271001001456
     *
     * @param array $query
     *
     * @return array
     */
    public function storiesCustomFieldsSettings(array $query): array
    {
        $uri = 'stories/custom_fields_settings';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->client->get($uri, $query);
    }

    /**
     * 获取需求与其它需求的所有关联关系
     * @url https://www.tapd.cn/help/view#1120003271001002372
     *
     * @param array $query
     *
     * @return array
     */
    public function storiesGetLinkStories(array $query): array
    {
        $uri = 'stories/get_link_stories';

        $rules = [
            'workspace_id',
            'story_id',
        ];
        $this->validate($query, $rules);

        return $this->client->get($uri, $query);
    }

    /**
     * 获取需求变更历史接口
     * @url https://www.tapd.cn/help/view#1120003271001003048
     *
     * @param array $query
     *
     * @return array
     */
    public function storyChanges(array $query): array
    {
        $uri = 'story_changes';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->client->get($uri, $query);
    }

    /**
     * 获取需求变更次数
     * @url https://www.tapd.cn/help/view#1120003271001001496
     *
     * @param array $query
     *
     * @return array
     */
    public function storyChangesCount(array $query): array
    {
        $uri = 'story_changes/count';

        $rules = [
            'workspace_id',
        ];
        $this->validate($query, $rules);

        return $this->client->get($uri, $query);
    }
}
