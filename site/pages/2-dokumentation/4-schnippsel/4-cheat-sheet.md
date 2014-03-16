---
title: Cheat Sheet
layout: documentation.html
---

# Cheat Sheet

Das Cheat Sheet befindet sich noch im Aufbau, aber hier ist schon mal ein erster
Teil.

**Seiteneigeschaften**

    ---
    title: Seitentitel
    layout: default.html
    ---

**Seiteneigeschaften ausgeben**

    {% verbatim %}
    {{ page.title }}
    {{ page.layout }}
    {% endverbatim %}

**Erlaubte Dateiendungen**<br>
txt, markdown, md, textile, htm, html

**Homepage**<br>
index.md

**Inhaltssegmente**

    --- 1 ---
    --- 2 ---
    --- 3 ---

**Inhaltssegmente im Layout** ausgeben

    {% verbatim %}
    {{ content() }}
    {{ content(1) }}
    {{ content(2) }}
    {% endverbatim %}

**Twig Filter**

- strftime()

**Twig Funktionen**

- content()
- link()
- url()
- absUrl()
- breadcrumb()
- pageTitle()
- image()
- menu()
- sitemap()
- bodyClass()

**Twig Tags**

- Syntax Highlighter

**Twig Globals**

- Text()