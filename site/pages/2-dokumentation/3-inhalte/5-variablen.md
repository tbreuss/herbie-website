---
title: Variablen
layout: documentation.html
---

# Variablen

Herbie durchläuft bestimmte Verzeichnisse deiner Website und arbeitet
Textdateien mit einem Seiteneigenschaften-Block ab. Für jede dieser Dateien
erzeugt Herbie verschiedene Daten und macht diese über die Twig Template Engine
verfügbar. Nachfolgend siehst du eine Übersicht dieser Daten.


<table class="pure-table pure-table-horizontal" width="100%">
    <thead>
        <tr>
            <th width="35%">Variable</th>
            <th width="65%">Beschreibung</th>
        </tr>
    </thead>
    {% for data in site.data.commonvars %}
        <tr>
            <td><code>{{ data.key }}</code></td>
            <td markdown="1">{{ data.desc }}</td>
        </tr>
    {% endfor %}
</table>


## Site-Variablen

<table class="pure-table pure-table-horizontal" width="100%">
    <thead>
        <tr>
            <th width="35%">Variable</th>
            <th width="65%">Beschreibung</th>
        </tr>
    </thead>
    {% for data in site.data.sitevars %}
        <tr>
            <td><code>site.{{ data.key }}</code></td>
            <td markdown="1">{{ data.desc }}</td>
        </tr>
    {% endfor %}
</table>


## Page-Variablen

<table class="pure-table pure-table-horizontal" width="100%">
    <thead>
        <tr>
            <th width="35%">Variable</th>
            <th width="65%">Beschreibung</th>
        </tr>
    </thead>
    {% for data in site.data.pagevars %}
        <tr>
            <td><code>page.{{ data.key }}</code></td>
            <td markdown="1">{{ data.desc }}</td>
        </tr>
    {% endfor %}
</table>

Alle Variablen kannst du in den Layout- und Seitendateien als normale
Twig-Variable abrufen. Hier sind einige Beispiele:

    {% verbatim %}
    {{ route }}
    {{ site.language }}
    {{ site.data.persons }}
    {{ page.layout }}
    {{ page.tags }}
    {% endverbatim %}
