<?php

use Rocketeer\Binaries\PackageManagers\Composer;
use Rocketeer\Tasks\Subtasks\Primer;

return [
    'check' => 'Php',
    'deploy' => 'Clone',
    'test' => 'Phpunit',
    'migrate' => 'Artisan',
    'dependencies' => 'Polyglot',
    'composer' => [
        'install' => function (Composer $composer, $task) {
            return $composer->install([], ['--no-interaction' => null, '--no-dev' => null, '--prefer-dist' => null]);
        },
        'update' => function (Composer $composer) {
            return $composer->update();
        },
    ],
    'primer' => function (Primer $task) {
        return [
            // $task->executeTask('Test'),
            // $task->binary('grunt')->execute('lint'),
        ];
    },
];
