<?php

namespace Orh\Tapd;

use Orh\Tapd\Exceptions\InvalidModuleException;
use Orh\Tapd\Modules\Base;

class Tapd
{
    /**
     * 可用模块.
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
     * 绑定模块.
     *
     * @var array
     */
    protected $binds = [];

    /**
     * HTTP 实例.
     *
     * @var Http
     */
    protected $http = null;

    public function __construct(string $apiUser, string $apiPassword)
    {
        $this->setHttp($apiUser, $apiPassword);
    }

    public function setHttp(string $apiUser, string $apiPassword)
    {
        $this->http = new Http($apiUser, $apiPassword);
        $this->binds = [];
    }

    /**
     * 动态加载模块.
     *
     * @throws
     */
    public function __get(string $module): Base
    {
        $module = strtolower($module);

        if (! in_array($module, $this->modules)) {
            throw new InvalidModuleException("The module [{$module}] is undefined.");
        }

        if (! isset($this->binds[$module])) {
            $class = '\\Orh\\Tapd\\Modules\\'.ucfirst($module);
            $this->binds[$module] = new $class($this->http);
        }

        return $this->binds[$module];
    }
}
