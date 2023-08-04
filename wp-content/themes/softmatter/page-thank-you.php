<?php
/**
 * Template Name: Page Thank You
 * Description: Page template Thank You
 * Application
 *
 */

get_header();
$img = get_template_directory_uri().'/assets/images';
$order_id = WC()->session->get( 'order_id' );
?>

<main class="main bg-dark page-content shopping-cart">
  <section class="confirm-payment text-white">
    <div class="container ">
      <div class="text-center mt-5  pt-md-5 shop-logo">
        <a href="/">
          <img src="<?php echo $img?>/logo-white.svg" class="logo-white" alt="Softmatter">
        </a>
      </div>

      <div class="row justify-content-center text-center full-content">
        <div class="col-lg-10">
          <div class="thank-you">
            <div class="f-24 mb-20">Thank you for your Purchase!</div>
            <div class="h3 text-green mb-20">Confirmation Number #<?php echo $order_id ?></div>
            <div class="f-18 mb-5 pb-4">An email has been sent with your reciept <br/> together with your invoice.</div>
            <a href="/" class="btn btn-success">Back to site</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php
WC()->session->set( 'order_id', ''); 
get_footer(); 
?>


