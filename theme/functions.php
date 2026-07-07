<?php
/**
 * Custom Theme – functions.
 *
 * @package custom-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme setup: supports + navigation menu locations.
 */
function pneumafit_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);

	// Menus editable under Appearance → Menus.
	register_nav_menus(
		array(
			'primary'         => __( 'Hauptmenü (Header)', 'custom-theme' ),
			'mobile'          => __( 'Mobiles Menü (Burger)', 'custom-theme' ),
			'footer_services' => __( 'Footer – Leistungen', 'custom-theme' ),
			'footer_legal'    => __( 'Footer – Rechtliches', 'custom-theme' ),
			'footer_about'    => __( 'Footer – Über uns', 'custom-theme' ),
			'footer_social'   => __( 'Footer – Social networks', 'custom-theme' ),
		)
	);
}
add_action( 'after_setup_theme', 'pneumafit_theme_setup' );

/**
 * Enqueue styles and scripts for the front end.
 */
function pneumafit_enqueue_assets() {
	$dir = get_template_directory();
	$uri = get_template_directory_uri();

	// Small helper: filemtime for cache-busting (falls back to theme version).
	$ver = function ( $rel ) use ( $dir ) {
		$path = $dir . $rel;
		return file_exists( $path ) ? filemtime( $path ) : wp_get_theme()->get( 'Version' );
	};

	// ── Styles (order matters, enforced via dependencies) ──
	wp_enqueue_style( 'pneumafit-swiper', $uri . '/css/swiper.css', array(), $ver( '/css/swiper.css' ) );
	wp_enqueue_style( 'pneumafit-aos', $uri . '/css/aos.css', array( 'pneumafit-swiper' ), $ver( '/css/aos.css' ) );
	wp_enqueue_style( 'pneumafit-normalize', $uri . '/css/normalize.css', array( 'pneumafit-aos' ), $ver( '/css/normalize.css' ) );
	wp_enqueue_style( 'pneumafit-style', $uri . '/css/style.css', array( 'pneumafit-normalize' ), $ver( '/css/style.css' ) );
	wp_enqueue_style( 'pneumafit-media', $uri . '/css/media.css', array( 'pneumafit-style' ), $ver( '/css/media.css' ) );

	// Page-specific: Osteopathie.
	if ( is_page( 'osteopathie' ) ) {
		wp_enqueue_style( 'pneumafit-osteopathy', $uri . '/css/osteopathy.css', array( 'pneumafit-media' ), $ver( '/css/osteopathy.css' ) );
		wp_enqueue_style( 'pneumafit-osteopathy-media', $uri . '/css/media-osteopathy.css', array( 'pneumafit-osteopathy' ), $ver( '/css/media-osteopathy.css' ) );
	}

	// Page-specific: T-Shape.
	if ( is_page( 't-shape' ) ) {
		wp_enqueue_style( 'pneumafit-t-shape', $uri . '/css/t-shape.css', array( 'pneumafit-media' ), $ver( '/css/t-shape.css' ) );
		wp_enqueue_style( 'pneumafit-t-shape-media', $uri . '/css/media-t-shape.css', array( 'pneumafit-t-shape' ), $ver( '/css/media-t-shape.css' ) );
	}

	// Page-specific: ReLounge.
	if ( is_page( 'relounge' ) ) {
		wp_enqueue_style( 'pneumafit-relounge', $uri . '/css/relounge.css', array( 'pneumafit-media' ), $ver( '/css/relounge.css' ) );
		wp_enqueue_style( 'pneumafit-relounge-media', $uri . '/css/media-relounge.css', array( 'pneumafit-relounge' ), $ver( '/css/media-relounge.css' ) );
	}

	// Page-specific: Über uns.
	if ( is_page( 'ueber-uns' ) ) {
		wp_enqueue_style( 'pneumafit-about', $uri . '/css/about-us.css', array( 'pneumafit-media' ), $ver( '/css/about-us.css' ) );
		wp_enqueue_style( 'pneumafit-about-media', $uri . '/css/media-about-us.css', array( 'pneumafit-about' ), $ver( '/css/media-about-us.css' ) );
	}

	// Page-specific: Karriere.
	if ( is_page( 'karriere' ) ) {
		wp_enqueue_style( 'pneumafit-jobs', $uri . '/css/jobs.css', array( 'pneumafit-media' ), $ver( '/css/jobs.css' ) );
		wp_enqueue_style( 'pneumafit-jobs-media', $uri . '/css/media-jobs.css', array( 'pneumafit-jobs' ), $ver( '/css/media-jobs.css' ) );
	}

	// Page-specific: Physiotherapie.
	if ( is_page( 'physiotherapie' ) ) {
		wp_enqueue_style( 'pneumafit-physio', $uri . '/css/physiotherapie.css', array( 'pneumafit-media' ), $ver( '/css/physiotherapie.css' ) );
		wp_enqueue_style( 'pneumafit-physio-media', $uri . '/css/media-physiotherapie.css', array( 'pneumafit-physio' ), $ver( '/css/media-physiotherapie.css' ) );
	}

	// Page-specific: Atemtherapie.
	if ( is_page( 'atemtherapie' ) ) {
		wp_enqueue_style( 'pneumafit-atem', $uri . '/css/atemtherapie.css', array( 'pneumafit-media' ), $ver( '/css/atemtherapie.css' ) );
		wp_enqueue_style( 'pneumafit-atem-media', $uri . '/css/media-atemtherapie.css', array( 'pneumafit-atem' ), $ver( '/css/media-atemtherapie.css' ) );
	}

	// Page-specific: Sporttherapie.
	if ( is_page( 'sporttherapie' ) ) {
		wp_enqueue_style( 'pneumafit-sport', $uri . '/css/sporttherapie.css', array( 'pneumafit-media' ), $ver( '/css/sporttherapie.css' ) );
		wp_enqueue_style( 'pneumafit-sport-media', $uri . '/css/media-sporttherapie.css', array( 'pneumafit-sport' ), $ver( '/css/media-sporttherapie.css' ) );
	}

	// Page-specific: CMD-Behandlung.
	if ( is_page( 'cmd-behandlung' ) ) {
		wp_enqueue_style( 'pneumafit-cmd', $uri . '/css/cmd-behandlung.css', array( 'pneumafit-media' ), $ver( '/css/cmd-behandlung.css' ) );
		wp_enqueue_style( 'pneumafit-cmd-media', $uri . '/css/media-cmd-behandlung.css', array( 'pneumafit-cmd' ), $ver( '/css/media-cmd-behandlung.css' ) );
	}

	// ── Scripts ──
	// Runs in <head> so --fixed-vh is set before first paint.
	wp_enqueue_script( 'pneumafit-fixed-vh', $uri . '/js/fixed-vh.js', array(), $ver( '/js/fixed-vh.js' ), false );

	// Libraries + entry point (footer). main.js needs Lenis, Swiper and AOS.
	wp_enqueue_script( 'pneumafit-lenis', $uri . '/js/lenis.min.js', array(), $ver( '/js/lenis.min.js' ), true );
	wp_enqueue_script( 'pneumafit-swiper', $uri . '/js/swiper.min.js', array(), $ver( '/js/swiper.min.js' ), true );
	wp_enqueue_script( 'pneumafit-aos', $uri . '/js/aos.js', array(), $ver( '/js/aos.js' ), true );
	wp_enqueue_script(
		'pneumafit-main',
		$uri . '/js/main.js',
		array( 'pneumafit-lenis', 'pneumafit-swiper', 'pneumafit-aos' ),
		$ver( '/js/main.js' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'pneumafit_enqueue_assets' );

/**
 * Add the design's page-specific body classes (used by the page CSS).
 */
add_filter( 'body_class', 'pneumafit_body_class' );
function pneumafit_body_class( $classes ) {
	if ( is_page( array( 'osteopathie', 'physiotherapie', 'atemtherapie', 'sporttherapie', 'cmd-behandlung' ) ) ) {
		$classes[] = 'osteopathy-page';
	}
	return $classes;
}

/**
 * Nav walker that outputs flat <a class="…"> anchors — no <ul>/<li> wrappers —
 * so wp_nav_menu output drops straight into the existing header/footer markup.
 */
class Pneumafit_Link_Walker extends Walker_Nav_Menu {

	/** @var string CSS class applied to each anchor. */
	protected $link_class;

	/** @var string Trusted HTML appended inside each anchor (e.g. the burger dot). */
	protected $link_after;

	/** @var string Class added to the anchor of the current menu item. */
	protected $active_class;

	public function __construct( $link_class = '', $link_after = '', $active_class = 'is-active' ) {
		$this->link_class   = $link_class;
		$this->link_after   = $link_after;
		$this->active_class = $active_class;
	}

	public function start_lvl( &$output, $depth = 0, $args = null ) {}
	public function end_lvl( &$output, $depth = 0, $args = null ) {}
	public function end_el( &$output, $item, $depth = 0, $args = null ) {}

	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$url   = ! empty( $item->url ) ? $item->url : '#';
		$title = apply_filters( 'the_title', $item->title, $item->ID );
		$class = $this->link_class;

		if ( $this->active_class && in_array( 'current-menu-item', (array) $item->classes, true ) ) {
			$class = trim( $class . ' ' . $this->active_class );
		}

		// $link_after is theme-controlled markup, intentionally not escaped.
		$output .= '<a href="' . esc_url( $url ) . '" class="' . esc_attr( $class ) . '">' . esc_html( $title ) . $this->link_after . '</a>';
	}
}

/**
 * Fallback links shown until a menu is assigned to a location.
 * Keeps the site identical to the original static markup out of the box.
 *
 * @param array $args wp_nav_menu args (theme_location, link_class, …).
 */
function pneumafit_menu_fallback( $args ) {
	$args  = (array) $args;
	$loc   = isset( $args['theme_location'] ) ? $args['theme_location'] : '';
	$class = isset( $args['link_class'] ) ? $args['link_class'] : '';
	$after = isset( $args['link_after'] ) ? $args['link_after'] : '';

	$menus = array(
		'primary' => array(
			array( home_url( '/' ), 'Home' ),
			array( home_url( '/#therapies' ), 'Leistungen' ),
			array( home_url( '/osteopathie/' ), 'Heilpraktiker/Osteopathie' ),
			array( home_url( '/t-shape/' ), 'T-Shape' ),
			array( home_url( '/relounge/' ), 'ReLounge' ),
			array( home_url( '/karriere/' ), 'Karriere' ),
		),
		'mobile' => array(
			array( home_url( '/physiotherapie/' ), 'Physiotherapie' ),
			array( home_url( '/atemtherapie/' ), 'Atemtherapie' ),
			array( home_url( '/sporttherapie/' ), 'Sporttherapie' ),
			array( home_url( '/cmd-behandlung/' ), 'CMD-Behandlung' ),
			array( home_url( '/t-shape/' ), 'T-Shape 2' ),
			array( home_url( '/relounge/' ), 'ReLounge' ),
			array( home_url( '/ueber-uns/' ), 'Über uns und das Team' ),
			array( home_url( '/karriere/' ), 'Karriere' ),
		),
		'footer_services' => array(
			array( home_url( '/physiotherapie/' ), 'Physiotherapie' ),
			array( home_url( '/atemtherapie/' ), 'Atemtherapie' ),
			array( home_url( '/sporttherapie/' ), 'Sporttherapie' ),
			array( home_url( '/cmd-behandlung/' ), 'CMD-Behandlung' ),
			array( home_url( '/t-shape/' ), 'T-Shape 2' ),
			array( home_url( '/relounge/' ), 'ReLounge' ),
		),
		'footer_legal' => array(
			array( home_url( '/datenschutz/' ), 'Datenschutz' ),
		),
		'footer_about' => array(
			array( home_url( '/ueber-uns/' ), 'Über uns und das Team' ),
			array( home_url( '/karriere/' ), 'Karriere' ),
		),
		'footer_social' => array(
			array( '#', 'Instagram' ),
			array( '#', 'Telegram' ),
			array( '#', 'WhatsApp' ),
		),
	);

	if ( empty( $menus[ $loc ] ) ) {
		return;
	}

	foreach ( $menus[ $loc ] as $item ) {
		list( $url, $label ) = $item;
		// $after is theme-controlled markup, intentionally not escaped.
		echo '<a href="' . esc_url( $url ) . '" class="' . esc_attr( $class ) . '">' . esc_html( $label ) . $after . '</a>';
	}
}

/**
 * ACF (PRO): site-wide options page + fields, registered in code so they exist
 * without being clicked together in the admin. Edit values under
 * Dashboard → Theme-Einstellungen.
 */
add_action( 'acf/init', 'pneumafit_acf_setup' );
function pneumafit_acf_setup() {
	if ( function_exists( 'acf_add_options_page' ) ) {
		acf_add_options_page(
			array(
				'page_title' => __( 'Theme-Einstellungen', 'custom-theme' ),
				'menu_title' => __( 'Theme-Einstellungen', 'custom-theme' ),
				'menu_slug'  => 'theme-settings',
				'capability' => 'manage_options',
				'icon_url'   => 'dashicons-admin-customizer',
				'position'   => 59,
				'redirect'   => false,
			)
		);
	}

	if ( function_exists( 'acf_add_local_field_group' ) ) {
		acf_add_local_field_group(
			array(
				'key'      => 'group_pneumafit_site',
				'title'    => __( 'Website-Identität', 'custom-theme' ),
				'fields'   => array(
					array(
						'key'           => 'field_pneumafit_logo',
						'label'         => __( 'Logo', 'custom-theme' ),
						'name'          => 'logo',
						'type'          => 'image',
						'instructions'  => __( 'SVG oder PNG. Wird im Header angezeigt.', 'custom-theme' ),
						'return_format' => 'array',
						'preview_size'  => 'medium',
						'library'       => 'all',
						'mime_types'    => 'svg,png,jpg,jpeg,webp',
					),
					array(
						'key'          => 'field_pneumafit_widget_phone',
						'label'        => __( 'Telefon-Widget (Nummer)', 'custom-theme' ),
						'name'         => 'widget_phone',
						'type'         => 'text',
						'instructions' => __( 'Nummer für den runden Anruf-Button unten rechts. Leer = Standardnummer.', 'custom-theme' ),
						'placeholder'  => '+49 711 5043 4348',
					),
					array(
						'key'           => 'field_pneumafit_privacy_link',
						'label'         => __( 'Datenschutz-Link (Kontaktformular)', 'custom-theme' ),
						'name'          => 'privacy_link',
						'type'          => 'link',
						'instructions'  => __( 'Link zur Datenschutzrichtlinie unter dem Kontaktformular. Seite auswählen oder URL eingeben; Link-Text optional.', 'custom-theme' ),
						'return_format' => 'array',
					),
				),
				'location' => array(
					array(
						array(
							'param'    => 'options_page',
							'operator' => '==',
							'value'    => 'theme-settings',
						),
					),
				),
			)
		);

		acf_add_local_field_group(
			array(
				'key'      => 'group_pneumafit_footer',
				'title'    => __( 'Footer – Kontaktdaten', 'custom-theme' ),
				'fields'   => array(
					array(
						'key'          => 'field_footer_contacts',
						'label'        => __( 'Kontaktblöcke', 'custom-theme' ),
						'name'         => 'footer_contacts',
						'type'         => 'repeater',
						'instructions' => __( 'Blöcke wie E-Mail, Adresse, Telefon, Behandlungszeiten. Reihenfolge per Drag & Drop, Blöcke frei hinzufügen/entfernen.', 'custom-theme' ),
						'layout'       => 'block',
						'button_label' => __( 'Block hinzufügen', 'custom-theme' ),
						'sub_fields'   => array(
							array(
								'key'          => 'field_footer_contact_label',
								'label'        => __( 'Bezeichnung', 'custom-theme' ),
								'name'         => 'label',
								'type'         => 'text',
								'instructions' => __( 'z. B. e-mail, adresse, telefon, Behandlungszeiten', 'custom-theme' ),
							),
							array(
								'key'          => 'field_footer_contact_items',
								'label'        => __( 'Einträge', 'custom-theme' ),
								'name'         => 'items',
								'type'         => 'repeater',
								'layout'       => 'table',
								'button_label' => __( 'Eintrag hinzufügen', 'custom-theme' ),
								'sub_fields'   => array(
									array(
										'key'   => 'field_footer_contact_text',
										'label' => __( 'Text', 'custom-theme' ),
										'name'  => 'text',
										'type'  => 'text',
									),
									array(
										'key'          => 'field_footer_contact_url',
										'label'        => __( 'Link (optional)', 'custom-theme' ),
										'name'         => 'url',
										'type'         => 'text',
										'instructions' => __( 'z. B. mailto:info@… oder tel:+49… — leer lassen für reinen Text.', 'custom-theme' ),
									),
								),
							),
						),
					),
				),
				'location' => array(
					array(
						array(
							'param'    => 'options_page',
							'operator' => '==',
							'value'    => 'theme-settings',
						),
					),
				),
			)
		);
	}
}

/**
 * ACF: pricing table repeater, shown only on the Osteopathie page edit screen.
 */
add_action( 'acf/init', 'pneumafit_acf_pricing' );
function pneumafit_acf_pricing() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	$osteo = get_page_by_path( 'osteopathie' );
	if ( ! $osteo ) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key'      => 'group_pneumafit_pricing',
			'title'    => __( 'Preise (Osteopathie)', 'custom-theme' ),
			'fields'   => array(
				array(
					'key'          => 'field_pneumafit_pricing',
					'label'        => __( 'Preistabelle', 'custom-theme' ),
					'name'         => 'pricing',
					'type'         => 'repeater',
					'instructions' => __( 'Leistungen mit Dauer (Minuten) und Preis (€). Reihenfolge per Drag & Drop.', 'custom-theme' ),
					'layout'       => 'table',
					'button_label' => __( 'Zeile hinzufügen', 'custom-theme' ),
					'sub_fields'   => array(
						array(
							'key'   => 'field_pricing_service',
							'label' => __( 'Leistung', 'custom-theme' ),
							'name'  => 'service',
							'type'  => 'text',
						),
						array(
							'key'          => 'field_pricing_duration',
							'label'        => __( 'Dauer (Min.)', 'custom-theme' ),
							'name'         => 'duration',
							'type'         => 'text',
							'instructions' => __( 'nur die Zahl, z. B. 60', 'custom-theme' ),
						),
						array(
							'key'          => 'field_pricing_price',
							'label'        => __( 'Preis (€)', 'custom-theme' ),
							'name'         => 'price',
							'type'         => 'text',
							'instructions' => __( 'nur die Zahl, z. B. 130', 'custom-theme' ),
						),
					),
				),
			),
			'location' => array(
				array(
					array(
						'param'    => 'page',
						'operator' => '==',
						'value'    => (string) $osteo->ID,
					),
				),
			),
		)
	);
}

/**
 * ACF: T-Shape pricing table repeater, shown only on the T-Shape page.
 * Duration is free text here (e.g. "12 x 30 min"), rendered as-is.
 */
add_action( 'acf/init', 'pneumafit_acf_tshape_pricing' );
function pneumafit_acf_tshape_pricing() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	$page = get_page_by_path( 't-shape' );
	if ( ! $page ) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key'      => 'group_pneumafit_tshape_pricing',
			'title'    => __( 'Preise (T-Shape)', 'custom-theme' ),
			'fields'   => array(
				array(
					'key'          => 'field_pneumafit_tshape_pricing',
					'label'        => __( 'Preistabelle', 'custom-theme' ),
					'name'         => 'tshape_pricing',
					'type'         => 'repeater',
					'instructions' => __( 'Leistungen mit Dauer und Wert. Reihenfolge per Drag & Drop.', 'custom-theme' ),
					'layout'       => 'table',
					'button_label' => __( 'Zeile hinzufügen', 'custom-theme' ),
					'sub_fields'   => array(
						array(
							'key'   => 'field_tshape_pricing_service',
							'label' => __( 'Leistung', 'custom-theme' ),
							'name'  => 'service',
							'type'  => 'text',
						),
						array(
							'key'          => 'field_tshape_pricing_duration',
							'label'        => __( 'Dauer', 'custom-theme' ),
							'name'         => 'duration',
							'type'         => 'text',
							'instructions' => __( 'volle Angabe, z. B. 30 min oder 12 x 30 min', 'custom-theme' ),
						),
						array(
							'key'          => 'field_tshape_pricing_price',
							'label'        => __( 'Wert (€)', 'custom-theme' ),
							'name'         => 'price',
							'type'         => 'text',
							'instructions' => __( 'nur die Zahl, z. B. 1348', 'custom-theme' ),
						),
					),
				),
			),
			'location' => array(
				array(
					array(
						'param'    => 'page',
						'operator' => '==',
						'value'    => (string) $page->ID,
					),
				),
			),
		)
	);
}

/**
 * ACF: T-Shape FAQ repeater (question, answer, tooltip title/text, image),
 * shown only on the T-Shape page. The /01, /02 … numbers are generated in the
 * template, so they are not editable fields.
 */
add_action( 'acf/init', 'pneumafit_acf_tshape_faq' );
function pneumafit_acf_tshape_faq() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	$page = get_page_by_path( 't-shape' );
	if ( ! $page ) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key'      => 'group_pneumafit_tshape_faq',
			'title'    => __( 'FAQ (T-Shape)', 'custom-theme' ),
			'fields'   => array(
				array(
					'key'          => 'field_pneumafit_tshape_faq',
					'label'        => __( 'Fragen & Antworten', 'custom-theme' ),
					'name'         => 'faq',
					'type'         => 'repeater',
					'instructions' => __( 'Nummerierung (/01, /02 …) wird automatisch erzeugt.', 'custom-theme' ),
					'layout'       => 'block',
					'button_label' => __( 'Frage hinzufügen', 'custom-theme' ),
					'sub_fields'   => array(
						array(
							'key'   => 'field_tshape_faq_question',
							'label' => __( 'Frage', 'custom-theme' ),
							'name'  => 'question',
							'type'  => 'text',
						),
						array(
							'key'       => 'field_tshape_faq_answer',
							'label'     => __( 'Antwort (kurz)', 'custom-theme' ),
							'name'      => 'answer',
							'type'      => 'textarea',
							'new_lines' => '',
							'rows'      => 2,
						),
						array(
							'key'           => 'field_tshape_faq_image',
							'label'         => __( 'Bild (Hover-Tooltip)', 'custom-theme' ),
							'name'          => 'image',
							'type'          => 'image',
							'return_format' => 'array',
							'preview_size'  => 'medium',
							'library'       => 'all',
							'mime_types'    => 'jpg,jpeg,png,webp',
						),
						array(
							'key'   => 'field_tshape_faq_tt_title',
							'label' => __( 'Tooltip-Titel', 'custom-theme' ),
							'name'  => 'tooltip_title',
							'type'  => 'text',
						),
						array(
							'key'       => 'field_tshape_faq_tt_text',
							'label'     => __( 'Tooltip-Text', 'custom-theme' ),
							'name'      => 'tooltip_text',
							'type'      => 'textarea',
							'new_lines' => '',
							'rows'      => 4,
						),
					),
				),
			),
			'location' => array(
				array(
					array(
						'param'    => 'page',
						'operator' => '==',
						'value'    => (string) $page->ID,
					),
				),
			),
		)
	);
}

/**
 * ACF: Atemtherapie FAQ accordion repeater (question + answer), shown only on
 * the Atemtherapie page. Numbers (/01 …) are auto-generated in the template.
 */
add_action( 'acf/init', 'pneumafit_acf_atem_faq' );
function pneumafit_acf_atem_faq() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	$page = get_page_by_path( 'atemtherapie' );
	if ( ! $page ) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key'      => 'group_pneumafit_atem_faq',
			'title'    => __( 'FAQ (Atemtherapie)', 'custom-theme' ),
			'fields'   => array(
				array(
					'key'          => 'field_pneumafit_atem_faq',
					'label'        => __( 'Fragen & Antworten', 'custom-theme' ),
					'name'         => 'faq_accordion',
					'type'         => 'repeater',
					'instructions' => __( 'Nummerierung (/01, /02 …) wird automatisch erzeugt.', 'custom-theme' ),
					'layout'       => 'block',
					'button_label' => __( 'Frage hinzufügen', 'custom-theme' ),
					'sub_fields'   => array(
						array(
							'key'       => 'field_atem_faq_question',
							'label'     => __( 'Frage', 'custom-theme' ),
							'name'      => 'question',
							'type'      => 'textarea',
							'new_lines' => '',
							'rows'      => 2,
						),
						array(
							'key'       => 'field_atem_faq_answer',
							'label'     => __( 'Antwort', 'custom-theme' ),
							'name'      => 'answer',
							'type'      => 'textarea',
							'new_lines' => '',
							'rows'      => 4,
						),
					),
				),
			),
			'location' => array(
				array(
					array(
						'param'    => 'page',
						'operator' => '==',
						'value'    => (string) $page->ID,
					),
				),
			),
		)
	);
}

/**
 * ACF: Sporttherapie FAQ accordion repeater (question + answer), page-scoped.
 * Separate group/keys from Atemtherapie so the two pages have independent FAQs.
 */
add_action( 'acf/init', 'pneumafit_acf_sport_faq' );
function pneumafit_acf_sport_faq() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	$page = get_page_by_path( 'sporttherapie' );
	if ( ! $page ) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key'      => 'group_pneumafit_sport_faq',
			'title'    => __( 'FAQ (Sporttherapie)', 'custom-theme' ),
			'fields'   => array(
				array(
					'key'          => 'field_pneumafit_sport_faq',
					'label'        => __( 'Fragen & Antworten', 'custom-theme' ),
					'name'         => 'faq_accordion',
					'type'         => 'repeater',
					'instructions' => __( 'Nummerierung (/01, /02 …) wird automatisch erzeugt.', 'custom-theme' ),
					'layout'       => 'block',
					'button_label' => __( 'Frage hinzufügen', 'custom-theme' ),
					'sub_fields'   => array(
						array(
							'key'       => 'field_sport_faq_question',
							'label'     => __( 'Frage', 'custom-theme' ),
							'name'      => 'question',
							'type'      => 'textarea',
							'new_lines' => '',
							'rows'      => 2,
						),
						array(
							'key'       => 'field_sport_faq_answer',
							'label'     => __( 'Antwort', 'custom-theme' ),
							'name'      => 'answer',
							'type'      => 'textarea',
							'new_lines' => '',
							'rows'      => 4,
						),
					),
				),
			),
			'location' => array(
				array(
					array(
						'param'    => 'page',
						'operator' => '==',
						'value'    => (string) $page->ID,
					),
				),
			),
		)
	);
}

/**
 * ACF: reviews repeater, shown only on the front (Home) page edit screen.
 * Avatar letter is derived from the name in the template.
 */
add_action( 'acf/init', 'pneumafit_acf_reviews' );
function pneumafit_acf_reviews() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key'      => 'group_pneumafit_reviews',
			'title'    => __( 'Bewertungen (Startseite)', 'custom-theme' ),
			'fields'   => array(
				array(
					'key'          => 'field_pneumafit_reviews',
					'label'        => __( 'Bewertungen', 'custom-theme' ),
					'name'         => 'reviews',
					'type'         => 'repeater',
					'instructions' => __( 'Kundenbewertungen im Slider. Der Avatar-Buchstabe wird automatisch aus dem Namen erzeugt.', 'custom-theme' ),
					'layout'       => 'block',
					'button_label' => __( 'Bewertung hinzufügen', 'custom-theme' ),
					'sub_fields'   => array(
						array(
							'key'   => 'field_review_name',
							'label' => __( 'Name', 'custom-theme' ),
							'name'  => 'name',
							'type'  => 'text',
						),
						array(
							'key'          => 'field_review_date',
							'label'        => __( 'Datum', 'custom-theme' ),
							'name'         => 'date',
							'type'         => 'text',
							'instructions' => __( 'z. B. 01/11/2025', 'custom-theme' ),
						),
						array(
							'key'   => 'field_review_title',
							'label' => __( 'Titel / Leistung', 'custom-theme' ),
							'name'  => 'title',
							'type'  => 'text',
						),
						array(
							'key'       => 'field_review_text',
							'label'     => __( 'Text', 'custom-theme' ),
							'name'      => 'text',
							'type'      => 'textarea',
							'new_lines' => '',
							'rows'      => 3,
						),
					),
				),
			),
			'location' => array(
				array(
					array(
						'param'    => 'page_type',
						'operator' => '==',
						'value'    => 'front_page',
					),
				),
			),
		)
	);
}

/**
 * Allow SVG uploads so an SVG logo can be set. Restricted to admins.
 * Note: SVG files can carry scripts — for untrusted authors add a sanitiser
 * such as the "Safe SVG" plugin.
 */
add_filter( 'upload_mimes', 'pneumafit_allow_svg_upload' );
function pneumafit_allow_svg_upload( $mimes ) {
	if ( current_user_can( 'manage_options' ) ) {
		$mimes['svg']  = 'image/svg+xml';
		$mimes['svgz'] = 'image/svg+xml';
	}
	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'pneumafit_fix_svg_filetype', 10, 4 );
function pneumafit_fix_svg_filetype( $data, $file, $filename, $mimes ) {
	if ( empty( $data['type'] ) ) {
		$ext = strtolower( pathinfo( $filename, PATHINFO_EXTENSION ) );
		if ( 'svg' === $ext ) {
			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		} elseif ( 'svgz' === $ext ) {
			$data['ext']  = 'svgz';
			$data['type'] = 'image/svg+xml';
		}
	}
	return $data;
}

/**
 * Shared footer contact data (from the ACF options page) keyed by a normalised
 * label, so other sections (e.g. ReLounge contact cards) can reuse it.
 * Keys: 'email', 'adresse', 'telefon', 'behandlungszeiten' (letters only, lowercased).
 *
 * @param string $key Normalised label.
 * @return array List of items (each: text + optional url).
 */
function pneumafit_footer_contact_items( $key ) {
	static $map = null;

	if ( null === $map ) {
		$map  = array();
		$rows = function_exists( 'get_field' ) ? get_field( 'footer_contacts', 'option' ) : array();
		if ( is_array( $rows ) ) {
			foreach ( $rows as $block ) {
				$label = isset( $block['label'] ) ? (string) $block['label'] : '';
				$k     = strtolower( preg_replace( '/[^a-z]/i', '', $label ) );
				if ( '' !== $k ) {
					$map[ $k ] = ( isset( $block['items'] ) && is_array( $block['items'] ) ) ? $block['items'] : array();
				}
			}
		}
	}

	return isset( $map[ $key ] ) ? $map[ $key ] : array();
}

/**
 * Render footer contact items as one <br>-separated string, wrapping items that
 * have a url in an <a>. Returns escaped, template-ready HTML.
 *
 * @param array $items Items from pneumafit_footer_contact_items().
 * @return string
 */
function pneumafit_render_contact_items( $items ) {
	if ( ! is_array( $items ) ) {
		return '';
	}

	$parts = array();
	foreach ( $items as $it ) {
		$text = isset( $it['text'] ) ? trim( (string) $it['text'] ) : '';
		if ( '' === $text ) {
			continue;
		}
		if ( ! empty( $it['url'] ) ) {
			$parts[] = '<a href="' . esc_url( $it['url'] ) . '">' . esc_html( $text ) . '</a>';
		} else {
			$parts[] = esc_html( $text );
		}
	}

	return implode( '<br>', $parts );
}

/**
 * Gravity Forms — contact form in the contact section.
 * The form is styled by the theme (see .section-contact .gform_* in style.css),
 * so Gravity Forms' own CSS is disabled and the submit button is rendered with
 * the theme's .section-contact__btn markup (text + arrow SVG).
 */
add_filter( 'gform_disable_css', '__return_true' );

// Make sure the form's (AJAX) scripts load on the front page where it's embedded.
add_action( 'wp_enqueue_scripts', 'pneumafit_gf_enqueue', 20 );
function pneumafit_gf_enqueue() {
	if ( ! function_exists( 'gravity_form_enqueue_scripts' ) ) {
		return;
	}

	// Popup form lives in the footer on every page.
	$popup_id = (int) get_option( 'pneumafit_popup_form_id' );
	if ( $popup_id ) {
		gravity_form_enqueue_scripts( $popup_id, true );
	}

	// Contact form appears in the contact section on several pages.
	if ( is_front_page() || is_page( array( 'osteopathie', 't-shape', 'relounge', 'ueber-uns', 'karriere', 'physiotherapie', 'atemtherapie', 'sporttherapie', 'cmd-behandlung' ) ) ) {
		$contact_id = (int) get_option( 'pneumafit_contact_form_id' );
		if ( $contact_id ) {
			gravity_form_enqueue_scripts( $contact_id, true );
		}
	}
}

add_filter( 'gform_submit_button', 'pneumafit_gf_submit_button', 10, 2 );
function pneumafit_gf_submit_button( $button, $form ) {
	$form_id    = isset( $form['id'] ) ? (int) $form['id'] : 0;
	$contact_id = (int) get_option( 'pneumafit_contact_form_id' );
	$popup_id   = (int) get_option( 'pneumafit_popup_form_id' );

	if ( $form_id !== $contact_id && $form_id !== $popup_id ) {
		return $button;
	}

	$label = ( isset( $form['button']['text'] ) && '' !== $form['button']['text'] )
		? $form['button']['text']
		: __( 'Absenden', 'custom-theme' );

	// Arrow icon (same path as the design buttons); %1$s = stroke colour.
	$svg = '<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">'
		. '<path d="M7.5 4.375L10.625 7.49999L7.5 10.6249" stroke="%1$s" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />'
		. '<path d="M0.625 0.625V4.99999C0.625 5.66303 0.888388 6.29891 1.35723 6.76774C1.82607 7.23658 2.46194 7.49997 3.12498 7.49997H10.6249" stroke="%1$s" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />'
		. '</svg>';

	if ( $form_id === $popup_id ) {
		$class = 'popup__btn hero__btn hero__btn--primary gform_button';
		$icon  = sprintf( $svg, 'currentColor' );
	} else {
		$class = 'section-contact__btn gform_button';
		$icon  = sprintf( $svg, '#F1F1F1' );
	}

	return sprintf(
		'<button type="submit" id="gform_submit_button_%1$d" class="%2$s" onclick="gform.submission.handleButtonClick(this);" data-submission-type="submit">%3$s %4$s</button>',
		$form_id,
		esc_attr( $class ),
		esc_html( $label ),
		$icon
	);
}

/**
 * Disable Gravity Forms' hard scroll-to-anchor after AJAX submit for the theme
 * forms (contact + popup). Removing the anchor stops the instant scrollTop jump
 * (which also fights the Lenis smooth scroll and makes no sense inside the fixed
 * popup); the confirmation just replaces the form in place.
 */
add_filter( 'gform_confirmation_anchor', 'pneumafit_gf_no_scroll_anchor', 10, 2 );
function pneumafit_gf_no_scroll_anchor( $anchor, $form ) {
	$form_id = isset( $form['id'] ) ? (int) $form['id'] : 0;
	$ids     = array_filter(
		array(
			(int) get_option( 'pneumafit_contact_form_id' ),
			(int) get_option( 'pneumafit_popup_form_id' ),
		)
	);

	if ( in_array( $form_id, $ids, true ) ) {
		return false;
	}

	return $anchor;
}
