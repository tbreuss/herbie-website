---
title: Kontakt
---

# Kontakt


{{ googleMaps(address="Birsweg 5, Grellingen",zoom=15) }}

{{ googleMaps(address="Steinenweg 13, Pratteln",zoom=13) }}

{{ googleMaps(address="Lammetstrasse 5, Lauwil",zoom=14) }}


{% autoescape false %}

{{ form.start() }}
{{ form.hidden('spam', 'Kein Spam') }}
{{ form.text('vorname', 'Vorname') }}
{{ form.text('nachname', 'Nachname') }}
{{ form.text('email', 'E-Mail') }}
{{ form.textarea('nachricht', 'Nachricht', 'cols="50" rows="10"' ) }}
{{ form.submit('Absenden') }}
{{ form.end() }}

{% endautoescape %}



<pre>{{ dump(site.data.contact) }}</pre>