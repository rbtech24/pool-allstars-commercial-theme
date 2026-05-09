<?php
get_header();
$pasc_city = array(
	'name' => 'Cocoa Beach',
	'region_slug' => 'space-coast',
	'breadcrumb_parent_label' => 'Space Coast',
	'eyebrow' => 'Cocoa Beach, Florida',
	'h1_red' => 'in Cocoa Beach, FL.',
	'hero_intro' => 'Atlantic-coast hotels along A1A, oceanfront condo associations, KSC-corridor corporate hospitality, and the Cocoa Village historic district boutique properties — full commercial pool service across Cocoa Beach and northern Brevard County.',
	'context_title_red' => 'commercial pool reality.',
	'context_paragraphs' => array(
		'Cocoa Beach is the Space Coast\'s primary resort and vacation destination. The Hilton Cocoa Beach Oceanfront, the International Palms Resort, Wakulla Suites, and dozens of mid-tier hotels operate along A1A. Oceanfront condo associations dominate the residential pool market. Cocoa Village (across the Banana River) provides historic-district boutique hospitality. KSC-corridor corporate hotels handle the aerospace workforce travel market.',
		'Brevard County health enforces FL Admin Code 64E-9 with regular hotel and HOA pool inspections. We log to inspector spec on every visit and provide brand-flag QA documentation for hospitality customers (Hilton, Marriott, Choice). Beach properties get specialized salt-air equipment service planning.',
		'Atlantic-coast salt-air corrosion is severe on A1A oceanfront properties. Pump motors and salt cells fail 30-50% faster than inland Brevard. We build preventative equipment service schedules around the corrosion timeline. Hurricane and tropical storm response is a routine August-October need; we maintain dispatch capacity through the season.',
	),
	'neighborhoods_title_red' => 'districts &amp; corridors.',
	'neighborhoods' => array(
		array( 'label' => 'A1A oceanfront corridor', 'desc' => 'beachfront resort &amp; hotel cluster' ),
		array( 'label' => 'Cocoa Beach Pier district', 'desc' => 'central beach hospitality &amp; condos' ),
		array( 'label' => 'Cape Canaveral', 'desc' => 'cruise-port hotels &amp; KSC-corridor properties' ),
		array( 'label' => 'Cocoa Village (mainland)', 'desc' => 'historic district boutique hospitality' ),
		array( 'label' => 'Merritt Island', 'desc' => 'residential community &amp; small hotels' ),
		array( 'label' => 'Cape Canaveral Air Force Station area', 'desc' => 'aerospace-corridor lodging' ),
		array( 'label' => 'Port Canaveral', 'desc' => 'cruise-line hospitality &amp; rentals' ),
		array( 'label' => 'Satellite Beach corridor', 'desc' => 'oceanfront condos &amp; vacation rentals' ),
	),
	'industries' => array(
		array( 'href' => 'hotels-resorts', 'h4' => 'Cocoa Beach hotels', 'desc' => 'Oceanfront resorts &amp; KSC-corridor hospitality.' ),
		array( 'href' => 'hoas-condos', 'h4' => 'Cocoa Beach condos', 'desc' => 'Oceanfront condo associations along A1A.' ),
		array( 'href' => 'vacation-rentals', 'h4' => 'Cocoa Beach rentals', 'desc' => 'Beach corridor vacation rental properties.' ),
		array( 'href' => 'fitness-aquatic', 'h4' => 'Brevard fitness', 'desc' => 'Hotel fitness, community athletic clubs.' ),
	),
	'nearby_title_red' => 'the Space Coast.',
	'nearby' => array(
		array( 'label' => 'Melbourne', 'desc' => 'Brevard County. Aerospace corridor.', 'href' => 'melbourne' ),
		array( 'label' => 'Vero Beach', 'desc' => 'Indian River County. Atlantic coast.', 'href' => 'vero-beach' ),
		array( 'label' => 'Titusville', 'desc' => 'Brevard County. KSC corridor.', 'href' => 'titusville' ),
		array( 'label' => 'All Space Coast', 'desc' => '2 counties. See full coverage.' ),
	),
	'testimonials_eyebrow' => 'What Cocoa Beach property managers say',
	'testimonials_heading' => 'Trusted on the Atlantic coast',
	'testimonials_region_key' => 'space-coast',
	'cta_heading' => 'Cocoa Beach property?',
);
include locate_template( 'template-parts/city-page.php' );
get_footer();
