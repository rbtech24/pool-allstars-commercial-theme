<?php
/**
 * 404 template
 * @package PoolAllStarsCommercial
 */
get_header(); ?>

<section class="page-hero">
  <div class="wrap">
    <span class="eyebrow">404</span>
    <h1>Page <span class="red">not found.</span></h1>
    <p>The page you were looking for doesn't exist or has moved.</p>
    <div class="page-hero-ctas">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-red">Back to home</a>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-soft">Contact us</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
