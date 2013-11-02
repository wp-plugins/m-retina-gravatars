<?php
/**
 * Plugin Name: M Retina Gravatars
 * Description: Show retina avatars
 * Version: 1.0
 * Author: Georgi Popov a.k.a. Magadanski_Uchen
 * Author URI: http://magadanski.com/
 * License: GPLv2
 */

add_action('plugins_loaded', 'mrg_plugins_loaded');

function mrg_plugins_loaded() {
	add_filter('get_avatar', 'mrg_get_avatar', 10, 5);
}

function mrg_get_avatar($avatar, $id_or_email, $size, $default, $alt) {
	$retina_size = absint($size) * 2;
	
	$avatar = preg_replace('/\?s=' . preg_quote($size) . '/', '?s=' . $retina_size, $avatar);
	
	return $avatar;
}

?>