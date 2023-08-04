<?php
global $woocommerce;
$totalCartItems = $woocommerce->cart->cart_contents_count;
$items = $woocommerce->cart->get_cart();
$subTotal = 0;

?>

<div class="cart-mini bg-dush">
    <div class="loading-box d-none" id="loading-box-cart">
        <div class="loading"></div>
    </div>
    <div class="cart-mini-content">
        <div class="text-end">
            <button class="btn-icon cart-btn-close ">
                <span class="icon-clear "></span>
            </button>
        </div>
        <h4>Cart</h4>
        <p class="empty-cart py-5 <?php echo (!$items) ?:  'd-none'; ?>">Your cart is empty</p>
        <div class="all-cart-content <?php echo ($items) ?: 'd-none'; ?>">
            <div class="cart-content">
                <?php include(get_template_directory() . '/template-parts/cart-popup-content.php') ?>
            </div>
            <div class="d-flex justify-content-end f-16">
                <div class="d-flex align-items-center actions-end-bottom justify-content-between">
                    <div class="f-14 text-uppercase opacity-50 pe-4">SECURE SSL CHECKOUT</div>
                    <a href="/checkout" class="btn btn-success">Checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>
