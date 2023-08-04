<?php

add_filter( 'woocommerce_breadcrumb_defaults', 'jk_woocommerce_breadcrumbs' );
function jk_woocommerce_breadcrumbs() {
    return array(
//        'delimiter'   => ' &gt; ',
//        'wrap_before' => '<li class="breadcrumb-item" itemprop="breadcrumb">',
//        'wrap_after'  => '</li>',
        'before'      => '<li class="breadcrumb-item">',
        'after'       => '</li>',
        'home'        => _x( 'DEVELOPMENT KITS', 'breadcrumb', 'woocommerce' ),
    );
}

// change the breadcrumb on the product page
add_filter( 'woocommerce_get_breadcrumb', 'custom_breadcrumb', 20, 2 );
function custom_breadcrumb( $crumbs, $breadcrumb ) {

    // only on the single product page
    if ( ! is_product() ) {
        return $crumbs;
    }

    // gets the first element of the array "$crumbs"
    $new_crumbs[] = reset( $crumbs );
    // gets the last element of the array "$crumbs"
    $new_crumbs[] = end( $crumbs );
    return $new_crumbs;
}

add_action( 'woocommerce_single_product_summary', 'custom_button_after_product_summary', 30 );

function custom_button_after_product_summary() {
    global $product;
    echo "<a href='".$product->add_to_cart_url()."'>add to cart</a>";
}


add_action('wp_ajax_ql_woocommerce_ajax_add_to_cart', 'ql_woocommerce_ajax_add_to_cart');
add_action('wp_ajax_nopriv_ql_woocommerce_ajax_add_to_cart', 'ql_woocommerce_ajax_add_to_cart');
function ql_woocommerce_ajax_add_to_cart() {
    $product_id = apply_filters('ql_woocommerce_add_to_cart_product_id', absint($_POST['product_id']));
    $quantity = empty($_POST['quantity']) ? 1 : wc_stock_amount($_POST['quantity']);
    $variation_id = absint($_POST['variation_id']);
//    $passed_validation = apply_filters('ql_woocommerce_add_to_cart_validation', true, $product_id, $quantity);
    $product_status = get_post_status($product_id);
    $addToCart = WC()->cart->add_to_cart($product_id, $quantity, $variation_id);

    $product = wc_get_product($product_id);
    $max_quantity = $product->get_stock_quantity();
    if (($max_quantity >= $quantity || !($max_quantity))  && $addToCart && 'publish' === $product_status) {
        global $woocommerce;
        $totalCartItems = $woocommerce->cart->cart_contents_count;
        $items = $woocommerce->cart->get_cart();
        $listItem = '';
        $subTotal = 0;
        $isJax = 1;
        include(get_template_directory() . '/template-parts/cart-popup-content.php');
        include(get_template_directory() . '/template-parts/cart-item-js.php');

    } else {
        $data = array(
            'error' => true,
            'max_quantity' => $max_quantity,
            'message' => 'You cannot add that amount of '.$product->get_title().' to the cart because there is not enough stock ( '.$max_quantity.' remaining ).'
        );
        echo wp_send_json($data);
    }
    wp_die();
}

add_action('wp_ajax_ql_woocommerce_ajax_update_cart', 'ql_woocommerce_ajax_update_cart');
add_action('wp_ajax_nopriv_ql_woocommerce_ajax_update_cart', 'ql_woocommerce_ajax_update_cart');
function ql_woocommerce_ajax_update_cart() {
    $product_id = apply_filters('ql_woocommerce_add_to_cart_product_id', absint($_POST['product_id']));
    $cart_item_key = $_POST['cart_item_key'];
    $quantity = empty($_POST['quantity']) ? 1 : wc_stock_amount($_POST['quantity']);
    $product = wc_get_product($product_id);
    $max_quantity = $product->get_stock_quantity();
    $product_status = get_post_status($product_id);
    if (($max_quantity >= $quantity || !($max_quantity)) && WC()->cart->set_quantity($cart_item_key, $quantity) && 'publish' === $product_status) {
        WC_AJAX :: get_refreshed_fragments();
    } else {
        $data = array(
            'error' => true,
            'max_quantity' => $max_quantity,
            'message' => 'You cannot add that amount of '.$product->get_title().' to the cart because there is not enough stock ( '.$max_quantity.' remaining ).'
        );
        echo wp_send_json($data);
    }
    wp_die();
}


add_action('wp_ajax_ql_woocommerce_ajax_remove_cart_item', 'ql_woocommerce_ajax_remove_cart_item');
add_action('wp_ajax_nopriv_ql_woocommerce_ajax_remove_cart_item', 'ql_woocommerce_ajax_remove_cart_item');
function ql_woocommerce_ajax_remove_cart_item() {
    $product_id = apply_filters('ql_woocommerce_add_to_cart_product_id', absint($_POST['product_id']));
    $cart_item_key = $_POST['cart_item_key'];
    $product_status = get_post_status($product_id);
    if (WC()->cart->remove_cart_item($cart_item_key) && 'publish' === $product_status) {
        WC_AJAX :: get_refreshed_fragments();
    } else {
        $data = array(
            'error' => true,
            'product_url' => apply_filters('ql_woocommerce_cart_redirect_after_error', get_permalink($product_id), $product_id));
        echo wp_send_json($data);
    }
    wp_die();
}


add_action('wp_ajax_ql_woocommerce_ajax_apply_coupon', 'ql_woocommerce_ajax_apply_coupon');
add_action('wp_ajax_nopriv_ql_woocommerce_ajax_apply_coupon', 'ql_woocommerce_ajax_apply_coupon');
function ql_woocommerce_ajax_apply_coupon() {
    $coupon_code = $_POST['coupon_code'];
    $coupon = new \WC_Coupon( $coupon_code );
    $discounts = new \WC_Discounts( WC()->cart );
    $response = $discounts->is_coupon_valid( $coupon );
    if($response === true){
        if( !WC()->session->has_session() )
            WC()->session->set_customer_session_cookie(true);
        $coupon_code = esc_attr( $coupon_code );
        WC()->session->set( 'coupon_code', $coupon_code ); // Set the coupon code in session
        WC()->cart->add_discount( $coupon_code); // Set the coupon code in session

        $discount_type = $coupon->get_discount_type(); // Get coupon discount type
        $coupon_amount = $coupon->get_amount(); // Get coupon amount

        $data = array(
            'discount_type' => $discount_type,
            'coupon_amount' => number_format($coupon_amount),
            'cart_discount' => number_format(WC()->cart->cart_contents_total)
        );
        echo wp_send_json($data);
    }else{
        echo wp_send_json($response);
    }
}

add_action('wp_ajax_ql_woocommerce_ajax_remove_coupon', 'ql_woocommerce_ajax_remove_coupon');
add_action('wp_ajax_nopriv_ql_woocommerce_ajax_remove_coupon', 'ql_woocommerce_ajax_remove_coupon');
function ql_woocommerce_ajax_remove_coupon() {
    $coupon_code = $_POST['coupon_code'];
    $response = WC()->cart->remove_coupon( $coupon_code);
    $coupon = new \WC_Coupon( $coupon_code );
    $coupon_amount = $coupon->get_amount(); // Get coupon amount
    if($response === true){
        $data = array(
            'cart_value' => number_format(WC()->cart->cart_contents_total + $coupon_amount)
        );
        echo wp_send_json($data);
    }else{
        echo wp_send_json($response);
    }
}


function formatPhoneNumber($phoneNumber) {
    $phoneNumber = preg_replace('/[^0-9]/','',$phoneNumber);

    if(strlen($phoneNumber) > 10) {
        $countryCode = substr($phoneNumber, 0, strlen($phoneNumber)-10);
        $areaCode = substr($phoneNumber, -10, 3);
        $nextThree = substr($phoneNumber, -7, 3);
        $lastFour = substr($phoneNumber, -4, 4);

        $phoneNumber = '+'.$countryCode.' ('.$areaCode.') '.$nextThree.'-'.$lastFour;
    }
    else if(strlen($phoneNumber) == 10) {
        $areaCode = substr($phoneNumber, 0, 3);
        $nextThree = substr($phoneNumber, 3, 3);
        $lastFour = substr($phoneNumber, 6, 4);

        $phoneNumber = '('.$areaCode.') '.$nextThree.'-'.$lastFour;
    }
    else if(strlen($phoneNumber) == 7) {
        $nextThree = substr($phoneNumber, 0, 3);
        $lastFour = substr($phoneNumber, 3, 4);

        $phoneNumber = $nextThree.'-'.$lastFour;
    }

    return $phoneNumber;
}


