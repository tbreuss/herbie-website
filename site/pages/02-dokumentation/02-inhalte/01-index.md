---
title: Seiteneigenschaften
layout: documentation.html
---

# Seiteneigenschaften

Jede Datei, die einen Block mit Seiteneigenschaften enthält, wird von Herbie als
eine spezielle Datei behandelt. Der Seiteneigenschaften-Block muss am Anfang der
Datei stehen, und er muss zwischen zwei Linien aus drei Minuszeichen gültiges
YAML enthalten. Tönt kompliziert, ist aber ganz einfach. Hier ist ein Beispiel:

    ---
    title: Mit der eigenen Website durchstarten
    layout: default.html
    ---

Als Seiteneigenschaften kannst du vordefinierte Variablen (siehe Referenz unten)
oder auch eigene massgeschneiderte Variablen nutzen. Diese Variablen sind dann
unterhalb des Seiteneigenschaften-Block der Datei, aber auch in allen
Layoutdateien als Seiten-Variable verfügbar. Hier ist ein Beispiel:

    {{ text.raw('{{ page.title }}') }}
    {{ text.raw('{{ page.layout }}') }}


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

Das sieht dann so aus:

    ---
    title: Willkommen auf meiner Homepage!
    bodyClass: home
    ---

Und im Layout:

    <!DOCTYPE HTML>
    <html>
    <head>
        <title>{{ text.raw('{{ page.title }}') }}</title>
    </head>
    <body class="{{ text.raw('{{ page.bodyClass }}') }}">
        ...


{{ nextlink('dokumentation/inhalte/seiten-erstellen', 'Seiten erstellen') }}
