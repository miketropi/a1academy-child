<?php
/**
 * Header template.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

?>
<!DOCTYPE html>
<!--[if IE 9 ]> <html <?php language_attributes(); ?> class="ie9 <?php flatsome_html_classes(); ?>"> <![endif]-->
<!--[if IE 8 ]> <html <?php language_attributes(); ?> class="ie8 <?php flatsome_html_classes(); ?>"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="<?php flatsome_html_classes(); ?>"> <!--<![endif]-->
<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-TCZSHZHR');</script>
	<!-- End Google Tag Manager -->
	
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>
	
<link rel='stylesheet' id='fontawesome5-css' href='/wp-content/themes/seo/css/all.min.css' type='text/css' media='all' />	
<link rel='stylesheet' id='aos-css-css' href='//unpkg.com/aos@2.3.1/dist/aos.css' type='text/css' media='all' />
<link rel='stylesheet' id='owl-carousel-styles-css' href='/wp-content/themes/seo/css/owl.carousel.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='owl-carousel-styles-css' href='/wp-content/themes/seo/css/owl.css' type='text/css' media='all' />
<link rel='stylesheet' id='faq-styles-css' href='/wp-content/themes/seo/css/faq.css' type='text/css' media='all' />	
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TCZSHZHR"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	
<?php do_action( 'flatsome_after_body_open' ); ?>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'flatsome' ); ?></a>

<div id="wrapper">

	<?php do_action( 'flatsome_before_header' ); ?>

	<header id="header" class="header <?php flatsome_header_classes(); ?>">
		<div class="header-wrapper">
			<?php get_template_part( 'template-parts/header/header', 'wrapper' ); ?>
		</div>
	</header>

	<?php do_action( 'flatsome_after_header' ); ?>
	<main id="main" class="<?php flatsome_main_classes(); ?>">
		<div class="breadcrumb-background">
			<div class="breadcrumb-container row">
				<?php if (!is_front_page() && !is_404()) : ?>
				<div class="breadcrumb">
					<?php if (function_exists('rank_math_the_breadcrumbs')) {
						if (!is_front_page() && !is_404()) {
							rank_math_the_breadcrumbs();
						}
					} ?>
				</div>
				<?php endif; ?>
			</div>
		</div>