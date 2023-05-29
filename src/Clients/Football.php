<?php

namespace Drenth1\ApiSports\Clients;

use Drenth1\ApiSports\Core\Client;
use Drenth1\ApiSports\Endpoints\Shared\Sets\SharedEndpoints;
use Drenth1\ApiSports\Endpoints\Football\Sets\TeamEndpoints;
use Drenth1\ApiSports\Endpoints\Football\Sets\LeagueEndpoints;
use Drenth1\ApiSports\Endpoints\Football\Sets\SeasonEndpoints;
use Drenth1\ApiSports\Endpoints\Football\Sets\CountryEndpoints;
use Drenth1\ApiSports\Endpoints\Football\Sets\TimezoneEndpoints;

class Football extends Client
{
    use TeamEndpoints;
    use SharedEndpoints;
    use LeagueEndpoints;
    use SeasonEndpoints;
    use CountryEndpoints;
    use TimezoneEndpoints;
}