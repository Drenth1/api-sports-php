<?php

namespace Drenth1\ApiSports\Clients;

use Drenth1\ApiSports\Core\Client;
use Drenth1\ApiSports\Endpoints\Shared\Sets\SharedEndpoints;
use Drenth1\ApiSports\Endpoints\Football\Sets\CountryEndpoints;
use Drenth1\ApiSports\Endpoints\Football\Sets\TimezoneEndpoints;

class Football extends Client
{
    use SharedEndpoints;
    use CountryEndpoints;
    use TimezoneEndpoints;
}