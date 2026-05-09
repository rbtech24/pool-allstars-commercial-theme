<?php
get_header();
$pasc_city = array(
	'name' => 'Sanibel',
	'region_slug' => 'sw-florida',
	'breadcrumb_parent_label' => 'SW Florida',
	'eyebrow' => 'Sanibel &amp; Captiva, Florida',
	'h1_red' => 'on Sanibel &amp; Captiva.',
	'hero_intro' => 'Beachfront resort properties, oceanfront condo associations, vacation rental portfolios, and the South Seas Plantation private community on Captiva — full commercial pool service across Sanibel and Captiva islands, Lee County.',
	'context_title_red' => 'commercial pool reality.',
	'context_paragraphs' => array(
		'Sanibel and Captiva are barrier islands off the SW Florida coast — known for shelling, eco-tourism, and small-property hospitality (no chains larger than a boutique resort). The pool service market is dominated by oceanfront condo associations along Sanibel\'s gulf side, beachfront vacation rentals, and South Seas Plantation\'s private community on Captiva. Hurricane Ian (Sept 2022) devastated both islands; recovery is ongoing.',
		'Lee County health enforces FL Admin Code 64E-9 across all hotel, condo, and vacation rental pools. Vacation rental pools get particular scrutiny because of high turnover. We log every visit per inspector spec and integrate photo confirmations into property management software.',
		'Salt-air corrosion is among the most severe in Florida on Sanibel/Captiva — barrier island salt deposition is constant. Equipment lifespans run 40-50% shorter than inland Lee properties. We build preventative equipment service schedules around the corrosion timeline. Causeway access requires careful scheduling for service trucks.',
	),
	'neighborhoods_title_red' => 'districts &amp; communities.',
	'neighborhoods' => array(
		array( 'label' => 'Sanibel beachfront', 'desc' => 'oceanfront condo associations &amp; small resorts' ),
		array( 'label' => 'Captiva (South Seas Plantation)', 'desc' => 'private community resort &amp; condo pools' ),
		array( 'label' => 'Captiva Village', 'desc' => 'small-property hospitality &amp; vacation rentals' ),
		array( 'label' => 'Sanibel East End', 'desc' => 'historic district &amp; vacation home corridor' ),
		array( 'label' => 'Sanibel West End', 'desc' => 'beachfront vacation rental cluster' ),
		array( 'label' => 'Sundial Beach Resort area', 'desc' => 'mid-size condo-resort properties' ),
		array( 'label' => 'Casa Ybel area', 'desc' => 'historic resort property pool service' ),
		array( 'label' => 'Periwinkle Way corridor', 'desc' => 'main-street boutique hospitality' ),
	),
	'industries' => array(
		array( 'href' => 'vacation-rentals', 'h4' => 'Sanibel rentals', 'desc' => 'Beachfront vacation rental portfolios.' ),
		array( 'href' => 'hoas-condos', 'h4' => 'Sanibel condos', 'desc' => 'Oceanfront condo associations.' ),
		array( 'href' => 'hotels-resorts', 'h4' => 'Sanibel resorts', 'desc' => 'Sundial, Casa Ybel, South Seas Plantation tier.' ),
		array( 'href' => 'multi-property', 'h4' => 'Island portfolios', 'desc' => 'Multi-property vacation rental management.' ),
	),
	'nearby_title_red' => 'SW Florida.',
	'nearby' => array(
		array( 'label' => 'Fort Myers', 'desc' => 'Lee County. Mainland.', 'href' => 'fort-myers' ),
		array( 'label' => 'Naples', 'desc' => 'Collier County. Old Naples.', 'href' => 'naples' ),
		array( 'label' => 'Marco Island', 'desc' => 'Collier County. Resort.', 'href' => 'marco-island' ),
		array( 'label' => 'All SW Florida', 'desc' => '2 counties. See full coverage.' ),
	),
	'testimonials_eyebrow' => 'What Sanibel property managers say',
	'testimonials_heading' => 'Trusted on Sanibel &amp; Captiva',
	'testimonials_region_key' => 'sw-florida',
	'cta_heading' => 'Sanibel property?',
);
include locate_template( 'template-parts/city-page.php' );
get_footer();
