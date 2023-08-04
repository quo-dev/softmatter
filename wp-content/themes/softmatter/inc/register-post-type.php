<?php
/*****************************/
//Create the custom post types
/*****************************/
function create_customs_post_types()
{
    register_post_type('email_subscribe',
        array(
            'labels' => array(
                'name' => __('Email subscribe'),
                'singular_name' => __('email_subscribe')
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'email-subscribe'),
            'supports' => array( 'title', 'custom-fields' ),
            // 'taxonomies' => array('news-category'),
            // 'show_in_rest' => true,
            'menu_icon' => 'dashicons-awards',
        )
    );
}

add_action('init', 'create_customs_post_types');

// add_action('init', 'create_news_category');

function create_news_category()
{
    register_taxonomy(
        'news-category', 
        'news',
        array(
            'label'             => __('Blog Category', 'news-category'),
            'hierarchical'      => true,
            'show_ui'           => true,
            'show_admin_column' => true,
            'show_in_nav_menus' => true,
            'show_tagcloud'     => true,
            'public'            => true
        )
    );
}
function wc_custom_category_add_tax_to_api() { 
    $news_category = get_taxonomy( 'news-category' ); $news_category->show_in_rest = true; 
} 
// add_action( 'init', 'wc_custom_category_add_tax_to_api', 30 );

add_filter('acf/fields/taxonomy/query', 'my_acf_fields_taxonomy_query', 10, 3);
function my_acf_fields_taxonomy_query( $args, $field, $post_id ) {

    // Show 40 terms per AJAX call.
    $args['number'] = 40;

    // Order by most used.
    $args['orderby'] = 'count';
    $args['order'] = 'DESC';

    return $args;
}

add_filter('acf/load_field/name=block_title', function ($field) {
    $field['disabled'] = 1;
    return $field;
});
