<?php

namespace Drenth1\ApiSports\Clients;

use Drenth1\ApiSports\Core\Client;
use Drenth1\ApiSports\Endpoints\Shared\Sets\SharedEndpoints;
use Drenth1\ApiSports\Endpoints\Football\Sets\TeamEndpoints;
use Drenth1\ApiSports\Endpoints\Football\Sets\VenueEndpoints;
use Drenth1\ApiSports\Endpoints\Football\Sets\LeagueEndpoints;
use Drenth1\ApiSports\Endpoints\Football\Sets\SeasonEndpoints;
use Drenth1\ApiSports\Endpoints\Football\Sets\FixtureEndpoints;
use Drenth1\ApiSports\Endpoints\Football\Sets\CountryEndpoints;
use Drenth1\ApiSports\Endpoints\Football\Sets\TimezoneEndpoints;
use Drenth1\ApiSports\Endpoints\Football\Sets\StandingEndpoints;

class Football extends Client
{
    use TeamEndpoints;
    use VenueEndpoints;
    use SharedEndpoints;
    use LeagueEndpoints;
    use SeasonEndpoints;
    use FixtureEndpoints;
    use CountryEndpoints;
    use TimezoneEndpoints;
    use StandingEndpoints;
}