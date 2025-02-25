<?php 
// Get related posts based on the first category of the current post
function a1a_get_related_posts_by_category($post_id, $limit = 5) {
  // Get the categories of the current post
  $categories = get_the_category($post_id);
  
  if (empty($categories)) {
    return null; // No categories found
  }

  // Get the first category ID
  $first_category_id = $categories[0]->term_id;

  // Query related posts
  $args = array(
    'post_type'      => 'post',
    'posts_per_page' => $limit,
    'post__not_in'   => array($post_id), // Exclude the current post
    'cat'            => $first_category_id, // Filter by first category
    'orderby'        => 'date',
    'order'          => 'DESC'
  );

  $related_posts = new WP_Query($args);
  return $related_posts;
}

function a1a_image_gallery_block_item($image_id) {
  $image_data = wp_get_attachment_image_src($image_id, 'full');
  if(!isset($image_data[0])) return;

  ob_start();
  ?>
  <div class="image-item" data-src="<?php echo $image_data[0]; ?>">
    <a href="<?php echo $image_data[0]; ?>" >
      <?php echo wp_get_attachment_image($image_id, 'thumbnail') ?>
    </a>
  </div>
  <?php
  return ob_get_clean();
}