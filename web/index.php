<?php

/**
 * This file is part of Herbie.
 *
 * (c) Thomas Breuss <https://www.tebe.ch>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

ini_set('display_errors', 1);

if (!ini_get('date.timezone')) {
    ini_set('date.timezone', 'Europe/Zurich');
}

require_once(__DIR__ . '/../vendor/autoload.php');

define('HERBIE_DEBUG', true);

$app = new Herbie\Application('../site');

require_once(__DIR__ . '/shortcodes.php');

$app->run();
