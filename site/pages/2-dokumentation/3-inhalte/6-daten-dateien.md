---
title: Daten-Dateien
layout: documentation.html
---

# Daten-Dateien

Zusätzlich zu den eingebauten Variablen von Herbie kannst du deine eigenen Daten
definieren, auf die du über die Twig Template Engine zugreifen kannst. Diese
Daten werden als YAML-Dateien im Verzeichnis `site/data` abgespeichert.

Mit diesem nützlichen Feature verhinderst du unnötige Wiederholungen und machst
Datenstrukturen global verfügbar. Gleichzeitig hast du damit Zugriff auf Daten,
ohne die zentrale Konfigurationsdatei zu verändern.


## Der Daten-Ordner

Im Daten-Ordner erstellst du eine oder mehrere YAML-Dateien, die beliebig
aufgebaute Daten enthalten können. Auf diese Daten hast du im Template über
`site.data.<DATEINAME>` Zugriff.


### Beispiel: Eine Liste von Personen

Hier ist ein einfaches Beispiel, wie du Daten-Dateien einsetzen kannst, um
Copy-Paste-Aktionen in deinen Twig-Templates zu verhindern:

In data/persons.yml erfasst du die Daten:

    - name: Herbie Hancock
      instrument: Piano

    - name: Jaco Pastorius
      instrument: E-Bass

    - name: Joni Mitchell
      instrument: Guitar, Voice

Auf diese Daten greifst du über site.data.persons zu. Der Dateiname persons.yml
wird also zum entsprechenden Variablennamen.

In einem Template oder einer Textdatei gibst du die Liste von Personen wie folgt
aus:

    {% verbatim %}
    {% for person in site.data.persons %}
      <p>Name: {{person.name}}<br>
         Instrument: {{person.name}}</p>
    {% endfor %}
    {% endverbatim %}


{{ nextlink('dokumentation/anpassung', 'Templates') }}
