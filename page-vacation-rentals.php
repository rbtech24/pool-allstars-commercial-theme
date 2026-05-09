<?php get_header(); ?>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Service","serviceType":"Vacation Rental Pool Service","provider":{"@type":"LocalBusiness","name":"<?php echo esc_js( pasc_company_name() ); ?>","telephone":"+1-833-968-4888"},"areaServed":"Florida","url":"<?php echo esc_url( get_permalink() ); ?>"}</script>
<?php pasc_breadcrumbs( array( array( 'label' => 'Industries', 'url' => home_url( '/industries/' ) ), array( 'label' => 'Vacation rentals' ) ) ); ?>

<section class="industry-hero"><div class="wrap"><div class="industry-hero-grid">
  <div>
    <span class="eyebrow">Vacation rentals</span>
    <h1>Pool service that <span class="red">protects your 5-star reviews.</span></h1>
    <p class="lead">Cloudy water on guest check-in is a 1-star review. So is a 'No swimming' sign for a guest who booked specifically for the pool. We service vacation rentals on the schedule that matters — turnover day.</p>
    <div class="cta-row"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Request a proposal</a><a href="tel:<?php echo esc_attr( pasc_phone_tel() ); ?>" class="btn btn-soft">Call <?php echo esc_html( pasc_phone_display() ); ?></a></div>
  </div>
  <div class="industry-img" role="img" aria-label="Vacation rental pool service"></div>
</div></div></section>

<section class="two-col"><div class="wrap"><div class="two-col-grid">
  <div><h2>Built for <span class="red">turnover day.</span></h2><p>We coordinate with your cleaning crew to be on-property between checkout and check-in. Photo-confirmed reports go to your management software (Hostfully, Streamline, OwnerRez, Guesty). One contract for your whole portfolio.</p><p>Single-owner Airbnb hosts to 200+ unit short-term rental management companies.</p></div>
  <div><h2>What rental hosts need.</h2><ul><li>Turnover-day cleanings between checkout &amp; check-in</li><li>Photo proof sent to your platform/software</li><li>Variable bather-load chemistry adjustment</li><li>Emergency dispatch for mid-stay issues</li><li>Owner-direct billing or management-company billing</li><li>Photo-ready clarity for your listing photos</li></ul></div>
</div></div></section>

<?php get_template_part( 'template-parts/services-grid' ); ?>
<?php get_template_part( 'template-parts/areas-grid' ); ?>
<?php $pasc_cta_heading = 'Pool service that'; $pasc_cta_heading_red = 'protects your reviews.'; get_template_part( 'template-parts/cta-final' ); ?>
<?php get_footer(); ?>
