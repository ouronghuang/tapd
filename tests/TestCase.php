<?php

namespace Orh\Tapd\Tests;

use Orh\Tapd\Tapd;
use PHPUnit\Framework\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected $tapd = null;

    public function __construct()
    {
        parent::__construct();

        $this->tapd = new Tapd();
    }
}
