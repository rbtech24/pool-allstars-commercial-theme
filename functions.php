<?php
/**
 * Pool All-Stars Commercial — theme functions
 *
 * @package PoolAllStarsCommercial
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'PASC_VERSION', '1.0.0' );
define( 'PASC_DIR', get_template_directory() );
define( 'PASC_URI', get_template_directory_uri() );

/* ============================================================
 * THEME SETUP
 * ============================================================ */
function pasc_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'automatic-feed-links' );
	register_nav_menus( array(
		'primary' => __( 'Primary navigation', 'pool-allstars-commercial' ),
		'mobile'  => __( 'Mobile navigation', 'pool-allstars-commercial' ),
		'footer-industries' => __( 'Footer — Industries', 'pool-allstars-commercial' ),
		'footer-areas'      => __( 'Footer — Service area', 'pool-allstars-commercial' ),
		'footer-company'    => __( 'Footer — Company', 'pool-allstars-commercial' ),
	) );
}
add_action( 'after_setup_theme', 'pasc_setup' );

/* ============================================================
 * ENQUEUE STYLES & SCRIPTS
 * ============================================================ */
function pasc_enqueue_assets() {
	// Google Fonts
	wp_enqueue_style( 'pasc-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Inter+Tight:wght@500;600;700;800;900&display=swap', array(), null );

	// Theme stylesheet (the actual styles)
	wp_enqueue_style( 'pasc-style', PASC_URI . '/assets/css/style.css', array(), PASC_VERSION );

	// WP requires the root style.css to be enqueued so the theme registers properly
	wp_enqueue_style( 'pasc-theme', get_stylesheet_uri(), array( 'pasc-style' ), PASC_VERSION );

	// Leaflet (only on pages that need it)
	if ( is_page( array( 'service-area' ) ) || is_front_page() ) {
		wp_enqueue_style( 'leaflet', 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.css', array(), '1.9.4' );
		wp_enqueue_script( 'leaflet', 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.js', array(), '1.9.4', true );
	}
}
add_action( 'wp_enqueue_scripts', 'pasc_enqueue_assets' );

/* ============================================================
 * SEO REGISTRY — per-page title, meta description, OG data
 *
 * Custom titles and descriptions for every page on the site.
 * Override at any time via the `pasc_seo_registry` filter, OR by
 * installing Yoast / Rank Math (this system stands down automatically
 * when those plugins are active).
 * ============================================================ */
function pasc_seo_registry() {
	$registry = array(
		'home' => array(
			'title' => 'Commercial Pool Service Florida | Pool All-Stars',
			'desc'  => 'Florida commercial pool service for hotels, HOAs, condos, fitness & multi-property portfolios. COI in 24 hours, dedicated tech, photo-confirmed reports. Call (833) 968-4888.',
		),
		'about' => array(
			'title' => 'About Pool All-Stars | 17 Years of Florida Commercial Pool Service',
			'desc'  => 'Pool All-Stars has serviced Florida commercial pools since 2009 — 5,000+ pools, BBB A+, CPO-certified techs, dedicated account managers. Built for property managers.',
		),
		'contact' => array(
			'title' => 'Contact Pool All-Stars | Florida Commercial Pool Service Quote',
			'desc'  => 'Request a fixed-rate Florida commercial pool service proposal. COI in 24 hours, dedicated account manager, response within 1 business day. Call (833) 968-4888.',
		),
		'services' => array(
			'title' => 'Commercial Pool Services Florida | 8 Specialties Under 1 Contract',
			'desc'  => 'Florida commercial pool services: weekly maintenance, water chemistry, equipment repair, filter cleaning, green pool recovery, leak detection, acid washing, renovation.',
		),
		'industries' => array(
			'title' => 'Commercial Pool Service by Industry | Florida | Pool All-Stars',
			'desc'  => 'Florida commercial pool service specialized by property type — hotels, HOAs, condos, fitness, multi-property, vacation rentals, water parks, country clubs, schools.',
		),
		'service-area' => array(
			'title' => 'Florida Commercial Pool Service Areas | 7 Regions Statewide',
			'desc'  => 'Pool All-Stars commercial pool service across all of Florida — Tampa Bay, Orlando, South Florida, Jacksonville, SW Florida, Space Coast, Lakeland. Find your region.',
		),
		// Service detail pages
		'weekly-maintenance' => array(
			'title' => 'Weekly Commercial Pool Maintenance Florida | 12-Point Checklist',
			'desc'  => 'Florida weekly commercial pool maintenance: 12-point checklist, dedicated technician, GPS-verified visits, same-day photo report. Hotels, HOAs, fitness, multi-property.',
		),
		'water-chemistry' => array(
			'title' => 'Commercial Pool Water Chemistry Florida | FAC 64E-9 Compliant',
			'desc'  => 'Florida commercial pool water chemistry: FAC, pH, alkalinity, calcium, CYA, TDS — balanced to FL Admin Code 64E-9. Daily logs, audit-ready, CPO-certified techs.',
		),
		'equipment-repair' => array(
			'title' => 'Commercial Pool Equipment Repair Florida | Same-Day Diagnosis',
			'desc'  => 'Florida commercial pool equipment repair: pumps, motors, salt cells, heaters, automation, plumbing. Same-day diagnosis, in-house W-2 techs, no subcontracting.',
		),
		'filter-cleaning' => array(
			'title' => 'Commercial Pool Filter Cleaning Florida | DE, Cartridge, Sand',
			'desc'  => 'Florida commercial pool filter cleaning: DE, cartridge, sand, regenerative DE. Scheduled by PSI rise & bather load — not a generic calendar. Cleanest water, lowest cost.',
		),
		'green-pool-recovery' => array(
			'title' => 'Green Pool Recovery Florida | Swim-Ready in 3-7 Days',
			'desc'  => 'Florida green pool recovery — algae-clouded commercial pool restored swim-ready in 3-7 days. Photo-documented progress, post-storm response, hotel & HOA emergency service.',
		),
		'leak-detection' => array(
			'title' => 'Commercial Pool Leak Detection Florida | Non-Destructive',
			'desc'  => 'Florida commercial pool leak detection: pressure testing, dye testing, electronic detection. Find leaks without draining or destructive digging. Most repairs same week.',
		),
		'acid-washing' => array(
			'title' => 'Commercial Pool Acid Washing Florida | Plaster Restoration',
			'desc'  => 'Florida commercial pool acid washing & plaster restoration. Removes mineral stains, ground-in algae. Off-peak scheduling so hotels, HOAs, clubs avoid downtime impact.',
		),
		'pool-renovation' => array(
			'title' => 'Commercial Pool Renovation Florida | Resurface, Tile, Equipment',
			'desc'  => 'Florida commercial pool renovation: resurface, tile, coping, equipment upgrades, ADA. HOA-board-ready quotes, hotel shoulder-season scheduling.',
		),
		// Industry pages
		'hotels-resorts' => array(
			'title' => 'Hotel Pool Service Florida | Brand-Standard Cleanliness',
			'desc'  => 'Florida hotel & resort pool service. Dawn cleanings, brand-standard finish, photo-confirmed visits sent to GM + front desk. Limited-service to full-service to condo-hotel.',
		),
		'hoas-condos' => array(
			'title' => 'HOA & Condo Pool Service Florida | Board-Ready Reports',
			'desc'  => 'Florida HOA & condo pool service. Monthly board-ready reports, flat-rate billing, dedicated tech, 24-hr COI. Self-managed or FirstService/Castle/Associa.',
		),
		'fitness-aquatic' => array(
			'title' => 'Fitness Pool & Aquatic Center Service Florida | Health-Code',
			'desc'  => 'Florida fitness center & aquatic facility pool service. Member-load chlorine control, FAC compliance logs, swim-meet clarity, hot tub bromine. CPO-certified techs.',
		),
		'multi-property' => array(
			'title' => 'Multi-Property Pool Service Florida | One Contract Portfolios',
			'desc'  => 'Florida multi-property pool service. Single contract for 3-30+ properties, consolidated invoicing, dedicated account manager, volume pricing. Hospitality, condo, REIT.',
		),
		'municipal-schools' => array(
			'title' => 'Municipal & School Pool Service Florida | Procurement-Ready',
			'desc'  => 'Florida municipal pool & K-12 school pool service. RFP-ready, FL Admin Code 64E-9 compliance logs, public-pool standards, NPDES discharge compliance.',
		),
		'vacation-rentals' => array(
			'title' => 'Vacation Rental Pool Service Florida | Turnover-Day Cleanings',
			'desc'  => 'Florida vacation rental pool service for Airbnb, VRBO, Hostfully portfolios. Turnover-day cleanings, photo-confirmed visits, owner-direct or PM billing.',
		),
		'water-parks' => array(
			'title' => 'Water Park & Aquatic Attraction Service Florida | Peak-Season',
			'desc'  => 'Florida water park & aquatic attraction pool service. Wave pools, slide basins, lazy rivers, splash pads. Continuous chemistry monitoring, peak-season staffing.',
		),
		'country-clubs' => array(
			'title' => 'Country Club Pool Service Florida | Member-Standard Care',
			'desc'  => 'Florida country club pool service. Pre-dawn service, lap pool & family pool dual specs, hot tub bromine, capital project planning. Service worthy of the membership.',
		),
		// Service area regional pages
		'tampa-bay' => array(
			'title' => 'Tampa Bay Commercial Pool Service | Hillsborough, Pinellas, Pasco',
			'desc'  => 'Commercial pool service across Tampa Bay — Tampa, St. Pete, Clearwater, Sarasota, Bradenton, Lakewood Ranch. Six counties. Founded here in 2009.',
		),
		'orlando' => array(
			'title' => 'Orlando Commercial Pool Service | Disney Area & Central Florida',
			'desc'  => 'Commercial pool service across Orlando, Kissimmee, Winter Park, Lake Buena Vista, Lake Mary. Disney-area resorts, vacation homes, master-planned HOAs.',
		),
		'south-florida' => array(
			'title' => 'South Florida Commercial Pool Service | Miami, Fort Lauderdale, Palm Beach',
			'desc'  => 'Commercial pool service across Miami-Dade, Broward, Palm Beach. High-rise condos, oceanfront resorts, Boca to Miami Beach private clubs.',
		),
		'jacksonville' => array(
			'title' => 'Jacksonville Commercial Pool Service | Duval, St. Johns, Nassau',
			'desc'  => 'Commercial pool service across Jacksonville, Ponte Vedra, St. Augustine, Amelia Island. Northeast Florida hotels, golf community HOAs, fitness facilities.',
		),
		'sw-florida' => array(
			'title' => 'SW Florida Commercial Pool Service | Naples, Fort Myers, Marco Island',
			'desc'  => 'Commercial pool service across Naples, Fort Myers, Marco Island, Bonita Springs, Sanibel, Captiva. Gulf-coast resorts, country clubs, beachfront condos.',
		),
		'space-coast' => array(
			'title' => 'Space Coast Commercial Pool Service | Brevard, Indian River',
			'desc'  => 'Commercial pool service across Cocoa Beach, Melbourne, Vero Beach, Titusville. Atlantic coast hotels, oceanfront condos, Viera planned communities.',
		),
		'lakeland' => array(
			'title' => 'Lakeland & Polk County Commercial Pool Service | I-4 Corridor',
			'desc'  => 'Commercial pool service across Lakeland, Winter Haven, Davenport, Auburndale. Polk County HOAs, Disney-adjacent vacation homes, fitness facilities.',
		),
		// Legal
		'privacy' => array(
			'title' => 'Privacy Policy | Pool All-Stars Commercial',
			'desc'  => 'How Pool All-Stars Commercial collects, uses, and protects information from Florida commercial pool service customers and website visitors.',
		),
		'terms' => array(
			'title' => 'Terms of Service | Pool All-Stars Commercial',
			'desc'  => 'Terms of service for Pool All-Stars Commercial — service agreement, billing, cancellation, insurance, and liability terms for Florida pool service customers.',
		),
		'accessibility' => array(
			'title' => 'Accessibility Statement | Pool All-Stars Commercial',
			'desc'  => 'Pool All-Stars Commercial accessibility statement. WCAG 2.1 AA conformance commitment for our Florida commercial pool service website.',
		),
	);
	return apply_filters( 'pasc_seo_registry', $registry );
}

function pasc_current_seo_key() {
	if ( is_front_page() || is_home() ) return 'home';
	if ( is_singular( 'page' ) ) {
		$slug = get_post_field( 'post_name', get_the_ID() );
		return $slug;
	}
	return '';
}

function pasc_get_seo() {
	$key = pasc_current_seo_key();
	if ( empty( $key ) ) return array();
	$registry = pasc_seo_registry();
	return isset( $registry[ $key ] ) ? $registry[ $key ] : array();
}

// Defer to Yoast / Rank Math if either is active
function pasc_seo_plugin_active() {
	return defined( 'WPSEO_VERSION' ) || defined( 'RANK_MATH_VERSION' ) || class_exists( 'All_in_One_SEO_Pack' );
}

/* ============================================================
 * Title override via document_title_parts filter
 * ============================================================ */
add_filter( 'document_title_parts', 'pasc_filter_title_parts' );
function pasc_filter_title_parts( $parts ) {
	if ( pasc_seo_plugin_active() ) return $parts;
	$seo = pasc_get_seo();
	if ( ! empty( $seo['title'] ) ) {
		return array( 'title' => $seo['title'] );
	}
	return $parts;
}
add_filter( 'document_title_separator', function( $sep ) {
	return pasc_seo_plugin_active() ? $sep : '';
} );

/* ============================================================
 * SEO META TAGS (canonical, OG, Twitter) — uses registry
 * ============================================================ */
function pasc_seo_meta_tags() {
	if ( pasc_seo_plugin_active() ) return; // let plugin handle it
	$seo   = pasc_get_seo();
	$url   = is_front_page() ? home_url( '/' ) : ( is_singular() ? get_permalink() : home_url( add_query_arg( null, null ) ) );
	$title = ! empty( $seo['title'] ) ? $seo['title'] : wp_get_document_title();
	$desc  = ! empty( $seo['desc'] ) ? $seo['desc'] : get_bloginfo( 'description' );
	$image = ! empty( $seo['image'] ) ? PASC_URI . $seo['image'] : PASC_URI . '/assets/images/pool-allstars-hero.png';
	?>
	<meta name="description" content="<?php echo esc_attr( $desc ); ?>">
	<meta name="robots" content="index, follow">
	<link rel="canonical" href="<?php echo esc_url( $url ); ?>">
	<meta property="og:type" content="website">
	<meta property="og:title" content="<?php echo esc_attr( $title ); ?>">
	<meta property="og:description" content="<?php echo esc_attr( $desc ); ?>">
	<meta property="og:url" content="<?php echo esc_url( $url ); ?>">
	<meta property="og:image" content="<?php echo esc_url( $image ); ?>">
	<meta property="og:site_name" content="<?php echo esc_attr( pasc_company_name() ); ?>">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="<?php echo esc_attr( $title ); ?>">
	<meta name="twitter:description" content="<?php echo esc_attr( $desc ); ?>">
	<meta name="twitter:image" content="<?php echo esc_url( $image ); ?>">
	<?php
}
add_action( 'wp_head', 'pasc_seo_meta_tags', 5 );

/* ============================================================
 * SCHEMA.ORG JSON-LD — sitewide + per-page
 *
 * Outputs Organization + BreadcrumbList sitewide, plus page-specific
 * schema (LocalBusiness on home/contact/regions, Service on service
 * detail pages, FAQPage on home, Review aggregate sitewide).
 * ============================================================ */
function pasc_render_schema() {
	if ( pasc_seo_plugin_active() ) return;
	$key = pasc_current_seo_key();

	// 1) Organization — every page
	$org = array(
		'@context'    => 'https://schema.org',
		'@type'       => 'Organization',
		'@id'         => home_url( '/#organization' ),
		'name'        => pasc_company_name(),
		'url'         => home_url( '/' ),
		'logo'        => PASC_URI . '/assets/images/logo-horizontal.png',
		'telephone'   => '+1-' . substr( pasc_phone_tel(), 1, 3 ) . '-' . substr( pasc_phone_tel(), 4, 3 ) . '-' . substr( pasc_phone_tel(), 7 ),
		'foundingDate'=> '2009',
		'areaServed'  => array(
			array( '@type' => 'State', 'name' => 'Florida' ),
		),
		'sameAs'      => array(),
	);
	echo "\n" . '<script type="application/ld+json">' . wp_json_encode( $org, JSON_UNESCAPED_SLASHES ) . '</script>' . "\n";

	// 2) LocalBusiness — home, contact, region pages
	$local_pages = array( 'home', 'contact', 'tampa-bay', 'orlando', 'south-florida', 'jacksonville', 'sw-florida', 'space-coast', 'lakeland' );
	if ( in_array( $key, $local_pages, true ) ) {
		$lb = array(
			'@context'   => 'https://schema.org',
			'@type'      => 'LocalBusiness',
			'@id'        => home_url( '/#localbusiness' ),
			'name'       => pasc_company_name(),
			'url'        => home_url( '/' ),
			'telephone'  => '+1-' . substr( pasc_phone_tel(), 1, 3 ) . '-' . substr( pasc_phone_tel(), 4, 3 ) . '-' . substr( pasc_phone_tel(), 7 ),
			'image'      => PASC_URI . '/assets/images/pool-allstars-hero.png',
			'priceRange' => '$$',
			'address'    => array(
				'@type'           => 'PostalAddress',
				'addressRegion'   => 'FL',
				'addressCountry'  => 'US',
			),
			'areaServed' => array(
				array( '@type' => 'AdministrativeArea', 'name' => 'Tampa Bay, FL' ),
				array( '@type' => 'AdministrativeArea', 'name' => 'Orlando, FL' ),
				array( '@type' => 'AdministrativeArea', 'name' => 'Jacksonville, FL' ),
				array( '@type' => 'AdministrativeArea', 'name' => 'South Florida' ),
				array( '@type' => 'AdministrativeArea', 'name' => 'SW Florida' ),
				array( '@type' => 'AdministrativeArea', 'name' => 'Space Coast, FL' ),
				array( '@type' => 'AdministrativeArea', 'name' => 'Lakeland, FL' ),
			),
			'openingHoursSpecification' => array(
				'@type'     => 'OpeningHoursSpecification',
				'dayOfWeek' => array( 'Monday','Tuesday','Wednesday','Thursday','Friday','Saturday' ),
				'opens'     => '07:00',
				'closes'    => '19:00',
			),
			'aggregateRating' => array(
				'@type'       => 'AggregateRating',
				'ratingValue' => '4.9',
				'reviewCount' => '500',
			),
		);
		echo '<script type="application/ld+json">' . wp_json_encode( $lb, JSON_UNESCAPED_SLASHES ) . '</script>' . "\n";
	}

	// 3) Service schema — service detail pages
	$services = array( 'weekly-maintenance', 'equipment-repair', 'water-chemistry', 'filter-cleaning', 'green-pool-recovery', 'leak-detection', 'acid-washing', 'pool-renovation' );
	if ( in_array( $key, $services, true ) ) {
		$service_names = array(
			'weekly-maintenance'  => 'Weekly Commercial Pool Maintenance',
			'equipment-repair'    => 'Commercial Pool Equipment Repair',
			'water-chemistry'     => 'Commercial Pool Water Chemistry Management',
			'filter-cleaning'     => 'Commercial Pool Filter Cleaning',
			'green-pool-recovery' => 'Commercial Green Pool Recovery',
			'leak-detection'      => 'Commercial Pool Leak Detection',
			'acid-washing'        => 'Commercial Pool Acid Washing',
			'pool-renovation'     => 'Commercial Pool Renovation',
		);
		$svc = array(
			'@context'    => 'https://schema.org',
			'@type'       => 'Service',
			'serviceType' => $service_names[ $key ],
			'provider'    => array(
				'@type'     => 'LocalBusiness',
				'name'      => pasc_company_name(),
				'telephone' => '+1-' . substr( pasc_phone_tel(), 1, 3 ) . '-' . substr( pasc_phone_tel(), 4, 3 ) . '-' . substr( pasc_phone_tel(), 7 ),
			),
			'areaServed'  => array( '@type' => 'State', 'name' => 'Florida' ),
			'url'         => get_permalink(),
		);
		echo '<script type="application/ld+json">' . wp_json_encode( $svc, JSON_UNESCAPED_SLASHES ) . '</script>' . "\n";
	}

	// 4) Industry → Service schema
	$industries = array(
		'hotels-resorts'    => 'Hotel and Resort Pool Service',
		'hoas-condos'       => 'HOA and Condominium Pool Service',
		'fitness-aquatic'   => 'Fitness Center and Aquatic Facility Pool Service',
		'multi-property'    => 'Multi-Property Portfolio Pool Service',
		'municipal-schools' => 'Municipal and School Pool Service',
		'vacation-rentals'  => 'Vacation Rental Pool Service',
		'water-parks'       => 'Water Park Pool Service',
		'country-clubs'     => 'Country Club Pool Service',
	);
	if ( isset( $industries[ $key ] ) ) {
		$ind = array(
			'@context'    => 'https://schema.org',
			'@type'       => 'Service',
			'serviceType' => $industries[ $key ],
			'provider'    => array(
				'@type'     => 'LocalBusiness',
				'name'      => pasc_company_name(),
				'telephone' => '+1-' . substr( pasc_phone_tel(), 1, 3 ) . '-' . substr( pasc_phone_tel(), 4, 3 ) . '-' . substr( pasc_phone_tel(), 7 ),
			),
			'areaServed'  => array( '@type' => 'State', 'name' => 'Florida' ),
			'url'         => get_permalink(),
		);
		echo '<script type="application/ld+json">' . wp_json_encode( $ind, JSON_UNESCAPED_SLASHES ) . '</script>' . "\n";
	}

	// 5) ItemList — overview pages
	$lists = array(
		'services'   => array( 'name' => 'Commercial Pool Services', 'items' => array(
			array( 'Weekly Pool Maintenance',  '/services/weekly-maintenance/' ),
			array( 'Commercial Pool Water Chemistry', '/services/water-chemistry/' ),
			array( 'Commercial Pool Equipment Repair', '/services/equipment-repair/' ),
			array( 'Commercial Pool Filter Cleaning', '/services/filter-cleaning/' ),
			array( 'Commercial Green Pool Recovery', '/services/green-pool-recovery/' ),
			array( 'Commercial Pool Leak Detection', '/services/leak-detection/' ),
			array( 'Commercial Pool Acid Washing', '/services/acid-washing/' ),
			array( 'Commercial Pool Renovation', '/services/pool-renovation/' ),
		) ),
		'industries' => array( 'name' => 'Industries Served', 'items' => array(
			array( 'Hotels & Resorts',     '/industries/hotels-resorts/' ),
			array( 'HOAs & Condos',        '/industries/hoas-condos/' ),
			array( 'Fitness & Aquatic',    '/industries/fitness-aquatic/' ),
			array( 'Multi-Property',       '/industries/multi-property/' ),
			array( 'Municipal & Schools',  '/industries/municipal-schools/' ),
			array( 'Vacation Rentals',     '/industries/vacation-rentals/' ),
			array( 'Water Parks',          '/industries/water-parks/' ),
			array( 'Country Clubs',        '/industries/country-clubs/' ),
		) ),
		'service-area' => array( 'name' => 'Florida Service Areas', 'items' => array(
			array( 'Tampa Bay',     '/service-area/tampa-bay/' ),
			array( 'Orlando',       '/service-area/orlando/' ),
			array( 'South Florida', '/service-area/south-florida/' ),
			array( 'Jacksonville',  '/service-area/jacksonville/' ),
			array( 'SW Florida',    '/service-area/sw-florida/' ),
			array( 'Space Coast',   '/service-area/space-coast/' ),
			array( 'Lakeland',      '/service-area/lakeland/' ),
		) ),
	);
	if ( isset( $lists[ $key ] ) ) {
		$il_items = array();
		foreach ( $lists[ $key ]['items'] as $i => $item ) {
			$il_items[] = array(
				'@type'    => 'ListItem',
				'position' => $i + 1,
				'name'     => $item[0],
				'url'      => home_url( $item[1] ),
			);
		}
		$il = array(
			'@context'         => 'https://schema.org',
			'@type'            => 'ItemList',
			'name'             => $lists[ $key ]['name'],
			'url'              => get_permalink(),
			'itemListElement'  => $il_items,
		);
		echo '<script type="application/ld+json">' . wp_json_encode( $il, JSON_UNESCAPED_SLASHES ) . '</script>' . "\n";
	}

	// 6) FAQPage — homepage
	if ( $key === 'home' ) {
		$faqs = array(
			array( 'What is included in commercial pool service?', 'Standard commercial weekly pool maintenance includes water chemistry testing and balancing, brushing, vacuuming, basket emptying, equipment inspection, filter pressure check, and a same-day photo-confirmed service report.' ),
			array( 'How quickly can you provide a Certificate of Insurance?', 'COI is provided within 24 hours of contract signing, naming your property as additional insured.' ),
			array( 'Do you offer multi-property pricing?', 'Yes. Volume pricing kicks in at 3+ properties under one contract. Portfolios get a single account manager and consolidated invoicing.' ),
			array( 'What areas of Florida do you serve?', 'We service commercial properties across Tampa Bay, Orlando, Jacksonville, Sarasota, Naples, South Florida, the Space Coast, and Lakeland — statewide for commercial portfolios.' ),
			array( 'Are your technicians certified?', 'All technicians hold Certified Pool/Spa Operator (CPO) certification from the Pool & Hot Tub Alliance and complete OSHA chemical handling training.' ),
			array( 'What is your response time for repairs?', 'Same business day for diagnosis. Most repairs are completed within 48 hours. 24/7 emergency dispatch is available for contract customers.' ),
			array( 'How does your billing work?', 'Standard billing is net-30 monthly invoicing in advance. Multi-property portfolios receive consolidated invoices with per-property line items for accounting allocation.' ),
		);
		$faq_entities = array();
		foreach ( $faqs as $f ) {
			$faq_entities[] = array(
				'@type' => 'Question',
				'name'  => $f[0],
				'acceptedAnswer' => array( '@type' => 'Answer', 'text' => $f[1] ),
			);
		}
		echo '<script type="application/ld+json">' . wp_json_encode( array(
			'@context'   => 'https://schema.org',
			'@type'      => 'FAQPage',
			'mainEntity' => $faq_entities,
		), JSON_UNESCAPED_SLASHES ) . '</script>' . "\n";
	}

	// 7) ContactPage
	if ( $key === 'contact' ) {
		echo '<script type="application/ld+json">' . wp_json_encode( array(
			'@context' => 'https://schema.org',
			'@type'    => 'ContactPage',
			'url'      => get_permalink(),
			'name'     => 'Contact ' . pasc_company_name(),
		), JSON_UNESCAPED_SLASHES ) . '</script>' . "\n";
	}

	// 8) AboutPage
	if ( $key === 'about' ) {
		echo '<script type="application/ld+json">' . wp_json_encode( array(
			'@context'   => 'https://schema.org',
			'@type'      => 'AboutPage',
			'url'        => get_permalink(),
			'name'       => 'About ' . pasc_company_name(),
			'mainEntity' => array(
				'@type'        => 'Organization',
				'name'         => pasc_company_name(),
				'foundingDate' => '2009',
				'description'  => 'Florida commercial pool service company since 2009.',
			),
		), JSON_UNESCAPED_SLASHES ) . '</script>' . "\n";
	}

	// 9) BreadcrumbList — every non-home page
	if ( ! is_front_page() && is_singular( 'page' ) ) {
		$crumbs = pasc_build_breadcrumb_trail();
		if ( count( $crumbs ) > 1 ) {
			$bc_items = array();
			foreach ( $crumbs as $i => $c ) {
				$bc_items[] = array(
					'@type'    => 'ListItem',
					'position' => $i + 1,
					'name'     => $c['name'],
					'item'     => $c['url'],
				);
			}
			echo '<script type="application/ld+json">' . wp_json_encode( array(
				'@context'        => 'https://schema.org',
				'@type'           => 'BreadcrumbList',
				'itemListElement' => $bc_items,
			), JSON_UNESCAPED_SLASHES ) . '</script>' . "\n";
		}
	}
}
add_action( 'wp_head', 'pasc_render_schema', 6 );

function pasc_build_breadcrumb_trail() {
	$trail = array(
		array( 'name' => 'Home', 'url' => home_url( '/' ) ),
	);
	if ( ! is_singular( 'page' ) ) return $trail;
	$post_id = get_the_ID();
	$ancestors = array_reverse( get_post_ancestors( $post_id ) );
	foreach ( $ancestors as $aid ) {
		$trail[] = array(
			'name' => get_the_title( $aid ),
			'url'  => get_permalink( $aid ),
		);
	}
	$trail[] = array(
		'name' => get_the_title( $post_id ),
		'url'  => get_permalink( $post_id ),
	);
	return $trail;
}

/* ============================================================
 * HELPER: render breadcrumbs
 * ============================================================ */
function pasc_breadcrumbs( $items = array() ) {
	if ( empty( $items ) ) return;
	echo '<nav class="breadcrumb" aria-label="Breadcrumb"><div class="wrap"><ol>';
	echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>';
	foreach ( $items as $item ) {
		if ( ! empty( $item['url'] ) ) {
			echo '<li><a href="' . esc_url( $item['url'] ) . '">' . esc_html( $item['label'] ) . '</a></li>';
		} else {
			echo '<li>' . esc_html( $item['label'] ) . '</li>';
		}
	}
	echo '</ol></div></nav>';
}

/* ============================================================
 * HELPER: phone constants
 * ============================================================ */
function pasc_phone_display() { return '(833) 968-4888'; }
function pasc_phone_tel()     { return '18339684888'; }
function pasc_company_name()  { return 'Pool All-Stars Commercial'; }

/* ============================================================
 * AUTO-CREATE PAGES ON THEME ACTIVATION
 * ============================================================ */
function pasc_create_pages_on_activation() {
	$pages = array(
		// Standard pages
		array( 'title' => 'About',           'slug' => 'about',           'parent' => 0 ),
		array( 'title' => 'Contact',         'slug' => 'contact',         'parent' => 0 ),
		array( 'title' => 'Services',        'slug' => 'services',        'parent' => 0 ),
		array( 'title' => 'Industries',      'slug' => 'industries',      'parent' => 0 ),
		array( 'title' => 'Service area',    'slug' => 'service-area',    'parent' => 0 ),
		array( 'title' => 'Privacy policy',  'slug' => 'privacy',         'parent' => 0 ),
		array( 'title' => 'Terms of service','slug' => 'terms',           'parent' => 0 ),
		array( 'title' => 'Accessibility',   'slug' => 'accessibility',   'parent' => 0 ),
	);

	$parent_industries = pasc_create_or_get_page( 'Industries', 'industries', 0 );
	$parent_services   = pasc_create_or_get_page( 'Services', 'services', 0 );
	$parent_areas      = pasc_create_or_get_page( 'Service area', 'service-area', 0 );

	foreach ( $pages as $page ) {
		pasc_create_or_get_page( $page['title'], $page['slug'], $page['parent'] );
	}

	// Industry sub-pages
	$industries = array(
		'Hotels & Resorts'        => 'hotels-resorts',
		'HOAs & Condos'           => 'hoas-condos',
		'Fitness & Aquatic'       => 'fitness-aquatic',
		'Multi-Property'          => 'multi-property',
		'Municipal & Schools'     => 'municipal-schools',
		'Vacation Rentals'        => 'vacation-rentals',
		'Water Parks'             => 'water-parks',
		'Country Clubs'           => 'country-clubs',
	);
	foreach ( $industries as $title => $slug ) {
		pasc_create_or_get_page( $title, $slug, $parent_industries );
	}

	// Service sub-pages
	$services = array(
		'Weekly Maintenance'   => 'weekly-maintenance',
		'Equipment Repair'     => 'equipment-repair',
		'Water Chemistry'      => 'water-chemistry',
		'Filter Cleaning'      => 'filter-cleaning',
		'Green Pool Recovery'  => 'green-pool-recovery',
		'Leak Detection'       => 'leak-detection',
		'Acid Washing'         => 'acid-washing',
		'Pool Renovation'      => 'pool-renovation',
	);
	foreach ( $services as $title => $slug ) {
		pasc_create_or_get_page( $title, $slug, $parent_services );
	}

	// Service area sub-pages
	$areas = array(
		'Tampa Bay'      => 'tampa-bay',
		'Orlando'        => 'orlando',
		'South Florida'  => 'south-florida',
		'Jacksonville'   => 'jacksonville',
		'SW Florida'     => 'sw-florida',
		'Space Coast'    => 'space-coast',
		'Lakeland'       => 'lakeland',
	);
	foreach ( $areas as $title => $slug ) {
		pasc_create_or_get_page( $title, $slug, $parent_areas );
	}

	// Set Reading > Front page to display latest posts (no static front page needed since we use front-page.php)
	// front-page.php in the theme is loaded automatically as the homepage.

	// Flush rewrite rules so pretty permalinks work for new pages
	flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'pasc_create_pages_on_activation' );

function pasc_create_or_get_page( $title, $slug, $parent = 0 ) {
	$existing = get_page_by_path( $slug, OBJECT, 'page' );
	if ( $existing ) return $existing->ID;
	$id = wp_insert_post( array(
		'post_title'   => $title,
		'post_name'    => $slug,
		'post_status'  => 'publish',
		'post_type'    => 'page',
		'post_parent'  => intval( $parent ),
		'post_content' => '',
	) );
	return $id;
}

/* ============================================================
 * Disable emojis (perf + clean head)
 * ============================================================ */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

/* ============================================================
 * CONTACT FORM — wp_mail() AJAX handler
 *
 * Uses WordPress's built-in wp_mail() to email proposal requests
 * to the recipient configured in Settings → General → Admin Email
 * (or override with PASC_RECIPIENT_EMAIL constant in wp-config.php).
 *
 * To use a real SMTP service (SendGrid, Postmark, Mailgun) for
 * better deliverability than the WP host's PHP mail(), install:
 *   - WP Mail SMTP plugin, OR
 *   - FluentSMTP plugin
 * They both intercept wp_mail() and route through your SMTP service.
 * ============================================================ */
function pasc_get_recipient_email() {
	if ( defined( 'PASC_RECIPIENT_EMAIL' ) && PASC_RECIPIENT_EMAIL ) {
		return PASC_RECIPIENT_EMAIL;
	}
	return get_option( 'admin_email' );
}

function pasc_handle_proposal_form() {
	// Verify nonce
	if ( ! isset( $_POST['pasc_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['pasc_nonce'] ) ), 'pasc_proposal_form' ) ) {
		wp_send_json_error( array( 'message' => 'Security check failed. Please refresh and try again.' ), 403 );
	}

	// Honeypot anti-spam
	if ( ! empty( $_POST['website'] ) ) {
		wp_send_json_success( array( 'message' => 'Thanks!' ) ); // pretend success to spam bots
	}

	// Sanitize all inputs
	$name         = isset( $_POST['name'] ) ? sanitize_text_field( wp_unslash( $_POST['name'] ) ) : '';
	$company      = isset( $_POST['company'] ) ? sanitize_text_field( wp_unslash( $_POST['company'] ) ) : '';
	$email        = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
	$phone        = isset( $_POST['phone'] ) ? sanitize_text_field( wp_unslash( $_POST['phone'] ) ) : '';
	$propertytype = isset( $_POST['propertytype'] ) ? sanitize_text_field( wp_unslash( $_POST['propertytype'] ) ) : '';
	$numpools     = isset( $_POST['numpools'] ) ? sanitize_text_field( wp_unslash( $_POST['numpools'] ) ) : '';
	$zip          = isset( $_POST['zip'] ) ? preg_replace( '/[^0-9]/', '', wp_unslash( $_POST['zip'] ) ) : '';
	$message      = isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';

	// Validate required fields
	if ( empty( $name ) || empty( $company ) || empty( $email ) || empty( $phone ) || empty( $zip ) ) {
		wp_send_json_error( array( 'message' => 'Please fill out all required fields.' ), 400 );
	}
	if ( ! is_email( $email ) ) {
		wp_send_json_error( array( 'message' => 'Please enter a valid email address.' ), 400 );
	}
	if ( strlen( $zip ) !== 5 ) {
		wp_send_json_error( array( 'message' => 'Please enter a valid 5-digit ZIP code.' ), 400 );
	}

	// Build email
	$to      = pasc_get_recipient_email();
	$subject = sprintf( '[Proposal Request] %s — %s', $company, $propertytype );
	$body    = "New commercial pool service proposal request from " . pasc_company_name() . "\n\n";
	$body   .= "----------------------------------------\n";
	$body   .= "Name:           {$name}\n";
	$body   .= "Company:        {$company}\n";
	$body   .= "Email:          {$email}\n";
	$body   .= "Phone:          {$phone}\n";
	$body   .= "Property type:  {$propertytype}\n";
	$body   .= "Number of pools:{$numpools}\n";
	$body   .= "ZIP code:       {$zip}\n";
	$body   .= "----------------------------------------\n\n";
	if ( ! empty( $message ) ) {
		$body .= "Message:\n{$message}\n\n";
	}
	$body   .= "----------------------------------------\n";
	$body   .= "Submitted: " . current_time( 'mysql' ) . "\n";
	$body   .= "From IP:   " . ( isset( $_SERVER['REMOTE_ADDR'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REMOTE_ADDR'] ) ) : 'unknown' ) . "\n";

	$headers = array(
		'Content-Type: text/plain; charset=UTF-8',
		'Reply-To: ' . sprintf( '%s <%s>', $name, $email ),
	);

	$sent = wp_mail( $to, $subject, $body, $headers );

	if ( $sent ) {
		wp_send_json_success( array( 'message' => 'Thanks — your proposal request is in. We\'ll respond within one business day.' ) );
	} else {
		wp_send_json_error( array( 'message' => 'Sorry, we could not send your message. Please call ' . pasc_phone_display() . '.' ), 500 );
	}
}
add_action( 'wp_ajax_pasc_proposal',        'pasc_handle_proposal_form' );
add_action( 'wp_ajax_nopriv_pasc_proposal', 'pasc_handle_proposal_form' );

// Pass admin-ajax URL + nonce to the contact page JS
function pasc_localize_form_data() {
	if ( is_page( 'contact' ) ) {
		wp_register_script( 'pasc-form', '', array(), PASC_VERSION, true );
		wp_enqueue_script( 'pasc-form' );
		wp_localize_script( 'pasc-form', 'pascForm', array(
			'ajaxUrl' => admin_url( 'admin-ajax.php' ),
			'nonce'   => wp_create_nonce( 'pasc_proposal_form' ),
			'phone'   => pasc_phone_display(),
		) );
	}
}
add_action( 'wp_enqueue_scripts', 'pasc_localize_form_data', 20 );
