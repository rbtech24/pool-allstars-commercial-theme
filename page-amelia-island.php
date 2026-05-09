<?php
get_header();
$pasc_city = array(
	'name' => 'Amelia Island',
	'region_slug' => 'jacksonville',
	'breadcrumb_parent_label' => 'Jacksonville',
	'eyebrow' => 'Amelia Island, Florida',
	'h1_red' => 'on Amelia Island, FL.',
	'hero_intro' => 'Ritz-Carlton Amelia Island, Omni Amelia Island Plantation, oceanfront resort pools, historic Fernandina Beach boutique inns, and Amelia Island Plantation private club amenities — full commercial pool service across Nassau County\'s barrier island.',
	'context_title_red' => 'commercial pool reality.',
	'context_paragraphs' => array(
		'Amelia Island anchors the luxury resort segment of Northeast Florida. The Ritz-Carlton Amelia Island and Omni Amelia Island Plantation are the dominant resort properties, each with multiple pool venues (resort pool, family pool, adult pool, spa hot tubs). Amelia Island Plantation is a private club &amp; resort community with extensive pool amenity infrastructure. Historic Fernandina Beach provides boutique hospitality.',
		'Nassau County health enforces FL Admin Code 64E-9 with regular inspections. We log every parameter to inspector spec on every visit and maintain Ritz-Carlton, Omni, and Marriott brand-flag QA documentation for hospitality customers. Multi-pool resort properties get specialized routing for efficient single-visit service across all amenities.',
		'Coastal salt air on Amelia Island is severe — equipment lifespans run 25-40% shorter than mainland Nassau properties. We build preventative equipment service schedules around the corrosion timeline. Cool snaps Dec-Feb require active heater management on outdoor pools. Hurricane preparation and post-storm response is a known seasonal need.',
	),
	'neighborhoods_title_red' => 'districts &amp; resort properties.',
	'neighborhoods' => array(
		array( 'label' => 'Ritz-Carlton Amelia Island', 'desc' => 'oceanfront luxury resort multi-pool service' ),
		array( 'label' => 'Omni Amelia Island Plantation', 'desc' => 'resort + plantation community pool service' ),
		array( 'label' => 'Amelia Island Plantation', 'desc' => 'private club golf community amenities' ),
		array( 'label' => 'Fernandina Beach historic district', 'desc' => 'boutique inns &amp; downtown hospitality' ),
		array( 'label' => 'Amelia Beach corridor', 'desc' => 'oceanfront condo associations &amp; rentals' ),
		array( 'label' => 'American Beach historic area', 'desc' => 'historic district properties' ),
		array( 'label' => 'Yulee &amp; mainland Nassau', 'desc' => 'inland residential community pools' ),
		array( 'label' => 'Centre Street area', 'desc' => 'historic downtown boutique hospitality' ),
	),
	'industries' => array(
		array( 'href' => 'hotels-resorts', 'h4' => 'Amelia resorts', 'desc' => 'Ritz-Carlton, Omni Plantation, oceanfront luxury hospitality.' ),
		array( 'href' => 'country-clubs', 'h4' => 'Plantation club', 'desc' => 'Amelia Island Plantation private club service.' ),
		array( 'href' => 'hoas-condos', 'h4' => 'Amelia condos', 'desc' => 'Oceanfront condo associations &amp; resort communities.' ),
		array( 'href' => 'vacation-rentals', 'h4' => 'Amelia rentals', 'desc' => 'Beach vacation rental portfolios.' ),
	),
	'nearby_title_red' => 'Northeast Florida.',
	'nearby' => array(
		array( 'label' => 'Jacksonville', 'desc' => 'Duval County. Beach &amp; downtown.', 'href' => 'jacksonville-city' ),
		array( 'label' => 'Ponte Vedra', 'desc' => 'St. Johns County. Country clubs.', 'href' => 'ponte-vedra' ),
		array( 'label' => 'St. Augustine', 'desc' => 'St. Johns County. Historic district.', 'href' => 'st-augustine' ),
		array( 'label' => 'All NE Florida', 'desc' => '3 counties. See full coverage.' ),
	),
	'testimonials_eyebrow' => 'What Amelia Island property managers say',
	'testimonials_heading' => 'Trusted on Amelia Island',
	'testimonials_region_key' => 'jacksonville',
	'cta_heading' => 'Amelia Island property?',
);
include locate_template( 'template-parts/city-page.php' );
get_footer();
