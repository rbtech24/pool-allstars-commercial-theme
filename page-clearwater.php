<?php
get_header();
$pasc_city = array(
	'name' => 'Clearwater',
	'region_slug' => 'tampa-bay',
	'breadcrumb_parent_label' => 'Tampa Bay',
	'eyebrow' => 'Clearwater, Florida',
	'h1_red' => 'in Clearwater, FL.',
	'hero_intro' => 'From the gulf-front resort pools of Clearwater Beach to downtown Clearwater corporate hotels, Belleair private clubs, and Countryside HOA communities — full commercial pool service across Clearwater and northern Pinellas County.',
	'context_title_red' => 'commercial pool reality.',
	'context_paragraphs' => array(
		'Clearwater Beach is one of Florida\'s most concentrated commercial pool corridors. Sandpearl Resort, Hyatt Regency Clearwater Beach, Sheraton Sand Key — gulf-front resort properties operating at 90%+ summer occupancy with brand-standard pool service requirements. Inland Clearwater handles corporate hospitality, Countryside-area HOAs, and Belleair luxury private clubs.',
		'Pinellas County health enforces FL Admin Code 64E-9 with regular inspection cadence. Beach properties get extra scrutiny because of high bather load and salt-air-related equipment risks. We log to inspector spec on every visit and maintain brand-flag QA documentation for Marriott, Hilton, IHG, and Choice hospitality customers.',
		'Salt-air corrosion is severe on Clearwater Beach — pump motors and salt cells fail 30-50% faster than inland Pinellas. We build preventative equipment service schedules around the corrosion timeline. Hurricane prep and post-storm response (Helene 2024 hit hard here) is a known seasonal need.',
	),
	'neighborhoods_title_red' => 'neighborhoods &amp; districts.',
	'neighborhoods' => array(
		array( 'label' => 'Clearwater Beach', 'desc' => 'gulf-front resort pool corridor' ),
		array( 'label' => 'Sand Key', 'desc' => 'beachfront resort &amp; condo properties' ),
		array( 'label' => 'Downtown Clearwater', 'desc' => 'corporate hotel &amp; downtown residential pools' ),
		array( 'label' => 'Belleair &amp; Belleair Bluffs', 'desc' => 'luxury residential &amp; private club pools' ),
		array( 'label' => 'Countryside &amp; Northwood', 'desc' => 'established HOA cluster pools' ),
		array( 'label' => 'Safety Harbor', 'desc' => 'historic district hotels &amp; community pools' ),
		array( 'label' => 'Dunedin', 'desc' => 'small-property hospitality &amp; HOA pools' ),
		array( 'label' => 'Palm Harbor &amp; East Lake', 'desc' => 'master-planned community amenities' ),
	),
	'industries' => array(
		array( 'href' => 'hotels-resorts', 'h4' => 'Clearwater Beach resorts', 'desc' => 'Gulf-front resort properties &amp; brand-flagged hotels.' ),
		array( 'href' => 'hoas-condos', 'h4' => 'Clearwater HOAs', 'desc' => 'Countryside, Belleair, Palm Harbor associations.' ),
		array( 'href' => 'country-clubs', 'h4' => 'Clearwater clubs', 'desc' => 'Belleair Country Club, Pelican Golf Club tier.' ),
		array( 'href' => 'fitness-aquatic', 'h4' => 'Clearwater fitness', 'desc' => 'YMCAs, athletic clubs, hotel fitness amenities.' ),
	),
	'nearby_title_red' => 'Tampa Bay.',
	'nearby' => array(
		array( 'label' => 'St. Petersburg', 'desc' => 'Pinellas County. Downtown &amp; Pier District.', 'href' => 'st-petersburg' ),
		array( 'label' => 'Tampa', 'desc' => 'Hillsborough County. Downtown &amp; Westshore.', 'href' => 'tampa' ),
		array( 'label' => 'Sarasota', 'desc' => 'Sarasota County. Bayfront luxury.', 'href' => 'sarasota' ),
		array( 'label' => 'All Tampa Bay', 'desc' => '6 counties. See full coverage.' ),
	),
	'testimonials_eyebrow' => 'What Clearwater property managers say',
	'testimonials_heading' => 'Trusted on the Gulf Coast',
	'testimonials_region_key' => 'tampa-bay',
	'cta_heading' => 'Clearwater property?',
);
include locate_template( 'template-parts/city-page.php' );
get_footer();
