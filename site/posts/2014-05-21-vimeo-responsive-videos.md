---
title: Anpassungsfähige Vimeo-Videos
layout: blog.html
excerpt: Mit einer einfachen Twig-Funktion kannst du jetzt auch Vimeo-Videos in deine Website oder Blog einbetten. Egal, ob der Nutzer deine Website mit einem Handy, einem Tablet PC oder einem normalen Monitor aufruft: Er sieht immer ein Video in optimaler Grösse.
categories: [Feature, Plugin]
author: Herbie
image: herbie-vs-challenger.jpg
---

Mit einem einfachen `video_vimeo`-Shortcode kannst du jetzt auch Vimeo-Videos in deine
Website oder Blog einbetten. Die Videos sind responsive und somit bereit für
mobile und moderne Websites. Egal, ob der Nutzer die Website mit einem Handy,
einem Tablet PC oder einem normalen Monitor aufruft: Er sieht immer ein Video
in optimaler Grösse. Und so sieht das Ganze aus:

[video_vimeo 17131693]

Änderst du die Grösse deines Browserfensters, passt sich auch das Vimeo-Video
an. Alles, was es für obige Ausgabe braucht, ist ein einfacher Shortcode.

    [[video_vimeo 17131693]]

Herbie bettet damit ein Vimeo-Video ein, das sich automatisch der Grösse des
Displays des Nutzers anpasst. Möchtest du auf die Anpassungsfähigkeit verzichten,
bindest du das Video einfach so ein.

    [[video_vimeo 17131693 width="500" height="281" responsive="0"]]

Das eingebettete Video sieht dann so aus:

[video_vimeo 17131693 width="500" height="281" responsive="0"]

Mehr Informationen findest du in der [link dokumentation/plugins/video text="Dokumentation"].

