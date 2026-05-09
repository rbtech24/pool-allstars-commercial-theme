<?php
get_header();
$pasc_city = array(
	'name' => 'Ponte Vedra Beach',
	'region_slug' => 'jacksonville',
	'breadcrumb_parent_label' => 'Jacksonville',
	'eyebrow' => 'Ponte Vedra Beach, Florida',
	'h1_red' => 'in Ponte Vedra Beach, FL.',
	'hero_intro' => 'TPC Sawgrass area private clubs, Ponte Vedra Inn &amp; Club resort properties, golf community HOAs (Sawgrass Country Club, Marsh Landing), and oceanfront condo associations — full commercial pool service across Ponte Vedra Beach and northern St. Johns County.',
	'context_title_red' => 'commercial pool reality.',
	'context_paragraphs' => array(
		'Ponte Vedra Beach is the country club capital of Northeast Florida — TPC Sawgrass (home of THE PLAYERS Championship), Ponte Vedra Inn &amp; Club, Sawgrass Country Club, Marsh Landing Country Club, the Plantation at Ponte Vedra. The pool service market is dominated by private club lap pools, family pools, hot tubs, and resort-level amenity decks demanding membership-grade clarity and consistency.',
		'St. Johns County health enforces FL Admin Code 64E-9 with regular inspections. We log every parameter to inspector spec on every visit and maintain compliance binders ready for board meeting documentation. Private clubs get specialized hot tub bromine compliance and ADA pool-lift documentation.',
		'Atlantic-coast salt-air corrosion is severe along Ponte Vedra\'s oceanfront properties. We build preventative equipment service schedules around the corrosion timeline. Cool snaps Dec-Feb require active heater management on outdoor pools. Tropical storm and nor\'easter response is a routine seasonal need.',
	),
	'neighborhoods_title_red' => 'neighborhoods &amp; districts.',
	'neighborhoods' => array(
		array( 'label' => 'TPC Sawgrass area', 'desc' => 'PGA Tour HQ &amp; surrounding luxury residential' ),
		array( 'label' => 'Sawgrass Country Club', 'desc' => 'private club golf community pools' ),
		array( 'label' => 'Marsh Landing Country Club', 'desc' => 'gated luxury residential &amp; club pools' ),
		array( 'label' => 'Plantation at Ponte Vedra', 'desc' => 'private club residential community' ),
		array( 'label' => 'Ponte Vedra Inn &amp; Club', 'desc' => 'historic resort &amp; spa property' ),
		array( 'label' => 'Sawgrass Marriott area', 'desc' => 'resort &amp; conference hotel pools' ),
		array( 'label' => 'Beachfront Ponte Vedra', 'desc' => 'oceanfront condo associations' ),
		array( 'label' => 'Nocatee corridor', 'desc' => 'master-planned community amenities' ),
	),
	'industries' => array(
		array( 'href' => 'country-clubs', 'h4' => 'Ponte Vedra clubs', 'desc' => 'TPC, Sawgrass, Marsh Landing private club tier.' ),
		array( 'href' => 'hotels-resorts', 'h4' => 'Ponte Vedra resorts', 'desc' => 'Ponte Vedra Inn &amp; Club, Sawgrass Marriott.' ),
		array( 'href' => 'hoas-condos', 'h4' => 'Ponte Vedra HOAs', 'desc' => 'Sawgrass, Marsh Landing, Plantation, oceanfront condos.' ),
		array( 'href' => 'multi-property', 'h4' => 'Ponte Vedra portfolios', 'desc' => 'Golf community multi-amenity contracts.' ),
	),
	'nearby_title_red' => 'Northeast Florida.',
	'nearby' => array(
		array( 'label' => 'Jacksonville', 'desc' => 'Duval County. Beach &amp; downtown.', 'href' => 'jacksonville-city' ),
		array( 'label' => 'St. Augustine', 'desc' => 'St. Johns County. Historic district.', 'href' => 'st-augustine' ),
		array( 'label' => 'Amelia Island', 'desc' => 'Nassau County. Luxury resort.', 'href' => 'amelia-island' ),
		array( 'label' => 'All NE Florida', 'desc' => '3 counties. See full coverage.' ),
	),
	'testimonials_eyebrow' => 'What Ponte Vedra property managers say',
	'testimonials_heading' => 'Trusted by Ponte Vedra\'s private clubs',
	'testimonials_region_key' => 'jacksonville',
	'cta_heading' => 'Ponte Vedra property?',
);
include locate_template( 'template-parts/city-page.php' );
get_footer();
