---
title: Markdown Plugin
layout: documentation.html
link_to_overview: 1
---

# Markdown Plugin

[info]**Info:** Markdown ist seit Version 0.8.0 ein Systemplugin und fest in den Kern von Herbie integriert.[/info]

Markdown ist ein Herbie Systemplugin, mit dem du markdown-formatierte Texte parsen kannst. Intern wird das Plugin zum 
Parsen der Seiteninhalte entsprechend ihrer Dateiendung eingesetzt.

Als Parser sind die Parsedown- und ParsedownExtra-Klassen von Emanuil Rusev im Einsatz, siehe auch
[link http://parsedown.org target="_blank"].


## Installation

Das Plugin ist automatisch installiert und aktiviert.


## Konfiguration

Unter `plugins.config.markdown` stehen dir die folgenden Optionen zur Verfügung:

    # enable shortcode
    shortcode: true
    
    # enable twig function and filter
    twig: false


## Anwendung

Mit dem Markdown-Shortcode kannst du in Seiteninhalten Texte mit dem Markdown-Parser formatieren: 

    [[markdown]Das ist ein mit *Markdown* formatierter Text.[/markdown]]

Mit dem Aktivieren der Twig-Funktion und des Twig-Filters kannst du den Parser auch in Layoutdateien einsetzen.

Einsatz als Twig-Funktion:

    {{ markdown("Das ist ein mit *Markdown* formatierter Text.") }}
    
Einsatz als Twig-Filter:

    {{ "Das ist ein mit *Markdown* formatierter Text." | markdown }}

