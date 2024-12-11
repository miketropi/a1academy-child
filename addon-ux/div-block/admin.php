<?php 
function nguyenlan_div_blockadmin(){
  add_ux_builder_shortcode('nguyenlan_div_block', array(
  'type'      => 'container',
  'name' => __( 'Div block' ), 	
  'category' => __('Addon NL'), 
  'thumbnail' => lay_thumb_svg( 'div-block'),
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
		'id1'         => array(
				'type'    => 'textfield',
				'heading' => 'Data',
				'value'   => '',
			),
			'wraper'         => array(
			'type'    => 'checkbox',
				'heading' => 'Tạo div Wraper',
				'default' => 'false',
			),
			'class_wraper'         => array(
				'type'    => 'textfield',
				'heading' => 'Class div div Wraper ',
				'value'   => '',
			),
		'id2'         => array(
				'type'    => 'textfield',
				'heading' => 'Data',
				'value'   => '',
			),
			'wraper2'         => array(
			'type'    => 'checkbox',
				'heading' => 'Tạo div Container',
				'default' => 'false',
			),
			'class_wraper2'         => array(
				'type'    => 'textfield',
				'heading' => 'Class div Container ',
				'value'   => '',
			),
			'id3'         => array(
				'type'    => 'textfield',
				'heading' => 'Data',
				'value'   => '',
			),
			
			),
		)	
		);
}
add_action('ux_builder_setup', 'nguyenlan_div_blockadmin');