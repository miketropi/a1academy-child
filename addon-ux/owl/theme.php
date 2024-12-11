<?php
function owl_theme( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'img_bg'         => '',
		'img_logo'         => '',
		'title'         => '',
		'url'         => '',
		), $atts )
	);

    ob_start();
	?>

<div class="item">
<div class="item-box">
<div class="img-wrap">
<img src="<?php if($atts['img_bg']) echo wp_get_attachment_image_src( $img_bg,full)[0]; ?>" alt="Caras Lens & dịch vụ seo uy tín gtv seo">
</div>
<div class="customer-info">
<div class="info-wrap">
<div class="top">
<h3 class="title"><?php if($atts['title']) echo $atts['title']; else echo 'Nhập tiêu đề vào đây'; ?></h3>
<img src="<?php if($atts['img_logo']) echo wp_get_attachment_image_src( $img_logo,full)[0]; ?>" alt="logo">
<div class="description">
<?php echo $content; ?>	

</div>
</div>
<a href="<?php if($atts['url']) echo $atts['url']; else echo '#'; ?>" class="link">Chi tiết →</a>
</div>
</div>
</div>
</div>

	<?php
	$content = ob_get_contents();
    ob_end_clean();
    return $content;
	
}

add_shortcode( 'owl_theme', 'owl_theme' );

