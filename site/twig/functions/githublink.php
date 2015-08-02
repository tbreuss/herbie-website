<?php

/*
 * This file is part of Herbie.
 *
 * (c) Thomas Breuss <www.tebe.ch>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return new Twig_SimpleFunction('githublink', function () {
    $page = \Herbie\Application::getPage();
    $href = 'https://github.com/getherbie/website/blob/master/site/' . str_replace(['@page', '@post'], ['pages', 'posts'], $page->path);
    return '<a class="github-edit-link" href="'. $href . '" title="Fehler entdeckt? Bearbeite den Text auf Github!" target="_blank"><i class="fa fa-2x fa-github"></i></a>';
}, ['is_safe' => ['html']]);
