<?php get_header(); ?>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Service","serviceType":"Commercial Green Pool Recovery","provider":{"@type":"LocalBusiness","name":"<?php echo esc_js( pasc_company_name() ); ?>","telephone":"+1-833-968-4888"},"areaServed":"Florida","url":"<?php echo esc_url( get_permalink() ); ?>"}</script>
<?php pasc_breadcrumbs( array( array( 'label' => 'Services', 'url' => home_url( '/services/' ) ), array( 'label' => 'Green pool recovery' ) ) ); ?>

<section class="page-hero"><div class="wrap"><span class="eyebrow">Emergency service</span><h1>Green pool? <span class="red">Swim-ready in 3–7 days.</span></h1><p>After a storm. After a pump failure. After the season-opening surprise. We restore algae-clouded commercial pools to crystal-clear, balanced, swim-ready water — fast, with photo-documented progress for stakeholders.</p><div class="page-hero-ctas"><a href="tel:<?php echo esc_attr( pasc_phone_tel() ); ?>" class="btn btn-red">Call <?php echo esc_html( pasc_phone_display() ); ?></a><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-soft">Request a proposal</a></div></div></section>

<section class="two-col"><div class="wrap"><div class="two-col-grid">
<div><h2>What <span class="red">recovery</span> involves.</h2><ul><li>Visual + chemistry assessment, photo baseline</li><li>Filter inspection (often the root cause)</li><li>Shock chemistry to oxidize algae</li><li>Algaecide treatment for spot-resistant strains</li><li>Continuous filtration until clarity returns</li><li>Daily brushing &amp; vacuuming during recovery</li><li>Filter media replacement if heavily loaded</li><li>Final balance &amp; chemistry stabilization</li></ul></div>
<div><h2>Why <span class="red">3–7 days?</span></h2><p>Recovery time depends on pool size, severity, equipment condition, and bather demand for reopening. Mild green: 3 days. Moderate: 5 days. Severe blackish-green: 7 days. Worst-case requiring full drain: 10–14 days.</p><p>After recovery, we strongly recommend continuing on weekly service to prevent recurrence — most green pool calls trace back to lapsed maintenance.</p></div>
</div></div></section>

<?php get_template_part( 'template-parts/industries-grid' ); ?>
<?php get_template_part( 'template-parts/areas-grid' ); ?>
<?php $pasc_cta_heading = 'Green pool?'; $pasc_cta_heading_red = 'Call now.'; $pasc_cta_body = 'Same-day assessment. Recovery starts the same day or next-day for most properties.'; get_template_part( 'template-parts/cta-final' ); ?>
<?php get_footer(); ?>
