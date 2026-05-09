<?php get_header(); ?>
<?php pasc_breadcrumbs( array( array( 'label' => 'Accessibility' ) ) ); ?>

<section class="page-hero"><div class="wrap"><span class="eyebrow">Legal</span><h1>Accessibility Statement</h1><p>Our commitment to making this website accessible to everyone.</p></div></section>

<section class="legal"><div class="wrap">
<p class="updated">Last updated: May 2026</p>

<h2>Our commitment</h2>
<p><?php echo esc_html( pasc_company_name() ); ?> is committed to ensuring digital accessibility for people with disabilities. We continually improve the user experience for everyone and apply the relevant accessibility standards.</p>

<h2>Conformance status</h2>
<p>This website aims to conform with the Web Content Accessibility Guidelines (WCAG) 2.1 Level AA:</p>
<ul><li><strong>Perceivable</strong> — alt text on images, sufficient color contrast</li><li><strong>Operable</strong> — keyboard-accessible, no time-out traps</li><li><strong>Understandable</strong> — clear language, predictable navigation</li><li><strong>Robust</strong> — works with assistive technologies via semantic HTML &amp; ARIA</li></ul>

<h2>What we do</h2>
<ul><li>Semantic HTML structure throughout the site</li><li>Alt text on all meaningful images</li><li>Keyboard-accessible navigation including the mobile menu</li><li>Visible focus indicators on interactive elements</li><li>Color contrast ratios meeting WCAG AA targets</li><li>Responsive design that supports zoom up to 200%</li><li>Form labels paired with their inputs</li><li>ARIA landmarks and labels where helpful</li></ul>

<h2>Known limitations</h2>
<p>Despite our efforts, some content may not be fully accessible. If you encounter an issue, please contact us so we can address it.</p>

<h2>Feedback &amp; contact</h2>
<p>If you experience any accessibility barriers, or have suggestions for improvement:</p>
<ul><li>Phone: <a href="tel:<?php echo esc_attr( pasc_phone_tel() ); ?>"><?php echo esc_html( pasc_phone_display() ); ?></a></li><li>Email: <a href="mailto:accessibility@poolallstars.com">accessibility@poolallstars.com</a></li><li>Web form: <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact page</a></li></ul>
<p>We aim to respond to accessibility feedback within 2 business days.</p>
</div></section>

<?php get_footer(); ?>
