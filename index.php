<?php get_header(); ?>

<?php
$query_args = array(
  'post_per_page' => '8',
  'paged' => get_query_var('paged') ? : 1
);
?>
<?php wp_reset_query(); $query = new WP_Query($query_args); ?>
<?php if($query->have_posts()) { while ($query->have_posts()) { $query->the_post(); ?>
<article>
  <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail(array(400, 250)); ?>
  </a>
  <h1><a href="<?php the_permalink(); ?>">MRNKO WordPress Starter</a></h1>
  <p><?php the_author(); ?> - <?php echo get_the_date('j F Y'); ?></p>
  <p>
    <?php the_excerpt(); ?>
  </p>
</article>
<?php } ?>
<?php } ?>

<?php get_footer(); ?>