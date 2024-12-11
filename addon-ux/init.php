<?php
function lay_thumb_svg( $ten_addon ) {
  return get_stylesheet_directory_uri() . '/addon-ux/' . $ten_addon . '/images/icon.svg';
}
function duong_dan_flatsome(){
return get_template_directory() .'/inc/builder/shortcodes/';	
}
function duong_dan_ux_builder_template( $path ) {
  ob_start();
  include get_template_directory() . '/inc/builder/shortcodes/templates/' . $path;
  return ob_get_clean();
}
function duong_dan_addon(){
return get_stylesheet_directory_uri() . '/addon-ux/';	
}

require 'div-col/admin.php';
require 'div-col/theme.php';
require 'div-block/admin.php';
require 'div-block/theme.php';
require 'owl/admin.php';
require 'owl/theme.php';
require 'faq/admin.php';
require 'faq/theme.php';
require 'div-one/admin.php';
require 'div-one/theme.php';
require 'combo-gallery/admin.php';
require 'combo-gallery/theme.php';

