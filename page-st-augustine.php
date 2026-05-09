<?php
get_header();
$pasc_city = array(
	'name' => 'St. Augustine',
	'region_slug' => 'jacksonville',
	'breadcrumb_parent_label' => 'Jacksonville',
	'eyebrow' => 'St. Augustine, Florida',
	'h1_red' => 'in St. Augustine, FL.',
	'hero_intro' => 'Historic district boutique hotels, St. Augustine Beach oceanfront properties, World Golf Village resort pools, and the surrounding St. Johns County master-planned communities — full commercial pool service across America\'s oldest city.',
	'context_title_red' => 'commercial pool reality.',
	'context_paragraphs' => array(
		'St. Augustine is the oldest city in America and one of Florida\'s most distinct hospitality markets. Historic district boutique hotels (Casa Monica, the Collector Inn, Bayfront Marin House) sit alongside larger resort properties (Embassy Suites, Renaissance, Hilton Bayfront). St. Augustine Beach handles the oceanfront resort and condo segment. World Golf Village to the west anchors a golf-resort residential market.',
		'St. Johns County health enforces FL Admin Code 64E-9 with regular hotel and HOA pool inspections. We log to inspector spec on every visit and provide brand-flag QA documentation for hospitality customers (Hilton, Marriott, Embassy Suites). Historic district pools sometimes have older equipment requiring specialized service approaches.',
		'Atlantic-coast salt-air corrosion is severe on St. Augustine Beach properties. Cool snaps Dec-Feb require active heater management on outdoor pools, particularly at vacation rentals where empty pools are vulnerable to freeze damage. Tropical storm response is routine; we maintain dispatch through hurricane season.',
	),
	'neighborhoods_title_red' => 'neighborhoods &amp; districts.',
	'neighborhoods' => array(
		array( 'label' => 'Historic district', 'desc' => 'boutique inns &amp; hotel pools' ),
		array( 'label' => 'St. Augustine Beach', 'desc' => 'oceanfront resort &amp; condo properties' ),
		array( 'label' => 'World Golf Village', 'desc' => 'golf resort &amp; community pool service' ),
		array( 'label' => 'Anastasia Island', 'desc' => 'beachfront vacation rentals &amp; small hotels' ),
		array( 'label' => 'Vilano Beach', 'desc' => 'residential beach community pools' ),
		array( 'label' => 'Crescent Beach', 'desc' => 'beach corridor vacation rental properties' ),
		array( 'label' => 'Hastings &amp; west St. Johns', 'desc' => 'inland residential pools' ),
		array( 'label' => 'Nocatee corridor', 'desc' => 'master-planned community amenities' ),
	),
	'industries' => array(
		array( 'href' => 'hotels-resorts', 'h4' => 'St. Augustine hotels', 'desc' => 'Historic district boutique &amp; beachfront resorts.' ),
		array( 'href' => 'vacation-rentals', 'h4' => 'St. Augustine Beach rentals', 'desc' => 'Beachfront vacation rental properties.' ),
		array( 'href' => 'hoas-condos', 'h4' => 'St. Johns HOAs', 'desc' => 'Master-planned community associations.' ),
		array( 'href' => 'country-clubs', 'h4' => 'World Golf Village', 'desc' => 'Golf community resort &amp; club pools.' ),
	),
	'nearby_title_red' => 'Northeast Florida.',
	'nearby' => array(
		array( 'label' => 'Jacksonville', 'desc' => 'Duval County. Beach &amp; downtown.', 'href' => 'jacksonville-city' ),
		array( 'label' => 'Ponte Vedra', 'desc' => 'St. Johns County. Country clubs.', 'href' => 'ponte-vedra' ),
		array( 'label' => 'Amelia Island', 'desc' => 'Nassau County. Luxury resort.', 'href' => 'amelia-island' ),
		array( 'label' => 'All NE Florida', 'desc' => '3 counties. See full coverage.' ),
	),
	'testimonials_eyebrow' => 'What St. Augustine property managers say',
	'testimonials_heading' => 'Trusted in America\'s oldest city',
	'testimonials_region_key' => 'jacksonville',
	'cta_heading' => 'St. Augustine property?',
);
include locate_template( 'template-parts/city-page.php' );
get_footer();
