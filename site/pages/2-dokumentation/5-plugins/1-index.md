---
title: Plugins
layout: documentation.html
---

# Herbie Plugins

Für Herbie stehen schon einige Plugins zur Verfügung. Um ein Plugin zu installieren, erweiterst du die composer.json Datei
deiner Website und führst ein Composer-Update durch. Danach muss das Plugin nur noch in der Konfigurationsdatei aktiviert werden.

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
    </table>
    <p class="links">
        <!--a class="pure-button button-small" target="_top" href="#"><i class="fa fa-download"></i> Download</a-->
        <a class="pure-button button-small" target="_blank" href="https://github.com/getherbie/plugin-{{ item.id }}"><i class="fa fa-github"></i> GitHub</a>
    </p>
</div>
{% endfor %}
