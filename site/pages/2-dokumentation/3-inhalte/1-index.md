---
title: Inhalte
layout: documentation.html
---

# Seiteneigenschaften

Jede Datei, die einen Block mit Seiteneigenschaften enthält, wird von Herbie als
gültige Seite betrachtet. Der Block mit den Seiteneigenschaften muss am Anfang
der Datei stehen und zwischen zwei Linien aus drei Minuszeichen gültiges YAML
enthalten. Tönt etwas kompliziert, ist aber ganz einfach. Hier ist ein Beispiel:

    ---
    title: Mit der eigenen Website durchstarten
    layout: default.html
    ---

Als Seiteneigenschaften kannst du vordefinierte Variablen (siehe Referenz unten)
oder eigene massgeschneiderte Variablen nutzen. Diese Variablen sind dann
unterhalb des Seiteneigenschaften-Block der Datei, aber auch in allen
Layoutdateien als Seiten-Variable verfügbar. Hier ist ein Beispiel:

    {% verbatim %}
    {{ page.title }}
    {{ page.layout }}
    {% endverbatim %}


## Vordefinierte Variablen

Es gibt einige vordefinierte globale Variablen, die du im Seiteneigenschaften-
Block einer Seite setzen kannst.

<table class="pure-table pure-table-horizontal" width="100%">
    <thead>
        <tr>
            <th width="35%">Variable</th>
            <th width="65%">Beschreibung</th>
        </tr>
    </thead>
    {% for data in site.data.pagevars %}
        <tr>
            <td><code>{{ data.key }}</code></td>
            <td markdown="1">{{ data.desc|raw }}</td>
        </tr>
    {% endfor %}
</table>


## Eigene Variablen

Jede eigene Variable im Seiteneigenschaften-Block, die nicht vordefiniert ist,
wird von Herbie in den Seiten- und Layoutdateien zur Verfügung gestellt. Wenn
du z.B. eine Variable `bodyClass` definierst, kannst du diese im Layout
zum Setzen einer CSS-Klasse nutzen.

In den Seiteneigenschaften sieht das so aus:

    ---
    title: Willkommen auf meiner Homepage!
    bodyClass: home
    ---

Und im Layout so:

    {% verbatim %}
    <!DOCTYPE HTML>
    <html>
    <head>
        <title>{{ page.title }}</title>
    </head>
    <body class="{{ page.bodyClass }}">
        ...
    {% endverbatim %}
