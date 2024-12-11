<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see              https://docs.woocommerce.com/document/template-structure/
 * @package          WooCommerce/Templates
 * @version          3.6.0
 * @flatsome-version 3.16.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || false === wc_get_loop_product_visibility( $product->get_id() ) || ! $product->is_visible() ) {
	return;
}


?>
	
	

<div class="row row-collapse">
	<div class="col medium-7 small-7 large-7">
		<div class="col-inner">
			<div class="product-info">
<a href="<?php echo get_the_permalink(); ?>" target="_blank">
<h2 class="woocommerce-loop-product__title"><?php echo $product->get_title(); ?></h2> </a>
<div class="custom-info show-for-desktop">
<span class="learning">Video</span>
</div>
<div class="tags show-for-desktop">
<span class="seo-nen-tang">SEO nền tảng</span>
</div>
</div>
<div class="product-description show-for-desktop">
<?php echo get_field('mo_ta_ngan_khoa_hoc'); ?>
</div>	
<ul class="product-attr"> <li class="level">Cấp độ: Dưới 3 tháng</li> <li class="learning-time show-for-desktop">11 giờ học</li> <li class="learning_form show-for-desktop">video/ slide/ có support </li> </ul>			
		</div>
	</div>
	<div class="col medium-2 small-5 large-2">
	<div class="col-inner">	
<div class="product-image"> <?php do_action( 'flatsome_woocommerce_shop_loop_images' ); ?> </div>
		</div>
	</div>
	<div  class="col medium-3 small-12 large-3">
	<div class="col-inner dathang-giaban">
	<div class="gia-ban"><?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?></div>
	<div class="link-wrap">

<a href="/cart/?add-to-cart=74377" data-quantity="1" class="product-link" data-product_id="74377" data-product_sku="" rel="nofollow">Đăng ký ngay</a>

</div>		
	</div>
	</div>	
</div>		

<?php /* empty PHP to avoid whitespace */ ?>