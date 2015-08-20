---
title: Plugins mit Symfonys Event-Dispatcher
layout: blog.html
excerpt: Symfony sei Dank! Mit dem Event-Dispatcher steht dir nun eine mächtige und erweiterbare Pluginarchitektur zur Verfügung.
category: Feature
author: Herbie
---

Symfony sei Dank! Mit dem Event-Dispatcher steht dir nun eine mächtige und erweiterbare Pluginarchitektur zur Verfügung.

Aus anderen Systemen kennt man sie als Hooks, in Herbie sind das Events. Aktuell gibt es noch nicht so viele davon,
aber eines ist sicher: [Spaghetticode](http://de.wikipedia.org/wiki/Spaghetticode) programmierst du damit nicht.

Zur Zeit stehen die folgenden Events zur Verfügung:

* onRenderContent
* onRenderLayout
* onOutputGenerated
* onOutputRendered
* onPageLoaded
* onPluginsInitialized
* onTwigInitialized
* onShortcodeInitialized

Jedes Plugin kann auf diese Events reagieren und somit das Verhalten der Applikation ändern, und das alles, ohne den 
Code der Ausgangsfunktion zu ändern.

Wie der Event-Dispatcher von Symfony funktioniert, zeigt dir das nachfolgende einfache Beispiel.

[code php]
<?php

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class MyListener
{

    public function onFooAction(Event $event)
    {
        echo __CLASS__ . '/' . __METHOD__;
    }

}

class MySubscriber implements EventSubscriberInterface
{

    public static function getSubscribedEvents()
    {
        return [
            'foo.action' => ['onFooAction', 0],
            'bar.action' => ['onBarAction', 0],
            'baz.action' => ['onBazAction', 0]
        ];
    }

    public function onFooAction()
    {
        echo __CLASS__ . '/' . __METHOD__;
    }

    public function onBarAction()
    {
        echo __CLASS__ . '/' . __METHOD__;
    }

    public function onBazAction()
    {
        echo __CLASS__ . '/' . __METHOD__;
    }

}

$dispatcher = new EventDispatcher();

$listener = new MyListener();
$dispatcher->addListener('foo.action', array($listener, 'onFooAction'));

$subscriber = new MySubscriber();
$dispatcher->addSubscriber($subscriber);

$dispatcher->addListener('baz.action', array($listener, 'onFooAction'));
$dispatcher->addListener('foo.action', function() {
    echo __FUNCTION__;
});

$dispatcher->dispatch('foo.action');
$dispatcher->dispatch('bar.action');
$dispatcher->dispatch('baz.action');

[/code]


Möchtest du einen Eindruck davon bekommen, wie dies in Herbie umgesetzt ist, schaust du dir am besten den Code der 
bestehenden [Plugins](https://github.com/getherbie/plugins) an. 
