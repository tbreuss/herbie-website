---
title: Google Sitemap
layout: documentation.html
---

# Google Sitemap

Es ist ganz einfach, für Google & Co. eine Sitemap bereit zu stellen. Dazu
erstellst du im site-Verzeichnis eine Seite `google-sitemap.xml` mit folgendem
Inhalt.

    {% verbatim %}
    ---
    layout: null
    content_type: text/xml
    keep_extension: true
    ---

    <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
      {% for item in site.menu %}
      <url>
        <loc>{{ absurl(item.route) }}</loc>
        <lastmod>{{ item.date }}</lastmod>
      </url>
      {% endfor %}
      {% for item in site.posts %}
      <url>
        <loc>{{ absurl(item.route) }}</loc>
        <lastmod>{{ item.date }}</lastmod>
      </url>
      {% endfor %}
    </urlset>
    {% endverbatim %}

Nun muss die Sitemap nur noch in der `robots.txt`-Datei bekannt gemacht werden.

    Sitemap: /google-sitemap.xml

Fertig!
