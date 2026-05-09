<?php get_header(); ?>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"LocalBusiness","name":"<?php echo esc_js( pasc_company_name() ); ?> — Tampa Bay","areaServed":{"@type":"AdministrativeArea","name":"Tampa Bay, FL"},"telephone":"+1-800-394-7665","url":"<?php echo esc_url( get_permalink() ); ?>"}</script>
<?php pasc_breadcrumbs( array( array( 'label' => 'Service area', 'url' => home_url( '/service-area/' ) ), array( 'label' => 'Tampa Bay' ) ) ); ?>

<section class="page-hero"><div class="wrap"><span class="eyebrow">Tampa Bay</span><h1>Commercial pool service <span class="red">across Tampa Bay.</span></h1><p>Six counties. Hundreds of HOAs, hotels, fitness facilities, condo towers. We've serviced Tampa Bay since 2009 — it's where we started.</p><div class="page-hero-ctas"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Request a proposal</a><a href="tel:<?php echo esc_attr( pasc_phone_tel() ); ?>" class="btn btn-soft">Call <?php echo esc_html( pasc_phone_display() ); ?></a></div></div></section>

<section class="regions"><div class="wrap"><div class="section-head center"><span class="eyebrow">Counties we serve</span><h2>Tampa Bay <span class="red">coverage.</span></h2></div><div class="region-grid">
<div class="region-card"><h3>Hillsborough County</h3><p class="meta">Tampa, Brandon, Riverview, Westchase, Carrollwood, Plant City.</p><div class="cities"><span class="city-chip">Tampa</span><span class="city-chip">Brandon</span><span class="city-chip">Riverview</span><span class="city-chip">Westchase</span><span class="city-chip">Carrollwood</span></div></div>
<div class="region-card"><h3>Pinellas County</h3><p class="meta">St. Petersburg, Clearwater, Largo, Dunedin, Palm Harbor.</p><div class="cities"><span class="city-chip">St. Petersburg</span><span class="city-chip">Clearwater</span><span class="city-chip">Largo</span><span class="city-chip">Dunedin</span><span class="city-chip">Palm Harbor</span></div></div>
<div class="region-card"><h3>Pasco County</h3><p class="meta">Wesley Chapel, Land O' Lakes, Trinity, New Port Richey.</p><div class="cities"><span class="city-chip">Wesley Chapel</span><span class="city-chip">Land O' Lakes</span><span class="city-chip">Trinity</span><span class="city-chip">New Port Richey</span></div></div>
<div class="region-card"><h3>Hernando County</h3><p class="meta">Spring Hill, Brooksville, Weeki Wachee.</p><div class="cities"><span class="city-chip">Spring Hill</span><span class="city-chip">Brooksville</span><span class="city-chip">Weeki Wachee</span></div></div>
<div class="region-card"><h3>Manatee County</h3><p class="meta">Bradenton, Palmetto, Lakewood Ranch, Parrish.</p><div class="cities"><span class="city-chip">Bradenton</span><span class="city-chip">Palmetto</span><span class="city-chip">Lakewood Ranch</span><span class="city-chip">Parrish</span></div></div>
<div class="region-card"><h3>Sarasota County</h3><p class="meta">Sarasota, Venice, North Port, Englewood.</p><div class="cities"><span class="city-chip">Sarasota</span><span class="city-chip">Venice</span><span class="city-chip">North Port</span><span class="city-chip">Englewood</span></div></div>
</div></div></section>

<?php get_template_part( 'template-parts/industries-grid' ); ?>
<?php $pasc_cta_heading = 'Tampa Bay property?'; $pasc_cta_heading_red = "Let's talk."; get_template_part( 'template-parts/cta-final' ); ?>
<?php get_footer(); ?>
