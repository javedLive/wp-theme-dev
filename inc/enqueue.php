<?php
function consult_cs_js()
{
	//wp_enqueue_style( $handle, $src, $deps, $ver, $media );
	wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,700,800%7CMontserrat:200,300,400,500,600,700,800,900');
	wp_enqueue_style('flaticon', get_template_directory_uri().'/assets/css/flaticon.css', array(), '1.0.0', 'all');
	wp_enqueue_style('font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), '0.1.0', 'all');
	wp_enqueue_style('animate',get_template_directory_uri() . '/assets/css/animate.css', array(), '0.1.0', 'all');
	wp_enqueue_style('text-animation', get_template_directory_uri() . '/assets/css/text-animation.css', array(), '0.1.0', 'all');
	wp_enqueue_style('fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), '0.1.0', 'all');
	wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.min.css', array(), '0.1.0', 'all');
	wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '0.1.0', 'all');
	wp_enqueue_style('plugin-layer', get_template_directory_uri() . '/rs-plugin/css/layers.css', array(), '0.1.0', 'all');
	wp_enqueue_style('plugin-settings', get_template_directory_uri() . '/rs-plugin/css/settings.css', array(), '0.1.0', 'all');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '0.1.0', 'all');
	wp_enqueue_style('plugins', get_template_directory_uri() . '/assets/css/plugins.css', array(), '0.1.0', 'all');
	wp_enqueue_style('icons', get_template_directory_uri() . '/assets/css/icons.css', array(), '0.1.0', 'all');
	wp_enqueue_style('consult-menu', get_template_directory_uri() . '/assets/css/menu-css.css', array(), '0.1.0', 'all');
	wp_enqueue_style('consult-main', get_template_directory_uri() . '/assets/css/main.css', array(), '0.1.0', 'all');
	wp_enqueue_style('consult-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '0.1.0', 'all');

	wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr.js', array('jquery'), '0.1.0', true);
	wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), '0.1.0', true);	
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '0.1.0', true);
	wp_enqueue_script('plugins-js', get_template_directory_uri() . '/assets/js/plugins.js', array('jquery'), '0.1.0', true);
	wp_enqueue_script('scrollUp', get_template_directory_uri() . '/assets/js/jquery.scrollUp.min.js', array('jquery'), '0.1.0', true);
	wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyB4RM7zOgOKq6n2fv407hX28xiL-M6vLdY');
	wp_enqueue_script('gmaps', get_template_directory_uri() . '/assets/js/gmaps.js', array('jquery'), '0.1.0', true);	
	wp_enqueue_script('jquery-fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array('jquery'), '0.1.0', true);
	wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '0.1.0', true);
	wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), '0.1.0', true);
	wp_enqueue_script('counterup', get_template_directory_uri() . '/assets/js/counterup.min.js', array('jquery'), '0.1.0', true);
	wp_enqueue_script('owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '0.1.0', true);
	wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '0.1.0', true);
	wp_enqueue_script('lettering', get_template_directory_uri() . '/assets/js/jquery.lettering.js', array('jquery'), '0.1.0', true);
	wp_enqueue_script('textillate', get_template_directory_uri() . '/assets/js/jquery.textillate.js', array('jquery'), '0.1.0', true);
	wp_enqueue_script('mixitup', get_template_directory_uri() . '/assets/js/mixitup.js', array('jquery'), '0.1.0', true);
	wp_enqueue_script('chart', get_template_directory_uri() . '/assets/js/chart.js', array('jquery'), '0.1.0', true);
	wp_enqueue_script('chart-active', get_template_directory_uri() . '/assets/js/chart-active.js', array('jquery'), '0.1.0', true);
	wp_enqueue_script('tools', get_template_directory_uri() . '/rs-plugin/js/jquery.themepunch.tools.min.js', array('jquery'), '0.1.0', true);
	wp_enqueue_script('revolution', get_template_directory_uri() . '/rs-plugin/js/jquery.themepunch.revolution.min.js', array('jquery'), '0.1.0', true);
	wp_enqueue_script('actions', get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.actions.min.js', array('jquery'), '0.1.0', true);
	wp_enqueue_script('kenburn', get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.kenburn.min.js', array('jquery'), '0.1.0', true);
	wp_enqueue_script('layeranimation', get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js', array('jquery'), '0.1.0', true);
	wp_enqueue_script('migration', get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.migration.min.js', array('jquery'), '0.1.0', true);
	wp_enqueue_script('navigation', get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.navigation.min.js', array('jquery'), '0.1.0', true);
	wp_enqueue_script('parallax', get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.parallax.min.js', array('jquery'), '0.1.0', true);
	wp_enqueue_script('slideanims', get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.slideanims.min.js', array('jquery'), '0.1.0', true);
	wp_enqueue_script('video', get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.video.min.js', array('jquery'), '0.1.0', true);
	wp_enqueue_script('consult-custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '0.1.0', true);
	















}
add_action('wp_enqueue_scripts','consult_cs_js');

function consult_fonts_url()
{
	$fonts_url = '';
	$OpenSans = _x('on','OpenSans font: on or off','consult');
	$Montserrat = _x('on','Montserrat font: on or off','consult');
	$font_families = array();
	$font_families[] = 'Open+Sans:300i,400,400i,600,700,800';
	$font_families[] = 'Montserrat:200,300,400,500,600,700,800,900';
	return $fonts_url;
}