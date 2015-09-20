---
title: Twig
layout: documentation.html
---

# Twig Template Engine

Herbie nutzt Twig als Template Engine. Twig ist eine moderne Template Engine für PHP, die schnell, sicher und flexibel 
ist.

Sämtliche Tags, Filter, Funktionen, Globals und Operatoren von Twig stehen in den Layoutdateien von Herbie zur 
Verfügung. Zusätzlich ist Herbie aber mit einigen speziellen Features ausgestattet, die das Leben deutlich einfacher 
machen.

Eine ausführliche Dokumentation zu Twig findest du unter
<http://twig.sensiolabs.org/documentation>.


## Aufgabe von Twig innerhalb Herbie

Wichtig ist folgendes: In Herbie wird Twig fast ausschliesslich zum Rendern von Layoutdateien genutzt. Benötigst du
eine Funktion innerhalb von Seiteninhalten, dann sind **Shortcode** das richtige Werkzeug. Shortcodes sind einfach
einsetzbar und erweiterbar und halten den Inhaltstext ebenso einfach wie auch sauber strukturiert.
