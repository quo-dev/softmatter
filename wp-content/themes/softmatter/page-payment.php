<?php

/**
 * Template Name: Page  checkout payment
 * Description: Page template  checkout payment
 * Application
 *
 */

get_header();
$img = get_template_directory_uri() . '/assets/images';
$billing_detail = get_shipping_detail('billing');
$shipping_detail = get_shipping_detail('billing');
$countryList = get_country_list();

$phone = formatPhoneNumber($shipping_detail['phone']);

?>
<main class="main bg-dark page-content shopping-cart">
  <div class="container breadcrumb-block text-uppercase bg-dush">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb f-18">
        <li class="breadcrumb-item"><a href="#">Cart</a></li>
        <li class="breadcrumb-item"><a href="/checkout">Information</a></li>
        <li class="breadcrumb-item active" aria-current="page">Payment</li>
      </ol>
    </nav>
  </div>
  <section class="order-summary text-white">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 cart-col-left">
          <div class="account-info">
            <div class="f-24 mb-4">Contact information</div>
            <div class="box-option f-18 mb-5">
              <div class="box-option-item">
                <div class="d-flex justify-content-between ">
                  <div class="value  pe-4"> <?php echo $shipping_detail['email'] ?></div>
                  <a href="/checkout" class="change text-green text-decoration-none">Change</a>
                </div>
              </div>
              <div class="box-option-item">
                <div class="d-flex justify-content-between review-block">
                  <div class="value pe-4"><?php echo $phone ?></div>
                  <a href="/checkout" class="change text-green text-decoration-none">Change</a>
                </div>
              </div>
                <div class="box-option-item">
                <div class="d-flex justify-content-between review-block">
                  <div class="value pe-4"><?php echo $shipping_detail['address'] . ', ' . $shipping_detail['city'] . ', ' . $shipping_detail['state'] . ', ' . $shipping_detail['country'] . ' ' . $shipping_detail['postcode']; ?></div>
                  <a href="/checkout" class="change text-green text-decoration-none">Change</a>
                </div>
              </div>
              <div class="box-option-item">
                <div class="d-flex justify-content-between review-block">
                  <div class="value  pe-4"> Standard International Shipping (7-10 days)</div>
                  <strong class="f-500">Free</strong>
                </div>
              </div>
            </div>
            <div class="f-24 mb-4">
              Billing address
              <div class="f-14 opacity-50 mt-2">Select the address that matches your card or payment method.</div>
            </div>

            <div class="address-options f-18 mb-5">
              <div class="card-box selected mb-20">
                <label class="radio">
                  <input type="radio" checked value="same" name="billing_address_status">
                  <span class="ck"></span>
                  Same as shipping address
                </label>
              </div>
              <div class="card-box">
                <label class="radio">
                  <input type="radio" value="different" name="billing_address_status" id="different_billing_address">
                  <span class="ck"></span>
                  Use a different billing address
                </label>
                <div class="mt-5 d-none box-option-item-content">
                  <form action="" id="billing-form" class="hide-error">
                    <div class="row">
                      <div class="form-group col-md-12 mb-4">
                        <select class="form-control form-control-white">
                          <option value="">Country / Region</option>
                          <?php
                          foreach ($countryList as $key => $country) {
                            $selected = $key === $shipping_detail['country'] ? 'selected' : '';
                            echo '<option value="' . $key . '" ' . $selected . '>' . $country . '</option>';
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6 mb-4">
                        <input type="text" class="form-control form-control-white" name="billing_first_name" placeholder="First Name" />
                      </div>
                      <div class="form-group col-md-6 mb-4">
                        <input type="text" class="form-control form-control-white" name="billing_last_name" placeholder="Last Name" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12 mb-4">
                        <input type="text" class="form-control form-control-white" name="billing_address" id="google-autocomplete-address" placeholder="Address" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-4 mb-4">
                        <input type="text" name="billing_city" value="" class="form-control form-control-white" placeholder="City" />
                      </div>
                      <div class="form-group col-md-4 mb-4">
                        <input type="text" name="billing_state" value="" class="form-control form-control-white" placeholder="State" />
                      </div>
                      <div class="form-group col-md-4 mb-4">
                        <input type="text" name="billing_postcode" class="form-control form-control-white" placeholder="Postcode" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12 ">
                        <input type="text" class="form-control form-control-white" name="billing_phone" placeholder="Phone" />
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="policy-link d-flex f-14 mb-5 mb-lg-0">
              <a href="" class="me-5 text-decoration-none text-white-50" data-bs-toggle="modal" data-bs-target="#refundModal">Refund Policy</a>
              <a href="" class="me-5 text-decoration-none text-white-50" data-bs-toggle="modal" data-bs-target="#shippingPolicyModal">Shipping Policy </a>
              <a href="" class="me-5 text-decoration-none text-white-50" data-bs-toggle="modal" data-bs-target="#privacyPolicyModal">Privacy Policy</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 cart-col-right">
          <?php get_template_part( 'template-parts/checkout-right-column' ); ?>
          <div class="d-flex justify-content-between f-16 align-items-center">
            <a href="/checkout" class="btn-back text-green me-4 f-18 text-decoration-none d-inline-flex align-items-center"> &lt; Back</a>
            <div id="paypal-button-container" style="width:200px;"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- CASE: IMAGE LEFT -->
  <section class="tpl-block text-media-block bg-chalk image">
    <!-- Option: .bg-chalk; .image | .video  -->
    <div class="container-fluid g-0">
      <div class="row g-0 align-items-stretch">
        <!-- Option: Image -->
        <div class="col-lg-6 image-col full-height">
          <!-- Option: .full-height (when the content is too long) -->
          <div class="image image-zoomin-effect">
            <!-- Default 1x1 | .size-4x3 -->
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
        <!--                    <source src="--><?php //echo $img
                                                ?>
        <!--/BrandTexture.mov" type="video/mp4">-->
        <!--                </video>-->
        <!--            </div>-->
        <!--        </div>-->
        <div class="col-lg-6 content-col">
          <div class="content-box text-center">
            <h3 class="title wow fadeInUp" data-wow-duration="1.5s" data-wow-offset="10">Need Customer Support?</h3>
            <div class="content wow fadeInUp" data-wow-duration="1.5s" data-wow-offset="10">
              <p>Need customer support? We’re here to help! Please contact us through the form linked below and we’ll get back to you.</p>
            </div>
            <a href="#" class="btn btn-primary wow pulse" data-wow-offset="10">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://www.paypal.com/sdk/js?client-id=AYCzU1teAfyqA83spzaMcTWupZOMTs5olBYez8ChjtxuF-wrjY1hGWNJoypz2WznJuEPPOGKMFFF6Vqu" data-sdk-integration-source="button-factory"></script>
  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'gold',
          layout: 'horizontal',
          label: 'paypal',
          tagline: false,
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            application_context: {
              shipping_preference: "NO_SHIPPING"
            },
            payer: {
              email_address: '<?php echo $billing_detail['email'] ?>',
              name: {
                given_name: '<?php echo $billing_detail['first_name'] ?>',
                surname: '<?php echo $billing_detail['last_name'] ?>'
              },
              address: {
                address_line_1: "<?php echo $billing_detail['address'] ?>",
                address_line_2: "",
                admin_area_1: "<?php echo $billing_detail['state'] ?>",
                admin_area_2: "<?php echo $billing_detail['city'] ?>",
                postal_code: "<?php echo $billing_detail['postcode'] ?>",
                country_code: "<?php echo $billing_detail['country'] ?>"
              }
            },
            purchase_units: [{
              amount: {
                value: '<?php echo WC()->cart->cart_contents_total; ?>',
                currency_code: "USD",
              }
            }]
          });
        },

        // onInit is called when the button first renders
        onInit: function(data, actions) {

          // Disable the buttons
          $('input[name="billing_address_status"]').change(function() {
            if (this.value == 'same') {
              actions.enable();
            } else {
              if ($("#billing-form").valid()) {
                actions.enable();
              } else {
                actions.disable();
              }
              $('#billing-form input').keyup(function(){
                if ($("#billing-form").valid()) {
                  actions.enable();
                } else {
                  actions.disable();
                }
              });
            }
          });
        },

        onClick: function() {
          if ($('input[name="billing_address_status"]:checked').val() === 'different') $("#billing-form").removeClass('hide-error');
          $("#billing-form").submit();
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {

            // Full available details
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

            complete_order(orderData);

            // Or go to another URL:  actions.redirect('thank_you.html');

          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();

    function complete_order(transaction_data){
        jQuery.ajax({
            type : "post",
            dataType : "json",
            url : '<?php echo admin_url('admin-ajax.php');?>',
            data : {
                action: "payment_complete",
                data : transaction_data,
            },
            context: this,
            beforeSend: function(){
                jQuery('.cart-update-modal').modal('show');
            },
            success: function(response) {
                if(response.success){
                  window.location.href = response.data.redirect_url;
                }else{
                  $(form).find('.response-error').fadeIn('fast').find('p').text(response.data.message);
                }
            },
            error: function( jqXHR, textStatus, errorThrown ){
                console.log( 'The following error occured: ' + textStatus, errorThrown );
            }
        })
    }

  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDEysR6AVsw8vKTNzQBaSAjfI7djaeo3o&libraries=places&callback=initMap" async defer></script>
  <script>
    var $ = jQuery.noConflict();

    function initMap() {
      var input_address = document.getElementById('google-autocomplete-address');

      var autocomplete_address = new google.maps.places.Autocomplete(input_address);

      $('select[name="shipping_country"]').change(function() {
        autocomplete_address.setComponentRestrictions({
          'country': [this.value]
        });
      });

      autocomplete_address.setFields(
        ['address_components', 'geometry', 'icon', 'name']);
      autocomplete_address.addListener('place_changed', function() {
        var place = autocomplete_address.getPlace();
        var address_components = place.address_components;
        var street_number = '';
        var route = '';
        console.log('place', place);
        console.log('address_components', address_components);
        address_components.forEach(component => {
          if (jQuery.inArray("street_number", component.types) != -1) {
            street_number = component.long_name;
          }
          if (jQuery.inArray("route", component.types) != -1) {
            route = component.long_name;
          }

          if (jQuery.inArray("administrative_area_level_1", component.types) != -1) {
            jQuery('input[name="billing_state"]').val(component.long_name);
          }
          if (jQuery.inArray("administrative_area_level_2", component.types) != -1) {
            jQuery('input[name="billing_city"]').val(component.long_name);
          }
          if (jQuery.inArray("postal_code", component.types) != -1) {
            jQuery('input[name="billing_postcode"]').val(component.short_name);
          } else {
            jQuery('input[name="billing_postcode"]').val('');
          }
        });

        jQuery('input[name="billing_address"]').val(street_number + ' ' + route);
        if (!place.geometry) {
          window.alert("No details available for input: '" + place.name + "'");
          return;
        }

      });

    }

    $("iframe").contents().find("element-selector").css("border-color", "blue");
  </script>
</main>
<?php get_footer(); ?>
