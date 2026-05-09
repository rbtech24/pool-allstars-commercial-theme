<?php get_header(); ?>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Service","serviceType":"Commercial Pool Water Chemistry Management","provider":{"@type":"LocalBusiness","name":"<?php echo esc_js( pasc_company_name() ); ?>","telephone":"+1-833-968-4888"},"areaServed":"Florida","url":"<?php echo esc_url( get_permalink() ); ?>"}</script>
<?php pasc_breadcrumbs( array( array( 'label' => 'Services', 'url' => home_url( '/services/' ) ), array( 'label' => 'Water chemistry' ) ) ); ?>

<section class="page-hero"><div class="wrap"><span class="eyebrow">Service</span><h1>Commercial pool <span class="red">water chemistry.</span></h1><p>Sanitizer, pH, alkalinity, calcium, cyanuric acid, TDS — balanced to Florida health-code standards every visit. Logged in compliance format. Audit-ready when the inspector arrives unannounced.</p><div class="page-hero-ctas"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Request a proposal</a><a href="tel:<?php echo esc_attr( pasc_phone_tel() ); ?>" class="btn btn-soft">Call <?php echo esc_html( pasc_phone_display() ); ?></a></div></div></section>

<section class="two-col"><div class="wrap"><div class="two-col-grid">
<div><h2>What we <span class="red">test &amp; balance.</span></h2><ul><li>Free Available Chlorine (FAC) — 1.0–10.0 ppm per FL code</li><li>Combined chlorine — kept under 0.4 ppm to prevent eye irritation</li><li>pH — 7.2–7.8 target range</li><li>Total alkalinity — 80–120 ppm for pH stability</li><li>Calcium hardness — 200–400 ppm to protect plaster</li><li>Cyanuric acid (CYA) — 30–60 ppm to protect chlorine from UV</li><li>Total dissolved solids (TDS) — monitored for replacement triggers</li><li>ORP — for live sanitation efficiency tracking</li></ul></div>
<div><h2>Why <span class="red">documentation</span> matters.</h2><p>Florida Administrative Code 64E-9 requires daily testing logs for public pools. We provide the readings in the format your facility's compliance team needs — exportable to CSV, formatted for binders, or pushed direct to your facilities management software.</p><p>When the health inspector arrives, your log book matches what they're looking for.</p></div>
</div></div></section>

<?php get_template_part( 'template-parts/industries-grid' ); ?>
<?php get_template_part( 'template-parts/areas-grid' ); ?>
<?php $pasc_cta_heading = 'Pool chemistry that'; $pasc_cta_heading_red = 'passes inspection.'; get_template_part( 'template-parts/cta-final' ); ?>
<?php pasc_last_updated(); ?>
<?php get_footer(); ?>
