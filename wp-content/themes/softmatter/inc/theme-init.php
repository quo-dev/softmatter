<?php

if ( ! function_exists( 'theme_one_setup' ) ) {
	function theme_one_setup() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

		add_theme_support( 'post-thumbnails' );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu' ),
				'woocommerce' => esc_html__( 'Woocommerce menu' ),
				'footer_column_1'  => esc_html__( 'Footer menu - column 1' ),
				'footer_column_2'  => esc_html__( 'Footer menu - column 2' ),
				'footer_column_3'  => esc_html__( 'Footer menu - column 3' ),
			)
		);

		add_filter('upload_mimes', 'cc_mime_types');

		function cc_mime_types($mimes)
		{
			$mimes['svg'] = 'image/svg+xml';
			return $mimes;
		}

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => esc_html__( 'Extra small' ),
					'shortName' => esc_html_x( 'XS', 'Font size' ),
					'size'      => 16,
					'slug'      => 'extra-small',
				),
				array(
					'name'      => esc_html__( 'Small' ),
					'shortName' => esc_html_x( 'S', 'Font size' ),
					'size'      => 18,
					'slug'      => 'small',
				),
				array(
					'name'      => esc_html__( 'Normal' ),
					'shortName' => esc_html_x( 'M', 'Font size' ),
					'size'      => 20,
					'slug'      => 'normal',
				),
				array(
					'name'      => esc_html__( 'Large' ),
					'shortName' => esc_html_x( 'L', 'Font size' ),
					'size'      => 24,
					'slug'      => 'large',
				),
				array(
					'name'      => esc_html__( 'Extra large' ),
					'shortName' => esc_html_x( 'XL', 'Font size' ),
					'size'      => 40,
					'slug'      => 'extra-large',
				),
				array(
					'name'      => esc_html__( 'Huge' ),
					'shortName' => esc_html_x( 'XXL', 'Font size' ),
					'size'      => 96,
					'slug'      => 'huge',
				),
				array(
					'name'      => esc_html__( 'Gigantic' ),
					'shortName' => esc_html_x( 'XXXL', 'Font size' ),
					'size'      => 144,
					'slug'      => 'gigantic',
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom line height controls.
		add_theme_support( 'custom-line-height' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for experimental cover block spacing.
		add_theme_support( 'custom-spacing' );

		// Add support for custom units.
		// This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
		add_theme_support( 'custom-units' );
	}
}
add_action( 'after_setup_theme', 'theme_one_setup' );


add_action('admin_head', 'editor_custom_fonts');

function editor_custom_fonts() {
	wp_enqueue_style('style-editor', get_template_directory_uri() . '/assets/css/style-editor.css');
}

function theme_one_scripts() {
	$root_css = get_template_directory_uri().'/assets/css/';
    $root_js = get_template_directory_uri().'/assets/js/';

	wp_enqueue_style('bootstrap', $root_css . 'bootstrap.css');
	wp_enqueue_style('fancy', $root_css . 'fancybox.css');
	wp_enqueue_style('main', $root_css . 'main.css', [], '6.0.3');

	wp_enqueue_script(
		'popper',
		$root_js . 'lib/popper.min.js',
		array('jquery'),
		false,
		true
	);
	wp_enqueue_script(
		'bootstrap',
		$root_js . 'lib/bootstrap.js',
		array('jquery'),
		false,
		true
	);
	wp_enqueue_script(
		'slick-carousel',
		$root_js . 'lib/slick-carousel/slick/slick.js',
		array('jquery'),
		false,
		true
	);
	wp_enqueue_script(
		'woowjs',
		$root_js . 'lib/woowjs.js',
		array('jquery'),
		false,
		true
	);
	wp_enqueue_script(
		'parallax',
		$root_js . 'lib/parallax.min.js',
		array('jquery'),
		false,
		true
	);
	wp_enqueue_script(
		'fancybox',
		$root_js . 'lib/fancybox.js',
		array('jquery'),
		false,
		true
	);
	wp_enqueue_script(
		'validate',
		$root_js . 'lib/jquery.validate.min.js',
		array('jquery'),
		false,
		true
	);
	wp_enqueue_script(
		'vimeo',
		'https://player.vimeo.com/api/player.js',
		array('jquery'),
		false,
		true
	);
  wp_enqueue_script(
    'select',
    $root_js . 'lib/select2.min.js',
    array('jquery'),
    false,
    true
  );
	wp_enqueue_script(
		'main-js',
		$root_js . 'all.js',
		array('jquery'),
		'6.0.3',
		true
	);
	wp_localize_script('main-js', 'ajax', array(
        'url' => admin_url( 'admin-ajax.php' ),
    ));
}
add_action( 'wp_enqueue_scripts', 'theme_one_scripts' );

if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
	show_admin_bar(false);
}

add_action('init', 'do_output_buffer');
function do_output_buffer() {
    ob_start();
}

add_filter( 'manage_edit-shop_order_columns', 'custom_shop_order_column', 100 );
function custom_shop_order_column( $columns ){
    $ordered_columns = array();

    foreach( $columns as $key => $column ){
        $ordered_columns[$key] = $column;
        if( 'order_date' == $key ){
            $ordered_columns['transaction_id'] = __( 'Transaction id', 'woocommerce');
        }
    }

    return $ordered_columns;
}

add_action( 'manage_shop_order_posts_custom_column', 'custom_shop_order_list_column_content', 10, 1 );
function custom_shop_order_list_column_content( $column ) {
    global $post, $the_order;

    if ( 'transaction_id' === $column ) {
        echo $the_order->get_transaction_id();
    }
}

add_filter('use_block_editor_for_post_type', 'prefix_disable_gutenberg', 10, 2);
function prefix_disable_gutenberg($current_status, $post_type)
{
    // Use your post type key instead of 'post'
    if ($post_type === 'post') return false;
    return $current_status;
}

add_filter(
    'wpcf7_form_autocomplete',
    function ( $autocomplete ) {
        return 'off';
    },
    10, 1
);