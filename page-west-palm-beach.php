<?php
get_header();
$pasc_city = array(
	'name' => 'West Palm Beach',
	'region_slug' => 'south-florida',
	'breadcrumb_parent_label' => 'South Florida',
	'eyebrow' => 'West Palm Beach, Florida',
	'h1_red' => 'in West Palm Beach, FL.',
	'hero_intro' => 'Downtown West Palm corporate hotels, Palm Beach barrier-island estate pools, oceanfront resort properties on Singer Island, and Wellington equestrian community pools — full commercial pool service across West Palm Beach and central Palm Beach County.',
	'context_title_red' => 'commercial pool reality.',
	'context_paragraphs' => array(
		'West Palm Beach combines downtown corporate hospitality (Hilton, Hyatt Place, Hampton Inn corridor), Palm Beach barrier-island luxury estate pools (the actual island town of Palm Beach, separate from West Palm), Singer Island oceanfront resort properties, and Wellington\'s equestrian-anchored residential market. Each segment has very different service expectations.',
		'Palm Beach County health enforces FL Admin Code 64E-9 with particular focus on barrier-island and oceanfront pool properties. We log to inspector spec on every visit and maintain compliance binders ready for board meeting documentation. Brand-flag QA documentation provided for hospitality customers.',
		'Atlantic-coast salt-air corrosion is severe on Singer Island and barrier-island properties. We build preventative equipment service schedules around the corrosion timeline. Wellington equestrian community pools have specialized maintenance considerations because of seasonal occupancy patterns (winter equestrian season high, summer low).',
	),
	'neighborhoods_title_red' => 'neighborhoods &amp; districts.',
	'neighborhoods' => array(
		array( 'label' => 'Downtown West Palm Beach', 'desc' => 'corporate hotels &amp; CityPlace district' ),
		array( 'label' => 'Palm Beach (the island)', 'desc' => 'luxury estate &amp; private club pools' ),
		array( 'label' => 'Singer Island', 'desc' => 'oceanfront resort &amp; condo properties' ),
		array( 'label' => 'Wellington', 'desc' => 'equestrian community residential pools' ),
		array( 'label' => 'Lake Worth Beach', 'desc' => 'historic district &amp; coastal pools' ),
		array( 'label' => 'Royal Palm Beach &amp; Loxahatchee', 'desc' => 'inland HOA &amp; community pools' ),
		array( 'label' => 'Jupiter &amp; Tequesta corridor', 'desc' => 'northern Palm Beach county hospitality' ),
		array( 'label' => 'Palm Beach Gardens', 'desc' => 'PGA-anchored residential &amp; resort' ),
	),
	'industries' => array(
		array( 'href' => 'hotels-resorts', 'h4' => 'WPB hotels', 'desc' => 'Downtown corporate &amp; Singer Island resorts.' ),
		array( 'href' => 'country-clubs', 'h4' => 'Palm Beach clubs', 'desc' => 'Mar-a-Lago tier private clubs &amp; estates.' ),
		array( 'href' => 'hoas-condos', 'h4' => 'WPB condos', 'desc' => 'Singer Island &amp; downtown condo associations.' ),
		array( 'href' => 'multi-property', 'h4' => 'Palm Beach portfolios', 'desc' => 'Multi-property hospitality &amp; HOA management.' ),
	),
	'nearby_title_red' => 'South Florida.',
	'nearby' => array(
		array( 'label' => 'Boca Raton', 'desc' => 'Palm Beach County. Mediterranean HOAs.', 'href' => 'boca-raton' ),
		array( 'label' => 'Fort Lauderdale', 'desc' => 'Broward County. Beach Strip.', 'href' => 'fort-lauderdale' ),
		array( 'label' => 'Hollywood', 'desc' => 'Broward County. Beach corridor.', 'href' => 'hollywood-fl' ),
		array( 'label' => 'All South Florida', 'desc' => '3 counties. See full coverage.' ),
	),
	'testimonials_eyebrow' => 'What WPB property managers say',
	'testimonials_heading' => 'Trusted across Palm Beach County',
	'testimonials_region_key' => 'south-florida',
	'cta_heading' => 'WPB property?',
);
include locate_template( 'template-parts/city-page.php' );
get_footer();
