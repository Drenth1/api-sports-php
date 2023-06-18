<?php

namespace Drenth1\ApiSports\Clients;

use Drenth1\ApiSports\Core\Client;
use Drenth1\ApiSports\Core\Methods\Football\FetchesTeamEndpoints;
use Drenth1\ApiSports\Core\Methods\Football\FetchesVenueEndpoints;
use Drenth1\ApiSports\Core\Methods\Football\FetchesSeasonEndpoints;
use Drenth1\ApiSports\Core\Methods\Generic\FetchesGenericEndpoints;
use Drenth1\ApiSports\Core\Methods\Football\FetchesLeaguesEndpoints;
use Drenth1\ApiSports\Core\Methods\Football\FetchesCountryEndpoints;
use Drenth1\ApiSports\Core\Methods\Football\FetchesTimezoneEndpoints;
use Drenth1\ApiSports\Core\Methods\Football\FetchesTeamStatisticEndpoints;

class Football extends Client
{
    use FetchesTeamEndpoints;
    use FetchesVenueEndpoints;
    use FetchesSeasonEndpoints;
    use FetchesCountryEndpoints;
    use FetchesGenericEndpoints;
    use FetchesLeaguesEndpoints;
    use FetchesTimezoneEndpoints;
    use FetchesTeamStatisticEndpoints;
}