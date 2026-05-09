<?php get_header(); ?>
<?php pasc_breadcrumbs( array(
	array( 'label' => 'Resources', 'url' => home_url( '/resources/' ) ),
	array( 'label' => 'Brand-flag pool QA compliance' ),
) ); ?>

<section class="page-hero">
  <div class="wrap">
    <span class="eyebrow">Hotel manager guide</span>
    <h1>Brand-flag hotel pool <span class="red">QA compliance.</span></h1>
    <p>How major hotel brands evaluate pool service during QA inspections. What Marriott Bonvoy QA, Hilton Quality Assurance, IHG Brand Safety, and Choice Hotels look at — and how to pass first try.</p>
  </div>
</section>

<section class="legal">
  <div class="wrap">
    <p class="updated">Reading time: 6 minutes</p>

    <h2>Why brand-flag pool QA matters</h2>
    <p>If you operate a Marriott, Hilton, IHG, Hyatt, or Choice-branded hotel, your franchise agreement requires periodic Quality Assurance inspections. The pool is one of the most-cited inspection items because it\'s visible to guests, has measurable parameters (chlorine, pH, clarity), and is governed by Florida health code that the QA inspector knows. Failed QA inspections can trigger franchise penalties, brand-flag risk, and (in repeated cases) re-flagging or de-flagging the property.</p>

    <h2>What every brand-flag QA inspector checks</h2>
    <p>Despite branded variations, every major-flag QA inspection touches these pool items:</p>
    <ul>
      <li><strong>Water clarity.</strong> Visible bottom from any point at the deepest end. Cloudy water = automatic deduction.</li>
      <li><strong>Combined chlorine smell.</strong> If it smells like a public pool, combined chlorine is too high. Citation.</li>
      <li><strong>Daily log binder.</strong> Date, time, signature, FAC, pH, combined chlorine. Missing or incomplete days = citation.</li>
      <li><strong>FL health-code compliance.</strong> Pool barrier code (Florida Building Code 454), depth markings, life safety equipment.</li>
      <li><strong>Deck cleanliness.</strong> Debris-free, no visible algae on tile or grout, clean drains.</li>
      <li><strong>Equipment room access &amp; safety.</strong> Locked, signage in place, OSHA-compliant chemical handling.</li>
      <li><strong>Service vendor contract on file.</strong> Inspector may ask. Active commercial pool service contract with credentialed vendor expected.</li>
    </ul>

    <h2>Marriott Bonvoy QA specifics</h2>
    <p>Marriott QA inspectors use the Bonvoy QA standards which include pool-specific items in the "Pool Area" section. Key Marriott-specific items:</p>
    <ul>
      <li>Documented chemical service log (vendor-provided, signed)</li>
      <li>Pool surface clarity to NSF/ANSI 50 standards</li>
      <li>Hot tub bromine (or chlorine) within Marriott target ranges, generally tighter than FL minimum</li>
      <li>Service technician arrival time documented (Marriott prefers 5-7am to avoid guest visibility)</li>
      <li>Photo evidence of service (Marriott QA increasingly accepts vendor photo logs)</li>
    </ul>

    <h2>Hilton Quality Assurance specifics</h2>
    <p>Hilton QA inspections evaluate against Hilton brand standards which vary by sub-brand (Hampton, Hilton Garden Inn, Embassy, Hilton, Conrad, Waldorf). Key items consistent across sub-brands:</p>
    <ul>
      <li>Pool deck condition (no visible algae, mildew, or debris)</li>
      <li>Service vendor identifiable on property (badge, marked vehicle)</li>
      <li>Chemical log retained at property, available on inspector request</li>
      <li>Pool service contract with current COI on file (named insured: hotel ownership entity)</li>
      <li>Equipment room labeled and OSHA-compliant</li>
    </ul>

    <h2>IHG Brand Safety &amp; Security specifics</h2>
    <p>IHG (InterContinental, Crowne Plaza, Holiday Inn, Holiday Inn Express, Staybridge, Candlewood) Brand Safety &amp; Security inspections include pool-specific items focused heavily on chemistry compliance and equipment maintenance documentation:</p>
    <ul>
      <li>Daily/weekly chemistry logs with vendor signatures</li>
      <li>Equipment maintenance records (heater service, filter cleaning frequency)</li>
      <li>Pool drain anti-entrapment compliance (VGB Act requirements)</li>
      <li>Lifeguard signage and depth markings to FL code</li>
      <li>Service vendor contact information posted in equipment room for emergency access</li>
    </ul>

    <h2>Choice Hotels &amp; Wyndham specifics</h2>
    <p>Choice (Comfort Inn, Quality Inn, Sleep Inn, Cambria, Ascend) and Wyndham (Days Inn, Ramada, Howard Johnson, Wyndham Garden) brand standards are typically less prescriptive than Marriott or Hilton but include the same FL health code requirements. Vendor service log and current COI are the most-checked items.</p>

    <h2>How to set up your pool service for guaranteed QA pass</h2>
    <ol>
      <li><strong>Pick a vendor with brand-flag QA experience.</strong> Ask if they\'ve serviced Marriott, Hilton, IHG, Choice properties before. Reference at least one current branded customer.</li>
      <li><strong>Insist on photo-confirmed visit reports.</strong> QA inspectors accept these as evidence of consistent service. Required for some brand-flag standards.</li>
      <li><strong>Set up the daily log binder properly.</strong> Tabbed by month, signed by your vendor on every visit. Inspector should be able to find any specific day in 30 seconds.</li>
      <li><strong>Maintain COI on file with annual renewal.</strong> COIs lapse silently; check annually with vendor.</li>
      <li><strong>Schedule pre-QA pool walkthrough.</strong> If you know QA is coming in 30 days, have your vendor do a thorough walk-through and address any visible issues before the inspector arrives.</li>
      <li><strong>Document remediation of any prior citations.</strong> If last QA cited "combined chlorine high," document the specific changes made (CYA reduction via partial drain, target chlorine adjustment, etc.).</li>
    </ol>

    <h2>What happens when QA fails</h2>
    <p>Failed QA inspections trigger brand-specific follow-up: re-inspection within 30-60 days, mandatory action plan with corrective steps, escalation to franchise compliance team. Repeated failures over 12-24 months can trigger franchise penalty fees, brand-flag review, or in extreme cases franchise termination. None of these outcomes are good for the property\'s value or operations.</p>
    <p>The pool is the easiest QA category to fix and the easiest to fail. Get the documentation right and the inspections become routine.</p>
  </div>
</section>

<?php $pasc_cta_heading = 'Hotel pool not ready'; $pasc_cta_heading_red = 'for QA?'; $pasc_cta_body = 'We service Marriott, Hilton, IHG, Choice, and Wyndham branded hotels across Florida. QA-ready documentation, dawn cleaning, photo-confirmed visits.'; get_template_part( 'template-parts/cta-final' ); ?>
<?php pasc_last_updated(); ?>
<?php get_footer(); ?>
