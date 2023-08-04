<div class="cart-table d-none d-md-block">
    <table class="table-order table-cart">
        <thead>
        <tr>
            <th></th>
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
            ?>
            <?php include(get_template_directory() . '/template-parts/cart-item.php') ?>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<div class="card-table-mobile d-block d-md-none">
    <div class="card-table-mobile-inner list-items-added">
        <?php
        foreach ($items as $item => $values):
            $productId = $values['data']->get_id();
            $_product = wc_get_product($productId);
            $getProductDetail = wc_get_product($values['product_id']);
            $price = get_post_meta($values['product_id'], '_price', true);
            $price = $_product->get_price();
            $product_image = aq_resize(get_the_post_thumbnail_url($productId, 'full'), 100, 131, false, true, true);
            $include_components =  get_field('component_include',$productId);
            ?>
            <?php include(get_template_directory() . '/template-parts/cart-item-mobile.php') ?>
        <?php endforeach; ?>
        <hr class="mb-5"/>
    </div>
</div>
<div class="d-flex justify-content-end">
    <table  class="table-order-summary f-18">
        <tr>
            <td class="">Subtotal</td>
            <td class="subTotal">$<?php echo number_format($subTotal) ?></td>
        </tr>
        <tr>
            <td>International Shipping <i class="ms-2 f-14 icon-information" data-bs-toggle="modal" data-bs-target="#shippingPolicyModal"></i> </td>
            <td>Free</td>
        </tr>
        <tr class="total">
            <td>
                <div>Total</div>
            </td>
            <td>
                <div class="f-24 f-300 summary">$<?php echo number_format($subTotal); ?></div>
            </td>
        </tr>
    </table>
</div>
