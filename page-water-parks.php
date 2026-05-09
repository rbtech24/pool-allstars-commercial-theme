<?php get_header(); ?>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Service","serviceType":"Water Park Pool Service","provider":{"@type":"LocalBusiness","name":"<?php echo esc_js( pasc_company_name() ); ?>","telephone":"+1-800-394-7665"},"areaServed":"Florida","url":"<?php echo esc_url( get_permalink() ); ?>"}</script>
<?php pasc_breadcrumbs( array( array( 'label' => 'Industries', 'url' => home_url( '/industries/' ) ), array( 'label' => 'Water parks' ) ) ); ?>

<section class="industry-hero"><div class="wrap"><div class="industry-hero-grid">
  <div>
    <span class="eyebrow">Water parks &amp; attractions</span>
    <h1>Service for the pools <span class="red">that don't sleep.</span></h1>
    <p class="lead">Wave pools, slide catch basins, lazy rivers, splash pads, kiddie zones. High bather load, complex plumbing, peak-season operations. Water park pool service is a different discipline — and we have the staffing for it.</p>
    <div class="cta-row"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Request a proposal</a><a href="tel:<?php echo esc_attr( pasc_phone_tel() ); ?>" class="btn btn-soft">Call <?php echo esc_html( pasc_phone_display() ); ?></a></div>
  </div>
  <div class="industry-img" role="img" aria-label="Water park pool service"></div>
</div></div></section>

<section class="two-col"><div class="wrap"><div class="two-col-grid">
  <div><h2>Built for <span class="red">peak season.</span></h2><p>March-through-October Florida water park operations push bather loads no residential or hotel pool sees. Continuous chlorine demand, filter loading 3x normal, equipment running 16+ hours daily. We staff and stock for it.</p><p>Resort water parks, standalone parks, condo splash pads.</p></div>
  <div><h2>What water parks need.</h2><ul><li>Continuous chemistry monitoring (not weekly)</li><li>Slide &amp; feature plumbing maintenance</li><li>High-volume filter media swaps</li><li>Peak-season dedicated staffing</li><li>Health-code compliance for high bather counts</li><li>Equipment redundancy planning &amp; preventative maintenance</li></ul></div>
</div></div></section>

<?php get_template_part( 'template-parts/services-grid' ); ?>
<?php get_template_part( 'template-parts/areas-grid' ); ?>
<?php $pasc_cta_heading = 'Water park ready for'; $pasc_cta_heading_red = 'peak season?'; get_template_part( 'template-parts/cta-final' ); ?>
<?php get_footer(); ?>
