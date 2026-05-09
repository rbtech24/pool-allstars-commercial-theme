<?php get_header(); ?>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Service","serviceType":"Commercial Pool Renovation","provider":{"@type":"LocalBusiness","name":"<?php echo esc_js( pasc_company_name() ); ?>","telephone":"+1-833-968-4888"},"areaServed":"Florida","url":"<?php echo esc_url( get_permalink() ); ?>"}</script>
<?php pasc_breadcrumbs( array( array( 'label' => 'Services', 'url' => home_url( '/services/' ) ), array( 'label' => 'Pool renovation' ) ) ); ?>

<section class="page-hero"><div class="wrap"><span class="eyebrow">Capital projects</span><h1>Commercial pool <span class="red">renovation.</span></h1><p>Resurfacing, tile, coping, equipment upgrades. Project management for capital improvement work — coordinated with your reserve study, your assessment cycle, and your shutdown windows.</p><div class="page-hero-ctas"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Request a proposal</a><a href="tel:<?php echo esc_attr( pasc_phone_tel() ); ?>" class="btn btn-soft">Call <?php echo esc_html( pasc_phone_display() ); ?></a></div></div></section>

<section class="two-col"><div class="wrap"><div class="two-col-grid">
<div><h2>What we <span class="red">renovate.</span></h2><ul><li>Plaster resurface (pebble, quartz, traditional)</li><li>Tile replacement (waterline, mosaic, mural)</li><li>Coping replacement (travertine, brick, concrete)</li><li>Deck restoration / cool deck</li><li>Equipment pad rebuilds (pump, filter, automation)</li><li>Heater upgrades (gas → heat pump conversions)</li><li>Salt cell system retrofits</li><li>ADA accessibility upgrades</li></ul></div>
<div><h2>How <span class="red">project management</span> works.</h2><p>Capital pool projects often span 3–8 weeks for full renovation. We provide a project plan with milestones, a single point of contact, and weekly progress updates with photos.</p><p>HOAs and condos: we work with reserve study consultants and present quotes formatted for board approval. Hotels: we work around shoulder-season windows. Multi-property: we sequence projects across the portfolio.</p></div>
</div></div></section>

<?php get_template_part( 'template-parts/industries-grid' ); ?>
<?php get_template_part( 'template-parts/areas-grid' ); ?>
<?php $pasc_cta_heading = 'Planning a'; $pasc_cta_heading_red = 'pool renovation?'; get_template_part( 'template-parts/cta-final' ); ?>
<?php get_footer(); ?>
