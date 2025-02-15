<?php 
/**
 * Shortcode 
 */

function a1a_blog_breadcrumb_shortcode() {
    $output = '';
    
    // Get current post/page data
    $post = get_queried_object();
    
    // Start with home link
    $output .= '<div class="a1a-breadcrumb">';
    $output .= '<a href="' . home_url() . '">Home</a>';
    
    if (is_single()) {
        // Get post categories
        $categories = get_the_category();
        if (!empty($categories)) {
            $category = $categories[0]; // Get primary category
            $output .= ' / <a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
        }
        
        // Add current post title
        $output .= ' / <span>' . get_the_title() . '</span>';
    } elseif (is_category()) {
        // If it's a category archive
        $output .= ' / <span>' . single_cat_title('', false) . '</span>';
    } elseif (is_page()) {
        // If it's a page
        $output .= ' / <span>' . get_the_title() . '</span>';
    }
    
    $output .= '</div>';
    
    return $output;
}
add_shortcode('a1a_blog_breadcrumb', 'a1a_blog_breadcrumb_shortcode');

