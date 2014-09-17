---
title: Downloads
---

# Download Herbie

Du kannst dir den Code von Herbie auf GitHub anschauen.

<a class="pure-button button-large" target="_top" href="#"><i class="fa fa-download"></i> Download</a>
<a class="pure-button button-large" target="_blank" href="https://github.com/getherbie/"><i class="fa fa-github"></i> Source</a>


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
        <a class="pure-button button-small" target="_top" href="#"><i class="fa fa-download"></i> Download</a>
        <a class="pure-button button-small" target="_blank" href="https://github.com/getherbie/plugin-{{ item.id }}"><i class="fa fa-github"></i> GitHub</a>
    </p>
</div>
{% endfor %}

<style>
.plugin {
    background-color:#f6f6f5;
    padding:1em;
    margin-bottom:1em;
}
.plugin p {
    margin-top:0;
    margin-bottom:0.5em;
}
.plugin table {
    width:100%;
    border-bottom:1px solid #eee;    
    margin-bottom:1.4em;
}
.plugin td {
    border-top:1px solid #eee;
}
.plugin td:first-child {
    width:10%;
    padding-right:2em;
}
.plugin p.links {
    margin:0;
    text-align:center;
}
</style>