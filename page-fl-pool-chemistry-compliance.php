<?php get_header(); ?>
<?php pasc_breadcrumbs( array(
	array( 'label' => 'Resources', 'url' => home_url( '/resources/' ) ),
	array( 'label' => 'FL pool chemistry compliance' ),
) ); ?>

<section class="page-hero">
  <div class="wrap">
    <span class="eyebrow">Property manager guide</span>
    <h1>Florida pool chemistry <span class="red">compliance guide.</span></h1>
    <p>FL Administrative Code 64E-9 in plain English. Target ranges, daily log requirements, common inspector citations, and how to never fail an unannounced inspection again.</p>
  </div>
</section>

<section class="legal">
  <div class="wrap">
    <p class="updated">Reading time: 6 minutes</p>

    <h2>What is FL Admin Code 64E-9?</h2>
    <p>Florida Administrative Code Chapter 64E-9 is the public-pool regulation maintained by the Florida Department of Health. It applies to every commercial pool in the state — hotels, condo associations, fitness facilities, schools, water parks, country clubs, vacation rentals offered for short-term rent, municipal pools — basically any pool that's not single-family residential.</p>
    <p>The code covers chemistry, equipment, safety, signage, accessibility, and inspection standards. Most property managers think 64E-9 is a chemistry document. It's much more — but chemistry is the part inspectors check first and cite most often.</p>

    <h2>The chemistry parameters that matter most</h2>
    <ul>
      <li><strong>Free Available Chlorine (FAC):</strong> 1.0–10.0 ppm. Below 1.0 ppm = automatic citation; pool may be ordered closed. Most operators target 2–4 ppm with a hot-tub-equivalent floor of 3 ppm.</li>
      <li><strong>Combined Chlorine:</strong> below 0.4 ppm. Above 0.4 = "chloramines" = the smell, the eye irritation, the guest complaints. Indicates need for shock or breakpoint chlorination.</li>
      <li><strong>pH:</strong> 7.2–7.8. Below 7.2 = corrosion of plaster, equipment, plumbing. Above 7.8 = ineffective chlorine, scale, cloudy water.</li>
      <li><strong>Total Alkalinity:</strong> 60–180 ppm (target 80–120 ppm). Stabilizes pH against shock.</li>
      <li><strong>Calcium Hardness:</strong> 200–400 ppm (target 250–350 ppm). Below 150 = aggressive water that pulls calcium from plaster. Above 500 = scale formation.</li>
      <li><strong>Cyanuric Acid (CYA):</strong> 30–100 ppm. Stabilizes chlorine against UV. Above 100 = chlorine becomes ineffective; pool may need partial drain.</li>
      <li><strong>Total Dissolved Solids (TDS):</strong> below 3,000 ppm above source water. Above triggers partial drain.</li>
    </ul>

    <h2>Daily log requirements</h2>
    <p>FL Admin Code 64E-9 requires daily testing logs for all public pools, including:</p>
    <ul>
      <li>FAC, pH, and combined chlorine readings — daily, minimum once per day, ideally twice (morning + afternoon during peak season)</li>
      <li>Date, time, and signature of the person who tested</li>
      <li>Action taken if any reading was outside acceptable range</li>
      <li>Logs retained for 12 months minimum, 24+ months recommended</li>
    </ul>
    <p>Pools without staffed lifeguards can self-administer the logs through the property's pool service vendor — but the property is responsible for ensuring it happens.</p>

    <h2>Common inspector citations (and how to avoid them)</h2>
    <ul>
      <li><strong>FAC below 1.0 ppm.</strong> Most common citation. Often caused by inadequate stabilizer (CYA too low) — chlorine evaporates in UV faster than it's replenished.</li>
      <li><strong>pH out of range.</strong> Second most common. Caused by neglected acid balancing during heavy bather load.</li>
      <li><strong>Missing or incomplete daily logs.</strong> Inspector asks to see the binder. If it's empty or missing days, automatic write-up.</li>
      <li><strong>CYA above 100 ppm.</strong> Pools that go years without partial drains accumulate cyanuric acid until chlorine becomes ineffective. Eventually the pool can't be brought into compliance without draining.</li>
      <li><strong>Combined chlorine above 0.4 ppm.</strong> Indicates chlorine demand is exceeding sanitizer capacity. Causes "chloramine smell" and eye irritation guest complaints.</li>
      <li><strong>Pool barrier (FBC 454) violations.</strong> Not chemistry, but commonly cited at the same inspection. Gates, latches, signage, depth markings.</li>
    </ul>

    <h2>What to do if you fail an inspection</h2>
    <ul>
      <li>Most violations are "warning" or "minor" with a 14-day re-inspection window. Fix and document the fix, request re-inspection.</li>
      <li>Major violations can result in pool closure orders. Pool can't reopen until passed re-inspection. For a hotel or HOA, that's a guest-experience emergency.</li>
      <li>Repeated citations can escalate to fines and permit revocation.</li>
      <li>The fastest fix is usually engaging a CPO-certified service vendor immediately, having them rebuild chemistry, and submitting documentation with the re-inspection request.</li>
    </ul>

    <h2>How a good vendor handles compliance</h2>
    <p>The point of contracting commercial pool service isn't to outsource chemistry — it's to outsource compliance. A real commercial vendor:</p>
    <ul>
      <li>Logs every parameter on every visit, in the format your inspector wants</li>
      <li>Flags any reading approaching out-of-range and adjusts before it crosses the line</li>
      <li>Maintains a reading binder you can hand to the inspector cold</li>
      <li>Knows your county health department's inspection cadence and prepares accordingly</li>
      <li>Catches the slow-moving issues (CYA creep, calcium scale, TDS accumulation) months before they become citations</li>
    </ul>

    <h2>Where to read the actual code</h2>
    <p>Florida Administrative Code Rule 64E-9 is publicly available at the FL Department of State's official rules website. Search "64E-9" on flrules.org. The code is updated periodically; check for current version before relying on any chemistry target.</p>
  </div>
</section>

<section class="related">
  <div class="wrap">
    <div class="section-head center"><span class="eyebrow">Related</span><h2>Compliance &amp; service.</h2></div>
    <div class="related-grid">
      <a class="related-card" href="<?php echo esc_url( home_url( '/services/water-chemistry/' ) ); ?>"><h4>Our chemistry service</h4><p>Inspector-ready logs, every visit.</p><span class="arrow">View service</span></a>
      <a class="related-code" href="<?php echo esc_url( home_url( '/industries/fitness-aquatic/' ) ); ?>"></a>
      <a class="related-card" href="<?php echo esc_url( home_url( '/industries/fitness-aquatic/' ) ); ?>"><h4>Fitness &amp; aquatic</h4><p>Built around 64E-9 compliance.</p><span class="arrow">View industry</span></a>
      <a class="related-card" href="<?php echo esc_url( home_url( '/industries/municipal-schools/' ) ); ?>"><h4>Municipal &amp; schools</h4><p>Public-pool standards, RFP-ready.</p><span class="arrow">View industry</span></a>
      <a class="related-card" href="<?php echo esc_url( home_url( '/resources/how-to-write-pool-service-rfp/' ) ); ?>"><h4>RFP guide</h4><p>How to write a commercial pool service RFP.</p><span class="arrow">Read guide</span></a>
    </div>
  </div>
</section>

<?php $pasc_cta_heading = 'Need to fix a'; $pasc_cta_heading_red = 'compliance issue fast?'; $pasc_cta_body = 'We can rebuild chemistry, document the fix, and prep your binder for a re-inspection. Same-day response in most counties.'; get_template_part( 'template-parts/cta-final' ); ?>
<?php pasc_last_updated(); ?>
<?php get_footer(); ?>
