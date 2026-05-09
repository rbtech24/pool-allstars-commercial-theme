<?php
get_header();
$pasc_city = array(
	'name' => 'Boca Raton',
	'region_slug' => 'south-florida',
	'breadcrumb_parent_label' => 'South Florida',
	'eyebrow' => 'Boca Raton, Florida',
	'h1_red' => 'in Boca Raton, FL.',
	'hero_intro' => 'Mediterranean-style HOA pools throughout west Boca, oceanfront condo associations along A1A, the Boca Raton Resort &amp; Club, and Boca\'s established private country clubs — full commercial pool service across Boca Raton and southern Palm Beach County.',
	'context_title_red' => 'commercial pool reality.',
	'context_paragraphs' => array(
		'Boca Raton is one of the most upscale commercial pool markets in Florida. West Boca\'s Mediterranean-style master-planned communities (Boca West, Polo Club, Woodfield Country Club, Mizner Country Club) operate to club-house standards. Oceanfront condos along A1A demand resort-tier service. The Boca Raton Resort &amp; Club, the legendary Cloister Inn property, sets the pace for hospitality service expectations.',
		'Palm Beach County health enforces FL Admin Code 64E-9 with particular attention to private club bromine compliance and ADA pool-lift accessibility — both common citation points at upscale clubs. We log to inspector spec on every visit and maintain compliance binders ready for board meeting documentation.',
		'Salt-air corrosion is significant on A1A oceanfront properties. We build preventative equipment service schedules around the corrosion timeline. Hurricane prep and post-storm response is routine; we maintain dispatch through August-October. Boca\'s upscale demographics also mean intolerance for service quality dips — we operate to that bar.',
	),
	'neighborhoods_title_red' => 'neighborhoods &amp; districts.',
	'neighborhoods' => array(
		array( 'label' => 'Boca Raton Resort &amp; Club area', 'desc' => 'historic resort &amp; downtown hospitality' ),
		array( 'label' => 'A1A oceanfront condos', 'desc' => 'beachfront condo associations' ),
		array( 'label' => 'Boca West Country Club', 'desc' => 'private club golf community pools' ),
		array( 'label' => 'Polo Club Boca Raton', 'desc' => 'private club &amp; gated community pools' ),
		array( 'label' => 'Woodfield Country Club', 'desc' => 'gated luxury residential &amp; club pools' ),
		array( 'label' => 'Mizner Country Club', 'desc' => 'private club community amenities' ),
		array( 'label' => 'Royal Palm Yacht Club area', 'desc' => 'luxury residential &amp; yacht club pools' ),
		array( 'label' => 'Glades / west Boca corridor', 'desc' => 'Mediterranean-style HOA cluster' ),
	),
	'industries' => array(
		array( 'href' => 'country-clubs', 'h4' => 'Boca country clubs', 'desc' => 'Boca West, Polo Club, Woodfield, Mizner private club tier.' ),
		array( 'href' => 'hoas-condos', 'h4' => 'Boca HOAs', 'desc' => 'Mediterranean master-planned communities &amp; oceanfront condos.' ),
		array( 'href' => 'hotels-resorts', 'h4' => 'Boca hotels', 'desc' => 'Boca Raton Resort &amp; Club tier hospitality.' ),
		array( 'href' => 'fitness-aquatic', 'h4' => 'Boca fitness', 'desc' => 'Athletic clubs, hotel fitness, country club aquatic programs.' ),
	),
	'nearby_title_red' => 'South Florida.',
	'nearby' => array(
		array( 'label' => 'Fort Lauderdale', 'desc' => 'Broward County. Beach Strip &amp; Las Olas.', 'href' => 'fort-lauderdale' ),
		array( 'label' => 'West Palm Beach', 'desc' => 'Palm Beach County. Estate &amp; resort.', 'href' => 'west-palm-beach' ),
		array( 'label' => 'Miami', 'desc' => 'Miami-Dade County. Brickell.', 'href' => 'miami' ),
		array( 'label' => 'All South Florida', 'desc' => '3 counties. See full coverage.' ),
	),
	'testimonials_eyebrow' => 'What Boca Raton property managers say',
	'testimonials_heading' => 'Trusted by Boca\'s private clubs &amp; HOAs',
	'testimonials_region_key' => 'south-florida',
	'cta_heading' => 'Boca property?',
);
include locate_template( 'template-parts/city-page.php' );
get_footer();
