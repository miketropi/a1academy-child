<?php 
use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make( __( 'Hero Section Block' ) )
	->add_fields( array(
    Field::make( 'separator', 'hero_ss_crb_separator', __( '' ) ),
		Field::make( 'image', 'background_image', __( 'Background Image' ) )
      ->set_value_type( 'url' ),
		Field::make( 'image', 'background_image_mobi', __( 'Background Image Mobi' ) )
      ->set_value_type( 'url' ),
    Field::make( 'checkbox', 'content_overlay_mobi', __( 'Content Overlay Mobi' ) )
      ->set_option_value( 'no' )
	) )
  ->set_category( 'a1a' )
	->set_keywords( [ __( 'a1a' ), __( 'hero section' ), __( 'content' ) ] )
  ->set_mode( 'edit' )
  ->set_inner_blocks( true )
	->set_inner_blocks_template( array(
		array( 'core/heading' ),
		array( 'core/paragraph' ),
		array( 'core/buttons' )
	) )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
    // print_r($fields);
    ?>
		<div class="a1a-hero-section <?php echo $fields['content_overlay_mobi'] ? '__content-overlay-mobi' : '' ?> <?php echo isset($attributes['className']) ? $attributes['className'] : ''; ?>">
      <div class="hero-ss-background-layer-desktop" style="background: url(<?php echo $fields['background_image']; ?>) no-repeat center center / cover;"></div>
      <div class="hero-ss-background-layer-mobile" style="background: url(<?php echo $fields['background_image_mobi']; ?>) no-repeat center center / cover;"></div>
      <div class="a1a-hero-section__inner">
        <div class="hero-ss-entry">
          <?php echo $inner_blocks; ?>
        </div>
        <div class="hero-ss-right"></div>
      </div>
    </div>
		<?php
	} );