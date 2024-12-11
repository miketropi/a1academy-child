<?php
function faq_theme( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class'         => '',
		'title'         => '',
		), $atts )
	);

	ob_start();
	?>

<button class="accordion_dong <?php echo $atts['class']; ?>"><?php if($atts['title']) echo $atts['title']; else echo 'Tiêu đề câu hỏi'; ?></button>
<div class="panel_dong"><?php echo $content; ?></div>
<?php
	$content = ob_get_contents();
	ob_end_clean();
	return do_shortcode( $content );
	
	
	
}

add_shortcode( 'faq_theme', 'faq_theme' );

