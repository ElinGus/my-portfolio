<?php

// Load themes stylesheet and scripts
function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    //wp_enqueue_style( 'style', get_stylesheet_uri(),  array(), time(), 'all');
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);
  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


// Register themes menus
  register_nav_menus( array(
    'header-menu'   => __( 'Header Menu', 'portfolio_theme' ),
) );





?>