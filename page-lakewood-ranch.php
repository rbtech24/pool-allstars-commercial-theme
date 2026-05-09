<?php
get_header();
$pasc_city = array(
	'name' => 'Lakewood Ranch',
	'region_slug' => 'tampa-bay',
	'breadcrumb_parent_label' => 'Tampa Bay',
	'eyebrow' => 'Lakewood Ranch, Florida',
	'h1_red' => 'in Lakewood Ranch, FL.',
	'hero_intro' => 'One of America\'s largest master-planned communities — multi-village HOA pool service, Main Street boutique hospitality, golf community country clubs, and 55+ active adult community amenity decks across Lakewood Ranch (Manatee &amp; Sarasota counties).',
	'context_title_red' => 'commercial pool reality.',
	'context_paragraphs' => array(
		'Lakewood Ranch is a different kind of pool service market — a single 33,000-acre master-planned community spanning two counties (Manatee and Sarasota) with dozens of villages, each with its own HOA, amenity center, and pool. Country Club East, Esplanade, Del Webb, Lakewood National, Polo Run — each operates as a separate HOA with separate boards but predictable shared expectations.',
		'Manatee County health enforces FL Admin Code 64E-9 across all amenity pools. We log to inspector spec on every visit and provide board-ready monthly reports formatted for HOA meeting packets. Multi-village portfolio managers benefit from our consolidated invoicing and dedicated account management — one PM contact for 5+ village pools.',
		'Lakewood Ranch demographics skew toward 55+ active adult and young families, which drives specific pool service patterns. Active adult village pools see high morning bather load (water aerobics, lap swim). Family village pools see weekend peak load. We tune chemistry and visit timing to actual usage rather than calendar defaults.',
	),
	'neighborhoods_title_red' => 'villages &amp; districts.',
	'neighborhoods' => array(
		array( 'label' => 'Country Club East', 'desc' => 'golf community amenity pools' ),
		array( 'label' => 'Esplanade', 'desc' => 'lifestyle community resort-style pool' ),
		array( 'label' => 'Del Webb', 'desc' => '55+ active adult community amenities' ),
		array( 'label' => 'Lakewood National', 'desc' => 'golf community resort-style amenity pool' ),
		array( 'label' => 'Polo Run', 'desc' => 'family-focused village amenity decks' ),
		array( 'label' => 'Main Street at Lakewood Ranch', 'desc' => 'boutique hospitality &amp; mixed-use' ),
		array( 'label' => 'Cresswind', 'desc' => 'newer 55+ active adult community' ),
		array( 'label' => 'Premier Sports Campus area', 'desc' => 'sports-anchored hospitality &amp; rentals' ),
	),
	'industries' => array(
		array( 'href' => 'hoas-condos', 'h4' => 'Village HOAs', 'desc' => 'Multi-village HOA pool service across LWR.' ),
		array( 'href' => 'multi-property', 'h4' => 'LWR portfolios', 'desc' => 'Consolidated multi-village contracts.' ),
		array( 'href' => 'country-clubs', 'h4' => 'LWR golf clubs', 'desc' => 'Country Club East, Lakewood National facilities.' ),
		array( 'href' => 'fitness-aquatic', 'h4' => 'LWR fitness', 'desc' => 'Premier Sports Campus, village fitness amenities.' ),
	),
	'nearby_title_red' => 'Tampa Bay.',
	'nearby' => array(
		array( 'label' => 'Sarasota', 'desc' => 'Sarasota County. Bayfront luxury.', 'href' => 'sarasota' ),
		array( 'label' => 'Bradenton', 'desc' => 'Manatee County. Anna Maria.', 'href' => 'bradenton' ),
		array( 'label' => 'Tampa', 'desc' => 'Hillsborough County. Downtown.', 'href' => 'tampa' ),
		array( 'label' => 'All Tampa Bay', 'desc' => '6 counties. See full coverage.' ),
	),
	'testimonials_eyebrow' => 'What Lakewood Ranch HOA boards say',
	'testimonials_heading' => 'Trusted across LWR villages',
	'testimonials_region_key' => 'tampa-bay',
	'cta_heading' => 'LWR village pool?',
);
include locate_template( 'template-parts/city-page.php' );
get_footer();
