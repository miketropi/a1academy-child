<?php 
use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make( __( 'Toggle Content Block' ) )
	->add_fields( array(
		Field::make( 'complex', 'items', __( 'Toggle Items' ) )
      ->add_fields( array(
        Field::make( 'text', 'title', __( 'Title' ) ),
        Field::make( 'rich_text', 'content', __( 'Content' ) ),
      ) )
      ->set_header_template( '
      <% if (title) { %>
        <%- title %> 
      <% } %>
      ' )
	) )
  ->set_category( 'a1a' )
	->set_keywords( [ __( 'a1a' ), __( 'toggle' ), __( 'content' ) ] )
  ->set_mode( 'edit' )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
    $items = $fields['items'];
    if(count($items) == 0) return;
    ?>
		<div class="a1a-toggle-content-block">
      <?php foreach($items as $index => $item) : ?>
      <div class="a1a-toggle-content-item">
        <h4 class="__toggle-header"><?php echo do_shortcode($item['title']); ?></h4>
        <div class="__toggle-content"><?php echo wpautop(do_shortcode($item['content'])) ?></div>
      </div>
      <?php endforeach; ?>
    </div>
		<?php
	} );