<?php
get_header();
$pasc_city = array(
	'name' => 'Clermont',
	'region_slug' => 'orlando',
	'breadcrumb_parent_label' => 'Orlando',
	'eyebrow' => 'Clermont, Florida',
	'h1_red' => 'in Clermont, FL.',
	'hero_intro' => 'Lake County\'s rolling hill country — golf community HOAs, lakefront resort properties, master-planned 55+ communities, and the National Training Center fitness corridor — full commercial pool service across Clermont and Lake County.',
	'context_title_red' => 'commercial pool reality.',
	'context_paragraphs' => array(
		'Clermont sits in Florida\'s rare hill country (the Sugarloaf Mountain area is the highest peak on the peninsula). The pool market reflects the demographics: golf communities (Kings Ridge, Clermont National Country Club, Sanctuary Ridge), 55+ active adult communities (Clermont Yard area, Heritage Hills), and the National Training Center which hosts elite athlete training and the associated hotel/rental market.',
		'Lake County health enforces FL Admin Code 64E-9 with regular inspections. We log every visit per inspector spec, maintain compliance binders for HOA boards, and provide specialized service for the lakefront properties (Lake Minneola, Lake Louisa) where natural water quality affects pool maintenance protocols.',
		'Hill country drainage and lake-influenced humidity create slightly different pool service conditions than flat central Florida — chemistry tends to need more frequent adjustment, equipment wear patterns differ. We adjust service intervals accordingly. Hurricane response is a routine seasonal need despite the inland location.',
	),
	'neighborhoods_title_red' => 'neighborhoods &amp; districts.',
	'neighborhoods' => array(
		array( 'label' => 'Downtown Clermont', 'desc' => 'historic district hotels &amp; community pools' ),
		array( 'label' => 'Kings Ridge', 'desc' => '55+ golf community amenity pools' ),
		array( 'label' => 'Heritage Hills', 'desc' => 'active adult community pool service' ),
		array( 'label' => 'Sanctuary Ridge', 'desc' => 'gated golf community pools' ),
		array( 'label' => 'Lake Minneola corridor', 'desc' => 'lakefront residential &amp; resort properties' ),
		array( 'label' => 'National Training Center area', 'desc' => 'sports-anchored hospitality &amp; rentals' ),
		array( 'label' => 'Minneola &amp; Mascotte', 'desc' => 'small-city community pools' ),
		array( 'label' => 'Groveland &amp; Mount Dora corridor', 'desc' => 'historic resort &amp; HOA pools' ),
	),
	'industries' => array(
		array( 'href' => 'hoas-condos', 'h4' => 'Clermont HOAs', 'desc' => '55+ communities, golf community associations.' ),
		array( 'href' => 'country-clubs', 'h4' => 'Clermont clubs', 'desc' => 'Clermont National, Kings Ridge golf community pools.' ),
		array( 'href' => 'hotels-resorts', 'h4' => 'Clermont hotels', 'desc' => 'NTC corridor &amp; lakefront hospitality.' ),
		array( 'href' => 'fitness-aquatic', 'h4' => 'NTC fitness', 'desc' => 'National Training Center &amp; community fitness.' ),
	),
	'nearby_title_red' => 'Central Florida.',
	'nearby' => array(
		array( 'label' => 'Orlando', 'desc' => 'Orange County. Downtown.', 'href' => 'orlando-city' ),
		array( 'label' => 'Winter Park', 'desc' => 'Orange County. Historic district.', 'href' => 'winter-park' ),
		array( 'label' => 'Kissimmee', 'desc' => 'Osceola County. Disney-area rentals.', 'href' => 'kissimmee' ),
		array( 'label' => 'All Orlando area', 'desc' => '4 counties. See full coverage.' ),
	),
	'testimonials_eyebrow' => 'What Clermont property managers say',
	'testimonials_heading' => 'Trusted in Lake County',
	'testimonials_region_key' => 'orlando',
	'cta_heading' => 'Clermont property?',
);
include locate_template( 'template-parts/city-page.php' );
get_footer();
