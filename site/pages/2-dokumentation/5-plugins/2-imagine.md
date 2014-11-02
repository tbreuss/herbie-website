---
title: Imagine
layout: documentation.html
---

# Imagine

Dank der hervorragenden PHP-Bibliothek *Imagine* können Bilder direkt bearbeitet
und mit vorgefertigten Filtern und Effekten versehen werden. Imagine ist eine
objektorientierte Bibliothek zur Bildmanipulation, die auf einem durchdachten
Design aufbaut und dabei die aktuellsten Best-Practices nutzt. Mehr zu Imagine
findest du in der [Imagine Dokumentation][1] oder direkt auf [GitHub][2].

Um Imagine in Herbie nutzen zu können, muss die Konfiguration angepasst werden.
Dabei können ein oder mehrere Filtersätze mit je einem oder mehreren Filtern
vorgesehen werden. Im folgenden Konfigurations-Beispiel haben wir zwei einfache
Filter zum Skalieren und Ausschneiden eines Bildes erstellt.

    imagine:
        filter_sets:
            resize:
                filters:
                    thumbnail:
                        size: [280, 280]
                        mode: inset
            crop:
                filters:
                    crop:
                        start: [0, 0]
                        size: [560, 560]

Herbie registriert dadurch automatisch einen Twig-Filter namens *Imagine*, der
im Wesentlichen ein Wrapper für die gleichnamige PHP-Bibliothek darstellt. Mit
obiger Konfiguration stehen somit automatisch zwei Filtersätze *resize* und
*crop* zur Verfügung, welche man in Seiten und Layouts als Twig-Filter einsetzen
kann.

Mit dem folgenden Code wird ein Bild auf eine maximale Grösse von 280 x 280
Pixel skaliert:

    {% verbatim %}
    <img src="{{ 'media/mein-bild.jpg'|imagine('resize') }}" alt="" />
    {% endverbatim %}

Und mit dem folgenden Code ein Bild mit der Grösse 560 x 560 Pixel
ausgeschnitten:

    {% verbatim %}
    <img src="{{ 'media/mein-bild.jpg'|imagine('crop') }}" alt="" />
    {% endverbatim %}


## Ausführliches Code-Beispiel

Manchmal hilft ein Code-Beispiel mehr als viele Worte. Deshalb folgt hier ein
ausführliches Beispiel, angefangen bei der Konfiguration bis zur Ausgabe über
den Twig-Filteraufruf.

### Konfiguration

In dieser Konfiguration sieht man gut, dass Filter beliebig verkettet werden
können. Das Beispiel 2 durchläuft zuerst den Crop- und danach den Thumbnail-
Filter.

    imagine:
        filter_sets:
            bsp1:
                filters:
                    thumbnail:
                        size: [220, 220]
                        mode: inset
            bsp2:
                filters:
                    crop:
                        start: [130, 250]
                        size: [520, 390]
                    thumbnail:
                        size: [220, 220]
                        mode: inset
            bsp3:
                filters:
                    grayscale:
                    thumbnail:
                        size: [220, 220]
                        mode: inset
            bsp4:
                filters:
                    colorize:
                        color: '#ff0000'
                    thumbnail:
                        size: [220, 220]
                        mode: inset
            bsp5:
                filters:
                    negative:
                    thumbnail:
                        size: [220, 220]
                        mode: inset
            bsp6:
                filters:
                    sharpen:
                    thumbnail:
                        size: [220, 220]
                        mode: inset
            bsp7:
                filters:
                    gamma:
                        correction: 0.3
                    thumbnail:
                        size: [220, 220]
                        mode: inset
            bsp8:
                filters:
                    rotate:
                        angle: 90
                    thumbnail:
                        size: [220, 165]
                        mode: outbound
            bsp9:
                filters:
                    flipVertically:
                    thumbnail:
                        size: [220, 220]
                        mode: inset
            bsp10:
                filters:
                    flipHorizontally:
                    thumbnail:
                        size: [220, 220]
                        mode: inset
            bsp11:
                filters:
                    resize:
                        size: [220, 165]
            bsp12:
                filters:
                    thumbnail:
                        size: [10, 10]
                        mode: inset
                    upscale:
                        min: [165, 165]
            bsp13:
                filters:
                    relativeResize:
                        method: widen
                        parameter: 200
            bsp14:
                filters:
                    relativeResize:
                        method: heighten
                        parameter: 150
            bsp15:
                filters:
                    thumbnail:
                        size: [20, 20]
                        mode: inset
                    relativeResize:
                        method: scale
                        parameter: 10
            bsp16:
                filters:
                    thumbnail:
                        size: [20, 20]
                        mode: inset
                    relativeResize:
                        method: increase
                        parameter: 135


### Twig-Filter

Die ganze Magie steckt im Twig-Filter `imagine` und der Angabe des
vordefinierten Filtersatzes.

    {% verbatim %}
    <img src="{{ 'media/tulpen.jpg'|imagine('bsp1') }}" alt="" />
    <img src="{{ 'media/tulpen.jpg'|imagine('bsp2') }}" alt="" />
    <img src="{{ 'media/tulpen.jpg'|imagine('bsp3') }}" alt="" />
    <img src="{{ 'media/tulpen.jpg'|imagine('bsp4') }}" alt="" />
    <img src="{{ 'media/tulpen.jpg'|imagine('bsp5') }}" alt="" />
    <img src="{{ 'media/tulpen.jpg'|imagine('bsp6') }}" alt="" />
    <img src="{{ 'media/tulpen.jpg'|imagine('bsp7') }}" alt="" />
    <img src="{{ 'media/tulpen.jpg'|imagine('bsp8') }}" alt="" />
    <img src="{{ 'media/tulpen.jpg'|imagine('bsp9') }}" alt="" />
    <img src="{{ 'media/tulpen.jpg'|imagine('bsp10') }}" alt="" />
    <img src="{{ 'media/tulpen.jpg'|imagine('bsp11') }}" alt="" />
    <img src="{{ 'media/tulpen.jpg'|imagine('bsp12') }}" alt="" />
    <img src="{{ 'media/tulpen.jpg'|imagine('bsp13') }}" alt="" />
    <img src="{{ 'media/tulpen.jpg'|imagine('bsp14') }}" alt="" />
    <img src="{{ 'media/tulpen.jpg'|imagine('bsp15') }}" alt="" />
    <img src="{{ 'media/tulpen.jpg'|imagine('bsp16') }}" alt="" />
    {% endverbatim %}


### HTML-Ausgabe

Und das Ganze sieht dann im Browser so aus:

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


{{ nextlink('dokumentation/anpassung/shortcodes', 'Shortcodes') }}
