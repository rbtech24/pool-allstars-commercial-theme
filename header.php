<?php
/**
 * Header template (shared on every page)
 * @package PoolAllStarsCommercial
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- UTILITY BAR -->
<div class="utility">
  <div class="wrap">
    <div class="util-left">
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Request a proposal</a>
      <a href="<?php echo esc_url( home_url( '/service-area/' ) ); ?>">Service area</a>
    </div>
    <div class="util-right">
      <span>Mon–Sat · 7am–7pm</span>
      <a href="tel:<?php echo esc_attr( pasc_phone_tel() ); ?>"><strong><?php echo esc_html( pasc_phone_display() ); ?></strong></a>
    </div>
  </div>
</div>

<!-- HEADER -->
<header class="header">
  <div class="wrap">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand" aria-label="<?php echo esc_attr( pasc_company_name() ); ?>">
      <img src="<?php echo esc_url( PASC_URI . '/assets/images/logo-horizontal.png' ); ?>" alt="<?php echo esc_attr( pasc_company_name() ); ?>">
    </a>
    <nav class="primary" aria-label="Primary navigation">
      <a href="<?php echo esc_url( home_url( '/industries/' ) ); ?>"<?php echo ( is_page( 'industries' ) || ( is_page() && wp_get_post_parent_id( get_the_ID() ) == ( get_page_by_path( 'industries' ) ? get_page_by_path( 'industries' )->ID : 0 ) ) ) ? ' class="active"' : ''; ?>>Industries</a>
      <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"<?php echo ( is_page( 'services' ) || ( is_page() && wp_get_post_parent_id( get_the_ID() ) == ( get_page_by_path( 'services' ) ? get_page_by_path( 'services' )->ID : 0 ) ) ) ? ' class="active"' : ''; ?>>Services</a>
      <a href="<?php echo esc_url( home_url( '/service-area/' ) ); ?>"<?php echo ( is_page( 'service-area' ) || ( is_page() && wp_get_post_parent_id( get_the_ID() ) == ( get_page_by_path( 'service-area' ) ? get_page_by_path( 'service-area' )->ID : 0 ) ) ) ? ' class="active"' : ''; ?>>Service area</a>
      <a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"<?php echo ( is_page( 'resources' ) || ( is_page() && wp_get_post_parent_id( get_the_ID() ) == ( get_page_by_path( 'resources' ) ? get_page_by_path( 'resources' )->ID : 0 ) ) ) ? ' class="active"' : ''; ?>>Resources</a>
      <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"<?php echo is_page( 'about' ) ? ' class="active"' : ''; ?>>About</a>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"<?php echo is_page( 'contact' ) ? ' class="active"' : ''; ?>>Contact</a>
    </nav>
    <div class="header-cta">
      <div class="header-phone"><?php echo esc_html( pasc_phone_display() ); ?><small>Talk to a pro</small></div>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Request proposal</a>
    </div>
    <button class="mobile-toggle" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-menu">
      <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
    </button>
  </div>
</header>

<!-- MOBILE MENU -->
<div class="mobile-overlay" aria-hidden="true"></div>
<aside class="mobile-menu" id="mobile-menu" aria-label="Mobile navigation">
  <div class="mobile-menu-header">
    <img src="<?php echo esc_url( PASC_URI . '/assets/images/logo-horizontal.png' ); ?>" alt="<?php echo esc_attr( pasc_company_name() ); ?>">
    <button class="mobile-close" aria-label="Close menu">&times;</button>
  </div>
  <nav>
    <a href="<?php echo esc_url( home_url( '/industries/' ) ); ?>">Industries</a>
    <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a>
    <a href="<?php echo esc_url( home_url( '/service-area/' ) ); ?>">Service area</a>
    <a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>">Resources</a>
    <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a>
    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a>
  </nav>
  <div class="mobile-cta">
    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Request a proposal</a>
    <a href="tel:<?php echo esc_attr( pasc_phone_tel() ); ?>" class="phone-link"><span><?php echo esc_html( pasc_phone_display() ); ?><small>Talk to a pro</small></span></a>
  </div>
</aside>

<main id="main">
