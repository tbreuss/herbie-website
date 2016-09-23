<?php

use Rocketeer\Services\Connections\ConnectionsHandler;

return [
    'application_name' => 'ch.tebe.test.rocketeer',
    'plugins' => [],
    'logs' => function (ConnectionsHandler $connections) {
        return sprintf('%s-%s-%s.log', $connections->getConnection(), $connections->getStage(), date('Ymd'));
    },
    'default' => ['production'],
    'connections' => [
        'production' => [
            'host' => '',
            'username' => '',
            'password' => '',
            'key' => '',
            'keyphrase' => '',
            'agent' => '',
            'db_role' => true,
        ],
    ],
    'use_roles' => false,
    'on' => [
        'stages' => [],
        'connections' => [],
    ],
];
