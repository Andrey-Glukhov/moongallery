<?php
function moon_script_enqueue(){
//css
	wp_enqueue_style( 'moon-stylesheet', get_template_directory_uri() . '/css/moon.css', array(), '1.0.0', 'all' );
//js
  wp_enqueue_script('jquery');
  wp_enqueue_script( 'moon-js', get_template_directory_uri() . '/js/moon.js', array('jquery'), '1.0.0', true );
  wp_register_script( 'wcr-js', get_template_directory_uri() . '/js/wcr.js', array('wc-checkout'), '1.0.0', true );
  if (is_shop()) {
    
    //global $wp_scripts;
    //WC_Frontend_Scripts
   // wp_enqueue_script('wc-cart');
    wp_enqueue_script('wc-checkout');
    wp_enqueue_script('wcr-js');
  //  foreach( $wp_scripts->queue as $script ) :
  //      $result['styles'][] =  $wp_scripts->registered[$script]->src . ";";
       
  //  endforeach;
  //  error_log('4--->' . print_r($wp_scripts,true));
   //WC_Frontend_Scripts::enqueue_script('wc-checkout');
        
  }

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
// Change Woocommerce settings
// Remove Woocommersce sidebar from product page
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
// Remove catalog ordering from product page
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30) ;
// Remove Woocommerce page title from product page
add_filter('woocommerce_show_page_title','__return_false'); 
// Remove product thumbnail from product page
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
//Remove result count from product page
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
//Remove coupon form from product page
remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );
//Remove order review  from product page 
remove_action( 'woocommerce_checkout_order_review', 'woocommerce_order_review', 10 );
// Disable shipping calculation  cart page
function disable_shipping_calc_on_cart( $show_shipping ) {
    if( is_cart() ) {
        return false;
    }
    return $show_shipping;
}
add_filter( 'woocommerce_cart_ready_to_calc_shipping', 'disable_shipping_calc_on_cart', 99 );
// Turn of  order items visibility
add_filter( 'woocommerce_order_item_visible', false);
// Set total amount of donation
if ( get_option( 'gallery_donaion' ) === false ) {
  add_option( 'gallery_donaion', 20000 );
}

// add_filter('woocommerce_billing_fields','wpb_custom_billing_fields');
// function wpb_custom_billing_fields( $fields = array() ) {
// //$chosen_payment_method = WC()->session->get('chosen_payment_method');
// //if($chosen_payment_method == "paypal"){
// // $fields['billing_first_name']['required']= false;
// // $fields['billing_last_name']['required']= false;
// // $fields['billing_company']['required']  = false;
// // $fields['billing_email']['required']   = false;
// // $fields['billing_address_1']['required']= false;
// // $fields['billing_address_2']['required']= false;
// // $fields['billing_state']['required']   = false;
// // $fields['billing_city']['required']     = false;
// // $fields['billing_phone']['required']    = false;
// // $fields['billing_postcode']['required'] = false;
// // $fields['billing_country']['required']  = false;
// // //}
// unset($fields['billing_first_name']);
// unset($fields['billing_last_name']);
// unset($fields['billing_company']);
// unset($fields['billing_email']);
// unset($fields['billing_address_1']);
// unset($fields['billing_address_2']);
// unset($fields['billing_state']);
// unset($fields['billing_city']);
// unset($fields['billing_phone']);
// unset($fields['billing_postcode']);
// unset($fields['billing_country']);
// //}
// error_log('bill---' . print_r($fields,true));
// return $fields;
// }

// Remove billing fields from checkout page
add_filter( 'woocommerce_checkout_fields' , 'remove_billing_fields_from_checkout' );
function remove_billing_fields_from_checkout( $fields ) {
  //error_log('bill1---' . print_r($fields,true));
    $fields[ 'billing' ] = array();
    $fields[ 'shipping' ] = array();
  //  error_log('bill2---' . print_r($fields,true));
    return $fields;
}
// add_action('woocommerce_checkout_init','disable_billing');
// function disable_billing($checkout){
//   error_log('bill---' . print_r($checkout,true));
//   $checkout->checkout_fields['billing']=array();
//   //$checkout->checkout_fields['billing']=array();
//   return $checkout;
//   }



