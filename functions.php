<?php 

function themes_wordpress() 
{
	/**
	 * Suas funções de enqueue vão aqui.
	 */
	
	// Add Materialize Framework da Google 
	wp_enqueue_style( 'materialize_CSS', get_template_directory_uri() . '/css/materialize.css', [], '1.0.0', 'screen,projection');

	// Add style padrao do thema
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', [], '1.0.0', 'screen,projection');

	
	wp_enqueue_style( 'fonts-google', 'https://fonts.googleapis.com/icon?family=Material+Icons', [], '1.0.0', 'screen,projection');
	
	
	wp_enqueue_script( 'materialize_JS', get_template_directory_uri().'/js/materialize.js' , [], '1.0.0', true);
	

	wp_enqueue_script( 'materialize_JS_init', get_template_directory_uri().'/js/init.js' , [], '1.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'themes_wordpress' );
