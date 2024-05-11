<?php

define( 'THEME_ROOT', get_template_directory_uri() );
define( 'THEME_CSS', THEME_ROOT . '/css' );
define( 'THEME_JS', THEME_ROOT . '/js' );
define( 'THEME_FONTS', THEME_ROOT . '/fonts' );
define(' THEME_IMAGES', THEME_ROOT . '/images' );

if ( !function_exists('mrnko_support') ) {
  function mrnko_support() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'menus' );
  }

  add_action( 'after_setup_theme', 'mrnko_support' );
}

if (!function_exists( 'mrnko_styles' )) {
  function mrnko_styles()
  {
    wp_enqueue_style( 'mrnko-css', THEME_CSS . '/style.css' );
  }

  add_action( 'wp_enqueue_scripts', 'mrnko_styles' );
}

if (!function_exists( 'mrnko_scripts' )) {
  function mrnko_scripts()
  {
    wp_enqueue_style( 'mrnko-js', THEME_JS . '/app.js' );
  }

  add_action( 'wp_enqueue_scripts', 'mrnko_scripts' );
}

register_nav_menus( array(
  'primary' => 'Main menu'
) );

function mrnko_register_new_sidebar() {
	register_sidebar(
		array(
			'id' => 'main',
			'name' => 'Main sidebar',
			'description' => 'Main Sidebar',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>'
		)
	);
}

add_action( 'widgets_init', 'mrnko_register_new_sidebar' );

add_filter( 'excerpt_more', fn() => '...' );

add_filter( 'excerpt_length', function() {
  return 20;
} );