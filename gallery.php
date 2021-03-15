<?php
/**
*Template Name: Gallery Page
*/
get_header();?>

<div class = "grid_wraper" style="background-color: black;">

    <div class= "container-fluid gallery_menu" style="position: fixed;
    background-color: black;
    width: 100%;
    height: auto;
	top:0;">
      <div class= "row top_menue">
        <div class = "logo_w col-4" onclick="location.href='http://www.moongallery.eu/';"></div>
        <div class = "col-8 navigation_links">
          <button class = "artist_button" onclick="location.href='http://www.moongallery.eu/';">HOME</button>
        </div>

      </div>
    </div>

    <div class = "grid" style="padding-top: 127px;">
        <?php $query = new WP_Query( array( 'post_type' => 'moon_gallery') ); ?>
        <?php
        if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
        <div onclick="location.href='<?php the_field('artist_url'); ?>'"/>
          <img class = "featured_image" style="width:100%; height:100%;" src="<?php the_field('featured_image'); ?>" />
        </div>
      <?php endwhile; endif; ?>
  </div>


</div>




<?php get_footer(); ?>
