<?php get_header(); ?>
<?php pasc_breadcrumbs( array(
	array( 'label' => 'Resources', 'url' => home_url( '/resources/' ) ),
	array( 'label' => 'Hurricane recovery playbook' ),
) ); ?>

<section class="page-hero">
  <div class="wrap">
    <span class="eyebrow">Florida property manager guide</span>
    <h1>Hurricane pool recovery <span class="red">playbook.</span></h1>
    <p>Step-by-step pre-storm, during-storm, and post-storm protocol for Florida commercial pool properties. Based on 17 years of Atlantic and Gulf hurricane response.</p>
  </div>
</section>

<section class="legal">
  <div class="wrap">
    <p class="updated">Reading time: 7 minutes</p>

    <h2>Why a pool playbook matters</h2>
    <p>Hurricane season runs June 1 – November 30 in Florida. In a typical year, our service area sees 1-3 named storm impacts, with Category 1+ landfalls every 2-3 years. The properties that recover fastest are not the ones with the best luck — they're the ones with a documented playbook executed by a service vendor that's already been through it.</p>

    <h2>Pre-storm: 72 hours out</h2>
    <p>When a named storm enters the cone, work backward from forecast impact:</p>
    <ul>
      <li><strong>Lower water level 6-12 inches</strong> below skimmer to allow for storm surge and rain influx without overflow that can damage decking and equipment.</li>
      <li><strong>Super-chlorinate to FAC 5-7 ppm.</strong> Higher chlorine residual buys you time before contamination from storm debris exhausts sanitizer.</li>
      <li><strong>Do NOT cover the pool.</strong> Covers act as wind sails — they get torn off, often damaging the pool surface and surrounding equipment in the process. Leave the pool open to wind and debris.</li>
      <li><strong>Bring loose deck items inside.</strong> Furniture, vacuum hoses, brushes, salt bags, ladders. Anything not bolted down becomes a missile.</li>
      <li><strong>Power down equipment.</strong> Pumps, heaters, salt cell control, automation. Storm surge or flooding will destroy live electronics.</li>
      <li><strong>Document baseline.</strong> Photo every pool, every equipment pad, every deck. Time-stamped pre-storm photos are essential for insurance claims if anything is lost.</li>
    </ul>

    <h2>During the storm</h2>
    <p>Don\'t go to the property. The pool can take care of itself for 24-48 hours. Your safety matters more than your chemistry. Wait for "all clear" from local authorities before site visits resume.</p>

    <h2>Post-storm: hour zero to day 7</h2>

    <h3>First 24 hours (or first safe access)</h3>
    <ul>
      <li><strong>Visual safety inspection.</strong> Power lines down? Structural damage to pool surround? Equipment pad flooded? Exposed plumbing? Don\'t wade into a pool with downed power lines anywhere on property.</li>
      <li><strong>Photograph everything.</strong> Insurance documentation requires before/after with timestamps.</li>
      <li><strong>Begin debris removal.</strong> Leaves, branches, roof shingles, palm fronds, anything floating or sunk. Skim, vacuum, and remove with nets.</li>
    </ul>

    <h3>Days 2-3: stabilize chemistry</h3>
    <ul>
      <li><strong>Test water.</strong> Expect FAC near zero, pH possibly off, alkalinity dropped, possible high TDS from storm surge intrusion.</li>
      <li><strong>Shock treatment.</strong> Bring chlorine to 10+ ppm. Address the bacterial load from contamination.</li>
      <li><strong>Filter system check.</strong> Clean filter, replace media if heavily loaded with debris. Clogged filter slows recovery dramatically.</li>
      <li><strong>Equipment inspection.</strong> Power on slowly. Check pump primes, heater fires, salt cell reads. Replace anything water-damaged before continued operation.</li>
    </ul>

    <h3>Days 4-7: restoration</h3>
    <ul>
      <li><strong>Continuous filtration.</strong> 24/7 pump operation until clarity returns.</li>
      <li><strong>Daily chemistry adjustment</strong> as fresh demand drives the chlorine down.</li>
      <li><strong>Brush pool aggressively daily</strong> to prevent algae bloom in the recovery window.</li>
      <li><strong>Final balance.</strong> Once clear, balance to standard targets. Document with timestamped photos for insurance and reopening sign-off.</li>
    </ul>

    <h2>Days 7-30: equipment recovery &amp; insurance</h2>
    <ul>
      <li><strong>Document any equipment failures</strong> with serial numbers, age, replacement quotes. These become insurance claims if attributable to the storm.</li>
      <li><strong>Flood-damaged motors and electronics rarely recover.</strong> Expect to replace; running them dry-then-wet is a fire risk.</li>
      <li><strong>Salt cells and heater electronics</strong> are most commonly storm-damaged. Quote replacement upfront with your insurance adjuster.</li>
      <li><strong>Plaster and tile inspection</strong> for storm-debris damage. Reserve study consultants can assess if a resurface acceleration is warranted.</li>
    </ul>

    <h2>What we provide for contract customers</h2>
    <p>Our hurricane response is included in standard commercial weekly maintenance contracts:</p>
    <ul>
      <li>Pre-storm pool prep service (lower water, super-chlorinate, secure equipment)</li>
      <li>Post-storm rapid dispatch (typically within 48 hours of safe access reopening)</li>
      <li>Chemistry rebuild and continuous filtration management until swim-ready</li>
      <li>Equipment damage assessment with insurance-ready documentation</li>
      <li>Coordination with reserve study consultants for HOA capital impact assessment</li>
    </ul>
    <p>Major equipment replacement (pump, salt cell, heater, automation) is quoted separately as it always falls into your insurance claim or capital reserve cycle.</p>

    <h2>Specific storm references</h2>
    <ul>
      <li><strong>Hurricane Ian (Sept 2022)</strong> devastated SW Florida. Lee and Collier county recovery is ongoing into 2026 for some commercial properties.</li>
      <li><strong>Hurricane Helene (Sept 2024)</strong> hit Tampa Bay hard, particularly Pinellas County beaches. Major debris and salt-water flooding in Clearwater and St. Pete Beach.</li>
      <li><strong>Hurricane Milton (Oct 2024)</strong> followed Helene by 2 weeks. Cumulative damage across central and SW Florida.</li>
    </ul>
    <p>The lesson: hurricane response capacity should be a contract evaluation criterion, not an afterthought. Vendors that have actually responded to Ian, Helene, or Milton will respond to the next one differently than vendors who haven\'t.</p>
  </div>
</section>

<?php $pasc_cta_heading = 'Need post-storm'; $pasc_cta_heading_red = 'pool recovery?'; $pasc_cta_body = 'Call us. We dispatch within 24-48 hours of safe access reopening, with chemistry rebuild and equipment damage documentation.'; get_template_part( 'template-parts/cta-final' ); ?>
<?php pasc_last_updated(); ?>
<?php get_footer(); ?>
