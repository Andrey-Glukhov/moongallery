<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

 global $woocommerce;
 $woocommerce->cart->empty_cart();

//Count all processind orders total
$args = array(
	'limit' => 9999,
	'return' => 'objects',
	'status' => 'processing'
   );
   $query = new WC_Order_Query( $args );
   $orders = $query->get_orders();
   $sum=0;
   foreach( $orders as $order_obj ) {
	$sum += $order_obj->get_total();
   } 
   

    $ordermax = 20000;
    


   
 ?>
 <div class="donation_back_wrapper">
   
<div class="donation_total" data-donation_sum="<?php echo get_option('gallery_donaion'); ?>" ></div>
<div class="progress">
  <!-- <div class="progress-bar" role ="progressbar" aria-valuenow= "20000"
    aria-valuemin="0" aria-valuemax="20000" style= "width:<?php echo ($sum/$ordermax) * 100;?>%">  -->
    <div class="progress-bar" role ="progressbar" aria-valuenow= "20000"
    aria-valuemin="0" aria-valuemax="20000" style= "width: 50%"> 
  </div>
</div>

<?php /**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */

do_action( 'woocommerce_before_main_content' );

?>
<header class="woocommerce-products-header">
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
</header>
<?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}




/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );
//add cart and checkout to products pagegit 
//echo do_shortcode( '[woocommerce_cart]' );
//$WC_Cart = new WC_Cart();
//$cart_total = $WC_Cart->get_cart_contents_count();
// global $woocommerce;
// $cart_total = $woocommerce->cart->get_cart_contents_count();
// error_log('total----' . $cart_total);
//if ($cart_total <= 0 ) { ?>
<!-- <form name="checkout" method="post" class="checkout woocommerce-checkout" action="http://localhost:8888/moon_gallery/wordpress/checkout/" enctype="multipart/form-data" novalidate="novalidate">
	<div id="order_review" class="woocommerce-checkout-review-order">
		<div id="payment" class="woocommerce-checkout-payment">
		</div>
	</div>	
</form> -->
<?php 
// }  else {
// 	echo do_shortcode( '[woocommerce_checkout]' );
// } 
$checkout = WC()->checkout();

		wc_get_template( 'checkout/form-checkout.php', array( 'checkout' => $checkout ) );
?>

  <div class="donation_wrapper">
    <a href="http://www.moongallery.eu"><div class="image_logo"></div></a>
    <button class="donation_button">Donate</button>
    <div class="image_cube"></div>
    <div class="image_iss"></div>
    <div class="text_area">
      <h1>Help us send art to the ISS</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Faucibus in ornare quam viverra orci sagittis eu volutpat. Purus faucibus ornare suspendisse sed. Diam quam nulla porttitor massa id. Non odio euismod lacinia at. Senectus et netus et malesuada fames ac turpis egestas maecenas. Tincidunt id aliquet risus feugiat in ante metus. Morbi enim nunc faucibus a pellentesque sit amet. Enim ut tellus elementum sagittis vitae et leo. Pharetra pharetra massa massa ultricies mi quis hendrerit. In arcu cursus euismod quis viverra nibh. </p>
    </div> 
    <div class="donation_footer">
      <div class="flex-box">
        <a href="https://nl.linkedin.com/in/moon-gallery-a28712206"><div class="image_in"></div></a>
        <a href="https://www.instagram.com/moongalleryofficial/"><div class="image_insta"></div></a>
        <a href="https://www.facebook.com/artmoonmars.moongallery.5"><div class="image_fb"></div></a>
      </div>
      <div class="flex-box">
        <p>©2020 Stichting Moon Gallery Fundation</p>
      </div>
      <div class="flex-box">
        <a href="http://www.moongallery.eu">About</a>
        <a href="http://www.moongallery.eu">Contact</a>
      </div>
    </div> 
    <br>  
    <br>   
  </div>
        
</div>
<?php get_footer( 'shop' );

