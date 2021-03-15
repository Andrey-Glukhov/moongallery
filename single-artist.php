<?php get_header(); ?>
<?php if(have_posts()): while (have_posts()): the_post();?>
  <div class = "artist_wraper">
    <div class = "left">
      <div class= "container menu">
        <div class= "row top_menue">
          <div class = "logo_w col-4" onclick="location.href='http://www.moongallery.eu/';"></div>
          <div class = "col-8 navigation_links">

            <?php if( is_singular('artist') ) {
               previous_post_link( '%link', '<button class="artist_button">PREVIOUS</button>' );
                next_post_link( '%link', '<button class="artist_button">NEXT</button>' );
              } ?>
              <button class = "artist_button" onclick="location.href='http://www.moongallery.eu/#';">HOME</button>
            </div>

          </div>
        </div>
        <div class = "artist_profile">
          <div class = "container" id = "artist">

            <div class= "row artist_info">
              <div class = "col-md-6 col-sm-12 portrait">
                <img src="<?php the_field('portrait');?>">
              </div>
              <div class = "col-md-6 col-sm-12 profile">
				
				<?php if( have_rows('artist_profile') ): while( have_rows('artist_profile') ): the_row();?>
				  
				  <table style="width:100%">
  					<tr>
						<th style="padding-right:15px; vertical-align: top;"><p class = "name">NAME:</p></th>
						<th><p class = "name"><?php the_sub_field('name');?></p></th>
					</tr>
					<tr>
						<th style="padding-right:15px; vertical-align: top;"><p class = "name">NATIONALITY:</p></th>
						<th><p class = "name"><?php the_sub_field('nationality');?></p></th>
					</tr>
					<tr>
						<th style="padding-right:15px; vertical-align: top;"><p class = "name">BASED IN:</p></th>
						<th><p class = "name"><?php the_sub_field('based_in');?></p></th>
					</tr>
					 <tr>
						<th style="padding-right:15px; vertical-align: top;"><p class = "name">WEBSITE:</p></th>
						 <th><p class = "name"><a href="<?php the_sub_field('website');?>"> <?php the_sub_field('website');?></a></p></th>
					</tr>
				 </table>
				   <?php endwhile; endif; ?>
              </div>
            </div>
            <div class= "row">
				<div class = "col-12 statement">
                <p class = "submission">ABOUT ARTIST:</p>
                  <?php the_field('artist_bio');?>
              </div>
				<div class = "col-12 statement">
					<p class = "submission">SUBMISSION: <?php the_field('submission_title');?></p>
                   <?php the_field('submission');?>
			  </div>
            </div>
          </div>
        </div>
      </div>

      <div class = "right">
        <div class ="container">
          <?php $images = acf_photo_gallery('example_of_work', $post->ID);
          if( count($images) ):?>
          <div class = "row">
            <?php foreach( $images as $image ):
              $full_image_url= $image['full_image_url'];
              $id = $image['id'];
			 $cap = $image['caption'];?>
              <div class = "col-12 example_images">
				  <p class="img_caption"><?php echo $cap?></p>
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
