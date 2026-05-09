<?php
get_header();
$pasc_city = array(
	'name' => 'Kissimmee',
	'region_slug' => 'orlando',
	'breadcrumb_parent_label' => 'Orlando',
	'eyebrow' => 'Kissimmee, Florida',
	'h1_red' => 'in Kissimmee, FL.',
	'hero_intro' => 'Disney-area vacation home portfolios, Celebration master-planned community pools, condo-hotel resort properties, and the 192/Old Town hospitality corridor — full commercial pool service across Kissimmee and Osceola County.',
	'context_title_red' => 'commercial pool reality.',
	'context_paragraphs' => array(
		'Kissimmee is the Disney-area vacation rental capital. Thousands of vacation home pools spread across Reunion, Champions Gate, ChampionsGate Country Club, Solara Resort, Storey Lake — most managed by short-term rental operators on Hostfully, Streamline, OwnerRez, or Guesty platforms. Add Celebration\'s master-planned amenity pools and the Old Town/192 hospitality corridor, and Kissimmee is one of Florida\'s densest commercial pool markets.',
		'Osceola County health enforces FL Admin Code 64E-9 with particular focus on vacation rental compliance because of the high bather turnover. We log every visit per inspector spec and integrate photo confirmations directly into property management software. Owner-direct billing or PM-billing both supported.',
		'Vacation rental turnover scheduling matters. We coordinate pool service to land between checkout (typically 11am) and check-in (4pm) so guests never see the cleaner. Photo-confirmed reports go to the PM software within 30 minutes. Emergency response (green pool, equipment failure) is dispatched within hours, not days.',
	),
	'neighborhoods_title_red' => 'districts &amp; communities.',
	'neighborhoods' => array(
		array( 'label' => 'Reunion Resort', 'desc' => 'Disney-adjacent vacation home portfolios' ),
		array( 'label' => 'ChampionsGate', 'desc' => 'vacation rental community + golf resort pools' ),
		array( 'label' => 'Celebration', 'desc' => 'master-planned community amenity decks' ),
		array( 'label' => 'Solara Resort', 'desc' => 'newer vacation rental resort community' ),
		array( 'label' => 'Storey Lake', 'desc' => 'vacation home community pools' ),
		array( 'label' => 'Old Town &amp; 192 corridor', 'desc' => 'Disney-area hotel cluster' ),
		array( 'label' => 'Hunter\'s Creek &amp; Buenaventura Lakes', 'desc' => 'established residential HOAs' ),
		array( 'label' => 'Lake Buena Vista', 'desc' => 'Disney-flagged hotel pools' ),
	),
	'industries' => array(
		array( 'href' => 'vacation-rentals', 'h4' => 'Disney-area rentals', 'desc' => 'Reunion, ChampionsGate, Solara vacation home portfolios.' ),
		array( 'href' => 'hotels-resorts', 'h4' => 'Kissimmee hotels', 'desc' => '192 corridor &amp; Disney-area hospitality.' ),
		array( 'href' => 'hoas-condos', 'h4' => 'Celebration HOAs', 'desc' => 'Master-planned community amenity pools.' ),
		array( 'href' => 'multi-property', 'h4' => 'Vacation rental portfolios', 'desc' => 'Multi-property short-term rental management.' ),
	),
	'nearby_title_red' => 'Central Florida.',
	'nearby' => array(
		array( 'label' => 'Orlando', 'desc' => 'Orange County. Downtown &amp; theme parks.', 'href' => 'orlando-city' ),
		array( 'label' => 'Lake Mary', 'desc' => 'Seminole County. Corporate &amp; HOA.', 'href' => 'lake-mary' ),
		array( 'label' => 'Winter Park', 'desc' => 'Orange County. Historic &amp; boutique.', 'href' => 'winter-park' ),
		array( 'label' => 'All Orlando area', 'desc' => '4 counties. See full coverage.' ),
	),
	'testimonials_eyebrow' => 'What Kissimmee vacation rental owners say',
	'testimonials_heading' => 'Trusted across Disney-area portfolios',
	'testimonials_region_key' => 'orlando',
	'cta_heading' => 'Kissimmee vacation rental?',
);
include locate_template( 'template-parts/city-page.php' );
get_footer();
