<?php

namespace Orh\Tapd\Modules;

use Orh\Tapd\Exceptions\{InvalidArgumentException, EmptyArgumentException};
use Orh\Tapd\Http;

class Base
{
    /**
     * HTTP 实例
     *
     * @var Http
     */
    protected $http = null;

    /**
     * 初始化设置
     *
     * @param Http $http
     *
     * @return void
     */
    public function __construct(Http $http)
    {
        $this->http = $http;
    }

    /**
     * 校验参数是否存在
     *
     * @param array $arguments
     * @param array $rules
     *
     * @return void
     * @throws
     */
    protected function validate(array $arguments, array $rules)
    {
        foreach ($rules as $v) {
            if (! isset($arguments[$v])) {
                throw new InvalidArgumentException("The {$v} field is required.");
            }

            if (! $arguments[$v]) {
                throw new EmptyArgumentException("The {$v} field is empty.");
            }
        }
    }
}
