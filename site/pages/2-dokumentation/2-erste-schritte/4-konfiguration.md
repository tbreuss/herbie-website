---
title: Konfiguration
layout: documentation.html
---

# Konfiguration

Viele Einstellungen von Herbie kannst du in einer eigenen Konfigurationsdatei
anpassen. Diese Datei kann eine YAML- oder eine PHP-Datei sein und muss im
`site`-Verzeichnis deines Projekts abgelegt sein. Möchtest du bestimmte
Einstellungen übersteuern, erstellst du also eine Datei namens `config.yml`
oder `config.php`.

Ohne eine solche Konfigurationsdatei läuft Herbie mit den folgenden
Default-Einstellungen.

    app:
      path: APP_PATH

    site:
      path: SITE_PATH

    data:
      path: SITE_PATH/data
      extensions: [yml, yaml]

    layouts:
      path: SITE_PATH/layouts

    theme: default

    pages:
      path: SITE_PATH/pages
      extensions: [txt, md, markdown, textile, htm, html, rss, xml]

    posts:
      path: SITE_PATH/posts
      extensions: [txt, md, markdown, textile, htm, html, rss, xml]
      blogRoute: blog

    nice_urls: false

    twig:
      debug: true
      cache: false
      #cache: SITE_PATH/cache/twig
      extend:
        functions: SITE_PATH/plugins/twig/functions
        filters: SITE_PATH/plugins/twig/filters
        tests: SITE_PATH/plugins/twig/tests

    cache:
      page:
        enable: false
        dir: SITE_PATH/cache/page
        expire: 18000
      data:
        enable: false
        dir: SITE_PATH/cache/data
        expire: 18000

    language: de
    locale: de_DE.UTF-8
    charset: UTF-8


## YAML-Konfiguration

In der YAML-Konfigurationsdatei stehen dir einige Konstanten zur Verfügung.
Diese kannst du nutzen und damit die Konfiguration etwas übersichtlicher
machen. Die Konstanten werden zur Laufzeit in echte Pfade umgewandelt.

<table class="pure-table pure-table-horizontal" width="100%">
    <thead>
        <tr>
            <th width="25%">Variable</th>
            <th width="75%">Beschreibung</th>
        </tr>
    </thead>
    <tr>
        <td><code>APP_PATH</code></td>
        <td>Pfad zum Applikations-Verzeichnis von Herbie.</td>
    </tr>
    <tr>
        <td><code>WEB_PATH</code></td>
        <td>Pfad zum Web-Verzeichnis deines Projekts.</td>
    </tr>
    <tr>
        <td><code>SITE_PATH</code></td>
        <td>Pfad zum Site-Verzeichnis deines Projekts.</td>
    </tr>
</table>


## PHP-Konfiguration

Deine Konfigurationsdatei kann auch ein ganz normales PHP-Array sein. Findet
Herbie eine Datei `site/config.php`, werden diese Einstellungen übernommen.

Bitte beachte, dass die PHP-Konfiguration Vorrang hat.


## Beispiel

Für dein Projekt sollen schön lesbare URLs und das Twig-Debugging aktiviert
werden.

Möchtest du YAML zur Konfiguration verwenden, erstellst du im `site`-Verzeichnis
eine Datei `config.yml` mit folgendem Inhalt:

    nice_urls: true
    twig:
        debug: true

Möchtest du PHP zur Konfiguration verwenden, erstellst du im `site`-Verzeichnis
eine Datei `config.php` mit folgendem Inhalt:

    <?php
    return [
        'nice_urls' => true,
        'twig' => [
            'debug' => true
        ]
    ];

Mit beiden Varianten erreichst du dasselbe.


{{ nextlink('dokumentation/inhalte', 'Seiteneigenschaften') }}
