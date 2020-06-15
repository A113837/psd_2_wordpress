<?php 

function lapizzeria_setup(){
	add_theme_support( 'post-thumbnails' );
}

add_action('after_setup_theme', 'lapizzeria_setup');


function lapizzeria_styles()
{

	//add google fonts
	wp_register_style('googlefont', 'https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,400;0,500;1,500&display=swap', array(), '1.0.0' );

	//adding normalize.css
	wp_register_style('normalize', get_template_directory_uri().'/css/normalize.css', array(), '8.0.0' );

	//adding font-awesome.css
	wp_register_style('fontawesome', get_template_directory_uri().'/css/font-awesome.css', array(), '4.7.0' );

	//adding stylesheet
	wp_register_style('style', get_template_directory_uri().'/style.css', array('normalize'), '1.0.0' );
	
	//enqueue style
	wp_enqueue_style('googlefont');
	wp_enqueue_style('normalize');
	wp_enqueue_style('fontawesome');
	wp_enqueue_style('style');

	wp_register_script('script', get_template_directory_uri().'/js/scripts.js', array('jquery'), '1.0.0', true);

	//add Javascript file
	wp_enqueue_script('juery');
	wp_enqueue_script('script');

}

//hook using add_action

add_action('wp_enqueue_scripts', 'lapizzeria_styles');

//add Menus
function lapizzeria_menu()
{
	register_nav_menus(array(
		'header-menu' => __('Header Menu', 'lapizzeria'),
		'social-menu' => __('Social Menu', 'lapizzeria')
	));
}
//'init is a hook in wp'
add_action('init', 'lapizzeria_menu');

 ?>