---
title: Tests / Variablen
layout: default.html
format: md
date: 2013-12-27
keep_extension: 0
content_type: text/html
authors: [Thomas,Anton,Felix]
categories: [Internet,Basteln,Kochen]
tags: [SEO,CMS,Blog]
nocache: 1
hidden: 1
test: Test
---

# {{ page.title }}

**Global**<br>
Route: {{ route }}<br>
Theme: {{ theme }}<br>
BaseUrl: {{ baseUrl }}<br>

**Site**<br>
site.charset = {{ site.charset }}<br>
site.language = {{ site.language }}<br>
site.locale = {{ site.locale }}<br>
site.time = {{ site.time }}<br>
site.created = @todo<br>
site.modified = @todo<br>


**Page**<br>
page.title = {{ page.title }}<br>
page.layout = {{ page.layout }}<br>
page.format = {{ page.format }}<br>
page.date = {{ page.date }}<br>
page.keep_extension = {{ page.keep_extension }}<br>
page.content_type = {{ page.content_type }}<br>
page.authors = {{ page.authors|join(', ') }}<br>
page.categories = {{ page.categories|join(', ') }}<br>
page.tags = {{ page.tags|join(', ') }}<br>
page.path = {{ page.path }}<br>
{# page.route = {{ page.route }}<br> #}
page.nocache = {{ page.nocache }}<br>
page.hidden = {{ page.hidden }}<br>
page.test = {{ page.test }}<br>

