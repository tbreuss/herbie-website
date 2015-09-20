---
title: Textile Plugin
layout: documentation.html
link_to_overview: 1
---

# Textile Plugin

Textile ist ein Herbie Systemplugin, mit dem du in Textile formatierte Texte parsen kannst.

[info]**Info:** Textile ist seit Version 0.8.0 ein Systemplugin und fest in den Kern von Herbie integriert.[/info]


## Installation

Das Plugin ist automatisch installiert und aktiviert.


## Konfiguration

Unter `plugins.config.textile` stehen dir die folgenden Optionen zur Verfügung:

    # enable shortcode
    shortcode: true
    
    # enable twig function and filter
    twig: false


## Anwendung

Mit dem Textile-Shortcode kannst du in Seiteninhalten Texte mit dem Textile-Parser formatieren: 

    [[textile]Das ist ein mit *Textile* formatierter Text.[/textile]]

Mit dem Aktivieren der Twig-Funktion und des Twig-Filters kannst du diese auch in Layoutdateien einsetzen.

Einsatz als Twig-Funktion:

    {{ textile("Das ist ein mit *Textile* formatierter Text.") }}
    
Einsatz als Twig-Filter:

    {{ "Das ist ein mit *Textile* formatierter Text." | textile }}

