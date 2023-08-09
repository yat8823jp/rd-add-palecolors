<?php
/**
 * @package rd-add-palecolors
 */
/*
Plugin Name: RD Add Palecolors
Plugin URI: https://github.com/yat8823jp/rd-add-palecolors
Description: This plugin is add pale colors palette
Author: YAT
Version: 1.2.2
Author URI: http://wp.yat-net.com
Text Domain: add-palecolor
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
 			'name'  => __( 'Pale yellow', 'add-palecolor' ),
 			'slug'  => 'pale-yellow',
 			'color' => '#FEFFDC',
 		),
		array(
			'name'  => __( 'Pale lime green', 'add-palecolor' ),
			'slug'  => 'pale-lime-green',
			'color' => '#F0F6DF',
		),
		array(
			'name'  => __( 'Pale green', 'add-palecolor' ),
			'slug'  => 'pale-green',
			'color' => '#DAF1E4',
		),
		array(
			'name'  => __( 'Pale soda green', 'add-palecolor' ),
			'slug'  => 'pale-soda-green',
			'color' => '#D9EFED',
		),
		array(
			'name'  => __( 'Pale blue', 'add-palecolor' ),
			'slug'  => 'pale-glue',
			'color' => '#DBE7EF',
		),
		array(
			'name'  => __( 'Pale mauve', 'add-palecolor' ),
			'slug'  => 'pale-mauve',
			'color' => '#DCE3F0',
		),
		array(
			'name'  => __( 'Pale purple', 'add-palecolor' ),
			'slug'  => 'pale-purple',
			'color' => '#DFDEEE',
		),
		array(
			'name'  => __( 'Pale purple pink', 'add-palecolor' ),
			'slug'  => 'pale-purple-pink',
			'color' => '#F1DAEE',
		),
		array(
			'name'  => __( 'Pale light pink', 'add-palecolor' ),
			'slug'  => 'pale-light-pink',
			'color' => '#F5D9E8',
		),
		array(
			'name'  => __( 'Pale pastel pink', 'add-palecolor' ),
			'slug'  => 'pale-pastel-pink',
			'color' => '#FED8E5',
		),
		array(
 			'name'  => __( 'Pale orange', 'add-palecolor' ),
 			'slug'  => 'pale-orange',
 			'color' => '#FFF2D8',
 		),
		array(
			'name'  => __( 'Pale light orange', 'add-palecolor' ),
			'slug'  => 'pale-light-orange',
			'color' => '#FCF1D8',
		),
	) );
}
add_action( 'init', 'rd_add_pale_color_pallet' );

function regist_rd_add_palecolors_styles() {
    $plugin_url = plugin_dir_url( __FILE__ );
    wp_enqueue_style( 'rd_add_palecolors', $plugin_url . 'rd-add-palecolors.css' );
}

add_action( 'wp_enqueue_scripts', 'regist_rd_add_palecolors_styles' );