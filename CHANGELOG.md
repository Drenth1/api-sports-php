# Changelog

All notable changes to the project will be documented here.

## [1.1.1] - 03-06-2023

This release adds more validators, parameters and various endpoints.

### Added

- Endpoint and methods for fixtures
- Endpoint and methods for fixture events
- Endpoint and methods for fixture statistics
- Endpoint and methods for fixture lineups
- Endpoint and methods for fixture player statistics
- Endpoint and methods for venues
- Endpoint and methods for season standings
- Endpoint and methods for head-to-head data
- Endpoint and methods for teams
- Regex-based validation
- Date parameter
- Team code parameter
- Other parameters for football

## [1.0.1] - 28-05-2023

This release adds a variety of endpoints for the football client.

### Added

- Methods to interact with seasons (football)
- Methods to interact with leagues (football)
- Enum validation to Validator
- Automatic testing for php 8.1 and 8.2
- Link to gitbook documentation
- Various parameter classes for football-related endpoints

### Changed

- CountryName parameter to shared Name parameter
- CountryCode parameter to shared CountryCode

## [1.0.0] - 28-05-2023

This is the initial release of the wrapper, contains core code for validation and requests.

### Added

- [ClientFactory](https://github.com/Drenth1/api-sports-php/blob/master/src/ClientFactory.php) to easily create Clients
- [Football](https://github.com/Drenth1/api-sports-php/blob/master/src/Clients/Football.php) client to fetch football-related Endpoints
- Validator class that can validate parameters for requests
- Parameter classes that can specify rules for parameters
- Provider class to set base urls and other request settings on an api-version basis
- PHPUnit testing for core classes
- Project license