<?php get_header(); ?>
<?php pasc_breadcrumbs( array(
	array( 'label' => 'Service area', 'url' => home_url( '/service-area/' ) ),
	array( 'label' => 'South Florida', 'url' => home_url( '/service-area/south-florida/' ) ),
	array( 'label' => 'Miami' ),
) ); ?>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"LocalBusiness","name":"<?php echo esc_js( pasc_company_name() ); ?> — Miami","areaServed":{"@type":"City","name":"Miami, FL"},"telephone":"+1-833-968-4888","url":"<?php echo esc_url( get_permalink() ); ?>"}</script>

<section class="page-hero">
  <div class="wrap">
    <span class="eyebrow">Miami, Florida</span>
    <h1>Commercial pool service <span class="red">in Miami, FL.</span></h1>
    <p>High-rise rooftop pools in Brickell and Aventura, beachfront resort pools on Miami Beach, Mediterranean-style HOA pools in Coral Gables, corporate pools in Doral — full commercial pool service across Miami-Dade County.</p>
    <div class="page-hero-ctas"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Request a proposal</a><a href="tel:<?php echo esc_attr( pasc_phone_tel() ); ?>" class="btn btn-soft">Call <?php echo esc_html( pasc_phone_display() ); ?></a></div>
  </div>
</section>

<section class="two-col">
  <div class="wrap">
    <div class="two-col-grid">
      <div>
        <h2>Built for Miami <span class="red">commercial pool reality.</span></h2>
        <p>Miami is unforgiving. Brickell and Aventura high-rise rooftop pools require pre-dawn service before residents are awake — and equipment access via service elevators with strict scheduling windows. Miami Beach hotel pools battle constant salt-air corrosion that wrecks pump motors and salt cells in half their inland lifespan. Coral Gables and Coconut Grove luxury pools demand bespoke chemistry tuned to specific plaster finishes.</p>
        <p>Miami-Dade County health enforces FL Admin Code 64E-9 with aggressive Florida Building Code 454 pool barrier code enforcement. Combined chlorine kept under 0.4 ppm prevents the eye irritation complaints that drive 1-star resort reviews. We log every parameter on every visit and maintain brand-flag QA documentation for hospitality customers.</p>
        <p>Salt air is the real adversary in Miami. We build preventative equipment service schedules around the corrosion timeline — proactive pump and salt-cell maintenance rather than reactive replacement. Hurricane preparation and post-storm response is a known seasonal need; we maintain dispatch capacity through August–October.</p>
      </div>
      <div>
        <h2>Miami <span class="red">neighborhoods &amp; districts.</span></h2>
        <ul>
          <li><strong>Brickell</strong> — high-rise rooftop amenity decks, luxury condos</li>
          <li><strong>Miami Beach &amp; South Beach</strong> — beachfront hotel pool corridor</li>
          <li><strong>Coral Gables</strong> — luxury hotel &amp; private club pools</li>
          <li><strong>Aventura</strong> — high-rise condo amenity decks</li>
          <li><strong>Doral</strong> — corporate hotels &amp; resort properties</li>
          <li><strong>Downtown Miami</strong> — corporate hotel &amp; residential tower pools</li>
          <li><strong>Coconut Grove</strong> — boutique hotels, historic residential</li>
          <li><strong>Bal Harbour &amp; Surfside</strong> — luxury beachfront condo associations</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="related" style="background:#fff">
  <div class="wrap">
    <div class="section-head center"><span class="eyebrow">Miami property types we serve</span><h2>Specialized for <span class="red">your property type.</span></h2></div>
    <div class="related-grid">
      <a class="related-card" href="<?php echo esc_url( home_url( '/industries/hoas-condos/' ) ); ?>"><h4>Miami condos</h4><p>Brickell, Aventura, Surfside high-rise condo associations.</p><span class="arrow">View industry</span></a>
      <a class="related-card" href="<?php echo esc_url( home_url( '/industries/hotels-resorts/' ) ); ?>"><h4>Miami hotels</h4><p>Miami Beach, Brickell, Coral Gables hotels &amp; resorts.</p><span class="arrow">View industry</span></a>
      <a class="related-card" href="<?php echo esc_url( home_url( '/industries/multi-property/' ) ); ?>"><h4>Miami portfolios</h4><p>Hospitality groups &amp; condo portfolio managers.</p><span class="arrow">View industry</span></a>
      <a class="related-card" href="<?php echo esc_url( home_url( '/industries/fitness-aquatic/' ) ); ?>"><h4>Miami fitness</h4><p>Boutique fitness, hotel gym pools, condo wellness amenities.</p><span class="arrow">View industry</span></a>
    </div>
  </div>
</section>

<?php pasc_render_testimonials_section( 'south-florida', 'What Miami property managers say', 'Trusted across South Florida' ); ?>

<section class="related">
  <div class="wrap">
    <div class="section-head center"><span class="eyebrow">Nearby cities</span><h2>Also serving <span class="red">South Florida.</span></h2></div>
    <div class="related-grid">
      <a class="related-card" href="<?php echo esc_url( home_url( '/service-area/south-florida/' ) ); ?>"><h4>Fort Lauderdale</h4><p>Broward County. Beach &amp; downtown.</p><span class="arrow">View area</span></a>
      <a class="related-card" href="<?php echo esc_url( home_url( '/service-area/south-florida/' ) ); ?>"><h4>Boca Raton</h4><p>Palm Beach County. Mediterranean HOA.</p><span class="arrow">View area</span></a>
      <a class="related-card" href="<?php echo esc_url( home_url( '/service-area/south-florida/' ) ); ?>"><h4>West Palm Beach</h4><p>Palm Beach County. Estate &amp; resort.</p><span class="arrow">View area</span></a>
      <a class="related-card" href="<?php echo esc_url( home_url( '/service-area/south-florida/' ) ); ?>"><h4>All South Florida</h4><p>3 counties. See full coverage.</p><span class="arrow">View region</span></a>
    </div>
  </div>
</section>

<?php $pasc_cta_heading = 'Miami property?'; $pasc_cta_heading_red = "Let's talk."; get_template_part( 'template-parts/cta-final' ); ?>
<?php pasc_last_updated(); ?>
<?php get_footer(); ?>
