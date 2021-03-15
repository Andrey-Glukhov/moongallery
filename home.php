<?php get_header(); ?>
<div id="container"></div>
<div class = "sceen_wraper">
  
  <!--<div id="ThreeJS" style="position: absolute; left:0px; top:0px"></div>-->
  <div class = "buttons">
    <div class="artists">
      <div class="set">
        <a href = "#" >ARTISTS
          <i class = "fa fa-plus"></i>
        </a>
        <div class="content">
          <?php $query = new WP_Query( array( 'post_type' => 'artist') ); ?>
          <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
            <a class = "project_link" href="<?php the_permalink(); ?>">
              <p><?php the_title(); ?></p>
            </a>
          <?php endwhile; else : ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>

        </div>
      </div>
    </div>
    <div class = "logo"></div>
    <button class="about stack" onclick="document.getElementById('id02').style.display='block'" style="width:auto;" data-order = "1">ABOUT</button>
    <button class="workshops stack" onclick="document.getElementById('id03').style.display='block'" style="width:auto;"data-order = "2">EVENTS</button>
    <button class="gallery stack" onclick="location.href='http://www.moongallery.eu/grid/';">GALLERY</button>
    <button class="open_call stack" onclick="document.getElementById('id04').style.display='block'" style="width:auto;"data-order = "3">SUBMIT</button>

    <button class="instagramm stack" data-order = "6"><a href = "https://www.instagram.com/moongalleryofficial/" class = "fa fa-instagram" target ="_blank"></a></button>
    <button class="facebook stack" data-order = "7"><a href = "https://www.facebook.com/artmoonmars.moongallery.5" class = "fa fa-facebook" target ="_blank"></a></button>
    <button class="login stack" onclick="document.getElementById('id01').style.display='block'" style="width:auto;" data-order = "8">SUBSCRIBE</button>
    <button class="collaborators stack" onclick="document.getElementById('id07').style.display='block'" style="width:auto;" data-order = "9">PARTNERS</button>
  </div>
  
  
</div>
<!-- ______________________login form______________________ -->
<div id="id01" class="modal">
	<div class="modal-subs animate">
		<span  class="close"><p onclick="document.getElementById('id01').style.display='none'">&times;</p></span>
    <div class="container form">
      
		<!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{clear:left;}
</style>
<div id="mc_embed_signup">
<form action="https://space.us19.list-manage.com/subscribe/post?u=6c23415cf13153d698fec818e&amp;id=87846309dd" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<h2>SUBSCRIBE FOR OUR NEWSLETTERS</h2>
<div class="indicates-required"><span>*</span> indicates required</div>
<div class="mc-field-group">
	<label for="mce-NAME">Name  <span>*</span>
</label>
	<input type="text" value="" name="NAME" class="required" id="mce-NAME">
</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span>*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>   
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6c23415cf13153d698fec818e_87846309dd" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="SUBSCRIBE" name="subscribe" id="mc-embedded-subscribe" class="button" style="background-color:#000; border: solid 1px white; border-radius: 0;"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='NAME';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>

 
       <!--<label for="uname"><b>USERNAME</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
      
      <label for="psw"><b>PASSWORD</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
      
      <button type="submit" class = "log">LOGIN</button>
      
      <span class="psw">Forgot <a href="#">password?</a></span>-->
    </div>
  </div>
</div>
<!-- ______________________about______________________ -->
<div id="id02" class="modal">
  <div class="modal-about animate">
	  <span class="close"><p onclick="document.getElementById('id02').style.display='none'">&times;</p></span>
    <div class="container about_cont">
      <?php $about = new WP_Query( array( 'page_id'=>20) ); ?>
      <?php if ( $about->have_posts() ) : while ( $about->have_posts() ) : $about->the_post(); ?>
        <div class = "about_content">
          <h1><?php the_title();?></h1>
			<div> <?php the_content();?></div>
          <p><?php the_field('definition');?></p>
          <img class="img1" src="<?php the_field('img1');?>"/>
          <p><?php the_field('collaboration');?></p>
          <img class="img3" src="<?php the_field('img3');?>"/>
        </div>
      <?php endwhile; else : ?>
      <?php endif; ?>
    </div>
  </div>
</div>

<!-- ______________________workshops______________________ -->
<div id="id03" class="modal">
  <div class="modal-workshops animate">
	  <span class="close"><p onclick="document.getElementById('id03').style.display='none'">&times;</p></span>
    <div class="container workshop_cont">
      
      <div>
        <h1>EVENTS</h1>
          <div class = "row">
            <?php $workshop = new WP_Query( array( 'post_type' => 'workshop'));
            $w_currentDate = date('jS \of F');
            $w_dnow = new DateTime();
            ?>
            <div class = "col-12"><h2>Upcoming events</h2></div>
            <?php
            if ( $workshop->have_posts() ) : while ( $workshop->have_posts() ) : $workshop->the_post();
            $w_date = get_field('date', false, false);
            $w_dcheck = new DateTime($w_date);
            //echo $dcheck->format('Y-m-d');
            if($w_dcheck > $w_dnow){
              ?>
              <div class = "col-md-4 col-sm-6 col-xs-12 event">
                <a  href="<?php the_permalink(); ?>"><img class = "event_img" src = "<?php the_field('featured_image');?>"/></a>
                <h3 style="color:white;"><?php the_title();?></h3>
                <p style="color:white;"><?php echo $w_dcheck -> format('jS \of F');?></p>
              </div>
            <?php } ?>
          <?php endwhile; endif; ?>
        </div>
        <div class = "row">
          <?php $workshop_past = new WP_Query( array( 'post_type' => 'workshop'));
          $w_currentDate_past = date('jS \of F');
          $w_dnow_past = new DateTime();
          //echo $dnow->format('Y-m-d');
          ?>
          <div class = "col-12"><h2>Past events</h2></div>
          <?php
          if ( $workshop_past->have_posts() ) : while ( $workshop_past->have_posts() ) : $workshop_past->the_post();
          $w_date_past = get_field('date', false, false);
          $w_dcheck_past = new DateTime($w_date_past);
          //echo $dcheck->format('Y-m-d');
          if($w_dcheck_past < $w_dnow_past){
            ?>
            <div class = "col-md-4 col-sm-6 col-xs-12 event">
              <a  href="<?php the_permalink(); ?>"><img class = "event_img" src = "<?php the_field('featured_image');?>"/></a>
              <h3 style="color:white;"><?php the_title();?></h3>
              <p style="color:white;"><?php echo $w_dcheck_past -> format('jS \of F');?></p>
            </div>
          <?php } ?>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </div>
</div>
</div>

<!-- ______________________open_call______________________ -->
<div id="id04" class="modal">
  <div class="modal-open_call animate" action="/action_page.php">
	  <span class="close"><p onclick="document.getElementById('id04').style.display='none'">&times;</p></span>
    <div class="container call_cont">
        <h1>MOON GALLERY</h1>
        <div class = "row">
			<?php $call = new WP_Query( array( 'post_type' => 'open_call'));
			if ( $call->have_posts() ) : while ( $call->have_posts() ) : $call->the_post();?>
          
			<div class = "col-md-4 col-sm-6 col-xs-12 event">
              <a  href="<?php the_permalink(); ?>"><img class = "event_img" src = "<?php the_field('featured_image');?>"/></a>
              <h3 style="color:white;"><?php the_title();?></h3>
              <p style="color:white;"><?php the_field('time_frame');?></p>
            </div>
			<?php endwhile; endif; ?>
        </div>
		
      </div>
    </div>
</div>


<!-- ______________________partners______________________ -->
<div id="id07" class="modal">
  <div class="modal-part animate" action="/action_page.php">
	  <span  class="close"><p onclick="document.getElementById('id07').style.display='none'">&times;</p></span>
    <div class="container partner_cont">
     
      <div class = "scroll">
        <div class = "container">
			<?php $partner = new WP_Query( array( 'post_type' => 'partners'));
          if ( $partner->have_posts() ) : while ( $partner->have_posts() ) : $partner->the_post();
          ?>
		<div class = "row partner_section">	
			<div class = "col-md-6 col-sm-12 partner_logo">
			<a href = "<?php the_field('partner_link'); ?>" target ="_blank"><img class = "partner_img" src = "<?php the_field('logo'); ?>"/></a>	
			</div>
			<div class = "col-md-6 col-sm-12 partner_description">
          <p> <?php the_field('partner_description'); ?> </p>
			</div>		
		</div>
			<?php endwhile; else : ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
</div>
<?php get_footer(); ?>
