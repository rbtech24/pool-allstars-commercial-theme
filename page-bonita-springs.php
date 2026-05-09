<?php
get_header();
$pasc_city = array(
	'name' => 'Bonita Springs',
	'region_slug' => 'sw-florida',
	'breadcrumb_parent_label' => 'SW Florida',
	'eyebrow' => 'Bonita Springs, Florida',
	'h1_red' => 'in Bonita Springs, FL.',
	'hero_intro' => 'Bonita Bay Club private community, Pelican Landing &amp; Estero Bay golf community pools, Bonita Beach gulf-front condos, and the corridor between Naples and Fort Myers — full commercial pool service across Bonita Springs and southern Lee County.',
	'context_title_red' => 'commercial pool reality.',
	'context_paragraphs' => array(
		'Bonita Springs sits in the high-end golf community corridor between Naples and Fort Myers. Bonita Bay (one of Florida\'s premier golf communities), Pelican Landing, Pelican Marsh, the Brooks, Mediterra — gated luxury private clubs dominate the residential pool market. Bonita Beach handles the gulf-front condo and vacation rental segment.',
		'Lee County health enforces FL Admin Code 64E-9 with particular attention to private club bromine compliance and ADA pool-lift accessibility — both common citation points at upscale communities. We log to inspector spec on every visit and maintain compliance binders ready for board meeting documentation.',
		'Hurricane Ian impact in Lee County was significant; many Bonita Bay and Pelican Landing pools required equipment recovery in the months following the storm. We continue to maintain post-storm dispatch capacity. Salt-air corrosion is severe on Bonita Beach properties, requiring preventative equipment service schedules.',
	),
	'neighborhoods_title_red' => 'neighborhoods &amp; communities.',
	'neighborhoods' => array(
		array( 'label' => 'Bonita Bay', 'desc' => 'premier private golf community amenities' ),
		array( 'label' => 'Pelican Landing', 'desc' => 'gated luxury community &amp; club pools' ),
		array( 'label' => 'The Brooks (Brooks Concierge)', 'desc' => 'multi-village master-planned community' ),
		array( 'label' => 'Mediterra (north Bonita)', 'desc' => 'gated luxury residential &amp; club pools' ),
		array( 'label' => 'Pelican Marsh', 'desc' => 'private club gated community pools' ),
		array( 'label' => 'Bonita Beach', 'desc' => 'gulf-front condo associations &amp; rentals' ),
		array( 'label' => 'Estero corridor', 'desc' => 'master-planned community amenities' ),
		array( 'label' => 'Coconut Point area', 'desc' => 'mixed-use &amp; hotel pool service' ),
	),
	'industries' => array(
		array( 'href' => 'country-clubs', 'h4' => 'Bonita country clubs', 'desc' => 'Bonita Bay, Pelican Landing, Mediterra private club tier.' ),
		array( 'href' => 'hoas-condos', 'h4' => 'Bonita HOAs', 'desc' => 'Gated luxury communities &amp; gulf-front condos.' ),
		array( 'href' => 'multi-property', 'h4' => 'Bonita portfolios', 'desc' => 'Multi-village master-planned community contracts.' ),
		array( 'href' => 'hotels-resorts', 'h4' => 'Bonita hotels', 'desc' => 'Hyatt Coconut Point &amp; corridor hospitality.' ),
	),
	'nearby_title_red' => 'SW Florida.',
	'nearby' => array(
		array( 'label' => 'Naples', 'desc' => 'Collier County. Old Naples luxury.', 'href' => 'naples' ),
		array( 'label' => 'Fort Myers', 'desc' => 'Lee County. River District.', 'href' => 'fort-myers' ),
		array( 'label' => 'Marco Island', 'desc' => 'Collier County. Beach resort.', 'href' => 'marco-island' ),
		array( 'label' => 'All SW Florida', 'desc' => '2 counties. See full coverage.' ),
	),
	'testimonials_eyebrow' => 'What Bonita Springs property managers say',
	'testimonials_heading' => 'Trusted in the golf community corridor',
	'testimonials_region_key' => 'sw-florida',
	'cta_heading' => 'Bonita property?',
);
include locate_template( 'template-parts/city-page.php' );
get_footer();
