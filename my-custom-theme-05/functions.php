<?php

function myCustomTheme_stylesheets() {
    wp_enqueue_style( 'style', get_stylesheet_uri()); 
//    wp_enqueue_style( 'inter-font', get_template_directory_uri() . '/fonts/inter/font-style.css' );
}
add_action( 'wp_enqueue_scripts', 'myCustomTheme_stylesheets' );

/*
function zerolab_scripts() {
    wp_enqueue_script( 'custom-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'zerolab_scripts' );
*/

function register_my_menus() {
  register_nav_menus(
    array(
        'header-menu' => __( 'Main Menu' ),
        'mobile-menu' => __( 'Responsive Menu' ),
        'footer-menu' => __( 'Bottom Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );


?>