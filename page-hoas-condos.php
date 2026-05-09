<?php get_header(); ?>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Service","serviceType":"HOA and Condominium Pool Service","provider":{"@type":"LocalBusiness","name":"<?php echo esc_js( pasc_company_name() ); ?>","telephone":"+1-833-968-4888"},"areaServed":"Florida","url":"<?php echo esc_url( get_permalink() ); ?>"}</script>
<?php pasc_breadcrumbs( array( array( 'label' => 'Industries', 'url' => home_url( '/industries/' ) ), array( 'label' => 'HOAs & condos' ) ) ); ?>

<section class="industry-hero"><div class="wrap"><div class="industry-hero-grid">
  <div>
    <span class="eyebrow">HOAs &amp; condos</span>
    <h1>Pool service the board <span class="red">never has to discuss.</span></h1>
    <p class="lead">Most board complaints about the pool are really complaints about the pool vendor — late visits, no reports, surprise repair bills, no one answering the phone in August. We solve that with predictable routes, monthly board reports, and a flat-rate contract.</p>
    <div class="cta-row"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Request a proposal</a><a href="tel:<?php echo esc_attr( pasc_phone_tel() ); ?>" class="btn btn-soft">Call <?php echo esc_html( pasc_phone_display() ); ?></a></div>
  </div>
  <div class="industry-img" role="img" aria-label="HOA pool service"></div>
</div></div></section>

<section class="two-col"><div class="wrap"><div class="two-col-grid">
  <div><h2>Built for the <span class="red">board.</span></h2><p>Monthly portfolio report formatted for board packets. Annual budget worksheets so you can plan the assessment without surprises. Direct line to a dedicated account manager — not a 1-800 voicemail loop.</p><p>Single-pool HOAs to multi-amenity 600-unit condos. We work with self-managed associations and big management companies (FirstService, Castle, Associa). One contract, one invoice, one accountable team.</p></div>
  <div><h2>What HOA boards actually need.</h2><ul><li>Predictable monthly rate — no surprise add-ons</li><li>COI on file in 24 hours, named insured the association</li><li>Monthly board-ready reports (PDF, email, or portal)</li><li>Same technician every visit — known to residents</li><li>5-day-a-week dispatch for emergencies</li><li>Annual capex planning for resurface / equipment cycles</li></ul></div>
</div></div></section>

<?php get_template_part( 'template-parts/services-grid' ); ?>

<section class="two-col" style="background:var(--paper)">
  <div class="wrap">
    <div class="two-col-grid">
      <div>
        <h2>HOA management platforms <span class="red">we work with.</span></h2>
        <p>Service reports, photo-confirmed visits, monthly board summaries, and invoices are formatted for the major HOA management platforms &mdash; email/PDF integration standard, direct API where the platform supports it.</p>
        <ul>
          <li><strong>AppFolio Property Manager</strong> &mdash; mid-market HOA / condo</li>
          <li><strong>Buildium</strong> &mdash; small-mid HOA portfolios</li>
          <li><strong>TownSq</strong> &mdash; HOA-specific platform</li>
          <li><strong>FrontSteps</strong> &mdash; HOA management platform</li>
          <li><strong>CINC Systems</strong> &mdash; HOA accounting + ops</li>
          <li><strong>Vantaca</strong> &mdash; HOA management software</li>
          <li><strong>Associa Connect</strong> &mdash; Associa-specific portal</li>
          <li><strong>CondoCafe</strong> &mdash; condo association platform</li>
          <li><strong>Yardi Voyager</strong> &mdash; large portfolio HOA + REIT</li>
        </ul>
      </div>
      <div>
        <h2>Vendor compliance platforms <span class="red">we're enrolled in.</span></h2>
        <p>HOAs managed by FirstService Residential, Castle Group, Associa, Greystar, Sentry Management, KW Property Management, and similar firms typically gate vendor access through compliance platforms. We're already enrolled and current &mdash; your property gets us approved in <strong>24-48 hours</strong>, not the typical 4-6 week new-vendor cycle.</p>
        <ul>
          <li><strong>Yardi VendorCafe</strong></li>
          <li><strong>RealPage Compliance Depot</strong></li>
          <li><strong>RMIS</strong> (Risk Management Information Systems)</li>
          <li><strong>Notivus</strong></li>
          <li><strong>OpsTechnology</strong></li>
          <li><strong>Vendor Verify</strong></li>
          <li><strong>Net Vendor</strong></li>
          <li><strong>Nexus Vendor Connect</strong></li>
          <li><strong>Coupa</strong> &mdash; for enterprise property managers</li>
        </ul>
        <p style="font-size:0.92rem;color:var(--gray);margin-top:1rem">COI, W-9, license, insurance, OSHA records uploaded and maintained current across every platform.</p>
      </div>
    </div>
  </div>
</section>

<section class="proof block"><div class="wrap"><div class="section-head center"><span class="eyebrow">What HOA boards say</span></div><div class="testimonials">
  <div class="tcard"><div class="stars">★★★★★</div><q>They sent the COI before the contract was even signed. That's how you know you're dealing with pros, not a guy with a truck.</q><div class="who"><strong>Robert K.</strong><span>Board President · Lakewood HOA</span></div></div>
  <div class="tcard"><div class="stars">★★★★★</div><q>Monthly reports are formatted exactly for our board packets. No more chasing the vendor before each meeting.</q><div class="who"><strong>Patricia M.</strong><span>Treasurer · Bay Pointe Condos</span></div></div>
  <div class="tcard"><div class="stars">★★★★★</div><q>Same technician for three years. Residents wave to him. That's not nothing in an HOA.</q><div class="who"><strong>Tom W.</strong><span>HOA Manager · Pinellas County</span></div></div>
</div></div></section>

<?php get_template_part( 'template-parts/areas-grid' ); ?>
<?php $pasc_cta_heading = 'Pool service your'; $pasc_cta_heading_red = 'board approves of.'; get_template_part( 'template-parts/cta-final' ); ?>
<?php pasc_last_updated(); ?>
<?php get_footer(); ?>
