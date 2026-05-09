<?php
get_header();
$pasc_city = array(
	'name' => 'Fort Myers',
	'region_slug' => 'sw-florida',
	'breadcrumb_parent_label' => 'SW Florida',
	'eyebrow' => 'Fort Myers, Florida',
	'h1_red' => 'in Fort Myers, FL.',
	'hero_intro' => 'Fort Myers Beach gulf-front resort pools, downtown Fort Myers River District boutique hotels, Cape Coral residential canal-front pools, and Estero/Lehigh Acres master-planned community amenities — full commercial pool service across Fort Myers and Lee County.',
	'context_title_red' => 'commercial pool reality.',
	'context_paragraphs' => array(
		'Fort Myers and Lee County is one of Florida\'s fastest-growing markets. Fort Myers Beach (still rebuilding from Hurricane Ian) anchors the gulf-front resort segment. Downtown Fort Myers River District has driven boutique hospitality growth. Cape Coral\'s 400+ miles of canals create a unique residential pool market. Estero, Bonita Springs (covered separately), and Lehigh Acres provide extensive HOA and community pool service demand.',
		'Lee County health enforces FL Admin Code 64E-9 with regular hotel and HOA pool inspections. We log every parameter to inspector spec on every visit and provide brand-flag QA documentation for hospitality customers. Beach-area properties get specialized salt-air equipment service planning.',
		'Hurricane Ian recovery is ongoing in Lee County. We\'ve been on-the-ground since the storm hit, supporting chemistry rebuild and equipment recovery for hospitality and HOA customers. We continue to maintain post-storm dispatch capacity through hurricane season.',
	),
	'neighborhoods_title_red' => 'neighborhoods &amp; districts.',
	'neighborhoods' => array(
		array( 'label' => 'Fort Myers Beach', 'desc' => 'gulf-front resort &amp; vacation rental corridor' ),
		array( 'label' => 'Downtown Fort Myers River District', 'desc' => 'historic boutique hospitality' ),
		array( 'label' => 'Cape Coral', 'desc' => 'canal-front residential community pools' ),
		array( 'label' => 'McGregor Boulevard corridor', 'desc' => 'historic luxury residential pools' ),
		array( 'label' => 'Estero', 'desc' => 'master-planned community amenity decks' ),
		array( 'label' => 'Lehigh Acres', 'desc' => 'inland residential community pools' ),
		array( 'label' => 'Gateway corridor', 'desc' => 'master-planned residential cluster' ),
		array( 'label' => 'Fort Myers Shores', 'desc' => 'established residential canal-front HOAs' ),
	),
	'industries' => array(
		array( 'href' => 'hotels-resorts', 'h4' => 'Fort Myers hotels', 'desc' => 'Beach corridor &amp; River District hospitality.' ),
		array( 'href' => 'hoas-condos', 'h4' => 'Fort Myers HOAs', 'desc' => 'Cape Coral, Estero, master-planned communities.' ),
		array( 'href' => 'vacation-rentals', 'h4' => 'Beach vacation rentals', 'desc' => 'Fort Myers Beach &amp; gulf-front rental properties.' ),
		array( 'href' => 'multi-property', 'h4' => 'Lee County portfolios', 'desc' => 'Multi-community HOA portfolio service.' ),
	),
	'nearby_title_red' => 'SW Florida.',
	'nearby' => array(
		array( 'label' => 'Naples', 'desc' => 'Collier County. Old Naples luxury.', 'href' => 'naples' ),
		array( 'label' => 'Marco Island', 'desc' => 'Collier County. Beach resort.', 'href' => 'marco-island' ),
		array( 'label' => 'Bonita Springs', 'desc' => 'Lee County. Golf community.', 'href' => 'bonita-springs' ),
		array( 'label' => 'All SW Florida', 'desc' => '2 counties. See full coverage.' ),
	),
	'testimonials_eyebrow' => 'What Fort Myers property managers say',
	'testimonials_heading' => 'Trusted across Lee County',
	'testimonials_region_key' => 'sw-florida',
	'cta_heading' => 'Fort Myers property?',
);
include locate_template( 'template-parts/city-page.php' );
get_footer();
