<?php

namespace Orh\Tapd;

use Orh\Tapd\Modules\{Bug, Story, Task};

class Tapd
{
    /**
     * 缺陷类
     *
     * @var Bug
     */
    public $bug = null;
    
    /**
     * 需求类
     *
     * @var Story
     */
    public $story = null;

    /**
     * 任务类
     *
     * @var Task
     */
    public $task = null;

    /**
     * 初始化设置
     *
     * @param string $apiUser API 帐号
     * @param string $apiPassword API 口令
     *
     * @return void
     */
    public function __construct(string $apiUser, string $apiPassword)
    {
        $http = new Http($apiUser, $apiPassword);

        $this->bug = new Bug($http);
        $this->story = new Story($http);
        $this->task = new Task($http);
    }
}
