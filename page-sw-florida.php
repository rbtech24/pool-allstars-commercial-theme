<?php get_header(); ?>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"LocalBusiness","name":"<?php echo esc_js( pasc_company_name() ); ?> — Southwest Florida","areaServed":{"@type":"AdministrativeArea","name":"Southwest Florida"},"telephone":"+1-833-968-4888","url":"<?php echo esc_url( get_permalink() ); ?>"}</script>
<?php pasc_breadcrumbs( array( array( 'label' => 'Service area', 'url' => home_url( '/service-area/' ) ), array( 'label' => 'SW Florida' ) ) ); ?>

<section class="page-hero"><div class="wrap"><span class="eyebrow">Southwest Florida</span><h1>Commercial pool service <span class="red">across SW Florida.</span></h1><p>Collier and Lee counties. High-end gulf-coast resorts, golf-community condos, beachfront hotels, private clubs. Naples to Bonita Springs to Marco Island — built for the standards SW Florida demands.</p><div class="page-hero-ctas"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Request a proposal</a><a href="tel:<?php echo esc_attr( pasc_phone_tel() ); ?>" class="btn btn-soft">Call <?php echo esc_html( pasc_phone_display() ); ?></a></div></div></section>

<section class="regions"><div class="wrap"><div class="section-head center"><span class="eyebrow">Counties we serve</span><h2>SW Florida <span class="red">coverage.</span></h2></div><div class="region-grid">
<div class="region-card"><h3>Collier County</h3><p class="meta">Naples, Marco Island, Immokalee, Estero (south of Bonita).</p><div class="cities"><span class="city-chip">Naples</span><span class="city-chip">Marco Island</span><span class="city-chip">Bonita Springs</span><span class="city-chip">Immokalee</span></div></div>
<div class="region-card"><h3>Lee County</h3><p class="meta">Fort Myers, Cape Coral, Estero, Sanibel, Captiva.</p><div class="cities"><span class="city-chip">Fort Myers</span><span class="city-chip">Cape Coral</span><span class="city-chip">Estero</span><span class="city-chip">Sanibel</span><span class="city-chip">Captiva</span></div></div>
</div></div></section>

<?php pasc_render_geo_section( 'sw-florida' ); ?>
<?php get_template_part( 'template-parts/industries-grid' ); ?>
<?php pasc_render_testimonials_section( 'sw-florida', 'What customers say', 'Trusted by SW Florida property managers' ); ?>
<?php $pasc_cta_heading = 'SW Florida property?'; $pasc_cta_heading_red = "Let's talk."; get_template_part( 'template-parts/cta-final' ); ?>
<?php pasc_last_updated(); ?>
<?php get_footer(); ?>
