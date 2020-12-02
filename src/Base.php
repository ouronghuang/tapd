<?php

namespace Orh\Tapd;

use Orh\Tapd\Exceptions\{InvalidArgumentException, EmptyArgumentException};

class Base
{
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
