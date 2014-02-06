---
title: RSS Feed
layout: documentation.html
---

# RSS Feed

Genau so einfach ist es, einen RSS Feed bereit zu stellen. Dazu erstellst du im
site-Verzeichnis eine Seite `rss.xml` mit folgendem Inhalt.

    {{ text.raw('
    ---
    layout: rss.xml
    ---

    {% for item in site.menu %}
    <item>
    <title>{{ item.title }}</title>
    <link>{{ absUrl(item.route) }}</link>
    {% if item.abstract %}<description>{{ item.abstract }}</description>{% endif %}
    {% if item.author %}<author>{{ item.author }}</author>{% endif %}
    {% if item.id %}<guid>{{ item.id }}</guid>{% endif %}
    {% if item.date %}<pubDate>{{ item.date|date(\'r\') }}</pubDate>{% endif %}
    </item>
    {% endfor %}
    ')|raw }}

Damit das Ganze auch funktioniert, muss eine Layout-Datei namens `rss.xml`
erstellt werden. Diese sieht so aus:

    {{ text.raw('<?xml version="1.0" encoding="utf-8"?>
    <rss version="2.0">
      <channel>
        <title>Titel des Feeds</title>
        <link>URL der Webpräsenz</link>
        <description>Kurze Beschreibung des Feeds</description>
        <language>Sprache des Feeds (z. B. "de-de")</language>
        <copyright>Autor des Feeds</copyright>
        <pubDate>Erstellungsdatum("Tue, 8 Jul 2008 2:43:19")</pubDate>
        <image>
          <url>URL einer einzubindenden Grafik</url>
          <title>Bildtitel</title>
          <link>URL, mit der das Bild verknüpft ist</link>
        </image>
        {{ content() }}
      </channel>
    </rss>')|raw }}

Jetzt musst Du im head-Bereich des HTML-Layouts nur noch ein link-Element einfügen:

    <link rel="alternate" type="application/rss+xml" title="RSS" href="/feed.rss" />

Fertig!