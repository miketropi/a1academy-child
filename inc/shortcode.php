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
    $output .= '<a href="' . home_url() . '"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-home"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg> Home</a>';

    $output .= ' / <a href="/blog">Blog</a>';
    
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

