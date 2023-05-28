<?php

namespace Drenth1\ApiSports\Endpoints\Shared\Sets;

use Drenth1\ApiSports\Core\ApiResponse;
use Drenth1\ApiSports\Endpoints\Shared\Status;

trait SharedEndpoints
{
    /**
     * Get the status of the api.
     *
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function status() : ApiResponse
    {
        return $this->fetch(Status::class);
    }
}