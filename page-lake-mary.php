<?php
get_header();
$pasc_city = array(
	'name' => 'Lake Mary',
	'region_slug' => 'orlando',
	'breadcrumb_parent_label' => 'Orlando',
	'eyebrow' => 'Lake Mary, Florida',
	'h1_red' => 'in Lake Mary, FL.',
	'hero_intro' => 'Corporate-corridor business hotels, Heathrow private community pools, master-planned residential amenity decks, and the Lake Mary/Sanford fitness facility cluster — full commercial pool service across Lake Mary and Seminole County.',
	'context_title_red' => 'commercial pool reality.',
	'context_paragraphs' => array(
		'Lake Mary is Central Florida\'s corporate corridor. Hewlett Packard, AAA, Verizon, Symantec, and dozens of regional headquarters anchor a hospitality market built around business travel — Marriott, Hilton, Hyatt corporate hotels, plus extended-stay properties. Heathrow private community sits adjacent with luxury residential and a private golf club. Lake Mary itself has a growing master-planned residential market.',
		'Seminole County health enforces FL Admin Code 64E-9 with regular hotel and HOA pool inspections. We log to inspector spec on every visit and provide brand-flag QA documentation for corporate hospitality customers. Heathrow Country Club gets specialized private-club treatment.',
		'Year-round pool season with occasional January cold snaps requiring active heater management on outdoor corporate hotel pools. We coordinate winter heating service during the off-season demand window. Hurricane response is a routine August–October need; we maintain dispatch capacity through the season.',
	),
	'neighborhoods_title_red' => 'neighborhoods &amp; districts.',
	'neighborhoods' => array(
		array( 'label' => 'Lake Mary Town Center', 'desc' => 'corporate hotels &amp; mixed-use pools' ),
		array( 'label' => 'Heathrow', 'desc' => 'luxury private community &amp; golf club pools' ),
		array( 'label' => 'Sanford', 'desc' => 'historic downtown &amp; boutique hospitality' ),
		array( 'label' => 'Longwood', 'desc' => 'established residential HOA pools' ),
		array( 'label' => 'Altamonte Springs', 'desc' => 'corporate hotel &amp; residential cluster' ),
		array( 'label' => 'Casselberry', 'desc' => 'community fitness &amp; aquatic facilities' ),
		array( 'label' => 'Wekiva Springs corridor', 'desc' => 'master-planned community amenities' ),
		array( 'label' => 'Lake Mary I-4 corridor', 'desc' => 'business hotel pool service' ),
	),
	'industries' => array(
		array( 'href' => 'hotels-resorts', 'h4' => 'Lake Mary hotels', 'desc' => 'Corporate-corridor business hotels &amp; extended stay.' ),
		array( 'href' => 'hoas-condos', 'h4' => 'Heathrow HOAs', 'desc' => 'Luxury private community pool service.' ),
		array( 'href' => 'country-clubs', 'h4' => 'Heathrow Country Club', 'desc' => 'Private club lap pool &amp; family pool service.' ),
		array( 'href' => 'fitness-aquatic', 'h4' => 'Lake Mary fitness', 'desc' => 'YMCAs, athletic clubs, hotel fitness amenities.' ),
	),
	'nearby_title_red' => 'Central Florida.',
	'nearby' => array(
		array( 'label' => 'Orlando', 'desc' => 'Orange County. Downtown.', 'href' => 'orlando-city' ),
		array( 'label' => 'Winter Park', 'desc' => 'Orange County. Historic &amp; boutique.', 'href' => 'winter-park' ),
		array( 'label' => 'Kissimmee', 'desc' => 'Osceola County. Disney-area rentals.', 'href' => 'kissimmee' ),
		array( 'label' => 'All Orlando area', 'desc' => '4 counties. See full coverage.' ),
	),
	'testimonials_eyebrow' => 'What Lake Mary property managers say',
	'testimonials_heading' => 'Trusted across the corporate corridor',
	'testimonials_region_key' => 'orlando',
	'cta_heading' => 'Lake Mary property?',
);
include locate_template( 'template-parts/city-page.php' );
get_footer();
