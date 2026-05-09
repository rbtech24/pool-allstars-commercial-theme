<?php get_header(); ?>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"LocalBusiness","name":"<?php echo esc_js( pasc_company_name() ); ?> — Space Coast","areaServed":{"@type":"AdministrativeArea","name":"Space Coast, FL"},"telephone":"+1-833-968-4888","url":"<?php echo esc_url( get_permalink() ); ?>"}</script>
<?php pasc_breadcrumbs( array( array( 'label' => 'Service area', 'url' => home_url( '/service-area/' ) ), array( 'label' => 'Space Coast' ) ) ); ?>

<section class="page-hero"><div class="wrap"><span class="eyebrow">Space Coast</span><h1>Commercial pool service <span class="red">across the Space Coast.</span></h1><p>Brevard and Indian River counties. From Cocoa Beach hotels to Vero Beach condos to Melbourne fitness facilities — full commercial coverage along the Atlantic coast and inland communities.</p><div class="page-hero-ctas"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Request a proposal</a><a href="tel:<?php echo esc_attr( pasc_phone_tel() ); ?>" class="btn btn-soft">Call <?php echo esc_html( pasc_phone_display() ); ?></a></div></div></section>

<section class="regions"><div class="wrap"><div class="section-head center"><span class="eyebrow">Counties we serve</span><h2>Space Coast <span class="red">coverage.</span></h2></div><div class="region-grid">
<div class="region-card"><h3>Brevard County</h3><p class="meta">Melbourne, Cocoa, Cocoa Beach, Titusville, Palm Bay, Viera.</p><div class="cities"><span class="city-chip">Melbourne</span><span class="city-chip">Cocoa Beach</span><span class="city-chip">Titusville</span><span class="city-chip">Palm Bay</span><span class="city-chip">Viera</span></div></div>
<div class="region-card"><h3>Indian River County</h3><p class="meta">Vero Beach, Sebastian, Fellsmere — coastal &amp; inland.</p><div class="cities"><span class="city-chip">Vero Beach</span><span class="city-chip">Sebastian</span><span class="city-chip">Fellsmere</span></div></div>
</div></div></section>

<?php pasc_render_geo_section( 'space-coast' ); ?>
<?php get_template_part( 'template-parts/industries-grid' ); ?>
<?php pasc_render_testimonials_section( 'space-coast', 'What customers say', 'Trusted by Space Coast property managers' ); ?>
<?php $pasc_cta_heading = 'Space Coast property?'; $pasc_cta_heading_red = "Let's talk."; get_template_part( 'template-parts/cta-final' ); ?>
<?php pasc_last_updated(); ?>
<?php get_footer(); ?>
