<?php
get_header();
$pasc_city = array(
	'name' => 'Lakeland',
	'region_slug' => 'lakeland',
	'breadcrumb_parent_label' => 'Lakeland &amp; Polk',
	'eyebrow' => 'Lakeland, Florida',
	'h1_red' => 'in Lakeland, FL.',
	'hero_intro' => 'Florida Southern College historic district pools, downtown Lakeland boutique hospitality, Lake Hollingsworth residential community amenities, and I-4 corridor corporate hotels — full commercial pool service across Lakeland city and surrounding Polk County.',
	'context_title_red' => 'commercial pool reality.',
	'context_paragraphs' => array(
		'Lakeland city anchors Polk County\'s commercial pool market. Florida Southern College (with Frank Lloyd Wright architectural campus) and Florida Polytechnic University drive academic and student housing pool demand. Lake Hollingsworth and Lake Morton historic neighborhoods host upscale residential. Downtown Lakeland\'s boutique hotels (the Terrace Hotel, Hampton Inn, Hilton Garden Inn) anchor hospitality. The I-4 corridor brings corporate business hotels.',
		'Polk County Department of Health enforces FL Admin Code 64E-9 with regular inspections of hotel, HOA, and academic pool facilities. We log every visit per inspector spec, maintain compliance binders for HOA boards and academic facilities, and provide brand-flag QA documentation for hospitality customers.',
		'Lakeland\'s climate is similar to Tampa Bay — year-round pool season with summer afternoon thunderstorm chemistry shock. The I-4 corridor catches both Gulf and Atlantic hurricane impacts. We maintain post-storm dispatch capacity through August-October. Lakeland\'s mature tree canopy creates significant fall and spring debris loading on pools.',
	),
	'neighborhoods_title_red' => 'neighborhoods &amp; districts.',
	'neighborhoods' => array(
		array( 'label' => 'Downtown Lakeland', 'desc' => 'boutique hotels &amp; mixed-use pools' ),
		array( 'label' => 'Lake Hollingsworth', 'desc' => 'historic luxury residential pools' ),
		array( 'label' => 'Lake Morton', 'desc' => 'historic residential &amp; community pools' ),
		array( 'label' => 'Florida Southern College area', 'desc' => 'academic &amp; residential pool service' ),
		array( 'label' => 'Cleveland Heights', 'desc' => 'established residential HOAs' ),
		array( 'label' => 'Lakeland Highlands', 'desc' => 'master-planned community amenities' ),
		array( 'label' => 'I-4 corporate corridor', 'desc' => 'business hotel pool service' ),
		array( 'label' => 'South Lakeland', 'desc' => 'newer residential HOA cluster' ),
	),
	'industries' => array(
		array( 'href' => 'hotels-resorts', 'h4' => 'Lakeland hotels', 'desc' => 'Downtown boutique &amp; I-4 corridor business hotels.' ),
		array( 'href' => 'hoas-condos', 'h4' => 'Lakeland HOAs', 'desc' => 'Historic neighborhood &amp; master-planned community associations.' ),
		array( 'href' => 'fitness-aquatic', 'h4' => 'Lakeland fitness', 'desc' => 'YMCAs, athletic clubs, college aquatic facilities.' ),
		array( 'href' => 'municipal-schools', 'h4' => 'Polk schools', 'desc' => 'Florida Southern, Florida Polytechnic academic pools.' ),
	),
	'nearby_title_red' => 'Polk County.',
	'nearby' => array(
		array( 'label' => 'Winter Haven', 'desc' => 'Polk County. Chain of Lakes.', 'href' => 'winter-haven' ),
		array( 'label' => 'Davenport', 'desc' => 'Polk County. Disney-area rentals.', 'href' => 'davenport' ),
		array( 'label' => 'Auburndale', 'desc' => 'Polk County. I-4 corridor.', 'href' => 'auburndale' ),
		array( 'label' => 'All Polk County', 'desc' => 'Full Polk coverage.' ),
	),
	'testimonials_eyebrow' => 'What Lakeland property managers say',
	'testimonials_heading' => 'Trusted in Lakeland city',
	'testimonials_region_key' => 'lakeland',
	'cta_heading' => 'Lakeland property?',
);
include locate_template( 'template-parts/city-page.php' );
get_footer();
