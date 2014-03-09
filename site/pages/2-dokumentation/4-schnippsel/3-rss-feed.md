---
title: RSS Feed
layout: documentation.html
---

# RSS Feed

Genau so einfach ist es, einen RSS Feed bereit zu stellen. Dazu erstellst du im
site-Verzeichnis eine Seite `rss.xml` mit folgendem Inhalt.

    {{ text.raw('
    ---
    layout: null
    contentType: text/xml
    preserveExtension: true
    ---
    <rss version="2.0">
      <channel>
        <title>Titel des Feeds</title>
        <link>URL der Webpräsenz</link>
        <description>Kurze Beschreibung des Feeds</description>
        <language>{{ site.language }}</language>
        <copyright>Autor des Feeds</copyright>
        <pubDate>{{ "now"|date(\'r\') }}</pubDate>
        <image>
          <url>URL einer einzubindenden Grafik</url>
          <title>Bildtitel</title>
          <link>URL, mit der das Bild verknüpft ist</link>
        </image>
        {% for item in site.menu %}
        <item>
          <title>{{ item.title }}</title>
          <link>{{ absUrl(item.route) }}</link>
          {% if item.abstract %}
            <description>{{ item.abstract }}</description>
          {% endif %}
          {% if item.author %}
            <author>{{ item.author }}</author>
          {% endif %}
          {% if item.id %}
            <guid>{{ item.id }}</guid>
          {% endif %}
          {% if item.date %}
            <pubDate>{{ item.date|date(\'r\') }}</pubDate>
          {% endif %}
        </item>
        {% endfor %}
    </channel>
    </rss>')|raw }}

Jetzt musst du nur noch ein link-Element im head-Bereich des HTML-Layouts
einfügen:

    <link rel="alternate" type="application/rss+xml" title="RSS" href="/feed.rss" />

Fertig!


{{ nextlink('dokumentation/schnippsel/cheat-sheet', 'Cheat Sheet') }}
