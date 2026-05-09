<?php get_header(); ?>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"ItemList","name":"Industries Served","url":"<?php echo esc_url( get_permalink() ); ?>","itemListElement":[
{"@type":"ListItem","position":1,"name":"Hotels & Resorts","url":"<?php echo esc_url( home_url( '/industries/hotels-resorts/' ) ); ?>"},
{"@type":"ListItem","position":2,"name":"HOAs & Condos","url":"<?php echo esc_url( home_url( '/industries/hoas-condos/' ) ); ?>"},
{"@type":"ListItem","position":3,"name":"Fitness & Aquatic","url":"<?php echo esc_url( home_url( '/industries/fitness-aquatic/' ) ); ?>"},
{"@type":"ListItem","position":4,"name":"Multi-Property","url":"<?php echo esc_url( home_url( '/industries/multi-property/' ) ); ?>"},
{"@type":"ListItem","position":5,"name":"Municipal & Schools","url":"<?php echo esc_url( home_url( '/industries/municipal-schools/' ) ); ?>"},
{"@type":"ListItem","position":6,"name":"Vacation Rentals","url":"<?php echo esc_url( home_url( '/industries/vacation-rentals/' ) ); ?>"},
{"@type":"ListItem","position":7,"name":"Water Parks","url":"<?php echo esc_url( home_url( '/industries/water-parks/' ) ); ?>"},
{"@type":"ListItem","position":8,"name":"Country Clubs","url":"<?php echo esc_url( home_url( '/industries/country-clubs/' ) ); ?>"}]}
</script>
<?php pasc_breadcrumbs( array( array( 'label' => 'Industries' ) ) ); ?>

<section class="page-hero">
  <div class="wrap">
    <span class="eyebrow">Industries we serve</span>
    <h1>Pool service, <span class="red">specialized by property type.</span></h1>
    <p>Every commercial property has different operational priorities. We've built specialized SOPs for each — so you're not getting a one-size-fits-all checklist.</p>
  </div>
</section>

<section class="commercial">
  <div class="wrap">
    <div class="commercial-types">
      <a class="ct" href="<?php echo esc_url( home_url( '/industries/hotels-resorts/' ) ); ?>"><div class="ct-icon">01</div><h3>Hotels &amp; resorts</h3><div class="ct-meta">Guest-facing service, dawn cleanings before checkout, brand-standard finish.</div><div class="ct-link">View industry</div></a>
      <a class="ct" href="<?php echo esc_url( home_url( '/industries/hoas-condos/' ) ); ?>"><div class="ct-icon">02</div><h3>HOAs &amp; condos</h3><div class="ct-meta">Board-friendly reporting, multi-pool routes, predictable monthly billing.</div><div class="ct-link">View industry</div></a>
      <a class="ct" href="<?php echo esc_url( home_url( '/industries/fitness-aquatic/' ) ); ?>"><div class="ct-icon">03</div><h3>Fitness &amp; aquatic</h3><div class="ct-meta">Health-code chemistry, member-load chlorine control, log compliance.</div><div class="ct-link">View industry</div></a>
      <a class="ct" href="<?php echo esc_url( home_url( '/industries/multi-property/' ) ); ?>"><div class="ct-icon">04</div><h3>Multi-property</h3><div class="ct-meta">One contract, one PM contact, consolidated invoicing.</div><div class="ct-link">View industry</div></a>
      <a class="ct" href="<?php echo esc_url( home_url( '/industries/municipal-schools/' ) ); ?>"><div class="ct-icon">05</div><h3>Municipal &amp; schools</h3><div class="ct-meta">Procurement-ready bids, public-pool standards, audit-ready records.</div><div class="ct-link">View industry</div></a>
      <a class="ct" href="<?php echo esc_url( home_url( '/industries/vacation-rentals/' ) ); ?>"><div class="ct-icon">06</div><h3>Vacation rentals</h3><div class="ct-meta">Turnover-day service, photo-confirmed visits, rental-platform ready.</div><div class="ct-link">View industry</div></a>
      <a class="ct" href="<?php echo esc_url( home_url( '/industries/water-parks/' ) ); ?>"><div class="ct-icon">07</div><h3>Water parks</h3><div class="ct-meta">High-volume systems, slide &amp; feature plumbing, peak-season staffing.</div><div class="ct-link">View industry</div></a>
      <a class="ct" href="<?php echo esc_url( home_url( '/industries/country-clubs/' ) ); ?>"><div class="ct-icon">08</div><h3>Country clubs</h3><div class="ct-meta">Member-experience priority, lap pool &amp; resort pool dual specs.</div><div class="ct-link">View industry</div></a>
    </div>
  </div>
</section>

<?php $pasc_cta_heading = "Don't see your"; $pasc_cta_heading_red = 'property type?'; $pasc_cta_body = "If it has a pool, we probably service it. Send us your scope and we'll let you know."; get_template_part( 'template-parts/cta-final' ); ?>

<?php get_footer(); ?>
