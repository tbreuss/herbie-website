---
title: Installation
layout: documentation.html
---

# Installation


## Systemanforderungen

Die Installation von Herbie ist einfach. Es gibt nur wenige Anforderungen an
dein System, die erfüllt sein müssen.

- PHP 5.4
- Composer
- Linux, Unix oder Mac OS X


## Composer-Unterstützung

Herbie installierst du via Composer. Führe dazu im Terminal die folgende Anweisung aus:

    $ composer create-project getherbie/start-website:dev-master myproject

Composer erstellt im Verzeichnis *myproject* eine Start-Website und installiert alle 
abhängigen Bibliotheken.

Tipp: Um die Installation zu beschleunigen und das Vendorverzeichnis so schlank wie möglich
zu halten, solltest du die Option `--prefer-dist` verwenden.

    $ composer create-project --prefer-dist getherbie/start-website:dev-master myproject
    
Abhänging von deinem System und deren Einstellungen muss u.U. der Eigentümer des soeben 
erstellten Verzeichnisses rekursiv geändert werden. 

    $ chown -R new-owner myproject

Die Website rufst du im Browser unter `http://example.com/start-website/web/` auf.
