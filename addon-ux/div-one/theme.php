<?php
function nguyenlan_div_one( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class'         => '',
		), $atts )
	);

	ob_start();
	?>


<div <?php if($atts['class']) {echo 'class="'.$atts['class'].'"';} ?>">
<?php echo $content; ?>	
</div>
	<?php
	$content = ob_get_contents();
	ob_end_clean();
	return do_shortcode( $content );
	
	
	
}

add_shortcode( 'nguyenlan_div_one', 'nguyenlan_div_one' );

