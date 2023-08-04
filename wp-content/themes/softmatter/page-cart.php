<?php
/**
 * Template Name: Page cart
 * Description: Page template cart
 * Application
 *
 */

get_header();
$img = get_template_directory_uri().'/assets/images';

$totalCartItems = $woocommerce->cart->cart_contents_count;
$items = $woocommerce->cart->get_cart();
$subTotal = 0;
$contact_url = get_field('contact_page','option');

?>
<main class="main bg-dark page-content shopping-cart">
    <div class="container breadcrumb-block text-uppercase bg-dush">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb f-18">
                <li class="breadcrumb-item active" aria-current="page">Cart</li>
                <li class="breadcrumb-item"><a href="/checkout">Information</a></li>
                <li class="breadcrumb-item"><a href="#">Payment</a></li>
            </ol>
        </nav>
    </div>
    <section class="order-summary text-white">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 cart-col-left">
                    <div class="loading-box d-none" id="loading-box-cart">
                        <div class="loading"></div>
                    </div>
                    <h3 class="commerce-title h4">Your Cart</h3>
                    <p class="empty-cart py-5 <?php echo ($items) ?  'd-none' : ''; ?>">Your cart is empty</p>
                    <div class="all-cart-content <?php echo (!$items) ? 'd-none' : ''; ?>">
                        <div class="cart-content">
                            <div class="cart-table mb-4 d-none d-md-block">
                                <table class="table-order table-cart-page">
                                    <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price </th>
                                        <th>Qty</th>
                                        <th>Remove</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody class="list-items-added">
                                    <?php
                                    foreach ($items as $item => $values):
                                        $productId = $values['data']->get_id();
                                        $_product = wc_get_product($productId);
                                        $getProductDetail = wc_get_product($values['product_id']);
                                        $price = get_post_meta($values['product_id'], '_price', true);
                                        $totalProductPrice =  $values['quantity'] * $_product->get_price();
                                        $subTotal += $totalProductPrice;
                                        $price = $_product->get_price();
                                        $include_components =  get_field('component_include',$productId);
                                        include(get_template_directory() . '/template-parts/cart-item.php');
                                    endforeach;
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-table-mobile d-block d-md-none">
                                <div class="card-table-mobile-inner list-items-added">
                                    <?php
                                    $is_cart = true;
                                    foreach ($items as $item => $values):
                                        $productId = $values['data']->get_id();
                                        $_product = wc_get_product($productId);
                                        $getProductDetail = wc_get_product($values['product_id']);
                                        $price = get_post_meta($values['product_id'], '_price', true);
                                        $price = $_product->get_price();
                                        $product_image = aq_resize(get_the_post_thumbnail_url($productId, 'full'), 100, 131, false, true, true);
                                        $include_components =  get_field('component_include',$productId);
                                        include(get_template_directory() . '/template-parts/cart-item-mobile.php');
                                    endforeach;
                                    ?>
                                    <hr class="mb-5"/>
                                </div>
                            </div>
                            <p class="opacity-8 f-14 mb-5 mb-lg-0">*Customers are outside the USA responsible for additional customers fees, duties and tax.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 cart-col-right">
                    <!--<table  class="table-order-summary">
                        <tr>
                            <td>
                                <div class="product-info">
                                    <div class="product-name mb-2"> Sensing Tool Kit</div>
                                    <div class="product-des f-14">18 components in toolbox</div>
                                </div>

                            </td>
                            <td class="">x 1</td>
                            <td>$499.00</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="product-info">
                                    <div class="product-name mb-2"> Sensing Tool Kit</div>
                                    <div class="product-des f-14">18 components in toolbox</div>
                                </div>

                            </td>
                            <td class="">x 1</td>
                            <td>$499.00</td>
                        </tr>
                    </table>-->
                    <table  class="table-order-sub-total ">
                        <tr>
                            <td>
                                Subtotal
                            </td>
                            <td class="subTotal">
                                $<?php echo number_format($subTotal) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                International Shipping <i class="ms-2 icon-information f-14" data-bs-toggle="modal" data-bs-target="#shippingPolicyModal"></i>
                            </td>
                            <td>
                                Free
                            </td>
                        </tr>
                    </table>
                    <table  class="table-order-total">
                        <tr class="total">
                            <td class="f-500">
                                Total
                            </td>
                            <td class="f-24 summary">
                                $<?php echo number_format($subTotal); ?>
                            </td>
                        </tr>
                    </table>
                    <div class="d-flex justify-content-end f-16">
                        <a href="/checkout/" class="btn btn-success btn-checkout <?php echo (!$items) ?  'disabled' : '' ; ?>">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                        <a href="<?php echo $contact_url ?>" class="btn btn-primary wow pulse"  data-wow-offset="10">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>


