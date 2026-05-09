<?php get_header(); ?>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Service","serviceType":"Hotel and Resort Pool Service","provider":{"@type":"LocalBusiness","name":"<?php echo esc_js( pasc_company_name() ); ?>","telephone":"+1-833-968-4888"},"areaServed":"Florida","url":"<?php echo esc_url( get_permalink() ); ?>"}</script>
<?php pasc_breadcrumbs( array( array( 'label' => 'Industries', 'url' => home_url( '/industries/' ) ), array( 'label' => 'Hotels & resorts' ) ) ); ?>

<section class="industry-hero"><div class="wrap"><div class="industry-hero-grid">
  <div>
    <span class="eyebrow">Hotels &amp; resorts</span>
    <h1>Pool service that <span class="red">protects your guest review.</span></h1>
    <p class="lead">Cloudy water in your pool photos. A green hot tub when guests check in. A vacuum hose left in the deck on Saturday morning. Hotel pool service is a brand-experience risk most operators don't fully control. We do.</p>
    <div class="cta-row"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Request a proposal</a><a href="tel:<?php echo esc_attr( pasc_phone_tel() ); ?>" class="btn btn-soft">Call <?php echo esc_html( pasc_phone_display() ); ?></a></div>
  </div>
  <div class="industry-img" role="img" aria-label="Hotel pool service"></div>
</div></div></section>

<section class="two-col"><div class="wrap"><div class="two-col-grid">
  <div><h2>Built for hotel <span class="red">operations.</span></h2><p>Dawn cleanings before guests are out of bed. Service routes coordinated with your housekeeping calendar. Photo-confirmed visits sent to your front-of-house manager AND your GM, so nothing falls through the cracks at shift change.</p><p>We've worked with limited-service hotels, full-service resorts, boutique properties, and condo-hotels. Each gets the same brand-standard finish — and a service report your owner can hand to the franchise inspector.</p></div>
  <div><h2>What guest-facing service means.</h2><ul><li>Dawn cleanings — done before 7am check-out crowds</li><li>Crystal-clear water for property photography</li><li>Branded uniforms, marked vehicles, badge ID</li><li>Health-code-compliant chemistry (FAC, pH, CYA)</li><li>24/7 emergency dispatch for pump or chemical issues</li><li>Service reports formatted for ownership reviews</li></ul></div>
</div></div></section>

<?php get_template_part( 'template-parts/services-grid' ); ?>

<section class="proof block"><div class="wrap"><div class="section-head center"><span class="eyebrow">What hospitality clients say</span></div><div class="testimonials">
  <div class="tcard"><div class="stars">★★★★★</div><q>Pool All-Stars manages all eight of our portfolio properties on one contract. Their reporting is the cleanest I've seen in pool service.</q><div class="who"><strong>Maria S.</strong><span>VP Ops · Coastal Hospitality</span></div></div>
  <div class="tcard"><div class="stars">★★★★★</div><q>Dawn cleaning means our morning swimmers never see a vacuum cord. That's the difference.</q><div class="who"><strong>James T.</strong><span>GM · Coral Cay Beach Resort</span></div></div>
  <div class="tcard"><div class="stars">★★★★★</div><q>They rebuilt our chemistry from scratch when we took over the property. Pool TripAdvisor mentions went from 1-star complaints to "perfect."</q><div class="who"><strong>Lisa R.</strong><span>Director of Ops · Sun Coast Hospitality</span></div></div>
</div></div></section>

<?php get_template_part( 'template-parts/areas-grid' ); ?>

<?php $pasc_cta_heading = 'Hotel pool you can'; $pasc_cta_heading_red = 'stop worrying about.'; get_template_part( 'template-parts/cta-final' ); ?>

<?php pasc_last_updated(); ?>
<?php get_footer(); ?>
