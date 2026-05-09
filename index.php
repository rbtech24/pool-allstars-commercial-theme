<?php
/**
 * Default fallback template
 * @package PoolAllStarsCommercial
 */
get_header(); ?>

<section class="page-hero">
  <div class="wrap">
    <h1><?php single_post_title(); ?></h1>
  </div>
</section>

<section class="legal">
  <div class="wrap">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>
  </div>
</section>

<?php get_footer(); ?>
