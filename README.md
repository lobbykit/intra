# LobbyKit Intra

[![Packagist](https://img.shields.io/packagist/v/lobbykit/intra.svg)]() 
[![Packagist](https://img.shields.io/packagist/l/lobbykit/intra.svg)]() 

## Vision
Intranet based on WordPress and open source components/services *only*

** WORK IN PROGRESS **

## Team Communications
* [Slack](https://lobbykit.slack.com)
* [Trello](https://trello.com/b/WrsoBaMR/intra)
* [Github Issues](https://github.com/lobbykit/intra/issues)

## Next step in development
[![Trello](https://img.shields.io/badge/trello-planning-blue.svg)]()
Please follow the open board at [Trello](https://trello.com/b/WrsoBaMR/intra)!

## Design
Open to suggestions but we base our product on Twitter Bootstrap 4 at the moment.
Meanwhile we are going to use the [Moduler-Admin-Html](https://github.com/modularcode/modular-admin-html) as a base.

## Services
* PHP 7
* Mysql 5.6
* Elasticsearch

## Components
These are components implemented:
* Bedrock
* WordPress
* Papi
* Bladerunner

These are components planned to implement:
* Travis CI
* Style CI
* ElasticPress

## Integrations
These are integrations planned to implement:
* Slack

## Developers
To get started:
1. Create the project with Composer, eg:
```
composer create-project lobbykit/intra intra
```
1. Create a .env file in root with a database name (docker deploy reads the name at startup)
1. Ensure you have a Docker instance running, eg "Default"
1. Run ``vendor/bin/dep docker:up development``

## Contribution
...