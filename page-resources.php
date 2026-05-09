<?php get_header(); ?>
<?php pasc_breadcrumbs( array( array( 'label' => 'Resources' ) ) ); ?>

<section class="page-hero">
  <div class="wrap">
    <span class="eyebrow">Resources</span>
    <h1>Free guides for <span class="red">property managers.</span></h1>
    <p>Long-form playbooks for the questions Florida property managers, HOA boards, facilities directors, and aquatic managers actually search. No gated downloads, no email forms.</p>
  </div>
</section>

<section class="block">
  <div class="wrap">
    <div class="related-grid">
      <a class="related-card" href="<?php echo esc_url( home_url( '/resources/how-to-write-pool-service-rfp/' ) ); ?>">
        <h4>How to write a commercial pool service RFP</h4>
        <p>Step-by-step guide to writing a proper RFP — scope, evaluation criteria, COI requirements, contract terms.</p>
        <span class="arrow">Read guide</span>
      </a>
      <a class="related-card" href="<?php echo esc_url( home_url( '/resources/fl-pool-chemistry-compliance/' ) ); ?>">
        <h4>Florida pool chemistry compliance guide</h4>
        <p>FL Admin Code 64E-9 in plain English: FAC, pH, alkalinity, CYA targets. Daily logs, audit prep, common citations.</p>
        <span class="arrow">Read guide</span>
      </a>
      <a class="related-card" href="<?php echo esc_url( home_url( '/resources/when-to-fire-your-pool-vendor/' ) ); ?>">
        <h4>When to fire your pool service vendor — 8 signs</h4>
        <p>How to know your vendor is failing, and how to transition without disrupting guests, members, or residents.</p>
        <span class="arrow">Read guide</span>
      </a>
      <a class="related-card" href="<?php echo esc_url( home_url( '/resources/pool-service-contract-terms/' ) ); ?>">
        <h4>Commercial pool service contract terms</h4>
        <p>Essential terms for a commercial pool service contract: SLAs, COI, cancellation, liability caps, response times.</p>
        <span class="arrow">Read guide</span>
      </a>
    </div>
  </div>
</section>

<?php $pasc_cta_heading = 'Have a question'; $pasc_cta_heading_red = 'we should write about?'; $pasc_cta_body = 'Email commercial@poolallstars.com or send a note via the contact form. We add new guides based on real questions from real property managers.'; get_template_part( 'template-parts/cta-final' ); ?>
<?php pasc_last_updated(); ?>
<?php get_footer(); ?>
