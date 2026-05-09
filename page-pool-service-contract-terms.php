<?php get_header(); ?>
<?php pasc_breadcrumbs( array(
	array( 'label' => 'Resources', 'url' => home_url( '/resources/' ) ),
	array( 'label' => 'Contract terms explained' ),
) ); ?>

<section class="page-hero">
  <div class="wrap">
    <span class="eyebrow">Property manager guide</span>
    <h1>Commercial pool service <span class="red">contract terms explained.</span></h1>
    <p>Every term that should be in your commercial pool service contract — and what to push back on when it's not.</p>
  </div>
</section>

<section class="legal">
  <div class="wrap">
    <p class="updated">Reading time: 6 minutes</p>

    <h2>The non-negotiables</h2>
    <p>Skip any commercial pool service contract that doesn't include these in writing.</p>

    <h3>1. Scope of services</h3>
    <p>Specifically what is and isn't included in the monthly rate. "Weekly service" is not a scope — that's a frequency. Real scope reads: "Twelve-point weekly maintenance per attached checklist (Schedule A), all standard chemicals included, photo-confirmed service report sent same business day."</p>

    <h3>2. Visit frequency &amp; schedule</h3>
    <p>Day of week, approximate window (e.g., "Tuesdays, between 7am and 11am"). Public pools in Florida typically require minimum weekly per FAC 64E-9; high-bather-load properties may need 2x weekly. Make-up policy for missed weeks (weather, holiday).</p>

    <h3>3. Pricing and what triggers changes</h3>
    <p>Monthly rate stated. Effective date stated. Annual escalator stated (typically 3–5% with a cap). Trigger for mid-term renegotiation (typically: chemistry cost increase &gt; 15% YoY).</p>

    <h3>4. Insurance &amp; COI requirements</h3>
    <p>Vendor must maintain general liability ($1M minimum, $2M aggregate) and workers' comp. COI naming the property as additional insured. COI provided within 24 hours of signing. Annual COI renewal automatic. Vendor liability cap clearly stated (typically capped at 90 days of service fees).</p>

    <h3>5. Cancellation terms</h3>
    <p>Standard: month-to-month with 30 days' written notice by either party. Avoid contracts with: 12+ month minimum, automatic multi-year renewal, large cancellation fees, only-cancellable-on-anniversary clauses.</p>

    <h3>6. What's billed separately (and how)</h3>
    <p>Equipment repair, acid washing, leak detection, pool renovation, drain &amp; refill, specialty chemicals — listed separately with billing approach (per-occurrence quote, not auto-billed). Customer must approve before any non-included work begins.</p>

    <h3>7. Reporting cadence</h3>
    <p>Service reports per visit (with what data — photos, chemistry readings, technician name, time on site). Monthly portfolio report (for HOAs, multi-property). Format (PDF, portal, email).</p>

    <h3>8. Response time SLAs</h3>
    <p>Standard service: same day of week, every week. Equipment failure response: same business day for diagnosis. Emergency response (chemistry failure, pump down): contact method and target response time.</p>

    <h3>9. Force majeure</h3>
    <p>Vendor not liable for service interruption due to hurricanes, floods, government action, supply shortage. Should include their commitment to resume service within X days post-event.</p>

    <h3>10. Governing law</h3>
    <p>Florida law (for FL operations). Specify county jurisdiction for dispute resolution.</p>

    <h2>Things to push back on</h2>
    <ul>
      <li><strong>Auto-renewal clauses without affirmative consent.</strong> A contract that "automatically renews for another year unless you cancel 90 days in advance" is a vendor protection, not a customer protection.</li>
      <li><strong>Unlimited liability cap.</strong> Cap at 90 days of service fees is standard and reasonable.</li>
      <li><strong>"Reasonable rate increase" without a defined cap.</strong> Always define the cap in writing.</li>
      <li><strong>Vague "additional services billed at standard rates."</strong> Standard rates per what schedule? Get the rate card attached.</li>
      <li><strong>Subcontractor coverage gaps.</strong> If vendor subcontracts, the subcontractor's insurance must also name your property.</li>
      <li><strong>Cancellation triggered by "any breach."</strong> Vendors love this so they can keep you on contract through service issues. Specify cure periods.</li>
    </ul>

    <h2>Things customers often miss</h2>
    <ul>
      <li><strong>Hurricane response inclusion.</strong> Is post-storm debris removal included in monthly rate, or billed separately? Define pre-event vs post-event.</li>
      <li><strong>Holiday-week service.</strong> Is the regular service day moved or skipped? How is rate adjusted?</li>
      <li><strong>Off-season rate (for properties that close).</strong> Some HOAs in cooler regions reduce service Nov–Feb. Define the rate.</li>
      <li><strong>Personnel transition rights.</strong> If your favorite tech leaves the vendor, do you have any input on the replacement?</li>
      <li><strong>Data ownership.</strong> Service records, chemistry readings — these are yours, not the vendor's. Specify.</li>
    </ul>

    <h2>Bottom line</h2>
    <p>A good commercial pool service contract reads like a service-level agreement, not a sales document. If you're reading vague marketing language instead of specific commitments, push for the specifics — or move to a vendor who'll write them.</p>
  </div>
</section>

<?php $pasc_cta_heading = 'Want to see'; $pasc_cta_heading_red = 'a proper contract?'; $pasc_cta_body = 'Request our standard service agreement template. We will send the actual document we sign with customers, no edits, no marketing wrapper.'; get_template_part( 'template-parts/cta-final' ); ?>
<?php pasc_last_updated(); ?>
<?php get_footer(); ?>
