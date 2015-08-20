---
title: Website (Kick)-Startpaket
layout: blog.html
excerpt: Mit dem neuen Website-Startpaket steht dir eines von mehreren geplanten Paketen zur Verfügung, mit denen du einfach und schnell ein Herbie-Projekt aufsetzen und dann gleich damit arbeiten kannst.
categories: [Feature]
author: Herbie
---

Mit dem neuen Website-Startpaket steht dir eines von mehreren geplanten Paketen zur Verfügung, mit denen du einfach und 
schnell ein Herbie-Projekt aufsetzen und gleich damit arbeiten kannst.
Composer installiert dir das Website-Startpaket mit einer einzigen Anweisung im Terminalfenster. 

    $ composer create-project getherbie/start-website:dev-master
    
Composer installiert das Website-Startpaket in das Verzeichnis `start-website`.

Die einzelnen Schritte kannst du nach Bedarf auch einzeln ausführen:

    $ git clone https://github.com/getherbie/start-website.git
    $ cd start-website
    $ composer update

Deine neu erstellte (aber natürlich noch leere) Website rufst du im Browser unter `http://localhost/start-website/web/` 
auf. Das Startpaket wird mit ein paar vorinstallierten Plugins aufgesetzt, z.B. einem einfachen Kontaktformular oder 
einer einfachen Websuche.

Wie du weitere Plugins installierst oder deine Website mit Inhalten füllst, lernst du am einfachsten in der 
[link dokumentation text="Dokumentation"].
