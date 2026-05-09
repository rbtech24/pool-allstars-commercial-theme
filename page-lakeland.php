<?php get_header(); ?>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"LocalBusiness","name":"<?php echo esc_js( pasc_company_name() ); ?> — Lakeland","areaServed":{"@type":"AdministrativeArea","name":"Lakeland, FL"},"telephone":"+1-800-394-7665","url":"<?php echo esc_url( get_permalink() ); ?>"}</script>
<?php pasc_breadcrumbs( array( array( 'label' => 'Service area', 'url' => home_url( '/service-area/' ) ), array( 'label' => 'Lakeland' ) ) ); ?>

<section class="page-hero"><div class="wrap"><span class="eyebrow">Lakeland &amp; Polk County</span><h1>Commercial pool service <span class="red">across Lakeland.</span></h1><p>Polk County between Tampa and Orlando. Lakeland, Winter Haven, Auburndale, Bartow. 55+ communities, golf course HOAs, vacation home portfolios, hotel pools — full commercial coverage in the I-4 corridor.</p><div class="page-hero-ctas"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Request a proposal</a><a href="tel:<?php echo esc_attr( pasc_phone_tel() ); ?>" class="btn btn-soft">Call <?php echo esc_html( pasc_phone_display() ); ?></a></div></div></section>

<section class="regions"><div class="wrap"><div class="section-head center"><span class="eyebrow">Cities we serve</span><h2>Polk County <span class="red">coverage.</span></h2></div><div class="region-grid">
<div class="region-card"><h3>Lakeland</h3><p class="meta">Downtown, North Lakeland, South Lakeland, Lake Hollingsworth area.</p><div class="cities"><span class="city-chip">Lakeland</span><span class="city-chip">Lakeland Highlands</span></div></div>
<div class="region-card"><h3>Winter Haven</h3><p class="meta">Chain of Lakes, downtown Winter Haven, retirement communities.</p><div class="cities"><span class="city-chip">Winter Haven</span><span class="city-chip">Eagle Lake</span></div></div>
<div class="region-card"><h3>Surrounding Polk</h3><p class="meta">Auburndale, Bartow, Lake Wales, Davenport — Disney-adjacent.</p><div class="cities"><span class="city-chip">Auburndale</span><span class="city-chip">Bartow</span><span class="city-chip">Lake Wales</span><span class="city-chip">Davenport</span></div></div>
</div></div></section>

<?php get_template_part( 'template-parts/industries-grid' ); ?>
<?php $pasc_cta_heading = 'Lakeland property?'; $pasc_cta_heading_red = "Let's talk."; get_template_part( 'template-parts/cta-final' ); ?>
<?php get_footer(); ?>
