<?php

/**
 * This file is part of Herbie.
 *
 * (c) Thomas Breuss <www.tebe.ch>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

ini_set('display_errors', 1);

require_once(__DIR__ . '/../vendor/autoload.php');

$app = new Herbie\Application('../site');
$app['shortcode']->add('box1', function($atts, $content) {
    return '<div class="pure-u-1-2 box box-1"><div markdown="1">'
        . $content
        . '</div></div>';
});
$app['shortcode']->add('box2', function($atts, $content) {
    return '<div class="pure-u-1-2 box box-2"><div markdown="1">'
        . $content
        . '</div></div>';
});
$app->run();
