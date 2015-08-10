---
title: Textile Plugin
layout: documentation.html
link_to_overview: 1
---

{{ githubreadme("https://raw.githubusercontent.com/getherbie/plugin-textile/master/README.md") }}


## Beispiele

### Als Textile-Funktion

    {% verbatim %}
    {{ textile("Das ist ein mit *Textile* formatierter Text.") }}
    {% endverbatim %}
    
{{ textile("Das ist ein mit *Textile* formatierter Text.") }}

### Als Textile-Filter

    {% verbatim %}
    {{ "Das ist ein mit *Textile* formatierter Text." | textile }}
    {% endverbatim %}
    
{{ "Das ist ein mit *Textile* formatierter Text." | textile }}
