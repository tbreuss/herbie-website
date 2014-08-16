---
title: Shortcodes von WordPress für Herbie
layout: blog.html
excerpt: Die WordPress-eigenen BBCodes, besser bekannt als Shortcodes, gibt es nun auch für Herbie. Damit erweiterst du Herbie auf einfache Art und Weise um eigene Tags und reicherst diese mit Logik an.
category: Feature
author: Herbie
---

Eines der nützlichsten Features von WordPress gibt es jetzt auch für Herbie:
**Shortcodes**. Shortcodes sind im Prinzip BBCode-Tags, die du selber definieren
und mit Logik anreichern kannst. Somit steht dir - neben den
Erweiterungsmöglichkeiten von Twig - ein weiterer einfacher Weg zur Verfügung,
um dein Projekt nach deinen Wünschen anzupassen.

Shortcodes werden bevorzugt in der PHP-Konfigurationsdatei definiert:

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

Die Ausgabe ist entsprechend:

    <h1>Shortcodes für Herbie</h1>
    <p>Herbie's Shortcodes sind toll</p>

Zugegeben, dieses einfache Beispiel ist nicht ganz sinnvoll, zeigt aber ganz gut
die Möglichkeiten von Shortcodes in Herbie auf.

Mehr zu Shortcodes findest du in der {{ link('dokumentation/anpassung/shortcodes', 'Dokumentation') }}.

