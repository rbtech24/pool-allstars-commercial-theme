<?php
get_header();
$pasc_city = array(
	'name' => 'Bradenton',
	'region_slug' => 'tampa-bay',
	'breadcrumb_parent_label' => 'Tampa Bay',
	'eyebrow' => 'Bradenton, Florida',
	'h1_red' => 'in Bradenton, FL.',
	'hero_intro' => 'From Anna Maria Island beachfront vacation rentals to historic downtown Bradenton boutique properties, Lakewood Ranch HOAs, and the Sarasota-Bradenton airport corridor hospitality — full commercial pool service across Bradenton and Manatee County.',
	'context_title_red' => 'commercial pool reality.',
	'context_paragraphs' => array(
		'Bradenton sits between Tampa Bay and Sarasota with a distinct identity — a working river city, an Anna Maria Island vacation rental market, and the explosive growth of Lakewood Ranch master-planned community on its eastern edge. Pool service spans beachfront vacation rentals (Anna Maria, Holmes Beach), downtown boutique hospitality, and large-volume HOA portfolios.',
		'Manatee County health enforces FL Admin Code 64E-9 with regular inspections of hotels, vacation rentals, and HOA pools. Anna Maria Island vacation rentals get particular attention because of high bather turnover. We log every visit per inspector spec and integrate photo confirmations directly into property management software.',
		'Anna Maria Island salt-air corrosion is severe — pump motors and salt cells need preventative service to hit warranty-period lifespan. We build equipment service schedules around the corrosion timeline. Hurricane response (Helene, Milton) is a routine Manatee County need; we maintain dispatch through August–October.',
	),
	'neighborhoods_title_red' => 'neighborhoods &amp; districts.',
	'neighborhoods' => array(
		array( 'label' => 'Downtown Bradenton &amp; Riverwalk', 'desc' => 'historic boutique hotels, riverfront condos' ),
		array( 'label' => 'Anna Maria Island', 'desc' => 'beachfront vacation rentals &amp; small resort properties' ),
		array( 'label' => 'Holmes Beach &amp; Bradenton Beach', 'desc' => 'beach corridor vacation rental cluster' ),
		array( 'label' => 'Lakewood Ranch', 'desc' => 'master-planned community amenity decks' ),
		array( 'label' => 'Palmetto', 'desc' => 'small-property hospitality &amp; HOAs' ),
		array( 'label' => 'Parrish', 'desc' => 'newer master-planned community pools' ),
		array( 'label' => 'Cortez &amp; Perico Island', 'desc' => 'waterfront residential &amp; condo pools' ),
		array( 'label' => 'IMG Academy corridor', 'desc' => 'sports academy hotels &amp; rental properties' ),
	),
	'industries' => array(
		array( 'href' => 'vacation-rentals', 'h4' => 'Anna Maria rentals', 'desc' => 'Beachfront Airbnb &amp; VRBO portfolios.' ),
		array( 'href' => 'hoas-condos', 'h4' => 'Bradenton HOAs', 'desc' => 'Lakewood Ranch, downtown condos, beach associations.' ),
		array( 'href' => 'hotels-resorts', 'h4' => 'Bradenton hotels', 'desc' => 'Riverwalk &amp; airport-corridor properties.' ),
		array( 'href' => 'multi-property', 'h4' => 'Lakewood Ranch portfolios', 'desc' => 'Multi-village HOA portfolio service.' ),
	),
	'nearby_title_red' => 'Tampa Bay.',
	'nearby' => array(
		array( 'label' => 'Sarasota', 'desc' => 'Sarasota County. Bayfront luxury.', 'href' => 'sarasota' ),
		array( 'label' => 'Lakewood Ranch', 'desc' => 'Manatee County. Master-planned community.', 'href' => 'lakewood-ranch' ),
		array( 'label' => 'Tampa', 'desc' => 'Hillsborough County. Downtown.', 'href' => 'tampa' ),
		array( 'label' => 'All Tampa Bay', 'desc' => '6 counties. See full coverage.' ),
	),
	'testimonials_eyebrow' => 'What Bradenton property managers say',
	'testimonials_heading' => 'Trusted across Manatee County',
	'testimonials_region_key' => 'tampa-bay',
	'cta_heading' => 'Bradenton property?',
);
include locate_template( 'template-parts/city-page.php' );
get_footer();
