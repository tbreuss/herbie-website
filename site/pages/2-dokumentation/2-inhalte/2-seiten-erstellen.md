---
title: Seiten erstellen
layout: documentation.html
---

# Seiten erstellen

## Das Seiten-Verzeichnis

Alle Seiten einer Herbie-Website sind im Verzeichnis `site/pages` als einfache
Textdateien abgelegt. Diese Textdateien können entweder Markdown-, Textile- oder
HTML-formatierte Dateien sein. Sie müssen am Anfang der Datei einfach den
Block mit Seiteneigenschaften enthalten, damit Herbie sie in eine HTML-Datei
konvertieren kann.


## Erlaubte Dateien

Herbie unterstützt zur Zeit die unten stehenden Dateien. Beim Konvertieren des
Inhalts wird der Formatierer eingesetzt, der der Dateiendung entspricht:

    ENDUNG          FORMATIERER
    .markdown       Markdown
    .md             Markdown
    .textile        Textile
    .htm            HTML (keine Konvertierung)
    .html           HTML (keine Konvertierung)
    .txt            Text (keine Konvertierung)
    .rss            Text (keine Konvertierung)
    .xml            Text (keine Konvertierung)


## Eine Seite erstellen

Um eine neue Seite zu erstellen, musst du im Verzeichnis `site/pages` eine neue
Datei hinzufügen. Dabei musst du die folgenden Regeln beachten:

- nur Kleinbuchstaben und Zahlen verwenden
- keine Umlaute und Sonderzeichen verwenden
- keine Leerschläge verwenden

Wie du die Datei benennst, hat Einfluss auf die URL dieser Seite.


## Homepage

Als einzige Datei im Seiten-Verzeichnis erwartet Herbie eine Index-Datei mit
einer der obigen Endungen. Diese Datei übernimmt die Funktion der Homepage oder
Startseite und wird angezeigt, wenn man *http://www.example.com* im Browser
aufruft. Fehlt die Index-Datei, wird eine 404-Fehlerseite angezeigt.


## Benannte Textdateien

Der einfachste Weg, Seiten hinzuzufügen, ist das Hinzfügen einer Textdatei mit
einem passenden Namen im Seiten-Verzeichnis. Für eine Website mit einer
Homepage, einer "Über uns" Seite und einer Kontaktseite würde das
Seitenverzeichnis und ihre entsprechenden URLs wie folgt aussehen:

    site/pages
    |-- index.md        # http://example.com
    |-- about.md        # http://example.com/about
    └── contact.md      # http://example.com/contact


## Benannte Ordner mit Index-Dateien

Man kann dies so machen, und es ist überhaupt nichts falsch dabei. Oft möchte
man aber weitere Seiten hinzufügen oder bestehende Seiten in einem Themenbereich
gruppieren. Kommen zum obigen Projekt beispielsweise eine Team-, eine Vision und
eine Anfahrt-Seite hinzu, könnte das Seitenverzeichnis so aussehen:

    site/pages
    ├── index.md        # http://example.com
    ├── about/
    |   ├── index.md    # http://example.com/about
    |   ├── team.md     # http://example.com/about/team
    |   └── vision.md   # http://example.com/about/vision
    ├── contact/
    |   ├── index.md    # http://example.com/contact
    |   └── route.md    # http://example.com/contact/route
    └── index.md        # http://example.com


Beide Wege funktionieren, die Entscheidung liegt bei Dir.


## Sichtbarkeit und Sortierung

Indem du Ordnern und Dateien eine Zahl voranstellst, kannst du die Sortierung
und Sichtbarkeit in Menüs steuern. Das sieht dann z.B. so aus:

    site/pages
    |-- 1-index.md
    |-- 2-ueber-uns.md
    |-- 3-kontakt.md
    |-- sitemap.md
    └── impressum.md

Die Seiten *index*, *ueber-uns* und *kontakt* sind in Menüs sichtbar, und die Sortierung
ist definiert. Die Seiten *sitemap* und *impressum* sind in Menüs nicht sichtbar und
die Sortierung somit nicht relevant.


{{ nextlink('dokumentation/inhalte/aufbau-einer-seite', 'Aufbau einer Seite') }}
