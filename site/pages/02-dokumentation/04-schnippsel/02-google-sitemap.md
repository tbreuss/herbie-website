---
title: Google Sitemap
layout: documentation.html
---

# Google Sitemap

Es ist ganz einfach, für Google & Co. eine Sitemap bereit zu stellen. Dazu
erstellst du im site-Verzeichnis eine Seite `google-sitemap.xml` mit folgendem
Inhalt.

    {{ text.raw('
    ---
    layout: google.xml
    ---

    {% for item in site.menu %}
    <url>
    <loc>{{ absUrl(item.route) }}</loc>
    <lastmod>{{ item.date }}</lastmod>
    </url>
    {% endfor %}
    {% for item in site.posts %}
    <url>
    <loc>{{ absUrl(item.route) }}</loc>
    <lastmod>{{ item.date }}</lastmod>
    </url>
    {% endfor %}
    ')|raw }}

Damit das Ganze auch funktioniert, muss eine Layout-Datei namens `google.xml`
erstellt werden. Diese sieht so aus:

    {{ text.raw('<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    {{ content() }}
    </urlset>')|raw }}

Nun muss nur noch in der `robots.txt`-Datei die Sitemap bekannt gemacht werden.

    Sitemap: /google-sitemap

Fertig!