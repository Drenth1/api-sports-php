<?php

namespace Drenth1\ApiSports\Core\Methods\Football;

use Drenth1\ApiSports\Core\Response;
use Drenth1\ApiSports\Endpoints\Football\Timezone;

trait FetchesTimezoneEndpoints
{
    /**
     * Get the list of available timezone to be used in the fixture endpoint.
     *
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function timezones() : Response
    {
        return $this->fetch(Timezone::class);
    }
}