---
title: Shortcodes
layout: documentation.html
---

# Shortcodes

In WordPress kennt man Shortcodes schon lange, und sie sind mit Sicherheit ein Grund für den Erfolg des Systems. In 
hunderten von Plugins haben sich Shortcodes als "einfach bedienbar" aber "äussert mächtig" herausgestellt. Deshalb sind 
viele Funktionen in Herbie nun als Shortcodes umgesetzt. Nachfolgend sind alle "System"-Shortcodes aufgelistet.


## Links

Link ohne Linktext:

    <http://wikipedia.org>
        
    oder
        
    [[link http://wikipedia.org]]
    
Link mit einem Linktext:

    [[link http://wikipedia.org text="Wikipedia"]]
      
Link in einem neuen Fenster öffnen:

    [[link http://wikipedia.org text="Wikipedia" target="_blank"]]
      
Link mit einem Titel:

    [[link http://wikipedia.org text="Wikipedia" title="Gehe zu Wikipedia!"]]

Link mit einer eigenen CSS-Klasse:

    [[link http://wikipedia.org text="Wikipedia" class="wikipedia"]]
    
  
## Relative Links

Um auf eine eigene Seite zu verlinken, kannst du relative Links angeben. Dies hat den Vorteil, dass Verlinkungen
auch nach einem Seitenumzug stimmen. Oder du kannst so die Seite lokal aufbauen und am Schluss auf den Server laden.
  
    [[link dokumentation/cheat-sheet text="Cheat Sheet"]]
    
Alle oben beschriebenen Attribute funktionieren natürlich auch mit relativen Links.     
    

## E-Mails

E-Mail ohne Linktext:

    <john@doe.com>
    
    oder
    
    [[email john@doe.com]]

E-Mail mit einem Linktext:
      
    [[email john@doe.com text="John Doe"]]

E-Mail mit einem Titel:
      
    [[email john@doe.com text="John Doe" title="Mail an John Doe!"]]

E-Mail mit einer eigenen CSS-Klasse:
      
    [[email john@doe.com text="John Doe" class="email"]]  


<!-- 
## Telefon-Nummern
[[tel +431232343223]]  
[[tel +431232343223 text="Meine Telefonnummer"]]  
[[tel +431232343223 text="Meine Telefonnummer" class="phone"]]
-->


## Bilder

Bilder können ganz einfach eingebunden werden: 

    [[image media/herbie.jpg]]
      
Bild mit einer definierten Breite und Höhe:

    [[image media/herbie.jpg width="300" height="200"]]
      
Bild mit einem alternativen Text:      

    [[image media/herbie.jpg alt="Meine Herbie-Website"]]

Bild mit einer eigenen CSS-Klasse:

    [[image media/herbie.jpg alt="Meine Herbie-Website" class="image"]]

Bild mit einer zusätzlichen Legende:
      
    [[image media/herbie.jpg caption="Meine Herbie-Website"]]
    
        
## Externe Bilder von anderen Websites

Du kannst Bilder auch direkt von einer anderen Website einbinden. Bitte kläre vorher ab, ob du die Bilder auf deiner
Website einbinden darfst.

    [[image http://www.flickr.com/example.jpg]]

Und natürlich funktionieren auch alle oben beschriebenen Attribute mit externen Bildern.     


## Dateien

Download-Dateien kannst du ganz einfach einbinden:
    
    [[file media/tulpen.jpg]]
    
Download mit einem Text:    
      
    [[file media/tulpen.jpg text="Das ist ein Download mit allem drum und dran."]]
      
Download mit einem Titel:
      
    [[file media/tulpen.jpg text="Das ist ein Download" title="Jetzt herunterladen"]]
      
Download mit einer eigenen Klasse:
      
    [[file media/tulpen.jpg text="Das ist ein Download" class="download"]]
      
Download mit zusätzlicher Anzeige der Dateiendung und -grösse:
      
    [[file media/tulpen.jpg text="Das ist ein Download" class="download" info="1"]]


## Datum
  
Anzeige des aktuellen Datums, formatiert nach den lokalen Einstellungen. Dieser Shortcode nutzt die PHP-Funktion 
`strftime`. Default ist %x - die bevorzugte Datumswiedergabe (ohne Zeit), abhängig von der gesetzten Umgebung.  

Datum ohne Formatierung
  
    [[date]]

Datum mit eigener Formatierung
    
    [[date format="%e. %A %Y"]]
    
Datum mit einer eigenen lokalen Einstellung

    [[date format="%e. %A %Y" locale="fr_FR"]]

Tipp: Du kannst mit dem Date-Shortcode natürlich auch formatierte Zeiten ausgeben.

Mehr Informationen zu der PHP-Funktion findest du unter [link http://php.net/strftime target="_blank"].


## Formatierer

Für das Parsen eines Markdown-Textes steht dir das markdown-Tag zur Verfügung:
 
    [[markdown]Das ist ein mit *Markdown* formatierter Text.[/markdown]]
      
Entsprechend gibt es für Textile-Texte das passende textile-Tag:
      
    [[textile]Das ist ein mit *Textile* formatierter Text.[/textile]]


## Twig

Für spezielle Anwendungen kannst du einen Text auch mit Twig parsen: 

    [[twig]Das ist ein mit {{ "<h1>twig</h1>"|upper|striptags }} formatierter Text.[/twig]]


## Include

Mit dem Include-Tag kannst du Inhalte aus einer externen HTML-Datei einfach einbinden: 

    [[include @site/meintemplate.html]]

Die Include-Datei kann auch eine Twig-Datei sein:

    [[include @site/meintwig.twig]]

In der Include-Datei hast du Zugriff auf die gesamte Twig-Umgebung. Dies ist zum Beispiel dann hilfreich, wenn du 
Daten-Dateien formatiert ausgeben willst oder wenn du andere komplexere Formatierungen vornehmen musst.  

Einem Twig-Include kannst du weitere Attribute übergeben und somit den Ablauf des Twig-"Programmes" steuern.

    [[include @site/meintwig.twig attrib1="ABC" attrib2="DEF"]]

Mit den letzen beiden Shortcodes stehen dir alle Möglichkeiten von Twig auch auf Inhaltsseiten zur Verfügung. Bitte 
setze diese Möglichkeit mit Bedacht ein. Twig's Stärken kommen eher beim Rendern der Layout-Dateien zum Zug.

----

Weitere Shortcodes können in Form von Plugins dazu installiert werden.