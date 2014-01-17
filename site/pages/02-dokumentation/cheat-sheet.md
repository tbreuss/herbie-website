---
title: Cheat Sheet
---

# Cheat Sheet

Seiteneigeschaften

    ---
    title: Seitentitel
    layout: default.html
    ---

Seiteneigeschaften ausgeben

    {{ text.raw('{{ page.title }}
    {{ page.layout }}') }}

Erlaubte Dateiendungen:<br>
txt, markdown, md, textile, htm, html

Homepage:<br>
index.md

Inhaltssegmente

    --- 1 ---
    --- 2 ---
    --- 3 ---

Inhaltssegmente im Layout ausgeben

    {{ text.raw('{{ content() }}') }}
    {{ text.raw('{{ content(1) }}') }}
    {{ text.raw('{{ content(2) }}') }}

Twig Funktionen

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
- Tags
- Syntax Highlighter

Twig Globals

- Text()