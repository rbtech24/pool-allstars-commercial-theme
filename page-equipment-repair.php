<?php get_header(); ?>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Service","serviceType":"Commercial Pool Equipment Repair","provider":{"@type":"LocalBusiness","name":"<?php echo esc_js( pasc_company_name() ); ?>","telephone":"+1-800-394-7665"},"areaServed":"Florida","url":"<?php echo esc_url( get_permalink() ); ?>"}</script>
<?php pasc_breadcrumbs( array( array( 'label' => 'Services', 'url' => home_url( '/services/' ) ), array( 'label' => 'Equipment repair' ) ) ); ?>

<section class="page-hero"><div class="wrap"><span class="eyebrow">Service</span><h1>Commercial pool <span class="red">equipment repair.</span></h1><p>Pumps, motors, salt cells, heaters, automation, plumbing. Same-day diagnosis, most repairs completed within 48 hours. In-house techs — no subcontracting, no finger-pointing when something breaks.</p><div class="page-hero-ctas"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Request a proposal</a><a href="tel:<?php echo esc_attr( pasc_phone_tel() ); ?>" class="btn btn-soft">Call <?php echo esc_html( pasc_phone_display() ); ?></a></div></div></section>

<section class="two-col"><div class="wrap"><div class="two-col-grid">
<div><h2>What we <span class="red">repair.</span></h2><p>Every commercial pool eventually has equipment fail. The question isn't if — it's how fast you can get it back online without affecting guests, members, or residents.</p><ul><li>Variable-speed pumps &amp; motors (Pentair, Hayward, Jandy)</li><li>Salt chlorine generators &amp; cells</li><li>Heaters (gas, heat pump, electric)</li><li>Automation systems (IntelliCenter, OmniLogic, Aqualink)</li><li>Filter systems (DE, cartridge, sand)</li><li>Plumbing &amp; valve replacement</li><li>ADA pool lifts &amp; accessibility equipment</li></ul></div>
<div><h2>Why <span class="red">in-house</span> matters.</h2><p>Most pool service companies subcontract repairs. That means slower diagnosis, finger-pointing when work is bad, no warranty, and surprise bills.</p><p>Our repair techs are W-2 employees. The tech who diagnosed the issue is the tech who fixes it. Warranty work is on us, not a third party.</p></div>
</div></div></section>

<?php get_template_part( 'template-parts/industries-grid' ); ?>
<?php get_template_part( 'template-parts/areas-grid' ); ?>
<?php $pasc_cta_heading = 'Equipment down?'; $pasc_cta_heading_red = 'Get it back online fast.'; $pasc_cta_body = '24/7 emergency dispatch for contract customers.'; get_template_part( 'template-parts/cta-final' ); ?>
<?php get_footer(); ?>
