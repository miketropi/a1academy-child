<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

/**
 * Mike dev
 * @since 12/12/2024
 */
{
  define('A1A_VERSION', rand(1, 999999));
  define('A1A_URI', get_stylesheet_directory_uri(__FILE__));
  define('A1A_DIR', get_stylesheet_directory(__DIR__));
}

{
  /**
   * Mike dev
   * @since 12/12/2024
   * 
   * inc
   */
  require_once(A1A_DIR . '/inc/static.php');
  require_once(A1A_DIR . '/inc/helpers.php');
  require_once(A1A_DIR . '/inc/hooks.php'); 
  require_once(A1A_DIR . '/inc/ajax.php');
  require_once(A1A_DIR . '/inc/shortcode.php');
  require_once(A1A_DIR . '/inc/guten-blocks/block-loader.php');
}

add_action( 'wp_enqueue_scripts', 'a1a_parent_enqueue_styles' );

function a1a_parent_enqueue_styles() {
	wp_enqueue_style( 
		'a1a-parent-style', 
		get_parent_theme_file_uri( 'style.css' )
	);
}

add_action( 'after_setup_theme', 'a1a_crb_load' );

function a1a_crb_load() {
  require_once( 'vendor/autoload.php' );
  \Carbon_Fields\Carbon_Fields::boot();
}

add_action('wp_head', function() {
  echo get_field('a1a_header_script', 'option'); 
});