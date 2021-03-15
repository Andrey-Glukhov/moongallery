<?php
/**
*Template Name: Event Page
*/
get_header();?>
<div class = "event_page_wraper">
<div class=" container-fluid choise_wraper" style="background-color: #000000;">
	<div class="row navigation-top justify-content-between"> 
		<div class="col-2 event_logo" onclick="location.href='http://www.moongallery.eu/';"></div>
		<div class="col-2 page_title"><h1>EVENTS</h1></div>
	</div>
    <div class="row choise">
		<div class="col-12 categories">
		<?php
            wp_nav_menu(array(
              'theme_location' => 'secondary',
              'container' => false,
              'menu_class' => 'navbar',
              'items_wrap' => '<li id="%1$s" class="navbar-item %2$s">%3$s</li>',
              'item_spacing' => 'preserve'
            )
          );
          ?>
	 </div>
    </div>
  </div>
  <div class = "container events_wraper" style="padding-top: 200px;">
    <div class = "row">
		<?php 
		$args = array(
        'post_type' => 'event',
		 'post_status' => 'publish',
         'order' => 'DESC',
         'orderby' => 'meta_value',
        'meta_query' => array(
            array(
            'key' => 'event_date',
            'compare' => '>=',
			'value' =>date('Ymd'),
            )
        ),
        'meta_key' => 'event_date',
		'meta_type' => 'DATE'
    );
	$event = new WP_Query( $args );				
	
      if($event->have_posts() ) : while ( $event->have_posts() ) : $event->the_post();
		$cat = get_the_category(); 
		 // $e_date = get_field('event_date', false, false);
           // $e_dcheck = new DateTime($e_date);
		  //  echo $dcheck;
           // if($e_dcheck > $e_dnow){
      ?>
      <div class = "col-lg-3 col-md-4 col-sm-6 col-xs-12" style="display: flex; margin-bottom: 20px;">
        <div class = "event_preview_<?php echo $cat[0]->cat_name; ?>"  onclick="location.href='<?php the_permalink() ?>'">
		
          <p class="event_date"><?php the_field('event_date'); ?></p>
          <p class="event_time"><?php the_field('event_time') ?></p>
          <h2 class="event_title"><?php the_title() ?></h2>
			<p class="event_subtitle"><?php the_field('subtitle') ?></p>
		  <div class="<?php echo $cat[0]->cat_name; ?>" ><a href="http://www.glukh11.cl01.keurigonline.nl/<?php echo $cat[0]->cat_name; ?>/"><?php echo $cat[0]->cat_name; ?></a></div>
        </div>
      </div>
		<?php //} ?>
    <?php endwhile; endif; ?>

</div>

</div>
</div>


<?php get_footer(); ?>