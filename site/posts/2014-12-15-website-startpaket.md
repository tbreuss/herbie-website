---
title: Website (Kick)-Startpaket
layout: blog.html
excerpt: Mit dem neuen Website-Startpaket steht dir eines von mehreren geplanten Paketen zur Verfügung, mit denen du einfach und schnell ein Herbie-Projekt aufsetzen und dann gleich damit arbeiten kannst.
categories: [Feature]
author: Herbie
---

Mit dem neuen Website-Startpaket steht dir eines von mehreren geplanten Paketen zur Verfügung, mit denen du einfach und 
schnell ein Herbie-Projekt aufsetzen und damit zu arbeiten beginnen kannst.

Composer installiert dir das Website-Startpaket mit einer einzigen Anweisung im Terminalfenster. 

    $ composer create-project getherbie/start-website
    
Das Website-Startpaket wird von Composer in das Verzeichnis `start-website` installiert.

Die einzelnen Schritte kannst du nach Bedarf auch einzeln ausführen. Du klonst als erstes das Git-Repository, wechselst
in das erstellte Verzeichnis und führst ein Composer-Update durch.

    $ git clone https://github.com/getherbie/start-website.git
    $ cd start-website
    $ composer update

Deine neu erstellte (aber natürlich noch leere) Website rufst du im Browser unter `http://localhost/start-website/web/` 
auf.

Das Startpaket wird mit ein paar vorinstallierten Plugins aufgesetzt. So ist zum Beispiel ein einfaches Kontaktformular 
oder eine einfache Websuche mit dabei.

Wie du weitere Plugins installierst oder deine Website mit Inhalten füllst, liest du am einfachsten in der 
[link dokumentation text="Dokumentation"] nach.
