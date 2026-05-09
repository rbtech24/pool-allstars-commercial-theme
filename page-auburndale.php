<?php
get_header();
$pasc_city = array(
	'name' => 'Auburndale',
	'region_slug' => 'lakeland',
	'breadcrumb_parent_label' => 'Lakeland &amp; Polk',
	'eyebrow' => 'Auburndale, Florida',
	'h1_red' => 'in Auburndale, FL.',
	'hero_intro' => 'I-4 corridor corporate hotels, Lake Ariana &amp; Lake Stella residential community pools, the Polk Industrial corridor hospitality, and the route between Tampa and Orlando — full commercial pool service across Auburndale and central Polk County.',
	'context_title_red' => 'commercial pool reality.',
	'context_paragraphs' => array(
		'Auburndale sits squarely on the I-4 corridor between Lakeland and Winter Haven, anchoring central Polk County\'s industrial and hospitality markets. The pool service market is dominated by I-4 corporate business hotels (Holiday Inn Express, Hampton Inn, Comfort Suites), Lake Ariana and Lake Stella residential community HOAs, and the growing residential development around Polk State College.',
		'Polk County Department of Health enforces FL Admin Code 64E-9 with regular inspections. We log to inspector spec on every visit and provide brand-flag QA documentation for hospitality customers. I-4 corridor properties get fast-response equipment service since corporate hotels can\'t afford guest-impact pool downtime.',
		'Auburndale\'s climate matches the rest of central Polk — year-round pool season with summer afternoon thunderstorm chemistry shock. The lake-front residential properties have specific maintenance considerations (occasional natural water adjacency affecting algae pressure). We tune service to local conditions.',
	),
	'neighborhoods_title_red' => 'neighborhoods &amp; corridors.',
	'neighborhoods' => array(
		array( 'label' => 'I-4 corporate corridor', 'desc' => 'business hotel cluster' ),
		array( 'label' => 'Lake Ariana corridor', 'desc' => 'lakefront residential community pools' ),
		array( 'label' => 'Lake Stella', 'desc' => 'lakefront residential pool service' ),
		array( 'label' => 'Downtown Auburndale', 'desc' => 'historic district hospitality' ),
		array( 'label' => 'Polk State College area', 'desc' => 'academic &amp; residential pools' ),
		array( 'label' => 'Polk Parkway corridor', 'desc' => 'newer residential development' ),
		array( 'label' => 'Industrial corridor properties', 'desc' => 'corporate hotel &amp; extended-stay' ),
		array( 'label' => 'Lake Alfred (adjacent)', 'desc' => 'small-city hospitality &amp; residential' ),
	),
	'industries' => array(
		array( 'href' => 'hotels-resorts', 'h4' => 'Auburndale hotels', 'desc' => 'I-4 corridor &amp; Polk Parkway corporate hospitality.' ),
		array( 'href' => 'hoas-condos', 'h4' => 'Auburndale HOAs', 'desc' => 'Lake Ariana, Lake Stella residential associations.' ),
		array( 'href' => 'multi-property', 'h4' => 'Polk portfolios', 'desc' => 'I-4 corridor multi-property hospitality.' ),
		array( 'href' => 'fitness-aquatic', 'h4' => 'Polk fitness', 'desc' => 'Community athletic clubs, hotel fitness amenities.' ),
	),
	'nearby_title_red' => 'Polk County.',
	'nearby' => array(
		array( 'label' => 'Lakeland', 'desc' => 'Polk County. Florida Southern district.', 'href' => 'lakeland-city' ),
		array( 'label' => 'Winter Haven', 'desc' => 'Polk County. Chain of Lakes.', 'href' => 'winter-haven' ),
		array( 'label' => 'Davenport', 'desc' => 'Polk County. Disney-area rentals.', 'href' => 'davenport' ),
		array( 'label' => 'All Polk County', 'desc' => 'Full Polk coverage.' ),
	),
	'testimonials_eyebrow' => 'What Auburndale property managers say',
	'testimonials_heading' => 'Trusted on the I-4 corridor',
	'testimonials_region_key' => 'lakeland',
	'cta_heading' => 'Auburndale property?',
);
include locate_template( 'template-parts/city-page.php' );
get_footer();
