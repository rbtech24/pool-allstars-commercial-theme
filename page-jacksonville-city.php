<?php get_header(); ?>
<?php pasc_breadcrumbs( array(
	array( 'label' => 'Service area', 'url' => home_url( '/service-area/' ) ),
	array( 'label' => 'Jacksonville', 'url' => home_url( '/service-area/jacksonville/' ) ),
	array( 'label' => 'Jacksonville (city)' ),
) ); ?>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"LocalBusiness","name":"<?php echo esc_js( pasc_company_name() ); ?> — Jacksonville","areaServed":{"@type":"City","name":"Jacksonville, FL"},"telephone":"+1-833-968-4888","url":"<?php echo esc_url( get_permalink() ); ?>"}</script>

<section class="page-hero">
  <div class="wrap">
    <span class="eyebrow">Jacksonville, Florida</span>
    <h1>Commercial pool service <span class="red">in Jacksonville, FL.</span></h1>
    <p>From the beach hotel pools of Jax Beach and Atlantic Beach to historic San Marco and Riverside boutique properties, plus the golf-community HOAs along the St. Johns River — full commercial pool service across Duval County.</p>
    <div class="page-hero-ctas"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Request a proposal</a><a href="tel:<?php echo esc_attr( pasc_phone_tel() ); ?>" class="btn btn-soft">Call <?php echo esc_html( pasc_phone_display() ); ?></a></div>
  </div>
</section>

<section class="two-col">
  <div class="wrap">
    <div class="two-col-grid">
      <div>
        <h2>Built for Jacksonville <span class="red">commercial pool reality.</span></h2>
        <p>Jacksonville's pool market is split distinctly between beachfront commercial properties (Jax Beach, Atlantic Beach, Neptune Beach) and inland HOA / corporate hospitality. Salt-air corrosion is severe along the beaches — equipment lifespan runs 30–50% shorter than inland Florida. Inland properties (San Marco, Riverside, Mandarin) deal with cooler winters that require active heater management Nov–Feb.</p>
        <p>Duval County health enforces FL Admin Code 64E-9 with regular hotel and public pool inspections. We log every parameter on every visit and maintain brand-flag QA documentation for hotel customers (Marriott, Hilton, Choice, IHG). Reports format to inspector spec on every visit.</p>
        <p>Tropical storm and nor'easter response is a known seasonal need. We maintain rapid-dispatch capacity for chemistry rebuild and debris removal post-event, including coordination with HOA reserve consultants for damage assessment.</p>
      </div>
      <div>
        <h2>Jacksonville <span class="red">neighborhoods &amp; districts.</span></h2>
        <ul>
          <li><strong>Jacksonville Beach</strong> — beachfront hotel &amp; condo pools</li>
          <li><strong>Atlantic Beach</strong> — boutique beachfront properties</li>
          <li><strong>San Marco</strong> — historic neighborhood, boutique hotels</li>
          <li><strong>Riverside &amp; Avondale</strong> — historic residential, fitness facilities</li>
          <li><strong>Downtown Jacksonville</strong> — corporate hotel pools</li>
          <li><strong>Mandarin &amp; Mandarin South</strong> — established HOA pools</li>
          <li><strong>Southside &amp; Town Center</strong> — corporate hotels, fitness</li>
          <li><strong>Arlington &amp; St. Nicholas</strong> — community pool service</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="related" style="background:#fff">
  <div class="wrap">
    <div class="section-head center"><span class="eyebrow">Jacksonville property types we serve</span><h2>Specialized for <span class="red">your property type.</span></h2></div>
    <div class="related-grid">
      <a class="related-card" href="<?php echo esc_url( home_url( '/industries/hotels-resorts/' ) ); ?>"><h4>Jacksonville hotels</h4><p>Beach hotels, downtown corporate, boutique properties.</p><span class="arrow">View industry</span></a>
      <a class="related-card" href="<?php echo esc_url( home_url( '/industries/hoas-condos/' ) ); ?>"><h4>Jacksonville HOAs</h4><p>Established neighborhoods, beach condo associations.</p><span class="arrow">View industry</span></a>
      <a class="related-card" href="<?php echo esc_url( home_url( '/industries/country-clubs/' ) ); ?>"><h4>Jacksonville clubs</h4><p>Golf communities, river-front private clubs.</p><span class="arrow">View industry</span></a>
      <a class="related-card" href="<?php echo esc_url( home_url( '/industries/vacation-rentals/' ) ); ?>"><h4>Vacation rentals</h4><p>Beach &amp; coastal vacation properties.</p><span class="arrow">View industry</span></a>
    </div>
  </div>
</section>

<?php pasc_render_testimonials_section( 'jacksonville', 'What Jacksonville property managers say', 'Trusted across Northeast Florida' ); ?>

<section class="related">
  <div class="wrap">
    <div class="section-head center"><span class="eyebrow">Nearby cities</span><h2>Also serving <span class="red">Northeast Florida.</span></h2></div>
    <div class="related-grid">
      <a class="related-card" href="<?php echo esc_url( home_url( '/service-area/jacksonville/' ) ); ?>"><h4>Ponte Vedra</h4><p>St. Johns County. Golf community.</p><span class="arrow">View area</span></a>
      <a class="related-card" href="<?php echo esc_url( home_url( '/service-area/jacksonville/' ) ); ?>"><h4>St. Augustine</h4><p>St. Johns County. Historic district.</p><span class="arrow">View area</span></a>
      <a class="related-card" href="<?php echo esc_url( home_url( '/service-area/jacksonville/' ) ); ?>"><h4>Amelia Island</h4><p>Nassau County. Luxury resort.</p><span class="arrow">View area</span></a>
      <a class="related-card" href="<?php echo esc_url( home_url( '/service-area/jacksonville/' ) ); ?>"><h4>All NE Florida</h4><p>3 counties. See full coverage.</p><span class="arrow">View region</span></a>
    </div>
  </div>
</section>

<?php $pasc_cta_heading = 'Jacksonville property?'; $pasc_cta_heading_red = "Let's talk."; get_template_part( 'template-parts/cta-final' ); ?>
<?php pasc_last_updated(); ?>
<?php get_footer(); ?>
