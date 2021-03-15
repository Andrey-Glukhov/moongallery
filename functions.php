<?php
function moon_script_enqueue(){
//css
	wp_enqueue_style( 'moon-stylesheet', get_template_directory_uri() . '/css/moon.css', array(), '1.0.0', 'all' );
//js
  wp_enqueue_script('jquery');
  wp_enqueue_script( 'moon-js', get_template_directory_uri() . '/js/moon.js', array(), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'moon_script_enqueue' );

function moon_theme_setup(){
  add_theme_support('menus');
add_theme_support('menus');
  register_nav_menus( array(
    'primary'   => __( 'Primary Menu', 'Moon Gallery' ),
    'secondary' => __( 'Secondary Menu', 'Moon Gallery')
) );
}
add_action('init', 'moon_theme_setup');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-formats', array('aside', 'chat', 'gallery','link','image','quote','status','video'));
add_theme_support('post-thumbnails');
