<?php
/**
 * Mike dev
 * @since 12/12/2024
 */
{
  define('A1A_VERSION', '1.0.0');
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
}



// Add custom Theme Functions here
add_filter('use_block_editor_for_post', '__return_false');
require 'addon-ux/init.php';
function hotro_chan_trang(){
echo do_shortcode('[block id="support-chan-trang"]');	
}
add_action('wp_footer','hotro_chan_trang');
function khoahoc(){
echo 'hiện khóa học';	
	
}
add_shortcode('khoahoc','khoahoc');



/*Disable edit code & plugin */


add_filter('xmlrpc_enabled', '__return_false');
add_filter('wp_headers', 'wptangtoc_remove_x_pingback');
add_filter('pings_open', '__return_false', 9999);
add_filter('pre_update_option_enable_xmlrpc', '__return_false');
add_filter('pre_option_enable_xmlrpc', '__return_zero');
function wptangtoc_remove_x_pingback($headers) {
unset($headers['X-Pingback'], $headers['x-pingback']);
return $headers;
}

function wp_version_remove_version() 
{
return '';
}
add_filter('the_generator', 'wp_version_remove_version');