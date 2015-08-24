---
title: Shortcodes von WordPress für Herbie
layout: blog.html
excerpt: Die WordPress-eigenen BBCodes, besser bekannt als Shortcodes, gibt es nun auch für Herbie. Damit erweiterst du Herbie auf einfache Art und Weise um eigene Tags und reicherst diese mit Logik an.
categories: [Feature, Plugin]
author: Herbie
---

Eines der nützlichsten Features von WordPress gibt es jetzt auch für Herbie: **Shortcodes**. 
Shortcodes sind "intelligente" und vereinfachte HTML Tags, die du selber definieren
und mit Logik anreichern kannst. Somit steht dir ein einfacher Weg zur Verfügung,
um dein Projekt nach deinen Wünschen anzupassen. In Herbie ist eine ganze Palette von
Shortcodes eingebaut.

Eigene Shortcodes können in der PHP-Konfigurationsdatei definiert werden:

[code php]
<?php
return array(
    'plugins' => array(
        'config' => array(
            'shortcodes' => array(
                'title' => function($atts, $content) {
                    return '<h2>' . $content . '</h2>';
                }),
                'paragraph' => function($atts, $content) {
                    return '<p>' . $content . '</p>';
                })
            )
        )
    )
);
[/code]

Sie können aber auch in der index.php definiert werden:

[code php]
$shortcode = Herbie\DI::get('Shortcode');
$shortcode->add('title', function ($atts, $content) {
    return '<h2>' . $content . '</h2>';
});
$shortcode->add('paragraph', function($atts, $content) {
    return '<p>' . $content . '</p>';
});
[/code]

In deinen Inhaltsdateien rufst du sie dann wie folgt auf:

    [title]Shortcodes für Herbie[/title]
    [paragraph]Herbie's Shortcodes sind toll[/paragraph]

Die Ausgabe ist entsprechend:

    <h1>Shortcodes für Herbie</h1>
    <p>Herbie's Shortcodes sind toll</p>

Zugegeben, dieses einfache Beispiel ist nicht ganz sinnvoll, zeigt aber ganz gut
die Möglichkeiten von Shortcodes in Herbie auf.

Mehr zu Shortcodes findest du in der [link dokumentation/inhalte/shortcodes text="Dokumentation"].
