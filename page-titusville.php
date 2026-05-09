<?php
get_header();
$pasc_city = array(
	'name' => 'Titusville',
	'region_slug' => 'space-coast',
	'breadcrumb_parent_label' => 'Space Coast',
	'eyebrow' => 'Titusville, Florida',
	'h1_red' => 'in Titusville, FL.',
	'hero_intro' => 'KSC-corridor corporate hotels, Indian River residential HOA pools, Mims and Port St. John community pools, and the Titusville historic downtown boutique properties — full commercial pool service across Titusville and northern Brevard County.',
	'context_title_red' => 'commercial pool reality.',
	'context_paragraphs' => array(
		'Titusville is the gateway to Kennedy Space Center and Cape Canaveral Air Force Station. The pool service market is anchored by KSC-corridor corporate hotels (Hampton Inn, Holiday Inn Express, Best Western, La Quinta) supporting aerospace workforce travel and launch tourism. Established residential HOAs along Indian River and inland communities round out the market.',
		'Brevard County health enforces FL Admin Code 64E-9 with regular inspections. We log to inspector spec on every visit and provide brand-flag QA documentation for hospitality customers. Aerospace launch days drive hotel occupancy spikes (and pool usage spikes) — we adjust service to match.',
		'Indian River exposure on Titusville\'s east-side residential properties brings unique chemistry considerations (occasional river-water adjacency affecting calcium and TDS). We tune service to local conditions. Tropical storm response is a routine seasonal need; we maintain dispatch capacity through hurricane season.',
	),
	'neighborhoods_title_red' => 'districts &amp; corridors.',
	'neighborhoods' => array(
		array( 'label' => 'KSC corridor &amp; SR-50', 'desc' => 'corporate hotel cluster' ),
		array( 'label' => 'Downtown Titusville', 'desc' => 'historic district boutique hospitality' ),
		array( 'label' => 'Indian River residential', 'desc' => 'east-side community HOA pools' ),
		array( 'label' => 'Mims', 'desc' => 'inland residential community pools' ),
		array( 'label' => 'Port St. John', 'desc' => 'community pool service' ),
		array( 'label' => 'Cape Canaveral Air Force Station area', 'desc' => 'aerospace-related lodging' ),
		array( 'label' => 'Astronaut Boulevard corridor', 'desc' => 'mid-tier hospitality cluster' ),
		array( 'label' => 'KARS Park &amp; KSC visitor area', 'desc' => 'tourism-supporting hospitality' ),
	),
	'industries' => array(
		array( 'href' => 'hotels-resorts', 'h4' => 'Titusville hotels', 'desc' => 'KSC-corridor corporate &amp; aerospace-tourism hospitality.' ),
		array( 'href' => 'hoas-condos', 'h4' => 'Titusville HOAs', 'desc' => 'Indian River residential community associations.' ),
		array( 'href' => 'vacation-rentals', 'h4' => 'Launch-area rentals', 'desc' => 'Aerospace-tourism vacation rental properties.' ),
		array( 'href' => 'fitness-aquatic', 'h4' => 'Brevard fitness', 'desc' => 'Hotel fitness, community athletic clubs.' ),
	),
	'nearby_title_red' => 'the Space Coast.',
	'nearby' => array(
		array( 'label' => 'Cocoa Beach', 'desc' => 'Brevard County. A1A resort corridor.', 'href' => 'cocoa-beach' ),
		array( 'label' => 'Melbourne', 'desc' => 'Brevard County. Aerospace corridor.', 'href' => 'melbourne' ),
		array( 'label' => 'Vero Beach', 'desc' => 'Indian River County. Atlantic coast.', 'href' => 'vero-beach' ),
		array( 'label' => 'All Space Coast', 'desc' => '2 counties. See full coverage.' ),
	),
	'testimonials_eyebrow' => 'What Titusville property managers say',
	'testimonials_heading' => 'Trusted in the KSC corridor',
	'testimonials_region_key' => 'space-coast',
	'cta_heading' => 'Titusville property?',
);
include locate_template( 'template-parts/city-page.php' );
get_footer();
