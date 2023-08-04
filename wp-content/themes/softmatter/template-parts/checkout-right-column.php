<?php

$img = get_template_directory_uri().'/assets/images';

global $woocommerce;
$totalCartItems = $woocommerce->cart->cart_contents_count;
$items = $woocommerce->cart->get_cart();

$subTotal = 0;
$subTotalContent = $woocommerce->cart->get_total();

$applied_coupons = $woocommerce->cart->applied_coupons;
$discount_amount = $woocommerce->cart->get_total_discount() ?: '$0';
?>
<table class="table-order-summary">
    <?php
    foreach ($items as $item => $values):
        $productId = $values['data']->get_id();
        $_product = wc_get_product($productId);
        $getProductDetail = wc_get_product($values['product_id']);
        $price = get_post_meta($values['product_id'], '_price', true);
        $price = $_product->get_price();
        $totalProductPrice =  $values['quantity'] * $price;
        $subTotal += $totalProductPrice;
        $title = $_product->get_title();
        $option = get_field('component_include',$productId);
        ?>
        <tr>
            <td>
                <div class="product-info">
                    <div class="product-name mb-2"> <?php echo $title ?></div>
                    <div class="product-des f-14"><?php echo $option ?></div>
                </div>
            </td>
            <td class="">x <?php echo $values['quantity'] ?></td>
            <td><?php echo  '$'.number_format($price) ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<div class="mb-5">
    <div class="discount-box  ">
        <div class="d-flex flex-grow-1  justify-content-between">
            <input type="text" class="form-control" value="<?php echo @$applied_coupons[0] ?>" id="checkout_coupon_code" placeholder="Discount code" />
            <button class="btn btn-chalk ms-3" id="checkout_apply_coupon"><?php echo (@$applied_coupons[0]) ? 'Remove' : 'Apply' ?></button>
        </div>
        <span class="text-danger f-14 mt-4 d-none discount-error">Coupon does not exist! </span>
    </div>
</div>

<table  class="table-order-sub-total ">
    <tr class="discount-ele">
        <td>
            Discount
        </td>
        <td class="discount-value">
            <?php echo $discount_amount; ?>
        </td>
    </tr>
    <tr>
        <td>
            Subtotal
        </td>
        <td>
            <?php echo '$'.number_format($subTotal) ?>
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
        <td class="f-24 " id="total-value">
            <?php echo $subTotalContent ?>
        </td>
    </tr>
</table>
