<?php 
function nguyenlan_div_one_admin(){
  add_ux_builder_shortcode('nguyenlan_div_one', array(
  'type'      => 'container',
  'name' => __( 'Div 1 class' ), 	
  'category' => __('Addon NL'), 
  'thumbnail' => lay_thumb_svg( 'div-one'),
  'info' => '{{ label }}',
  'wrap'      => false,	
	'options'   => array(
			'label' => array(
            'full_width' => true,
            'type' => 'textfield',
            'heading' => 'Label',
            'placeholder' => 'Enter admin label here..'
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
add_action('ux_builder_setup', 'nguyenlan_div_one_admin');