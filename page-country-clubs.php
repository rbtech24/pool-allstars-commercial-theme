<?php get_header(); ?>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Service","serviceType":"Country Club Pool Service","provider":{"@type":"LocalBusiness","name":"<?php echo esc_js( pasc_company_name() ); ?>","telephone":"+1-833-968-4888"},"areaServed":"Florida","url":"<?php echo esc_url( get_permalink() ); ?>"}</script>
<?php pasc_breadcrumbs( array( array( 'label' => 'Industries', 'url' => home_url( '/industries/' ) ), array( 'label' => 'Country clubs' ) ) ); ?>

<section class="industry-hero"><div class="wrap"><div class="industry-hero-grid">
  <div>
    <span class="eyebrow">Country clubs</span>
    <h1>Pool service worthy <span class="red">of the membership.</span></h1>
    <p class="lead">Country club members notice the small things — water clarity, deck cleanliness, the timing of pool service relative to their swim. We service country clubs the way the membership expects: invisibly, reliably, and never during peak hours.</p>
    <div class="cta-row"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Request a proposal</a><a href="tel:<?php echo esc_attr( pasc_phone_tel() ); ?>" class="btn btn-soft">Call <?php echo esc_html( pasc_phone_display() ); ?></a></div>
  </div>
  <div class="industry-img" role="img" aria-label="Country club pool service"></div>
</div></div></section>

<section class="two-col"><div class="wrap"><div class="two-col-grid">
  <div><h2>Built for the <span class="red">membership.</span></h2><p>Lap pool clarity to swim-team standards. Family pool with kid-safe chemistry. Hot tub balanced to bromine spec. Service runs at 5am, before the membership shows up — never on busy weekends, never during scheduled events.</p><p>We coordinate with your director of grounds and your aquatics manager.</p></div>
  <div><h2>What country clubs need.</h2><ul><li>Pre-dawn service before members arrive</li><li>Lap pool clarity (swim-team event ready)</li><li>Family pool kid-safe chemistry tuning</li><li>Hot tub bromine specialty</li><li>Coordination with grounds &amp; events calendar</li><li>Capital project planning across multi-year cycles</li></ul></div>
</div></div></section>

<?php get_template_part( 'template-parts/services-grid' ); ?>
<?php get_template_part( 'template-parts/areas-grid' ); ?>
<?php $pasc_cta_heading = 'Pool service worthy'; $pasc_cta_heading_red = 'of the membership.'; get_template_part( 'template-parts/cta-final' ); ?>
<?php get_footer(); ?>
