<?php get_header(); ?>

<div>
  <?php the_post_thumbnail(array(400, 250)); ?>
  <h1>MRNKO WordPress Starter</h1>
  <p><?php the_author(); ?> - <?php echo get_the_date('j F Y'); ?></p>
  <p>
    <?php the_content(); ?>
  </p>
</div>

<?php get_footer(); ?>