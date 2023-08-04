<?php
$title = get_field('title');
$background = get_field('background');

$arrProductsIds  = get_field('products');

$args = array(
//    'post_type'             => 'product',
    'post_status'           => 'publish',
    'include' => $arrProductsIds,
//	'posts_per_page' => -1,
    'ignore_sticky_posts'   => 1,
    'tax_query'   => array(
        array(
            'taxonomy'      => 'product_visibility',
            'field'         => 'slug',
            'terms'         => 'exclude-from-catalog', // Possibly 'exclude-from-search' too
            'operator'      => 'NOT IN'
        )
    ),
);

$products = new WP_Query($args);


?>
<section class="product-related bg-white tpl-block">
    <div class="container">
        <h3 class="text-center pb-md-4"><?php echo $title ?></h3>
        <div class="product-related-slider">
            <?php
            while ( $products->have_posts() ) : $products->the_post();
                global $post;
                ?>
                <div class="product-related-item">
                    <div class="product-related-image">
                        <a href="" class="d-block ratio-16x9 ratio">
                            <img src="<?php echo aq_resize(get_the_post_thumbnail_url($post->ID, 'full'), 400, 328, true, true, true); ?>" alt="Consumer Health & Wellness">
                        </a>
                    </div>
                    <div class="product-related-title f-24">
                        <?php the_title(); ?>
                    </div>
                    <div class="product-related-des mb-2 f-18">
                        <?php echo strip_tags( $post->post_excerpt ) ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="product-related-link">
                        Read more >
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php
wp_reset_query();
