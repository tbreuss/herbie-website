---
title: Installation
layout: documentation.html
---

# Installation


## Systemanforderungen

Die Installation von Herbie ist einfach. Es gibt allerdings ein paar
Anforderungen an dein System, die erfüllt sein müssen.

- PHP 5.4
- Composer
- Linux, Unix oder Mac OS X

Windows:
Herbie sollte unter Windows laufen, ist aber noch zu wenig getestet.


## Installation mit Composer

Die einfachste Methode, Herbie zu installieren, ist via Composer. Führe im
Terminal einfach die folgende Anweisung aus:

    php composer.phar create-project --prefer-dist getherbie/demo myproject

Da es noch keine stabile Version von Herbie gibt, lautet die Anweisung zum
Installieren im Moment:

    php composer.phar create-project --prefer-dist getherbie/demo:dev-master myproject

Über obige Anweisung installiert Composer Herbie inklusive aller Abhängigkeiten
im Verzeichnis *myproject*.


## Installation via Download

Natürlich kannst du Herbie auch auf herkömmliche Art und Weise als ZIP-Datei
herunterladen <sup>[1]</sup>, entpacken und auf deinen Webserver hochladen.
Das sind ein paar Arbeitsschritte mehr, aber genau so unproblematisch.

<small>[1]: Herbie befindet sich in der Entwicklung, weshalb zur Zeit keine
ZIP-Datei angeboten wird.</small>


{{ nextlink('dokumentation/erste-schritte/verzeichnisstruktur', 'Verzeichnisstruktur') }}
