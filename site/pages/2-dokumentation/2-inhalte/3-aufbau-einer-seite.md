---
title: Aufbau einer Seite
layout: documentation.html
---

# Aufbau einer Seite

In den vorherigen Kapiteln hast du gelernt, dass eine Seite einer Textdatei im
Seitenverzeichnis entspricht. Eine Textdatei sieht im einfachsten Fall ungefähr
so aus:

    ---
    title: Eine einfache Seite
    ---

    Dies ist eine einfache Seite mit einem 
    Text zu einem bestimmten Thema.

Herbie erzeugt einen Seitentitel und ordnet den Text unterhalb der
Seiteneigenschaften dem Standard-Inhaltssegment hinzu.


## Benannte Inhaltssegmente

Die meisten Websites sind leider nicht so einfach gehalten. In der Regel
basieren sie auf mehrspaltigen Layouts, die man unabhängig befüllen möchte.
Dies kannst du mit Herbie erreichen, indem du benannte Inhaltssegmente einsetzst.
Ein benanntes Inhaltssegment wird mit drei Minuszeichen, gefolgt von einer Zahl
und weiteren drei Minuszeichen definiert, zum Beispiel:
 
    --- 2 ---
    
Der nachfolgende Text wird dann dem Inhaltssegment mit der ID 2 zugeordnet. Sehen wir
uns ein etwas komplizierteres Beispiel an:

    ---
    title: Eine Seite mit Inhaltssegmenten
    ---

    Dieser Text wird dem Segment 0 (dem Standardsegment) zugeordnet.

    --- 1 ---

    Dieser Text wird dem Segment 1 zugeordnet.

    --- 2 ---

    Dieser Text wird dem Segment 2 zugeordnet.


Mit dieser einfachen Regel kannst du Inhalte einer Seite in mehrere "Behälter"
füllen und diese im Layout ansprechen. Auf diese Art sind komplexe Layouts auch 
mit den einfachen Textdateien von Herbie zu bewältigen.


## Inhaltssegmente im Layout ausgeben

Inhaltssegmente werden in den Layoutdateien mit Hilfe der Content-Funktion von 
Twig ausgegeben. 

    {{ content() }}

Die Content-Funktion erwartet als einzigen Parameter die Segment-ID. Wenn kein 
Parameter angegeben ist, wird das Standard-Inhaltssegment ausgegeben.

[code html5]
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
[/code]

Ein anschauliches Beispiel findest du auch im Website-Repository auf GitHub.
