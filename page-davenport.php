<?php
get_header();
$pasc_city = array(
	'name' => 'Davenport',
	'region_slug' => 'lakeland',
	'breadcrumb_parent_label' => 'Lakeland &amp; Polk',
	'eyebrow' => 'Davenport, Florida',
	'h1_red' => 'in Davenport, FL.',
	'hero_intro' => 'The Disney-area vacation rental capital of Polk County — ChampionsGate, Solterra Resort, Windsor at Westside, Storey Lake adjacent communities, and dozens of vacation home portfolios — full commercial pool service for Davenport vacation rentals and HOAs.',
	'context_title_red' => 'commercial pool reality.',
	'context_paragraphs' => array(
		'Davenport is one of America\'s densest vacation rental markets, anchored by ChampionsGate and Solterra Resort. Thousands of Disney-area vacation home pools spread across master-planned vacation rental communities — most managed by short-term rental operators on Hostfully, Streamline, OwnerRez, or Guesty platforms. Add ChampionsGate Country Club, residential master-planned communities, and you have one of Polk County\'s most active commercial pool service markets.',
		'Polk County Department of Health enforces FL Admin Code 64E-9 with particular focus on vacation rental compliance because of high bather turnover. We log every visit per inspector spec and integrate photo confirmations directly into property management software. Owner-direct billing or PM-billing both supported.',
		'Vacation rental turnover scheduling is everything in Davenport. We coordinate pool service to land between checkout (typically 11am) and check-in (4pm) so guests never see the cleaner. Photo-confirmed reports go to the PM software within 30 minutes. Emergency response (green pool, equipment failure) is dispatched within hours, especially critical with paid guest bookings on the line.',
	),
	'neighborhoods_title_red' => 'communities &amp; corridors.',
	'neighborhoods' => array(
		array( 'label' => 'ChampionsGate', 'desc' => 'master-planned vacation rental + golf community' ),
		array( 'label' => 'Solterra Resort', 'desc' => 'newer vacation rental resort community' ),
		array( 'label' => 'Windsor at Westside', 'desc' => 'vacation home community' ),
		array( 'label' => 'Storey Lake (border)', 'desc' => 'vacation rental community pool service' ),
		array( 'label' => 'Reunion (border)', 'desc' => 'Disney-adjacent vacation home portfolios' ),
		array( 'label' => 'Davenport historic district', 'desc' => 'small-property hospitality' ),
		array( 'label' => 'I-4 corridor (Polk side)', 'desc' => 'corporate hotels &amp; mid-tier hospitality' ),
		array( 'label' => 'Posner Park area', 'desc' => 'mixed-use &amp; community pool service' ),
	),
	'industries' => array(
		array( 'href' => 'vacation-rentals', 'h4' => 'Davenport rentals', 'desc' => 'ChampionsGate, Solterra, Windsor vacation home portfolios.' ),
		array( 'href' => 'multi-property', 'h4' => 'Vacation rental portfolios', 'desc' => 'Multi-property short-term rental management.' ),
		array( 'href' => 'hoas-condos', 'h4' => 'Davenport HOAs', 'desc' => 'Master-planned community amenity decks.' ),
		array( 'href' => 'country-clubs', 'h4' => 'ChampionsGate Country Club', 'desc' => 'Golf community private club service.' ),
	),
	'nearby_title_red' => 'Polk County.',
	'nearby' => array(
		array( 'label' => 'Lakeland', 'desc' => 'Polk County. Florida Southern district.', 'href' => 'lakeland-city' ),
		array( 'label' => 'Winter Haven', 'desc' => 'Polk County. Chain of Lakes.', 'href' => 'winter-haven' ),
		array( 'label' => 'Auburndale', 'desc' => 'Polk County. I-4 corridor.', 'href' => 'auburndale' ),
		array( 'label' => 'All Polk County', 'desc' => 'Full Polk coverage.' ),
	),
	'testimonials_eyebrow' => 'What Davenport vacation rental owners say',
	'testimonials_heading' => 'Trusted in Disney-area portfolios',
	'testimonials_region_key' => 'lakeland',
	'cta_heading' => 'Davenport vacation rental?',
);
include locate_template( 'template-parts/city-page.php' );
get_footer();
