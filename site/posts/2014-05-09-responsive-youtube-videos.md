---
title: Responsive YouTube-Videos
layout: blog.html
excerpt: Mit der neuen youTube-Funktion können responsive Videos eingebaut werden, die sich automatisch der Grösse des Displays des Nutzers anpassen.
categories: [Feature, Plugin]
author: Herbie
image: herbie-car.jpg
---

Dank der neuen `youTube`-Funktion können Videos der gleichnamigen Plattform ganz
einfach eingebettet werden. Und das Schöne ist, dass die Videos sogar responsive
und somit bereit für mobile und responsive Websites sind. Auf diese Art
eingebettete Videos passen sich automatisch an die Grösse des Displays des
Nutzers an, egal ob dieser nun mit einem Handy, einem Tablet PC oder einem
normalen Monitor surft. Und so sieht die Ausgabe aus:

{{ youTube('CVmOTwpYMB4') }}

Wenn du die Grösse des Browserfensters änderst, passt sich auch das Video an.
Alles, was es für obige Ausgabe braucht, ist eine einzige Zeile Twig-Code.

    {% verbatim %}
    {{ youTube('CVmOTwpYMB4') }}
    {% endverbatim %}

Herbie bettet damit ein Video ein, das sich automatisch der Grösse des Displays
des Nutzers anpasst. So einfach kann das Leben sein ;-)
