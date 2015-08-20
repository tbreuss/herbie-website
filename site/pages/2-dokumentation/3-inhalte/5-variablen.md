---
title: Variablen
layout: documentation.html
---

# Variablen

Herbie durchläuft bestimmte Verzeichnisse deiner Website und arbeitet
Textdateien mit einem Seiteneigenschaften-Block ab. Für jede dieser Dateien
erzeugt Herbie verschiedene Daten und macht diese über die Twig Template Engine
bzw. über Shortcodes verfügbar. Nachfolgend siehst du eine Übersicht dieser Daten.


[include path="@site/snippets/commonvars.twig"]


## Site-Variablen

[include path="@site/snippets/sitevars.twig"]



## Page-Variablen

[include path="@site/snippets/pagevars.twig"]


Alle Variablen kannst du in den Layoutdateien als normale Twig-Variable abrufen. 
Hier sind einige Beispiele:

    {{ route }}
    {{ site.language }}
    {{ site.data.persons }}
    {{ page.layout }}
    {{ page.tags }}

Variablen kannst du in Seiteninhalten auch über Shortcodes abrufen. Das sieht dann so aus:

    [[page.title]]
    [[page.layout]]

In der Regel wirst du die Variablen aber in Layoutdateien nutzen, um zum Beispiel abhängig 
von einem bestimmten Wert einer Seiten-Variable etwas Bestimmtes anzuzeigen. 
