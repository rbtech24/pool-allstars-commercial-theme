<?php get_header(); ?>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Service","serviceType":"Fitness Center and Aquatic Facility Pool Service","provider":{"@type":"LocalBusiness","name":"<?php echo esc_js( pasc_company_name() ); ?>","telephone":"+1-800-394-7665"},"areaServed":"Florida","url":"<?php echo esc_url( get_permalink() ); ?>"}</script>
<?php pasc_breadcrumbs( array( array( 'label' => 'Industries', 'url' => home_url( '/industries/' ) ), array( 'label' => 'Fitness & aquatic' ) ) ); ?>

<section class="industry-hero"><div class="wrap"><div class="industry-hero-grid">
  <div>
    <span class="eyebrow">Fitness &amp; aquatic</span>
    <h1>Pool service that <span class="red">passes inspection.</span></h1>
    <p class="lead">Lap pools, hot tubs, kids' pools, splash features. High bather load. Health department spot-checks. Member complaints about red eyes. Fitness facility pool service is a compliance discipline.</p>
    <div class="cta-row"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Request a proposal</a><a href="tel:<?php echo esc_attr( pasc_phone_tel() ); ?>" class="btn btn-soft">Call <?php echo esc_html( pasc_phone_display() ); ?></a></div>
  </div>
  <div class="industry-img" role="img" aria-label="Fitness pool service"></div>
</div></div></section>

<section class="two-col"><div class="wrap"><div class="two-col-grid">
  <div><h2>Built for high <span class="red">bather load.</span></h2><p>Member-load chlorine control isn't a Saturday afterthought — it's continuous adjustment based on how many people swam Tuesday's water aerobics. We dial in your chemistry to actual usage patterns.</p><p>Combined cl, free cl, total cl, ORP, ppm of CYA — the readings your inspector asks for, recorded every visit, exportable for the annual review.</p></div>
  <div><h2>What aquatic facilities need.</h2><ul><li>Health-code-compliant chemistry (FAC, pH, CYA targets)</li><li>Daily/weekly log sheets in compliance format</li><li>Hot tub bromine specialty (or chlorine if specced)</li><li>Splash pad &amp; feature plumbing maintenance</li><li>Lap pool clarity for swim-meet standards</li><li>CPO certification on every technician</li></ul></div>
</div></div></section>

<?php get_template_part( 'template-parts/services-grid' ); ?>

<section class="proof block"><div class="wrap"><div class="section-head center"><span class="eyebrow">What aquatic operators say</span></div><div class="testimonials">
  <div class="tcard"><div class="stars">★★★★★</div><q>We've been on monthly net-30 billing across three properties for two years. Same tech on every route. No surprises.</q><div class="who"><strong>David L.</strong><span>Facilities Director · Sunstate Fitness</span></div></div>
  <div class="tcard"><div class="stars">★★★★★</div><q>Health inspector showed up unannounced. Our log book was perfect. Pool All-Stars formats it that way on purpose.</q><div class="who"><strong>Sarah B.</strong><span>Aquatic Director · Bay Area YMCA</span></div></div>
  <div class="tcard"><div class="stars">★★★★★</div><q>Member complaints about chlorine smell dropped to zero after they recalibrated our combined chlorine targets.</q><div class="who"><strong>Mike P.</strong><span>GM · Coastal Athletic Club</span></div></div>
</div></div></section>

<?php get_template_part( 'template-parts/areas-grid' ); ?>
<?php $pasc_cta_heading = 'Pool that'; $pasc_cta_heading_red = 'passes inspection.'; get_template_part( 'template-parts/cta-final' ); ?>
<?php get_footer(); ?>
