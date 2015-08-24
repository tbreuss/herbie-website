---
title: Einfaches Kontaktformular
layout: blog.html
excerpt: Mit dem neuen Plugin stattest du deine Website mit einem einfachen Kontaktformular aus. Aktuell stehen dir die Felder Name, E-Mail und Nachricht zur Verfügung. Alle Labels und Nachrichten sind konfigurierbar.
categories: [Feature, Plugin]
author: Herbie
---

Mit dem neuen Plugin `SimpleContact` stattest du deine Website mit einem einfachen Kontaktformular aus. Aktuell
stehen dir die Felder Name, E-Mail und Nachricht zur Verfügung. Alle Labels und Nachrichten sind konfigurierbar.
Eine Konfiguration für ein deutschsprachiges Formular sieht in etwa so aus:

    subject: "Kontaktanfrage"
    recipient: "deine@mailadresse.example"
    fields:
      name:
        label: "Dein Name"
      email:
        label: "Deine E-Mail"
      message:
        label: "Deine Nachricht"
      antispam:
        label: "Antispam"
      submit:
        label: "Formular absenden"
    messages:
      success: "Deine Nachricht wurde versendet."
      error: "Bitte alle Felder ausfüllen."
      fail: "Das Nachricht konnte nicht übermittelt werden."
    errors:
      empty_field: "Dies ist ein Pflichtfeld"
      invalid_email: "Die eingegebene E-Mail ist ungültig"

Die Konfiguration hinterlegst du in den Seiteneigenschaften unter dem Schlüssel `simplecontact`. Falls du den 
Seitencache aktiviert hast, musst du das `nocache`-Flag setzen.

    ---
    title: Kontakt
    nocache: 1
    simplecontact:
        ...
    ---

Das Formular renderst du dann über den gleichnamigen Shortcode:

    [[simplecontact]]
    
Vor oder nach dem Funktionsaufruf kannst du weiteren Inhalt platzieren.
    
    Bitte fülle die folgenden Felder aus:
    
    [[simplecontact]]

    Du kannst uns auch via E-Mail oder telefonisch erreichen.
    

Weitere Informationen zum Kontaktformular findest du in der [link dokumentation/plugins/simplecontact text="Dokumentation"].
        