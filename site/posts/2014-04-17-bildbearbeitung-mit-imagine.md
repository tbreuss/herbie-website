---
title: Bildbearbeitung mit Imagine
layout: blog.html
excerpt: Dank der hervorragenden PHP-Bibliothek Imagine können Bilder direkt bearbeitet und mit vorgefertigten Filtern und Effekten versehen werden. Das zeitaufwändige Erstellen von skalierten Bildern entfällt.
categories: [Feature, Plugin]
author: Herbie
image: tulpen.jpg
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
Seiteninhalten einsetzen kann. Herbie registriert automatisch einen
Shortcode namens *imagine*, der im Wesentlichen ein Wrapper für die
gleichnamige PHP-Bibliothek darstellt.

Mit dem folgenden Code wird ein Bild auf eine maximale Grösse von 560 x 560
Pixel skaliert:

    [[imagine mein-bild.jpg filter="resize"]]

Und mit dem folgenden Code ein Bild mit der Grösse 560 x 560 Pixel
ausgeschnitten:

    [[imagine mein-bild.jpg filter="crop"]]


### Beispiele

[image media/tulpen.jpg class="pure-img" caption="Original-Bild"]

<div class="gallery">
<figure>[imagine tulpen.jpg filter="bsp1"]<figcaption>Thumbnail</figcaption></figure>
<figure>[imagine tulpen.jpg filter="bsp2"]<figcaption>Crop</figcaption></figure>
<figure>[imagine tulpen.jpg filter="bsp3"]<figcaption>Grayscale</figcaption></figure>
<figure>[imagine tulpen.jpg filter="bsp4"]<figcaption>Colorize</figcaption></figure>
<figure>[imagine tulpen.jpg filter="bsp5"]<figcaption>Negative</figcaption></figure>
<figure>[imagine tulpen.jpg filter="bsp6"]<figcaption>Sharpen</figcaption></figure>
<figure>[imagine tulpen.jpg filter="bsp7"]<figcaption>Gamma</figcaption></figure>
<figure>[imagine tulpen.jpg filter="bsp8"]<figcaption>Rotate 90°</figcaption></figure>
<figure>[imagine tulpen.jpg filter="bsp9"]<figcaption>Flip vertically</figcaption></figure>
<figure>[imagine tulpen.jpg filter="bsp10"]<figcaption>Flip horizontally</figcaption></figure>
<figure>[imagine tulpen.jpg filter="bsp11"]<figcaption>Resize</figcaption></figure>
<figure>[imagine tulpen.jpg filter="bsp12"]<figcaption>Upscale</figcaption></figure>
<figure>[imagine tulpen.jpg filter="bsp13"]<figcaption>Relative resize (widen)</figcaption></figure>
<figure>[imagine tulpen.jpg filter="bsp14"]<figcaption>Relative resize (heighten)</figcaption></figure>
<figure>[imagine tulpen.jpg filter="bsp15"]<figcaption>Relative resize (scale)</figcaption></figure>
<figure>[imagine tulpen.jpg filter="bsp16"]<figcaption>Relative resize (increase)</figcaption></figure>
</div>


[1]: http://imagine.readthedocs.org
[2]: https://github.com/avalanche123/Imagine
