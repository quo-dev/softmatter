<?php
/**
 * Template Name: Page Platform
 * Description: Page template Platform
 * Application
 *
 */

get_header();
$img = get_template_directory_uri().'/assets/images';
?>
<main class="main">
    <!-- 0 : Hero block -->
    <section class="tpl-block text-media-block image bg-mint"><!-- Option: .bg-chalk/.bg-mint/.bg-dush; .image | .video  -->
        <div class="background">
            <div class="image"><img src="<?php echo $img ?>/bg-12.jpg" alt="Industry Focused Innovation"></div>
        </div>
        <div class="container-fluid g-0">
            <div class="row g-0 align-items-stretch">
                <!-- Option: Image -->
                <div class="col-lg-6 image-col order-lg-2"><!-- Option: .full-height (when the content is too long) -->
                    <div class="image image-zoomin-effect"><!-- Default 1x1 | .size-4x3 -->
                        <img class="img" src="<?php echo $img ?>/Platform/1.jpg" alt="Consumer Health &amp; Wellness">
                    </div>
                </div>

                <div class="col-lg-6 content-col">
                    <div class="content-box" ><!-- Option: .text-white -->
                        <h1 class="h2 title wow bounceInUp" data-wow-duration="1s" data-wow-offset="10">Integrating the soft with the smart</h1>
                        <div class="content wow bounceInUp" data-wow-duration="1.1s" data-wow-offset="10" >
                            <p>Multifunctional interactive smart textiles that improve they way we live</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 1 : Title block -->
  <section class="tpl-block title-block bg-chalk">
    <div class="container">
      <h3 class="sub-title wow fadeInUp" data-wow-duration="1.8s" data-wow-offset="100" >PATENTED TECHNOLOGY PLATFORMS</h3>
      <h2 class="heading-title heading-title-sm  wow fadeInUp" data-wow-duration="1.8s" data-wow-offset="100">Powering Soft Seamless Integrations</h2>
      <div class="desc wow fadeInUp" data-wow-duration="1.8s" data-wow-offset="100" >
        <p>
          With technology incorporated at a yarn level, our smart textiles are poised to fuel the impending wearable technology revolution. Our solutions leverage a range of technology platforms that are multifaceted, fully customizable, and extensively tested.
        </p>
      </div>
    </div>
  </section>
    <!-- 2 : Title block -->
  <section class="tpl-block title-block bg-dush">
    <div class="container">
      <h3 class="sub-title wow fadeInUp" data-wow-duration="1.8s" data-wow-offset="100" >THE TECHNOLOGY</h3>
      <h2 class="heading-title  wow fadeInUp" data-wow-duration="1.8s" data-wow-offset="100">Platforms</h2>
    </div>
  </section>
    <!-- 3 : Tab block block -->
  <section class="tpl-block tab-block bg-dush" >
    <div class="container">
          <ul class="nav nav-tabs  wow fadeIn"  data-wow-offset="10" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab-1" data-text="1" type="button" role="tab">
                <div class="icon">
                  <img class="tab-icon" src="https://softmatter.project-staging.com/wp-content/uploads/2022/03/tab-1.svg" alt="">
                  <img class=" tab-icon tab-icon-active" src="https://softmatter.project-staging.com/wp-content/uploads/2022/03/tab-1-green.svg" alt="">
                </div>
                <div  class="tab-title" >Textile engineering</div>
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link"  data-bs-toggle="tab" data-bs-target="#tab-2" data-text="2" type="button" role="tab" >
                <div class="icon">
                  <img class="tab-icon" src="https://softmatter.project-staging.com/wp-content/uploads/2022/03/tab-2.svg" alt="">
                  <img class=" tab-icon tab-icon-active" src="https://softmatter.project-staging.com/wp-content/uploads/2022/03/tab-2-green.svg" alt="">
                </div>
                <div  class="tab-title">Integrated technologies</div>
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link"  data-bs-toggle="tab" data-bs-target="#tab-3" data-text="3" type="button" role="tab">
                <div class="icon">
                  <img class="tab-icon" src="https://softmatter.project-staging.com/wp-content/uploads/2022/03/tab-3.svg" alt="">
                  <img class=" tab-icon tab-icon-active" src="https://softmatter.project-staging.com/wp-content/uploads/2022/03/tab-3-green.svg" alt="">
                </div>
                <div  class="tab-title">Advanced materials</div>
              </button>
            </li>
          </ul>
        <div class="tab-content" >
            <div class="tab-pane fade show active" id="tab-1" >
                <div class="row">
                    <div class="col-md-6 image">
                        <img src="<?php echo $img?>/card-img-6.jpg"/>
                    </div>
                    <div class="col-md-6 text">
                        <div class="text-in">
                            <div class="sub-title">PASSIVE TECHNOLOGY</div>
                            <h2 class="title h3">Powering Soft Textile Integration</h2>
                            <div class="paragraph">
                              <p>Technologies centered around the creation of soft structures, foam injection, and complex fabrics. These technologies are used as a base for numerous life-enhancing products.</p>
                            </div>
                            <a href="/textile-engineering" class="btn btn-light">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-2" >
                <div class="row">
                    <div class="col-md-6 image">
                        <img src="<?php echo $img?>/card-img-7.jpg"/>
                    </div>
                    <div class="col-md-6 text">
                        <div class="text-in" >
                            <div class="sub-title">PASSIVE TECHNOLOGY</div>
                            <h2 class="title h3">Integrated Technologies</h2>
                            <div class="paragraph">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, amet aspernatur blanditiis consequuntur corporis debitis dignissimos distinctio doloremque ducimus ex fugit illum minus non optio quam qui quisquam repellat, reprehenderit.</p>
                            </div>
                            <a href="/integrated-technologies" class="btn btn-light">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-3">
                <div class="row">
                    <div class="col-md-6 image">
                        <img src="<?php echo $img?>/card-img-8.jpg"/>
                    </div>
                    <div class="col-md-6 text">
                        <div class="text-in" >
                            <div class="sub-title">PASSIVE TECHNOLOGY</div>
                            <h2 class="title h3">Elevated circuitry and materiality</h2>
                          <div class="paragraph">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, amet aspernatur blanditiis consequuntur corporis debitis dignissimos distinctio doloremque ducimus ex fugit illum minus non optio quam qui quisquam repellat, reprehenderit.</p>
                          </div>
                            <a href="/advanced-material" class="btn btn-light">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
    <!-- 3 : Title block -->
  <div class="tpl-block title-block bg-dush title-block-align-left">
    <div class="container">
      <h3 class="sub-title wow fadeInUp" data-wow-duration="1.8s" data-wow-offset="100" >EXPLORE PLATFORMS</h3>
      <h2 class="heading-title heading-title-sm  wow fadeInUp" data-wow-duration="1.8s" data-wow-offset="100">Technology Woven In</h2>
      <div class="desc wow fadeInUp" data-wow-duration="1.8s" data-wow-offset="100">
        <p>
          We believe that a future of smart textiles is inevitable, and the effective application of our technologies will result in the creation of products that change the way humanity lives and behaves.
        </p>
      </div>
    </div>
  </div>
  <!--option background color class name is :  bg-chalk, bg-mint, bg-dush-->
  <div class="tpl-block accordion-slider-block accordion-slider-block-secondary bg-dush pt-0 position-relative">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <!-- ID of accordion should be dynamic-->
          <div class="accordion wow bounceInUp p-0"  data-wow-offset="10" id="accordion1234">
            <div class="accordion-item">
              <h3 class="accordion-header" >
                <button class="accordion-button  btn-icon" type="button" data-slider="1" data-bs-toggle="collapse" data-bs-target="#accordion-body-1" aria-expanded="true" >
                  <div class="icon-img">
                    <img class="tab-icon" src="https://softmatter.project-staging.com/wp-content/uploads/2022/03/tab-1.svg" alt="">
                    <img class=" tab-icon tab-icon-active" src="https://softmatter.project-staging.com/wp-content/uploads/2022/03/tab-1-green.svg" alt="">
                  </div>
                  Textile Engineering
                </button>
              </h3>
              <div id="accordion-body-1" class="accordion-collapse collapse show"  data-bs-parent="#accordion1234" >
              </div>
            </div>
            <div class="accordion-item">
              <h3 class="accordion-header" >
                <button class="accordion-button  btn-icon collapsed" data-slider="2" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-body-2" aria-expanded="false" >
                  <div class="icon-img">
                    <img class="tab-icon" src="https://softmatter.project-staging.com/wp-content/uploads/2022/03/tab-2.svg" alt="">
                    <img class=" tab-icon tab-icon-active" src="https://softmatter.project-staging.com/wp-content/uploads/2022/03/tab-2-green.svg" alt="">
                  </div>
                  Integrated Technologies
                </button>
              </h3>
              <div id="accordion-body-2" class="accordion-collapse collapse"  data-bs-parent="#accordion1234" >
              </div>
            </div>
            <div class="accordion-item">
              <h3 class="accordion-header" >
                <button class="accordion-button btn-icon collapsed"  data-slider="3" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-body-3" aria-expanded="false" >
                  <div class="icon-img">
                    <img class="tab-icon" src="https://softmatter.project-staging.com/wp-content/uploads/2022/03/tab-3.svg" alt="">
                    <img class=" tab-icon tab-icon-active" src="https://softmatter.project-staging.com/wp-content/uploads/2022/03/tab-3-green.svg" alt="">
                  </div>
                  Advanced materials
                </button>
              </h3>
              <div id="accordion-body-3" class="accordion-collapse collapse"  data-bs-parent="#accordion1234">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-slider-right">
      <div class="accordion-slider">
        <div data-accordion="1" class="accordion-slider-container active is-open">
          <div class="accordion-slider-items">
            <div class="tab-slider-item">
              <div class="tab-slider__image position-relative ">
                <a href="" class="image image-zoomin-effect">
                  <img src="<?php echo $img?>/Platform/engineered-knit.jpg" alt="" />
                </a>
              </div>
              <div class="tab-slider__body"  >
                <div class="tab-slider__title h4">Engineered Knit</div>
                <div class="tab-slider__text">
                  Leveraging Flat, Circular, and Warp knitting techniques to create complex structures, designs, and modulus.
                </div>
              </div>
            </div>
            <div class="tab-slider-item">
              <div class="tab-slider__image position-relative ">
                <a href="" class="image image-zoomin-effect">
                    <img src="<?php echo $img?>/Platform/Narrow-Width.jpg" alt="" />
                </a>
              </div>
              <div class="tab-slider__body"  >
                <div class="tab-slider__title h4">Narrow Width Fabric</div>
                <div class="tab-slider__text">Elasticated fabrics and elastomeric yarns engineered to achieve stretch and durability, as well as support complex design and construction.</div>
              </div>
            </div>
            <div class="tab-slider-item">
              <div class="tab-slider__image image image-zoomin-effect">
                  <img src="<?php echo $img?>/Platform/s-2.png" alt="" />
              </div>
              <div class="tab-slider__body"  >
                <div class="tab-slider__title h4">Injection molding</div>
                <div class="tab-slider__text">A revolutionary form and padding technology for impact protection and the encasing of electronics
                </div>
              </div>
            </div>

          </div>
        </div>
        <div data-accordion="2" class="accordion-slider-container">
          <div class="accordion-slider-items">
            <div class="tab-slider-item">
              <div class="tab-slider__image position-relative ">
                <a href="" class="image image-zoomin-effect">
                  <img src="<?php echo $img?>/Platform/Visbility.jpg" alt="" />
                </a>
              </div>
              <div class="tab-slider__body"  >
                <div class="tab-slider__title h4">Visibility</div>
                <div class="tab-slider__text">
                    Next-to-skin LED lighting with RGB capabilities, providing on-demand illumination for safety and visibility
                </div>
              </div>
            </div>
            <div class="tab-slider-item">
              <div class="tab-slider__image position-relative ">
                <a href="" class="image image-zoomin-effect">
                  <img src="https://softmatter.project-staging.com/wp-content/uploads/2022/03/s-5.png" alt="" />
                </a>
              </div>
              <div class="tab-slider__body"  >
                <div class="tab-slider__title h4">Thermal regulation</div>
                <div class="tab-slider__text">Elasticated fabrics and elastomeric yarns engineered to achieve stretch and durability, as well as support complex design and construction.</div>
              </div>
            </div>
            <div class="tab-slider-item">
              <div class="tab-slider__image image image-zoomin-effect">
                <img src="<?php echo $img?>/Platform/sensing.jpg" alt="" />
              </div>
              <div class="tab-slider__body"  >
                <div class="tab-slider__title h4">Sensing</div>
                <div class="tab-slider__text">Seamlessly integrated biopotential and biomechanical sensors that collect biometric data such as motion and heartrate
                </div>
              </div>
            </div>
          </div>
        </div>
        <div data-accordion="3" class="accordion-slider-container ">
          <div class="accordion-slider-items">
            <div class="tab-slider-item">
              <div class="tab-slider__image position-relative ">
                <a href="" class="image image-zoomin-effect">
                  <img src="<?php echo $img?>/Platform/Data.jpg" alt="" />
                </a>
              </div>
              <div class="tab-slider__body"  >
                <div class="tab-slider__title h4">Complex materials</div>
                <div class="tab-slider__text">
                    Mélange fabric and complex compositions
                </div>
              </div>
            </div>
            <div class="tab-slider-item">
              <div class="tab-slider__image position-relative ">
                <a href="" class="image image-zoomin-effect">
                  <img src="https://softmatter.project-staging.com/wp-content/uploads/2022/03/s-2.png" alt="" />
                </a>
              </div>
              <div class="tab-slider__body"  >
                <div class="tab-slider__title h4">Biomaterials</div>
                <div class="tab-slider__text">Organic, recycled, natural and sustainably sourced materials developed in partnership across the supply chain</div>
              </div>
            </div>
            <div class="tab-slider-item">
              <div class="tab-slider__image image image-zoomin-effect">
                <img src="https://softmatter.project-staging.com/wp-content/uploads/2022/03/s-3.png" alt="" />
              </div>
              <div class="tab-slider__body"  >
                <div class="tab-slider__title h4">Surface modifications</div>
                <div class="tab-slider__text">Enhancing durability and limiting environmental damage
                </div>
              </div>
            </div>
              <div class="tab-slider-item">
                  <div class="tab-slider__image image image-zoomin-effect">
                      <img src="https://softmatter.project-staging.com/wp-content/uploads/2022/03/s-4.png" alt="" />
                  </div>
                  <div class="tab-slider__body"  >
                      <div class="tab-slider__title h4">Finishes</div>
                      <div class="tab-slider__text">Precision, bonding, lamination and encapsulations
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- 4: TEXT MEDIA BLOCK: text-media-block.php
        Case options:
        1. Background Block: White | Yellow Light
        2. Image + Video Column: Left | Right;
        3. Button in content col
        4. Is Hero Banner (First block in Application page)
        5. Set full height for Image & Video when the content is too long (Application page)
     -->
    <!--option background color class name is :  bg-chalk, bg-mint, bg-dush-->
    <!-- CASE: IMAGE LEFT (default) -->
    <section class="tpl-block text-media-block bg-chalk"><!-- Option: .bg-chalk; .image | .video  -->
        <div class="container-fluid g-0">
            <div class="row g-0">
                <!-- Option: Image -->
                <div class="col-lg-6 image-col">
                    <div class="image image-zoomin-effect size-4x3"><!-- Option: Default 1x1 | .size-4x3 -->
                        <img src="<?php echo $img ?>/Tech-1.jpg" alt="Consumer Health & Wellness">
                    </div>
                </div>
                <!-- Option: Video -->
                <!--        <div class="col-lg-6 video-col">-->
                <!--            <div class="video-wrap size-4x3">-->
                <!--                <video width="400" autoplay muted loop>-->
                <!--                    <source src="--><?php //echo $img ?><!--/BrandTexture.mov" type="video/mp4">-->
                <!--                </video>-->
                <!--            </div>-->
                <!--        </div>-->
                <div class="col-lg-6 content-col wow fadeInUpBig" data-wow-duration="1.8s">
                    <div class="content-box">
                        <h3 class="sub-title">WHAT’S NEXT?</h3>
                        <h3 class="title">Technologies in Development</h3>
                        <div class="content">
                            <h4>Active Cooling</h4>
                            <p>Leveraging the power of thermo-electric cooling to battle extreme weather conditions and manage pain.</p>
                            <br/>
                            <h4>NFC & RFID</h4>
                            <p>Lifecycle Traceability</p>
                        </div>
                        <a href="#" class="btn btn-success">Request Information</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CASE: IMAGE RIGHT -->
    <section class="tpl-block text-media-block bg-chalk image image-right"><!-- Add class .image-right -->
        <div class="container-fluid g-0">
            <div class="row g-0 flex-row-reverse"><!-- Option: .flex-row-reverse -->
                <div class="col-lg-6 image-col image-to-text bg-dush">
                    <div class="content-box">
                        <ul class="ul ul-config">
                            <li>
                                <span>Surface modifications & finishes</span>
                            </li>
                            <li>
                                <span>Interconnects</span>
                            </li>
                            <li>
                                <span>Embedded Electronics</span>
                            </li>
                            <li>
                                <span>Textile Engineering</span>
                            </li>
                        </ul>
                    </div>
                </div><!-- Option: .image-to-text / bg-chalk, bg-mint, bg-dush  -->
                <div class="col-lg-6 content-col wow fadeInUpBig" data-wow-duration="1.8s" >
                    <div class="content-box">
                        <h3 class="title">Configuring Product Applications</h3>
                        <div class="content">
                            <p>Capabilitles across the entire product configuration application</p>
                        </div>
                        <a href="#" class="btn btn-success">Request Information</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CASE: IMAGE LEFT -->
    <section class="tpl-block text-media-block bg-chalk image"><!-- Option: .bg-chalk; .image | .video  -->
        <div class="container-fluid g-0">
            <div class="row g-0 align-items-stretch">
                <!-- Option: Image -->
                <div class="col-lg-6 image-col full-height"><!-- Option: .full-height (when the content is too long) -->
                    <div class="image image-zoomin-effect"><!-- Default 1x1 | .size-4x3 -->
                        <img src="<?php echo $img ?>/how-to-get-start-green.jpg" alt="Consumer Health & Wellness">
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
                <!--                    <source src="--><?php //echo $img ?><!--/BrandTexture.mov" type="video/mp4">-->
                <!--                </video>-->
                <!--            </div>-->
                <!--        </div>-->
                <div class="col-lg-6 content-col">
                    <div class="content-box text-center">
                        <h2 class="title wow fadeInUp" data-wow-duration="1.5s" data-wow-offset="10">Connect with Us</h2>
                        <div class="content wow fadeInUp" data-wow-duration="1.5s" data-wow-offset="10">
                            <p>At Softmatter, our dynamic team has industry-leading expertise in smart textiles, from design to manufacture. We help you strategically enhance your offering so that it has a profound, global impact.</p>
                            <br/>
                            <p class="f-24">
                                Interested in enabling your idea?
                            </p>
                        </div>
                        <a href="#" class="btn btn-success wow pulse"  data-wow-offset="10">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>


