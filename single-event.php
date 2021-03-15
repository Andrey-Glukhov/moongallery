<?php get_header();?>
<?php if(have_posts()): while (have_posts()): the_post();?>
  <div class = "event_wraper">
    <div class = "left">
      <div class= "container menu">
        <div class= "row top_menue">
          <div class = "logo_w col-4" onclick="location.href='http://www.moongallery.eu/';"></div>
          <div class = "col-8 navigation_links">

            <?php if( is_singular('event') ) {
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
                <img src="<?php the_field('campaign_image');?>">
              </div>
              <div class = "col-md-5 col-sm-12 e_profile">
                <h3 class = "title"><?php the_field('title');?></h3>
                <p class = "date">WHEN:&nbsp&nbsp&nbsp&nbsp
					<span> <?php
                $date = get_field('date', false, false);
                $dcheck = new DateTime($date);
                echo $dcheck -> format('jS \of F');?></span>&nbsp
                <span><?php
                $time = get_field('start_time', false, false);
                $tcheck = new DateTime($time);
                echo $tcheck -> format('h:i A');?></span></p>
                <p class = "location">WHERE:&nbsp&nbsp&nbsp&nbsp
                <span><?php the_field('location');?></span></p>
                <p class = "entrance">ENTRANCE:&nbsp&nbsp&nbsp&nbsp
                  <span> <?php the_field('entrance');?></span></p>
				  
                
                <p class = "rsvp">
                  <a href="mailto:moon.gallery.project@gmail.com">GET INVITED</a>&nbsp&nbsp&nbsp&nbsp
                  <a href="<?php the_field('facebook_url');?>">JOIN US ON FACEBOOK</a>
                </p>

			  </div>
            </div>
          <div class= "row">
        <div class = "col-12 statement">
                <p class = "submission">EVENT INFO:
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class = "right">
        <div class ="container">
          <?php $images = acf_photo_gallery('event_pictures', $post->ID);
          if( count($images) ):?>
          <div class = "row">
            <?php foreach( $images as $image ):
              $full_image_url= $image['full_image_url'];
              $id = $image['id'];?>
              <div class = "col-12 example_images">
                <img src="<?php echo $full_image_url?>"/>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
