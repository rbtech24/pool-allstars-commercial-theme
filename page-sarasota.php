<?php
get_header();
$pasc_city = array(
	'name' => 'Sarasota',
	'region_slug' => 'tampa-bay',
	'breadcrumb_parent_label' => 'Tampa Bay',
	'eyebrow' => 'Sarasota, Florida',
	'h1_red' => 'in Sarasota, FL.',
	'hero_intro' => 'From bayfront luxury condo amenity decks to Lido Key beachfront resorts, downtown Sarasota boutique hotels, and Lakewood Ranch master-planned community pools — full commercial pool service across Sarasota and Sarasota County.',
	'context_title_red' => 'commercial pool reality.',
	'context_paragraphs' => array(
		'Sarasota\'s commercial pool market is shaped by its luxury bayfront residential market and arts-district hospitality. Bayfront condos along Gulfstream Avenue and St. Armands Circle command resort-tier pool service. Lido Key and Longboat Key beachfront properties battle salt-air corrosion. Downtown Sarasota boutique hotels (the Westin, Art Ovation, the Ritz-Carlton) operate to brand-flag QA standards.',
		'Sarasota County health enforces FL Admin Code 64E-9 with regular inspections. We log every parameter to inspector spec, maintain compliance binders for board-meeting documentation, and provide brand-flag QA support for hospitality customers. Bayfront and beachfront properties get specialized salt-air equipment service planning.',
		'Lakewood Ranch (technically Manatee County but commercially part of Sarasota market) is one of the country\'s largest master-planned communities, with dozens of HOA amenity pools across multiple villages. We handle multi-pool routes within Lakewood Ranch HOAs efficiently with dedicated technician routing.',
	),
	'neighborhoods_title_red' => 'neighborhoods &amp; districts.',
	'neighborhoods' => array(
		array( 'label' => 'Downtown Sarasota &amp; Gulfstream Avenue', 'desc' => 'bayfront condos, boutique hotels' ),
		array( 'label' => 'St. Armands Circle &amp; Lido Key', 'desc' => 'beachfront resort &amp; luxury condo pools' ),
		array( 'label' => 'Longboat Key', 'desc' => 'beachfront condo associations &amp; resort pools' ),
		array( 'label' => 'Siesta Key', 'desc' => 'beachfront condo &amp; vacation rental properties' ),
		array( 'label' => 'Lakewood Ranch', 'desc' => 'multi-village master-planned community amenities' ),
	  array( 'label' => 'Bird Key', 'desc' => 'luxury residential &amp; private community pools' ),
		array( 'label' => 'Palmer Ranch', 'desc' => 'established master-planned HOA cluster' ),
		array( 'label' => 'Venice &amp; Nokomis', 'desc' => 'small-city hospitality &amp; coastal pools' ),
	),
	'industries' => array(
		array( 'href' => 'hotels-resorts', 'h4' => 'Sarasota hotels', 'desc' => 'Downtown boutique &amp; beachfront resort properties.' ),
		array( 'href' => 'hoas-condos', 'h4' => 'Sarasota condos', 'desc' => 'Bayfront towers, Longboat Key, Lakewood Ranch.' ),
		array( 'href' => 'country-clubs', 'h4' => 'Sarasota clubs', 'desc' => 'Field Club, Bird Key Yacht Club, country club tier.' ),
		array( 'href' => 'multi-property', 'h4' => 'Lakewood Ranch portfolios', 'desc' => 'Multi-village HOA portfolio service.' ),
	),
	'nearby_title_red' => 'Tampa Bay.',
	'nearby' => array(
		array( 'label' => 'Bradenton', 'desc' => 'Manatee County. River City character.', 'href' => 'bradenton' ),
		array( 'label' => 'Tampa', 'desc' => 'Hillsborough County. Downtown &amp; Westshore.', 'href' => 'tampa' ),
		array( 'label' => 'Lakewood Ranch', 'desc' => 'Manatee County. Master-planned community.', 'href' => 'lakewood-ranch' ),
		array( 'label' => 'All Tampa Bay', 'desc' => '6 counties. See full coverage.' ),
	),
	'testimonials_eyebrow' => 'What Sarasota property managers say',
	'testimonials_heading' => 'Trusted on the Sarasota bayfront',
	'testimonials_region_key' => 'tampa-bay',
	'cta_heading' => 'Sarasota property?',
);
include locate_template( 'template-parts/city-page.php' );
get_footer();
