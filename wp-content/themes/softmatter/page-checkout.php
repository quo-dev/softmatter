<?php

/**
 * Template Name: Page  checkout
 * Description: Page template  checkout
 * Application
 *
 */

get_header();
$img = get_template_directory_uri() . '/assets/images';
$countryList = get_country_list();
$shipping_detail = get_shipping_detail();
?>
<main class="main bg-dark page-content shopping-cart">
  <div class="container breadcrumb-block text-uppercase bg-dush">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb f-18">
        <li class="breadcrumb-item"><a href="/cart">Cart</a></li>
        <li class="breadcrumb-item active" aria-current="page">Information</li>
        <li class="breadcrumb-item"><a>Payment</a></li>
      </ol>
    </nav>
  </div>
  <section class="order-summary text-white">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 cart-col-left">
          <div class="account-info">
            <form action="" id="checkout-form">
              <input type="hidden" name="action" value="save_shipping_data">
              <div class="mb-5 group-fields">
                <div class="f-24 mb-4">Contact information</div>
                <div class="row">
                  <div class="form-group col-md-12 mb-4">
                    <input type="text" name="email" value="<?php echo $shipping_detail['email'] ?>" class="form-control form-control-white " placeholder="Email" />
                  </div>
                </div>
                <div class="f-14">
                  <label class="checkbox">
                    <input type="checkbox" name="email_subscribe" class="me-2" <?php if ($shipping_detail['email_subscribe']) echo 'checked' ?>>
                    <span class="ck"></span>
                    <span class="opacity-50 ">
                      Email me with news and offers
                    </span>
                  </label>
                </div>
              </div>
              <div class="mb-5 group-fields">
                <div class="f-24 mb-4">Shipping Address</div>
                <div class="row">
                  <div class="form-group col-md-12 mb-4">
                    <select name="shipping_country" class="form-control form-control-white">
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
                    <input type="text" name="first_name" value="<?php echo $shipping_detail['first_name'] ?>" class="form-control form-control-white" placeholder="First Name" />
                  </div>
                  <div class="form-group col-md-6 mb-4">
                    <input type="text" name="last_name" value="<?php echo $shipping_detail['last_name'] ?>" class="form-control form-control-white" placeholder="Last Name" />
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-12 mb-4">
                    <input type="text" name="shipping_address" id="google-autocomplete-shipping" value="<?php echo $shipping_detail['address'] ?>" class="form-control form-control-white" placeholder="Address" />
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-4 mb-4">
                    <input type="text" name="shipping_city" value="<?php echo $shipping_detail['city'] ?>" class="form-control form-control-white" placeholder="City" />
                  </div>
                  <div class="form-group col-md-4 mb-4">
                    <input type="text" name="shipping_state" value="<?php echo $shipping_detail['state'] ?>" class="form-control form-control-white" placeholder="State" />
                  </div>
                  <div class="form-group col-md-4 mb-4">
                    <input type="text" name="shipping_postcode" value="<?php echo $shipping_detail['postcode'] ?>" class="form-control form-control-white" placeholder="Postcode" />
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-12 ">
                    <input type="text" name="phone" value="<?php echo $shipping_detail['phone'] ?>" class="form-control form-control-white" placeholder="Phone" />
                  </div>
                </div>
              </div>
            </form>
            <div class="mb-5 pb-lg-5 pb-lg-0">
              <div class="f-24 mb-4">Shipping Method</div>
              <div class="card-box selected f-18 ">
                <div class="d-flex justify-content-between">
                  <div class="value d-flex align-items-center">
                    <label class="radio">
                      <input type="radio" class="me-2" disabled checked />
                      <span class="ck"></span>
                    </label>
                    Standard International Shipping (7-10 days)
                  </div>
                  <div>FREE</div>
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
            <a href="/cart" class="btn-back text-green me-4 f-18 text-decoration-none d-inline-flex align-items-center"> &lt; Back</a>
            <a href="/checkout-payment" class="btn btn-success" id="go_to_payment">Continue</a>
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARv4pjcolTsPEPIj1lK8_v2FyVh8kcceU&libraries=places&callback=initMap" async defer></script>
  <script>
    var $ = jQuery.noConflict();
    $('#go_to_payment').click(function(e) {
      e.preventDefault();
      $('#checkout-form').submit();
    });

    function initMap() {
      var input_shipping = document.getElementById('google-autocomplete-shipping');

      var autocomplete_shipping = new google.maps.places.Autocomplete(input_shipping);

      $('select[name="shipping_country"]').change(function() {
        autocomplete_shipping.setComponentRestrictions({
          'country': [this.value]
        });
      });


      autocomplete_shipping.setFields(
        ['address_components', 'geometry', 'icon', 'name']);
      autocomplete_shipping.addListener('place_changed', function() {
        var place = autocomplete_shipping.getPlace();
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
            jQuery('input[name="shipping_state"]').val(component.long_name);
          }
          if (jQuery.inArray("administrative_area_level_2", component.types) != -1) {
            jQuery('input[name="shipping_city"]').val(component.long_name);
          }
          if (jQuery.inArray("postal_code", component.types) != -1) {
            jQuery('input[name="shipping_postcode"]').val(component.short_name);
          } else {
            jQuery('input[name="shipping_postcode"]').val('');
          }
        });

        jQuery('input[name="shipping_address"]').val(street_number + ' ' + route);
        if (!place.geometry) {
          window.alert("No details available for input: '" + place.name + "'");
          return;
        }

      });

    }
  </script>
</main>
<?php get_footer(); ?>
