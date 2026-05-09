<?php
get_header();
$pasc_city = array(
	'name' => 'Aventura',
	'region_slug' => 'south-florida',
	'breadcrumb_parent_label' => 'South Florida',
	'eyebrow' => 'Aventura, Florida',
	'h1_red' => 'in Aventura, FL.',
	'hero_intro' => 'High-rise condo corridor pools, Aventura Mall area corporate hospitality, gated community amenities, and the Sunny Isles Beach oceanfront condo cluster — full commercial pool service across Aventura and northeast Miami-Dade County.',
	'context_title_red' => 'commercial pool reality.',
	'context_paragraphs' => array(
		'Aventura is one of America\'s densest high-rise condo markets. Williams Island, Turnberry Isle, Hidden Bay, the Bella Vista — dozens of 30-50 floor towers stacked along Biscayne Bay and the Intracoastal. Each condo association operates an amenity pool deck typically located on the rooftop or pool deck level, requiring specialized equipment access via service elevators with strict timing windows.',
		'Miami-Dade County health enforces FL Admin Code 64E-9 with aggressive Florida Building Code 454 pool barrier code enforcement. Combined chlorine kept under 0.4 ppm prevents the eye irritation complaints that drive board complaints. We log every parameter on every visit and maintain board-ready compliance binders.',
		'Pre-dawn service is the norm in Aventura. Our techs arrive 5-6am, finish before residents are out for morning workouts, and never share the elevator with a homeowner. Equipment access requires building manager coordination — we maintain those relationships across multiple Aventura towers.',
	),
	'neighborhoods_title_red' => 'neighborhoods &amp; districts.',
	'neighborhoods' => array(
		array( 'label' => 'Williams Island', 'desc' => 'private island gated community high-rises' ),
		array( 'label' => 'Turnberry Isle', 'desc' => 'gated golf community &amp; high-rise condos' ),
		array( 'label' => 'Aventura Mall corridor', 'desc' => 'corporate hospitality &amp; mixed-use' ),
		array( 'label' => 'Hidden Bay &amp; Bella Vista', 'desc' => 'high-rise Intracoastal-front condos' ),
		array( 'label' => 'Sunny Isles Beach', 'desc' => 'oceanfront condo tower corridor' ),
		array( 'label' => 'Bal Harbour', 'desc' => 'luxury beachfront condo &amp; resort properties' ),
		array( 'label' => 'Surfside', 'desc' => 'oceanfront condo associations' ),
		array( 'label' => 'North Miami Beach corridor', 'desc' => 'mid-rise condo &amp; residential cluster' ),
	),
	'industries' => array(
		array( 'href' => 'hoas-condos', 'h4' => 'Aventura condos', 'desc' => 'Williams Island, Turnberry, Sunny Isles high-rise associations.' ),
		array( 'href' => 'multi-property', 'h4' => 'Aventura portfolios', 'desc' => 'Multi-tower condo portfolio management.' ),
		array( 'href' => 'hotels-resorts', 'h4' => 'Aventura hotels', 'desc' => 'Aventura Mall corridor &amp; resort properties.' ),
		array( 'href' => 'fitness-aquatic', 'h4' => 'Aventura fitness', 'desc' => 'Boutique fitness, condo amenity decks.' ),
	),
	'nearby_title_red' => 'South Florida.',
	'nearby' => array(
		array( 'label' => 'Miami', 'desc' => 'Miami-Dade County. Brickell &amp; South Beach.', 'href' => 'miami' ),
		array( 'label' => 'Hollywood', 'desc' => 'Broward County. Beach corridor.', 'href' => 'hollywood-fl' ),
		array( 'label' => 'Fort Lauderdale', 'desc' => 'Broward County. Beach Strip.', 'href' => 'fort-lauderdale' ),
		array( 'label' => 'All South Florida', 'desc' => '3 counties. See full coverage.' ),
	),
	'testimonials_eyebrow' => 'What Aventura property managers say',
	'testimonials_heading' => 'Trusted across Aventura\'s high-rises',
	'testimonials_region_key' => 'south-florida',
	'cta_heading' => 'Aventura tower pool?',
);
include locate_template( 'template-parts/city-page.php' );
get_footer();
