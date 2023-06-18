<p align="center">
  <img height="100" src="https://user-images.githubusercontent.com/89132520/236676102-d9b7db00-f8b4-4b13-81c2-b4ee8250008d.png" />
</p>

<p align="center">
    <h3 align="center">Api Sports Wrapper</h3>
</p>

![Packagist PHP Version](https://img.shields.io/packagist/dependency-v/Drenth1/api-sports-php/php?label=php)
![GitHub Workflow Status](https://img.shields.io/github/actions/workflow/status/Drenth1/api-sports-php/phpunit.yml?label=tests)

A robust, generic wrapper around all APIs provided by [api-sports.io](https://api-sports.io/).

▶️ All sports will be supported through both RapidApi and ApiSports <br>
▶️ Extensively validates parameters prior to sending requests <br>
▶️ Intuitive syntax and robust error handling 

### Installation

You may install the wrapper using Composer.

````shell
composer require drenth1/api-sports-php
````

> Please ensure you are using PHP 8.1 or above.


### Usage

To interact with an API, create a Client using the ClientFactory:

````php
<?php

use Drenth1\ApiSports\ClientFactory;
use Drenth1\ApiSports\Core\Enums\Host;

$client = ClientFactory::football(Host::ApiSports, 'v3', 'yourApiKey');
````

You may then use that Client to interact with the API.

````php
$client->status();                
$client->countryByName('Netherlands'); 
$client->countriesBySearch('Nor');

$client->rawLeagues(['type' => 'cup', 'code' => 'NL']);
// and many more...
````

Most common cases are covered by a dedicated function, you may use the 'raw' methods per endpoint to combine parameters.