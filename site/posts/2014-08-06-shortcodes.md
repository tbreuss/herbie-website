---
title: Shortcodes für Herbie
layout: blog.html
excerpt: WordPress' BBCodes, besser bekannt als Shortcodes, gibt es nun auch für Herbie. Damit kann man Herbie einfach um eigene Tags erweitern und mit Logik anreichern.
category: Feature
author: Herbie
---

Eines der nützlichsten Features von WordPress gibt es jetzt auch für Herbie:
**Shortcodes**. Damit kannst du BBCode-Tags definieren und mit Logik anreichern.
Somit steht dir - neben den Erweiterungsmöglichkeiten von Twig - ein weiterer
(einfacher) Weg zur Verfügung, um dein Projekt nach deinen Wünschen anzupassen.

Shortcodes definierst du bevorzugt in der PHP-Konfigurationsdatei:

{% code php %}
<?php
return array(
    'shortcodes' => array(
        'title' => function($atts, $content) {
            return '<h2>' . $content . '</h2>';
        }),
        'paragraph' => function($atts, $content) {
            return '<p>' . $content . '</p>';
        })
    )
);
{% endcode %}

In deinen Inhaltsdateien rufst du sie dann wie folgt auf:

    [title]Shortcodes für Herbie[/title]
    [paragraph]Herbie's Shortcodes sind toll[/paragraph]

Zugegeben, dieses einfache Beispiel ist nicht ganz sinnvoll, aber zeigt doch
ganz gut die Möglichkeiten von Shortcodes auf.

Mehr zu Shortcodes findest du in der {{ link('dokumentation/anpassung/shortcodes', 'Dokumentation') }}.

