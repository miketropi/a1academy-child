<?php 
use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make( __( 'Image Gallery Block' ) )
	->add_fields( array(
		Field::make( 'media_gallery', 'images', __( 'Images' ) ),
		Field::make( 'text', 'image_size', __( 'Image Size (px)' ) )
      ->set_default_value(150),
	) )
  ->set_category( 'a1a' )
	->set_keywords( [ __( 'a1a' ), __( 'image' ), __( 'gallery' ) ] )
  ->set_mode( 'edit' )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
    $images = $fields['images'];
    $image_size = $fields['image_size'];
    if(count($images) == 0) return;
    ?>
		<div class="a1a-image-gallery-block">
      <div class="image-gallery-container a1a-lightgallery-apply" style="grid-template-columns: repeat(auto-fit, minmax(<?php echo $image_size ?>px, auto));">
        <?php foreach($images as $index => $id) {
          echo a1a_image_gallery_block_item($id);
        } ?>
      </div>
    </div>
		<?php
	} );