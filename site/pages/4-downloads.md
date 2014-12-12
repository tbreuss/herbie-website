---
title: Downloads
---

# Download Herbie

Herbie ist auf GitHub. Schau dir den Code an!

<!-- a class="pure-button button-large" target="_top" href="#"><i class="fa fa-download"></i> Download</a -->
<a class="pure-button button-large" target="_blank" href="https://github.com/getherbie/"><i class="fa fa-github"></i> GitHub</a>

## Startpakete

Für Herbie stehen verschiedene Startpakete zur Verfügung. Mit einem Startpaket beginnst du dein Herbie-Projekt. Im
Terminalfenster gibst du folgendes ein:

    $ composer create-project getherbie/start-website:dev-master

Danach rufst du die Website im Browser auf.


{% for item in site.data.starters %}
<div class="plugin">
    <p><strong>{{ attribute(item, 'name') }}</strong></p>
    <p>{{ attribute(item, 'text') }}</p>
    <table>
        {% if item.id %}
        <tr>
            <td>Autor</td>
            <td>{{ attribute(item, 'author') }}</td>
        </tr>
        <tr>
            <td>Version</td>
            <td>{{ attribute(item, 'version') }}</td>
        </tr>
        <tr>
            <td style="white-space:nowrap">Composer</td>
            <td>"{{ item.id }}": "{{ item.version }}"</td>
        </tr>
        {% endif %}
    </table>
    {% if item.id %}
    <p class="links">
        <a class="pure-button button-small" target="_blank" href="https://github.com/{{ item.id }}"><i class="fa fa-github"></i> GitHub</a>
        <a class="pure-button button-small" target="_blank" href="https://packagist.org/packages/{{ item.id}}"><i class="fa fa-archive"></i> Packagist</a>
    </p>
    {% endif %}
</div>
{% endfor %}


## Plugins

Für Herbie stehen schon einige Plugins zur Verfügung. Ein Plugin installierst du via Composer.

    $ composer require getherbie/plugin-disqus

Danach aktivierst du das Plugin in der Konfigurationsdatei und passt Einstellungen an.

{% for item in site.data.plugins %}
<div class="plugin">
    <p><strong>{{ attribute(item, 'name') }}</strong></p>
    <p>{{ attribute(item, 'text') }}</p>
    <table>
        <tr>
            <td>Autor</td>
            <td>{{ attribute(item, 'author') }}</td>
        </tr>
        <tr>
            <td>Version</td>
            <td>{{ attribute(item, 'version') }}</td>
        </tr>
        <tr>
            <td style="white-space:nowrap">Composer</td>
            <td>"{{ item.composer }}": "{{ item.version }}"</td>
        </tr>
    </table>
    <p class="links">
        <a class="pure-button button-small" target="_blank" href="https://github.com/getherbie/plugin-{{ item.id }}"><i class="fa fa-github"></i> GitHub</a>
        <a class="pure-button button-small" target="_blank" href="https://packagist.org/packages/{{ item.composer }}"><i class="fa fa-archive"></i> Packagist</a>
    </p>
</div>
{% endfor %}
