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
 * SEO META TAGS (canonical, OG, Twitter)
 * ============================================================ */
function pasc_seo_meta_tags() {
	$url   = is_front_page() ? home_url( '/' ) : ( is_singular() ? get_permalink() : home_url( add_query_arg( null, null ) ) );
	$title = wp_get_document_title();
	$desc  = '';

	if ( is_singular() ) {
		$post_excerpt = get_the_excerpt();
		$desc = ! empty( $post_excerpt ) ? wp_strip_all_tags( $post_excerpt ) : get_bloginfo( 'description' );
	} else {
		$desc = get_bloginfo( 'description' );
	}

	// Per-page meta description override via post meta or page-template constant
	if ( is_singular() ) {
		$meta_desc = get_post_meta( get_the_ID(), '_pasc_meta_description', true );
		if ( ! empty( $meta_desc ) ) $desc = $meta_desc;
	}

	$image = PASC_URI . '/assets/images/pool-allstars-hero.png';
	?>
	<meta name="description" content="<?php echo esc_attr( $desc ); ?>">
	<meta name="robots" content="index, follow">
	<link rel="canonical" href="<?php echo esc_url( $url ); ?>">
	<meta property="og:type" content="website">
	<meta property="og:title" content="<?php echo esc_attr( $title ); ?>">
	<meta property="og:description" content="<?php echo esc_attr( $desc ); ?>">
	<meta property="og:url" content="<?php echo esc_url( $url ); ?>">
	<meta property="og:image" content="<?php echo esc_url( $image ); ?>">
	<meta name="twitter:card" content="summary_large_image">
	<?php
}
add_action( 'wp_head', 'pasc_seo_meta_tags', 5 );

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
function pasc_phone_display() { return '(800) 394-POOL'; }
function pasc_phone_tel()     { return '18003947665'; }
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
