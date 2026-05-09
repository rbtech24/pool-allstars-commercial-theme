<?php
/**
 * Shared city page template.
 * Each page-{city}.php sets $pasc_city (associative array) then includes this file.
 *
 * Required keys in $pasc_city:
 *   name, region_slug, region_label, breadcrumb_parent_label, breadcrumb_parent_url,
 *   eyebrow, h1_red, hero_intro,
 *   context_title_red, context_paragraphs (array of 3 strings),
 *   neighborhoods_title_red, neighborhoods (array of {label, desc}),
 *   industries (array of {href, h4, desc}),
 *   nearby_title_red, nearby (array of {label, desc}),
 *   testimonials_eyebrow, testimonials_heading, testimonials_region_key,
 *   cta_heading
 */
if ( empty( $pasc_city ) || ! is_array( $pasc_city ) ) return;
$c = $pasc_city;
$region_url = home_url( '/service-area/' . $c['region_slug'] . '/' );
?>

<?php pasc_breadcrumbs( array(
	array( 'label' => 'Service area', 'url' => home_url( '/service-area/' ) ),
	array( 'label' => $c['breadcrumb_parent_label'], 'url' => $region_url ),
	array( 'label' => $c['name'] ),
) ); ?>

<script type="application/ld+json">{"@context":"https://schema.org","@type":"LocalBusiness","name":"<?php echo esc_js( pasc_company_name() . ' — ' . $c['name'] ); ?>","areaServed":{"@type":"City","name":"<?php echo esc_js( $c['name'] ); ?>, FL"},"telephone":"+1-833-968-4888","url":"<?php echo esc_url( get_permalink() ); ?>"}</script>

<section class="page-hero">
  <div class="wrap">
    <span class="eyebrow"><?php echo esc_html( $c['eyebrow'] ); ?></span>
    <h1>Commercial pool service <span class="red"><?php echo esc_html( $c['h1_red'] ); ?></span></h1>
    <p><?php echo wp_kses_post( $c['hero_intro'] ); ?></p>
    <div class="page-hero-ctas"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Request a proposal</a><a href="tel:<?php echo esc_attr( pasc_phone_tel() ); ?>" class="btn btn-soft">Call <?php echo esc_html( pasc_phone_display() ); ?></a></div>
  </div>
</section>

<section class="two-col">
  <div class="wrap">
    <div class="two-col-grid">
      <div>
        <h2>Built for <?php echo esc_html( $c['name'] ); ?> <span class="red"><?php echo esc_html( $c['context_title_red'] ); ?></span></h2>
        <?php foreach ( $c['context_paragraphs'] as $p ) { echo '<p>' . wp_kses_post( $p ) . '</p>'; } ?>
      </div>
      <div>
        <h2><?php echo esc_html( $c['name'] ); ?> <span class="red"><?php echo wp_kses_post( $c['neighborhoods_title_red'] ); ?></span></h2>
        <ul>
          <?php foreach ( $c['neighborhoods'] as $n ) { echo '<li><strong>' . esc_html( $n['label'] ) . '</strong> &mdash; ' . wp_kses_post( $n['desc'] ) . '</li>'; } ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="related" style="background:#fff">
  <div class="wrap">
    <div class="section-head center"><span class="eyebrow"><?php echo esc_html( $c['name'] ); ?> property types we serve</span><h2>Specialized for <span class="red">your property type.</span></h2></div>
    <div class="related-grid">
      <?php foreach ( $c['industries'] as $ind ) { ?>
        <a class="related-card" href="<?php echo esc_url( home_url( '/industries/' . $ind['href'] . '/' ) ); ?>"><h4><?php echo esc_html( $ind['h4'] ); ?></h4><p><?php echo wp_kses_post( $ind['desc'] ); ?></p><span class="arrow">View industry</span></a>
      <?php } ?>
    </div>
  </div>
</section>

<?php pasc_render_testimonials_section( $c['testimonials_region_key'], $c['testimonials_eyebrow'], $c['testimonials_heading'] ); ?>

<section class="related">
  <div class="wrap">
    <div class="section-head center"><span class="eyebrow">Nearby cities</span><h2>Also serving <span class="red"><?php echo wp_kses_post( $c['nearby_title_red'] ); ?></span></h2></div>
    <div class="related-grid">
      <?php foreach ( $c['nearby'] as $n ) {
        $href = ! empty( $n['href'] ) ? home_url( '/' . $n['href'] . '/' ) : $region_url;
      ?>
        <a class="related-card" href="<?php echo esc_url( $href ); ?>"><h4><?php echo esc_html( $n['label'] ); ?></h4><p><?php echo wp_kses_post( $n['desc'] ); ?></p><span class="arrow">View area</span></a>
      <?php } ?>
    </div>
  </div>
</section>

<?php $pasc_cta_heading = $c['cta_heading']; $pasc_cta_heading_red = "Let's talk."; get_template_part( 'template-parts/cta-final' ); ?>
<?php pasc_last_updated(); ?>
