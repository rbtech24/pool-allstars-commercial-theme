<?php
/**
 * Default page template (used when no slug-specific template exists)
 * @package PoolAllStarsCommercial
 */
get_header(); ?>

<section class="page-hero">
  <div class="wrap">
    <h1><?php the_title(); ?></h1>
  </div>
</section>

<section class="legal">
  <div class="wrap">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>
  </div>
</section>

<?php get_footer(); ?>
