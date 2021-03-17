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

//Add woocommerce support to theme
function mytheme_add_woocommerce_support() {
  add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30) ;
add_filter('woocommerce_show_page_title','__return_false'); 
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);

remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );
remove_action( 'woocommerce_checkout_order_review', 'woocommerce_order_review', 10 );
function disable_shipping_calc_on_cart( $show_shipping ) {
    if( is_cart() ) {
        return false;
    }
    return $show_shipping;
}
add_filter( 'woocommerce_cart_ready_to_calc_shipping', 'disable_shipping_calc_on_cart', 99 );
add_filter( 'woocommerce_order_item_visible', false);




