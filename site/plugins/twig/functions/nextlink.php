<?php

/*
 * This file is part of Herbie.
 *
 * (c) Thomas Breuss <www.tebe.ch>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return new Twig_SimpleFunction('nextlink', function ($route, $label) {
    $url = $this['urlGenerator']->generate($route);
    return sprintf('<p class="pagination"><a href="%s" class="pure-button">%s<i class="fa fa-arrow-right"></i></a></p>', $url, $label);
}, ['is_safe' => ['html']]);
