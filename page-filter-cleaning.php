<?php get_header(); ?>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Service","serviceType":"Commercial Pool Filter Cleaning","provider":{"@type":"LocalBusiness","name":"<?php echo esc_js( pasc_company_name() ); ?>","telephone":"+1-833-968-4888"},"areaServed":"Florida","url":"<?php echo esc_url( get_permalink() ); ?>"}</script>
<?php pasc_breadcrumbs( array( array( 'label' => 'Services', 'url' => home_url( '/services/' ) ), array( 'label' => 'Filter cleaning' ) ) ); ?>

<section class="page-hero"><div class="wrap"><span class="eyebrow">Service</span><h1>Pool filter <span class="red">cleaning &amp; service.</span></h1><p>DE, cartridge, sand. Scheduled by filter type, bather load, and PSI readings — not on a generic calendar. Cleaned, inspected, logged on every service.</p><div class="page-hero-ctas"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Request a proposal</a><a href="tel:<?php echo esc_attr( pasc_phone_tel() ); ?>" class="btn btn-soft">Call <?php echo esc_html( pasc_phone_display() ); ?></a></div></div></section>

<section class="two-col"><div class="wrap"><div class="two-col-grid">
<div><h2>By <span class="red">filter type.</span></h2><ul><li><strong>DE filters</strong> — backwash + recharge with fresh DE per usage</li><li><strong>Cartridge filters</strong> — pulled, soaked, pressure-washed, replaced when worn</li><li><strong>Sand filters</strong> — backwash on schedule, sand replaced every 5–7 years</li><li><strong>Regenerative DE</strong> — full bump-and-rinse cycle service</li></ul><p>Each filter type has its own service interval based on water clarity, PSI rise, and bather load.</p></div>
<div><h2>Why <span class="red">scheduling matters.</span></h2><p>Most commercial pools either over-service their filters (wasting money + filter media) or under-service (poor clarity, increased chlorine demand, bather complaints).</p><p>We measure PSI rise above clean baseline and trigger cleaning at the correct threshold. The result: cleanest possible water, longest filter life, lowest cost per visit.</p></div>
</div></div></section>

<?php get_template_part( 'template-parts/industries-grid' ); ?>
<?php get_template_part( 'template-parts/areas-grid' ); ?>
<?php $pasc_cta_heading = 'Pool filtration that'; $pasc_cta_heading_red = 'just works.'; get_template_part( 'template-parts/cta-final' ); ?>
<?php pasc_last_updated(); ?>
<?php get_footer(); ?>
