<?php 
use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make( __( 'Related Posts Block' ) )
	->add_fields( array(
		Field::make( 'text', 'items', __( 'Items' ) )
      ->set_default_value(3),
	) )
  ->set_category( 'a1a' )
	->set_keywords( [ __( 'a1a' ), __( 'content' ) ] )
  ->set_mode( 'edit' )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
    global $post;
    $items = (int) $fields['items'];
    if(empty($items) || $items == 0) return;

    $related_posts = a1a_get_related_posts_by_category($post->ID, $items);
    ?>
		<div class="a1a-related-posts-content-block">
      <?php if ($related_posts->have_posts()) : ?>
      <h3><?php _e('Các bài viết liên quan') ?></h3>
      <ul class="related-posts-container">
        <?php while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
        <li class="related-post-item">
          <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) : ?>
            <div class="related-post-thumbnail">
                <?php the_post_thumbnail('thumbnail'); ?>
            </div>
            <?php endif; ?>
            <div class="related-post-info">
              <h4 class="related-post-title"><?php the_title(); ?></h4>
              <p class="related-post-meta">
                By <span class="related-post-author"><?php the_author(); ?></span> | 
                <span class="related-post-category">
                    <?php 
                    $post_categories = get_the_category();
                    if (!empty($post_categories)) {
                      echo esc_html($post_categories[0]->name);
                    }
                    ?>
                </span>
              </p>
            </div>
          </a>
        </li>
        <?php endwhile; ?>
      </ul>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
		<?php
	} );