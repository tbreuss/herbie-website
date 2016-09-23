<?php

return [
    'variables' => [
        'directory_separator' => '/',
        'line_endings' => "\n",
    ],
    'keep_releases' => 4,
    'root_directory' => '/home/tbreusst/public_html',
    'app_directory' => '',
    'shared' => [
        'storage/logs',
        'storage/sessions',
    ],
    'shell' => false,
    'shelled' => ['which', 'ruby', 'npm', 'bower', 'bundle', 'grunt'],
    'sudo' => false,
    'sudoed' => [],
    'permissions' => [
        'files' => [
        ],
        'callback' => function ($task, $file) {
            return [
                sprintf('chmod -R 755 %s', $file),
                sprintf('chmod -R g+s %s', $file),
                sprintf('chown -R tbreusst:tbreusst %s', $file),
            ];
        },
    ],
];
