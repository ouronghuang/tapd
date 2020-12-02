<?php

namespace Orh\Tapd;

class Tapd
{
    protected $client = null;

    public $story = null;

    public function __construct(string $apiUser, string $apiPassword)
    {
        $this->client = new Http($apiUser, $apiPassword);

        $this->story = new Story($this->client);
    }
}
