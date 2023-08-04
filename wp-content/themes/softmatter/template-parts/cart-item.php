
<tr class="tr-item-<?php echo  $item ?>">
    <td>
        <div class="product-info">
            <div class="product-id mb-2"> Product ID: <?php echo $productId ?></div>
            <div class="product-name mb-2">
                <a href="<?php echo $_product->get_permalink() ?>" >
                    <?php echo $_product->get_title() ?>
                </a>
            </div>
            <div class="product-des "> <?php echo $include_components ?></div>
        </div>
    </td>
    <td>
        <div class="price">$<?php echo number_format($price) ?></div>
    </td>
    <td>
        <div class="quantity">
            <button type="button" class="btn-icon decrease">-</button>
            <input type="text" class="quantity-input text-center cart-qty <?php echo  $item ?>" data-key="<?php echo  $item ?>" value="<?php echo $values['quantity'] ?>">
            <button type="button" class="btn-icon increase">+</button>
            <input type="hidden" value="<?php echo  $price ?>" class="price-input" id="price-input-<?php echo  $item ?>">
            <input type="hidden" value="<?php echo  $productId ?>" class="productId">
            <input type="hidden" value="<?php echo  $item ?>" class="cart_item_key">
        </div>
    </td>
    <td>
        <button class="btn-icon btn-icon btn-remove"
                data-id="<?php echo  $item ?>"
                id="btn-remove-<?php echo  $item ?>"
                data-product-id="<?php echo  $productId ?>">
            <i class="icon-trash" data-bs-toggle="modal"></i>
        </button>
    </td>
    <td>
        <div class="total-price sum-<?php echo $productId ?>"> $<?php echo number_format($totalProductPrice); ?></div>
    </td>
</tr>

