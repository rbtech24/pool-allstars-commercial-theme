<?php get_header(); ?>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Service","serviceType":"Weekly Commercial Pool Maintenance","provider":{"@type":"LocalBusiness","name":"<?php echo esc_js( pasc_company_name() ); ?>","telephone":"+1-833-968-4888"},"areaServed":"Florida","url":"<?php echo esc_url( get_permalink() ); ?>"}</script>
<?php pasc_breadcrumbs( array( array( 'label' => 'Services', 'url' => home_url( '/services/' ) ), array( 'label' => 'Weekly maintenance' ) ) ); ?>

<section class="page-hero"><div class="wrap"><span class="eyebrow">Service</span><h1>Weekly commercial <span class="red">pool maintenance.</span></h1><p>The base of every commercial contract. A 12-point checklist run on the same day, every week, by the same dedicated technician — and a same-day photo-confirmed report sent to your account.</p><div class="page-hero-ctas"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Request a proposal</a><a href="tel:<?php echo esc_attr( pasc_phone_tel() ); ?>" class="btn btn-soft">Call <?php echo esc_html( pasc_phone_display() ); ?></a></div></div></section>

<section class="included-section"><div class="wrap"><div class="section-head center"><span class="eyebrow">12-point checklist</span><h2>What's done <span class="red">every visit.</span></h2></div><div class="included-grid">
<div class="inc-card"><div class="num">01</div><div><h4>Water chemistry</h4><p>FAC, pH, alkalinity, calcium, CYA, TDS — tested and balanced.</p></div></div>
<div class="inc-card"><div class="num">02</div><div><h4>Skim &amp; surface clean</h4><p>Leaves, pollen, debris removed from full water surface.</p></div></div>
<div class="inc-card"><div class="num">03</div><div><h4>Wall &amp; tile brushing</h4><p>Walls, steps, waterline tile to prevent algae &amp; scale.</p></div></div>
<div class="inc-card"><div class="num">04</div><div><h4>Vacuum pool floor</h4><p>Manual or automatic vacuum to remove sediment &amp; debris.</p></div></div>
<div class="inc-card"><div class="num">05</div><div><h4>Empty skimmer baskets</h4><p>Skimmer + pump baskets cleared for proper circulation.</p></div></div>
<div class="inc-card"><div class="num">06</div><div><h4>Filter pressure check</h4><p>PSI logged. Backwash or filter clean scheduled when needed.</p></div></div>
<div class="inc-card"><div class="num">07</div><div><h4>Equipment inspection</h4><p>Pump, heater, salt cell, automation, plumbing visual check.</p></div></div>
<div class="inc-card"><div class="num">08</div><div><h4>Salt cell inspection</h4><p>Cell condition, salinity reading, output verified (saltwater only).</p></div></div>
<div class="inc-card"><div class="num">09</div><div><h4>Chemical dosing</h4><p>Sanitizer, stabilizer, balancers added per chemistry readings.</p></div></div>
<div class="inc-card"><div class="num">10</div><div><h4>Deck &amp; coping check</h4><p>Hazards, drains, ladders inspected for guest safety.</p></div></div>
<div class="inc-card"><div class="num">11</div><div><h4>Same-day photo report</h4><p>GPS arrival, time on site, readings, before/after photos.</p></div></div>
<div class="inc-card"><div class="num">12</div><div><h4>Issue flagging</h4><p>Anything beyond weekly service flagged with photo + recommendation.</p></div></div>
</div></div></section>

<?php get_template_part( 'template-parts/industries-grid' ); ?>
<?php get_template_part( 'template-parts/areas-grid' ); ?>
<?php $pasc_cta_heading = 'Predictable weekly service.'; $pasc_cta_heading_red = 'Photo-confirmed every time.'; get_template_part( 'template-parts/cta-final' ); ?>
<?php get_footer(); ?>
