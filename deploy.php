<?php

include_once 'vendor/ekandreas/docker-bedrock/recipe.php';

server('lobbykit.dev', 'default')
    ->env('container', 'lobbykit')
    ->stage('development');
