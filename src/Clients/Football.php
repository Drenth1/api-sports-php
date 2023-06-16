<?php

namespace Drenth1\ApiSports\Clients;

use Drenth1\ApiSports\Core\Client;
use Drenth1\ApiSports\Core\Methods\Generic\FetchesGenericEndpoints;
use Drenth1\ApiSports\Core\Methods\Football\FetchesTimezoneEndpoints;

class Football extends Client
{
    use FetchesGenericEndpoints;
    use FetchesTimezoneEndpoints;
}