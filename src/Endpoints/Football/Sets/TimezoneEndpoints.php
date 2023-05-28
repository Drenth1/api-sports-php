<?php

namespace Drenth1\ApiSports\Endpoints\Football\Sets;

use Drenth1\ApiSports\Core\ApiResponse;
use Drenth1\ApiSports\Endpoints\Football\Timezone;

trait TimezoneEndpoints
{
    /**
     * Get the list of available timezone to be used in endpoints.
     *
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function timezones() : ApiResponse
    {
        return $this->fetch(Timezone::class);
    }
}