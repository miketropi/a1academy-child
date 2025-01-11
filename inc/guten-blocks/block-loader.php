<?php 
/**
 * 
 */



add_action( 'carbon_fields_register_fields', 'a1a_crb_attach_blocks' );
function a1a_crb_attach_blocks() {
  require( __DIR__ . '/testimonial-carousel.php' );
}