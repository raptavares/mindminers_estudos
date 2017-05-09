<?php
/*
Plugin Name: Extend Link
Plugin URI: http://wp-plugins.in/ExtendLink
Description: Extend Link plugin is All-In-One for WordPress post editor to manage the links, add class to link, rel nofollow, title, id, downloadable link, and more.
Version: 1.0.0
Author: Alobaidi
Author URI: http://wp-plugins.in
License: GPLv2 or later
*/

/*  Copyright 2016 Alobaidi (email: wp-plugins@outlook.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


defined('ABSPATH') or die('Silence is Golden.');


function wptexlnk_plugin_row_meta($links, $file) {
	if ( strpos( $file, 'extend-link.php' ) !== false ) {
		$new_links = array(
							'<a href="http://wp-plugins.in/ExtendLink" target="_blank">Explanation of Use</a>',
							'<a href="https://profiles.wordpress.org/alobaidi#content-plugins" target="_blank">More Plugins</a>',
							'<a href="http://www.elegantthemes.com/affiliates/idevaffiliate.php?id=24967&url=19683" target="_blank">Elegant Themes</a>'
						);
		
		$links = array_merge( $links, $new_links );
	}
	return $links;
}
add_filter( 'plugin_row_meta', 'wptexlnk_plugin_row_meta', 10, 2 );


function wptexlnk_add_tinymce_button($buttons) {
	array_push($buttons, 'wptp_extend_link_tinymce');
	return $buttons;
}
add_filter('mce_buttons', 'wptexlnk_add_tinymce_button');


function wptexlnk_register_tinymce_js($plugin_array) {
	$plugin_array['wptp_extend_link_tinymce'] = plugins_url( '/js/extend-link-tinymce.js', __FILE__);
	return $plugin_array;
}
add_filter('mce_external_plugins', 'wptexlnk_register_tinymce_js');