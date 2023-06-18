<?php

namespace Drenth1\ApiSports\Clients;

use Drenth1\ApiSports\Core\Client;
use Drenth1\ApiSports\Core\Methods\Football\FetchesTeamEndpoints;
use Drenth1\ApiSports\Core\Methods\Football\FetchesCoachEndpoints;
use Drenth1\ApiSports\Core\Methods\Football\FetchesVenueEndpoints;
use Drenth1\ApiSports\Core\Methods\Football\FetchesInjuryEndpoints;
use Drenth1\ApiSports\Core\Methods\Football\FetchesSeasonEndpoints;
use Drenth1\ApiSports\Core\Methods\Generic\FetchesGenericEndpoints;
use Drenth1\ApiSports\Core\Methods\Football\FetchesFixtureEndpoints;
use Drenth1\ApiSports\Core\Methods\Football\FetchesLeaguesEndpoints;
use Drenth1\ApiSports\Core\Methods\Football\FetchesCountryEndpoints;
use Drenth1\ApiSports\Core\Methods\Football\FetchesTimezoneEndpoints;
use Drenth1\ApiSports\Core\Methods\Football\FetchesHeadToHeadEndpoints;
use Drenth1\ApiSports\Core\Methods\Football\FetchesFixtureEventEndpoints;
use Drenth1\ApiSports\Core\Methods\Football\FetchesFixtureRoundEndpoints;
use Drenth1\ApiSports\Core\Methods\Football\FetchesFixtureLineupEndpoints;
use Drenth1\ApiSports\Core\Methods\Football\FetchesTeamStatisticEndpoints;
use Drenth1\ApiSports\Core\Methods\Football\FetchesSeasonStandingEndpoints;
use Drenth1\ApiSports\Core\Methods\Football\FetchesPlayerStatisticEndpoints;
use Drenth1\ApiSports\Core\Methods\Football\FetchesFixtureStatisticEndpoints;
use Drenth1\ApiSports\Core\Methods\Football\FetchesFixturePlayerStatisticsEndpoints;

class Football extends Client
{
    use FetchesTeamEndpoints;
    use FetchesCoachEndpoints;
    use FetchesVenueEndpoints;
    use FetchesSeasonEndpoints;
    use FetchesInjuryEndpoints;
    use FetchesCountryEndpoints;
    use FetchesGenericEndpoints;
    use FetchesLeaguesEndpoints;
    use FetchesFixtureEndpoints;
    use FetchesTimezoneEndpoints;
    use FetchesHeadToHeadEndpoints;
    use FetchesFixtureEventEndpoints;
    use FetchesFixtureRoundEndpoints;
    use FetchesFixtureLineupEndpoints;
    use FetchesTeamStatisticEndpoints;
    use FetchesSeasonStandingEndpoints;
    use FetchesPlayerStatisticEndpoints;
    use FetchesFixtureStatisticEndpoints;
    use FetchesFixturePlayerStatisticsEndpoints;
}