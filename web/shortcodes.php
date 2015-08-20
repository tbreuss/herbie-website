<?php

$shortcode = Herbie\DI::get('PluginManager')->getPlugin('shortcode');

$shortcode->add('box1', function ($atts, $content) {
    return '<div class="pure-u-1-2 box box-1"><div markdown="1">'
    . $content
    . '</div></div>';
});

$shortcode->add('box2', function ($atts, $content) {
    return '<div class="pure-u-1-2 box box-2"><div markdown="1">'
    . $content
    . '</div></div>';
});

$shortcode->add('githubreadme', function ($attribs) {

    $url = $attribs['0'];
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

});
