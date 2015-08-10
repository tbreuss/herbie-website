<?php

/*
 * This file is part of Herbie.
 *
 * (c) Thomas Breuss <www.tebe.ch>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return new Twig_SimpleFunction('githubreadme', function ($url) {

    $content = @file_get_contents($url);
    if ($content === false) {
        $content = "Die Readme-Seite konnte nicht von GitHub geladen werden:<br>{$url}";
    }

    // hole markdown-plugin und parse string
    $content = Herbie\Di::get('PluginManager')->getPlugin('markdown')->parseMarkdown($content);

    $replaced = str_replace(
        ['<h1>Herbie ', '<table>'],
        ['<h1>', '<table class="pure-table pure-table-horizontal">'],
        $content
    );

    return '<div class="github-readme">' . $replaced . '</div>';

}, ['is_safe' => ['html']]);
