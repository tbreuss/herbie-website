---
title: Einfache Website-Suche mit SimpleSearch
layout: blog.html
excerpt: Mit dem Plugin SimpleSearch stattest du deine Website mit einer einfachen aber mächtigen Suchfunktionalität aus.
categories: [Feature, Plugin]
author: Herbie
---

Mit dem Plugin `SimpleSearch` stattest du deine Website mit einer einfachen aber mächtigen Suchfunktionalität aus. 
Composer unterstützt dich bei der Installation des Plugins. Danach brauchst du das Plugin nur noch in der Konfiguration
zu aktivieren.
 
`SimpleSearch` fügt deinen Seiten automatisch eine Seite `Suche` hinzu und stellt dir zwei Shortcodes zum Anzeigen
des Suchformulars und der Suchresultate zur Verfügung. 

    ---
    title: Suche
    route: suche
    nocache: 1
    hidden: 1
    ---
    
    # Suche

    [[simplesearch_form]]
    
    [[simplesearch_results]]
    
Du kannst natürlich auch eine eigene Such-Seite oder eigene Twig-Templates einbinden. Dies definierst du wie üblich
in der Konfiguration.

Weitere Informationen zum SimpleSearch-Plugin findest du in der 
[link dokumentation/plugins/simplesearch text="Dokumentation"].
