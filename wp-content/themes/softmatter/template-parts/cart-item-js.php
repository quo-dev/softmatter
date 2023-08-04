<script>
    $('.decrease').on('click',function () {
        let input = $(this).closest('.quantity').find('.quantity-input');
        let inputValue = parseInt(input.val());
        let key = $(input).attr('data-key');
        let qtys = $('.'+key);
        $(qtys).each(function(index, element) {
            if(inputValue > 0) {
                $(element).val(inputValue - 1);
            }
        });
    });
    $('.increase').on('click',function () {
        let input = $(this).closest('.quantity').find('.quantity-input');
        let inputValue = parseInt(input.val());

        let key = $(input).attr('data-key');
        let qtys = $('.'+key);
        $(qtys).each(function(index, element) {
            if(inputValue > 0) {
                $(element).val(parseInt(inputValue) + 1);
            }
        });
    });

    $('.cart-qty').on('change',function () {
        let qty = $(this).val();
        let key = $(this).attr('data-key');
        let qtys = $('.'+key);
        console.log('key',key);
        $(qtys).each(function(index, element) {
            console.log('element',element);
            if(qty > 0) {
                $(element).val(qty);
            }
        });

        if(qty >0 ){
            processUpdateCart($(this));
        }else{
            let key = $(this).attr('data-key');
            let removeBtn = $('#btn-remove-'+key);
            app.confirmModal(removeBtn);
        }
    });


    $('.cart-content .decrease').on('click',function () {
        let input = $(this).closest('.quantity').find('.quantity-input');
        let inputValue = parseInt(input.val());
        if(inputValue >0){
            processUpdateCart($(this));
        }else{
            let key = input.attr('data-key');
            let removeBtn = $('#btn-remove-'+key);
            app.confirmModal(removeBtn);
        }
    });

    $('.cart-content .increase').on('click',function () {
        processUpdateCart($(this));
    });

    $('.btn-remove').on('click',function () {
        app.confirmModal($(this));
    });

    function processUpdateCart(element) {
        let input = element.closest('.quantity').find('.quantity-input');
        let price = element.closest('.quantity').find('.price-input').val();
        let productId = element.closest('.quantity').find('.productId').val();
        let cart_item_key = element.closest('.quantity').find('.cart_item_key').val();
        var product_qty = parseInt(input.val());

        var data = {
            action: 'ql_woocommerce_ajax_update_cart',
            product_id: productId,
            product_sku: '',
            quantity: product_qty,
            cart_item_key: cart_item_key,
        };
        $.ajax({
            type: 'post',
            url: wc_add_to_cart_params.ajax_url,
            data: data,
            beforeSend: function (response) {
                $('#loading-box-cart').removeClass('d-none');
            },
            complete: function (response) {
                $('#loading-box-cart').addClass('d-none');
            },
            success: function (response) {
                if (response.error) {
                    alert(response.message);
                    input.val(response.max_quantity);
                    product_qty = response.max_quantity
                    reloadCart();
                    return;
                } else {
                    reloadCart();
                }

                let productSum = product_qty*price;
                $('.sum-'+productId).html('$' + addCommas(productSum));
            },
        });

    }
    function removeCartItem(element) {
        let cart_item_key = element.attr('data-id');
        let productId = element.attr('data-product-id');

        var data = {
            action: 'ql_woocommerce_ajax_remove_cart_item',
            cart_item_key: cart_item_key,
            product_id: productId,
        };

        $.ajax({
            type: 'post',
            url: wc_add_to_cart_params.ajax_url,
            data: data,
            beforeSend: function (response) {
                $('#loading-box-cart').removeClass('d-none');
            },
            complete: function (response) {
                $('#loading-box-cart').addClass('d-none');
            },
            success: function (response) {
                if (response.error) {
                    // window.location = response.product_url;
                    alert("Update cart error: " + response.error);
                    return;
                } else {

                    $('#div-item-'+cart_item_key).fadeOut(500,function(){
                        $('#div-item-'+cart_item_key).remove();
                    });

                    $('.tr-item-'+cart_item_key).fadeOut(500,function(){
                        $('.tr-item-'+cart_item_key).remove();
                        reloadCart();
                    });
                    // $(document.body).trigger('added_to_cart', [response.fragments, response.cart_hash, $thisbutton]);
                }
            },
        });

    }
    function reloadCart() {
        var sumTotal = 0;
        var numberItems = 0;
        var valueArray = $('.table-order .cart-qty').map(function() {
            let product_qty = this.value;
            numberItems += parseInt(product_qty);
            let key = $(this).attr('data-key');
            let pricePro = $('#price-input-'+key).val();
            sumTotal += product_qty*pricePro;
            return sumTotal;
        }).get();


        if(sumTotal === 0){
            $('.all-cart-content').addClass('d-none');
            $('.empty-cart').removeClass('d-none');
            $('.number-cart').remove();
        }else{
            $('.empty-cart').addClass('d-none');
            $('.all-cart-content').removeClass('d-none');
            $('.subTotal').html('$' + addCommas(sumTotal));
            $('.summary').html('$' + addCommas(sumTotal));
            $('.number-cart').html(numberItems);
        }

    }
    function addCommas(nStr)
    {
        nStr += '';
        let x = nStr.split('.');
        let x1 = x[0];
        let x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        return x1 + x2;
    }

    // Limit input number
    $('.quantity-input').keypress(function (e) {
        var charCode = (e.which) ? e.which : event.keyCode
        if (String.fromCharCode(charCode).match(/[^0-9]/g))
            return false;
    });
</script>
