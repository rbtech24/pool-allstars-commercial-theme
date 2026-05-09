<?php get_header(); ?>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Service","serviceType":"Commercial Pool Acid Washing","provider":{"@type":"LocalBusiness","name":"<?php echo esc_js( pasc_company_name() ); ?>","telephone":"+1-800-394-7665"},"areaServed":"Florida","url":"<?php echo esc_url( get_permalink() ); ?>"}</script>
<?php pasc_breadcrumbs( array( array( 'label' => 'Services', 'url' => home_url( '/services/' ) ), array( 'label' => 'Acid washing' ) ) ); ?>

<section class="page-hero"><div class="wrap"><span class="eyebrow">Service</span><h1>Pool acid washing &amp; <span class="red">plaster restoration.</span></h1><p>Restore stained, dingy, or algae-etched plaster surfaces. Off-peak scheduling so property operations are not disrupted. Refurbished plaster looks like new and lasts another 5+ years.</p><div class="page-hero-ctas"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Request a proposal</a><a href="tel:<?php echo esc_attr( pasc_phone_tel() ); ?>" class="btn btn-soft">Call <?php echo esc_html( pasc_phone_display() ); ?></a></div></div></section>

<section class="two-col"><div class="wrap"><div class="two-col-grid">
<div><h2>What acid wash <span class="red">accomplishes.</span></h2><ul><li>Removes mineral staining (iron, copper, manganese)</li><li>Eliminates ground-in algae &amp; biofilm</li><li>Refreshes plaster color &amp; brightness</li><li>Smooths minor surface roughness</li><li>Extends plaster life 3–5+ years vs. resurfacing</li></ul><p>Best for plaster pools 8–15 years old that aren't yet ready for full resurface.</p></div>
<div><h2>How we <span class="red">schedule it.</span></h2><p>Acid washing requires draining the pool — meaning 3–5 days of pool downtime depending on size and refill rate. We schedule during off-peak periods (winter for hotels, off-season for vacation rentals, after-event windows for clubs) to minimize impact.</p><p>Full process: drain → assess plaster → acid wash → neutralize → rinse → refill → balance → reopen.</p></div>
</div></div></section>

<?php get_template_part( 'template-parts/industries-grid' ); ?>
<?php get_template_part( 'template-parts/areas-grid' ); ?>
<?php $pasc_cta_heading = 'Stained plaster?'; $pasc_cta_heading_red = "Restore, don't resurface."; get_template_part( 'template-parts/cta-final' ); ?>
<?php get_footer(); ?>
