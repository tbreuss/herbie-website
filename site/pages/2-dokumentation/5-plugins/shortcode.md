---
title: Shortcode Plugin
layout: documentation.html
link_to_overview: 1
---

{{ githubreadme("https://raw.githubusercontent.com/getherbie/plugin-shortcode/master/README.md") }}

<hr>

# Shortcode

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

Shortocdes definierst du in der PHP-Konfigurationsdatei. Eine einfache
Konfiguration sieht wie folgt aus.

{% code php %}
<?php
return [
    'nice_urls' => true,
    'plugins' => [
        'config' => [
            'shortcode' => [
                'li' => function($atts, $content) { return '<li>' . $content . '</li>'; }),
                'ul' => function($atts, $content) { return '<ul>' . $this['shortcode']->parse($content) . '</ul>'; }),
            ]
        ]
    ]
];
{% endcode %}

Beachte: Obiges Beispiel ist nur ein Ausschnitt einer gesamten Konfiguration und 
in dieser Form nur bedingt sinnvoll.

## Index-Bootstrapdatei

Alternativ kannst du deine Shortcodes in der Bootstrapdatei definieren. Das
sieht dann so aus:

{% code php %}
$app = new Herbie\Application('../site');
$config = $app->getService('Config');
$config->set('plugins.config.shortcode.li', function($atts, $content) { return '<li>' . $content . '</li>'; });
$config->set('plugins.config.shortcode.ul', function($atts, $content) use ($app) { return '<ul>' . $content . '</ul>'; }),
$app->run();
{% endcode %}

In den Inhaltsdateien kannst du nun die definierten Shortcodes nutzen. Der
folgende Code gibt eine einfache HTML-Liste aus.

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

Du kannst deinen Shortcodes beliebige Parameter übergeben. Hier sind einige
Beispiele, wie das aussehen könnte:

    [image file="herbie.png"]
    [gallery folder="media"]
    [caption]Das ist meine Bildlegende[/caption]
    [block size="10"]Ein Inhaltsblock in bestimmter Grösse[/block]
    [video type="youtube" size="medium" /]

Weitere grundlegende Informationen zu Shortcodes findest du in der Wordpress
Shortcode API unter <http://codex.wordpress.org/Shortcode_API>.
