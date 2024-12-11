<?php 
function srcset_images_admin(){
  add_ux_builder_shortcode( 'srcset_images',
	array(
		'type'      => 'container',
		'name'      => __( 'Images simple' ),
		'category' => __('Addon NL'),
		'thumbnail' => lay_thumb_svg( 'combo-gallery' ),
		'wrap'      => false,
		'options'   => array(
			'img'         => array(
				'type'    => 'image',
				'heading' => 'Images',
				'value'   => '',
			),
			'link'         => array(
				'type'    => 'textfield',
				'heading' => 'Link',
				'value'   => '',
			),
			'alt'         => array(
				'type'    => 'textfield',
				'heading' => 'Alt',
				'value'   => '',
			),
			'classimg'         => array(
				'type'    => 'textfield',
				'heading' => 'Class img',
				'value'   => '',
			),
			'classlink'         => array(
				'type'    => 'textfield',
				'heading' => 'Class Link',
				'value'   => '',
			),
			
		),	
	)
);

}
add_action('ux_builder_setup', 'srcset_images_admin');