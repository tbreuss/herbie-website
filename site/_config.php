<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
return array(
    'nice_urls' => true,
    'shortcodes' => array(
        'box1' => function ($atts, $content) {
        return '<div class="pure-u-1-2 box box-1"><div markdown="1">'
            . $content
            . '</div></div>';
        },
        'box2' => function ($atts, $content) {
            return '<div class="pure-u-1-2 box box-2"><div markdown="1">'
            . $content
            . '</div></div>';
        },
        'wrap' => function ($atts, $content) {
            return 'WRAP1' . $this['shortcode']->parse($content) . 'WRAP2';
        }

    )
);
