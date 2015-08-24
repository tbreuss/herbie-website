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

define('HERBIE_DEBUG', true);

/*
Herbie\Hook::attach('twigInitialized', function() {
#    echo "Hook: Twig Initialized";
});

Herbie\Hook::attach('pluginsInitialized', function() {
#    echo "Hook: Plugins Initialized";
});

Herbie\Hook::attach('shortcodeInitialized', function() {
#    echo "Hook: Shortcode Initialized";
});

Herbie\Hook::attach('renderContent', function($content, $data) {
    return '<span>Hook: renderContent</span>' . $content;
});

Herbie\Hook::attach('addTwigFunction', function() {
    return ['hello', function($string) {
        echo "Hallo " . $string;
    }];
});

Herbie\Hook::attach('addTwigFilter', function() {
    return ['reverser', function($string) {
        return strrev($string);
    }, ['is_safe' => ['html']]];
});

Herbie\Hook::attach('addTwigTest', function() {
    return ['number', function($string) {
        return is_numeric($string);
    }];
});

Herbie\Hook::attach('addTwigTest', ['string', 'is_string']);

Herbie\Hook::attach('outputGenerated', function(Herbie\Http\Response $response) {
    $response->setContent('Hook: outputGenerated' . $response->getContent());
});

Herbie\Hook::attach('outputRendered', function() {
    echo "Hook: outputRendered";
});

Herbie\Hook::attach('pageLoaded', function($page) {
    #$page->setFormat('text');
});

Herbie\Hook::attach('renderContent', function($content) {
    return str_replace('Herbie', 'H3RBIE', $content);
});

Herbie\Hook::attach('renderContent', function($content) {
    return str_replace('CMS', 'C.M.S.', $content);
});
*/

Herbie\Hook::attach('shortcodeInitialized', function ($shortcode) {

    // homepage: box1
    $shortcode->add('box1', function ($atts, $content) {
        return '<div class="pure-u-1-2 box box-1"><div markdown="1">'
        . $content
        . '</div></div>';
    });

    // homepage: box2
    $shortcode->add('box2', function ($atts, $content) {
        return '<div class="pure-u-1-2 box box-2"><div markdown="1">'
        . $content
        . '</div></div>';
    });

    // github: readme abrufen, parsen und darstellen
    $shortcode->add('githubreadme', function ($attribs) {

        $url = $attribs['0'];
        $content = @file_get_contents($url);
        if ($content === false) {
            $content = "Die Readme-Seite konnte nicht von GitHub geladen werden:<br>{$url}";
        }

        // parse string
        $content = herbie\sysplugin\markdown\MarkdownPlugin::parseMarkdown($content);

        $replaced = str_replace(
            ['<h1>Herbie ', '<table>'],
            ['<h1>', '<table class="pure-table pure-table-horizontal">'],
            $content
        );

        return '<div class="github-readme">' . $replaced . '</div>';
    });

});

$app = new Herbie\Application('../site');

#require_once(__DIR__ . '/shortcodes.php');

$app->run();

