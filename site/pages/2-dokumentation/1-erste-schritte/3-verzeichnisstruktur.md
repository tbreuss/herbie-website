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
        ├── cache
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
        ist normalerweise nicht über das Web zugänglich. Es kann aber auch
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
        <td><code>web/assets</code></td>
        <td>Die Ablage für JavaScript-, CSS- und Bilddateien, welche für das
        Layout der Website benötigt werden.</td>
    </tr>
    <tr>
        <td><code>web/cache</code></td>
        <td>Der Cache für Dateien, die öffentlich zugänglich sein sollen, z.B. verkleinerte Bilder.</td>
    </tr>    
    <tr>
        <td><code>web/media</code></td>
        <td>In diesem Verzeichnis sind Dateien abgelegt, die du über deine
        Inhalte verlinkt hast. Zum Beispiel Bilder, PDFs, Videos, MP3s, etc.</td>
    </tr>
    <tr>
        <td><code>web/.htaccess</code></td>
        <td>Falls in deinem Projekt die Option <code>nice_urls</code> aktiviert ist,
        muss diese Datei mit den entsprechenden Anweisungen vorhanden sein.</td>
    </tr>
    <tr>
        <td><code>web/index.php</code></td>
        <td>Die Bootstrap-Datei und Teil von Herbie. Über diese Datei laufen
        alle Anfragen an den Webserver.</td>
    </tr>
</table>

## site-Verzeichnis

Normalerweise arbeitest du ausschliessliche im `site`-Verzeichnis deines Webprojektes. 
Dieses ist in der Regel wie folgt aufgebaut:

    site
    ├── assets
    ├── cache
    ├── config
    |   ├── plugins
    |   |   ├── imagine.yml
    |   |   └── video.yml        
    |   └── main.yml
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
    ├── plugins
    ├── posts
    |   ├── 2013-10-29-my-third-blog-post.md
    |   ├── 2007-10-29-my-second-blog-post.md
    |   └── 2007-10-29-my-new-blog.md
    └── twig


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
        <td><code>assets</code></td>
        <td>Das Assets-Verzeichnis von Herbie. Darin sind CSS- und JS-Dateien abgelegt, die zur Laufzeit ins Web-Assets-Verzeichnis kopiert werden.</td>
    </tr>    
    <tr>
        <td><code>cache</code></td>
        <td>Das Cache-Verzeichnis von Herbie. Darin werden z.B. Twig
        Cache-Dateien gespeichert.</td>
    </tr>
    <tr>
        <td><code>config<br>- main.yml<br>- plugins</code></td>
        <td>Das Konfigurationsverzeichnis mit Dateien im YAML-Format (die Hauptdatei kann auch eine PHP-Datei sein).
        Konfigurationen für Plugins sind als einzelne Dateien im Unterordner <code>plugins</code> abgelegt.</td>
    </tr>    
    <tr>
        <td><code>data</code></td>
        <td>Das Daten-Verzeichnis, im dem verschiedene Daten-Dateien im
        YAML-Format gespeichert werden können.</td>
    </tr>
    <tr>
        <td><code>layouts</code></td>
        <td>Das Layout-Verzeichnis der Website. Hier sind HTML- bzw. TWig-Dateien abgelegt,
        die für das Aussehen der Website zuständig sind.</td>
    </tr>
    <tr>
        <td><code>pages</code></td>
        <td>Die CMS-Seiten der Website. Diese sind als Textdateien (Markdown,
        Textile, Text, HTML) abgespeichert.</td>
    </tr>
    <tr>
        <td><code>posts</code></td>
        <td>Die Blog-Posts der Website. Diese sind ebenfalls als Textdateien
        abgespeichert.</td>
    </tr>
    <tr>
        <td><code>plugins</code></td>
        <td>In diesem Verzeichnis sind deine Plugins abgelegt. Plugins verwaltest
        du einfach über Composer.</td>
    </tr>
    <tr>
        <td><code>twig</code></td>
        <td>In diesem Verzeichnis sind Twig-Filter, Twig-Funktionen und Twig-Tests
        abgelegt.</td>
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

Damit werden - vereinfacht gesagt - alle Seitenaufrufe an die zentrale Bootstrap-Datei
weitergereicht. Dies ist zum Beispiel für die Suchmaschinen-Optimierung wichtig, aber 
auch für die Besucher deiner Website.

Bitte beachte, dass obige Konfiguration für den Apache Webserver ausgelegt ist.
