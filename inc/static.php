<?php
/**
 * Static
 */

add_action( 'wp_enqueue_scripts', 'a1a_enqueue_scripts' );

function a1a_enqueue_scripts() {
  wp_enqueue_style( 'a1a-css', A1A_URI . '/dist/css/a1a.bundle.css', false, A1A_VERSION );
  wp_enqueue_script( 'a1a-js', A1A_URI . '/dist/a1a.bundle.js', ['jquery'], A1A_VERSION, true );

  wp_localize_script( 'a1a-js', 'A1A_PHP_DATA', [
    'ajax-url' => admin_url('admin-ajax.php'),
  ] );
}

add_action( 'admin_enqueue_scripts', 'a1a_admin_enqueue_scripts' );

function a1a_admin_enqueue_scripts() {
  wp_enqueue_style( 'a1a-admin-css', A1A_URI . '/dist/css/a1a-admin.bundle.css', false, A1A_VERSION );
}