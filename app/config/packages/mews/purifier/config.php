<?php

/*
 * This file is part of HTMLPurifier Bundle.
 * (c) 2012 Maxime Dizerens
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return array(
	'encoding' => 'UTF-8',
    'finalize' => true,
    'preload'  => false,
    'settings' => array(
        'default' => array(
            'HTML.Doctype'             => 'XHTML 1.0 Strict',
            'HTML.Allowed'             => 'hr,h1,h2,h3,h4,h5,h6,b,strong,ins,del,sub,sup,blockquote,i,em,a[href|title],ul,ol,li,p[style],br,pre,q,cite,span[style],img[style|width|height|alt|src],address,table[border|cellpadding|cellspacing|summary|style],thead,tr,th[scope|abbr],caption,tbody,td[abbr]',
            'CSS.AllowedProperties'    => 'font,font-size,font-weight,font-style,font-family,text-decoration,padding-left,color,background-color,text-align,width,height,float',
            'AutoFormat.AutoParagraph' => false,
            'AutoFormat.RemoveEmpty'   => true,
        ),
    ),
);
