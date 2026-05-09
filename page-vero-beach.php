<?php
get_header();
$pasc_city = array(
	'name' => 'Vero Beach',
	'region_slug' => 'space-coast',
	'breadcrumb_parent_label' => 'Space Coast',
	'eyebrow' => 'Vero Beach, Florida',
	'h1_red' => 'in Vero Beach, FL.',
	'hero_intro' => 'Costa d\'Este Beach Resort, Vero Beach Hotel &amp; Spa, oceanfront condo associations along Ocean Drive, John\'s Island private club community, and Sebastian River corridor properties — full commercial pool service across Vero Beach and Indian River County.',
	'context_title_red' => 'commercial pool reality.',
	'context_paragraphs' => array(
		'Vero Beach is Indian River County\'s anchor city — known for oceanfront luxury (John\'s Island, Windsor Club, Orchid Island) and a quieter, more residential commercial pool market than Cocoa Beach. The Costa d\'Este (owned by Gloria and Emilio Estefan), Vero Beach Hotel &amp; Spa, and dozens of small boutique properties anchor hospitality. Oceanfront condo associations along Ocean Drive run the residential market.',
		'Indian River County health enforces FL Admin Code 64E-9 with regular inspections. We log every parameter to inspector spec on every visit and provide brand-flag QA documentation for hospitality customers. Private club properties (John\'s Island, Windsor) get specialized hot tub bromine and ADA accessibility documentation.',
		'Atlantic-coast salt-air corrosion is severe on Ocean Drive oceanfront properties. We build preventative equipment service schedules around the corrosion timeline. Cool snaps Dec-Feb require active heater management. Tropical storm response is a routine seasonal need; we maintain dispatch capacity through hurricane season.',
	),
	'neighborhoods_title_red' => 'districts &amp; communities.',
	'neighborhoods' => array(
		array( 'label' => 'Ocean Drive corridor', 'desc' => 'oceanfront resort &amp; condo properties' ),
		array( 'label' => 'John\'s Island', 'desc' => 'private club gated community amenities' ),
		array( 'label' => 'Windsor Club', 'desc' => 'private club residential community' ),
		array( 'label' => 'Orchid Island', 'desc' => 'private gated community pools' ),
		array( 'label' => 'Downtown Vero Beach', 'desc' => 'historic district boutique hospitality' ),
		array( 'label' => 'Sebastian River corridor', 'desc' => 'residential community pools' ),
		array( 'label' => 'Riomar &amp; Central Beach', 'desc' => 'established residential beach communities' ),
		array( 'label' => 'Castaway Cove area', 'desc' => 'small-property hospitality &amp; rentals' ),
	),
	'industries' => array(
		array( 'href' => 'country-clubs', 'h4' => 'Vero private clubs', 'desc' => 'John\'s Island, Windsor, Orchid Island private club tier.' ),
		array( 'href' => 'hotels-resorts', 'h4' => 'Vero hotels', 'desc' => 'Costa d\'Este, Vero Beach Hotel &amp; Spa, boutique properties.' ),
		array( 'href' => 'hoas-condos', 'h4' => 'Vero condos', 'desc' => 'Ocean Drive corridor &amp; Riomar oceanfront associations.' ),
		array( 'href' => 'vacation-rentals', 'h4' => 'Vero rentals', 'desc' => 'Beach &amp; Indian River vacation rentals.' ),
	),
	'nearby_title_red' => 'the Space Coast.',
	'nearby' => array(
		array( 'label' => 'Cocoa Beach', 'desc' => 'Brevard County. A1A resort corridor.', 'href' => 'cocoa-beach' ),
		array( 'label' => 'Melbourne', 'desc' => 'Brevard County. Aerospace corridor.', 'href' => 'melbourne' ),
		array( 'label' => 'Titusville', 'desc' => 'Brevard County. KSC corridor.', 'href' => 'titusville' ),
		array( 'label' => 'All Space Coast', 'desc' => '2 counties. See full coverage.' ),
	),
	'testimonials_eyebrow' => 'What Vero Beach property managers say',
	'testimonials_heading' => 'Trusted on Vero\'s Ocean Drive',
	'testimonials_region_key' => 'space-coast',
	'cta_heading' => 'Vero Beach property?',
);
include locate_template( 'template-parts/city-page.php' );
get_footer();
