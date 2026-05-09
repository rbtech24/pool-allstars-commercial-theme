<?php get_header(); ?>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Service","serviceType":"Municipal and School Pool Service","provider":{"@type":"LocalBusiness","name":"<?php echo esc_js( pasc_company_name() ); ?>","telephone":"+1-833-968-4888"},"areaServed":"Florida","url":"<?php echo esc_url( get_permalink() ); ?>"}</script>
<?php pasc_breadcrumbs( array( array( 'label' => 'Industries', 'url' => home_url( '/industries/' ) ), array( 'label' => 'Municipal & schools' ) ) ); ?>

<section class="industry-hero"><div class="wrap"><div class="industry-hero-grid">
  <div>
    <span class="eyebrow">Municipal &amp; schools</span>
    <h1>Public pool service that <span class="red">meets the bid spec.</span></h1>
    <p class="lead">Procurement officers don't have time for vendors who don't know what an RFP looks like. We respond to public-sector solicitations with proper formatting, COI, W-9, references, and pricing tables — first time, every time.</p>
    <div class="cta-row"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Request a proposal</a><a href="tel:<?php echo esc_attr( pasc_phone_tel() ); ?>" class="btn btn-soft">Call <?php echo esc_html( pasc_phone_display() ); ?></a></div>
  </div>
  <div class="industry-img" role="img" aria-label="Municipal pool service"></div>
</div></div></section>

<section class="two-col"><div class="wrap"><div class="two-col-grid">
  <div><h2>Built for <span class="red">public procurement.</span></h2><p>City rec centers, county aquatic complexes, K-12 swim programs, university pools. Public pools have specific compliance requirements (FAC bigger, CYA tighter, log retention longer) and audit cycles that private vendors often fumble.</p><p>We know the spec. We've serviced municipal and school facilities across Florida since 2014.</p></div>
  <div><h2>What public sector needs.</h2><ul><li>RFP responses formatted to your solicitation</li><li>W-9, COI, business license, references provided</li><li>Public-pool chemistry standards (FL Admin Code 64E-9)</li><li>Daily/weekly log retention to spec</li><li>NPDES &amp; backwash discharge compliance</li><li>Invoicing matched to your AP cycle (net-30, net-45, or PO-based)</li></ul></div>
</div></div></section>

<?php get_template_part( 'template-parts/services-grid' ); ?>
<?php pasc_render_testimonials_section( 'municipal-schools', 'What public-sector buyers say', 'Trusted by Florida cities, counties &amp; school districts' ); ?>
<?php get_template_part( 'template-parts/areas-grid' ); ?>
<?php $pasc_cta_heading = 'Send us your'; $pasc_cta_heading_red = 'solicitation.'; $pasc_cta_body = 'Email RFP, ITB, or RFQ. Response back within your timeline, properly formatted.'; $pasc_cta_primary_label = 'Submit RFP'; get_template_part( 'template-parts/cta-final' ); ?>
<?php pasc_last_updated(); ?>
<?php get_footer(); ?>
