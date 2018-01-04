<?php

function fpress_enqueue() {
	wp_enqueue_script('jquery');

    wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js', array('jquery'), true);

	wp_enqueue_style('generalstyle', get_template_directory_uri().'/css/fpress.css', array(), '1.0.0', 'all');
	wp_enqueue_script('generaljs', get_template_directory_uri().'/css/fpress.js', array(), '1.0.0', true);


}
add_action('wp_enqueue_scripts', 'fpress_enqueue');


//--//--//


// Inclue google fonts
function google_fonts() {

	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600', array());

}
add_action('wp_enqueue_scripts', 'google_fonts' );


//--//--//


// Theme setup
function fpress_theme_setup() {
		add_theme_support('title-tag'); //permite que o WordPress gerencie a tag title automaticamente
		add_theme_support('menus'); //suporte de menus (ex.: navbar)

		register_nav_menu('primary','Navegação Primária do Cabeçário');
		register_nav_menu('footer1','Navegação #1 do Footer');
	}
add_action('after_setup_theme', 'fpress_theme_setup');


//--//--//


