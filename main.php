<?php
/**
 * @package red-add-palecolor
 * @version 1.0.0
 */
/*
Plugin Name: RD Add Palecolor
Plugin URI:
Description: This plugin is add pale color palette
Author: YAT
Version: 1.0.0
Author URI: http://wp.yat-net.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

function rd_add_pale_color_pallet() {
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Pale pink', 'add-palecolor' ),
			'slug'  => 'pink',
			'color'  => '#f78da7',
		),
		array(
			'name'  => __( 'Vivid red', 'add-palecolor' ),
			'slug'  => 'red',
			'color' => '#cf2e2e',
		),
		array(
			'name'  => __( 'Luminous vivid orange', 'add-palecolor' ),
			'slug'  => 'orange',
			'color' => '#ff6900',
				 ),
		array(
			'name'  => __( 'Light green cyan', 'add-palecolor' ),
			'slug'  => 'amber',
			'color' => '#fcb900',
				 ),
		array(
			'name'  => __( 'Light green cyan', 'add-palecolor' ),
			'slug'  => 'light-green-cyan',
			'color' => '#7bdcb5',
				 ),
		array(
			'name'  => __( 'Vivid green cyan', 'add-palecolor' ),
			'slug'  => 'vivid-green-cyan',
			'color' => '#00d084',
				 ),
		array(
			'name'  => __( 'Pale cyan blue', 'add-palecolor' ),
			'slug'  => 'pale-cyan-blue',
			'color' => '#8ed1fc',
				 ),
		array(
			'name'  => __( 'Vivid cyan blue', 'add-palecolor' ),
			'slug'  => 'vivid-cyan-blue',
			'color' => '#0693e3',
				 ),
		array(
			'name'  => __( 'Vivid purple', 'add-palecolor' ),
			'slug'  => 'light-gray',
			'color' => '#eeeeee',
				 ),
		array(
			'name'  => __( 'Very light gray', 'add-palecolor' ),
			'slug'  => 'cyan-blue-gray',
			'color' => '#abb8c3',
				 ),
		array(
			'name'  => __( 'Cyan bluish gray', 'add-palecolor' ),
			'slug'  => 'dark-gray',
			'color' => '#313131',
				 ),
		 array(
 			'name'  => __( 'Pale orange', 'add-palecolor' ),
 			'slug'  => 'pale-orange',
 			'color' => '#FFF2D8',
 		),
		array(
			'name'  => __( 'Pale green', 'add-palecolor' ),
			'slug'  => 'pale-green',
			'color' => '#E5FCC2',
		),
		array(
			'name'  => __( 'Pale blue', 'add-palecolor' ),
			'slug'  => 'pale-glue',
			'color' => '#D5FFFC',
		),
		array(
			'name'  => __( 'Pale light pink', 'add-palecolor' ),
			'slug'  => 'pale-light-pink',
			'color' => '#FFEBF7',
		),
	) );
}
add_action( 'after_setup_theme', 'rd_add_pale_color_pallet' );
