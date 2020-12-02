<?php

namespace Orh\Tapd;

use Orh\Tapd\Exceptions\{InvalidModuleException, NullException};
use Orh\Tapd\Modules\Base;

class Tapd
{
    /**
     * 可用模块
     *
     * @var array
     */
    protected $modules = [
        'boardcard',
        'bug',
        'comment',
        'iteration',
        'launchform',
        'module',
        'relation',
        'release',
        'role',
        'story',
        'task',
        'test',
        'timesheet',
        'version',
        'workflow',
        'workspace',
    ];

    /**
     * 绑定模块
     *
     * @var array
     */
    protected $binds = [];

    /**
     * HTTP 实例
     *
     * @var Http
     */
    protected $http = null;

    /**
     * 初始化设置
     *
     * @param string $apiUser API 帐号
     * @param string $apiPassword API 口令
     *
     * @return void
     */
    public function setHttp(string $apiUser, string $apiPassword)
    {
        $this->http = new Http($apiUser, $apiPassword);
        $this->binds = [];
    }

    /**
     * 动态加载模块
     *
     * @param string $module
     *
     * @return Base
     * @throws
     */
    public function __get(string $module): Base
    {
        $module = strtolower($module);

        if (! in_array($module, $this->modules)) {
            throw new InvalidModuleException("Undefined module: {$module}.");
        }

        if (! $this->http) {
            throw new NullException('Http attribute is null, please set http first.');
        }

        if (! isset($this->binds[$module])) {
            $class = "\\Orh\\Tapd\\Modules\\".ucfirst($module);
            $this->binds[$module] = new $class($this->http);
        }

        return $this->binds[$module];
    }
}
