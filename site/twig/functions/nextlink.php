<?php

/*
 * This file is part of Herbie.
 *
 * (c) Thomas Breuss <www.tebe.ch>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return new Twig_SimpleFunction('nextlink', function ($route = '', $label = '') use ($app) {


	#$tree = $app['tree']->findByRoute($app['route']);
	#echo"<pre>";print_r($tree);echo"</pre>";

	if(empty($route) && empty($label)) {
		$matched = false;
		$currentRoute = $app['route'];
		foreach($app['menu'] as $pageMenu) {
			if($matched) {
				$route = $pageMenu->route;
				$label = $pageMenu->title;
			}
			if($pageMenu->route == $currentRoute) {
				$matched = true;
			}
		}
	}

	if(empty($route) || empty($label)) {
		return '';
	}

    $url = $app['urlGenerator']->generate($route);
    return sprintf('<p class="pagination"><a href="%s" class="pure-button">%s<i class="fa fa-chevron-right"></i></a></p>', $url, $label);
}, ['is_safe' => ['html']]);
