<?php get_header();?>
<?php if(have_posts()): while (have_posts()): the_post();?>
  <div class = "event_wraper">
    <div class = "left">
      <div class= "container menu">
        <div class= "row top_menue">
          <div class = "logo_w col-4" onclick="location.href='http://www.moongallery.eu/';"></div>
          <div class = "col-8 navigation_links">

            <?php if( is_singular('open_call') ) {
               previous_post_link( '%link', '<button class="event_button">PREVIOUS</button>' );
                next_post_link( '%link', '<button class="event_button">NEXT</button>' );
              } ?>
              <button class = "event_button" onclick="location.href='http://www.moongallery.eu/';">HOME</button>
            </div>

          </div>
        </div>
        <div class = "event_profile">
          <div class = "container" id = "event">
            <div class= "row event_info">
              <div class = "col-md-6 col-sm-12 e_portrait">
                <img src="<?php the_field('featured_image');?>">
              </div>
              <div class = "col-md-6 col-sm-12 e_profile">
                <h3 class = "title"><?php the_title();?></h3>
                <p class = "date">WHEN:&nbsp&nbsp&nbsp&nbsp<span><?php the_field('time_frame');?></span></p>
                <p class = "rsvp">
                  <a target="_blank" href="<?php the_field('facebook_url');?>">JOIN US ON FACEBOOK</a>
                </p>
              </div>
			<div class= "row">
              <div class = "col-12 statement">
                	<span><?php the_field('call_guideline');?></span>
                </p>
              </div>
            </div>
				
            </div>
          </div>
        </div>
      </div>

      <div class = "right">
        <div class ="container">
          <div class = "row">
			  <div class = "col-12" style="margin-top: 30px; text-align: center;">
				   <a style="color: white; background-color: black; padding: 10px; font-family: SunCd-SemiBold;" href="<?php the_field('download_link');?>" target="_blank">DOWNLOAD MODEL HERE</a>
              </div>
              <div class = "col-12 example_images">
                <img src="<?php the_field('call_image');?>"/>
              </div>
			  <div class = "col-12 form">
				  <h3 class="form_title">APPLICATION FORM</h3>
				  <?php the_field('contact_form');?></div>
			   
          </div>
      </div>
    </div>
  </div>
<?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
