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

// Registe Sidebar Widgets

function create_widget( $name, $id, $description) {
  $args = array(
    'name'          => __( $name ),
    'id'            => $id,
    'description'   => $description,
    'before_widget' => '',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>'
  );

  register_sidebar( $args );

}

create_widget( 'About Left', 'about_left', 'Displays the left column of the about page');
create_widget( 'About Right', 'about_right', 'Displays the right column of the about page');
create_widget( 'Left Footer', 'footer_left', 'Displays in the left area of the footer');
create_widget( 'Middle Footer', 'footer_middle', 'Displays in the middle area of the footer');
create_widget( 'Right Footer', 'footer_right', 'Displays in the right area of the footer');

?>
