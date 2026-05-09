<?php get_header(); ?>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"ItemList","name":"Commercial Pool Services","url":"<?php echo esc_url( get_permalink() ); ?>","itemListElement":[
{"@type":"ListItem","position":1,"name":"Weekly Pool Maintenance","url":"<?php echo esc_url( home_url( '/services/weekly-maintenance/' ) ); ?>"},
{"@type":"ListItem","position":2,"name":"Water Chemistry Management","url":"<?php echo esc_url( home_url( '/services/water-chemistry/' ) ); ?>"},
{"@type":"ListItem","position":3,"name":"Pool Equipment Repair","url":"<?php echo esc_url( home_url( '/services/equipment-repair/' ) ); ?>"},
{"@type":"ListItem","position":4,"name":"Pool Filter Cleaning","url":"<?php echo esc_url( home_url( '/services/filter-cleaning/' ) ); ?>"},
{"@type":"ListItem","position":5,"name":"Green Pool Recovery","url":"<?php echo esc_url( home_url( '/services/green-pool-recovery/' ) ); ?>"},
{"@type":"ListItem","position":6,"name":"Leak Detection","url":"<?php echo esc_url( home_url( '/services/leak-detection/' ) ); ?>"},
{"@type":"ListItem","position":7,"name":"Acid Washing","url":"<?php echo esc_url( home_url( '/services/acid-washing/' ) ); ?>"},
{"@type":"ListItem","position":8,"name":"Pool Renovation","url":"<?php echo esc_url( home_url( '/services/pool-renovation/' ) ); ?>"}]}
</script>
<?php pasc_breadcrumbs( array( array( 'label' => 'Services' ) ) ); ?>

<section class="page-hero">
  <div class="wrap">
    <span class="eyebrow">What we do</span>
    <h1>Commercial pool services <span class="red">across Florida.</span></h1>
    <p>Everything your property's pool needs — from weekly chemistry to emergency equipment repair — under one contract, with one accountable team.</p>
    <div class="page-hero-ctas"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Request a proposal</a><a href="tel:<?php echo esc_attr( pasc_phone_tel() ); ?>" class="btn btn-soft">Call <?php echo esc_html( pasc_phone_display() ); ?></a></div>
  </div>
</section>

<section class="commercial">
  <div class="wrap">
    <div class="section-head center"><span class="eyebrow">Core services</span><h2>Eight services. <span class="muted">One vendor.</span></h2><p>Most properties don't need eight pool vendors — they need one that handles all eight services without subcontracting or finger-pointing.</p></div>
    <div class="commercial-types">
      <a class="ct" href="<?php echo esc_url( home_url( '/services/weekly-maintenance/' ) ); ?>"><div class="ct-icon">01</div><h3>Weekly maintenance</h3><div class="ct-meta">Chemistry, brushing, vacuuming, equipment check, photo report.</div><div class="ct-link">Most popular service</div></a>
      <a class="ct" href="<?php echo esc_url( home_url( '/services/water-chemistry/' ) ); ?>"><div class="ct-icon">02</div><h3>Water chemistry</h3><div class="ct-meta">Sanitizer, pH, alkalinity, calcium, cyanuric acid, TDS — health-code balanced.</div><div class="ct-link">Health-code compliant</div></a>
      <a class="ct" href="<?php echo esc_url( home_url( '/services/equipment-repair/' ) ); ?>"><div class="ct-icon">03</div><h3>Equipment repair</h3><div class="ct-meta">Pumps, motors, salt cells, heaters, automation, plumbing.</div><div class="ct-link">Same-day diagnosis</div></a>
      <a class="ct" href="<?php echo esc_url( home_url( '/services/filter-cleaning/' ) ); ?>"><div class="ct-icon">04</div><h3>Filter cleaning</h3><div class="ct-meta">DE, cartridge, sand. Scheduled per filter type and bather load.</div><div class="ct-link">Scheduled by load</div></a>
      <a class="ct" href="<?php echo esc_url( home_url( '/services/green-pool-recovery/' ) ); ?>"><div class="ct-icon">05</div><h3>Green pool recovery</h3><div class="ct-meta">Algae-clouded pool restored to swim-ready in 3 to 7 days.</div><div class="ct-link">3–7 day turnaround</div></a>
      <a class="ct" href="<?php echo esc_url( home_url( '/services/leak-detection/' ) ); ?>"><div class="ct-icon">06</div><h3>Leak detection</h3><div class="ct-meta">Pressure testing, dye testing, electronic detection.</div><div class="ct-link">Non-destructive</div></a>
      <a class="ct" href="<?php echo esc_url( home_url( '/services/acid-washing/' ) ); ?>"><div class="ct-icon">07</div><h3>Acid washing</h3><div class="ct-meta">Plaster restoration, stain removal, deep cleaning.</div><div class="ct-link">Off-peak scheduling</div></a>
      <a class="ct" href="<?php echo esc_url( home_url( '/services/pool-renovation/' ) ); ?>"><div class="ct-icon">08</div><h3>Pool renovation</h3><div class="ct-meta">Resurfacing, tile, coping, equipment upgrades.</div><div class="ct-link">Capital projects</div></a>
    </div>
  </div>
</section>

<section class="howitworks block">
  <div class="wrap">
    <div class="section-head center"><span class="eyebrow">How it works</span><h2>From quote to <span class="red">crystal clear,</span> in four steps.</h2><p>Predictable, accountable, photo-documented from day one.</p></div>
    <div class="steps-grid">
      <div class="step"><div class="step-num">01</div><h3>Send your scope.</h3><p>Email your RFP, current vendor's report, or just a description of the property. We'll review same day.</p><div class="step-tag">Same-day review</div></div>
      <div class="step"><div class="step-num">02</div><h3>On-site walk-through.</h3><p>A licensed tech visits, tests water, inspects equipment, confirms scope. You get a fixed-rate proposal.</p><div class="step-tag">Fixed-rate quote</div></div>
      <div class="step"><div class="step-num">03</div><h3>COI &amp; transition.</h3><p>COI on file in 24 hours. We coordinate handoff with your current vendor — zero disruption.</p><div class="step-tag">Zero disruption</div></div>
      <div class="step"><div class="step-num">04</div><h3>Service starts.</h3><p>Your dedicated technician begins on a set day each week. Same-day photo reports after every visit.</p><div class="step-tag">Same-day reports</div></div>
    </div>
  </div>
</section>

<?php get_template_part( 'template-parts/industries-grid' ); ?>

<?php get_template_part( 'template-parts/cta-final' ); ?>

<?php get_footer(); ?>
