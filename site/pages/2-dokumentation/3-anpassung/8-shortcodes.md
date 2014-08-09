---
title: Shortcodes
layout: documentation.html
---

# Shortcodes für Herbie

Shortcodes gibt es in WordPress seit der Version 2.5. Dabei handelt es sich um
BBTags, die man mit PHP beliebig erweitern kann. In WordPress haben sie sich in
kurzer Zeit zu einem der nützlichsten und flexibelsten Features entwickelt.

In Herbie gibt es zwei Wege, Shortcodes zu definieren:

1. In der PHP-Konfigurationsdatei
2. In der index-Bootstrapdatei

Hinter dem Shortcode-Mechansismus stecken sogenannte anonyme PHP-Funktionen.
Dies ist auch der Grund, weshalb Shortcodes nicht einer YAML-Konfigurationsdatei
definiert werden können.


## PHP-Konfigurationsdatei

Shortocdes sollten bevorzugt in der PHP-Konfigurationsdatei definiert werden.
Eine einfache Konfiguration sieht wie folgt aus.

{% code php %}
<?php
return array(
    'nice_urls' => true,
    'shortcodes' => array(
        'li' => function($atts, $content) { return '<li>' . $content . '</li>'; }),
        'ul' => function($atts, $content) { return '<ul>' . $this['shortcode']->parse($content) . '</ul>'; }),
    )
);
{% endcode %}

## Index-Bootstrapdatei

Willst du nicht auf die Einfachheit von YAML zur Konfiguration deines Projekts
verzichten, bleibt dir nur, deine Shortcodes in der Bootstrapdatei zu
definieren. Das sieht dann so aus:

{% code php %}
$app = new Herbie\Application('../site');
$app['shortcode']->add('li', function($atts, $content) { return '<li>' . $content . '</li>'; });
$app['shortcode']->add('ul', function($atts, $content) use ($app) { return '<ul>' . $app['shortcode']->parse($content) . '</ul>'; }),
$app->run();
{% endcode %}

In den Inhaltsdateien kannst du nun die definierten Shortcodes nutzen. Der
folgende Code sollte eine einfache HTML-Liste ausgeben.

    [ul]
        [li]Herbie[/li]
        [li]Miles[/li]
        [li]Wayne[/li]
    [/ul]

Obiges Beispiel veranschaulicht sehr schön, dass Shortcodes auch verschachtelt
werden können. Dies gilt allerdings nicht für gleichnamige Tags!

Bitte beachte, dass du die Shortcode-Klasse in der PHP-Konfigurationsdatei über
$`this['shortcode']` und in der Bootstrapdatei über `$app['shortcode']`
ansprechen kannst. Somit kannst du auf Methoden dieser Klasse zugreifen, um
Attribute auszulesen oder ein verschachteltes Tag zu ermöglichen.

In Herbie gibt es keine vorgefertigten Shortcodes, aber den Mechanismus kannst
du schon jetzt nutzen. Shortcodes können wie folgt aussehen:

    [image file="herbie.png"]
    [gallery folder="media"]
    [caption]Das ist meine Bildlegende[/caption]
    [block size="10"]Ein Inhaltsblock in bestimmter Grösse[/block]
    [video type="youtube" size="medium" /]

Weitere grundlegende Informationen zu Shortcodes findest du in der Wordpress
Shortcode API unter <http://codex.wordpress.org/Shortcode_API>.


{{ nextlink('dokumentation/schnippsel', 'Schnippsel') }}
