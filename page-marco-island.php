<?php
get_header();
$pasc_city = array(
	'name' => 'Marco Island',
	'region_slug' => 'sw-florida',
	'breadcrumb_parent_label' => 'SW Florida',
	'eyebrow' => 'Marco Island, Florida',
	'h1_red' => 'on Marco Island, FL.',
	'hero_intro' => 'JW Marriott Marco Island Beach Resort, Hilton Marco Island Beach Resort, oceanfront condo associations along Collier Boulevard, and the gulf-coast vacation home market — full commercial pool service across Marco Island and southern Collier County.',
	'context_title_red' => 'commercial pool reality.',
	'context_paragraphs' => array(
		'Marco Island\'s commercial pool market is dominated by JW Marriott Marco Island Beach Resort and Hilton Marco Island Beach Resort — two of Southwest Florida\'s largest resort properties, each with multiple amenity pools (resort pool, family pool, adult pool, spa hot tubs). Add the dozens of oceanfront condo associations along Collier Boulevard and the inland luxury residential market, and Marco is one of Florida\'s densest resort pool service markets.',
		'Collier County health enforces FL Admin Code 64E-9 with particular focus on hot tub bromine compliance and ADA accessibility. We log every parameter to inspector spec on every visit and provide brand-flag QA documentation for hospitality customers (Marriott, Hilton, others). Multi-pool resort routing is a core operational competency.',
		'Hurricane Ian (Sept 2022) hit Marco Island hard. We were on-island within 48 hours of access reopening for chemistry rebuild, equipment recovery, and pump replacement coordination. Salt-air corrosion is severe — equipment lifespan runs 40-50% shorter than inland Collier properties. We build preventative service schedules around the corrosion timeline.',
	),
	'neighborhoods_title_red' => 'districts &amp; resort properties.',
	'neighborhoods' => array(
		array( 'label' => 'JW Marriott Marco', 'desc' => 'flagship resort multi-pool service' ),
		array( 'label' => 'Hilton Marco Island', 'desc' => 'beachfront resort property pools' ),
		array( 'label' => 'Collier Boulevard corridor', 'desc' => 'oceanfront condo association cluster' ),
		array( 'label' => 'Old Marco Village', 'desc' => 'historic district hospitality &amp; residential' ),
		array( 'label' => 'Marco Island Country Club area', 'desc' => 'gated luxury residential community pools' ),
		array( 'label' => 'Hideaway Beach Club', 'desc' => 'private gated community amenities' ),
		array( 'label' => 'Tigertail Beach corridor', 'desc' => 'beachfront vacation rental properties' ),
		array( 'label' => 'Goodland &amp; Isles of Capri', 'desc' => 'small-property hospitality &amp; residential' ),
	),
	'industries' => array(
		array( 'href' => 'hotels-resorts', 'h4' => 'Marco resorts', 'desc' => 'JW Marriott, Hilton, oceanfront resort properties.' ),
		array( 'href' => 'hoas-condos', 'h4' => 'Marco condos', 'desc' => 'Collier Boulevard high-rise &amp; mid-rise associations.' ),
		array( 'href' => 'country-clubs', 'h4' => 'Marco clubs', 'desc' => 'Marco Island Country Club, Hideaway Beach.' ),
		array( 'href' => 'vacation-rentals', 'h4' => 'Marco rentals', 'desc' => 'Beach &amp; gulf-front vacation properties.' ),
	),
	'nearby_title_red' => 'SW Florida.',
	'nearby' => array(
		array( 'label' => 'Naples', 'desc' => 'Collier County. Old Naples luxury.', 'href' => 'naples' ),
		array( 'label' => 'Bonita Springs', 'desc' => 'Lee County. Golf community.', 'href' => 'bonita-springs' ),
		array( 'label' => 'Fort Myers', 'desc' => 'Lee County. Coastal &amp; inland.', 'href' => 'fort-myers' ),
		array( 'label' => 'All SW Florida', 'desc' => '2 counties. See full coverage.' ),
	),
	'testimonials_eyebrow' => 'What Marco Island property managers say',
	'testimonials_heading' => 'Trusted on Marco Island',
	'testimonials_region_key' => 'sw-florida',
	'cta_heading' => 'Marco property?',
);
include locate_template( 'template-parts/city-page.php' );
get_footer();
