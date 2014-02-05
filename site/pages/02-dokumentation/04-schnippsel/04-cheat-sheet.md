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

    {{ text.raw('{{ page.title }}
    {{ page.layout }}') }}

**Erlaubte Dateiendungen**<br>
txt, markdown, md, textile, htm, html

**Homepage**<br>
index.md

**Inhaltssegmente**

    --- 1 ---
    --- 2 ---
    --- 3 ---

**Inhaltssegmente im Layout** ausgeben

    {{ text.raw('{{ content() }}') }}
    {{ text.raw('{{ content(1) }}') }}
    {{ text.raw('{{ content(2) }}') }}

**Twig Filter**

- strftime()

**Twig Funktionen**

- content()
- link()
- url()
- absurl()
- breadcrumb()
- pagetitle()
- image()
- menu()
- sitemap()
- bodyClass()

**Twig Tags**

- Syntax Highlighter

**Twig Globals**

- Text()