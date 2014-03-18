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

**Twig Funktionen**

<table class="pure-table pure-table-horizontal" width="100%">
{% for item in site.data.twig_functions %}
<tr><td width="20%"><strong>{{ attribute(item, 'name') }}</strong></td>
<td>{{ attribute(item, 'desc') }}</td></tr>
{% endfor %}
</table>

**Twig Filter**

<table class="pure-table pure-table-horizontal" width="100%">
{% for item in site.data.twig_filters %}
<tr><td width="20%"><strong>{{ attribute(item, 'name') }}</strong></td>
<td>{{ attribute(item, 'desc') }}</td></tr>
{% endfor %}
</table>

**Twig Tags**

<table class="pure-table pure-table-horizontal" width="100%">
{% for item in site.data.twig_tags %}
<tr><td width="20%"><strong>{{ attribute(item, 'name') }}</strong></td>
<td>{{ attribute(item, 'desc') }}</td></tr>
{% endfor %}
</table>

