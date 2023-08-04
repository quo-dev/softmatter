<?php

get_header();
$img = get_template_directory_uri().'/assets/images';
$shipping = get_option('shipping_detail_modal');
$term_url = get_field('terms_of_use','option');

if(have_posts()):
    while (have_posts()): the_post();

    global $post;
    $id = $post->ID;
    $product = wc_get_product($post->ID);
    $price = $product->get_price_html();
    $productImage = aq_resize(get_the_post_thumbnail_url($post->ID, 'full'), 505, 660, true, true, true);
    $title = get_the_title();
    $short_desc = get_the_excerpt();
    $kits = get_field('kits');
    $contact_url = get_field('contact_page', 'option');

?>
    <main class="main bg-dark page-content">
        <div class="container breadcrumb-block text-uppercase bg-dush">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb f-18">
                    <?php woocommerce_breadcrumb(  ); ?>
                </ol>
            </nav>
        </div>
        <section class="product-detail  bg-dush">
            <div class="container">
                <div class="row product-detail-top">
                    <div class="col-md-6">
                        <div class="product-detail__images">
                            <a href="<?php echo $productImage ?>"
                               data-fancybox="image">
                                <img src="<?php echo $productImage ?>" alt="<?php echo $title ?>">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-content">
                            <div class="product-id f-14 mb-4 mt-5 mt-md-0">  Product ID: <?php echo $post->ID ?></div>
                            <h1 class="product-name h3 "><?php the_title(); ?></h1>
                            <div class="product-price f-24 mb-4 "><?php echo  $price ?></div>
                            <div class="product-des f-16">
                                <?php echo wpautop($short_desc) ?>
                            </div>
                            <div class="freeshipping f-18">
                                FREE International Shipping <i class="icon-information f-14" data-bs-toggle="modal" data-bs-target="#shippingPolicyModal"></i>
                            </div>
                            <?php
                            if(!$product->is_in_stock() && !$product->backorders_allowed()){
                                ?>
                                <form action="" id="out-of-stock">
                                    <p style="margin: 1rem 0;">Out of stock</p>
                                    <div class="out-of-stock">
                                        <p class="title">Email when stock available</p>
                                        <div class="d-flex flex-grow-1  justify-content-between form-group">
                                            <input type="text" name="user_email" class="form-control" value="" placeholder="Email">
                                            <input type="hidden" name="security" value="<?php echo wp_create_nonce('codewoogeek-product_id-' . $post->ID) ?>">
                                            <input type="hidden" name="product_id" value="<?php echo $post->ID ?>">
                                            <input type="hidden" name="variation_id" value="0">
                                            <input type="hidden" name="action" value="cwginstock_product_subscribe">
                                            <button class="btn btn-chalk ms-3" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                                <?php
                            }else{
                                ?>
                                <div class="text-danger f-16 mt-4 add-to-cart-error mt-4 d-none">Product out of stock! </div>
                                <div class="product-quantity">
                                    <form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
                                        <div class="d-flex ">
                                            <div class="quantity-box d-flex align-items-center">
                                                <div class="quantity-label f-14 text-green">QUANTITY:</div>
                                                <div class="quantity">
                                                    <button class="btn-icon decrease single-decrease">-</button>
                                                    <input type="text" value="1" class="quantity-input">
                                                    <button class="btn-icon increase single-increase">+</button>
                                                </div>
                                            </div>
                                            <?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>
                                            <button  name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="btn btn-add-to-cart single_add_to_cart_button btn-success flex-grow-1"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>
                                            <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
                                        </div>
                                    </form>
                                </div>
                                <?php
                            }
                            ?>
                            <div class="product-more-info row f-14 g-0 text-chalk">
                                <div class="product-shipping d-flex col-md-7 pe-md-5 mb-5 mb-md-0">
                                    <i class="icon-shipping f-24 me-4"></i>
                                    <div class="product-shipping-text ">
                                        <div class="product-more-info-title f-16 f-500 mb-2 mt-2">Shipping Details</div>
                                        <div class="shipping-des ">
                                            Allow 7-14 days for shipping. If you require express shipping, do contact us.<br/>
                                            This product has shipping restrictions to Australia and the UK.</div>
                                        <div class="link-more" ><a href="javascript:void(0)"
                                                                   >Learn More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-terms f-14 col-md-5">
                                    <div class="product-more-info-title f-16 f-500 mb-2 mt-2">Terms and Conditions</div>
                                    <div class="product-terms-text">Terms and Conditions apply</div>
                                    <div class="link-more"><a href="javascript:void(0)">Learn More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if($kits): ?>
                <div class="kits-container">
                    <h4 class="text-chalk">What’s in the Kit?</h4>
                    <div class="kits-slider f-14 text-center text-chalk ">
                        <?php
                            foreach($kits as $kit){
                                ?>
                                <div class="kits-item">
                                    <a href="<?php echo $kit['image']['url'] ?>"
                                       data-fancybox="image" class="kits-item__image ratio ratio-1x1 d-block">
                                        <img src="<?php echo $kit['image']['url'] ?>" alt="<?php echo $kit['detail']?>">
                                    </a>
                                    <div class="kits-item__text"><?php echo $kit['text_detail']?></div>
                                </div>
                            <?php
                            }
                        ?>
                    </div>
                </div>
                <?php endif ?>

                <div class="full-des f-16">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4>Technical Details</h4>
                        <button class="btn-icon me-md-5" data-bs-toggle="collapse" href="#full-des-text" aria-expanded="true">-</button>
                    </div>
                    <div class="collapse show" id="full-des-text">
                        <div class="full-des-text " >
                            <?php echo wpautop($post->post_content); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
            get_template_part( 'template-parts/block/related-item');
        ?>
        <!-- CASE: IMAGE LEFT -->
        <section class="tpl-block text-media-block bg-chalk image"><!-- Option: .bg-chalk; .image | .video  -->
            <div class="container-fluid g-0">
                <div class="row g-0 align-items-stretch">
                    <!-- Option: Image -->
                    <div class="col-lg-6 image-col full-height"><!-- Option: .full-height (when the content is too long) -->
                        <div class="image image-zoomin-effect"><!-- Default 1x1 | .size-4x3 -->
                            <img src="<?php echo $img ?>/bg-orange.jpg" alt="Consumer Health & Wellness">
                            <!--option logo-->
                            <span class="image-logo">
                          <img src="<?php echo $img ?>/big-logo.png" alt="Consumer Health & Wellness">
                        </span>
                        </div>
                    </div>
                    <!-- Option: Video -->
                    <!--        <div class="col-lg-6 video-col">-->
                    <!--            <div class="video-wrap size-4x3">-->
                    <!--                <video width="400" autoplay muted loop>-->
                    <!--                    <source src="--><?php //echo $img ?><!--/BrandTexture.mov" type="video/mp4">-->
                    <!--                </video>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <div class="col-lg-6 content-col">
                        <div class="content-box text-center">
                            <h3 class="title wow fadeInUp" data-wow-duration="1.5s" data-wow-offset="10">Need Customer Support?</h3>
                            <div class="content wow fadeInUp" data-wow-duration="1.5s" data-wow-offset="10">
                                <p>Need customer support? We’re here to help! Please contact us through the form linked below and we’ll get back to you.</p>
                            </div>
                            <a href="<?php echo $contact_url ?>" class="btn btn-primary wow "  data-wow-offset="10">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <div class="modal fade" id="shippingDetailModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="bg-gadient"></div>
            <div class="modal-content">
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn-icon" data-bs-dismiss="modal" aria-label="Close">
                        <i class="icon-clear"></i>
                    </button>
                </div>
                <div class="modal-body ">
                    <div class="scroll-content">
                        <?php the_field('shipping_detail_modal', 'option'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    endwhile;
endif;

get_footer();
