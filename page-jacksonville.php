<?php get_header(); ?>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"LocalBusiness","name":"<?php echo esc_js( pasc_company_name() ); ?> — Jacksonville","areaServed":{"@type":"AdministrativeArea","name":"Jacksonville, FL"},"telephone":"+1-833-968-4888","url":"<?php echo esc_url( get_permalink() ); ?>"}</script>
<?php pasc_breadcrumbs( array( array( 'label' => 'Service area', 'url' => home_url( '/service-area/' ) ), array( 'label' => 'Jacksonville' ) ) ); ?>

<section class="page-hero"><div class="wrap"><span class="eyebrow">Jacksonville &amp; NE Florida</span><h1>Commercial pool service <span class="red">across Jacksonville.</span></h1><p>Duval, St. Johns, Nassau counties. Beach hotels, downtown condo towers, golf community country clubs, vacation rentals, fitness facilities. Northeast Florida's commercial pool service.</p><div class="page-hero-ctas"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Request a proposal</a><a href="tel:<?php echo esc_attr( pasc_phone_tel() ); ?>" class="btn btn-soft">Call <?php echo esc_html( pasc_phone_display() ); ?></a></div></div></section>

<section class="regions"><div class="wrap"><div class="section-head center"><span class="eyebrow">Counties we serve</span><h2>Jacksonville area <span class="red">coverage.</span></h2></div><div class="region-grid">
<div class="region-card"><h3>Duval County</h3><p class="meta">Jacksonville, Jacksonville Beach, Atlantic Beach, Neptune Beach.</p><div class="cities"><span class="city-chip">Jacksonville</span><span class="city-chip">Jacksonville Beach</span><span class="city-chip">Atlantic Beach</span><span class="city-chip">Neptune Beach</span></div></div>
<div class="region-card"><h3>St. Johns County</h3><p class="meta">St. Augustine, Ponte Vedra Beach, World Golf Village, Nocatee.</p><div class="cities"><span class="city-chip">St. Augustine</span><span class="city-chip">Ponte Vedra Beach</span><span class="city-chip">World Golf Village</span><span class="city-chip">Nocatee</span></div></div>
<div class="region-card"><h3>Nassau County</h3><p class="meta">Fernandina Beach, Amelia Island, Yulee.</p><div class="cities"><span class="city-chip">Fernandina Beach</span><span class="city-chip">Amelia Island</span><span class="city-chip">Yulee</span></div></div>
</div></div></section>

<?php pasc_render_geo_section( 'jacksonville' ); ?>
<?php get_template_part( 'template-parts/industries-grid' ); ?>
<?php pasc_render_testimonials_section( 'jacksonville', 'What customers say', 'Trusted by Northeast Florida property managers' ); ?>
<?php $pasc_cta_heading = 'Jacksonville property?'; $pasc_cta_heading_red = "Let's talk."; get_template_part( 'template-parts/cta-final' ); ?>
<?php pasc_last_updated(); ?>
<?php get_footer(); ?>
