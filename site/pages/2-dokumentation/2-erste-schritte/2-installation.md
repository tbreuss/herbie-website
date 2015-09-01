---
title: Installation
layout: documentation.html
---

# Installation


## Systemanforderungen

Es gibt nur wenige Anforderungen an dein System, die erfüllt sein müssen. Die 
Installation von Herbie ist einfach, vorausgesetzt du kennst dich etwas mit der Konsole 
und mit Composer - der Paketverwaltung für PHP - aus. In beidem musst du auf jeden Fall kein 
Meister sein.

Die Voraussetzungen an dein System sind:

- Betriebssystem: Windows, Unix (Linux) oder Mac
- Webserver: Apache, IIS, NGINX oder MAMP / XAMPP
- PHP ab Version 5.4 mit installiertem Composer


## Composer-Unterstützung

Herbie installierst du am Einfachsten via Composer. Führe dazu im Terminal die folgende 
Anweisung aus:

    $ composer create-project getherbie/start-website myproject

Composer erstellt im Verzeichnis *myproject* eine Start-Website und installiert alle 
abhängigen Pakete.

Tipp: Um die Installation zu beschleunigen und das Vendorverzeichnis so schlank wie möglich
zu halten, solltest du die Option `--prefer-dist` verwenden.

    $ composer create-project --prefer-dist getherbie/start-website myproject
    
Abhänging von deinem System und deren Einstellungen muss allenfalls der Eigentümer des
erstellten Verzeichnisses inkl. aller Ordner und Dateien rekursiv geändert werden. 

    $ chown -R new-owner myproject

Die Website kannst du nun im Browser unter `http://example.com/start-website/web/` aufrufen.
