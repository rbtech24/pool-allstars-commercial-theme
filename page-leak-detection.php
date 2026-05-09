<?php get_header(); ?>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Service","serviceType":"Commercial Pool Leak Detection","provider":{"@type":"LocalBusiness","name":"<?php echo esc_js( pasc_company_name() ); ?>","telephone":"+1-800-394-7665"},"areaServed":"Florida","url":"<?php echo esc_url( get_permalink() ); ?>"}</script>
<?php pasc_breadcrumbs( array( array( 'label' => 'Services', 'url' => home_url( '/services/' ) ), array( 'label' => 'Leak detection' ) ) ); ?>

<section class="page-hero"><div class="wrap"><span class="eyebrow">Service</span><h1>Pool leak <span class="red">detection.</span></h1><p>Pressure testing, dye testing, electronic detection. Pinpoint structural &amp; plumbing leaks without destructive digging — before they undermine the deck, the equipment pad, or your water bill.</p><div class="page-hero-ctas"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Request a proposal</a><a href="tel:<?php echo esc_attr( pasc_phone_tel() ); ?>" class="btn btn-soft">Call <?php echo esc_html( pasc_phone_display() ); ?></a></div></div></section>

<section class="two-col"><div class="wrap"><div class="two-col-grid">
<div><h2>How we <span class="red">find leaks.</span></h2><ul><li><strong>Bucket test</strong> — confirms a leak vs. evaporation</li><li><strong>Dye testing</strong> — finds shell &amp; fitting leaks</li><li><strong>Pressure testing</strong> — isolates plumbing line leaks</li><li><strong>Electronic detection</strong> — pinpoints leak location with sensitive microphones</li><li><strong>Visual inspection</strong> — equipment pad, valves, returns, skimmers</li></ul><p>Reports include leak location, severity, and repair recommendation with cost estimate.</p></div>
<div><h2>Why act <span class="red">fast.</span></h2><p>A small pool leak — even 1/4 inch per day — adds up to ~600 gallons a month. That's wasted water, wasted heat, wasted chemicals.</p><p>Worse: water under the deck or equipment pad can undermine concrete and damage automation wiring over time. Most leaks we find can be repaired without draining the pool.</p></div>
</div></div></section>

<?php get_template_part( 'template-parts/areas-grid' ); ?>
<?php $pasc_cta_heading = 'Suspect a leak?'; $pasc_cta_heading_red = 'Find it before it grows.'; get_template_part( 'template-parts/cta-final' ); ?>
<?php get_footer(); ?>
