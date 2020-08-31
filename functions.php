<?php 


function weddingdreams_enqueue(){

	// Styles Start

	wp_enqueue_style( 'weddingdreams_raleway', 'https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800;900&display=swap');

	wp_enqueue_style( 'weddingdreams_cormorant_garamond', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&display=swap');

	wp_enqueue_style( 'weddingdreams_bootstrap', get_template_directory_uri(). '/css/bootstrap.min.css' );

	wp_enqueue_style( 'weddingdreams_font_awesome', get_template_directory_uri(). '/css/font-awesome.min.css' );


	wp_enqueue_style( 'weddingdreams_elegant', get_template_directory_uri(). '/css/elegant-icons.css' );


	wp_enqueue_style( 'weddingdreams_owlcarousel', get_template_directory_uri(). '/css/owl.carousel.min.css' );


	wp_enqueue_style( 'weddingdreams_nice_select', get_template_directory_uri(). '/css/nice-select.css' );


	wp_enqueue_style( 'weddingdreams_magnific', get_template_directory_uri(). '/css/magnific-popup.css' );

	wp_enqueue_style( 'weddingdreams_slicknav', get_template_directory_uri(). '/css/slicknav.min.css' );

	wp_enqueue_style('weddingdreams_stylesheet', get_stylesheet_uri());


	// Scripts Start

	wp_enqueue_script( 'weddingdreams_jquery_script', get_template_directory_uri(). '/js/jquery-3.3.1.min.js', NULL, '1.2', true);


	wp_enqueue_script( 'weddingdreams_bootstrap_script', get_template_directory_uri(). '/js/bootstrap.min.js', NULL, '1.2', true);


	wp_enqueue_script( 'weddingdreams_magnific_script', get_template_directory_uri(). '/js/jquery.magnific-popup.min.js', NULL, '1.2', true);


	wp_enqueue_script( 'weddingdreams_mixitup_script', get_template_directory_uri(). '/js/mixitup.min.js', NULL, '1.2', true);


	wp_enqueue_script( 'weddingdreams_nice_select_script', get_template_directory_uri(). '/js/jquery.nice-select.min.js', NULL, '1.2', true);


	wp_enqueue_script( 'weddingdreams_isotope_script', get_template_directory_uri(). '/js/isotope.pkgd.min.js', NULL, '1.2', true);


	wp_enqueue_script( 'weddingdreams_masonry_script', get_template_directory_uri(). '/js/masonry.pkgd.min.js', NULL, '1.2', true);

	wp_enqueue_script( 'weddingdreams_slicknav_script', get_template_directory_uri(). '/js/jquery.slicknav.js', NULL, '1.2', true);

	wp_enqueue_script( 'weddingdreams_owl_carousel_script', get_template_directory_uri(). '/js/owl.carousel.min.js', NULL, '1.2', true);


	wp_enqueue_script('weddingdreams_main_script', get_template_directory_uri(). '/js/main.js', NULL, '1.3', true);

}

add_action('wp_enqueue_scripts', 'weddingdreams_enqueue');



if(! function_exists('weddingdreams_setup')){
	
	function weddingdreams_setup(){

		add_theme_support('title-tag');
	
	}
}

add_action('after_setup_theme', 'weddingdreams_setup');