---
title: Verzeichnisstruktur
layout: documentation.html
---

# Verzeichnisstruktur

Eine Herbie-Website ist in der Regel wie folgt aufgebaut:

    project
    ├── site
    ├── vendor
    └── web
        ├── assets
        ├── media
        ├── .htaccess
        └── index.php


Wofür diese Dateien und Verzeichnisse stehen, siehst du in der folgenden
Tabelle:

<table class="pure-table pure-table-horizontal" width="100%">
    <thead>
        <tr>
            <th width="35%">Datei/Verzeichnis</th>
            <th width="65%">Beschreibung</th>
        </tr>
    </thead>
    <tr>
        <td><code>project</code></td>
        <td>Dein Projektverzeichnis auf dem Webserver.</td>
    </tr>
    <tr>
        <td><code>site</code></td>
        <td>Der eigentliche Inhalt der Website (siehe unten). Dieses Verzeichnis
        ist normalerweise nicht über das Web zugänglich. Es könnte aber auch
        im öffentlichen Verzeichnis abgelegt werden.</td>
    </tr>
    <tr>
        <td><code>vendor</code></td>
        <td>In diesem Verzeichnis ist Herbie mit allen abhängigen Komponenten
        und Drittanbieter-Programmen enthalten. Hier solltest du nichts anpassen.
        Dieses Verzeichnis ist nicht über das Web zugänglich.</td>
    </tr>
    <tr>
        <td><code>web</code></td>
        <td>Das öffentliche Verzeichnis deines Webservers. Du hast darauf über
        den Webbrowser Zugriff.</td>
    </tr>
    <tr>
        <td><code>assets</code></td>
        <td>Die Ablage für JavaScript-, CSS- und Bilddateien, welche für das
        Layout der Website benötigt werden.</td>
    </tr>
    <tr>
        <td><code>media</code></td>
        <td>In diesem Verzeichnis sind Dateien abgelegt, die du über deine
        Inhalte verlinkt hast. Zum Beispiel Bilder, PDFs, Videos, MP3s, etc.</td>
    </tr>
    <tr>
        <td><code>.htaccess</code></td>
        <td>Falls in deinem Projekt die Option <code>nice_urls</code> aktiviert ist,
        muss diese Datei mit den entsprechenden Anweisungen vorhanden sein.</td>
    </tr>
    <tr>
        <td><code>index.php</code></td>
        <td>Die Bootstrap-Datei und Teil von Herbie. Über diese Datei laufen
        alle Anfragen an den Webserver.</td>
    </tr>
</table>

## site-Verzeichnis

Normalerweise arbeitest du nur im `site`-Verzeichnis deines Webprojektes. Dieses
ist in der Regel wie folgt aufgebaut:

    site
    ├── config.yml
    ├── cache
    ├── data
    |   └── persons.yml
    ├── layouts
    |   ├── head.html
    |   ├── footer.html
    |   ├── error.html
    |   └── default.html
    ├── pages
    |   ├── index.md
    |   ├── company
    |   |   ├── index.md
    |   |   ├── about-us.md
    |   |   ├── our-vision.md
    |   |   └── team.md
    |   ├── services.md
    |   └── contact.md
    ├── posts
    |   ├── 2013-10-29-my-third-blog-post.md
    |   ├── 2007-10-29-my-second-blog-post.md
    |   └── 2007-10-29-my-new-blog.md
    └── plugins


In der folgenden Tabelle siehst du wiederum, wofür jede dieser Dateien und
Verzeichnisse stehen:

<table class="pure-table pure-table-horizontal" width="100%">
    <thead>
        <tr>
            <th width="35%">Datei/Verzeichnis</th>
            <th width="65%">Beschreibung</th>
        </tr>
    </thead>
    <tr>
        <td><code>config.yml</code></td>
        <td>Die Konfigurationsdatei im YAML-Format. Anstatt YAML- kann auch eine
        PHP-Datei erstellt werden.</td>
    </tr>
    <tr>
        <td><code>cache</code></td>
        <td>Das Cache-Verzeichnis von Herbie. Darin werden z.B. Twig
        Cache-Dateien gespeichert.</td>
    </tr>
    <tr>
        <td><code>data</code></td>
        <td>Das Daten-Verzeichnis, im dem verschiedene Daten-Dateien im
        YAML-Format gespeichert werden können.</td>
    </tr>
    <tr>
        <td><code>layouts</code></td>
        <td>Das Layout-Verzeichnis der Website. Hier sind HTML-Dateien abgelegt,
        die für das Aussehen der Website zuständig sind.</td>
    </tr>
    <tr>
        <td><code>pages</code></td>
        <td>Die CMS-Seiten der Website. Diese sind als Textdateien (Markdown,
        Textile) abgespeichert.</td>
    </tr>
    <tr>
        <td><code>posts</code></td>
        <td>Die Blog-Posts der Website. Diese sind als Textdateien
        abgespeichert.</td>
    </tr>
    <tr>
        <td><code>plugins</code></td>
        <td>In diesem Verzeichnis sind deine Plugins abgelegt.</td>
    </tr>
</table>


## .htaccess-Datei

Falls in deinem Projekt die Option `nice_urls` aktiviert ist, muss im
`web`-Verzeichnis eine .htaccess-Datei mit den entsprechenden Anweisungen
vorhanden sein.

    RewriteEngine on
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule . index.php
