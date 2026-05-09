<?php
/**
 * Reusable Final CTA section
 * Variables (optional, set before include):
 *   $pasc_cta_eyebrow, $pasc_cta_heading, $pasc_cta_heading_red, $pasc_cta_body, $pasc_cta_primary_label
 */
$eyebrow      = isset( $pasc_cta_eyebrow ) ? $pasc_cta_eyebrow : 'Get started';
$heading      = isset( $pasc_cta_heading ) ? $pasc_cta_heading : 'Ready for pools';
$heading_red  = isset( $pasc_cta_heading_red ) ? $pasc_cta_heading_red : 'that just work?';
$body         = isset( $pasc_cta_body ) ? $pasc_cta_body : 'Send us your scope, RFP, or last 60 days of reports. We\'ll send a fixed-rate proposal within one business day.';
$primary_lbl  = isset( $pasc_cta_primary_label ) ? $pasc_cta_primary_label : 'Request a proposal';
?>
<section class="final" id="cta">
  <div class="final-inner">
    <span class="eyebrow"><?php echo esc_html( $eyebrow ); ?></span>
    <h2><?php echo esc_html( $heading ); ?> <span class="red"><?php echo esc_html( $heading_red ); ?></span></h2>
    <p><?php echo esc_html( $body ); ?></p>
    <div class="final-ctas">
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red"><?php echo esc_html( $primary_lbl ); ?></a>
      <a href="tel:<?php echo esc_attr( pasc_phone_tel() ); ?>" class="btn btn-soft">Call <?php echo esc_html( pasc_phone_display() ); ?></a>
    </div>
  </div>
</section>
