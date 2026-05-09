<?php get_header(); ?>
<?php pasc_breadcrumbs( array(
	array( 'label' => 'Resources', 'url' => home_url( '/resources/' ) ),
	array( 'label' => 'When to fire your pool vendor' ),
) ); ?>

<section class="page-hero">
  <div class="wrap">
    <span class="eyebrow">Property manager guide</span>
    <h1>When to fire your <span class="red">pool service vendor.</span></h1>
    <p>Eight warning signs your commercial pool vendor is failing — and the playbook for transitioning to a new vendor without disrupting guests, members, residents, or your inspection record.</p>
  </div>
</section>

<section class="legal">
  <div class="wrap">
    <p class="updated">Reading time: 5 minutes</p>

    <h2>The 8 warning signs</h2>

    <h3>1. You can't get a same-day service report.</h3>
    <p>Modern commercial pool service is photo-confirmed and same-day. If your vendor still emails a paper-scanned weekly summary on Friday for the prior Monday's service, they're operating in the 1990s. The reason this matters: when a guest complaint comes in Wednesday, you need Tuesday's data — not next Friday's.</p>

    <h3>2. Same property, different technician every visit.</h3>
    <p>If you don't know your tech's name, your vendor doesn't have route stability. Pools have history — equipment quirks, chemistry baselines, recurring problems — and a tech who knows the pool catches issues earlier. Industry standard is one named tech per route, with one backup. Vendors that use rotating contractors will always under-perform on issue detection.</p>

    <h3>3. The COI took two weeks (or never came).</h3>
    <p>Certificate of Insurance turnaround is a litmus test. Vendors with real systems deliver COI within 24–48 hours of contract signing. Vendors that take 5+ business days are managing insurance manually, which means they're managing everything else manually too. If the COI never came at all, your property is at uninsured-vendor risk — get rid of them immediately.</p>

    <h3>4. Equipment failures get diagnosed by a subcontractor.</h3>
    <p>If every repair starts with "we need to send our equipment guy out next week," you're paying full price for service-only and reduced price for repair-coordination. Better vendors employ in-house W-2 repair techs who can diagnose during the regular service visit and quote on the spot. The "subcontractor" model also means no warranty.</p>

    <h3>5. Surprise add-on bills.</h3>
    <p>If the monthly bill varies because chemicals are billed separately, filter media is "extra," or "trip charges" appear randomly, your vendor isn't on a real flat-rate contract. Real commercial pool service contracts include all standard chemicals and all standard work. Surprise bills are how vendors make the margin they should be making by quoting accurately upfront.</p>

    <h3>6. The annual rate increase isn't documented.</h3>
    <p>Rates should be indexed to chemical and labor cost increases (typically 3–5% per year), with a clear cap. If you got an "8% increase, effective immediately, no notice" letter — they're testing your willingness to push back. Real vendors give 60-day notice and explain the index.</p>

    <h3>7. They don't have a portal — or won't give you access.</h3>
    <p>Modern commercial pool service vendors provide a customer portal with service history, photos, chemistry readings, and invoicing. If your vendor still operates from email and Excel, they can't scale and they can't provide the audit trail you need for compliance, board reporting, or insurance claims.</p>

    <h3>8. Your gut tells you the work isn't being done.</h3>
    <p>The water doesn't look right. The deck has debris that wasn't there yesterday. The skimmer baskets are full when they shouldn't be. If you're regularly second-guessing whether the tech actually showed up, you're already paying for service you're not getting. Photo-confirmed visits exist for exactly this reason.</p>

    <h2>The transition playbook</h2>
    <p>Switching pool service vendors mid-season feels risky but isn't, if done correctly. The transition takes 2–3 weeks if managed well.</p>

    <h3>Week 1: Run the RFP, identify the new vendor</h3>
    <p>Use a real RFP — see <a href="<?php echo esc_url( home_url( '/resources/how-to-write-pool-service-rfp/' ) ); ?>">our RFP guide</a>. Get COI, references, and a written transition plan from the winning vendor.</p>

    <h3>Week 2: Sign contract, COI on file, schedule overlap</h3>
    <p>Sign the new contract with a future start date (typically 14 days out). The new vendor delivers COI, schedules the on-site walk-through, and reviews chemistry baseline.</p>

    <h3>Week 3: Cancel the prior vendor, new vendor begins</h3>
    <p>Send 30-day cancellation to current vendor (or whatever notice your contract requires). New vendor begins service. There's typically a 1–2 day overlap to ensure no gap in compliance documentation.</p>

    <h3>What guests, members, and residents see</h3>
    <p>Done right: nothing. The pool stays open, the chemistry stays in compliance, the deck stays clean. The truck in the parking lot has a different name. That's it.</p>

    <h2>The hardest part</h2>
    <p>The hardest part of firing a vendor isn't operational — it's political. Boards hesitate to "rock the boat." Owners want to give the current vendor "one more chance." That hesitation costs you another quarter of below-standard service. Set the bar in the RFP, score against it, and let the data make the case.</p>
  </div>
</section>

<?php $pasc_cta_heading = 'Ready to'; $pasc_cta_heading_red = 'switch vendors?'; $pasc_cta_body = 'Send us your current vendor scope and last 60 days of reports. We will quote a fixed-rate transition with COI in 24 hours.'; get_template_part( 'template-parts/cta-final' ); ?>
<?php pasc_last_updated(); ?>
<?php get_footer(); ?>
