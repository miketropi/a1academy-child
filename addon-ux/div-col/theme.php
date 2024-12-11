<?php
function nguyenlan_div_col( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class'         => '',
		'class2'         => '',
		'class3'         => '',
		), $atts )
	);

	ob_start();
	?>


<div class="<?php if($atts['class']) {echo $atts['class'];} else {echo '';} ?>">
 <?php if($atts['class2']) echo ' <div class="'.$atts['class2'].'">'; ?> 
 <?php if($atts['class3']) echo ' <div class="'.$atts['class3'].'">'; ?> 	
<?php echo $content; ?>
 <?php if($atts['class3']) echo ' </div>'; ?>
 <?php if($atts['class2']) echo ' </div>'; ?>	
</div>
	<?php
	$content = ob_get_contents();
	ob_end_clean();
	return do_shortcode( $content );
	
	
	
}

add_shortcode( 'nguyenlan_div_col', 'nguyenlan_div_col' );

