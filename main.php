<?php
/**
 * @package add-palecolor
 * @version 1.0.0
 */
/*
Plugin Name: Add Palecolor
Plugin URI: 
Description: This plugin is add pale color palette
Author: YAT
Version: 1.0.0
Author URI: http://wp.yat-net.com
*/

function add_pale_color_pallet() {
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'ピンク', 'genesis-sample' ),
			'slug'  => 'pink',
			'color'  => '#f78da7',
		),
		array(
			'name'  => __( 'レッド', 'genesis-sample' ),
			'slug'  => 'red',
			'color' => '#cf2e2e',
		),
		array(
			'name'  => __( 'オレンジ', 'genesis-sample' ),
			'slug'  => 'orange',
			'color' => '#ff6900',
				 ),
		array(
			'name'  => __( '琥珀', 'genesis-sample' ),
			'slug'  => 'amber',
			'color' => '#fcb900',
				 ),
		array(
			'name'  => __( '薄いグリーンシアン', 'genesis-sample' ),
			'slug'  => 'light-green-cyan',
			'color' => '#7bdcb5',
				 ),
		array(
			'name'  => __( '鮮やかなグリーンシアン', 'genesis-sample' ),
			'slug'  => 'vivid-green-cyan',
			'color' => '#00d084',
				 ),
		array(
			'name'  => __( '淡いシアンブルー', 'genesis-sample' ),
			'slug'  => 'pale-cyan-blue',
			'color' => '#8ed1fc',
				 ),
		array(
			'name'  => __( '鮮やかなシアンブルー', 'genesis-sample' ),
			'slug'  => 'vivid-cyan-blue',
			'color' => '#0693e3',
				 ),
		array(
			'name'  => __( 'ライト・グレー', 'genesis-sample' ),
			'slug'  => 'light-gray',
			'color' => '#eeeeee',
				 ),
		array(
			'name'  => __( 'シアンブルーグレー', 'genesis-sample' ),
			'slug'  => 'cyan-blue-gray',
			'color' => '#abb8c3',
				 ),
		array(
			'name'  => __( '濃灰', 'genesis-sample' ),
			'slug'  => 'dark-gray',
			'color' => '#313131',
				 ),
		 array(
 			'name'  => __( 'ペールオレンジ', 'themeLangDomain' ),
 			'slug'  => 'orange',
 			'color' => '#FFF2D8',
 		),
		array(
			'name'  => __( 'ペールグリーン', 'themeLangDomain' ),
			'slug'  => 'orange',
			'color' => '#E5FCC2',
		),
		array(
			'name'  => __( 'ペールブルー', 'themeLangDomain' ),
			'slug'  => 'orange',
			'color' => '#D5FFFC',
		),
		array(
			'name'  => __( 'ペールピンク', 'themeLangDomain' ),
			'slug'  => 'orange',
			'color' => '#FFEBF7',
		),
	) );
}
add_action( 'after_setup_theme', 'add_pale_color_pallet' );
