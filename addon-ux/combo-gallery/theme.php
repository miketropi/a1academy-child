<?php
function srcset_images( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'img'         => '',
		'alt'         => '',
		'classimg'         => '',
		'classlink'         => '',
		'link'         => '',
		), $atts )
	);


	ob_start();
	?>
<?php if($atts['link']){echo '<a href="'.$atts['link'].'"'; if($atts['classlink']){echo 'class="'.$atts['classlink'].'"';  }  echo '>';}?>
<img src="<?php if($atts['img']) echo wp_get_attachment_image_src( $img,full)[0]; ?>" alt="<?php $atts['alt']; ?>" <?php if($atts['classimg']) {echo $atts['classimg'];} ?> />	
<?php if($atts['link']) echo '</a>'; ?>
<?php
	$content = ob_get_contents();
	ob_end_clean();
	return $content;
}

add_shortcode( 'srcset_images', 'srcset_images' );
