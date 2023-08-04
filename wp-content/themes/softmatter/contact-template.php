<?php
/**
 * Template Name: Page Contact
 * Description: Page template purchase
 * Application
 *
 */

get_header();
$img = get_template_directory_uri().'/assets/images';
?>
<main class="main">
    <section class="tpl-block text-media-block image bg-dush contact-block">
        <div class="background">
          <div class="image"><img src="<?php echo $img ?>/bg-11.jpg" alt="Industry Focused Innovation"></div>
        </div>
        <div class="container">
          <div class="row g-0 align-items-stretch">
            <!-- Option: Image -->
            <div class="col-lg-6 content-col">
              <div class="content-box" ><!-- Option: .text-white -->
                <h1 class="title wow fadeInUpBig" data-wow-duration="1s" data-wow-offset="10">Interested in enabling your idea?</h1>
                <div class="content wow fadeInUpBig" data-wow-duration="1s" data-wow-offset="10" >
                  <p>At Softmatter, our dynamic team has industry-leading expertise in smart textiles and wearables - from design to manufacture. We help you strategically enhance your offering so that it has a profound, global impact.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-6 form-col d-flex align-items-center"><!-- Option: .full-height (when the content is too long) -->
                <div class="group-fields pb-0 wow fadeInRightBig" data-wow-duration="1s" data-wow-offset="10">
                    <div class="f-24 mb-4">Contact us</div>
                    <div class="row">
                      <div class="form-group col-md-12 mb-4">
                        <input type="text" name="name" value="" class="form-control form-control-white" placeholder="Name" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12 mb-4">
                        <input type="text" name="email" value="" class="form-control form-control-white " placeholder="Email" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12 mb-4">
                        <textarea class="form-control form-control-white textarea" placeholder="Message"></textarea>
                      </div>
                    </div>
                    <div class="f-14 mb-4">
                      <label class="checkbox">
                        <input type="checkbox" name="email_subscribe" class="me-2" >
                        <span class="ck"></span>
                        <span class="opacity-50">
                         I accept the terms and conditions and acknowledge that my information will be used in accordance with <a href="#" class="text-green text-decoration-none" target="_blank">Softmatter Policy</a>.
                        </span>
                      </label>
                    </div>
                    <div class="">
                        <a href="#" class="btn btn-success mt-0">Send</a>
                    </div>
                  </div>
            </div>

          </div>
        </div>
      </section>

      <section class="tpl-block bg-chalk drop-by-section">
           <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="drop-item">
                        <h3 class="title mb-3">Drop by</h3>
                        <p class="mb-0 f-16">50 Foster Lane, Colombo 10, Sri Lanka</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="drop-item">
                        <h3 class="title mb-3">Drop us a note</h3>
                        <a href="mailto:softmatter@masholdings.com" class="mb-0 f-16 text-decoration-none">softmatter@masholdings.com</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="drop-item last-drop-item">
                        <h3 class="title mb-3">Find us on</h3>
                        <ul class="ul-share">
                            <li>
                                <a href="#" target="_blank">
                                    <i class="icon-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="icon-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="icon-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


           </div>
      </section>

</main>
<?php get_footer(); ?>


