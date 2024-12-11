<?php
function nguyenlan_div_block( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class'         => '',
		'wraper'        => '',
		'class_wraper'        => '',
		'wraper2'        => '',
		'class_wraper2'        => '',
		'id1'         => '',
		'id2'         => '',
		'id3'         => '',
		), $atts )
	);

	ob_start();
	?>


<div class="<?php if($atts['class']) {echo $atts['class'];} else {echo '';} ?>" <?php if($atts['id1']) echo $atts['id1']; ?>>
 <?php if($atts['wraper']) echo ' <div class="'.$atts['class_wraper'].'"'. $atts['id2'] .'>'; ?> 
 <?php if($atts['wraper2']) echo ' <div class="'.$atts['class_wraper2'].'"'.$atts['id3'] .'>'; ?> 
<?php echo $content; ?>
<?php if($atts['wraper2']) echo ' </div>'; ?>
 <?php if($atts['wraper']) echo ' </div>'; ?>
</div>


	<?php
	$content = ob_get_contents();
	ob_end_clean();
	return do_shortcode( $content );
	
	
	
}

add_shortcode( 'nguyenlan_div_block', 'nguyenlan_div_block' );

