<?php 
function owl_admin(){
  add_ux_builder_shortcode('owl_theme', array(
  'type'      => 'container',
  'name' => __( 'item owl' ), 	
  'category' => __('Addon NL'), 
  'thumbnail' => lay_thumb_svg( 'owl'),
  'info' => '{{ label }}',
  'styles' => array(
  'owl-css' => get_stylesheet_directory_uri() .'/css/owl.carousel.min.css',
  'owl-css1' => get_stylesheet_directory_uri() .'/css/owl.css',  
                   ), 
  'scripts' => array(
  'owl-js' => get_stylesheet_directory_uri() .'/js/owl.carousel.js',
  'owl-js1' => get_stylesheet_directory_uri() .'/js/owl.js',  
                   ),	  
  'wrap'      => false,	
	'presets'   => array(
			array(
				'name'    => __( 'Default' ),
				'content' => '[owl_theme]<p class="class="customer-story-description"">Nội dung câu hỏi</p>[/owl_theme]',
			),
		),  
	'options'   => array(
			'label' => array(
            'full_width' => true,
            'type' => 'textfield',
            'heading' => 'Label',
            'placeholder' => 'Enter admin label here..'
			),
		'img_bg'         => array(
				'type'    => 'image',
				'heading' => 'Hình nền',
				'value'   => '',
			),
		'img_logo'         => array(
				'type'    => 'image',
				'heading' => 'logo',
				'value'   => '',
			),
		'title'         => array(
				'type'    => 'textfield',
				'heading' => 'Tiêu đề',
				'value'   => '',
			),	
		'url'         => array(
				'type'    => 'textfield',
				'heading' => 'Link',
				'value'   => '',
			),
			),
		)	
		);
}
add_action('ux_builder_setup', 'owl_admin');
