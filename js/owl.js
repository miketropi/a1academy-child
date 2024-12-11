jQuery(document).ready(function(){
  jQuery("#customer-carousel").owlCarousel({
  center: true,
  items: 1,  
	loop: true,	
	margin: 80,
	nav: true,
	navText: ["<div class='nav-btn prev-slide'><i class='fas fa-chevron-left'></i></div>", "<div class='nav-btn next-slide'><i class='fas fa-chevron-right'></i></div>"], 
	responsive: {600: {items: 1},1024: {items: 2}},   
  });
});
