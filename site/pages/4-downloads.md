---
title: Downloads
---

# Download Herbie

Herbie ist auf GitHub. Schau dir den Code an!

<!-- a class="pure-button button-large" target="_top" href="#"><i class="fa fa-download"></i> Download</a -->
<a class="pure-button button-large" target="_blank" href="https://github.com/getherbie/"><i class="fa fa-github"></i> GitHub</a>


## Plugins

Um ein Plugin zu installieren, erweiterst du die `composer.json` Datei, führst ein
Composer-Update durch und aktivierst das Plugin in deiner Konfiguration. Lies
die Dokumentation, um das Plugin zu konfigurieren.

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
