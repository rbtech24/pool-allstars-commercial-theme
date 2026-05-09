<?php
get_header();
$pasc_city = array(
	'name' => 'Winter Park',
	'region_slug' => 'orlando',
	'breadcrumb_parent_label' => 'Orlando',
	'eyebrow' => 'Winter Park, Florida',
	'h1_red' => 'in Winter Park, FL.',
	'hero_intro' => 'Park Avenue boutique hotels, historic residential HOA pools along the Chain of Lakes, Rollins College community amenities, and Winter Park\'s established private clubs — full commercial pool service across Winter Park and northern Orange County.',
	'context_title_red' => 'commercial pool reality.',
	'context_paragraphs' => array(
		'Winter Park is the historic, walkable, upscale neighborhood of greater Orlando. Park Avenue\'s boutique hotels (Alfond Inn, Hampton Inn, Hilton Orlando/Winter Park) blend with historic residential along the Chain of Lakes. The Rollins College area has its own residential and student-housing pool service market. Maitland and the surrounding northern Orange County areas extend the market.',
		'Orange County environmental health enforces FL Admin Code 64E-9 with regular inspections. We log every parameter to inspector spec on every visit, maintain compliance binders for board-ready HOA documentation, and provide brand-flag QA support for hospitality customers. Historic district pools sometimes have older equipment requiring specialized service.',
		'Winter Park\'s tree canopy is an asset and a maintenance factor — heavy autumn leaf load on pools, plus spring oak pollen, requires elevated filter cleaning frequency Mar-Nov. We tune service schedules to actual debris load rather than generic calendar defaults.',
	),
	'neighborhoods_title_red' => 'neighborhoods &amp; districts.',
	'neighborhoods' => array(
		array( 'label' => 'Park Avenue', 'desc' => 'boutique hotels &amp; downtown commercial pools' ),
		array( 'label' => 'Chain of Lakes neighborhoods', 'desc' => 'historic residential community pools' ),
		array( 'label' => 'Rollins College area', 'desc' => 'college residential &amp; community pools' ),
		array( 'label' => 'Maitland', 'desc' => 'corporate hotels &amp; established HOAs' ),
		array( 'label' => 'Eatonville', 'desc' => 'historic residential community pools' ),
		array( 'label' => 'College Park', 'desc' => 'historic residential, boutique hospitality' ),
		array( 'label' => 'Winter Park Pines &amp; Aloma', 'desc' => 'established residential HOAs' ),
		array( 'label' => 'Casselberry &amp; Goldenrod', 'desc' => 'community pool service' ),
	),
	'industries' => array(
		array( 'href' => 'hotels-resorts', 'h4' => 'Winter Park hotels', 'desc' => 'Park Avenue boutique &amp; corporate hospitality.' ),
		array( 'href' => 'hoas-condos', 'h4' => 'Winter Park HOAs', 'desc' => 'Historic neighborhood &amp; Chain of Lakes associations.' ),
		array( 'href' => 'country-clubs', 'h4' => 'Winter Park clubs', 'desc' => 'Country Club of Orlando, Interlachen tier.' ),
		array( 'href' => 'fitness-aquatic', 'h4' => 'Winter Park fitness', 'desc' => 'YMCAs, college aquatics, athletic clubs.' ),
	),
	'nearby_title_red' => 'Central Florida.',
	'nearby' => array(
		array( 'label' => 'Orlando', 'desc' => 'Orange County. Downtown.', 'href' => 'orlando-city' ),
		array( 'label' => 'Lake Mary', 'desc' => 'Seminole County. Corporate corridor.', 'href' => 'lake-mary' ),
		array( 'label' => 'Kissimmee', 'desc' => 'Osceola County. Disney-area rentals.', 'href' => 'kissimmee' ),
		array( 'label' => 'All Orlando area', 'desc' => '4 counties. See full coverage.' ),
	),
	'testimonials_eyebrow' => 'What Winter Park property managers say',
	'testimonials_heading' => 'Trusted in historic Winter Park',
	'testimonials_region_key' => 'orlando',
	'cta_heading' => 'Winter Park property?',
);
include locate_template( 'template-parts/city-page.php' );
get_footer();
