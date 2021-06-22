<?php get_header(); ?>

<?php if(have_posts()): while (have_posts()): the_post();?>

<div class="container">
<div class="row justify-content-center">
<div class="col-md-8 col-sm-10 col-11 work_descr">
<?php the_content();?>
</div>
</div>
</div>

<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>