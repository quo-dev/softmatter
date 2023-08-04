
<div id="div-item-<?php echo  $item ?>">
    <div class="d-flex mb-5">
        <div class="image me-4">
          <div class="img">
            <img width="100"
                 src="<?php echo $product_image ?>"
                 alt="<?php echo $_product->get_title()?>"
            >
          </div>
        </div>
        <div class="product-info flex-grow-1">
            <div class="product-id mb-3"> Product ID: <?php echo $productId ?></div>
            <div class="mb-4">
              <div class="product-name mb-1 f-16"> <?php echo $_product->get_title() ?></div>
              <div class="product-des "> <?php echo $include_components ?></div>
            </div>

            <div class="price mb-3">$<?php echo number_format($price) ?></div>
            <div class="d-flex align-items-center">
              <div class="quantity me-5 flex-grow-1">
                <button type="button" class="btn-icon decrease">-</button>
                <input type="text" class="quantity-input text-center cart-qty <?php echo  $item ?>" data-key="<?php echo  $item ?>" value="<?php echo $values['quantity'] ?>">
                <button type="button" class="btn-icon increase">+</button>
                <input type="hidden" value="<?php echo  $price ?>" class="price-input" id="price-input-<?php echo  $item ?>">
                <input type="hidden" value="<?php echo  $productId ?>" class="productId">
                <input type="hidden" value="<?php echo  $item ?>" class="cart_item_key">
              </div>
              <button class="btn-icon btn-icon btn-remove"
                      data-id="<?php echo  $item ?>"
                      id="btn-remove-<?php echo  $item ?>"
                      data-product-id="<?php echo  $productId ?>">
                <i class="icon-trash" data-bs-toggle="modal"></i>
              </button>
            </div>
        </div>
    </div>
</div>

