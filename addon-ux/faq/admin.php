<?php 
function faq_admin(){
  add_ux_builder_shortcode('faq_theme', array(
 'type'      => 'container',
  'name' => __( 'FAQ' ), 	
  'category' => __('Addon NL'), 
  'thumbnail' => lay_thumb_svg( 'faq'),
  'info' => '{{ label }}',
  'wrap'      => false,	
	'styles' => array(
  'faq-css' => get_stylesheet_directory_uri() .'/css/faq.css',
                   ), 
  'scripts' => array(
  'faq-js' => get_stylesheet_directory_uri() .'/js/faq',
                   ), 
  'presets'   => array(
			array(
				'name'    => __( 'Default' ),
				'content' => '[faq_theme]<div class="class="panel_dong"">Nội dung câu hỏi</div>[/faq_theme]',
			),
		),  
  'wrap'      => false,	
	
	'options'   => array(
			'label' => array(
            'full_width' => true,
            'type' => 'textfield',
            'heading' => 'Label',
            'placeholder' => 'Enter admin label here..'
			),
		'title'         => array(
				'type'    => 'textfield',
				'heading' => 'Tiêu đề',
				'value'   => '',
			),	
		'class'         => array(
				'type'    => 'textfield',
				'heading' => 'Class',
				'value'   => '',
			),
			),
		)	
		);
}
add_action('ux_builder_setup', 'faq_admin');
