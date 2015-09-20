---
title: Daten ausgeben
layout: documentation.html
---

# Daten ausgeben

Das folgende Beispiel zeigt, wie Daten aus dem Daten-Ordner ausgelesen und
als HTML-Tabelle angezeigt werden können.

    <table class="pure-table pure-table-horizontal">
        <thead>
        <tr>
            <th width="25%">Variable</th>
            <th width="65%">Beschreibung</th>
            <th width="10%">Typ</th>
        </tr>
        </thead>
        {% for data in site.data.commonvars %}
            <tr>
                <td><code>{{ data.key }}</code></td>
                <td>{{ data.desc }}</td>
                <td>{{ data.type }}</td>
            </tr>
        {% endfor %}
    </table>
    
Der Vollständigkeit halber... die in YAML erfassten Daten sehen übrigens so aus:
    
    -
      key:  site
      desc: Projektweite Variablen.
      type: Object
    -
      key:  page
      desc: Variablen, die der aktuellen Seite zugeordnet werden.
      type: Object
    -
      key:  theme
      desc: Das in der Konfiguration definierte Theme.
      type: string
