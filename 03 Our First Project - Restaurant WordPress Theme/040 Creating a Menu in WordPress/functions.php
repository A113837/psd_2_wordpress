<?php 

function lapizzeria_styles()
{

	//adding normalize.css
	wp_register_style('normalize', get_template_directory_uri().'/css/normalize.css', array(), '8.0.0' );

	//adding stylesheet
	wp_register_style('style', get_template_directory_uri().'/style.css', array('normalize'), '1.0.0' );
	
	//enqueue style
	wp_enqueue_style('normalize');
	wp_enqueue_style('style');
}

//hook using add_action

add_action('wp_enqueue_scripts', 'lapizzeria_styles');

//add Menus
function lapizzeria_menu()
{
	register_nav_menus(array(
		'header-menu' => __('Header Menu', 'lapizzeria')
	));
}
//'init is a hook in wp'
add_action('init', 'lapizzeria_menu');

 ?>