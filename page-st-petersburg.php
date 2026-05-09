<?php
get_header();
$pasc_city = array(
	'name' => 'St. Petersburg',
	'region_slug' => 'tampa-bay',
	'breadcrumb_parent_label' => 'Tampa Bay',
	'eyebrow' => 'St. Petersburg, Florida',
	'h1_red' => 'in St. Petersburg, FL.',
	'hero_intro' => 'From the boutique hotel rooftop pools of the Pier District to historic Old Northeast condo amenities, plus the beach corridor properties on St. Pete Beach and Treasure Island — full commercial pool service across St. Petersburg and Pinellas County.',
	'context_title_red' => 'commercial pool reality.',
	'context_paragraphs' => array(
		'St. Petersburg\'s downtown renaissance has driven a wave of boutique hotel and high-rise residential construction along the waterfront. The Vinoy, the Hyatt Place EDGE District, and the Hilton Bayfront pools coexist with Old Northeast historic condo amenity decks. Beach corridor properties (St. Pete Beach, Treasure Island, Madeira Beach) handle high-bather-load resort pools with relentless gulf salt-air corrosion.',
		'Pinellas County health enforces FL Admin Code 64E-9 with regular inspections. We log every parameter to inspector spec, maintain compliance binders for HOA boards, and provide brand-flag QA documentation for hospitality customers. Reports go same-day to your account portal.',
		'Year-round pool season, summer afternoon thunderstorm chemistry shock, salt-air corrosion on beach properties, and hurricane prep are routine St. Pete pool service realities. We dispatch from a Tampa Bay route with same-week response on equipment issues.',
	),
	'neighborhoods_title_red' => 'neighborhoods &amp; districts.',
	'neighborhoods' => array(
		array( 'label' => 'Downtown St. Pete &amp; Pier District', 'desc' => 'boutique hotel rooftop pools, downtown condo towers' ),
		array( 'label' => 'Old Northeast', 'desc' => 'historic condo &amp; boutique residential pools' ),
		array( 'label' => 'EDGE District', 'desc' => 'newer hotel and mixed-use pool amenities' ),
		array( 'label' => 'St. Pete Beach', 'desc' => 'beachfront resort &amp; condo properties' ),
		array( 'label' => 'Treasure Island &amp; Madeira Beach', 'desc' => 'beach corridor hotel &amp; vacation rental pools' ),
		array( 'label' => 'Snell Isle &amp; Coffee Pot', 'desc' => 'luxury residential &amp; private community pools' ),
		array( 'label' => 'Tyrone &amp; Disston Heights', 'desc' => 'established HOA &amp; community pools' ),
		array( 'label' => 'Pasadena &amp; Gulfport', 'desc' => 'small-property hospitality &amp; HOA pools' ),
	),
	'industries' => array(
		array( 'href' => 'hotels-resorts', 'h4' => 'St. Pete hotels', 'desc' => 'Boutique downtown hotels, beach resort properties.' ),
		array( 'href' => 'hoas-condos', 'h4' => 'St. Pete condos', 'desc' => 'Pier District towers, Old Northeast historic condos.' ),
		array( 'href' => 'fitness-aquatic', 'h4' => 'St. Pete fitness', 'desc' => 'YMCAs, athletic clubs, hotel fitness amenities.' ),
		array( 'href' => 'vacation-rentals', 'h4' => 'St. Pete Beach rentals', 'desc' => 'Beach corridor vacation properties.' ),
	),
	'nearby_title_red' => 'Tampa Bay.',
	'nearby' => array(
		array( 'label' => 'Tampa', 'desc' => 'Hillsborough County. Downtown &amp; Westshore.', 'href' => 'tampa' ),
		array( 'label' => 'Clearwater', 'desc' => 'Pinellas County. Beach corridor.', 'href' => 'clearwater' ),
		array( 'label' => 'Sarasota', 'desc' => 'Sarasota County. Bayfront luxury.', 'href' => 'sarasota' ),
		array( 'label' => 'All Tampa Bay', 'desc' => '6 counties. See full coverage.' ),
	),
	'testimonials_eyebrow' => 'What St. Pete property managers say',
	'testimonials_heading' => 'Trusted across Pinellas County',
	'testimonials_region_key' => 'tampa-bay',
	'cta_heading' => 'St. Pete property?',
);
include locate_template( 'template-parts/city-page.php' );
get_footer();
