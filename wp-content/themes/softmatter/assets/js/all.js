'use strict';
const isMobileScreen = function isMobileScreen() {
  return document.body.clientWidth <= 767;
};
const isDesktopScreen = function isDesktopScreen() {
  return document.body.clientWidth > 1024;
};
const isTableScreen = function isTableScreen() {
  return (document.body.clientWidth > 767 && document.body.clientWidth < 1025);
};

// $.validator.addMethod('phoneAU', function(value, element, param) {
//   return value.match(/(\d{2})(\d{3})(\d{3})/g);
// },'Please enter a valid mobile number.');
//
// $.validator.addMethod('emailExt', function(value, element, param) {
//   return value.match(/^[a-zA-Z0-9_\.%\+\-]+@[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,}$/);
// },'Please enter a valid email address.');
//

var $ = jQuery.noConflict();
const app = {

  init: function init() {
    this.animation();
    this.sticky();
    this.checkOS();
    this.slider();
    this.cardToggle();
    this.sliderContent();
    this.calPaddingLeft('.container-slider');
    // this.calPaddingLeft('.tab-block .tab-content');
    // this.calPaddingLeft('.text-media-block .flex-row-reverse .content-box');
    this.calPaddingLeft('.text-media-block:first-child .content-box');
    this.ourStorySlider();
    this.accordionSlider();
    this.accordionSliderHorizontal();
    this.accordionSliderHorizontal2();
    this.accordionCalPadding();
    this.partnerSlider();
    this.mainMenu();
    this.subMenu();
    this.playVideo();
    this.searchToggle();
    this.tabSliderContent();
    this.tabSliderCalPadding();
    this.cardReadMore();
    this.equalHeightByRow('.card-3-cols-block.secondary .content');
    this.equalHeightByRow('.product-related-item');
    // this.equalHeightByRow('.block-4-cols .card');
    this.iconHovering();
    this.tabAction();
    this.tabBlockParent();
    this.woocommerceQuantity();
    this.woocommerceOpenCart();
    this.woocommerceShowOption();
    this.checkoutForm();
    this.outOfStockForm();
    this.addToCart();
    this.updateCart();
    this.mobileMenu();
    this.fullImageTabSlider();
    this.animationMenuMobile();
    this.topicsFilter();
    this.faqs();
    this.closeNotification();
    this.ourStories();
    // this.removeCartItem();
    // this.reloadCart();
  },
  closeNotification: function(){
    $('.wpcf7-response-output').click(function(){
      $(this).hide();
    })
  },
  topicsFilter: function(){
    if($('.topics__item').length ){
      $('.topics__item').click(function(e){
        e.preventDefault();
        var typeSelect = $(this).find('a').attr('data-type');
        console.log('typeSelect:', typeSelect);
        $('.news .news__item').hide();
        $('.' + typeSelect).show();
        $('.topics__item').removeClass('active');
        $(this).addClass("active");
      })
    }
  },
  animationMenuMobile: function (){
    if(document.body.clientWidth < 992){
      console.log('Mobile');
      $('.wows').addClass('wow');
      $('.wows').removeClass('wows');
      new WOW().init();
    }
  },
  checkoutForm: function (){
    $.validator.addMethod("emailExt", function (value, element, param) {
      return value.match(/^[a-zA-Z0-9_\.%\+\-]+@[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,}$/);
    }, 'This field is invalid.');
    $('#checkout-form').validate({
      highlight: function (element, errorClass, validClass) {
        $(element).closest('.form-group').addClass(errorClass).removeClass(validClass);
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).closest('.form-group').addClass(validClass).removeClass(errorClass);
      },
      ignore: ".ignore .form-control",
      rules: {
        email: {
          required: true,
          emailExt: true
        },
        email_subscribe: {},
        shipping_country: {
          required: true
        },
        first_name: {
          required: true
        },
        last_name: {
          required: true
        },
        shipping_city: {
          required: true,
        },
        shipping_address: {
          required: true,
        },
        shipping_postcode: {
          required: true
        },
        shipping_state: {
          required: true
        },
        phone: {
          required: true
        },
      },
      messages: {
        billing_email: {
          required : 'This field is required.',
          emailExt: 'This field is invalid.'
        },
        shipping_country: 'This field is required.',
        first_name: 'This field is required.',
        last_name: 'This field is required.',
        shipping_city: 'This field is required.',
        shipping_address: 'This field is required.',
        shipping_postcode: 'This field is required.',
        shipping_state: 'This field is required.',
        phone: 'This field is required.'
      },
      invalidHandler: function (event, validator) {

      },
      submitHandler: function (form) {
        $.ajax({
          method: "POST",
          url: ajax.url,
          data : $(form).serialize(),
          dataType: 'json',
          beforeSend: function( xhr ) {
            $('#go_to_payment').addClass('loading disabled')
          }
        }).done(function( resp ) {
            if(resp.success){
              window.location.href = resp.data.redirect_url;
            }else{
              $(form).find('.response-error').fadeIn('fast').find('p').text(resp.data.message);
            }
        });
      }
    });
    $('#billing-form').validate({
      highlight: function (element, errorClass, validClass) {
        $(element).closest('.form-group').addClass(errorClass).removeClass(validClass);
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).closest('.form-group').addClass(validClass).removeClass(errorClass);
      },
      ignore: ".ignore .form-control",
      rules: {
        billing_country: {
          required: true,
        },
        billing_first_name: {
          required: true,
        },
        billing_last_name: {
          required: true,
        },
        billing_city: {
          required: true,
        },
        billing_address: {
          required: true,
        },
        billing_postcode: {
          required: true,
        },
        billing_state: {
          required: true
        },
        billing_phone: {
          required: true,
        },
      },
      messages: {
        billing_country: 'This field is required.',
        billing_first_name: 'This field is required.',
        billing_last_name: 'This field is required.',
        billing_city: 'This field is required.',
        billing_address: 'This field is required.',
        billing_postcode: 'This field is required.',
        billing_state: 'This field is required.',
        billing_phone: 'This field is required.'
      },
      invalidHandler: function (event, validator) {

      },
      submitHandler: function (form) {
      }
    });
  },
  outOfStockForm: function(){
    $('#out-of-stock').validate({
      highlight: function (element, errorClass, validClass) {
        $(element).closest('.form-group').addClass(errorClass).removeClass(validClass);
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).closest('.form-group').addClass(validClass).removeClass(errorClass);
      },
      ignore: ".ignore .form-control",
      errorPlacement: function(error, element) {
        var placement = $(element).closest('.out-of-stock');
        if (placement) {
          $(placement).append(error)
        } else {
          error.insertAfter(element);
        }
      },
      rules: {
        user_email: {
          required: true,
          emailExt: true
        },
      },
      messages: {
        user_email: {
          required : 'This field is required.',
          emailExt: 'This field is invalid.'
        }
      },
      invalidHandler: function (event, validator) {
      },
      submitHandler: function (form) {
        $.ajax({
          method: "POST",
          url: ajax.url,
          data : $(form).serialize(),
          dataType: 'json',
          beforeSend: function( xhr ) {
            $(form).find('button').addClass('loading disabled')
            $(form).find('.cwginstocksuccess').remove();
            $(form).find('.cwginstockerror').remove();
          }
        }).done(function( resp ) {
          $(form).find('button').removeClass('loading disabled')
          $(form).find('.out-of-stock').append(resp.msg);
        });
      }
    });
  },
  woocommerceShowOption: function () {
    $('input[name="billing_address_status"]').change(function() {
      var cardBox = $(this).closest('.card-box');
      cardBox.addClass('selected');
      $(this).closest('.address-options').find('.card-box.selected').removeClass('selected');
      $(this).closest('label').next().removeClass('d-none');
      if (this.value == 'same') {
        $('.box-option-item-content').addClass('d-none');
      }else{
        $('.box-option-item-content').removeClass('d-none');
      }
    });
    $('.select-payment select').on('change',function () {
        $('.payment-option-item').addClass('d-none');
        var img = $(this).closest('.select-payment').find('img');
        if($(this).val() === '1') {
          img.removeClass('d-none');
          $('#credit-card').removeClass('d-none');
        } else if($(this).val() === '2') {
          $('#pay-in-full-option').removeClass('d-none');
          img.addClass('d-none')
        }
        else if($(this).val() === '3') {
          $('#paypal-option').removeClass('d-none');
          img.addClass('d-none')
        }

    });
  },
  woocommerceOpenCart: function () {
    $('.cart-btn').on('click',function () {
      $('html').addClass('open-cart');
      $('html').removeClass('open-menu open-search');
    })
    $('.cart-btn-close').on('click', function () {
      $('html').removeClass('open-cart');
    });

  },
  woocommerceQuantity: function () {
    $('.single-decrease').on('click',function (e) {
      e.preventDefault();
      let input = $(this).closest('.quantity').find('.quantity-input');
      let inputValue = parseInt(input.val());
      if(inputValue > 1) {
        input.val(inputValue - 1);
      }
    });
    $('.single-increase').on('click',function (e) {
      e.preventDefault();
      let input = $(this).closest('.quantity').find('.quantity-input');
      let inputValue = parseInt(input.val());
      input.val(inputValue + 1);
    });

    $('.quantity-input').on('change',function (e) {
      e.preventDefault();
      let qty = $(this).val();
      if(qty == 0){
        $(this).val(1);
      }
    });

    $('.cart-content .decrease').on('click',function (e) {
      e.preventDefault();
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
    $('.cart-content .increase').on('click',function (e) {
      e.preventDefault();
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
        app.processUpdateCart($(this));
      }else{
        let key = $(this).attr('data-key');
        let removeBtn = $('#btn-remove-'+key);
        app.removeCartItem(removeBtn);
      }
    });
  },
  updateCart: function () {
    $('.cart-content .decrease').on('click',function () {
      let input = $(this).closest('.quantity').find('.quantity-input');
      let inputValue = parseInt(input.val());
      if(inputValue >0){
        app.processUpdateCart($(this));
      }else{
        let key = input.attr('data-key');
        let removeBtn = $('#btn-remove-'+key);
        app.confirmModal(removeBtn);
      }
    });

    $('.cart-content .increase').on('click',function () {
      app.processUpdateCart($(this));
    });

    $('.btn-remove').on('click',function () {
      app.confirmModal($(this));
    });
  },
  confirmModal: function(item) {
    $('#modalConfirm').modal('show');

    $('#btnYes').click(function() {
        $('#modalConfirm').modal('hide');
        app.removeCartItem(item);
        $( "#btnYes").unbind( "click" );
    });
    $('#btnNo').click(function() {
        $('#modalConfirm').modal('hide');
    });
  },
  processUpdateCart: function (element) {
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
        $('.loading-box').removeClass('d-none');
      },
      complete: function (response) {
        $('.loading-box').addClass('d-none');
      },
      success: function (response) {
        if (response.error) {
          alert(response.message);
          input.val(response.max_quantity);
          product_qty = response.max_quantity
          return;
        } else {
          app.reloadCart();
          // $(document.body).trigger('added_to_cart', [response.fragments, response.cart_hash, $thisbutton]);
        }

        let productSum = product_qty*price;
        $('.sum-'+productId).html('$' + app.addCommas(productSum));
      },
    });

  },
  removeCartItem: function (element) {
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
        $('.loading-box').removeClass('d-none');
      },
      complete: function (response) {
        $('.loading-box').addClass('d-none');
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
            app.reloadCart();
          });
          // $(document.body).trigger('added_to_cart', [response.fragments, response.cart_hash, $thisbutton]);
        }
      },
    });

  },
  reloadCart: function () {
    var sumTotal = 0;
    var numberItems = 0;
    var valueArray = $('.table-cart .cart-qty').map(function() {
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
      $('.btn-checkout').addClass('disabled');
    }else{
      $('.empty-cart').addClass('d-none');
      $('.all-cart-content').removeClass('d-none');
      if($('.number-cart').length === 0){
        $('.cart-btn').append('<span class="number-cart">'+numberItems+'</span>');
      }else{
        $('.number-cart').html(numberItems);
      }
    }
    $('.subTotal').html('$' + app.addCommas(sumTotal));
    $('.summary').html('$' + app.addCommas(sumTotal));

  },
  addCommas: function (nStr)
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
  },
  addToCart: function ()
  {
    $('.single_add_to_cart_button').on('click', function(e){
      e.preventDefault();
      var $thisbutton = $(this),
          $form = $thisbutton.closest('form.cart'),
          id = $thisbutton.val(),
          product_qty = $form.find('.quantity-input').val() || 1,
          product_id = $form.find('input[name=product_id]').val() || id,
          variation_id = $form.find('input[name=variation_id]').val() || 0;
      var data = {
        action: 'ql_woocommerce_ajax_add_to_cart',
        product_id: product_id,
        product_sku: '',
        quantity: product_qty,
        variation_id: variation_id,
      };
      $.ajax({
        type: 'post',
        url: wc_add_to_cart_params.ajax_url,
        data: data,
        beforeSend: function (response) {
          $thisbutton.removeClass('added').addClass('loading disabled');
        },
        complete: function (response) {
          $thisbutton.addClass('added').removeClass('loading disabled');
        },
        success: function (response) {
          if (response.error) {
            $('.add-to-cart-error').html(response.message);
            $('.add-to-cart-error').removeClass('d-none');
            app.reloadCart();
            return;
          } else {
            $('.cart-content').html(response);
            app.reloadCart();
            $('html').addClass('open-cart');
            $('html').removeClass('open-menu open-search');
            $('.add-to-cart-error').addClass('d-none');
            // $(document.body).trigger('added_to_cart', [response.fragments, response.cart_hash, $thisbutton]);
          }
        },
      });
    });
  },
  iconHovering: function () {
    const iconElm = $(".icon-hovering");
    if(isDesktopScreen()) {
      iconElm.hover( function(){
        $(this).addClass('hover');
        $(this).find('.name').animate({
          width: "100%",
        }, 300);
      },function() {
        $(this).removeClass('hover');
        $(this).find('.name').animate({
          width: "0",
        }, 100);
      });
    } else {
      iconElm.on('click', function(e){
        e.stopPropagation();
        e.preventDefault();
        $(".icon-hovering .name").css('width', '0');
        $(".icon-hovering").removeClass('hover');
        $(this).addClass('hover');
        $(this).find('.name').animate({
          width: "100%"
        }, 300);
      });
    }

  },
  cardToggle: function () {
    const card = $(".block-3-cols .card");
    card.on('click', function () {
      $(this).closest('.block-3-cols').find('.card').removeClass('current');
      $(this).addClass('current');
    });
  },
  checkOS: function () {
    let OSName = "Unknown OS";
    if (navigator.appVersion.indexOf("Win") != -1) {
      OSName = "Windows";
      console.log('Your OS: ' + OSName);
      $('body').addClass('windows-ios');
    }
    ;
    if (navigator.appVersion.indexOf("Mac") != -1) {
      OSName = "MacOS";
      console.log('Your OS: ' + OSName);
      $('body').addClass('mac-ios');
    }
  },
  cardReadMore: function () {
    const toggleButton = $('.card-3-cols-block .read-more');
    toggleButton.on('click', function (e) {
      e.preventDefault()
      $(this).prev('.more-content').slideToggle(200);
      $(this).toggleClass('active');
    });
  },
  playVideo: function () {
    $('.video-box').each(function (index) {
      const url = $(this).attr('data-video');
      const options = {
        url: url,
        width: 1024,
        loop: false
      };
      const player = new Vimeo.Player($(this), options);
      player.setVolume(0.4);

      $(this).find('.play').on('click', () => {
        $(this).addClass('start-playing');
        player.play();
      });
      player.on('play', () => {
        $(this).removeClass('start-playing');
        $(this).addClass('playing');
      });
    });
  },
  searchToggle: function () {
    $('.search-btn').on('click', function (e) {
      e.preventDefault();
      $('html').toggleClass('open-search');
      setTimeout(function () {
        $('.form-search__input').focus();
      }, 100)
    });
  },
  ourStories: function(){
    console.log('call animation');
    var delay = 0.46;
    var timeText = '';
    $('.our-stories .our-stories__right .asnimated-item').removeClass('wow animated fadeInRightBig');
    $('.our-stories .our-stories__right .asnimated-item').attr('style', '');
    $('.our-stories .our-stories__right .slick-current .asnimated-item').each(function( index ) {
      delay += 0.16;
      timeText = delay.toFixed(2).toString();
      $( this ).addClass('animated fadeInRightBig duration-' + timeText.replace(/\./g, "-") + 's');
    });

  },
  mainMenu: function () {
    $('.navbar-toggler .close-nav').on('click', function () {
      $('html').removeClass('open-menu');
      $('#menu-primary .animated-item').removeClass('animated fadeInRightTransform');
    });
    $('.navbar-toggler .open-nav').on('click', function () {
      $('html').addClass('open-menu');
      var delay = 0.46;
      var timeText = '';
      $('#menu-primary .animated-item').each(function( index ) {
        delay += 0.08;
        timeText = delay.toFixed(2).toString();
        $( this ).addClass('animated fadeInRightTransform duration-' + timeText.replace(/\./g, "-") + 's');
      });
    });
  },
  subMenu: function () {
    var delay = 0.46;
    var timeText = '';
    $('.menu-child .animated-item').each(function( index ) {
      delay += 0.08;
      timeText = delay.toFixed(2).toString();
      $( this ).addClass('animated fadeInRightTransform duration-' + timeText.replace(/\./g, "-") + 's');
    });
  },
  mobileMenu: function(){
    $('.open-child-menu').click(function(e){
      const openMenu = $(this).attr('data-link');
      console.log('openMenu: ', openMenu);
      if(openMenu != undefined){
        e.preventDefault();
        $('#menu-primary').addClass('hide');
        $(openMenu).addClass('show');
      }
    })
    $('.back-menu-mobile').click(function(e){
      e.preventDefault();
      $('.menu-child').removeClass('show');
      $('#menu-primary').removeClass('hide');
      $('.menu-child .animated-item').removeClass('animated fadeInRight');
    })
  },
  calPaddingLeft: function (container,direction='left') {
    const paddingLeft = app.calculateLeftSpacing();
    $(container).css('padding-' + direction, paddingLeft);
    $('.slider-content .slick-slide').css('width', $('.app-header .container').innerWidth() - 20)
  },

  calculateLeftSpacing: function () {
    const paddingLeft = ($('.wrapper').innerWidth() - $('.app-header .container').innerWidth()) / 2;
    return paddingLeft + 10
  },
  sliderContent: function () {
    const sliderContent = $('.slider-content');
    // sliderContent.on('init', function(event, slick) {
    //   setTimeout(function () {
    //     var CurrentSlideDom = $(slick.$slider).find('.slick-current');
    //     CurrentSlideDom.addClass('current');
    //   },100);
    // });
    sliderContent.each(function () {
      $(this).slick({
        variableWidth: true,
        slidesToShow: 1,
        arrows: false,
        speed: 200,
        autoplay: false,
        dots: false,
        autoplaySpeed: 5000,
        responsive: [
          {
            breakpoint: 767,
            settings: {
              dots: true,
              variableWidth: false,
            }
          },
        ]
      });
    });

    sliderContent.on('afterChange', function (event, slick, currentSlide) {
      var slideNo = currentSlide + 1;
      var SliderComponent = $(this).closest('.slider-content-block');
      var nav = SliderComponent.find('li[data-slide]');
      var navCurrent = SliderComponent.find('li[data-slide="' + slideNo + '"]');
      nav.removeClass('slick-active');
      navCurrent.addClass('slick-active');
      // var CurrentSlideDom=$(slick.$slides.get(currentSlide));
      // SliderComponent.find('.slick-slide').removeClass('current');
      // CurrentSlideDom.addClass('current');

    });
    $('.slick-dots-custom li[data-slide]').click(function (e) {
      e.preventDefault();
      var slider = $(this).closest('.slider-content-block');
      var slideno = $(this).data('slide');
      slider.find('.slider-content').slick('slickGoTo', slideno - 1);
    });


    $(".slick-next").click(function (e) {
      var slider = $(this).closest('.slider-content-block');
      slider.find('.slider-content').slick("slickNext");
    });
    $(".slick-prev").click(function (e) {
      var slider = $(this).closest('.slider-content-block');
      slider.find('.slider-content').slick("slickPrev");
    });

  },
  tabAction: function() {
    // let width = 0;
    $('.tab-block').each(function () {
      // const navItem =   $(this).find('.nav-item');
      if($(this).find('.tab-icon').length) {
        $(this).addClass('tab-block-with-icon');
        // width = Math.max.apply(Math, navItem.map(function(){ return $(this).width(); }).get());
      }
    });
    $(".tab-block .nav-link").on('click',function(){
      const slider = $(this).closest('.tab-block').find('.kits-slider');
      if(slider.length) {
        slider.slick('refresh');
      }
    });
  },
  tabBlockParent: function(){
    $(".parent-tab .nav-item").on('click',function(e){
      // alert('click');
      const tabEl = $(this).find('button[data-bs-toggle="tab"]');
      tabEl.on('shown.bs.tab', function (event) {
        const tabContentWrap = $(event.target).attr('data-bs-target');
        console.log('tabContentWrap:',tabContentWrap);
        const tabContent = $(tabContentWrap).find('.tab-content');


        var delay = 0.46;
        delay += 0.08;
        var timeText = '';
        timeText = delay.toFixed(2).toString();

        $(tabContentWrap).find('.nav-tabs').find(tabContent).removeClass('wow animated ');
        tabContent.find('.nav-tabs').find(tabContent).removeClass('wow animated ');

        $(tabContentWrap).find('.nav-tabs').addClass('animated fadeInUp duration-' + timeText.replace(/\./g, "-") + 's');
        tabContent.addClass('animated fadeInUpBig duration-0-46s');

      });
    });
  },
  fullImageTabSlider: function () {
    const tabEl = $('button[data-bs-toggle="tab"]');
    tabEl.on('shown.bs.tab', function (event) {
      const sliderContent = $(event.target).attr('data-bs-target');
      const subText = $(event.target).attr('data-text');

      const slider = $(sliderContent).find('.full-image-body-slider');
      $(slider).slick('unslick');
      $(slider).slick({
        variableWidth: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        swipeToSlide: true,
        arrows: false,
        autoplay: false,
        dots: false,
        infinite: true,
        autoplaySpeed: 3000
      });

      const slider2 = $(sliderContent).find('.threeColsSlider');
      $(slider2).slick('unslick');
      $(slider2).slick({
        variableWidth: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        swipeToSlide: true,
        arrows: false,
        autoplay: false,
        dots: false,
        infinite: true,
        autoplaySpeed: 3000,
        responsive: [
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 2,
              variableWidth: false,
              arrows: false,
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 1,
              variableWidth: false,
              arrows: false,
            }
          },
        ]
      });

      // $(slider).find('.slick-next').css('right', app.calculateLeftSpacing())
      // $(slider).find('.slick-prev').css({
      //   'right': app.calculateLeftSpacing() + 44,
      //   'left': 'auto'
      // })

    });
    $('.tab-slider').each(function () {
      $(this).slick({
        variableWidth: true,
        slidesToShow: 3,
        arrows: true,
        autoplay: true,
        dots: true,
        autoplaySpeed: 3000,
        responsive: [
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 1,
              variableWidth: false,
              arrows: false,
            }
          },
        ]
      });
    });
    $('.full-image-body-slider').each(function () {
      $(this).slick({
        variableWidth: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        swipeToSlide: true,
        arrows: false,
        autoplay: true,
        dots: false,
        infinite: true,
        autoplaySpeed: 5000
      });
    });
    $('.threeColsSlider').each(function () {
      $(this).slick({
        variableWidth: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        swipeToSlide: true,
        arrows: false,
        autoplay: true,
        dots: false,
        infinite: true,
        autoplaySpeed: 3000,
        responsive: [
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 2,
              variableWidth: false,
              arrows: false,
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 1,
              variableWidth: false,
              arrows: false,
            }
          },
        ]
      });
    });

    $('.vertical-accordion-slider-block .accordion .accordion-button').on('click', function (e)   {

      var sliderNo = $(e.target).attr('data-slider');

      var container = $(this).closest('.accordion-slider-block');
      var navCurrent = container.find('.accordion-slider-container[data-accordion="' + sliderNo + '"]');

      var delay = 0.46;
      delay += 0.08;
      var timeText = '';
      timeText = delay.toFixed(2).toString();

      container.find('.a-nimated-item').removeClass('wow animated ');
      navCurrent.addClass('animated fadeInUpBig duration-' + timeText.replace(/\./g, "-") + 's');
      // alert('added');
      navCurrent.find('.accordion-slider-items').slick('unslick');
      navCurrent.find('.accordion-slider-items.accordion-slider-cols').slick({
        variableWidth: false,
        slidesToShow: 3,
        speed: 500,
        arrows: true,
        autoplay: true,
        swipeToSlide: true,
        dots: true,
        autoplaySpeed: 3000,
        responsive: [
          {
            breakpoint: 767,
            settings: {
              autoplay: true,
              slidesToShow: 1,
              variableWidth: false,
            }
          },
        ]
      });

      container.find('.accordion-slider-container').removeClass('active').removeClass('is-open');
      navCurrent.addClass('active');
      setTimeout(function () {
        navCurrent.addClass('is-open');
      }, 200);
      app.iconHovering();
      // new WOW().init();
    });
  },
  tabSliderContent: function () {
    const tabEl = $('button[data-bs-toggle="tab"]');
    tabEl.on('shown.bs.tab', function (event) {
      const sliderContent = $(event.target).attr('data-bs-target');
      const subText = $(event.target).attr('data-text');
      const slider = $(sliderContent).find('.tab-slider');
      $(slider).slick('unslick');
      $(slider).slick({
        variableWidth: true,
        slidesToShow: 3,
        arrows: true,
        autoplay: false,
        dots: true,
        autoplaySpeed: 5000,
        responsive: [
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 1,
              variableWidth: false,
              arrows: false,
            }
          },
        ]
      });
      // $(slider).find('.slick-next').css('right', app.calculateLeftSpacing())
      // $(slider).find('.slick-prev').css({
      //   'right': app.calculateLeftSpacing() + 44,
      //   'left': 'auto'
      // })
      const storyComponent = $(this).closest('.tab-block');
      const nav = storyComponent.find('.tab-sub-mobile[data-slide]');
      const navCurrent = storyComponent.find('.tab-sub-mobile[data-slide="' + subText + '"]');
      nav.removeClass('current');
      navCurrent.addClass('current');

    });
    $('.tab-slider').each(function () {
      $(this).slick({
        variableWidth: true,
        slidesToShow: 3,
        arrows: true,
        autoplay: false,
        dots: true,
        autoplaySpeed: 5000,
        responsive: [
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 1,
              variableWidth: false,
              arrows: false,
            }
          },
        ]
      });
      // Calculate position dots and arrows
      // $(this).find('.slick-dots').css('padding-right', app.calculateLeftSpacing());
      // $(this).find('.slick-next').css('right', app.calculateLeftSpacing());
      // $(this).find('.slick-prev').css({
      //   'right': app.calculateLeftSpacing() + 44,
      //   'left': 'auto'
      // })
    });

    $(".slick-next").click(function (e) {
      const slider = $(this).closest('.tab-block');
      slider.find('.tab-slider').slick("slickNext");
    });
    $(".slick-prev").click(function (e) {
      const slider = $(this).closest('.tab-block');
      slider.find('.tab-slider').slick("slickPrev");
    });
  },
  tabSliderCalPadding: function () {
    var tabEl = $('button[data-bs-toggle="tab"]');
    tabEl.on('shown.bs.tab', function (event) {
      const sliderContent = $(event.target).attr('data-bs-target');
      const slider = $(sliderContent).find('.tab-slider');
      $(slider).find('.slick-next').css('right', app.calculateLeftSpacing())
      $(slider).find('.slick-prev').css({
        'right': app.calculateLeftSpacing() + 44,
        'left': 'auto'
      })

    });
    $('.tab-slider').each(function () {
      // Calculate position dots and arrows
      $(this).find('.slick-dots').css('padding-right', app.calculateLeftSpacing());
      $(this).find('.slick-next').css('right', app.calculateLeftSpacing());
      $(this).find('.slick-prev').css({
        'right': app.calculateLeftSpacing() + 44,
        'left': 'auto'
      })
    });
  },
  navVerticalCenter: function (){
    if($('.sliderCols').length )
    {
      $('.sliderCols').each(function(){
        var heightImg = $('.slider__image').outerHeight();
        const top = heightImg / 2;
        console.log('top: ', top);
        $(this).closest('.slider-container').find('.slick-arrow').css('top', top + "px");
      });
    }
  },
  slider: function () {
    $('.list-text-slider').slick({
      speed: 300,
      slidesToShow: 3,
      slidesToScroll:1,
      arrows: false,
      rows: false,
      swipeToSlide: true,
      autoplay: true,
      dots: false,
      autoplaySpeed: 3000,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        },
      ],
    });
    $('.kits-slider').slick({
      speed: 300,
      slidesToShow: 5,
      slidesToScroll: 5,
      arrows: false,
      rows: false,
      swipeToSlide: true,
      autoplay: false,
      dots: false,
      autoplaySpeed: 5000,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            variableWidth: true,
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            variableWidth: true,
          }
        },
      ],
    });
    $('.product-related-slider').slick({
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 3,
      arrows: false,
      rows: false,
      swipeToSlide: true,
      autoplay: false,
      dots: false,
      autoplaySpeed: 5000,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            variableWidth: true,
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            variableWidth: true,
          }
        },
      ],
    });
    $('.block-3-cols-slider').slick({
      speed: 1000,
      slidesToShow: 3,
      slidesToScroll: 3,
      arrows: false,
      rows: false,
      swipeToSlide: true,
      autoplay: true,
      dots: false,
      autoplaySpeed: 3000,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        },
      ],
    });
    $('.slider-block .block-4-cols-slider').slick({
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      arrows: false,
      rows: false,
      autoplay: true,
      swipeToSlide: true,
      dots: false,
      autoplaySpeed: 5000,
      responsive: [
        {
          breakpoint: 992,

          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            variableWidth: false,
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows: false,
            variableWidth: false,
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            variableWidth: false,
          }
        }
      ],
    });
    $('.sliderCols').each(function () {
      // var title = $(this).find('.slider__title').attr('class');
      // app.equalHeightByRow('.' + title);

      $(this).on('init', function(event, slick) {
        setTimeout(function () {
          var CurrentSlideDom = $(slick.$slider).find('.slick-current');
          CurrentSlideDom.addClass('current');
          // console.log(slick);
        },100);
        setTimeout(function () {
          app.navVerticalCenter();
        },1000);

      });
      $(this).slick({
        variableWidth: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        swipeToSlide: true,
        arrows: false,
        rows: false,
        autoplay: true,
        dots: true,
        cssEase: 'linear',
        autoplaySpeed: 3000,
        responsive: [
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 2,
              variableWidth: false,
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 1,
              variableWidth: false,
            }
          },
        ],
      }).on('setPosition', function (event, slick) {
        slick.$slides.css('height', slick.$slideTrack.height() + 'px');
      });

      $(this).on('afterChange', function (event, slick, currentSlide) {
        var slideNo = currentSlide + 1;
        var contentSliderBlock = $(this).closest('.content-slider');
        var nav = contentSliderBlock.find('.container-navigation li[data-slide]');
        var navCurrent = contentSliderBlock.find('.container-navigation li[data-slide="' + slideNo + '"]');
        nav.removeClass('slick-active');
        navCurrent.addClass('slick-active');
        $(currentSlide).addClass('slick-active');
        var CurrentSlideDom=$(slick.$slides.get(currentSlide));
        contentSliderBlock.find('.slick-slide').removeClass('current');
        CurrentSlideDom.addClass('current');
      });
    });

    $('.slider').each(function () {
      // var title = $(this).find('.slider__title').attr('class');
      // app.equalHeightByRow('.' + title);

      $(this).on('init', function(event, slick) {
        setTimeout(function () {
          var CurrentSlideDom = $(slick.$slider).find('.slick-current');
          CurrentSlideDom.addClass('current');
          console.log(slick);
        },100);
      });
      $(this).slick({
        variableWidth: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        swipeToSlide: true,
        arrows: false,
        rows: false,
        autoplay: false,
        dots: true,
        cssEase: 'linear',
        autoplaySpeed: 5000,
        responsive: [
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 1,
              variableWidth: false,
            }
          },
        ],
      }).on('setPosition', function (event, slick) {
        slick.$slides.css('height', slick.$slideTrack.height() + 'px');
      });

      $(this).on('afterChange', function (event, slick, currentSlide) {
        var slideNo = currentSlide + 1;
        var contentSliderBlock = $(this).closest('.content-slider');
        var nav = contentSliderBlock.find('.container-navigation li[data-slide]');
        var navCurrent = contentSliderBlock.find('.container-navigation li[data-slide="' + slideNo + '"]');
        nav.removeClass('slick-active');
        navCurrent.addClass('slick-active');
        $(currentSlide).addClass('slick-active');
        var CurrentSlideDom=$(slick.$slides.get(currentSlide));
        contentSliderBlock.find('.slick-slide').removeClass('current');
        CurrentSlideDom.addClass('current');
      });
    });

    $('.container-navigation li[data-slide]').click(function (e) {
      e.preventDefault();
      var slider = $(this).closest('.content-slider');
      var slideno = $(this).data('slide');
      slider.find('.slider').slick('slickGoTo', slideno - 1);
    });

    $('.content-slider-cols .container-navigation li[data-slide]').click(function (e) {
      e.preventDefault();
      var slider = $(this).closest('.content-slider');
      var slideno = $(this).data('slide');
      console.log('slideno: ', slideno);
      slider.find('.sliderCols').slick('slickGoTo', slideno - 1);
    });


    $(".slick-next").click(function (e) {
      var slider = $(this).closest('.content-slider');
      slider.find('.slider').slick("slickNext");
    });
    $(".slick-prev").click(function (e) {
      var slider = $(this).closest('.content-slider');
      slider.find('.slider').slick("slickPrev");
    });

    $(".content-slider-cols .slick-next").click(function (e) {
      var slider = $(this).closest('.content-slider');
      slider.find('.sliderCols').slick("slickNext");
    });
    $(".content-slider-cols .slick-prev").click(function (e) {
      var slider = $(this).closest('.content-slider');
      slider.find('.sliderCols').slick("slickPrev");
    });

    $('.team-members-slider').slick({
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: false,
      rows: false,
      swipeToSlide: true,
      autoplay: true,
      dots: false,
      autoplaySpeed: 3000,
      infinite: true,

      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 560,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        },
      ],
    });
    $(".text-media-block.has-content-slider .text-slider").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      speed: 1200,
      autoplaySpeed: 3000,
      rows: false,
    });
    $(".text-three-cols.three-cols-slider .text-slider").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        rows: false,
        autoplay: true,
        speed: 1200,
        autoplaySpeed: 2000,
        swipeToSlide: true,
        responsive: [
          {
            breakpoint: 1199,
            settings: {
              slidesToShow: 2,
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 1,
            }
          }
        ]
    });
  },
  accordionCalPadding: function () {
    $('.accordion-slider-items').each(function () {
      console.log('load');
      $(this).find('.slick-next').css('right', app.calculateLeftSpacing());
      $(this).find('.slick-prev').css({
        'right': app.calculateLeftSpacing() + 44,
        'left': 'auto'
      })
    });
    $('.accordion .accordion-button').on('click', function (e) {
      var sliderNo = $(this).attr('data-slider');
      var container = $(this).closest('.accordion-slider-block');
      var navCurrent = container.find('.accordion-slider-container[data-accordion="' + sliderNo + '"]');
      navCurrent.find('.accordion-slider-items').find('.slick-next').css('right', app.calculateLeftSpacing());
      navCurrent.find('.accordion-slider-items').find('.slick-prev').css({
        'right': app.calculateLeftSpacing() + 44,
        'left': 'auto'
      });
    })
  },

  accordionSlider: function () {
    $('.vertical-accordion-slider-block .accordion-slider-cols').each(function () {
      $(this).on('init', function(event, slick) {
        setTimeout(function () {
          const CurrentSlideDom = $(slick.$slider).find('.slick-current');
          CurrentSlideDom.addClass('current');
        },100);
      });
      $(this).slick({
        variableWidth: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        swipeToSlide: true,
        arrows: true,
        autoplay: true,
        dots: true,
        autoplaySpeed: 5000,
        responsive: [
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              variableWidth: false,
            }
          },
        ]
      });
      $(this).on('afterChange', function (event, slick, currentSlide) {
        const contentSliderBlock = $(this).closest('.accordion-slider-items');
        const CurrentSlideDom=$(slick.$slides.get(currentSlide));
        contentSliderBlock.find('.slick-slide').removeClass('current');
        CurrentSlideDom.addClass('current');
      });
    });

    $('.vertical-accordion-slider-block .accordion .accordion-button').on('click', function (e)   {

      var sliderNo = $(e.target).attr('data-slider');
      var container = $(this).closest('.accordion-slider-block');
      var navCurrent = container.find('.accordion-slider-container[data-accordion="' + sliderNo + '"]');
      navCurrent.find('.accordion-slider-items').slick('unslick');
      navCurrent.find('.accordion-slider-cols').slick({
        variableWidth: false,
        slidesToShow: 3,
        speed: 500,
        arrows: true,
        autoplay: true,
        swipeToSlide: true,
        dots: true,
        autoplaySpeed: 3000,
        infinite: true,
        responsive: [
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 1,
              autoplay: true,
              autoplaySpeed: 3000,
              variableWidth: false,
            }
          },
        ]
      });

      container.find('.accordion-slider-container').removeClass('active').removeClass('is-open');
      navCurrent.addClass('active');
      setTimeout(function () {
        navCurrent.addClass('is-open');
      }, 200);
      app.iconHovering();
      // new WOW().init();
    });
  },
  accordionSliderHorizontal: function () {
    $('.horizontal-accordion-slider-block:not(".accordion-slider-2-block") .accordion-slider-vertical').each(function () {
      $(this).on('init', function(event, slick) {
        setTimeout(function () {
          const CurrentSlideDom = $(slick.$slider).find('.slick-current');
          CurrentSlideDom.addClass('current');
        },100);
      });
      $(this).slick({
        variableWidth: true,
        slidesToScroll: 1,
        swipeToSlide: true,
        arrows: true,
        autoplay: true,
        dots: true,
        autoplaySpeed: 5000,
        responsive: [
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              variableWidth: false,
            }
          },
        ]
      });
      $(this).on('afterChange', function (event, slick, currentSlide) {
        const contentSliderBlock = $(this).closest('.accordion-slider-items');
        const CurrentSlideDom=$(slick.$slides.get(currentSlide));
        contentSliderBlock.find('.slick-slide').removeClass('current');
        CurrentSlideDom.addClass('current');
      });
    });

    $('.horizontal-accordion-slider-block:not(".accordion-slider-2-block") .accordion .accordion-button').on('click', function (e)   {
      console.log("this Horizontal: ", $(this));
      var sliderNo = $(this).attr('data-slider');
      console.log("sliderNo Horizontal: ", sliderNo);
      var container = $(this).closest('.accordion-slider-block');
      var navCurrent = container.find('.accordion-slider-container[data-accordion="' + sliderNo + '"]');
      navCurrent.find('.accordion-slider-items').slick('unslick');
      navCurrent.find('.accordion-slider-items.accordion-slider-vertical').slick({
        variableWidth: true,
        slidesToScroll: 1,
        swipeToSlide: true,
        arrows: true,
        autoplay: true,
        dots: true,
        autoplaySpeed: 5000,
        responsive: [
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              variableWidth: false,
            }
          },
        ]
      });

      container.find('.accordion-slider-container').removeClass('active').removeClass('is-open');
      navCurrent.addClass('active');
      setTimeout(function () {
        navCurrent.addClass('is-open');
      }, 200);
      app.iconHovering();
      // new WOW().init();
    });
  },
  accordionSliderHorizontal2: function () {
      $('.horizontal-accordion-slider-block.accordion-slider-2-block .accordion-slider-vertical').each(function () {
          $(this).on('init', function(event, slick) {
              setTimeout(function () {
                  const CurrentSlideDom = $(slick.$slider).find('.slick-current');
                  CurrentSlideDom.addClass('current');
              },100);
          });
          $(this).slick({
              variableWidth: false,
              speed: 300,
              slidesToShow: 3,
              slidesToScroll: 1,
              swipeToSlide: true,
              arrows: true,
              autoplay: true,
              dots: true,
              autoplaySpeed: 3000,
              responsive: [
                  {
                      breakpoint: 767,
                      settings: {
                        slidesToShow: 1,
                        autoplay: true,
                        autoplaySpeed: 3000,
                        slidesToScroll: 1,
                        variableWidth: false,
                        dots: true,
                        arrows: true,
                        pauseOnHover: false,
                        pauseOnFocus: false,
                        pauseOnDotsHover: false
                      }
                  },
              ]
          });
          $(this).on('touchstart', e => {
            $(this).slick('slickPlay');
          });

          $(this).on('afterChange', function (event, slick, currentSlide) {
              const contentSliderBlock = $(this).closest('.accordion-slider-items');
              const CurrentSlideDom=$(slick.$slides.get(currentSlide));
              contentSliderBlock.find('.slick-slide').removeClass('current');
              CurrentSlideDom.addClass('current');
          });
      });

      const tabEl = $('.horizontal-accordion-slider-block.accordion-slider-2-block button[data-bs-toggle="tab"]');
      tabEl.on('shown.bs.tab', function (event) {
        // alert('click');
        const sliderContent = $(event.target).attr('data-bs-target');
        console.log('sliderContent: ', sliderContent);
        const slider = $(sliderContent).find('.accordion-slider-items');
        console.log('Slider: ',slider);
        // $(slider).html('a');
        $(slider).slick('unslick');
        $(slider).slick({
          variableWidth: false,
          speed: 300,
          slidesToShow: 3,
          slidesToScroll: 1,
          swipeToSlide: true,
          arrows: false,
          autoplay: true,
          dots: false,
          infinite: true,
          autoplaySpeed: 3000,
          responsive: [
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                slidesToScroll: 1,
                variableWidth: false,
                dots: true,
                arrows: true,
                pauseOnHover: false,
                pauseOnFocus: false,
                pauseOnDotsHover: false
              }
            },
          ]
        });
        $(slider).on('touchstart', e => {
          $(slider).slick('slickPlay');
        });
      });


  },
  ourStorySlider: function () {
    const sliderStory = $('.story');
    sliderStory.slick({
      slidesToShow: 1,
      arrows: false,
      swipeToSlide: true,
      autoplay: false,
      dots: false,
      fade:true,
      cssEase: 'linear',
      appendDots: $(".story-nav"),
    });
    sliderStory.on('afterChange', function (event, slick, currentSlide) {
      var slideNo = currentSlide + 1;
      var storyComponent = $(this).closest('.our-stories');
      var nav = storyComponent.find('li[data-slide]');
      var navCurrent = storyComponent.find('li[data-slide="' + slideNo + '"]');
      nav.removeClass('current');
      navCurrent.addClass('current');
    });
    $('.story-nav li[data-slide]').click(function (e) {
      e.preventDefault();
      console.log('click menu left');
      var slider = $(this).closest('.our-stories');
      var slideno = $(this).data('slide');
      slider.find('.story').slick('slickGoTo', slideno - 1);
      app.ourStories();

    });
  },
  equalHeightByRow: function (obj, notRunMobile) {
    let widthTarget = 0;
    if ($(obj).length) {
      $(obj).height('auto');
      widthTarget = notRunMobile === true ? 768 : 0;
      if ($(window).width() >= widthTarget) {
        var currentTallest = 0,
            currentRowStart = 0,
            rowDivs = [],
            currentDiv = 0,
            $el,
            topPosition = 0;
        $(obj).each(function () {
          if ($(this).is(':visible') === true) {
            $el = $(this);
            topPosition = $el.offset().top;
            if (currentRowStart !== topPosition) {
              for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
                rowDivs[currentDiv].innerHeight(currentTallest);
              }
              rowDivs = [];
              currentRowStart = topPosition;
              currentTallest = $el.innerHeight();
              rowDivs.push($el);
            } else {
              rowDivs.push($el);
              currentTallest = currentTallest < $el.innerHeight() ? $el.innerHeight() : currentTallest;
            }
            for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
              rowDivs[currentDiv].innerHeight(currentTallest);
            }
          }
        });
      }
    }
  },
  partnerSlider: function () {
    const partners = $('.partners');
    partners.slick({
      slidesToShow: 1,
      swipeToSlide: true,
      arrows: false,
      autoplay: false,
      dots: false,
      appendDots: $(".partner-nav"),
    });
    partners.on('afterChange', function (event, slick, currentSlide,) {
      var slideNo = currentSlide + 1;
      var partnerComponent = $(this).closest('.partner-block');
      var nav = partnerComponent.find('li[data-slide]');
      var navLogo = partnerComponent.find('.partner-nav-top li[data-logo]');
      var navCurrent = partnerComponent.find('li[data-slide="' + slideNo + '"]');
      var navLogoCurrent = partnerComponent.find('.partner-nav-top li[data-logo="' + slideNo + '"]');
      var partners = partnerComponent.find('.partner-info__item[data-item]');
      var currentPartner = partnerComponent.find('.partner-info__item[data-item="' + slideNo + '"]');
      partners.removeClass('active');
      currentPartner.addClass('active');
      nav.removeClass('active');
      navLogo.removeClass('active');
      navCurrent.addClass('active');
      navLogoCurrent.addClass('active');
    });
    $('.partner-nav li[data-slide]').click(function (e) {
      e.preventDefault();
      var slider = $(this).closest('.partner-block');
      var slideNo = $(this).data('slide');
      var partners = slider.find('.partner-info__item[data-item]');
      var currentPartner = slider.find('.partner-info__item[data-item="' + slideNo + '"]');
      partners.removeClass('active');
      currentPartner.addClass('active');
      slider.find('.partners').slick('slickGoTo', slideNo - 1);
    });
  },
  sticky: function () {
    const sticky = $('.app-header'),
        scroll = $(window).scrollTop();

    if (scroll >= 10) sticky.addClass('sticky');
    else sticky.removeClass('sticky');
  },
  animation: function () {
    $('.app-popover').each(function (index, element) {
      const parallax = new Parallax(element);
    })
  },
  faqs: function(){
    var oldItem = '';
    console.log('oldItem before Click ', oldItem);
    $('.faqs-block .accordion .accordion-header').click(function(){
      var isOpen = $(this).find('.accordion-button').attr('aria-expanded');
      var newItem = $(this).find('.accordion-button').attr('data-bs-target');
      var itemFaq = $(this).closest('.accordion-item');
      console.log('isOpen: ', isOpen, '/ oldItem ', oldItem);
      if(oldItem === newItem){
        console.log('same');
        if(isOpen){
          itemFaq.find('.accordion-collapse').removeClass('show');
          itemFaq.find('.accordion-button').addClass('collapsed');
          itemFaq.find('.accordion-button').attr('aria-expanded', false);
        }
      }else{
        oldItem = newItem;
        console.log('oldItem was updated:', oldItem);
      }
      // curItem = openItem;
      //



      // else{
      //   itemFaq.find('.accordion-collapse').addClass('show');
      //   itemFaq.find('.accordion-button').removeClass('collapsed');
      //   itemFaq.find('.accordion-button').attr('aria-expanded', true);
      // }

    })
  }
};

$(document).ready(function () {
  new WOW().init();
  $( 'select' ).select2( {
    theme: 'bootstrap-5'
  } );
  app.init();
  $(window).scroll(function () {
    app.sticky();
  });
  $(window).bind("load", function() {
    app.sticky();
  });

  $(window).on("resize", function () {
    app.calPaddingLeft('.container-slider');
    app.tabSliderCalPadding();
    app.iconHovering();
    // app.tabAction();
    app.accordionCalPadding();
    // app.calPaddingLeft('.tab-block .tab-content');
    // app.calPaddingLeft('.text-media-block .flex-row-reverse .content-box');
    app.calPaddingLeft('.text-media-block:first-child .content-box');
    app.equalHeightByRow('.card-3-cols-block.secondary .content');
    app.equalHeightByRow('.product-related-item');
    app.navVerticalCenter();
    // app.equalHeightByRow('.block-4-cols .card');
    $('.slider').each(function () {
      // var title = $(this).find('.slider__title').attr('class');
      // app.equalHeightByRow('.' + title);
    })
  }).resize();



  $(document).on('click','#checkout_apply_coupon', function(e) {
    // Get the coupon code
    var code = $( '#checkout_coupon_code').val();
    if(code.length === 0 ){
      e.preventDefault();
      $('.discount-error').html( 'Input is required' );
      $('.discount-error').removeClass('d-none');
    }else{
      $('.discount-error').addClass('d-none');
    }
    var button = $( this );

    var discount_btn_value = $(this).text();
    if(discount_btn_value === 'Remove'){

      let data = {
        action: 'ql_woocommerce_ajax_remove_coupon',
        coupon_code: code
      };

      $.ajax({
        type: 'post',
        url: wc_add_to_cart_params.ajax_url,
        data: data,
        beforeSend: function (response) {
          button.addClass('loading');
        },
        complete: function (response) {
          button.removeClass('loading');
        },
        success: function (response) {
          if( typeof response.errors !== 'undefined' ) {
            $('.discount-error').removeClass('d-none');
            $('.discount-error').html( response.error);
          } else {
            button.html( 'Apply');
            $('.discount-value').html('$0');
            $('#total-value').html('$'+response.cart_value);
            $('#checkout_coupon_code').val('');
          }
        },
      });

    }else{

      let data = {
        action: 'ql_woocommerce_ajax_apply_coupon',
        coupon_code: code
      };

      $.ajax({
        type: 'post',
        url: wc_add_to_cart_params.ajax_url,
        data: data,
        beforeSend: function (response) {
          button.addClass('loading');
        },
        complete: function (response) {
          button.removeClass('loading');
        },
        success: function (response) {
          if( typeof response.errors !== 'undefined' ) {
            $('.discount-error').html( response.errors.invalid_coupon[0] );
            $('.discount-error').removeClass('d-none');
            button.html( 'Apply');
          } else {
            button.html( 'Remove');
            $( '.discount-error' ).addClass('d-none');
            $('.discount-value').html('$' + response.coupon_amount);
            let sub = $('#right-sub-total').val();
            $('#total-value').html('$'+response.cart_discount);
          }
        },
      });
    }
  });

  // Limit input number
  $('.quantity-input').keypress(function (e) {
    var charCode = (e.which) ? e.which : event.keyCode
    if (String.fromCharCode(charCode).match(/[^0-9]/g))
      return false;
  });

  $('#understand_use_cookie').on('click', function () {
    Cookies.set('CookieConsent', true);
    $('.sticky-footer').hide();
  });

  $('.wpcf7-submit').on('click', function () {
    $('.wpcf7-response-output').delay(5000).fadeOut('slow');
  });
});
