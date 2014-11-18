---
title: Plugins
layout: documentation.html
---

# Herbie Plugins

Für Herbie stehen schon einige Plugins zur Verfügung. Ein Plugin installierst du
am einfachsten via Composer.

    $ composer require getherbie/plugin-disqus

Danach aktivierst du das Plugin in der Konfigurationsdatei und passt Plugin-
Einstellungen nach Belieben an. Fertig!

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
