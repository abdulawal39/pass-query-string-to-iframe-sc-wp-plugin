<?php
/*
 * Plugin Name: Pass url parameters to iFrame
 * Plugin URI: https://go.abdulawal.com/pupti
 * Description: Description
 * Version: 1.0
 * Author: Abdul Awal
 * Author URI: http://abdulawal.com
 * License: GPL2
*/
function tnc_iframe_up_sc($atts){
	extract(shortcode_atts(array(
		'url' => '',
		'width' => '600',
		'height'	=> '800',
		), $atts));
	$get_query_string = $_SERVER['QUERY_STRING'];
	$new_url = $url.'?'.$get_query_string;
	return '<iframe src="'.$new_url.'" width="'.$width.'" height="'.$height.'"></iframe>';
}
add_shortcode( 'tnc-iframe', 'tnc_iframe_up_sc' );
?>
