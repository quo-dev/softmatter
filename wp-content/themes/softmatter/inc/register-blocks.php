<?php
add_action('acf/init', 'theme_acf_init');
function theme_acf_init()
{

    // check function exists
    if (function_exists('acf_register_block')) {
        
        acf_register_block(array(
            'name' => 'text',
            'title' => __('Text'),
            'description' => __('Block - Text'),
            'render_callback' => 'flexible_content_blocks_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'mode' => 'edit',
            'supports' => array('mode' => false, 'align' => false),
            'keywords' => array('text'),
        ));

        acf_register_block(array(
            'name' => 'image-text-slider',
            'title' => __('Image & Text Slider'),
            'description' => __('Block - Image & Text Slider'),
            'render_callback' => 'flexible_content_blocks_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'mode' => 'edit',
            'supports' => array('mode' => false, 'align' => false),
            'keywords' => array('image', 'slider'),
        ));

        acf_register_block(array(
            'name' => 'members',
            'title' => __('Members'),
            'description' => __('Block - Members'),
            'render_callback' => 'flexible_content_blocks_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'mode' => 'edit',
            'supports' => array('mode' => false, 'align' => false),
            'keywords' => array('members'),
        ));

        acf_register_block(array(
            'name' => 'cards-content-on-hover',
            'title' => __('Cards - Content on hover'),
            'description' => __('Block - Cards - Content on hover'),
            'render_callback' => 'flexible_content_blocks_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'mode' => 'edit',
            'supports' => array('mode' => false, 'align' => false),
            'keywords' => array('members'),
        ));

        acf_register_block(array(
            'name' => 'cards-slider',
            'title' => __('Cards Slider'),
            'description' => __('Block - Cards Slider'),
            'render_callback' => 'flexible_content_blocks_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'mode' => 'edit',
            'supports' => array('mode' => false, 'align' => false),
            'keywords' => array('card', 'slider'),
        ));

        acf_register_block(array(
            'name' => 'hero',
            'title' => __('Hero'),
            'description' => __('Block - Hero'),
            'render_callback' => 'flexible_content_blocks_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'mode' => 'edit',
            'supports' => array('mode' => false, 'align' => false),
            'keywords' => array('hero'),
        ));

        acf_register_block(array(
            'name' => 'title',
            'title' => __('Title'),
            'description' => __('Block - Title'),
            'render_callback' => 'flexible_content_blocks_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'mode' => 'edit',
            'supports' => array('mode' => false, 'align' => false),
            'keywords' => array('title'),
        ));

        acf_register_block(array(
            'name' => 'cards',
            'title' => __('Cards'),
            'description' => __('Block - Cards'),
            'render_callback' => 'flexible_content_blocks_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'mode' => 'edit',
            'supports' => array('mode' => false, 'align' => false),
            'keywords' => array('card'),
        ));

        acf_register_block(array(
            'name' => 'text-media',
            'title' => __('Text media'),
            'description' => __('Block - Text & media'),
            'render_callback' => 'flexible_content_blocks_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'mode' => 'edit',
            'supports' => array('mode' => false, 'align' => false),
            'keywords' => array('text', 'media'),
        ));

        acf_register_block(array(
            'name' => 'text-slider',
            'title' => __('Text Slider'),
            'description' => __('Block - Text Slider'),
            'render_callback' => 'flexible_content_blocks_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'mode' => 'edit',
            'supports' => array('mode' => false, 'align' => false),
            'keywords' => array('text', 'slider'),
        ));

        acf_register_block(array(
            'name' => 'latest-news',
            'title' => __('Latest News'),
            'description' => __('Block - Latest News'),
            'render_callback' => 'flexible_content_blocks_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'mode' => 'edit',
            'supports' => array('mode' => false, 'align' => false),
            'keywords' => array('latest', 'news'),
        ));

        acf_register_block(array(
            'name' => 'boxes',
            'title' => __('Boxes'),
            'description' => __('Block - Boxes'),
            'render_callback' => 'flexible_content_blocks_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'mode' => 'edit',
            'supports' => array('mode' => false, 'align' => false),
            'keywords' => array('boxes'),
        ));

        acf_register_block(array(
            'name' => 'dots',
            'title' => __('Dots'),
            'description' => __('Block - Dots'),
            'render_callback' => 'flexible_content_blocks_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'mode' => 'edit',
            'supports' => array('mode' => false, 'align' => false),
            'keywords' => array('dots'),
        ));

        acf_register_block(array(
            'name' => 'partner',
            'title' => __('Partner'),
            'description' => __('Block - Partner'),
            'render_callback' => 'flexible_content_blocks_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'mode' => 'edit',
            'supports' => array('mode' => false, 'align' => false),
            'keywords' => array('partner'),
        ));

        acf_register_block(array(
            'name' => 'cta',
            'title' => __('CTA'),
            'description' => __('Block - CTA'),
            'render_callback' => 'flexible_content_blocks_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'mode' => 'edit',
            'supports' => array('mode' => false, 'align' => false),
            'keywords' => array('cta'),
        ));

        acf_register_block(array(
            'name' => 'technology-platforms',
            'title' => __('Technology Platforms'),
            'description' => __('Block - Technology Platforms'),
            'render_callback' => 'flexible_content_blocks_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'mode' => 'edit',
            'supports' => array('mode' => false, 'align' => false),
            'keywords' => array('technology-platforms'),
        ));

        acf_register_block(array(
            'name' => 'text-media-slider',
            'title' => __('Text Media Slider'),
            'description' => __('Block - Text Media Slider'),
            'render_callback' => 'flexible_content_blocks_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'mode' => 'edit',
            'supports' => array('mode' => false, 'align' => false),
            'keywords' => array('text-media-slider'),
        ));

        acf_register_block(array(
            'name' => 'video',
            'title' => __('Video'),
            'description' => __('Block - Video'),
            'render_callback' => 'flexible_content_blocks_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'mode' => 'edit',
            'supports' => array('mode' => false, 'align' => false),
            'keywords' => array('video'),
        ));

        acf_register_block(array(
            'name' => 'accordion-slider',
            'title' => __('Accordion Slider'),
            'description' => __('Block - Accordion Slider'),
            'render_callback' => 'flexible_content_blocks_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'mode' => 'edit',
            'supports' => array('mode' => false, 'align' => false),
            'keywords' => array('accordion-slider'),
        ));
        acf_register_block(array(
            'name' => 'accordion-slider-2',
            'title' => __('Accordion Slider 2'),
            'description' => __('Block - Accordion Slider 2'),
            'render_callback' => 'flexible_content_blocks_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'mode' => 'edit',
            'supports' => array('mode' => false, 'align' => false),
            'keywords' => array('accordion-slider-2'),
        ));

        acf_register_block(array(
            'name' => 'list-text',
            'title' => __('List Text'),
            'description' => __('Block - List Text'),
            'render_callback' => 'flexible_content_blocks_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'mode' => 'edit',
            'supports' => array('mode' => false, 'align' => false),
            'keywords' => array('list-text'),
        ));

        acf_register_block(array(
            'name' => 'list-products',
            'title' => __('List Products'),
            'description' => __('Block - List Products'),
            'render_callback' => 'flexible_content_blocks_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'mode' => 'edit',
            'supports' => array('mode' => false, 'align' => false),
            'keywords' => array('list-products'),
        ));


        acf_register_block(array(
            'name' => 'tab-content',
            'title' => __('Tab Content'),
            'description' => __('Block - Tab Content'),
            'render_callback' => 'flexible_content_blocks_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'mode' => 'edit',
            'supports' => array('mode' => false, 'align' => false),
            'keywords' => array('tab-content'),
        ));

        acf_register_block(array(
            'name' => 'news-related',
            'title' => __('News Related'),
            'description' => __('Block - News Related'),
            'render_callback' => 'flexible_content_blocks_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'mode' => 'edit',
            'supports' => array('mode' => false, 'align' => false),
            'keywords' => array('news-related'),
        ));

        acf_register_block(array(
            'name' => 'tab-text-and-image-slider',
            'title' => __('Tab Text & Image slider'),
            'description' => __('Block - Tab Text & Image slider'),
            'render_callback' => 'flexible_content_blocks_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'mode' => 'edit',
            'supports' => array('mode' => false, 'align' => false),
            'keywords' => array('tab-text-and-image-slider'),
        ));

        acf_register_block(array(
            'name' => 'text-background-image',
            'title' => __('Text Background Image'),
            'description' => __('Block - Text Background Image'),
            'render_callback' => 'flexible_content_blocks_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'mode' => 'edit',
            'supports' => array('mode' => false, 'align' => false),
            'keywords' => array('text-background-image'),
        ));

        acf_register_block(array(
            'name' => 'vertical-accordion-slider',
            'title' => __('Vertical Accordion Slider'),
            'description' => __('Block - Vertical accordion slider'),
            'render_callback' => 'flexible_content_blocks_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'mode' => 'edit',
            'supports' => array('mode' => false, 'align' => false),
            'keywords' => array('vertical-accordion-slider'),
        ));

        acf_register_block(array(
            'name' => 'terms-of-use',
            'title' => __('Terms of use'),
            'description' => __('Block - Terms of use'),
            'render_callback' => 'flexible_content_blocks_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'mode' => 'edit',
            'supports' => array('mode' => false, 'align' => false),
            'keywords' => array('terms-of-use'),
        ));

        acf_register_block(array(
            'name' => 'faq',
            'title' => __('FAQ'),
            'description' => __('Block - FAQ'),
            'render_callback' => 'flexible_content_blocks_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'mode' => 'edit',
            'supports' => array('mode' => false, 'align' => false),
            'keywords' => array('faq'),
        ));

        acf_register_block(array(
            'name' => 'tab-slider-and-image-slider',
            'title' => __('Tab Slider & Image slider'),
            'description' => __('Block - Tab Slider & Image slider'),
            'render_callback' => 'flexible_content_blocks_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'mode' => 'edit',
            'supports' => array('mode' => false, 'align' => false),
            'keywords' => array('tab-slider-and-image-slider'),
        ));

        acf_register_block(array(
            'name' => 'image-content',
            'title' => __('Image Content'),
            'description' => __('Block - Image Content'),
            'render_callback' => 'flexible_content_blocks_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'mode' => 'edit',
            'supports' => array('mode' => false, 'align' => false),
            'keywords' => array('image-content'),
        ));

        acf_register_block(array(
            'name' => 'list-news',
            'title' => __('List News'),
            'description' => __('Block - List News'),
            'render_callback' => 'flexible_content_blocks_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'mode' => 'edit',
            'supports' => array('mode' => false, 'align' => false),
            'keywords' => array('list-news'),
        ));

        acf_register_block(array(
            'name' => 'drop-by-section',
            'title' => __('Drop by section'),
            'description' => __('Block - Drop by section'),
            'render_callback' => 'flexible_content_blocks_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'mode' => 'edit',
            'supports' => array('mode' => false, 'align' => false),
            'keywords' => array('drop-by-section'),
        ));

        acf_register_block(array(
            'name' => 'contact-form',
            'title' => __('Contact Form'),
            'description' => __('Block - Contact Form'),
            'render_callback' => 'flexible_content_blocks_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'mode' => 'edit',
            'supports' => array('mode' => false, 'align' => false),
            'keywords' => array('contact-form'),
        ));
    }
}

function flexible_content_blocks_render_callback($block)
{

    $slug = str_replace('acf/', '', $block['name']);
    if (file_exists(get_theme_file_path("/views/blocks/{$slug}.php"))) {
        include(get_theme_file_path("/views/blocks/{$slug}.php"));
    }
}

add_filter( 'allowed_block_types', 'funct_allowed_block_types', 10, 2 );

function funct_allowed_block_types( $allowed_blocks, $post ) {
    return array(
        'acf/text',
        'acf/image-text-slider',
        'acf/cards-slider',
        'acf/cards-content-on-hover',
        'acf/hero',
        'acf/members',
        'acf/title',
        'acf/cards',
        'acf/text-media',
        'acf/text-slider',
        'acf/latest-news',
        'acf/boxes',
        'acf/dots',
        'acf/partner',
        'acf/cta',
        'acf/technology-platforms',
        'acf/text-media-slider',
        'acf/video',
        'acf/accordion-slider',
        'acf/accordion-slider-2',
        'acf/list-text',
        'acf/list-products',
        'acf/tab-content',
        'acf/news-related',
        'acf/tab-text-and-image-slider',
        'acf/text-background-image',
        'acf/vertical-accordion-slider',
        'acf/terms-of-use',
        'acf/faq',
        'acf/tab-slider-and-image-slider',
        'acf/image-content',
        'acf/list-news',
        'acf/drop-by-section',
        'acf/contact-form',
    );
}
