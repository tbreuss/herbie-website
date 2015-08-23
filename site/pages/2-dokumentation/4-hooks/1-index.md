---
title: Hooks
layout: documentation.html
---

# Hooks

Herbie hat ein bestechend einfaches, aber gleichzeitig mächtiges Hooksystem mit an Board. Es orientiert sich an den 
Wordpress-Filtern und -Actions, ist aber intern einfacher aufgebaut. In Herbie unterscheiden wir zwischen drei 
Arten von Hooks.


## 1. Action-Hooks

Action-Hooks sind Abzweigungen im Programmablauf, **die keinen Rückgabewert erwarten**. Diese Art von Hooks machen 
überall dort Sinn, wo eine Aktion ausgeführt werden soll, deren Rückgabewert für den aufrufenden Programmteil ohne
Bedeutung ist. Beispiele für Action-Hooks sind:

- outputGenerated
- outputRendered
- pluginsInitialized
- shortcutInitialized


## 2. Filter-Hooks

Filter-Hooks kommen überall dort zum Einsatz, wo ein Wert verändert, bearbeitet, geparst oder eben gefiltert wird. 
**Filter-Hooks erwarten immer einen gültigen Rückgabewert**, dieser darf also nicht `NULL` sein. In der Regel entspricht 
der Typ des Rückgabewerts dem Typ des übergebenen Parameters. Beispiele für Filter-Hooks sind:

- renderContent
- renderLayout


## 3. Config-Hooks

Config-Hooks sind etwas schwieriger zu verstehen. Sie werden immer dort eingesetzt, wo man einen internen Mechanismus 
zum Erzeugen von Objekten oder Strukturen "befüllen" möchte. **Config-Hooks erwarten deshalb immer ein Array als 
Rückgabewert**. Oft sind Config-Hooks einfachere oder komfortablere Varianten einer schon bestehenden Lösung. Beispiele 
für Config-Hooks sind:

- addShortcode
- addTwigFunction
- addTwigFilter
- addTwigTest


## Hook hinzufügen

Um einem definierten Hook eine Funktion hinzuzufügen, kannst du immer den folgenden Aufruf verwenden.
 
    Hook::attach('hookName', 'callbackFunction');

Der Hookname muss einem existierenden Hook entsprechen und der zweite Parameter muss eine PHP-Funktion sein. Das 
Hooksystem ruft die sogenannte Callback-Funktion immer mit drei Parametern auf.

    $subject    | Der Kontext                       | mixed
    $data       | Ein Array mit weiteren Parametern | array
    $name       | Der Name des Hooks                | string

Deine Funktion muss also wie folgt aufgebaut sein:

    function myHook($subject, array $data, $name) {}

Im Programmablauf werden Hooks über die folgenden Methoden ausgelöst.
 
    (void)  Hook::triggerAction($name, $subject, $data)
    (mixed) Hook::triggerFilter($name, $subject, $data)
    (array) Hook::triggerConfig($name, $subject, $data)
    
Alternativ kannst du einen einheitlichen Aufruf mit zusätzlichem ersten Parameter einsetzen:

    Hook::trigger(HOOK::ACTION, $name, $subject, array $data)
    
Tipp: Wenn du eine Volltextsuche nach "Hook" über den Herbie-Programmcode machst, findest du konkrete Anwendungsfälle, was 
unter Umständen etwas einfacher zu verstehen ist.
