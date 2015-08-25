---
title: Shortcode Plugin
layout: documentation.html
link_to_overview: 1
---

# Shortcode Plugin

[info]**Info:** Shortcode ist seit Version 0.8.0 ein Systemplugin und fest in den Kern von Herbie integriert.[/info]

Shortcodes sind "intelligente" und vereinfachte HTML Tags, die du selber definieren und mit Logik anreichern kannst. 
Damit steht dir ein einfacher Weg zur Verfügung, Herbie und somit dein Webprojekt nach deinen Wünschen zu erweitern.


## Installation

Das Plugin ist automatisch installiert und aktiviert.


## Anwendung

In der [link dokumentation/inhalte/shortcodes text="Shortcode-Dokumentation"] sind alle System-Shortcodes aufgelistet.


## Eigene Shortcodes hinzufügen

In Herbie gibt es zwei Wege, eigene Shortcodes zu definieren:

1. In der PHP-Konfigurationsdatei
2. In der index-Bootstrapdatei

Hinter dem Shortcode-Mechansismus stecken PHP-Funktionen. Aus diesem Grund können Shortcodes nicht einer 
YAML-Konfigurationsdatei definiert werden.


### PHP-Konfigurationsdatei

In der PHP-Konfigurationsdatei definierst du Shortcodes wie folgt.

[code php]
<?php
return [
  'nice_urls' => true,
  'plugins' => [
    'config' => [
      'shortcode' => [
        'li' => function($atts, $content) { return '<li>' . $content . '</li>'; }),
        'ul' => function($atts, $content) { return '<ul>' . Herbie\DI::get('Shortcode')->parse($content) . '</ul>'; }),
      ]
    ]
  ]
];
[/code]

Beachte: Obiges Beispiel ist nur ein Ausschnitt einer gesamten Konfiguration und 
in dieser Form nur bedingt sinnvoll.

### Index-Bootstrapdatei

Alternativ kannst du deine Shortcodes in der Bootstrapdatei definieren. Das sieht dann so aus:

[code php]
$app = new Herbie\Application('../site');

# retrieve shortcode from DI container
$shortcode = Herbie\DI::get('Shortcode');

# Add <li> tag
$shortcode->add('li', function ($atts, $content) {
    return '<li>' . $content . '</li>';
});
# Add nested <ul> tag
$shortcode->add('ul', function ($atts, $content) use ($shortcode) {
    return '<ul>' . $shortcode->parse($content) . '</ul>'; }),
});

$app->run();
[/code]

In deinen Inhaltsdateien kannst du die zuvor definierten Shortcodes nutzen. Der folgende Code gibt eine einfache 
HTML-Liste aus.

    [ul]
        [li]Herbie Hancock[/li]
        [li]Miles Davis[/li]
        [li]Wayne Shorter[/li]
    [/ul]

Obiges Beispiel veranschaulicht sehr schön, dass Shortcodes auch verschachtelt werden können. Dies gilt allerdings 
nicht für gleichnamige Tags!

Bitte beachte, dass du in PHP das Shortcode-Objekt über den DI-Container mittels `Herbie\DI::get('Shortcode')` beziehen 
kannst. Damit kannst du auf Methoden dieser Klasse zugreifen, Attribute auslesen oder ein verschachteltes Tag 
implementieren.

Du kannst deinen Shortcodes eine beliebige Anzahl Parameter übergeben. Hier sind einige Beispiele, wie das aussehen 
könnte:

    [image file="herbie.png"]
    [gallery folder="media"]
    [caption]Das ist meine Bildlegende[/caption]
    [block size="10"]Ein Inhaltsblock in bestimmter Grösse[/block]
    [video type="youtube" size="medium" /]

Mehr zu Shortcodes findest du in der [link dokumentation/inhalte/shortcodes text="Shortcode-Dokumentation"].
