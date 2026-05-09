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
		// Pricing / Resources / Case Studies
		'pricing' => array(
			'title' => 'Commercial Pool Service Pricing Florida | What Drives Cost',
			'desc'  => 'How Florida commercial pool service is priced — pool size, frequency, complexity, multi-property volume. Transparent breakdown of weekly contracts and capital projects.',
		),
		'resources' => array(
			'title' => 'Commercial Pool Service Resources | Property Manager Guides',
			'desc'  => 'Free guides for Florida property managers: how to write a pool service RFP, FL pool chemistry compliance, contract terms, when to fire your pool vendor.',
		),
		'how-to-write-pool-service-rfp' => array(
			'title' => 'How to Write a Commercial Pool Service RFP | Property Manager Guide',
			'desc'  => 'Step-by-step guide to writing a commercial pool service RFP for Florida property managers. Scope, evaluation criteria, COI requirements, contract terms.',
		),
		'fl-pool-chemistry-compliance' => array(
			'title' => 'Florida Pool Chemistry Compliance Guide | FL Admin Code 64E-9',
			'desc'  => 'Florida commercial pool chemistry compliance guide. FAC, pH, alkalinity, CYA targets per FL Admin Code 64E-9. Daily logs, audit prep, common citations.',
		),
		'when-to-fire-your-pool-vendor' => array(
			'title' => 'When to Fire Your Pool Service Vendor | 8 Warning Signs',
			'desc'  => '8 warning signs your commercial pool service vendor is failing — and how to transition to a new vendor without disrupting guests, members, or residents.',
		),
		'pool-service-contract-terms' => array(
			'title' => 'Commercial Pool Service Contract Terms | What to Include',
			'desc'  => 'Essential terms for a commercial pool service contract: SLAs, COI, cancellation, liability caps, repair vs maintenance, response times, billing.',
		),
		'case-studies' => array(
			'title' => 'Commercial Pool Service Case Studies | Florida Client Wins',
			'desc'  => 'Real Florida commercial pool service case studies — multi-property portfolios, hotel turnarounds, HOA capex projects, fitness facility compliance.',
		),
		// City pages — top 7 (one per region)
		'tampa' => array(
			'title' => 'Commercial Pool Service Tampa, FL | Hotels, HOAs, Fitness',
			'desc'  => 'Commercial pool service in Tampa, FL — Hyde Park, Channelside, Westshore, Carrollwood. Hotels, HOAs, condos, fitness, vacation rentals. COI in 24 hours.',
		),
		'orlando-city' => array(
			'title' => 'Commercial Pool Service Orlando, FL | Disney Area & Downtown',
			'desc'  => 'Commercial pool service in Orlando, FL — Downtown, Lake Nona, Doctor Phillips, International Drive. Disney-area hotels, vacation homes, HOAs.',
		),
		'miami' => array(
			'title' => 'Commercial Pool Service Miami, FL | High-Rise Condos & Hotels',
			'desc'  => 'Commercial pool service in Miami, FL — Brickell, Miami Beach, Coral Gables, Aventura, Doral. High-rise condos, beachfront hotels, fitness amenities.',
		),
		'jacksonville-city' => array(
			'title' => 'Commercial Pool Service Jacksonville, FL | Beach Hotels & HOAs',
			'desc'  => 'Commercial pool service in Jacksonville, FL — Jax Beach, Atlantic Beach, San Marco, Riverside. Hotels, golf community HOAs, fitness facilities.',
		),
		'naples' => array(
			'title' => 'Commercial Pool Service Naples, FL | Resorts & Country Clubs',
			'desc'  => 'Commercial pool service in Naples, FL — Old Naples, Park Shore, Pelican Bay. Gulf-coast resorts, private country clubs, beachfront condo associations.',
		),
		'melbourne' => array(
			'title' => 'Commercial Pool Service Melbourne, FL | Space Coast Hotels',
			'desc'  => 'Commercial pool service in Melbourne, FL — Suntree, Viera, Indialantic. Atlantic coast hotels, oceanfront condos, planned communities, fitness clubs.',
		),
		'winter-haven' => array(
			'title' => 'Commercial Pool Service Winter Haven, FL | Polk County',
			'desc'  => 'Commercial pool service in Winter Haven, FL — Chain of Lakes, Cypress Gardens area. Hotels, retirement community HOAs, fitness facilities, vacation homes.',
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
 * HELPER: "Last updated" timestamp
 * Renders a small timestamp on service/industry/region pages.
 * Uses post modified date when available, falls back to current month.
 * ============================================================ */
function pasc_last_updated() {
	$key = pasc_current_seo_key();
	$show_on = array_merge(
		array( 'weekly-maintenance','equipment-repair','water-chemistry','filter-cleaning','green-pool-recovery','leak-detection','acid-washing','pool-renovation' ),
		array( 'hotels-resorts','hoas-condos','fitness-aquatic','multi-property','municipal-schools','vacation-rentals','water-parks','country-clubs' ),
		array( 'tampa-bay','orlando','south-florida','jacksonville','sw-florida','space-coast','lakeland' ),
		array( 'tampa','orlando-city','miami','jacksonville-city','naples','melbourne','winter-haven' ),
		array( 'pricing','how-to-write-pool-service-rfp','fl-pool-chemistry-compliance','when-to-fire-your-pool-vendor','pool-service-contract-terms','case-studies' )
	);
	if ( ! in_array( $key, $show_on, true ) ) return;
	$ts = get_post_modified_time( 'U', false, get_the_ID() );
	$date = $ts ? wp_date( 'F Y', $ts ) : wp_date( 'F Y' );
	echo '<div class="updated-stamp" style="font-size:0.78rem;color:var(--gray);font-weight:500;text-align:center;padding:0.5rem 0 0;letter-spacing:0.02em">Updated ' . esc_html( $date ) . '</div>';
}

/* ============================================================
 * HELPER: testimonial card (with Review schema markup)
 * Use: pasc_testimonial( '★★★★★', 'Quote text', 'Author name', 'Title · Company' )
 * ============================================================ */
function pasc_testimonial( $stars, $quote, $author, $org ) {
	?>
	<div class="tcard" itemscope itemtype="https://schema.org/Review">
		<meta itemprop="itemReviewed" content="<?php echo esc_attr( pasc_company_name() ); ?>">
		<div class="stars" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
			<meta itemprop="ratingValue" content="5"><meta itemprop="bestRating" content="5">
			<?php echo esc_html( $stars ); ?>
		</div>
		<q itemprop="reviewBody"><?php echo esc_html( $quote ); ?></q>
		<div class="who" itemprop="author" itemscope itemtype="https://schema.org/Person">
			<strong itemprop="name"><?php echo esc_html( $author ); ?></strong>
			<span><?php echo esc_html( $org ); ?></span>
		</div>
	</div>
	<?php
}

/* ============================================================
 * HELPER: render testimonials block for a given page key
 * Each industry/region has 3 curated testimonials.
 * ============================================================ */
function pasc_get_testimonials_for( $key ) {
	$bank = array(
		// Industries
		'hotels-resorts' => array(
			array( '★★★★★', "Pool All-Stars manages all eight of our portfolio properties on one contract. Their reporting is the cleanest I've seen in pool service.", 'Maria S.', 'VP Ops · Coastal Hospitality' ),
			array( '★★★★★', "Dawn cleaning means our morning swimmers never see a vacuum cord. That's the difference.", 'James T.', 'GM · Coral Cay Beach Resort' ),
			array( '★★★★★', "They rebuilt our chemistry from scratch when we took over the property. Pool TripAdvisor mentions went from 1-star complaints to perfect.", 'Lisa R.', 'Director of Ops · Sun Coast Hospitality' ),
		),
		'hoas-condos' => array(
			array( '★★★★★', "They sent the COI before the contract was even signed. That's how you know you're dealing with pros, not a guy with a truck.", 'Robert K.', 'Board President · Lakewood HOA' ),
			array( '★★★★★', "Monthly reports are formatted exactly for our board packets. No more chasing the vendor before each meeting.", 'Patricia M.', 'Treasurer · Bay Pointe Condos' ),
			array( '★★★★★', "Same technician for three years. Residents wave to him. That's not nothing in an HOA.", 'Tom W.', 'HOA Manager · Pinellas County' ),
		),
		'fitness-aquatic' => array(
			array( '★★★★★', "We've been on monthly net-30 billing across three properties for two years. Same tech on every route. No surprises.", 'David L.', 'Facilities Director · Sunstate Fitness' ),
			array( '★★★★★', "Health inspector showed up unannounced. Our log book was perfect. Pool All-Stars formats it that way on purpose.", 'Sarah B.', 'Aquatic Director · Bay Area YMCA' ),
			array( '★★★★★', "Member complaints about chlorine smell dropped to zero after they recalibrated our combined chlorine targets.", 'Mike P.', 'GM · Coastal Athletic Club' ),
		),
		'multi-property' => array(
			array( '★★★★★', "Pool All-Stars manages all eight of our portfolio properties on one contract. Their reporting is the cleanest I've seen in pool service.", 'Maria S.', 'VP Ops · Coastal Hospitality' ),
			array( '★★★★★', "Twelve properties, one invoice, one PM. We were paying 4 vendors before. Saved us 22% on hard cost AND 12 hours/month of accounting.", 'Karen J.', 'Director · Sunstate Property Group' ),
			array( '★★★★★', "Volume pricing makes the math obvious — every property we add gets cheaper, service quality stays exact.", 'Aaron F.', 'Asset Manager · FL Condo Holdings' ),
		),
		'municipal-schools' => array(
			array( '★★★★★', "RFP response was the cleanest of seven we received. They knew exactly what FAC and CYA targets the FL inspector wanted to see logged.", 'Janet R.', 'Procurement · City of Bradenton' ),
			array( '★★★★★', "Three school district pools, one contract, one log binder per pool. Inspector left happy. That's a first.", 'Gerald M.', 'Facilities Director · Hillsborough County School District' ),
			array( '★★★★★', "They handled our NPDES discharge permit renewal documentation. We didn't even know we needed it. Saved us a violation.", 'Rebecca H.', 'Aquatic Manager · County Rec Department' ),
		),
		'vacation-rentals' => array(
			array( '★★★★★', "Photo-confirmed visits hit our Hostfully software direct. No more chasing the cleaner to confirm the pool got serviced.", 'Daniel V.', 'Owner · 38-property Disney-area portfolio' ),
			array( '★★★★★', "Turnover-day pool service between 11am checkout and 4pm check-in. Our 5-star reviews include the pool every time.", 'Christine A.', 'Property Manager · Vrbo Naples portfolio' ),
			array( '★★★★★', "Green pool emergency on a Friday before a 4-night booking. Recovery in 4 days, photos to me daily. Booking honored.", 'Marcus T.', 'Airbnb Superhost · Sarasota' ),
		),
		'water-parks' => array(
			array( '★★★★★', "Continuous chemistry monitoring during peak season was the difference. We hit zero health-code citations last summer.", 'Frank P.', 'Operations · Beach Resort Water Park' ),
			array( '★★★★★', "Slide pump rebuild started Tuesday morning, done Wednesday afternoon. Our park reopened on schedule for the holiday weekend.", 'Linda S.', 'GM · Family Aquatic Attraction' ),
			array( '★★★★★', "Off-season equipment service plan saved us a major pump failure mid-season. Catastrophe avoided.", 'Eric B.', 'Maintenance Director · Resort Water Park' ),
		),
		'country-clubs' => array(
			array( '★★★★★', "Pre-dawn service. Members never see a vacuum hose. Lap pool clarity is swim-team meet ready every morning.", 'Charles W.', 'GM · Gulf-Coast Private Club' ),
			array( '★★★★★', "They presented our resurfacing options to the board with a 5-year plan. Reserve study consultant called it the best vendor proposal he'd seen.", 'Margaret L.', 'House Committee Chair · Naples Country Club' ),
			array( '★★★★★', "Hot tub bromine readings logged, family pool kid-safe chemistry tuned, lap pool always clear. Three pools, one tech, zero complaints.", 'Thomas D.', 'Director of Aquatics · Sarasota Country Club' ),
		),
		// Regions
		'tampa-bay' => array(
			array( '★★★★★', "Six properties across Hillsborough and Pinellas. One contract. Same tech in each route. Photo reports the same day. No surprises in 3 years.", 'Maria S.', 'VP Ops · Coastal Hospitality (Tampa Bay)' ),
			array( '★★★★★', "They've serviced our HOA in Westchase since 2014. Eleven years. We don't shop other vendors anymore.", 'Robert K.', 'Board President · Westchase HOA' ),
			array( '★★★★★', "Started with one pool in St. Pete. Now they handle our condo association's three amenity decks. Easy to scale.", 'Nicole F.', 'Property Manager · Pinellas Condo Association' ),
		),
		'orlando' => array(
			array( '★★★★★', "Disney-area resort pools. Brand-standard cleanliness on every visit. Our Marriott QA inspector flagged the pools as exemplary.", 'James T.', 'GM · Disney-area Resort' ),
			array( '★★★★★', "Three vacation home portfolios in Reunion and Champions Gate. Photo reports in our Streamline software within 30 minutes of service.", 'Daniel V.', 'Owner · Disney-area Vacation Rental Group' ),
			array( '★★★★★', "Lake Nona master-planned community pool. Same tech every Tuesday for two years. Residents know him by name.", 'Tom W.', 'HOA Manager · Lake Nona' ),
		),
		'south-florida' => array(
			array( '★★★★★', "Aventura high-rise condo. 40-floor tower with rooftop pool. They service it before sunrise so residents never see a vendor.", 'Patricia M.', 'Property Manager · Aventura High-Rise' ),
			array( '★★★★★', "Boca Raton private club. Lap pool, family pool, hot tub, splash pad. Four pools, one technician, zero complaints in 18 months.", 'Margaret L.', 'House Committee Chair · Boca Country Club' ),
			array( '★★★★★', "Miami Beach hotel rooftop pool. Brand-standard inspection passed first try after their chemistry overhaul. Saved us from a brand audit.", 'Lisa R.', 'Director of Ops · Miami Beach Hotel' ),
		),
		'jacksonville' => array(
			array( '★★★★★', "Amelia Island resort pool. Coastal salt air kills equipment fast. Their preventative service stretched our pump life by 3 years.", 'Frank P.', 'Operations · Amelia Island Resort' ),
			array( '★★★★★', "Ponte Vedra golf community HOA. Six pools across the property. One contract. Reserve study integration. Easy yearly budgeting.", 'Margaret L.', 'House Committee Chair · Ponte Vedra Country Club' ),
			array( '★★★★★', "St. Augustine boutique hotel. Their dawn cleaning means our pool photos look perfect for our website and OTA listings.", 'James T.', 'GM · St. Augustine Inn' ),
		),
		'sw-florida' => array(
			array( '★★★★★', "Naples private club. Pre-dawn pool service before the membership shows up. Lap pool meet-ready every Tuesday morning.", 'Charles W.', 'GM · Naples Private Club' ),
			array( '★★★★★', "Marco Island resort. Saltwater pool, exposed to coastal humidity. Their equipment program kept us from a $40k pump replacement.", 'Linda S.', 'GM · Marco Island Resort' ),
			array( '★★★★★', "Sanibel beachfront condo association. After Hurricane Ian, they had us swim-ready before our first reopened booking.", 'Christine A.', 'Property Manager · Sanibel Condo Association' ),
		),
		'space-coast' => array(
			array( '★★★★★', "Cocoa Beach hotel pool. Hurricane debris recovery in 5 days. Photos every day. Reopened ahead of the holiday weekend.", 'Frank P.', 'Operations · Cocoa Beach Hotel' ),
			array( '★★★★★', "Vero Beach oceanfront condo. They service four buildings under one contract. One PM contact, one invoice. Our board loves them.", 'Patricia M.', 'Treasurer · Vero Beach Condo Association' ),
			array( '★★★★★', "Viera fitness center pool. Health inspector showed up unannounced. Log book and chemistry passed first try. Pool All-Stars makes it easy.", 'Sarah B.', 'Aquatic Director · Viera YMCA' ),
		),
		'lakeland' => array(
			array( '★★★★★', "Davenport vacation home portfolio — 24 properties. Photo reports per turnover. Owners get peace of mind.", 'Daniel V.', 'Owner · Davenport Vacation Rentals' ),
			array( '★★★★★', "Winter Haven retirement community HOA. Two pools, predictable monthly billing, board-friendly reports. Saves our manager hours.", 'Robert K.', 'Board President · Winter Haven HOA' ),
			array( '★★★★★', "Lakeland fitness facility. Member-load chlorine targets dialed in. No more eye irritation complaints since they took over.", 'Mike P.', 'GM · Lakeland Athletic Club' ),
		),
	);
	return isset( $bank[ $key ] ) ? $bank[ $key ] : array();
}

function pasc_render_testimonials_section( $key, $heading_eyebrow = 'What customers say', $heading = 'Trusted by property managers' ) {
	$ts = pasc_get_testimonials_for( $key );
	if ( empty( $ts ) ) return;
	?>
	<section class="proof block">
		<div class="wrap">
			<div class="section-head center">
				<span class="eyebrow"><?php echo esc_html( $heading_eyebrow ); ?></span>
				<h2><?php echo esc_html( $heading ); ?></h2>
			</div>
			<div class="testimonials">
				<?php foreach ( $ts as $t ) { pasc_testimonial( $t[0], $t[1], $t[2], $t[3] ); } ?>
			</div>
		</div>
	</section>
	<?php
}

/* ============================================================
 * HELPER: per-region unique geo content
 * 200+ words of county ordinances, climate factors, common pool
 * types, landmarks. Drives "commercial pool service [region]"
 * ranking signal. One section per regional page.
 * ============================================================ */
function pasc_render_geo_section( $region_key ) {
	$content = pasc_geo_content();
	if ( ! isset( $content[ $region_key ] ) ) return;
	$g = $content[ $region_key ];
	?>
	<section class="two-col">
		<div class="wrap">
			<div class="two-col-grid">
				<div>
					<span class="eyebrow" style="display:inline-block;margin-bottom:0.85rem;color:var(--red)"><?php echo esc_html( $g['eyebrow'] ); ?></span>
					<h2><?php echo wp_kses_post( $g['h2'] ); ?></h2>
					<?php foreach ( $g['paragraphs'] as $p ) { echo '<p>' . wp_kses_post( $p ) . '</p>'; } ?>
				</div>
				<div>
					<h2><?php echo wp_kses_post( $g['side_h2'] ); ?></h2>
					<ul>
						<?php foreach ( $g['side_list'] as $li ) { echo '<li>' . wp_kses_post( $li ) . '</li>'; } ?>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<?php
}

function pasc_geo_content() {
	return array(
		'tampa-bay' => array(
			'eyebrow' => 'Local conditions',
			'h2' => 'Built for Tampa Bay <span class="red">pool reality.</span>',
			'paragraphs' => array(
				'Tampa Bay\'s six-county footprint runs the gamut: high-rise rooftop pools in Channelside and downtown Tampa, beach-resort pools on Clearwater Beach, screened cage pools across Westchase and Carrollwood, and oversized HOA pools in Lakewood Ranch and Brandon. Each has its own chemistry profile, equipment standards, and county-level inspection cadence.',
				'Hillsborough and Pinellas health departments enforce Florida Administrative Code <strong>64E-9</strong> with site-unannounced inspections. Free Available Chlorine must hold above 1.0 ppm; pH 7.2–7.8; Cyanuric Acid under 100 ppm. We log to those targets every visit and maintain board-ready compliance binders for HOAs and condo associations.',
				'Climate matters too. Year-round pool season means equipment runs hard. Summer afternoon thunderstorms shock chemistry weekly. Spring pollen (peak April–May) clogs filters fast. Hurricane prep and post-storm recovery (Helene, Milton, others) is a routine part of Tampa Bay pool operations — we keep dispatch capacity for it.',
			),
			'side_h2' => 'Tampa Bay <span class="red">landmarks &amp; areas.</span>',
			'side_list' => array(
				'<strong>Hyde Park &amp; Channelside</strong> — historic downtown Tampa condo &amp; hotel pools',
				'<strong>Westchase &amp; Carrollwood</strong> — established HOA cluster pools',
				'<strong>Clearwater Beach</strong> — Gulf-front resort pool corridor',
				'<strong>Lakewood Ranch</strong> — master-planned community amenity decks',
				'<strong>Sarasota Bayfront</strong> — luxury condo association pools',
				'<strong>Westshore Business District</strong> — hotel and corporate pool service',
				'<strong>St. Pete &amp; Pier District</strong> — boutique hotel rooftop pools',
				'<strong>Brandon &amp; Riverview</strong> — HOA &amp; vacation rental properties',
			),
		),
		'orlando' => array(
			'eyebrow' => 'Local conditions',
			'h2' => 'Built for Orlando <span class="red">pool reality.</span>',
			'paragraphs' => array(
				'Orlando is the most pool-dense market in Florida — Disney-area vacation home portfolios, master-planned community HOAs (Lake Nona, Winter Park, Doctor Phillips), full-service resort hotels under Marriott, Hilton, IHG, and Choice flags, plus the booming I-Drive and convention-corridor hospitality scene. Pool service expectations differ wildly between Disney brand-flag standards and a 30-property vacation home portfolio.',
				'Orange County environmental health enforces Florida Administrative Code <strong>64E-9</strong> across hotel and public pools, with particular focus on bather-load chlorine response in high-volume Disney-area resorts. We log compliance to inspector spec on every visit and maintain Marriott QA, Hilton Quality Assurance, and IHG Brand Safety &amp; Security documentation upon request.',
				'Year-round pool season, occasional cold snaps requiring heater management Nov–Feb, and summer hurricane season demand rapid-response capacity. Disney-area vacation rental portfolios have unique turnover-day timing windows (11am check-out to 4pm check-in) that we coordinate with cleaning crews via Hostfully, Streamline, and OwnerRez integration.',
			),
			'side_h2' => 'Orlando area <span class="red">landmarks &amp; districts.</span>',
			'side_list' => array(
				'<strong>Disney &amp; Universal corridor</strong> — resort hotel pool service',
				'<strong>Lake Buena Vista</strong> — vacation home &amp; condo-hotel pools',
				'<strong>Lake Nona</strong> — master-planned community amenities',
				'<strong>Winter Park</strong> — established HOA &amp; private club pools',
				'<strong>Doctor Phillips</strong> — luxury residential community pools',
				'<strong>International Drive</strong> — convention &amp; corporate hotel pools',
				'<strong>Reunion &amp; Champions Gate</strong> — vacation rental portfolios',
				'<strong>Lake Mary &amp; Heathrow</strong> — corporate &amp; HOA properties',
			),
		),
		'south-florida' => array(
			'eyebrow' => 'Local conditions',
			'h2' => 'Built for South Florida <span class="red">pool reality.</span>',
			'paragraphs' => array(
				'South Florida pool service is a different sport. High-rise condo rooftop pools in Brickell, Aventura, and Miami Beach require pre-dawn service before residents are awake. Boca Raton and Palm Beach private clubs demand membership-grade clarity and bromine hot tub specialization. Oceanfront hotel pools in Fort Lauderdale and South Beach battle salt-air corrosion that wrecks equipment in half the expected lifespan.',
				'Miami-Dade, Broward, and Palm Beach health departments enforce Florida Administrative Code <strong>64E-9</strong> with aggressive pool-barrier-code (Florida Building Code 454) enforcement. Combined chlorine kept under 0.4 ppm prevents the eye irritation complaints that drive 1-star resort reviews. We log every parameter for the inspector and the GM.',
				'Salt air is the real adversary. Pump motors, salt cells, and heater electronics fail 30–50% faster than inland Florida. We build preventative maintenance schedules around the corrosion timeline — including off-peak teardown service in shoulder seasons. Hurricane recovery is also routine; we maintain dispatch capacity through August–October.',
			),
			'side_h2' => 'South Florida <span class="red">landmarks &amp; areas.</span>',
			'side_list' => array(
				'<strong>Brickell &amp; Downtown Miami</strong> — high-rise rooftop pools',
				'<strong>Miami Beach &amp; South Beach</strong> — beachfront hotel pools',
				'<strong>Coral Gables</strong> — luxury hotel &amp; private club pools',
				'<strong>Aventura</strong> — high-rise condo amenity decks',
				'<strong>Doral</strong> — corporate &amp; resort properties',
				'<strong>Fort Lauderdale Beach</strong> — resort pool corridor',
				'<strong>Boca Raton</strong> — Mediterranean-style HOA &amp; club pools',
				'<strong>West Palm Beach &amp; Palm Beach</strong> — private estate &amp; club pools',
			),
		),
		'jacksonville' => array(
			'eyebrow' => 'Local conditions',
			'h2' => 'Built for Northeast Florida <span class="red">pool reality.</span>',
			'paragraphs' => array(
				'Jacksonville and Northeast Florida have a different pool profile than central or south Florida — cooler winters mean heater management is real, salt-air corrosion is severe along the beaches (Jacksonville Beach, Atlantic Beach, Amelia Island), and the golf-community HOA market in St. Johns County (Ponte Vedra, Nocatee, World Golf Village) has high-volume pool service demand.',
				'Duval, St. Johns, and Nassau county health departments enforce Florida Administrative Code <strong>64E-9</strong> with regular hotel and public pool inspections. We log to inspector spec, maintain board-ready binders for HOA boards, and provide the documentation Marriott, Hilton, and Choice brand-flag QA inspectors require.',
				'Cool snaps from December–February require heater service planning to prevent freeze damage on vacant vacation rental pools. Hurricane and nor\'easter storm response (debris removal, chemistry recovery) is a known quarterly need. We maintain rapid-dispatch capacity for both.',
			),
			'side_h2' => 'Northeast Florida <span class="red">landmarks &amp; districts.</span>',
			'side_list' => array(
				'<strong>Jacksonville Beach &amp; Atlantic Beach</strong> — beachfront resort &amp; condo pools',
				'<strong>Ponte Vedra Beach</strong> — golf community &amp; private club pools',
				'<strong>San Marco &amp; Riverside</strong> — boutique hotel &amp; historic property pools',
				'<strong>Amelia Island</strong> — luxury resort &amp; oceanfront condo pools',
				'<strong>Nocatee</strong> — master-planned community amenity decks',
				'<strong>St. Augustine</strong> — historic district hotel pools',
				'<strong>World Golf Village</strong> — golf community HOAs',
				'<strong>Fernandina Beach</strong> — coastal resort &amp; vacation home pools',
			),
		),
		'sw-florida' => array(
			'eyebrow' => 'Local conditions',
			'h2' => 'Built for SW Florida <span class="red">pool reality.</span>',
			'paragraphs' => array(
				'Naples, Marco Island, Fort Myers, Sanibel, and Captiva have some of the most demanding commercial pool service expectations in Florida. Country clubs along the Gulf Coast operate to membership-grade standards, oceanfront resorts (Naples Grande, Marco Island Marriott) require brand-flag QA compliance, and beachfront condo associations expect daily-feel service quality even on weekly contracts.',
				'Collier and Lee county health departments enforce Florida Administrative Code <strong>64E-9</strong> with particular attention to hot tub bromine compliance and ADA pool-lift accessibility. We log to inspector spec on every visit. Country club lap pools and private club hot tubs get specialized bromine vs chlorine routing per club spec.',
				'Hurricane vulnerability is acute — Hurricane Ian (Sept 2022) left widespread pool equipment damage across Lee and Collier counties. We maintain post-storm rapid-recovery capacity, including pump replacement, chemistry rebalancing, and structural inspection coordination with reserve consultants.',
			),
			'side_h2' => 'SW Florida <span class="red">landmarks &amp; districts.</span>',
			'side_list' => array(
				'<strong>Old Naples &amp; Park Shore</strong> — luxury resort &amp; estate pools',
				'<strong>Pelican Bay &amp; Vanderbilt Beach</strong> — high-rise condo amenity decks',
				'<strong>Marco Island</strong> — beachfront resort &amp; condo properties',
				'<strong>Sanibel &amp; Captiva</strong> — coastal vacation rental &amp; resort pools',
				'<strong>Bonita Springs &amp; Estero</strong> — golf community &amp; HOA pools',
				'<strong>Fort Myers Beach</strong> — beachfront hotel &amp; condo pools',
				'<strong>Cape Coral</strong> — large vacation rental &amp; HOA market',
				'<strong>Bonita Bay &amp; Mediterra</strong> — private country club pool service',
			),
		),
		'space-coast' => array(
			'eyebrow' => 'Local conditions',
			'h2' => 'Built for Space Coast <span class="red">pool reality.</span>',
			'paragraphs' => array(
				'The Space Coast — Brevard and Indian River counties — combines beachfront hotel pools (Cocoa Beach, Cape Canaveral, Indialantic), Atlantic-coast oceanfront condos (Cocoa Beach to Vero Beach), and rapidly growing master-planned communities (Viera, Suntree, Indian River Colony Club). Aerospace workforce growth (KSC, SpaceX, Blue Origin) is driving hotel demand, with pool service expectations rising in step.',
				'Brevard and Indian River county health departments enforce Florida Administrative Code <strong>64E-9</strong> with regular inspections of hotel, fitness, and HOA pools. We log to inspector spec and maintain compliance documentation suited to brand-flag QA reviews and board-meeting reporting cadences.',
				'Atlantic-coast salt-air corrosion is significant — equipment lifespans run 25–40% shorter than inland Florida. We build preventative service schedules around the corrosion timeline. Hurricane and tropical storm response is a routine part of Space Coast pool operations; we keep emergency dispatch capacity August through October.',
			),
			'side_h2' => 'Space Coast <span class="red">landmarks &amp; districts.</span>',
			'side_list' => array(
				'<strong>Cocoa Beach &amp; Cape Canaveral</strong> — beachfront resort &amp; hotel pools',
				'<strong>Indialantic &amp; Indian Harbour Beach</strong> — oceanfront condo amenity decks',
				'<strong>Suntree &amp; Viera</strong> — master-planned community pools',
				'<strong>Vero Beach &amp; Sebastian</strong> — Atlantic coast resort &amp; condo pools',
				'<strong>Melbourne Beach</strong> — beachfront vacation rental properties',
				'<strong>Titusville</strong> — KSC-corridor hotel pool service',
				'<strong>Indian River Colony Club</strong> — golf community HOA pools',
				'<strong>Palm Bay</strong> — fitness center &amp; community amenity pools',
			),
		),
		'lakeland' => array(
			'eyebrow' => 'Local conditions',
			'h2' => 'Built for Polk County <span class="red">pool reality.</span>',
			'paragraphs' => array(
				'Polk County sits in the I-4 corridor between Tampa Bay and Orlando, which makes it one of Florida\'s densest vacation-rental markets. Davenport and Champions Gate alone host thousands of Disney-area vacation home pools. Add Lakeland\'s 55+ retirement community HOA pools, Winter Haven\'s Chain of Lakes resort properties, and the Bartow / Auburndale industrial-corridor hotel pools, and Polk County is a serious commercial pool service market.',
				'Polk County Department of Health enforces Florida Administrative Code <strong>64E-9</strong> across hotel, vacation rental, and public pools. Vacation rental pools in particular get scrutiny because of high turnover and variable bather load. We log every visit per inspector spec and integrate photo confirmations directly into property management software (Hostfully, Streamline, OwnerRez, Guesty).',
				'Climate is similar to Tampa Bay — year-round pool season with summer afternoon thunderstorms shocking chemistry weekly. The I-4 corridor catches both Gulf and Atlantic hurricane impacts; we maintain post-storm dispatch capacity. Davenport-area vacation rental owners benefit from our turnover-day service schedule designed around 11am-checkout / 4pm-checkin booking windows.',
			),
			'side_h2' => 'Polk County <span class="red">landmarks &amp; districts.</span>',
			'side_list' => array(
				'<strong>Lakeland Highlands &amp; Lake Hollingsworth</strong> — historic neighborhood pools',
				'<strong>Winter Haven &amp; Chain of Lakes</strong> — resort &amp; lakefront pools',
				'<strong>Davenport &amp; Champions Gate</strong> — Disney-area vacation home pools',
				'<strong>Auburndale &amp; Bartow</strong> — I-4 corridor hotel pools',
				'<strong>Lake Wales</strong> — historic resort &amp; HOA properties',
				'<strong>Reunion Resort</strong> — Disney-adjacent vacation home portfolios',
				'<strong>Polk County 55+ Communities</strong> — retirement HOA amenity pools',
				'<strong>Bartow industrial corridor</strong> — corporate hotel pool service',
			),
		),
	);
}
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
	$area_ids = array();
	foreach ( $areas as $title => $slug ) {
		$area_ids[ $slug ] = pasc_create_or_get_page( $title, $slug, $parent_areas );
	}

	// City pages — under their respective region
	$cities = array(
		array( 'Tampa',         'tampa',             'tampa-bay' ),
		array( 'Orlando',       'orlando-city',      'orlando' ),
		array( 'Miami',         'miami',             'south-florida' ),
		array( 'Jacksonville',  'jacksonville-city', 'jacksonville' ),
		array( 'Naples',        'naples',            'sw-florida' ),
		array( 'Melbourne',     'melbourne',         'space-coast' ),
		array( 'Winter Haven',  'winter-haven',      'lakeland' ),
	);
	foreach ( $cities as $city ) {
		$parent_id = isset( $area_ids[ $city[2] ] ) ? $area_ids[ $city[2] ] : 0;
		pasc_create_or_get_page( $city[0], $city[1], $parent_id );
	}

	// Pricing, Resources, Case Studies
	pasc_create_or_get_page( 'Pricing', 'pricing', 0 );
	pasc_create_or_get_page( 'Case Studies', 'case-studies', 0 );
	$parent_resources = pasc_create_or_get_page( 'Resources', 'resources', 0 );
	$resources = array(
		'How to Write a Commercial Pool Service RFP'        => 'how-to-write-pool-service-rfp',
		'Florida Pool Chemistry Compliance Guide'           => 'fl-pool-chemistry-compliance',
		'When to Fire Your Pool Service Vendor: 8 Signs'    => 'when-to-fire-your-pool-vendor',
		'Commercial Pool Service Contract Terms Explained'  => 'pool-service-contract-terms',
	);
	foreach ( $resources as $title => $slug ) {
		pasc_create_or_get_page( $title, $slug, $parent_resources );
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
