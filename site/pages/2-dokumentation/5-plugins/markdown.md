---
title: Markdown Plugin
layout: documentation.html
link_to_overview: 1
---

[githubreadme https://raw.githubusercontent.com/getherbie/plugin-markdown/master/README.md]

## Beispiele

### Als Markdown-Funktion

    {% verbatim %}
    {{ markdown("Das ist ein mit *Markdown* formatierter Text.") }}
    {% endverbatim %}
    
{{ markdown("Das ist ein mit *Markdown* formatierter Text.") }}

### Als Markdown-Filter

    {% verbatim %}
    {{ "Das ist ein mit *Markdown* formatierter Text." | markdown }}
    {% endverbatim %}
    
{{ "Das ist ein mit *Markdown* formatierter Text." | markdown }}
