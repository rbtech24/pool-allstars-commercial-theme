<?php get_header(); ?>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"LocalBusiness","name":"<?php echo esc_js( pasc_company_name() ); ?> — South Florida","areaServed":{"@type":"AdministrativeArea","name":"South Florida"},"telephone":"+1-800-394-7665","url":"<?php echo esc_url( get_permalink() ); ?>"}</script>
<?php pasc_breadcrumbs( array( array( 'label' => 'Service area', 'url' => home_url( '/service-area/' ) ), array( 'label' => 'South Florida' ) ) ); ?>

<section class="page-hero"><div class="wrap"><span class="eyebrow">South Florida</span><h1>Commercial pool service <span class="red">across South Florida.</span></h1><p>Miami-Dade, Broward, Palm Beach. Some of the most demanding commercial pool environments in the country — high-rise condos, beachfront resorts, private clubs.</p><div class="page-hero-ctas"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Request a proposal</a><a href="tel:<?php echo esc_attr( pasc_phone_tel() ); ?>" class="btn btn-soft">Call <?php echo esc_html( pasc_phone_display() ); ?></a></div></div></section>

<section class="regions"><div class="wrap"><div class="section-head center"><span class="eyebrow">Counties we serve</span><h2>South Florida <span class="red">coverage.</span></h2></div><div class="region-grid">
<div class="region-card"><h3>Miami-Dade</h3><p class="meta">Miami, Miami Beach, Coral Gables, Aventura, Doral, Kendall.</p><div class="cities"><span class="city-chip">Miami</span><span class="city-chip">Miami Beach</span><span class="city-chip">Coral Gables</span><span class="city-chip">Aventura</span><span class="city-chip">Doral</span></div></div>
<div class="region-card"><h3>Broward County</h3><p class="meta">Fort Lauderdale, Hollywood, Pompano Beach, Coral Springs.</p><div class="cities"><span class="city-chip">Fort Lauderdale</span><span class="city-chip">Hollywood</span><span class="city-chip">Pompano Beach</span><span class="city-chip">Coral Springs</span><span class="city-chip">Plantation</span></div></div>
<div class="region-card"><h3>Palm Beach</h3><p class="meta">West Palm Beach, Boca Raton, Boynton Beach, Delray Beach.</p><div class="cities"><span class="city-chip">West Palm Beach</span><span class="city-chip">Boca Raton</span><span class="city-chip">Boynton Beach</span><span class="city-chip">Delray Beach</span></div></div>
</div></div></section>

<?php get_template_part( 'template-parts/industries-grid' ); ?>
<?php $pasc_cta_heading = 'South Florida property?'; $pasc_cta_heading_red = "Let's talk."; get_template_part( 'template-parts/cta-final' ); ?>
<?php get_footer(); ?>
