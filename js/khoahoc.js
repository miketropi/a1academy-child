jQuery(document).ready(function(){
	jQuery('.tab-gtv button').click(function(){
		var tab_id = jQuery(this).attr('data-tab');
		jQuery('.tab-gtv button').removeClass('active');
		jQuery('.tabcontent').removeClass('active');
		jQuery(this).addClass('active');
		jQuery("#"+tab_id).addClass('active');
	})
})