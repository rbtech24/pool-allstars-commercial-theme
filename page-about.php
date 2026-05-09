<?php get_header(); ?>
<?php pasc_breadcrumbs( array( array( 'label' => 'About' ) ) ); ?>

<section class="page-hero">
  <div class="wrap">
    <span class="eyebrow">About us</span>
    <h1>Built for the people <span class="red">running the building.</span></h1>
    <p>For 17 years, Pool All-Stars has been the pool service company Florida property managers, HOA boards, and facilities directors actually keep. We're not the cheapest. We're the ones who show up, document the work, and answer the phone.</p>
    <div class="page-hero-ctas"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Request a proposal</a><a href="tel:<?php echo esc_attr( pasc_phone_tel() ); ?>" class="btn btn-soft">Call <?php echo esc_html( pasc_phone_display() ); ?></a></div>
  </div>
</section>

<section class="story">
  <div class="wrap">
    <div class="story-grid">
      <div class="story-img" role="img" aria-label="Pool All-Stars branded service truck"></div>
      <div class="story-text">
        <h2>17 years. <span class="red">5,000+ pools.</span> One playbook.</h2>
        <p>We started in 2009 servicing residential pools in Tampa Bay. As word spread, HOAs and small hotels started calling. Then portfolio managers, condo associations, fitness operators. By 2018 commercial was the majority of the route. Today we run a dedicated commercial operation across Florida — same standards, scaled.</p>
        <p>What changed isn't the work. The work has always been the same: balanced chemistry, clean filters, equipment that runs. What changed was the systems around the work — the tablets, the photo logs, the COI on file before the contract is signed, the dedicated account manager who answers your call.</p>
        <p>That's what makes a property manager re-up their contract three years running. Not magic. Just professional.</p>
      </div>
    </div>
  </div>
</section>

<section class="values">
  <div class="wrap">
    <div class="section-head center"><span class="eyebrow">What we stand for</span><h2>Three things, every visit.</h2></div>
    <div class="values-grid">
      <div class="value-card"><div class="num">01 — Accountability</div><h3>Documented, not promised.</h3><p>Every visit logged with GPS arrival, time on site, chemistry readings, and before/after photos. Your portfolio manager gets the report the same day, not at end-of-month.</p></div>
      <div class="value-card"><div class="num">02 — Consistency</div><h3>Same tech. Same protocol.</h3><p>Your dedicated technician runs the same 12-point checklist on every visit, every property, every week. No improvisation.</p></div>
      <div class="value-card"><div class="num">03 — Compliance</div><h3>Audit-ready by default.</h3><p>COI on file in 24 hours. CPO-certified technicians. OSHA-compliant chemical handling. Monthly reports your facilities team hands directly to inspectors.</p></div>
    </div>
  </div>
</section>

<?php get_template_part( 'template-parts/areas-grid' ); ?>

<?php $pasc_cta_heading = "Let's get a"; $pasc_cta_heading_red = 'proposal in front of you.'; $pasc_cta_body = 'Send us your scope, RFP, or last 60 days of reports. Fixed-rate proposal back within one business day.'; get_template_part( 'template-parts/cta-final' ); ?>

<?php get_footer(); ?>
