<?php
/**
 * Category layout with no sidebar.
 *
 * @package          Flatsome/WooCommerce/Templates
 * @flatsome-version 3.16.0
 */

?>
<style>
.term-khoa-hoc.term-31 .shop-page-title, .is-divider{display:none}
.tax-product_cat .widget-title.shop-sidebar	{color: #969bab; font-weight: 400; font-size: 14px;height: 25px; margin: inherit; padding: inherit;line-height: inherit;}
.tax-product_cat .woocommerce-widget-layered-nav-list li{border:none}
.woocommerce-widget-layered-nav-list li a::before{content:"\f0c8"; width:20px; height:20px; font-family: "Font Awesome 5 Pro"; font-weight: 300; padding-right:6px}
.widget li.chosen a:before{content:"\f14a";width:20px; height:20px;font-family: "Font Awesome 5 Pro"; font-weight: 300; padding-right:6px;background-color:unset;border:unset;border-radius:unset}
.tab-gtv{display:grid;width:100%;grid-template-columns:repeat(3,auto)}
.tabg-tv{overflow:hidden;background-color:#fff}.tab-gtv button{background-color:inherit;float:left;border:none;outline:none;cursor:pointer;padding:20px 15px;font-size:14px;font-weight:700;color:#969bab;border:1px solid #969bab;transition:all .5s;margin-right:0px}
.tab-gtv button:hover{background-color:#d9dbe1;color:#000}.tab-gtv button.active{background-color:#d9dbe1;color:#000}
.tabcontent{display:none;border-top:none;position:relative;z-index:0}
@media(max-width:600px){.tab-gtv button{padding:15px 5px;font-size:12px}}
.tabcontent.active{display:block}
.product-info { display: flex; align-items: center; }.product-info .woocommerce-loop-product__title { margin-right: 10px; font-size: 16px; color: #18191f; line-height: 1; font-weight: 700; padding: 0.5em 0; margin: 0;}.product-info .custom-info { line-height: 1; }
.product-info .custom-info span.learning { color: #276ae3; background-color: #d7f3ff; }	
.product-info .custom-info span { font-size: 12px; padding: 2px 4px; line-height: 1; }
.product-info .tags { margin-left: 5px; }
.product-info .tags span.seo-nen-tang { background-color: #2f80ed; }
.product-info .tags span { font-size: 12px; padding: 2px 4px; line-height: 1; color: #f4f5f7; }	
.product-attr { margin-top: 10px; display: flex; list-style: disc; padding-inline-start: 1em; margin-bottom: 0; margin: 0 0 1em; padding: 0;clear: both;}
.product-attr li { font-size: 12px; margin-right: 20px; list-style: disc!important; color: #969bab; }	
.attachment-woocommerce_thumbnail { margin: auto; display: block; max-width: 85%; }
.gia-ban { text-align: center; font-size: 18px; color: #000; font-weight: 700; }
 .product-link { text-align: center; display: block; width: fit-content; margin: auto; padding: 6px 12px; background-color: #276ae3; color: #fff; border-radius: 4px; font-size: 12px; line-height: 1.3; transition: all .5s; }	
.tab-gtv{display:grid;width:100%;grid-template-columns:repeat(3,auto)}
.tabg-tv{overflow:hidden;background-color:#fff}.tab-gtv button{background-color:inherit;float:left;border:none;outline:none;cursor:pointer;padding:20px 15px;font-size:14px;font-weight:700;color:#969bab;border:1px solid #969bab;transition:all .5s;margin-right:0px}
.tab-gtv button:hover{background-color:#d9dbe1;color:#000}.tab-gtv button.active{background-color:#d9dbe1;color:#000}
.tabcontent{display:none;border-top:none;position:relative;z-index:0}
@media(max-width:600px){.tab-gtv button{padding:15px 5px;font-size:12px}}
.tabcontent.active{display:block}	
</style>


<?php
		do_action('flatsome_products_before');

		/**
		* Hook: woocommerce_before_main_content.
		*
		* @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		* @hooked woocommerce_breadcrumb - 20 (FL removed)
		* @hooked WC_Structured_Data::generate_website_data() - 30
		*/
		do_action( 'woocommerce_before_main_content' );

		?>

		<?php
		/**
		 * Hook: woocommerce_archive_description.
		 *
		 * @hooked woocommerce_taxonomy_archive_description - 10
		 * @hooked woocommerce_product_archive_description - 10
		 */
		do_action( 'woocommerce_archive_description' );
		?>

<div class="row category-page-row">
		<div class="large-3 col hide-for-medium <?php flatsome_sidebar_classes(); ?>">
			<?php flatsome_sticky_column_open( 'category_sticky_sidebar' ); ?>
			<div id="shop-sidebar" class="sidebar-inner">
				<?php
				  $no_widgets_msg = '<p>You need to assign Widgets to <strong>"Shop Sidebar"</strong> in <a href="'.get_site_url().'/wp-admin/widgets.php">Appearance > Widgets</a> to show anything here</p>';
				  if(is_active_sidebar('shop-sidebar')) { dynamic_sidebar('shop-sidebar'); } else{ echo $no_widgets_msg; }
				?>
			</div>
			<?php flatsome_sticky_column_close( 'category_sticky_sidebar' ); ?>
		</div>

		<div class="col large-9">
 	

		<?php
$danh_muc_hien_tai= $wp_query->get_queried_object();
$danh_muc_hien_tai_id = $danh_muc_hien_tai->term_id;
$danh_muc_hien_tai_name=$danh_muc_hien_tai->taxonomy;		
$danh_sach_con = get_terms( array(
            'taxonomy'      => $danh_muc_hien_tai_name,
            'child_of'      => $danh_muc_hien_tai_id,
            'hide_empty'    => false,
        ) );			
$stttab=1;			
echo '<div class="tab-gtv">';
echo '<button class="tab-link active" data-tab="tab-0"> Tất cả</button>';			
foreach ( $danh_sach_con as $key => $cat ) { 
?>	
<button class="tab-link" data-tab="tab-<?php echo $stttab; ?>"><?php echo $cat->name; ?></button>	
<?php	
$stttab++;											
}
echo '</div>';

echo '<div id="tab-0"  class="tabcontent active">';			
if ( wc_get_loop_prop( 'total' ) ) {
				while (have_posts()) {
					the_post();

					/**
					 * Hook: woocommerce_shop_loop.
					 *
					 * @hooked WC_Structured_Data::generate_product_data() - 10
					 */
					do_action( 'woocommerce_shop_loop' );

					wc_get_template_part( 'content', 'khoahoc' );
				}
			}				
			
echo '</div>';			
			
			
			
if ($danh_sach_con) {
$sodmc=1;		
 foreach ($danh_sach_con as $danh_sach_con) {			
	 $truyvandanhsachcon = array(
                    'post_type'      => 'product',
                    'posts_per_page' => 100,
                    'product_cat'    => $danh_sach_con->slug,
                    'hide_empty'     => 1,
                    'orderby'        => 'name',
                    'order'          => 'ASC'
                );		
			
			if ( woocommerce_product_loop() ) {
			
			
		

			/**
			 * Hook: woocommerce_before_shop_loop.
			 *
			 * @hooked wc_print_notices - 10
			 * @hooked woocommerce_result_count - 20 (FL removed)
			 * @hooked woocommerce_catalog_ordering - 30 (FL removed)
			 */
			
			
				
			 $products = new WP_Query( $truyvandanhsachcon );
				
			echo '<div id="tab-'.$sodmc.'"  class="tabcontent">';	
			if ( wc_get_loop_prop( 'total' ) ) {
				while ( $products->have_posts()) {
					$products->the_post();

					/**
					 * Hook: woocommerce_shop_loop.
					 *
					 * @hooked WC_Structured_Data::generate_product_data() - 10
					 */
					do_action( 'woocommerce_shop_loop' );

					wc_get_template_part( 'content', 'khoahoc' );
				}
			}

			echo '</div>';
			$sodmc++;
			/**
			 * Hook: woocommerce_after_shop_loop.
			 *
			 * @hooked woocommerce_pagination - 10
			 */
			do_action( 'woocommerce_after_shop_loop' );
		}
			
			
			
			else {
			/**
			 * Hook: woocommerce_no_products_found.
			 *
			 * @hooked wc_no_products_found - 10
			 */
			do_action( 'woocommerce_no_products_found' );
		}
	
	
	}//thêm vào
} //thêm vào
else {
	
if ( wc_get_loop_prop( 'total' ) ) {
				while (have_posts()) {
					the_post();

					/**
					 * Hook: woocommerce_shop_loop.
					 *
					 * @hooked WC_Structured_Data::generate_product_data() - 10
					 */
					do_action( 'woocommerce_shop_loop' );

					wc_get_template_part( 'content', 'khoahoc' );
				}
			}	
	
}			
			
			
			
			
		?>

		

		</div>

	
</div>
<?php
		/**
		 * Hook: flatsome_products_after.
		 *
		 * @hooked flatsome_products_footer_content - 10
		 */
		do_action( 'flatsome_products_after' );
		/**
		 * Hook: woocommerce_after_main_content.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
		?>