---
title: Einfache Website-Suche mit SimpleSearch
layout: blog.html
excerpt: Mit dem Plugin SimpleSearch stattest du deine Website mit einer einfachen aber mächtigen Suchfunktionalität aus.
categories: [Feature, Plugin]
author: Herbie
---

Mit dem Plugin `SimpleSearch` stattest du deine Website mit einer einfachen aber mächten Suchfunktionalität aus. 
Composer unterstützt dich bei der Installation des Plugins. Danach brauchst du das Plugin nur noch in der Konfiguration
zu aktivieren.
 
`SimpleSearch` fügt deinen Seiten automatisch eine Seite `Suche` hinzu und stellt dir zwei Twig-Funktionen zum Anzeigen
des Suchformulars und der Suchresultate zur Verfügung. 

    ---
    title: Suche
    route: suche
    noCache: 1
    hidden: 1
    ---
    
    <h1>Suche</h1>
    {% verbatim %}
    {{ simplesearch_form() }}
    
    {{ simplesearch_results() }}
    {% endverbatim %}
    
Du kannst natürlich auch eine eigene Such-Seite oder andere Twig-Templates einbinden. Dies definierst du wie üblich
in der Konfiguration, und zwar mit den folgenden YAML-Einstellungen:

    plugins:
        simplesearch:
            use_page_cache: false
            page:
                search: @plugin/simplesearch/pages/search.html
            template:
                form: @plugin/simplesearch/templates/form.twig
                results: @plugin/simplesearch/templates/results.twig
    
Ein Beispiel im Einsatz siehst du auf dieser Website in der rechten Spalte oben.

