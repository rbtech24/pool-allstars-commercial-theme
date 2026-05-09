<?php get_header(); ?>
<?php pasc_breadcrumbs( array( array( 'label' => 'Terms' ) ) ); ?>

<section class="page-hero"><div class="wrap"><span class="eyebrow">Legal</span><h1>Terms of Service</h1><p>The agreement between <?php echo esc_html( pasc_company_name() ); ?> and our customers.</p></div></section>

<section class="legal"><div class="wrap">
<p class="updated">Last updated: May 2026</p>

<h2>1. Acceptance of terms</h2>
<p>By engaging <?php echo esc_html( pasc_company_name() ); ?> ("Company," "we," "us") for pool service, you ("Customer," "you") agree to these terms in addition to any signed service agreement. Where the signed service agreement conflicts with these terms, the signed agreement governs.</p>

<h2>2. Services</h2>
<p>Services are described in your service agreement and proposal. Standard commercial weekly maintenance includes water chemistry, brushing, vacuuming, basket emptying, equipment inspection, and a service report. Additional services (equipment repair, acid washing, renovation) are billed separately unless included.</p>

<h2>3. Pricing &amp; billing</h2>
<p>Monthly service is billed in advance on net-30 terms unless otherwise agreed. Repair work and additional services are billed upon completion. Prices are guaranteed for the term of the service agreement.</p>

<h2>4. Term &amp; cancellation</h2>
<p>Standard contracts are month-to-month with 30 days' written notice for cancellation by either party. Multi-year agreements may include specific cancellation terms outlined in the signed agreement.</p>

<h2>5. Property access</h2>
<p>Customer agrees to provide reasonable access to the pool, equipment room, and water source. Pool All-Stars technicians are background-checked, uniformed, and identified by company badge. We are not responsible for delays caused by inability to access the property.</p>

<h2>6. Insurance &amp; liability</h2>
<p><?php echo esc_html( pasc_company_name() ); ?> maintains general liability insurance and provides a Certificate of Insurance to customers upon request. Our liability for any service-related issue is limited to the cost of services provided in the prior 90 days. We are not liable for pre-existing conditions or issues caused by third parties.</p>

<h2>7. Force majeure</h2>
<p>We are not responsible for service interruptions caused by hurricanes, floods, government action, supply shortages, or other events beyond our reasonable control.</p>

<h2>8. Intellectual property</h2>
<p>All website content, logos, and materials are the property of <?php echo esc_html( pasc_company_name() ); ?> and may not be reproduced without written permission.</p>

<h2>9. Governing law</h2>
<p>These terms are governed by the laws of the State of Florida. Any disputes will be resolved in the courts of Hillsborough County, Florida.</p>

<h2>10. Changes</h2>
<p>We may update these terms. Continued use of services after notice of changes constitutes acceptance.</p>

<h2>Contact</h2>
<p>Questions about these terms? <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact us</a> or call <?php echo esc_html( pasc_phone_display() ); ?>.</p>
</div></section>

<?php get_footer(); ?>
