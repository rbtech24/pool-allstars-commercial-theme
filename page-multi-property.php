<?php get_header(); ?>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Service","serviceType":"Multi-Property Portfolio Pool Service","provider":{"@type":"LocalBusiness","name":"<?php echo esc_js( pasc_company_name() ); ?>","telephone":"+1-800-394-7665"},"areaServed":"Florida","url":"<?php echo esc_url( get_permalink() ); ?>"}</script>
<?php pasc_breadcrumbs( array( array( 'label' => 'Industries', 'url' => home_url( '/industries/' ) ), array( 'label' => 'Multi-property' ) ) ); ?>

<section class="industry-hero"><div class="wrap"><div class="industry-hero-grid">
  <div>
    <span class="eyebrow">Multi-property portfolios</span>
    <h1>One contract. <span class="red">Every property.</span> One invoice.</h1>
    <p class="lead">Portfolio managers don't want eight pool vendors and eight separate billing cycles. They want one accountable team, consolidated reporting, and pricing that improves as the portfolio grows. That's how we contract.</p>
    <div class="cta-row"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Request a proposal</a><a href="tel:<?php echo esc_attr( pasc_phone_tel() ); ?>" class="btn btn-soft">Call <?php echo esc_html( pasc_phone_display() ); ?></a></div>
  </div>
  <div class="industry-img" role="img" aria-label="Multi-property pool service"></div>
</div></div></section>

<section class="two-col"><div class="wrap"><div class="two-col-grid">
  <div><h2>Built for <span class="red">portfolios.</span></h2><p>Single point of contact for all your properties — one account manager who knows every pool by name. Consolidated monthly invoice with per-property line items for cost allocation. Volume pricing that kicks in at 3+ properties.</p><p>We currently serve management companies running 3 to 30+ properties across Florida.</p></div>
  <div><h2>What portfolio managers get.</h2><ul><li>One contract covering all properties under management</li><li>Volume discounts at 3, 6, 10, and 25+ properties</li><li>Single dedicated account manager (named, with a cell)</li><li>Consolidated monthly invoice with per-property allocation</li><li>Portfolio-wide reporting in Excel/CSV for your accounting team</li><li>One COI covering all named insured locations</li></ul></div>
</div></div></section>

<?php get_template_part( 'template-parts/services-grid' ); ?>

<section class="proof block"><div class="wrap"><div class="section-head center"><span class="eyebrow">What portfolio operators say</span></div><div class="testimonials">
  <div class="tcard"><div class="stars">★★★★★</div><q>Pool All-Stars manages all eight of our portfolio properties on one contract. Their reporting is the cleanest I've seen in pool service.</q><div class="who"><strong>Maria S.</strong><span>VP Ops · Coastal Hospitality</span></div></div>
  <div class="tcard"><div class="stars">★★★★★</div><q>Twelve properties, one invoice, one PM. We were paying 4 vendors before. Saved us 22% on hard cost AND 12 hours/month of accounting.</q><div class="who"><strong>Karen J.</strong><span>Director · Sunstate Property Group</span></div></div>
  <div class="tcard"><div class="stars">★★★★★</div><q>Volume pricing makes the math obvious — every property we add gets cheaper, service quality stays exact.</q><div class="who"><strong>Aaron F.</strong><span>Asset Manager · FL Condo Holdings</span></div></div>
</div></div></section>

<?php get_template_part( 'template-parts/areas-grid' ); ?>
<?php $pasc_cta_heading = 'Consolidate your'; $pasc_cta_heading_red = 'pool vendors.'; $pasc_cta_primary_label = 'Request portfolio proposal'; get_template_part( 'template-parts/cta-final' ); ?>
<?php get_footer(); ?>
