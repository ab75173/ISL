<?php

// Load Theme CSS
function theme_styles() {

  wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );


}

// Load Theme JS
function theme_js() {

  wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/theme.js', array('jquery'), '', true );

}

add_action( 'wp_enqueue_scripts', 'theme_js' );

add_action( 'wp_enqueue_scripts', 'theme_styles' );

// Enable custom menus

add_theme_support( 'menus' );

?>