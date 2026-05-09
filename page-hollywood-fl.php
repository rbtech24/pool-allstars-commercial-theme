<?php
get_header();
$pasc_city = array(
	'name' => 'Hollywood',
	'region_slug' => 'south-florida',
	'breadcrumb_parent_label' => 'South Florida',
	'eyebrow' => 'Hollywood, Florida',
	'h1_red' => 'in Hollywood, FL.',
	'hero_intro' => 'Hollywood Beach resort pools and Broadwalk-corridor condos, Hard Rock Hotel area hospitality, Hallandale Beach high-rise condos, and the south Broward / Aventura corridor — full commercial pool service across Hollywood and southern Broward County.',
	'context_title_red' => 'commercial pool reality.',
	'context_paragraphs' => array(
		'Hollywood, Florida (not the California one) has a distinct beachfront market with the famous Hollywood Broadwalk lining 2.5 miles of oceanfront resort and condo properties. The Diplomat Beach Resort, Margaritaville Hollywood Beach, and dozens of mid-tier hotels operate in the Beach corridor. Hard Rock Hotel &amp; Casino anchors the western Hollywood market. Hallandale Beach\'s high-rise condo cluster extends south.',
		'Broward County health enforces FL Admin Code 64E-9 across all hotel and HOA pools. We log every parameter to inspector spec on every visit and maintain brand-flag QA documentation for hospitality customers. Beach properties get specialized salt-air equipment service planning.',
		'Salt-air corrosion is severe on the Broadwalk corridor. Pump motors, salt cells, and heater electronics fail 30-50% faster than inland Hollywood properties. We build preventative service schedules around the corrosion timeline. Hurricane response is a known seasonal need; we maintain dispatch capacity through August-October.',
	),
	'neighborhoods_title_red' => 'neighborhoods &amp; districts.',
	'neighborhoods' => array(
		array( 'label' => 'Hollywood Beach &amp; Broadwalk', 'desc' => 'oceanfront resort &amp; condo corridor' ),
		array( 'label' => 'Downtown Hollywood', 'desc' => 'historic district hotels &amp; condos' ),
		array( 'label' => 'Hard Rock Hotel area', 'desc' => 'casino-anchored hospitality cluster' ),
		array( 'label' => 'Hollywood Lakes', 'desc' => 'historic luxury residential pools' ),
		array( 'label' => 'Hallandale Beach', 'desc' => 'high-rise condo amenity decks' ),
		array( 'label' => 'Dania Beach', 'desc' => 'small-property hospitality &amp; condos' ),
		array( 'label' => 'Pembroke Pines', 'desc' => 'inland residential &amp; HOA cluster' ),
		array( 'label' => 'Cooper City &amp; Davie corridor', 'desc' => 'corporate hotels &amp; residential' ),
	),
	'industries' => array(
		array( 'href' => 'hotels-resorts', 'h4' => 'Hollywood hotels', 'desc' => 'Beach corridor &amp; Hard Rock area hospitality.' ),
		array( 'href' => 'hoas-condos', 'h4' => 'Hollywood condos', 'desc' => 'Broadwalk &amp; Hallandale high-rise associations.' ),
		array( 'href' => 'fitness-aquatic', 'h4' => 'Hollywood fitness', 'desc' => 'Boutique fitness, hotel gym pools.' ),
		array( 'href' => 'vacation-rentals', 'h4' => 'Beach vacation rentals', 'desc' => 'Broadwalk corridor short-term rentals.' ),
	),
	'nearby_title_red' => 'South Florida.',
	'nearby' => array(
		array( 'label' => 'Fort Lauderdale', 'desc' => 'Broward County. Beach Strip.', 'href' => 'fort-lauderdale' ),
		array( 'label' => 'Aventura', 'desc' => 'Miami-Dade County. High-rise corridor.', 'href' => 'aventura' ),
		array( 'label' => 'Miami', 'desc' => 'Miami-Dade County. Brickell &amp; South Beach.', 'href' => 'miami' ),
		array( 'label' => 'All South Florida', 'desc' => '3 counties. See full coverage.' ),
	),
	'testimonials_eyebrow' => 'What Hollywood property managers say',
	'testimonials_heading' => 'Trusted on the Broadwalk',
	'testimonials_region_key' => 'south-florida',
	'cta_heading' => 'Hollywood property?',
);
include locate_template( 'template-parts/city-page.php' );
get_footer();
