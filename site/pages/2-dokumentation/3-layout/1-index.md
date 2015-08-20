---
title: Layout
layout: documentation.html
---

# Layouts

Layoutdateien werden in Herbie mit Hilfe der Template Engine Twig umgesetzt. Twig Templates sind recht einfach zu 
verstehen und sehr gut dokumentiert, siehe [link http://twig.sensiolabs.org/documentation target="_blank"].

Layoutdateien sind in Herbie unter `site/layouts/default` abgelegt, wobei das letzte Pfadsegment für das Theme steht. 
Herbie erwartet mindestens zwei Layoutdateien:

    site/layouts/default/
    |-- default.html        # das Default-Template
    └── error.html          # die Fehlerseite
   

Sinnvollerweise unterteilst du deine Layouts in ein Haupttemplate und ein oder mehrere Subtemplates. Diese erben die 
Blöcke des Haupttemplates und können diese mit Inhalt befüllen.

    site/layouts/default/
    |-- default.html        # das Default-Template
    |-- twocols.html        # ein Zweispalter-Template
    |-- homepage.html       # das Homepage-Template
    |-- error.html          # die Fehlerseite
    └── main.html           # das Main-Template

Ein einfaches Haupttemplate sieht vielleicht so aus: 

## Main-Template

    # main.html

    <!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" href="style.css" />
            <title>{% block title %}{% endblock %} - My Webpage</title>
        </head>
        <body>
            <div id="content">{% block content %}{% endblock %}</div>
            <div id="sidebar">{% block sidebar %}{% endblock %}</div>
            <div id="footer">Copyright 2015 by you.</div>
        </body>
    </html>
    
Du siehst, dass im Haupttemplate drei Blöcke (title, content, sidebar) definiert wurden. Diese Blöcke enthalten aber 
noch keinen Inhalt.
        
        
## Sub-Template

Das Subtemplate "erbt" vom Haupttemplate und füllt die im Haupttemplate definierten Blöcke mit Inhalten.

    # default.html
    
    {% extends "main.html" %}
    
    {% block title %}Index{% endblock %}
    
    {% block content %}
        <h1>Index</h1>
        <p class="important">Welcome to my homepage!</p>
    {% endblock %}
    
        
Damit das Ganze auch dynamisch funktioniert, muss eine content-Funktion angewendet werden. Diese hat zur Aufgabe,
die Inhalte eines Seitensegmentes auszugeben. Intern durchläuft die Funktion einen oder mehrere Formatierungsprozesse
wie das Rendern von Twig oder das Parsen von Shortcode-, Markdown- oder Textile-Code. 

Das angepasste (dynamisierte) Subtemplate sieht nun also so aus:

    # default.html
    
    {% extends "main.html" %}
    
    {% block title %}{{ page.title }}{% endblock %}
    
    {% block content %}  
        {{ content(0) }}
    {% endblock %}


Sowohl der Block `title` für den Seitentitel als auch der Block `content` für den Seiteninhalt werden dynamisch 
abgefüllt. Möchtest du neben der normalen Inhaltsspalte eine Sidebar platzieren, kannst du dies wie folgt machen.
     
    # twocolumn.html
     
    {% extends "main.html" %}
    
    {% block title %}{{ page.title }}{% endblock %}
    
    {% block content %}  
        {{ content(0) }}
    {% endblock %}     
    
    {% block sidebar %}  
        {{ content(1) }}
    {% endblock %}


Über den Seiteneigenschaften-Block kannst du nun für jede Seite eines der vorbereiteten Layouts anwenden.

    ---
    title: Meine Zweispalter-Seite
    layout: twocolumn.html
    ---


Wie die Seiteinhalte formatiert sein müssen, hast du schon im Kapitel [link dokumentation/inhalte text="Inhalte"] 
gelernt. Dort findest du mehr Informationen zum Thema.

Ein anderes gutes Anschauungs-Beispiel stellen die Layoutdateien dieser Website dar. Diese kannst du dir auf GitHub 
anschauen unter [link https://github.com/getherbie/website/ target="_blank"].
