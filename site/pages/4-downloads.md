---
title: Downloads
---

# Download Herbie

Du kannst dir den Code von Herbie auf GitHub anschauen.

<!-- a class="pure-button button-large" target="_top" href="#"><i class="fa fa-download"></i> Download</a -->
<a class="pure-button button-large" target="_blank" href="https://github.com/getherbie/"><i class="fa fa-github"></i> GitHub</a>


## Plugins

Um ein Plugin zu installieren, lädst du die ZIP-Datei herunter und entpackst sie in das Plugins-Verzeichnis.
Lies anschliessend die Dokumentation, um das Plugin richtig zu konfigurieren und in deine Website einzubauen.

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