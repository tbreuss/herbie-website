---
title: Inhalte
layout: documentation.html
---

# Seiteneigenschaften

Jede Datei, die einen Block mit Seiteneigenschaften enthält, wird von Herbie als
gültige Seite betrachtet. Der Block mit den Seiteneigenschaften muss am Anfang
der Datei stehen und zwischen zwei Linien aus drei Minuszeichen gültiges YAML
enthalten. Das tönt etwas kompliziert, ist aber ganz einfach. Hier ist ein Beispiel:

    ---
    title: Mit der eigenen Website durchstarten
    layout: default.html
    ---

Als Seiteneigenschaften kannst du vordefinierte Variablen (siehe Referenz unten)
oder eigene Variablen nutzen. Diese Variablen sind dann in allen Layoutdateien als 
Seiten-Variable verfügbar. Einige Variablen sind auch auf der gleichen Seite
als Shortcodes verfügbar (mehr dazu später). Hier ist ein Beispiel:

    # In Layoutdateien
    {{ page.title }}
    {{ page.layout }}
    
    # In Seitendateien 
    [[page.title]]
    [[page.layout]]
    

## Vordefinierte Variablen

Es gibt einige vordefinierte (=reservierte) Variablen, die vom System verwendet werden 
und die du im Seiteneigenschaften-Block einer Seite mit einem Wert belegen kannst.

[include path="@site/snippets/pagevars.twig"]


## Eigene Variablen

Jede eigene Variable im Seiteneigenschaften-Block, die nicht vordefiniert ist,
wird von Herbie automatisch erkannt und in den Layoutdateien und in den Seiteninhalten 
zur Verfügung gestellt. Wenn du zum Beispiel eine Variable `class` deklarierst, 
kannst du diese in der Layoutdatei abrufen und zum Setzen einer CSS-Klasse nutzen.

In den Seiteneigenschaften deklarierst du den Wert der Variablen:

    ---
    title: Willkommen auf meiner Homepage!
    class: home
    ---

In den Seiteninhalten selber kannst du auf diese Variablen wie zugreifen:

    [[page.title]]
    [[page.layout]]

Und im Layout gibst du die Variablen aus:

    <!DOCTYPE HTML>
    <html>
    <head>
        <title>{{ page.title }}</title>
    </head>
    <body class="{{ page.class }}">
        ...
    </body>
    </html>

Damit weisst du schon, wie du Seitenvariablen einsetzen und mit weiteren eigenen 
Variablen anreichern kannst.
 