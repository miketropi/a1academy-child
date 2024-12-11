<?php 
function nguyenlan_div_col_admin(){
  add_ux_builder_shortcode('nguyenlan_div_col', array(
  'type'      => 'container',
  'name' => __( 'Div col' ), 	
  'category' => __('Addon NL'), 
  'thumbnail' => lay_thumb_svg( 'div-col'),
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
			'class2'         => array(
				'type'    => 'textfield',
				'heading' => 'Class2',
				'value'   => '',
			),
		'class3'         => array(
				'type'    => 'textfield',
				'heading' => 'Class3',
				'value'   => '',
			),
			),
		)	
		);
}
add_action('ux_builder_setup', 'nguyenlan_div_col_admin');