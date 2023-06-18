<?php

namespace Drenth1\ApiSports\Core\Methods\Generic;

use Drenth1\ApiSports\Core\Response;
use Drenth1\ApiSports\Endpoints\Generic\Status;

trait FetchesGenericEndpoints
{
    /**
     * Fetch the status endpoint and return a response.
     *
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function status() : Response
    {
        return $this->fetch(Status::class);
    }
}