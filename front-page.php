<?php
/**
 * Front page (Home)
 * @package PoolAllStarsCommercial
 */
get_header(); ?>

<script type="application/ld+json">
{"@context":"https://schema.org","@type":"LocalBusiness","name":"<?php echo esc_js( pasc_company_name() ); ?>","description":"Commercial pool service for hotels, HOAs, condos, fitness facilities, and multi-property portfolios across Florida.","url":"<?php echo esc_url( home_url( '/' ) ); ?>","telephone":"+1-833-968-4888","priceRange":"$$","address":{"@type":"PostalAddress","addressRegion":"FL","addressCountry":"US"},"openingHoursSpecification":{"@type":"OpeningHoursSpecification","dayOfWeek":["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"opens":"07:00","closes":"19:00"},"aggregateRating":{"@type":"AggregateRating","ratingValue":"4.9","reviewCount":"500"}}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[
{"@type":"Question","name":"What is included in commercial pool service?","acceptedAnswer":{"@type":"Answer","text":"Standard commercial weekly pool maintenance includes water chemistry testing and balancing, brushing, vacuuming, basket emptying, equipment inspection, filter pressure check, and a same-day photo-confirmed service report."}},
{"@type":"Question","name":"How quickly can you provide a Certificate of Insurance?","acceptedAnswer":{"@type":"Answer","text":"COI is provided within 24 hours of contract signing, naming your property as additional insured."}},
{"@type":"Question","name":"Do you offer multi-property pricing?","acceptedAnswer":{"@type":"Answer","text":"Yes. Volume pricing kicks in at 3+ properties under one contract."}},
{"@type":"Question","name":"What areas of Florida do you serve?","acceptedAnswer":{"@type":"Answer","text":"Tampa Bay, Orlando, Jacksonville, Sarasota, Naples, South Florida, Space Coast, Lakeland — statewide for commercial portfolios."}},
{"@type":"Question","name":"Are your technicians certified?","acceptedAnswer":{"@type":"Answer","text":"All technicians hold Certified Pool/Spa Operator (CPO) certification and complete OSHA chemical handling training."}},
{"@type":"Question","name":"What is your response time for repairs?","acceptedAnswer":{"@type":"Answer","text":"Same business day for diagnosis. Most repairs completed within 48 hours. 24/7 emergency dispatch available."}}]}
</script>

<section class="hero">
  <div class="hero-grid">
    <div class="hero-text">
      <span class="hero-eyebrow"><span class="star">★</span> Commercial pool service · Florida</span>
      <h1>Commercial pool care, <span class="red">no surprises.</span></h1>
      <p class="hero-sub">Weekly maintenance, COI on file, dedicated account managers, and same-day photo-confirmed reporting — for hotels, HOAs, condos, fitness centers, and multi-property portfolios across Florida.</p>
      <div class="hero-paths">
        <a class="path-card commercial" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
          <span class="path-tag">Get a custom proposal</span>
          <h3>Send us your scope or RFP. Proposal back in 24 hours.</h3>
          <p>Fixed-rate pricing, COI on file, transition plan that doesn't disrupt guests, members, or residents.</p>
          <div class="commercial-cta-row"><span style="font-weight:600;font-size:0.86rem;color:var(--ink)">Flexible billing Net-30 billing &amp; volume pricingamp; volume pricing</span><span class="btn-go">Request proposal</span></div>
        </a>
        <a class="path-card" href="<?php echo esc_url( home_url( '/industries/' ) ); ?>" style="border-color:var(--line)">
          <span class="path-tag">Browse by property type</span>
          <h3>See how we serve your industry.</h3>
          <p>Hotels &amp; resorts · HOAs &amp; condos · Fitness &amp; aquatic · Multi-property · Municipal · Vacation rentals · Water parks · Country clubs</p>
        </a>
      </div>
    </div>
    <div class="hero-image" role="img" aria-label="Pool All-Stars technician servicing a Florida commercial pool">
      <div class="float-card">
        <div class="dot"></div>
        <div class="text"><strong>COI on file in 24 hours.</strong>Same dedicated tech every visit.</div>
      </div>
    </div>
  </div>
</section>

<section class="trustbar" aria-label="Certifications">
  <div class="wrap">
    <div class="tbadge"><div class="tbadge-icon">A+</div><div class="tbadge-text"><strong>BBB Rated</strong><span>A+ accredited</span></div></div>
    <div class="tbadge"><div class="tbadge-icon blue">CPO</div><div class="tbadge-text"><strong>CPO Certified</strong><span>Pool &amp; Hot Tub Alliance</span></div></div>
    <div class="tbadge"><div class="tbadge-icon">L&amp;I</div><div class="tbadge-text"><strong>Licensed</strong><span>&amp; fully insured</span></div></div>
    <div class="tbadge"><div class="tbadge-icon blue">17</div><div class="tbadge-text"><strong>17 Years</strong><span>Operating since 2009</span></div></div>
    <div class="tbadge"><div class="tbadge-icon"><span class="star">★</span></div><div class="tbadge-text"><strong>500+ Reviews</strong><span>5-star average</span></div></div>
    <div class="tbadge"><div class="tbadge-icon blue">5K</div><div class="tbadge-text"><strong>5,000+ Pools</strong><span>Serviced &amp; counting</span></div></div>
  </div>
</section>

<section class="block commercial">
  <div class="wrap">
    <div class="section-head"><span class="eyebrow">Industries we serve</span><h2>Built for property managers, <span class="muted">across every category.</span></h2><p>From single-property HOAs to multi-site hotel groups, we operate on standardized SOPs, COI-on-file compliance, and dedicated account management.</p></div>
    <div class="commercial-types">
      <a class="ct" href="<?php echo esc_url( home_url( '/industries/hotels-resorts/' ) ); ?>"><div class="ct-icon">01</div><h3>Hotels &amp; resorts</h3><div class="ct-meta">Guest-facing service, dawn cleanings, brand standards.</div><div class="ct-link">Learn more</div></a>
      <a class="ct" href="<?php echo esc_url( home_url( '/industries/hoas-condos/' ) ); ?>"><div class="ct-icon">02</div><h3>HOAs &amp; condos</h3><div class="ct-meta">Board-friendly reporting, multi-pool routes, predictable billing.</div><div class="ct-link">Learn more</div></a>
      <a class="ct" href="<?php echo esc_url( home_url( '/industries/fitness-aquatic/' ) ); ?>"><div class="ct-icon">03</div><h3>Fitness &amp; aquatic</h3><div class="ct-meta">Health-code chemistry, member-load chlorine control, log compliance.</div><div class="ct-link">Learn more</div></a>
      <a class="ct" href="<?php echo esc_url( home_url( '/industries/multi-property/' ) ); ?>"><div class="ct-icon">04</div><h3>Multi-property</h3><div class="ct-meta">One contract, one PM contact, consolidated invoicing.</div><div class="ct-link">Learn more</div></a>
      <a class="ct" href="<?php echo esc_url( home_url( '/industries/municipal-schools/' ) ); ?>"><div class="ct-icon">05</div><h3>Municipal &amp; schools</h3><div class="ct-meta">Procurement-ready bids, public-pool standards, audit-ready records.</div><div class="ct-link">Learn more</div></a>
      <a class="ct" href="<?php echo esc_url( home_url( '/industries/vacation-rentals/' ) ); ?>"><div class="ct-icon">06</div><h3>Vacation rentals</h3><div class="ct-meta">Turnover-day service, photo-confirmed visits, rental-platform ready.</div><div class="ct-link">Learn more</div></a>
      <a class="ct" href="<?php echo esc_url( home_url( '/industries/water-parks/' ) ); ?>"><div class="ct-icon">07</div><h3>Water parks</h3><div class="ct-meta">High-volume systems, slide &amp; feature plumbing, peak-season staffing.</div><div class="ct-link">Learn more</div></a>
      <a class="ct" href="<?php echo esc_url( home_url( '/industries/country-clubs/' ) ); ?>"><div class="ct-icon">08</div><h3>Country clubs</h3><div class="ct-meta">Member-experience priority, lap pool &amp; resort pool dual specs.</div><div class="ct-link">Learn more</div></a>
    </div>
    <div class="commercial-cta">
      <div class="inner">
        <h3>Replace your pool vendor in <span class="red">30 days.</span></h3>
        <p>Send us your current scope, RFP, or last 60 days of service reports. We'll return a fixed-rate proposal, COI on file, and a transition plan that doesn't disrupt your guests, members, or residents.</p>
        <div class="ctas"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-light">Request commercial proposal</a><a href="tel:<?php echo esc_attr( pasc_phone_tel() ); ?>" class="btn btn-outline-light"><?php echo esc_html( pasc_phone_display() ); ?></a></div>
      </div>
      <div class="cc-checks">
        <div class="cc-check">Certificate of insurance on file in 24 hours</div>
        <div class="cc-check">Dedicated account manager, single point of contact</div>
        <div class="cc-check">Health-code-ready chemistry &amp; logs</div>
        <div class="cc-check">AP-cycle billing, multi-property invoicing</div>
        <div class="cc-check">Photo-confirmed visits &amp; reporting</div>
      </div>
    </div>
  </div>
</section>

<section class="block system">
  <div class="wrap">
    <div class="section-head center"><span class="eyebrow">How we operate</span><h2>The All-Star playbook. <span class="muted">Run on every property.</span></h2><p>Pool service the way it should run — route-optimized, photo-documented, and accountable to a number, not a memory.</p></div>
    <div class="system-grid">
      <div class="sys-card"><div class="sys-num">01 — Field tech</div><h3>Routes &amp; chemistry, on a tablet.</h3><p>Every visit logged: GPS-verified arrival, time on site, water readings, dosing, before-and-after photos. Owners get the report the same day.</p><div class="sys-tag">Built-in accountability</div></div>
      <div class="sys-card"><div class="sys-num">02 — Operations</div><h3>Standard operating procedures.</h3><p>A 12-point weekly checklist plus property-type-specific protocols. No technician improvising.</p><div class="sys-tag">Consistent everywhere</div></div>
      <div class="sys-card"><div class="sys-num">03 — Compliance</div><h3>Audit-ready by default.</h3><p>COI on file, CPO-certified techs, OSHA-compliant chemical handling, monthly portfolio reports.</p><div class="sys-tag">No fire drills</div></div>
    </div>
  </div>
</section>

<section class="fleet">
  <div class="wrap">
    <div class="fleet-grid">
      <div class="fleet-text">
        <span class="eyebrow">The fleet</span>
        <h2>Branded trucks. <span class="gray">Stocked for anything.</span></h2>
        <p>Every truck rolls out fully equipped — chemistry kits, vacuums, filter media, salt-cell tools, replacement parts.</p>
        <ul class="fleet-list"><li>Fully stocked vehicles</li><li>Uniformed technicians</li><li>Background checked</li><li>GPS-tracked routes</li><li>Same tech, every visit</li><li>Photo-confirmed service</li></ul>
        <div><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Schedule a walk-through</a></div>
      </div>
      <div class="fleet-img" role="img" aria-label="Pool All-Stars branded service truck"></div>
    </div>
  </div>
</section>

<section class="block">
  <div class="wrap">
    <div class="section-head center"><span class="eyebrow">Where we serve</span><h2>Florida coverage, <span class="red">edge to edge.</span></h2><p>Tampa Bay, Orlando, Jacksonville, Sarasota, Naples, South Florida, the Space Coast — and everywhere in between.</p></div>
    <div class="related-grid">
      <a class="related-card" href="<?php echo esc_url( home_url( '/service-area/tampa-bay/' ) ); ?>"><h4>Tampa Bay</h4><p>Hillsborough, Pinellas, Pasco, Hernando, Manatee, Sarasota counties.</p><span class="arrow">View area</span></a>
      <a class="related-card" href="<?php echo esc_url( home_url( '/service-area/orlando/' ) ); ?>"><h4>Orlando &amp; Central FL</h4><p>Orange, Osceola, Seminole, Lake counties + greater Disney area.</p><span class="arrow">View area</span></a>
      <a class="related-card" href="<?php echo esc_url( home_url( '/service-area/south-florida/' ) ); ?>"><h4>South Florida</h4><p>Miami-Dade, Broward, Palm Beach — high-rise condos &amp; resorts.</p><span class="arrow">View area</span></a>
      <a class="related-card" href="<?php echo esc_url( home_url( '/service-area/' ) ); ?>"><h4>All service areas</h4><p>See every Florida region we cover.</p><span class="arrow">See all</span></a>
    </div>
  </div>
</section>

<section class="block proof">
  <div class="wrap">
    <div class="section-head center"><span class="eyebrow">What property managers say</span><h2>Trusted by portfolios, <span class="muted">not just pools.</span></h2></div>
    <div class="testimonials">
      <div class="tcard"><div class="stars">★★★★★</div><q>Pool All-Stars manages all eight of our portfolio properties on one contract. Their reporting is the cleanest I've seen in pool service.</q><div class="who"><strong>Maria S.</strong><span>VP Ops · Coastal Hospitality</span></div></div>
      <div class="tcard"><div class="stars">★★★★★</div><q>They sent the COI before the contract was even signed. That's how you know you're dealing with pros, not a guy with a truck.</q><div class="who"><strong>Robert K.</strong><span>Board President · Lakewood HOA</span></div></div>
      <div class="tcard"><div class="stars">★★★★★</div><q>We've been on monthly net-30 billing across three properties for two years. Same tech on every route. No surprises.</q><div class="who"><strong>David L.</strong><span>Facilities Director · Sunstate Fitness</span></div></div>
    </div>
  </div>
</section>

<section class="faq-section">
  <div class="wrap">
    <div class="section-head center"><span class="eyebrow">Frequently asked</span><h2>What property managers <span class="red">ask us most.</span></h2></div>
    <div class="faq-list">
      <div class="faq-item"><details open><summary>What is included in commercial pool service?</summary><p>Standard commercial weekly pool maintenance includes water chemistry testing and balancing, brushing, vacuuming, basket emptying, equipment inspection, filter pressure check, and a same-day photo-confirmed service report.</p></details></div>
      <div class="faq-item"><details><summary>How quickly can you provide a Certificate of Insurance?</summary><p>COI is provided within 24 hours of contract signing, naming your property as additional insured.</p></details></div>
      <div class="faq-item"><details><summary>Do you offer multi-property pricing?</summary><p>Yes. Volume pricing kicks in at 3+ properties under one contract. <a href="<?php echo esc_url( home_url( '/industries/multi-property/' ) ); ?>" style="color:var(--red);font-weight:600">Learn about multi-property pricing</a>.</p></details></div>
      <div class="faq-item"><details><summary>What areas of Florida do you serve?</summary><p>Tampa Bay, Orlando, Jacksonville, Sarasota, Naples, South Florida, Space Coast — statewide. <a href="<?php echo esc_url( home_url( '/service-area/' ) ); ?>" style="color:var(--red);font-weight:600">See all service areas</a>.</p></details></div>
      <div class="faq-item"><details><summary>Are your technicians certified?</summary><p>Yes. All technicians hold Certified Pool/Spa Operator (CPO) certification and complete OSHA chemical handling training.</p></details></div>
      <div class="faq-item"><details><summary>What is your response time for repairs?</summary><p>Same business day for diagnosis. Most repairs completed within 48 hours. 24/7 emergency dispatch is available for contract customers.</p></details></div>
      <div class="faq-item"><details><summary>Are you enrolled in vendor compliance platforms (RMIS, Compliance Depot, Notivus, etc.)?</summary><p>Yes. We are enrolled and current with <strong>Yardi VendorCafe, RealPage Compliance Depot, RMIS, Notivus, OpsTechnology, Coupa, Vendor Verify, Net Vendor, and Nexus Vendor Connect</strong>. COI, W-9, business license, and OSHA training records are uploaded and maintained current. New properties can typically have us approved within 24-48 hours.</p></details></div>
      <div class="faq-item"><details><summary>What property management software do you work with?</summary><p>Service reports and invoices are sent in formats compatible with <strong>AppFolio, Buildium, Yardi Voyager, MRI Software, RealPage, TownSq, FrontSteps, CINC Systems, Vantaca, Associa Connect, Entrata</strong>, and similar HOA / portfolio platforms. Email/PDF integration is standard; direct API webhooks supported where the platform offers them.</p></details></div>
      <div class="faq-item"><details><summary>How does your billing work?</summary><p>Net-30 monthly invoicing in advance. Multi-property portfolios receive consolidated invoices with per-property line items.</p></details></div>
    </div>
  </div>
</section>

<?php $pasc_cta_heading = 'Ready for pools'; $pasc_cta_heading_red = 'that just work?'; get_template_part( 'template-parts/cta-final' ); ?>

<?php get_footer(); ?>
