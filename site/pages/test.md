---
title: Test
date: 2013-12-27
---

<pre>{{ asciiTree() }}</pre>

<ul>
{% for node in site.pageTree|visible %}
<li>{{ link(node.menuItem.route, node.menuItem.title) }}
    {% if node.hasChildren %}
    <ul>
        {% for child in node.children %}
        <li>{{ link(child.menuItem.route, child.menuItem.title) }}</li>
        {% endfor %}
    </ul>
    {% endif %}
</li>
{% endfor %}
</ul>

### TEST

{{ imagine('media/tulpen.jpg', 'bsp1') }}

{{ imagine('media/tulpen.jpg', 'bsp2', class="test") }}

{{ imagine('media/tulpen.jpg', 'bsp3', style="border:0px") }}


<div class="gallery">
<figure><img src="{{ 'media/tulpen.jpg'|imagine('bsp1') }}" alt="" /><figcaption>Thumbnail</figcaption></figure>
<figure><img src="{{ 'media/tulpen.jpg'|imagine('bsp2') }}" alt="" /><figcaption>Crop</figcaption></figure>
<figure><img src="{{ 'media/tulpen.jpg'|imagine('bsp3') }}" alt="" /><figcaption>Grayscale</figcaption></figure>
<figure><img src="{{ 'media/tulpen.jpg'|imagine('bsp4') }}" alt="" /><figcaption>Colorize</figcaption></figure>
<figure><img src="{{ 'media/tulpen.jpg'|imagine('bsp5') }}" alt="" /><figcaption>Negative</figcaption></figure>
<figure><img src="{{ 'media/tulpen.jpg'|imagine('bsp6') }}" alt="" /><figcaption>Sharpen</figcaption></figure>
<figure><img src="{{ 'media/tulpen.jpg'|imagine('bsp7') }}" alt="" /><figcaption>Gamma</figcaption></figure>
<figure><img src="{{ 'media/tulpen.jpg'|imagine('bsp8') }}" alt="" /><figcaption>Rotate 90°</figcaption></figure>
<figure><img src="{{ 'media/tulpen.jpg'|imagine('bsp9') }}" alt="" /><figcaption>Flip vertically</figcaption></figure>
<figure><img src="{{ 'media/tulpen.jpg'|imagine('bsp10') }}" alt="" /><figcaption>Flip horizontally</figcaption></figure>
<figure><img src="{{ 'media/tulpen.jpg'|imagine('bsp11') }}" alt="" /><figcaption>Resize</figcaption></figure>
<figure><img src="{{ 'media/tulpen.jpg'|imagine('bsp12') }}" alt="" /><figcaption>Upscale</figcaption></figure>
<figure><img src="{{ 'media/tulpen.jpg'|imagine('bsp13') }}" alt="" /><figcaption>Relative resize (widen)</figcaption></figure>
<figure><img src="{{ 'media/tulpen.jpg'|imagine('bsp14') }}" alt="" /><figcaption>Relative resize (heighten)</figcaption></figure>
<figure><img src="{{ 'media/tulpen.jpg'|imagine('bsp15') }}" alt="" /><figcaption>Relative resize (scale)</figcaption></figure>
<figure><img src="{{ 'media/tulpen.jpg'|imagine('bsp16') }}" alt="" /><figcaption>Relative resize (increase)</figcaption></figure>
</div>


{{ googlemaps(address="Birsweg 5 4203 Grellingen") }}

{{ disqus('getherbie') }}

{{ vimeo('17131693') }}

{{ youTube('CVmOTwpYMB4') }}
