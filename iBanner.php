<?php
/**
 * Plugin Name: iBanner
 * Description: Inserta publicidad con el shortcode [banner]
 * Version: 1.0
 * Author: Israel Moreno
 * Author URI: https://portafolio-israel-moreno.netlify.app/
 * License: GPL2
 */
add_shortcode( "banner", function($atts, $content){
	$output = ' <div style="font-size: 14px;line-height: 24px;color: #070707;text-align: center;
    padding: 6px 18px;"><h2 style="font-size: xx-large;font-family: monospace;
    ">Descargue nuestra última edición </h2>

    <img loading="lazy" width="1000" height="750" src="https://img.freepik.com/free-psd/top-view-opened-magazine-design-mockup_23-2149059844.jpg" alt="" class="wp-image-10">

    <a style="width: -webkit-fill-available;width: -moz-available;display: inline-block;background-color: #d120ff;font-weight: normal;color: #fff;
    padding: 8px 8px;text-decoration: none;margin-top: -50px;font-size: 22px;line-height: 40px;
    font-family: monospace;"href="#" target="_blank">Descargar</a></div>' ;

	return $output;
});

?>