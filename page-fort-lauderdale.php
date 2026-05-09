<?php
get_header();
$pasc_city = array(
	'name' => 'Fort Lauderdale',
	'region_slug' => 'south-florida',
	'breadcrumb_parent_label' => 'South Florida',
	'eyebrow' => 'Fort Lauderdale, Florida',
	'h1_red' => 'in Fort Lauderdale, FL.',
	'hero_intro' => 'From Fort Lauderdale Beach Strip resort pools and Las Olas boutique hotels to high-rise downtown condos, Galt Mile beachfront associations, and Plantation/Davie corporate hospitality — full commercial pool service across Fort Lauderdale and Broward County.',
	'context_title_red' => 'commercial pool reality.',
	'context_paragraphs' => array(
		'Fort Lauderdale\'s commercial pool market spans the Beach Strip resort corridor (Hyatt Regency Pier 66, the W, Conrad, Ritz-Carlton), Las Olas boutique hospitality, Galt Mile high-rise condo associations, and the corporate hospitality cluster around the airport and Plantation/Davie. Each segment has different service expectations: brand-flag QA for resorts, board-meeting documentation for condo associations, fast-response equipment service for corporate hotels.',
		'Broward County health enforces FL Admin Code 64E-9 with strict Florida Building Code 454 pool barrier code enforcement. Combined chlorine kept under 0.4 ppm prevents the eye irritation complaints that drive 1-star resort reviews. We log every parameter on every visit, in inspector-format.',
		'Atlantic-coast salt-air corrosion is severe — pump motors and salt cells fail 30-50% faster than inland Broward properties. We build preventative equipment service schedules around the corrosion timeline. Hurricane and tropical storm response is a routine August-October need; we maintain rapid-dispatch capacity for chemistry rebuild and equipment recovery.',
	),
	'neighborhoods_title_red' => 'neighborhoods &amp; districts.',
	'neighborhoods' => array(
		array( 'label' => 'Fort Lauderdale Beach Strip', 'desc' => 'oceanfront resort pool corridor' ),
		array( 'label' => 'Las Olas', 'desc' => 'boutique hotels &amp; downtown condos' ),
		array( 'label' => 'Galt Mile', 'desc' => 'high-rise condo amenity decks' ),
		array( 'label' => 'Coral Ridge &amp; Bay Colony', 'desc' => 'luxury residential &amp; private community pools' ),
		array( 'label' => 'Downtown Fort Lauderdale', 'desc' => 'corporate hotels &amp; residential towers' ),
		array( 'label' => 'Plantation &amp; Davie', 'desc' => 'corporate hotels &amp; HOA cluster' ),
		array( 'label' => 'Pompano Beach', 'desc' => 'beach corridor hotel &amp; condo properties' ),
		array( 'label' => 'Hollywood &amp; Hallandale', 'desc' => 'south Broward condos &amp; resorts' ),
	),
	'industries' => array(
		array( 'href' => 'hotels-resorts', 'h4' => 'Fort Lauderdale resorts', 'desc' => 'Beach Strip &amp; Las Olas brand-flagged hotels.' ),
		array( 'href' => 'hoas-condos', 'h4' => 'Fort Lauderdale condos', 'desc' => 'Galt Mile, downtown towers, Coral Ridge associations.' ),
		array( 'href' => 'multi-property', 'h4' => 'Broward portfolios', 'desc' => 'Hospitality groups &amp; condo portfolios.' ),
		array( 'href' => 'fitness-aquatic', 'h4' => 'Fort Lauderdale fitness', 'desc' => 'Boutique fitness, hotel gym pools, condo wellness.' ),
	),
	'nearby_title_red' => 'South Florida.',
	'nearby' => array(
		array( 'label' => 'Miami', 'desc' => 'Miami-Dade County. Brickell &amp; Miami Beach.', 'href' => 'miami' ),
		array( 'label' => 'Boca Raton', 'desc' => 'Palm Beach County. Mediterranean HOAs.', 'href' => 'boca-raton' ),
		array( 'label' => 'Hollywood', 'desc' => 'Broward County. Beach corridor.', 'href' => 'hollywood-fl' ),
		array( 'label' => 'All South Florida', 'desc' => '3 counties. See full coverage.' ),
	),
	'testimonials_eyebrow' => 'What Fort Lauderdale property managers say',
	'testimonials_heading' => 'Trusted across Broward County',
	'testimonials_region_key' => 'south-florida',
	'cta_heading' => 'Fort Lauderdale property?',
);
include locate_template( 'template-parts/city-page.php' );
get_footer();
