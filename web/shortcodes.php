<?php

$shortcode = Herbie\DI::get('Shortcode');

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

// info
$shortcode->add('info', function ($atts, $content) use ($shortcode) {
    return '<div class="info"><div markdown="1">'
    . $shortcode->parse($content)
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
