<?php get_header(); ?>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"LocalBusiness","name":"<?php echo esc_js( pasc_company_name() ); ?> — Orlando","areaServed":{"@type":"AdministrativeArea","name":"Orlando, FL"},"telephone":"+1-800-394-7665","url":"<?php echo esc_url( get_permalink() ); ?>"}</script>
<?php pasc_breadcrumbs( array( array( 'label' => 'Service area', 'url' => home_url( '/service-area/' ) ), array( 'label' => 'Orlando' ) ) ); ?>

<section class="page-hero"><div class="wrap"><span class="eyebrow">Orlando &amp; Central FL</span><h1>Commercial pool service <span class="red">across Orlando.</span></h1><p>Disney-area resorts, vacation rental homes, master-planned community HOAs, condo-hotels, golf community country clubs. The Orlando market is a pool service market — and we're built for it.</p><div class="page-hero-ctas"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Request a proposal</a><a href="tel:<?php echo esc_attr( pasc_phone_tel() ); ?>" class="btn btn-soft">Call <?php echo esc_html( pasc_phone_display() ); ?></a></div></div></section>

<section class="regions"><div class="wrap"><div class="section-head center"><span class="eyebrow">Counties we serve</span><h2>Orlando area <span class="red">coverage.</span></h2></div><div class="region-grid">
<div class="region-card"><h3>Orange County</h3><p class="meta">Orlando, Winter Park, Lake Buena Vista, Doctor Phillips, Apopka.</p><div class="cities"><span class="city-chip">Orlando</span><span class="city-chip">Winter Park</span><span class="city-chip">Lake Buena Vista</span><span class="city-chip">Doctor Phillips</span><span class="city-chip">Apopka</span></div></div>
<div class="region-card"><h3>Osceola County</h3><p class="meta">Kissimmee, Celebration, St. Cloud — major vacation rental market.</p><div class="cities"><span class="city-chip">Kissimmee</span><span class="city-chip">Celebration</span><span class="city-chip">St. Cloud</span></div></div>
<div class="region-card"><h3>Seminole County</h3><p class="meta">Lake Mary, Sanford, Altamonte Springs, Heathrow.</p><div class="cities"><span class="city-chip">Lake Mary</span><span class="city-chip">Sanford</span><span class="city-chip">Altamonte Springs</span><span class="city-chip">Heathrow</span></div></div>
<div class="region-card"><h3>Lake County</h3><p class="meta">Clermont, Mount Dora, Tavares — golf community pools.</p><div class="cities"><span class="city-chip">Clermont</span><span class="city-chip">Mount Dora</span><span class="city-chip">Tavares</span></div></div>
</div></div></section>

<?php get_template_part( 'template-parts/industries-grid' ); ?>
<?php $pasc_cta_heading = 'Orlando property?'; $pasc_cta_heading_red = "Let's talk."; get_template_part( 'template-parts/cta-final' ); ?>
<?php get_footer(); ?>
