<?php
if ( is_singular('product') ) {

    global $post;

    // get categories
    $terms = wp_get_post_terms( $post->ID, 'product_cat' );
    foreach ( $terms as $term ) $cats_array[] = $term->term_id;

    $query_args = array( 'post__not_in' => array( $post->ID ), 'posts_per_page' => 5, 'no_found_rows' => 1, 'post_status' => 'publish', 'post_type' => 'product', 'tax_query' => array(
        array(
            'taxonomy' => 'product_cat',
            'field' => 'id',
            'terms' => $cats_array
        )));

    $products = new WP_Query($query_args);
    if ( $products->have_posts() ) :?>
        <section class="product-related bg-salmon tpl-block">
            <div class="container">
                <h3 class="text-center pb-md-4">Explore Other Kits</h3>
                <div class="product-related-slider">
                    <?php
                    while ( $products->have_posts() ) : $products->the_post();
                        global $post;
                        $product = wc_get_product($post->ID);
                        $price = $product->get_price();
                        ?>
                        <div class="product-related-item">
                            <div class="product-related-image">
                                <a href="<?php the_permalink(); ?>" class="d-block ratio-16x9 ratio">
                                    <img src="<?php echo aq_resize(get_the_post_thumbnail_url($post->ID, 'full'), 400, 328, true, true, true); ?>" alt="Consumer Health & Wellness">
                                </a>
                            </div>
                            <div class="product-related-title f-24">
                                <?php the_title(); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="product-related-link">
                                Read more >
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
    <?php endif;
    wp_reset_query();
}
