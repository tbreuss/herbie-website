---
title: Bildbearbeitung mit Imagine
layout: blog.html
excerpt: Dank der hervorragenden PHP-Bibliothek Imagine können Bilder direkt bearbeitet und mit vorgefertigten Filtern und Effekten versehen werden. Das zeitaufwändige Erstellen von skalierten Bildern entfällt.
category: Feature
author: Herbie
image: media/tulpen.jpg
---

Dank der hervorragenden PHP-Bibliothek *Imagine* kann man mit Herbie Bilder
direkt bearbeiten und mit vorgefertigten Filtern und Effekten versehen. Imagine
ist eine objektorientierte Bibliothek zur Bildmanipulation, die die aktuellsten
Best-Practices nutzt und auf einem durchdachten Design aufbaut. Mehr zu Imagine
findest du in der [Imagine Dokumentation][1] oder direkt auf [GitHub][2].

Um Imagine in Herbie zu nutzen zu können, muss zuerst die Konfiguration
angepasst werden. In unserem Beispiel benötigen wir zwei einfache Filter zum
Skalieren und Ausschneiden eines Bildes.

    imagine:
        filter_sets:
            resize:
                filters:
                    thumbnail:
                        size: [560, 560]
                        mode: inset
            crop:
                filters:
                    crop:
                        start: [0, 0]
                        size: [560, 560]

Damit stehen zwei Filtersätze *resize* und *crop* zur Verfügung, die man in
Seiten und Layouts einsetzen kann. Herbie registriert automatisch einen
Twig-Filter namens *Imagine*, der im Wesentlichen ein Wrapper für die
gleichnamige PHP-Bibliothek darstellt.

Mit dem folgenden Code wird ein Bild auf eine maximale Grösse von 560 x 560
Pixel skaliert:

    {% verbatim %}
    <img src="{{ 'media/mein-bild.jpg'|imagine('resize') }}" alt="" />
    {% endverbatim %}

Und mit dem folgenden Code ein Bild mit der Grösse 560 x 560 Pixel
ausgeschnitten:

    {% verbatim %}
    <img src="{{ 'media/mein-bild.jpg'|imagine('crop') }}" alt="" />
    {% endverbatim %}


### Beispiele

<figure>
    {{ image('media/tulpen.jpg', 0, 0, '') }}
    <figcaption>Original-Bild</figcaption>
</figure>

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


[1]: http://imagine.readthedocs.org
[2]: https://github.com/avalanche123/Imagine
