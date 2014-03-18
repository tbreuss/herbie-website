---
title: Aufbau einer Seite
layout: documentation.html
---

# Aufbau einer Seite

In den vorherigen Kapiteln hast du gelernt, dass eine Seite einer Textdatei im
Seitenverzeichnis entspricht. Eine Textdatei könnte im einfachsten Fall ungefähr
so aussehen:

    ---
    title: Eine einfache Seite
    ---

    Eine einfache Seite mit wenig Text.

Herbie erzeugt einen Seitentitel und fügt den Text unterhalb der
Seiteneigenschaften dem Standard-Inhaltssegment hinzu.


## Benannte Inhaltssegmente

Die meisten Websites sind leider nicht so einfach gehalten. In der Regel
basieren sie auf mehrspaltigen Layouts, die man unabhängig befüllen möchte.
Dies kannst du mit Herbie erreichen, indem du benannte Inhaltssegmente nutzt.
Ein benanntes Inhaltssegment wird mit drei Minuszeichen, gefolgt von einer Zahl
und weiteren drei Minuszeichen definiert, also zum Beispiel `--- 2 ---`. Der
nachfolgende Text wird dann dem Inhaltssegment mit der ID 2 zugeordnet.

    ---
    title: Eine Seite mit Inhaltssegmenten
    ---

    Dieser Text wird dem Segment 0 zugeordnet.
    Dies ist das Standard Inhaltssegment.

    --- 1 ---

    Dieser Text wird dem Segment 1 zugeordnet.

    --- 2 ---

    Dieser Text wird dem Segment 2 zugeordnet.


Auf diese Art sind komplexe Layouts auch mit den einfachen Textdateien von
Herbie zu bewältigen.


## Inhaltssegmente im Layout ausgeben

Inhaltssegmente werden in den Layoutdateien über die Twig-Funktion
`{{ '{{' }} content() {{ '}}' }}` ausgegeben. Die Content-Funktion erwartet
als einzigen Parameter die Segment-ID. Wenn kein Parameter angegeben ist,
wird das Standard-Inhaltssegment ausgegeben.

    {% verbatim %}
    <body>
        <div class="segment-0 standard">
            {{ content() }}
        </div>
        <div class="segment-1">
            {{ content(1) }}
        </div>
        <div class="segment-2">
            {{ content(2) }}
        </div>
    </body>
    {% endverbatim %}

Weitere Beispiele findest du auf {{ link('github', 'GitHub', {'target':'_blank'}) }}
in den Layout-Dateien der Demo-Website.


{{ nextlink('dokumentation/inhalte/variablen', 'Variablen') }}
