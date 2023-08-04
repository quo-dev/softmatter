<?php
/**
 * Template Name: Page Application
 * Description: Page template Application
 * Application
 *
 */

get_header();
$img = get_template_directory_uri().'/assets/images';
?>

<main class="main">
    <!-- 1 : Hero
    Options :
        1. Background : image / video
        2. Type: full screen / two cols
            2.1: Full screen
            2.2: Two cols : add class '.two-cols'
                - Background type: bg-dush / bg-salmon / bg-chalk
    -->
    <section class="hero two-cols bg-dush">
        <div class="hero__item">
            <div class="hero__media">
                <!-- image for desktop-->
                <img src="<?php echo $img ?>/Home/1.jpg" class="d-none d-sm-block"/>
                <!-- image for mobile-->
                <img src="<?php echo $img ?>/Home/1.jpg" class="d-block d-sm-none"/>
                <!-- Background Video For Desktop and Mobile is show image -->
                <video class="video-cover" autoplay="" muted="" loop="" playsinline="">
                    <source src="<?php echo $img ?>/hero-video.mp4">
                </video>
            </div>
            <div class="d-flex text-right-image">
                <div class="container hero__container">
                    <div class="hero__text">
                        <h1 class="wow fadeInUpBig" data-wow-duration="1s" data-wow-offset="10">Next-to-skin<br/>
                            wearable Innovations</h1>
                        <p class="wow fadeInUpBig" data-wow-duration="1.25s" data-wow-offset="10">
                            From Creation to Delivery
                        </p>
                    </div>
                </div>
                <div class="hero__right-media">
                    <!-- image for desktop-->
                    <img src="<?php echo $img ?>/right-banner.png" class="d-none d-sm-block"/>
                    <!-- image for mobile-->
                    <img src="<?php echo $img ?>/right-banner.png" class="d-block d-sm-none"/>
                </div>
            </div>
        </div>
    </section>
    <!-- 2 -->

  <section class="tpl-block title-block bg-chalk">
    <div class="container"  >
      <h3 class="sub-title wow fadeInUpBig" data-wow-duration="1s" data-wow-offset="10">NO MORE HARDCASES</h3>
      <h2 class="heading-title heading-title-sm wow fadeInUpBig" data-wow-duration="1.5s" data-wow-offset="10">Enabling Softer Solutions</h2>
      <div class="desc wow fadeInUpBig" data-wow-duration="2s" data-wow-offset="10">
        <p>Upgrade your product offering with our patented reaction injection molding process that can create 3D contoured performance foam components for use across a variety of applications, from impact protection to the encapsulation of electronics. This process is carried out at lower temperatures, allowing us to utilize thermally sensitive fabrics and integrate electronic components. Additionally, this technology is much greener than traditional molding techniques, generating up to 96% less landfill waste.</p>
      </div>
      <!--        <a href="#" class="btn btn-dark">Platform Features</a>-->
    </div>
  </section>
    <!-- 3.1: Block 4 cols -->
    <section class="tpl-block block-4-cols bg-chalk pink-style "> <!-- default: green-style/ option: pink style -->
        <div class="container wow fadeInUpBig"  data-wow-offset="10">
          <h3 class="text-center">Platform Features</h3>
          <div class="row block-4-cols-slider">
            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-offset="10" data-wow-delay="0.2s" >
              <div class="card preShow card-no-effect">
                <div class="card-body">
                  <div class="card__top d-flex align-items-center">
                    <img src="<?php echo $img?>/svg/sus.svg" alt="" class="card__icon">
                    <img src="<?php echo $img?>/svg/sus_hover.svg" alt="" class="card__icon card__icon-hover">
                  </div>
                  <div class="card__bottom">
                    <div class="card__title">Lightweight</div>
                    <div class="card__text"><p>Our foam base is lighter than traditional plastic housing.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-offset="10" data-wow-delay="0.4s">
              <div class="card preShow card-no-effect">
                <div class="card-body">
                  <div class="card__top d-flex align-items-center">
                    <img src="<?php echo $img?>/svg/seamLess.svg" alt="" class="card__icon">
                    <img src="<?php echo $img?>/svg/seamLess_hover.svg" alt="" class="card__icon card__icon-hover">
                  </div>
                  <div class="card__bottom">
                    <div class="card__title">Compact</div>
                    <div class="card__text"><p>Our efficient encapsulation design reduces product footprint</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-offset="10" data-wow-delay="0.6s" >
              <div class="card preShow card-no-effect">
                <div class="card-body">
                  <div class="card__top d-flex align-items-center">
                    <img src="<?php echo $img?>/svg/complex.svg" alt="" class="card__icon">
                    <img src="<?php echo $img?>/svg/complex_hover.svg" alt="" class="card__icon card__icon-hover">
                  </div>
                  <div class="card__bottom">
                    <div class="card__title">Cost-effective</div>
                    <div class="card__text"><p>Single process technique to house all components.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-offset="10" data-wow-delay="0.8s" >
              <div class="card preShow card-no-effect">
                <div class="card-body">
                  <div class="card__top d-flex align-items-center">
                    <img src="<?php echo $img?>/svg/cost.svg" alt="" class="card__icon">
                    <img src="<?php echo $img?>/svg/cost_hover.svg" alt="" class="card__icon card__icon-hover">
                  </div>
                  <div class="card__bottom">
                    <div class="card__title">Flexible</div>
                    <div class="card__text"><p>Our solid structures with seamless durometers are created to stand up to the required force gradient.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- 3.2: Block 4 cols None hover : .none-hover -->
    <section class="tpl-block block-4-cols bg-chalk pink-style none-hover slider-block"> <!-- default: green-style/ option: pink style -->
        <div class="container wow fadeInUpBig"  data-wow-offset="10">
            <h3 class="text-center">Platform Features</h3>
            <div class="row block-4-cols-slider">
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-offset="10" data-wow-delay="0.2s" >
                    <div class="card preShow card-no-effect">
                        <div class="card-body">
                            <div class="card__top d-flex align-items-center">
                                <img src="<?php echo $img?>/svg/sus.svg" alt="" class="card__icon">
                                <img src="<?php echo $img?>/svg/sus_hover.svg" alt="" class="card__icon card__icon-hover">
                            </div>
                            <div class="card__bottom">
                                <div class="card__title">Lightweight</div>
                                <div class="card__text"><p>Our foam base is lighter than traditional plastic housing.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-offset="10" data-wow-delay="0.4s">
                    <div class="card preShow card-no-effect">
                        <div class="card-body">
                            <div class="card__top d-flex align-items-center">
                                <img src="<?php echo $img?>/svg/seamLess.svg" alt="" class="card__icon">
                                <img src="<?php echo $img?>/svg/seamLess_hover.svg" alt="" class="card__icon card__icon-hover">
                            </div>
                            <div class="card__bottom">
                                <div class="card__title">Compact</div>
                                <div class="card__text"><p>Our efficient encapsulation design reduces product footprint</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-offset="10" data-wow-delay="0.6s" >
                    <div class="card preShow card-no-effect">
                        <div class="card-body">
                            <div class="card__top d-flex align-items-center">
                                <img src="<?php echo $img?>/svg/complex.svg" alt="" class="card__icon">
                                <img src="<?php echo $img?>/svg/complex_hover.svg" alt="" class="card__icon card__icon-hover">
                            </div>
                            <div class="card__bottom">
                                <div class="card__title">Cost-effective</div>
                                <div class="card__text"><p>Single process technique to house all components.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-offset="10" data-wow-delay="0.8s" >
                    <div class="card preShow card-no-effect">
                        <div class="card-body">
                            <div class="card__top d-flex align-items-center">
                                <img src="<?php echo $img?>/svg/cost.svg" alt="" class="card__icon">
                                <img src="<?php echo $img?>/svg/cost_hover.svg" alt="" class="card__icon card__icon-hover">
                            </div>
                            <div class="card__bottom">
                                <div class="card__title">Flexible</div>
                                <div class="card__text"><p>Our solid structures with seamless durometers are created to stand up to the required force gradient.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-offset="10" data-wow-delay="0.8s" >
                    <div class="card preShow card-no-effect">
                        <div class="card-body">
                            <div class="card__top d-flex align-items-center">
                                <img src="<?php echo $img?>/svg/cost.svg" alt="" class="card__icon">
                                <img src="<?php echo $img?>/svg/cost_hover.svg" alt="" class="card__icon card__icon-hover">
                            </div>
                            <div class="card__bottom">
                                <div class="card__title">Flexible</div>
                                <div class="card__text"><p>Our solid structures with seamless durometers are created to stand up to the required force gradient.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <section class="tpl-block title-block bg-dush">
    <div class="container wow fadeInUp" data-wow-offset="10" >
      <h3 class="sub-title">OUR PADDING</h3>
      <h2 class="heading-title ">Applications</h2>
      <div class="desc">
        <p>Workplace safety, impact protection for the elderly and athletes, and encased sensing solutions for biopotential and biometric monitoring.</p>
      </div>
      <!--        <a href="#" class="btn btn-dark">Platform Features</a>-->
    </div>
  </section>
  <section class="tpl-block text-media-block bg-dush image image-right"><!-- Add class .image-right -->
    <div class="container-fluid g-0">
      <div class="row g-0 flex-row-reverse"><!-- Option: .flex-row-reverse -->
        <div class="col-lg-6 image-col">
          <div class="image image-zoomin-effect size-4x3"><!-- Default 1x1 | .size-4x3 -->
            <img src="<?php echo $img ?>/demo/11.jpg" alt="Consumer Health &amp; Wellness">
          </div>
        </div>
        <div class="col-lg-6 content-col wow fadeInUpBig" data-wow-duration="1.8s" >
          <div class="content-box" >
            <h3 class="title">Workwear</h3>
            <div class="content">
              <p>Padded protection integrated into apparel and soft goods for fall protection and safety in industrial settings.</p>
            </div>
            <a href="#" class="btn btn-outline-secondary">Request Information</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="tpl-block text-media-block bg-dush image image-right"><!-- Add class .image-right -->
    <div class="container-fluid g-0">
      <div class="row g-0 "><!-- Option: .flex-row-reverse -->
        <div class="col-lg-6 image-col">
          <div class="image image-zoomin-effect size-4x3"><!-- Default 1x1 | .size-4x3 -->
            <img src="<?php echo $img ?>/demo/22.jpg" alt="Consumer Health &amp; Wellness">
          </div>
        </div>
        <div class="col-lg-6 content-col wow fadeInUpBig" data-wow-duration="1.8s" >
          <div class="content-box" >
            <h3 class="title">Performance</h3>
            <div class="content">
              <p>Crafting protective contact gear integrated with sensors to measure impact and assess health state.</p>
            </div>
            <a href="#" class="btn btn-outline-secondary">Request Information</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="tpl-block text-media-block bg-dush image image-right"><!-- Add class .image-right -->
    <div class="container-fluid g-0">
      <div class="row g-0 flex-row-reverse"><!-- Option: .flex-row-reverse -->
        <div class="col-lg-6 image-col">
          <div class="image image-zoomin-effect size-4x3"><!-- Default 1x1 | .size-4x3 -->
            <img src="<?php echo $img ?>/demo/33.jpg" alt="Consumer Health &amp; Wellness">
          </div>
        </div>
        <div class="col-lg-6 content-col wow fadeInUpBig" data-wow-duration="1.8s" >
          <div class="content-box" >
            <h3 class="title">Consumer Technology</h3>
            <div class="content">
              <p>
                Replacing hard plastics with fabric coated foam components for a softer and lighter user experience. Encased sensing solutions for biopotential and biometric monitoring.
              </p>
              <ul>
               <li>Computer Peripherals</li>
                <li>Audio Devices</li>
                <li>Packaging and casings</li>
              </ul>
            </div>
            <a href="#" class="btn btn-outline-secondary">Request Information</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="tpl-block text-media-block bg-dush image image-right"><!-- Add class .image-right -->
    <div class="container-fluid g-0">
      <div class="row g-0 "><!-- Option: .flex-row-reverse -->
        <div class="col-lg-6 image-col">
          <div class="image image-zoomin-effect size-4x3"><!-- Default 1x1 | .size-4x3 -->
            <img src="<?php echo $img ?>/demo/44.jpg" alt="Consumer Health &amp; Wellness">
          </div>
        </div>
        <div class="col-lg-6 content-col wow fadeInUpBig" data-wow-duration="1.8s" >
          <div class="content-box" >
            <h3 class="title">Healthcare</h3>
            <div class="content">
              <p>Addressing a range of needs in the healthcare space to create market-defining products that add value.</p>
              <ul>
                <li> Designing fall protection products for the elderly with
                  integrated motion sensors to alert caregivers.</li>
                <li>Recovery body contour products with technology
                  embedded</li>
                <li>Medical devices that are more protective and
                  comfortable, resulting in greater adoption and usage.</li>
              </ul>
            </div>
            <a href="#" class="btn btn-outline-secondary">Learn more</a>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- 4.1: New Tab Block-->
    <section class="tpl-block tab-block tab-block-secondary bg-white text-salmon" ><!-- Options:  text-salmon/ text-dush / text-mint --->
        <div class="container">
            <div class="heading text-center  mb-5 pb-md-3">
                <h2 class="h3 mb-0">Platform Capabilities</h2>
                <p class="mt-5">A breakthrough foam and padding technology for impact protection and the encasing of electronics.</p>
            </div>
            <!-- Parent tabs -->
            <ul class="nav nav-tabs parent-tab" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="flat-tab" data-bs-toggle="tab" data-bs-target="#flat" type="button" role="tab" aria-controls="home" aria-selected="true">
                        <div class="parent-icon">
                            <img class="default" src="<?php echo $img?>/svg/icon-flat-knit.svg"/>
                            <img class="hover" src="<?php echo $img?>/svg/icon-flat-knit-hover.svg"/>
                        </div>
                        <span>
                            Flat Knit
                        </span>

                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="circular-tab" data-bs-toggle="tab" data-bs-target="#circular" type="button" role="tab" aria-controls="profile" aria-selected="false">
                        <div class="parent-icon">
                            <img class="default" src="<?php echo $img?>/svg/icon-circular.svg"/>
                            <img class="hover" src="<?php echo $img?>/svg/icon-circular-hover.svg"/>
                        </div>
                        <span>
                           Circular Knit
                        </span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="wrap-tab" data-bs-toggle="tab" data-bs-target="#wrap" type="button" role="tab" aria-controls="contact" aria-selected="false">
                        <div class="parent-icon">
                            <img class="default" src="<?php echo $img?>/svg/icon-wrap.svg"/>
                            <img class="hover" src="<?php echo $img?>/svg/icon-wrap-hover.svg"/>
                        </div>
                        <span>
                            Warp Knit
                        </span>
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="flat" role="tabpanel" aria-labelledby="flat-tab">
                    <!-- Child tabs -->
                    <ul class="nav nav-tabs  wow fadeIn"  data-wow-offset="10" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab-1" data-text="1" type="button" role="tab">
                                <div  class="tab-title" >Features</div>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link"  data-bs-toggle="tab" data-bs-target="#tab-2" data-text="2" type="button" role="tab" >
                                <div  class="tab-title">Capabilities</div>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link"  data-bs-toggle="tab" data-bs-target="#tab-3" data-text="3" type="button" role="tab" >
                                <div  class="tab-title">Applications</div>
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" >
                        <div class="tab-pane fade show active" id="tab-1" >
                            <div class="row">
                                <div class="col-md-6 image">
                                    <img src="<?php echo $img?>/demo/KYF_8.jpg"/>
                                </div>
                                <div class="col-md-6 text bg-dush">
                                    <div class="text-in">
                                        <div class="icons">
                                            <img src="<?php echo $img?>/svg/icon-tech.svg"/>
                                        </div>
                                        <h2 class="title h3"> Technology Embedded</h2>
                                        <div class="paragraph">
                                            <p>
                                                + Patented Reaction Injection Moulding (RIM) technology <br/>
                                                + Ability to mold Polyurethane foam, TPU Film, Fabric
                                                (Nylon/Polyester/Elastane blends)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-2" >
                            <div class="row">
                                <div class="col-md-6 image">
                                    <img src="https://softmatter.project-staging.com/wp-content/uploads/2022/03/card-img-2.jpg"/>
                                </div>
                                <div class="col-md-6 text bg-dush">
                                    <div class="text-in">
                                        <h2 class="title h3">Finishes</h2>
                                        <div class="paragraph">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem modi, necessitatibus, nesciunt nulla optio praesentium provident quibusdam quo reprehenderit sapiente tenetur veniam. Accusantium aliquid autem libero, modi perspiciatis quaerat voluptate!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-3" >
                            <div class="row">
                                <div class="col-md-6 image">
                                    <img src="<?php echo $img?>/panels.jpeg"/>
                                </div>
                                <div class="col-md-6 text bg-dush">
                                    <div class="text-in">
                                        <h2 class="title h3">Finishes</h2>
                                        <div class="paragraph">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem modi, necessitatibus, nesciunt nulla optio praesentium provident quibusdam quo reprehenderit sapiente tenetur veniam. Accusantium aliquid autem libero, modi perspiciatis quaerat voluptate!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="circular" role="tabpanel" aria-labelledby="circular-tab">
                    <!-- Child tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab-21" data-text="1" type="button" role="tab">
                                <div  class="tab-title" >Features</div>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link"  data-bs-toggle="tab" data-bs-target="#tab-22" data-text="2" type="button" role="tab" >
                                <div  class="tab-title">Capabilities</div>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link"  data-bs-toggle="tab" data-bs-target="#tab-23" data-text="3" type="button" role="tab" >
                                <div  class="tab-title">Applications</div>
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" >
                        <div class="tab-pane fade show active" id="tab-21" >
                            <div class="row">
                                <div class="col-md-6 image">
                                    <img src="<?php echo $img?>/demo/KYF_8.jpg"/>
                                </div>
                                <div class="col-md-6 text bg-dush">
                                    <div class="text-in">
                                        <div class="icons">
                                            <img src="<?php echo $img?>/svg/icon-tech.svg"/>
                                        </div>
                                        <h2 class="title h3"> Technology Embedded</h2>
                                        <div class="paragraph">
                                            <p>
                                                + Patented Reaction Injection Moulding (RIM) technology <br/>
                                                + Ability to mold Polyurethane foam, TPU Film, Fabric
                                                (Nylon/Polyester/Elastane blends)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-22" >
                            <div class="row">
                                <div class="col-md-6 image">
                                    <img src="<?php echo $img?>/demo/KYF_8.jpg"/>
                                </div>
                                <div class="col-md-6 text bg-dush">
                                    <div class="text-in">
                                        <h2 class="title h3">Finishes</h2>
                                        <div class="paragraph">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem modi, necessitatibus, nesciunt nulla optio praesentium provident quibusdam quo reprehenderit sapiente tenetur veniam. Accusantium aliquid autem libero, modi perspiciatis quaerat voluptate!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-23" >
                            <div class="row">
                                <div class="col-md-6 image">
                                    <img src="<?php echo $img?>/demo/KYF_8.jpg"/>
                                </div>
                                <div class="col-md-6 text bg-dush">
                                    <div class="text-in">
                                        <h2 class="title h3">Finishes</h2>
                                        <div class="paragraph">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem modi, necessitatibus, nesciunt nulla optio praesentium provident quibusdam quo reprehenderit sapiente tenetur veniam. Accusantium aliquid autem libero, modi perspiciatis quaerat voluptate!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="wrap" role="tabpanel" aria-labelledby="wrap-tab">
                    <!-- Child tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab-31" data-text="1" type="button" role="tab">
                                <div  class="tab-title" >Features</div>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link"  data-bs-toggle="tab" data-bs-target="#tab-32" data-text="2" type="button" role="tab" >
                                <div  class="tab-title">Capabilities</div>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link"  data-bs-toggle="tab" data-bs-target="#tab-33" data-text="3" type="button" role="tab" >
                                <div  class="tab-title">Applications</div>
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-31" >
                            <div class="row">
                                <div class="col-md-6 image">
                                    <img src="<?php echo $img?>/demo/KYF_8.jpg"/>
                                </div>
                                <div class="col-md-6 text bg-dush">
                                    <div class="text-in">
                                        <div class="icons">
                                            <img src="<?php echo $img?>/svg/icon-tech.svg"/>
                                        </div>
                                        <h2 class="title h3"> Technology Embedded</h2>
                                        <div class="paragraph">
                                            <p>
                                                + Patented Reaction Injection Moulding (RIM) technology <br/>
                                                + Ability to mold Polyurethane foam, TPU Film, Fabric
                                                (Nylon/Polyester/Elastane blends)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-32" >
                            <div class="row">
                                <div class="col-md-6 image">
                                    <img src="<?php echo $img?>/demo/KYF_8.jpg"/>
                                </div>
                                <div class="col-md-6 text bg-dush">
                                    <div class="text-in">
                                        <h2 class="title h3">Finishes</h2>
                                        <div class="paragraph">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem modi, necessitatibus, nesciunt nulla optio praesentium provident quibusdam quo reprehenderit sapiente tenetur veniam. Accusantium aliquid autem libero, modi perspiciatis quaerat voluptate!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-33" >
                            <div class="row">
                                <div class="col-md-6 image">
                                    <img src="<?php echo $img?>/demo/KYF_8.jpg"/>
                                </div>
                                <div class="col-md-6 text bg-dush">
                                    <div class="text-in">
                                        <h2 class="title h3">Finishes</h2>
                                        <div class="paragraph">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem modi, necessitatibus, nesciunt nulla optio praesentium provident quibusdam quo reprehenderit sapiente tenetur veniam. Accusantium aliquid autem libero, modi perspiciatis quaerat voluptate!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- 4.2: New Tab Block-->
    <section class="tpl-block tab-block tab-block-secondary bg-chalk text-dush" ><!-- Options:  text-salmon/ text-dush / text-mint --->
        <div class="container">
            <div class="heading text-center  mb-5 pb-md-3">
                <h2 class="h3 mb-0">Platform Capabilities</h2>
                <p class="mt-5">A breakthrough foam and padding technology for impact protection and the encasing of electronics.</p>
            </div>
            <!-- Child tabs -->
            <ul class="nav nav-tabs  wow fadeIn"  data-wow-offset="10" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab-211" data-text="1" type="button" role="tab">
                        <div  class="tab-title" >Features</div>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link"  data-bs-toggle="tab" data-bs-target="#tab-212" data-text="2" type="button" role="tab" >
                        <div  class="tab-title">Capabilities</div>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link"  data-bs-toggle="tab" data-bs-target="#tab-213" data-text="3" type="button" role="tab" >
                        <div  class="tab-title">Applications</div>
                    </button>
                </li>
            </ul>
            <div class="tab-content" >
                <div class="tab-pane fade show active" id="tab-211" >
                    <div class="row">
                        <div class="col-lg-6 image" style="background-image: url('<?php echo $img?>/demo/KYF_8.jpg')"></div>
                        <div class="col-lg-6 text bg-dush">
                            <div class="text-in">
                                <h2 class="title h3"> Technology Embedded</h2>
                                <div class="paragraph small-text"><!-- Option font-size: small-text: 16px / default : 20px-->
                                    <p>
                                        + Patented Reaction Injection Moulding (RIM) technology <br/>
                                        + Ability to mold Polyurethane foam, TPU Film, Fabric
                                        (Nylon/Polyester/Elastane blends)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-212" >
                    <div class="row">
                        <div class="col-lg-6 image" style="background-image: url('<?php echo $img?>/TechSpecs.jpeg')"></div>
                        <div class="col-lg-6 text bg-dush">
                            <div class="text-in">
                                <h2 class="title h3">Finishes</h2>
                                <div class="paragraph small-text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem modi, necessitatibus, nesciunt nulla optio praesentium provident quibusdam quo reprehenderit sapiente tenetur veniam. Accusantium aliquid autem libero, modi perspiciatis quaerat voluptate!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-213" >
                    <div class="row">
                        <div class="col-lg-6 image"  style="background-image: url('<?php echo $img?>/ResearchThermal.jpeg')">
<!--                            <img src="--><?php //echo $img?><!--/demo/KYF_8.jpg"/>-->
                        </div>
                        <div class="col-lg-6 text bg-dush">
                            <div class="text-in">
                                <h2 class="title h3">Finishes</h2>
                                <div class="paragraph small-text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem modi, necessitatibus, nesciunt nulla optio praesentium provident quibusdam quo reprehenderit sapiente tenetur veniam. Accusantium aliquid autem libero, modi perspiciatis quaerat voluptate!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- 5: Title Block-->
      <div class="tpl-block title-block bg-dush">
        <div class="container">
          <h3 class="sub-title wow fadeInUp" data-wow-duration="1.8s" data-wow-offset="100" >TECHNOLOGY WOVEN IN</h3>
          <h2 class="heading-title wow fadeInUp" data-wow-duration="1.8s" data-wow-offset="100">Explore Platforms</h2>
        </div>
      </div>

    <!-- 6: vertical-accordion-slider-block-->
    <!--option background color class name is :
     1. bg-chalk, bg-mint, bg-dush
     -->
    <div class="tpl-block accordion-slider-block accordion-slider-block-secondary bg-dush pt-0 position-relative vertical-accordion-slider-block">
        <div class="container">
            <div class="accordion p-0 wow fadeInUpBig" data-wow-offset="10" id="accordion1234">
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
            <div class="accordion-slider">
                <div data-accordion="1" class="accordion-slider-container active is-open">
                    <div class="accordion-slider-items accordion-slider-cols">
                        <div class="tab-slider-item" >
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
                    <div class="accordion-slider-items accordion-slider-cols">
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
                    <div class="accordion-slider-items accordion-slider-cols">
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

    <!-- 7: Title Block-->
    <!-- Option:
    1. bg-salmon / bg-dush / bg-chalk / bg-mint
    2. Heading Color : default - no need add class / white-heading / green-heading / salmon-heading
    3. Sub Title Color : default - no need add class /white-sub-title / green-sub-title / salmon-sub-title
     -->
    <section class="tpl-block title-block bg-salmon white-heading">
        <div class="container wow fadeInUp" data-wow-offset="10" >
            <h2 class="heading-title ">Areas of Application</h2>
            <div class="desc">
                <p>Solutions built across a variety of applications to craft a smarter tomorrow for a variety of brands</p>
            </div>
            <!--        <a href="#" class="btn btn-dark">Platform Features</a>-->
        </div>
    </section>
    <!-- 8: horizontal-accordion-slider-block -->
    <!-- horizontal-accordion-slider-block:  bg-salmon, bg-mint, bg-dush -->
    <div class="tpl-block accordion-slider-block accordion-slider-block-secondary bg-salmon pt-0 position-relative horizontal-accordion-slider-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <!-- ID of accordion should be dynamic-->
                    <div class="accordion wow bounceInUp p-0" data-wow-offset="10" id="accordion4567">
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button btn-icon" type="button" data-slider="1" data-bs-toggle="collapse" data-bs-target="#accordion-body-21" aria-expanded="true" >
                                    <div class="d-flex align-items-center">
                                        <div class="white-line"></div>
                                        <div class="slider-title">Wearables</div>
                                    </div>
                                </button>
                            </h3>
                            <div id="accordion-body-21" class="accordion-collapse collapse show"  data-bs-parent="#accordion4567" >
                                <div class="slider-description mt-4">By combining years of expertise with stellar integration techniques, we bring ideas to life by crafting solutions that create new and functional wearables experiences.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button  btn-icon collapsed" data-slider="2" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-body-22" aria-expanded="false" >
                                    <div class="d-flex align-items-center">
                                        <div class="white-line"></div>
                                        <div class="slider-title">Connected Devices</div>
                                    </div>
                                </button>
                            </h3>
                            <div id="accordion-body-22" class="accordion-collapse collapse"  data-bs-parent="#accordion4567" >
                                <div class="slider-description mt-4">Utilizing fabric-integrated sensors and actuators to create next-generation connected devices</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" >
                                <button class="accordion-button btn-icon collapsed"  data-slider="3" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-body-23" aria-expanded="false" >
                                    <div class="d-flex align-items-center">
                                        <div class="white-line"></div>
                                        <div class="slider-title">Connected Clothing</div>
                                    </div>
                                </button>
                            </h3>
                            <div id="accordion-body-23" class="accordion-collapse collapse"  data-bs-parent="#accordion4567">
                                <div class="slider-description mt-4">Tracking metrics ranging from muscle activation, to respiration, to motion using a variety of sensors, and providing feedback where necessary using haptic actuators.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-slider-right">
            <div class="accordion-slider">
                <div data-accordion="1" class="accordion-slider-container active is-open">
                    <div class="accordion-slider-items accordion-slider-vertical">
                        <div class="tab-slider-item">
                            <div class="tab-slider__image position-relative ">
                                <div class="image image-zoomin-effect">
                                    <img src="<?php echo $img?>/Platform/engineered-knit.jpg" alt="" />
                                    <div class="group-icons">
                                        <div class="group-icons__item d-flex">
                                            <img src="<?php echo $img?>/icon-outdoor.svg" alt="" />
                                            <span class="bg-salmon">
                                                Outdoor and workwear
                                            </span>
                                        </div>
                                        <div class="group-icons__item d-flex">
                                            <img src="<?php echo $img?>/icon-heath.svg" alt="" />
                                            <span class="bg-mint">
                                                Heath
                                            </span>
                                        </div>
                                        <div class="group-icons__item d-flex">
                                            <img src="<?php echo $img?>/icon-consumer.svg" alt="" />
                                            <span class="bg-chalk">
                                                Consumer Tech
                                            </span>
                                        </div>
                                    </div>
                                </div>
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
                                <div class="image image-zoomin-effect">
                                    <img src="<?php echo $img?>/Platform/Narrow-Width.jpg" alt="" />
                                    <div class="group-icons">
                                        <div class="group-icons__item d-flex">
                                            <img src="<?php echo $img?>/icon-outdoor.svg" alt="" />
                                            <span class="bg-salmon">
                                                Outdoor and workwear
                                            </span>
                                        </div>
                                        <div class="group-icons__item d-flex">
                                            <img src="<?php echo $img?>/icon-heath.svg" alt="" />
                                            <span class="bg-mint">
                                                Heath
                                            </span>
                                        </div>
                                        <div class="group-icons__item d-flex">
                                            <img src="<?php echo $img?>/icon-consumer.svg" alt="" />
                                            <span class="bg-chalk">
                                                Consumer Tech
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-slider__body"  >
                                <div class="tab-slider__title h4">Narrow Width Fabric</div>
                                <div class="tab-slider__text">Elasticated fabrics and elastomeric yarns engineered to achieve stretch and durability, as well as support complex design and construction.</div>
                            </div>
                        </div>
                        <div class="tab-slider-item">
                            <div class="tab-slider__image image image-zoomin-effect">
                                <img src="<?php echo $img?>/Platform/s-2.png" alt="" />
                                <div class="group-icons">
                                    <div class="group-icons__item d-flex">
                                        <img src="<?php echo $img?>/icon-outdoor.svg" alt="" />
                                        <span class="bg-salmon">
                                                Outdoor and workwear
                                            </span>
                                    </div>
                                    <div class="group-icons__item d-flex">
                                        <img src="<?php echo $img?>/icon-heath.svg" alt="" />
                                        <span class="bg-mint">
                                                Heath
                                            </span>
                                    </div>
                                    <div class="group-icons__item d-flex">
                                        <img src="<?php echo $img?>/icon-consumer.svg" alt="" />
                                        <span class="bg-chalk">
                                                Consumer Tech
                                            </span>
                                    </div>
                                </div>
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
                    <div class="accordion-slider-items accordion-slider-vertical">
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
                <div data-accordion="3" class="accordion-slider-container">
                    <div class="accordion-slider-items accordion-slider-vertical">
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



    <!-- 9.1: Title Block-->
    <div class="tpl-block title-block bg-chalk">
        <div class="container">
            <h3 class="sub-title wow fadeInUp" data-wow-duration="1.8s" data-wow-offset="100" >BRINGING PRODUCTS TO LIFE</h3>
            <h2 class="heading-title wow fadeInUp" data-wow-duration="1.8s" data-wow-offset="100">Success Stories</h2>
            <div class="desc wow fadeInUp" data-wow-duration="1.8s" data-wow-offset="100">
                <p>We partner with industry leaders to develop a long-time vision. We can anticipate your product needs both today and for the future</p>
            </div>
        </div>
    </div>

    <!-- 9.2:  full-image-tab-slider-block -->
    <!-- Options:1.Background:  bg-chalk / bg-dush/ bg-mint / bg-salmon --->
    <section class="tpl-block tab-block tab-block-secondary bg-chalk full-image-tab-slider-block" >
        <div class="container">
            <nav>
                <div class="nav nav-tabs wow fadeInUp" data-wow-offset="10" data-wow-delay=".2s" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-text="1" data-bs-toggle="tab" data-bs-target="#nav-consumer-health" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                        <div class="full-image-tab d-flex align-items-center">
                            <div class="full-image-tab__image">
                                <img class="default" src="<?php echo $img ?>/Consumer-Health.svg"/>
                                <img class="active" src="<?php echo $img ?>/Consumer-Health-Active.svg"/>
                            </div>
                            <div class="full-image-tab__text">
                                Consumer Health
                            </div>
                        </div>
                    </button>
                    <button class="nav-link" id="nav-profile-tab" data-text="2" data-bs-toggle="tab" data-bs-target="#nav-consumer-technology" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                        <div class="full-image-tab d-flex align-items-center">
                            <div class="full-image-tab__image">
                                <img class="default" src="<?php echo $img ?>/Consumer-Technology.svg"/>
                                <img class="active" src="<?php echo $img ?>/Consumer-Technology-Active.svg"/>
                            </div>
                            <div class="full-image-tab__text">
                                Consumer Technology
                            </div>
                        </div>
                    </button>
                    <button class="nav-link" id="nav-contact-tab" data-text="2" data-bs-toggle="tab" data-bs-target="#nav-outdoor-workwear" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
                        <div class="full-image-tab d-flex align-items-center">
                            <div class="full-image-tab__image">
                                <img class="default" src="<?php echo $img ?>/Outdoor-Workwear.svg"/>
                                <img class="active" src="<?php echo $img ?>/Outdoor-Workwear-Active.svg"/>
                            </div>
                            <div class="full-image-tab__text">
                                Outdoor Workwear
                            </div>
                        </div>

                    </button>
                </div>
            </nav>
        </div>
        <div class="full-image-tab-slider-block__body">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-consumer-health" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="full-image-body-slider">
                        <div class="full-image-body">
                            <div class="full-body__image">
                                <img src="<?php echo $img?>/Carin_Lifesense.jpeg"/>
                            </div>
                            <div class="full-body__text bg-dush">
                                <div class="container">
                                    <div class="story-info mb-5">
                                        <h3 class=" wow fadeInUp" data-wow-offset="10" data-wow-delay=".2s">
                                            LIFESENSE
                                        </h3>
                                        <div class="story-info__desc wow fadeInUp" data-wow-offset="10" data-wow-delay=".4s">
                                            Hello Carin, Goodbye Leaks
                                        </div>
                                    </div>
                                    <div class="story-body d-flex">
                                        <div class="story-body__left wow fadeInUpBig" data-wow-offset="10" data-wow-delay=".6s">
                                            Stress urinary incontinence in women is a common problem. Women often experience urine leaks during sports or while sneezing, laughing or jumping. Carin’s patented smart underwear pairs with a wearable sensor and tracking app to create a tailored exercise program designed to eliminate leaks in a matter of weeks. Carin’s three-part combination of smart textiles, Bluetooth sensor, and a tailored exercise program provides the key. Carin is a perfect fit to achieve pelvic floor strength in any busy lifestyle. You can learn more about Carin
                                        </div>
                                        <div class="story-body__right wow fadeInUpBig" data-wow-offset="10" data-wow-delay=".8s">
                                            The Softmatter team helped LifeSense provide a high quality, comfortable and stylish product for women, using the latest production technologies. "-<a href="#" target="_blank" class="text-decoration-none">Lifesense Group</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="full-image-body">
                            <div class="full-body__image">
                                <img src="<?php echo $img?>/Carin_Lifesense.jpeg"/>
                            </div>
                            <div class="full-body__text bg-dush">
                                <div class="container">
                                    <div class="story-info mb-5">
                                        <h3 class=" wow fadeInUp" data-wow-offset="10" data-wow-delay=".2s">
                                            LIFESENSE
                                        </h3>
                                        <div class="story-info__desc wow fadeInUp" data-wow-offset="10" data-wow-delay=".4s">
                                            Hello Carin, Goodbye Leaks
                                        </div>
                                    </div>
                                    <div class="story-body d-flex">
                                        <div class="story-body__left wow fadeInUpBig" data-wow-offset="10" data-wow-delay=".6s">
                                            Stress urinary incontinence in women is a common problem. Women often experience urine leaks during sports or while sneezing, laughing or jumping. Carin’s patented smart underwear pairs with a wearable sensor and tracking app to create a tailored exercise program designed to eliminate leaks in a matter of weeks. Carin’s three-part combination of smart textiles, Bluetooth sensor, and a tailored exercise program provides the key. Carin is a perfect fit to achieve pelvic floor strength in any busy lifestyle. You can learn more about Carin
                                        </div>
                                        <div class="story-body__right wow fadeInUpBig" data-wow-offset="10" data-wow-delay=".8s">
                                            The Softmatter team helped LifeSense provide a high quality, comfortable and stylish product for women, using the latest production technologies. "-<a href="#" target="_blank" class="text-decoration-none">Lifesense Group</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="full-image-body">
                            <div class="full-body__image">
                                <img src="<?php echo $img?>/Carin_Lifesense.jpeg"/>
                            </div>
                            <div class="full-body__text bg-dush">
                                <div class="container">
                                    <div class="story-info mb-5">
                                        <h3 class=" wow fadeInUp" data-wow-offset="10" data-wow-delay=".2s">
                                            LIFESENSE
                                        </h3>
                                        <div class="story-info__desc wow fadeInUp" data-wow-offset="10" data-wow-delay=".4s">
                                            Hello Carin, Goodbye Leaks
                                        </div>
                                    </div>
                                    <div class="story-body d-flex">
                                        <div class="story-body__left wow fadeInUpBig" data-wow-offset="10" data-wow-delay=".6s">
                                            Stress urinary incontinence in women is a common problem. Women often experience urine leaks during sports or while sneezing, laughing or jumping. Carin’s patented smart underwear pairs with a wearable sensor and tracking app to create a tailored exercise program designed to eliminate leaks in a matter of weeks. Carin’s three-part combination of smart textiles, Bluetooth sensor, and a tailored exercise program provides the key. Carin is a perfect fit to achieve pelvic floor strength in any busy lifestyle. You can learn more about Carin
                                        </div>
                                        <div class="story-body__right wow fadeInUpBig" data-wow-offset="10" data-wow-delay=".8s">
                                            The Softmatter team helped LifeSense provide a high quality, comfortable and stylish product for women, using the latest production technologies. "-<a href="#" target="_blank" class="text-decoration-none">Lifesense Group</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-consumer-technology" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="full-image-body-slider">
                        <div class="full-image-body">
                            <div class="full-body__image">
                                <img src="<?php echo $img?>/Carin_Lifesense.jpeg"/>
                            </div>
                            <div class="full-body__text bg-dush">
                                <div class="container">
                                    <div class="story-info mb-5">
                                        <h3 class=" wow fadeInUp" data-wow-offset="10" data-wow-delay=".2s">
                                            LIFESENSE
                                        </h3>
                                        <div class="story-info__desc wow fadeInUp" data-wow-offset="10" data-wow-delay=".4s">
                                            Hello Carin, Goodbye Leaks
                                        </div>
                                    </div>
                                    <div class="story-body d-flex">
                                        <div class="story-body__left wow fadeInUpBig" data-wow-offset="10" data-wow-delay=".6s">
                                            Stress urinary incontinence in women is a common problem. Women often experience urine leaks during sports or while sneezing, laughing or jumping. Carin’s patented smart underwear pairs with a wearable sensor and tracking app to create a tailored exercise program designed to eliminate leaks in a matter of weeks. Carin’s three-part combination of smart textiles, Bluetooth sensor, and a tailored exercise program provides the key. Carin is a perfect fit to achieve pelvic floor strength in any busy lifestyle. You can learn more about Carin
                                        </div>
                                        <div class="story-body__right wow fadeInUpBig" data-wow-offset="10" data-wow-delay=".8s">
                                            The Softmatter team helped LifeSense provide a high quality, comfortable and stylish product for women, using the latest production technologies. "-<a href="#" target="_blank" class="text-decoration-none">Lifesense Group</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="full-image-body">
                            <div class="full-body__image">
                                <img src="<?php echo $img?>/Carin_Lifesense.jpeg"/>
                            </div>
                            <div class="full-body__text bg-dush">
                                <div class="container">
                                    <div class="story-info mb-5">
                                        <h3 class=" wow fadeInUp" data-wow-offset="10" data-wow-delay=".2s">
                                            LIFESENSE
                                        </h3>
                                        <div class="story-info__desc wow fadeInUp" data-wow-offset="10" data-wow-delay=".4s">
                                            Hello Carin, Goodbye Leaks
                                        </div>
                                    </div>
                                    <div class="story-body d-flex">
                                        <div class="story-body__left wow fadeInUpBig" data-wow-offset="10" data-wow-delay=".6s">
                                            Stress urinary incontinence in women is a common problem. Women often experience urine leaks during sports or while sneezing, laughing or jumping. Carin’s patented smart underwear pairs with a wearable sensor and tracking app to create a tailored exercise program designed to eliminate leaks in a matter of weeks. Carin’s three-part combination of smart textiles, Bluetooth sensor, and a tailored exercise program provides the key. Carin is a perfect fit to achieve pelvic floor strength in any busy lifestyle. You can learn more about Carin
                                        </div>
                                        <div class="story-body__right wow fadeInUpBig" data-wow-offset="10" data-wow-delay=".8s">
                                            The Softmatter team helped LifeSense provide a high quality, comfortable and stylish product for women, using the latest production technologies. "-<a href="#" target="_blank" class="text-decoration-none">Lifesense Group</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="full-image-body">
                            <div class="full-body__image">
                                <img src="<?php echo $img?>/Carin_Lifesense.jpeg"/>
                            </div>
                            <div class="full-body__text bg-dush">
                                <div class="container">
                                    <div class="story-info mb-5">
                                        <h3 class=" wow fadeInUp" data-wow-offset="10" data-wow-delay=".2s">
                                            LIFESENSE
                                        </h3>
                                        <div class="story-info__desc wow fadeInUp" data-wow-offset="10" data-wow-delay=".4s">
                                            Hello Carin, Goodbye Leaks
                                        </div>
                                    </div>
                                    <div class="story-body d-flex">
                                        <div class="story-body__left wow fadeInUpBig" data-wow-offset="10" data-wow-delay=".6s">
                                            Stress urinary incontinence in women is a common problem. Women often experience urine leaks during sports or while sneezing, laughing or jumping. Carin’s patented smart underwear pairs with a wearable sensor and tracking app to create a tailored exercise program designed to eliminate leaks in a matter of weeks. Carin’s three-part combination of smart textiles, Bluetooth sensor, and a tailored exercise program provides the key. Carin is a perfect fit to achieve pelvic floor strength in any busy lifestyle. You can learn more about Carin
                                        </div>
                                        <div class="story-body__right wow fadeInUpBig" data-wow-offset="10" data-wow-delay=".8s">
                                            The Softmatter team helped LifeSense provide a high quality, comfortable and stylish product for women, using the latest production technologies. "-<a href="#" target="_blank" class="text-decoration-none">Lifesense Group</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-outdoor-workwear" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="full-image-body-slider">
                        <div class="full-image-body">
                            <div class="full-body__image">
                                <img src="<?php echo $img?>/Carin_Lifesense.jpeg"/>
                            </div>
                            <div class="full-body__text bg-dush">
                                <div class="container">
                                    <div class="story-info mb-5">
                                        <h3 class=" wow fadeInUp" data-wow-offset="10" data-wow-delay=".2s">
                                            LIFESENSE
                                        </h3>
                                        <div class="story-info__desc wow fadeInUp" data-wow-offset="10" data-wow-delay=".4s">
                                            Hello Carin, Goodbye Leaks
                                        </div>
                                    </div>
                                    <div class="story-body d-flex">
                                        <div class="story-body__left wow fadeInUpBig" data-wow-offset="10" data-wow-delay=".6s">
                                            Stress urinary incontinence in women is a common problem. Women often experience urine leaks during sports or while sneezing, laughing or jumping. Carin’s patented smart underwear pairs with a wearable sensor and tracking app to create a tailored exercise program designed to eliminate leaks in a matter of weeks. Carin’s three-part combination of smart textiles, Bluetooth sensor, and a tailored exercise program provides the key. Carin is a perfect fit to achieve pelvic floor strength in any busy lifestyle. You can learn more about Carin
                                        </div>
                                        <div class="story-body__right wow fadeInUpBig" data-wow-offset="10" data-wow-delay=".8s">
                                            The Softmatter team helped LifeSense provide a high quality, comfortable and stylish product for women, using the latest production technologies. "-<a href="#" target="_blank" class="text-decoration-none">Lifesense Group</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="full-image-body">
                            <div class="full-body__image">
                                <img src="<?php echo $img?>/Carin_Lifesense.jpeg"/>
                            </div>
                            <div class="full-body__text bg-dush">
                                <div class="container">
                                    <div class="story-info mb-5">
                                        <h3 class=" wow fadeInUp" data-wow-offset="10" data-wow-delay=".2s">
                                            LIFESENSE
                                        </h3>
                                        <div class="story-info__desc wow fadeInUp" data-wow-offset="10" data-wow-delay=".4s">
                                            Hello Carin, Goodbye Leaks
                                        </div>
                                    </div>
                                    <div class="story-body d-flex">
                                        <div class="story-body__left wow fadeInUpBig" data-wow-offset="10" data-wow-delay=".6s">
                                            Stress urinary incontinence in women is a common problem. Women often experience urine leaks during sports or while sneezing, laughing or jumping. Carin’s patented smart underwear pairs with a wearable sensor and tracking app to create a tailored exercise program designed to eliminate leaks in a matter of weeks. Carin’s three-part combination of smart textiles, Bluetooth sensor, and a tailored exercise program provides the key. Carin is a perfect fit to achieve pelvic floor strength in any busy lifestyle. You can learn more about Carin
                                        </div>
                                        <div class="story-body__right wow fadeInUpBig" data-wow-offset="10" data-wow-delay=".8s">
                                            The Softmatter team helped LifeSense provide a high quality, comfortable and stylish product for women, using the latest production technologies. "-<a href="#" target="_blank" class="text-decoration-none">Lifesense Group</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="full-image-body">
                            <div class="full-body__image">
                                <img src="<?php echo $img?>/Carin_Lifesense.jpeg"/>
                            </div>
                            <div class="full-body__text bg-dush">
                                <div class="container">
                                    <div class="story-info mb-5">
                                        <h3 class=" wow fadeInUp" data-wow-offset="10" data-wow-delay=".2s">
                                            LIFESENSE
                                        </h3>
                                        <div class="story-info__desc wow fadeInUp" data-wow-offset="10" data-wow-delay=".4s">
                                            Hello Carin, Goodbye Leaks
                                        </div>
                                    </div>
                                    <div class="story-body d-flex">
                                        <div class="story-body__left wow fadeInUpBig" data-wow-offset="10" data-wow-delay=".6s">
                                            Stress urinary incontinence in women is a common problem. Women often experience urine leaks during sports or while sneezing, laughing or jumping. Carin’s patented smart underwear pairs with a wearable sensor and tracking app to create a tailored exercise program designed to eliminate leaks in a matter of weeks. Carin’s three-part combination of smart textiles, Bluetooth sensor, and a tailored exercise program provides the key. Carin is a perfect fit to achieve pelvic floor strength in any busy lifestyle. You can learn more about Carin
                                        </div>
                                        <div class="story-body__right wow fadeInUpBig" data-wow-offset="10" data-wow-delay=".8s">
                                            The Softmatter team helped LifeSense provide a high quality, comfortable and stylish product for women, using the latest production technologies. "-<a href="#" target="_blank" class="text-decoration-none">Lifesense Group</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10.1: Title Block-->
    <div class="tpl-block title-block bg-dush">
        <div class="container">
            <h3 class="sub-title wow fadeInUp" data-wow-duration="1.8s" data-wow-offset="100" >LEADING THE CURVE</h3>
            <h2 class="heading-title wow fadeInUp" data-wow-duration="1.8s" data-wow-offset="100">Areas of Play</h2>
        </div>
    </div>

    <!-- 10.2:  ThreeCols-tab-slider-block -->
    <!-- Options:1.Background:  bg-chalk / bg-dush/ bg-mint / bg-salmon --->
    <section class="tpl-block tab-block tab-block-secondary bg-dush full-image-tab-slider-block" >
        <div class="container">
            <nav>
                <div class="nav nav-tabs wow fadeInUp" data-wow-offset="10" data-wow-delay=".2s" id="nav-tab-2" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-text="1" data-bs-toggle="tab" data-bs-target="#nav-consumer-health-2" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                        <div class="full-image-tab d-flex align-items-center">
                            <div class="full-image-tab__image">
                                <img class="default" src="<?php echo $img ?>/Consumer-Health.svg"/>
                                <img class="active" src="<?php echo $img ?>/Consumer-Health-Active.svg"/>
                            </div>
                            <div class="full-image-tab__text">
                                Consumer Health
                            </div>
                        </div>
                    </button>
                    <button class="nav-link" id="nav-profile-tab" data-text="2" data-bs-toggle="tab" data-bs-target="#nav-consumer-technology-2" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                        <div class="full-image-tab d-flex align-items-center">
                            <div class="full-image-tab__image">
                                <img class="default" src="<?php echo $img ?>/Consumer-Technology.svg"/>
                                <img class="active" src="<?php echo $img ?>/Consumer-Technology-Active.svg"/>
                            </div>
                            <div class="full-image-tab__text">
                                Consumer Technology
                            </div>
                        </div>
                    </button>
                    <button class="nav-link" id="nav-contact-tab" data-text="2" data-bs-toggle="tab" data-bs-target="#nav-outdoor-workwear-2" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
                        <div class="full-image-tab d-flex align-items-center">
                            <div class="full-image-tab__image">
                                <img class="default" src="<?php echo $img ?>/Outdoor-Workwear.svg"/>
                                <img class="active" src="<?php echo $img ?>/Outdoor-Workwear-Active.svg"/>
                            </div>
                            <div class="full-image-tab__text">
                                Outdoor Workwear
                            </div>
                        </div>

                    </button>
                </div>
            </nav>
        </div>
        <div class="full-image-tab-slider-block__body">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-consumer-health-2" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="container">
                        <div class="wrap-slider-item">
                            <div class="slider-item-cate wow fadeInUpBig" data-wow-offset="10" data-wow-delay=".2s">
                                <div class="row">
                                    <div class="col-lg-6 slider-item-cate__img">
                                        <a href="/contact">
                                            <img src="<?php echo $img ?>/Health_and_wellness_Futures.jpeg"/>
                                        </a>
                                    </div>
                                    <div class="col-lg-6 slider-item-cate__text d-flex align-items-center">
                                        <div>
                                            <h2 class="h3 mb-4">
                                                Health and Wellness Futures
                                            </h2>
                                            <div class="description mb-4">
                                                <p>
                                                    Patient metric analysis and pain management via thermal comfort, EMS, TENS and sleep solutions
                                                </p>
                                            </div>
                                            <a href="/contact" class="btn btn-outline-primary text-uppercase">
                                                Learn more
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="threeColsSlider wow fadeInUpBig" data-wow-offset="10" data-wow-delay=".4s">
                                <div class="threeColsSlider__item">
                                    <div class="threeColsSlider__item--in">
                                        <div class="threeColsSlider__img">
                                            <img src="<?php echo $img ?>/Health_1.jpeg"/>
                                        </div>
                                        <h3 class="h4 mb-4 text-green">
                                            Respiration and Sleep
                                        </h3>
                                        <div class="description">
                                            <p>
                                                Soft systems with integrated sensors and actuators to analyze and enhance sleep and respiration
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="threeColsSlider__item">
                                    <div class="threeColsSlider__item--in">
                                        <div class="threeColsSlider__img">
                                            <img src="<?php echo $img ?>/Health_2.jpeg"/>
                                        </div>
                                        <h3 class="h4 mb-4 text-green">
                                            Frequency Therapy
                                        </h3>
                                        <div class="description">
                                            <p>
                                                Our feedback suite contains three main technologies, Haptics, TENS, and EMS. Our seamlessly integrated haptic system is extremely versatile and has seen use-cases ranging from vibration for posture correction, and tactile feedback to the creation of immersive devices.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="threeColsSlider__item">
                                    <div class="threeColsSlider__item--in">
                                        <div class="threeColsSlider__img">
                                            <img src="<?php echo $img ?>/Health_3.jpeg"/>
                                        </div>
                                        <h3 class="h4 mb-4 text-green">
                                            Remote Patient Monitoring
                                        </h3>
                                        <div class="description">
                                            <p>
                                                Wearable technology that enables patients to safely spend more time outside of the hospital
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="threeColsSlider__item">
                                    <div class="threeColsSlider__item--in">
                                        <div class="threeColsSlider__img">
                                            <img src="<?php echo $img ?>/Health_4.jpeg"/>
                                        </div>
                                        <h3 class="h4 mb-4 text-green">
                                            Pain Management
                                        </h3>
                                        <div class="description">
                                            <p>
                                                Non-invasive pain management solutions leveraging thermal regulation and TENS/EMS feedback
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="nav-consumer-technology-2" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="container">
                        <div class="wrap-slider-item">
                            <div class="slider-item-cate wow fadeInUpBig" data-wow-offset="10" data-wow-delay=".2s">
                                <div class="row">
                                    <div class="col-lg-6 slider-item-cate__img">
                                        <a href="/contact">
                                            <img src="<?php echo $img ?>/Consumer_tech.jpeg"/>
                                        </a>
                                    </div>
                                    <div class="col-lg-6 slider-item-cate__text d-flex align-items-center">
                                        <div>
                                            <h2 class="h3 mb-4">
                                                Health and Wellness Futures
                                            </h2>
                                            <div class="description mb-4">
                                                <p>
                                                    Patient metric analysis and pain management via thermal comfort, EMS, TENS and sleep solutions
                                                </p>
                                            </div>
                                            <a href="/contact" class="btn btn-outline-primary text-uppercase">
                                                Learn more
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="threeColsSlider wow fadeInUpBig" data-wow-offset="10" data-wow-delay=".4s">
                                <div class="threeColsSlider__item">
                                    <div class="threeColsSlider__item--in">
                                        <div class="threeColsSlider__img">
                                            <img src="<?php echo $img ?>/Tech_1.jpeg"/>
                                        </div>
                                        <h3 class="h4 mb-4 text-green">
                                            Respiration and Sleep
                                        </h3>
                                        <div class="description">
                                            <p>
                                                Soft systems with integrated sensors and actuators to analyze and enhance sleep and respiration
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="threeColsSlider__item">
                                    <div class="threeColsSlider__item--in">
                                        <div class="threeColsSlider__img">
                                            <img src="<?php echo $img ?>/Health_2.jpeg"/>
                                        </div>
                                        <h3 class="h4 mb-4 text-green">
                                            Frequency Therapy
                                        </h3>
                                        <div class="description">
                                            <p>
                                                Our feedback suite contains three main technologies, Haptics, TENS, and EMS. Our seamlessly integrated haptic system is extremely versatile and has seen use-cases ranging from vibration for posture correction, and tactile feedback to the creation of immersive devices.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="threeColsSlider__item">
                                    <div class="threeColsSlider__item--in">
                                        <div class="threeColsSlider__img">
                                            <img src="<?php echo $img ?>/Health_3.jpeg"/>
                                        </div>
                                        <h3 class="h4 mb-4 text-green">
                                            Remote Patient Monitoring
                                        </h3>
                                        <div class="description">
                                            <p>
                                                Wearable technology that enables patients to safely spend more time outside of the hospital
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="threeColsSlider__item">
                                    <div class="threeColsSlider__item--in">
                                        <div class="threeColsSlider__img">
                                            <img src="<?php echo $img ?>/Health_4.jpeg"/>
                                        </div>
                                        <h3 class="h4 mb-4 text-green">
                                            Pain Management
                                        </h3>
                                        <div class="description">
                                            <p>
                                                Non-invasive pain management solutions leveraging thermal regulation and TENS/EMS feedback
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-outdoor-workwear-2" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="container">
                        <div class="wrap-slider-item">
                            <div class="slider-item-cate wow fadeInUpBig" data-wow-offset="10" data-wow-delay=".2s">
                                <div class="row">
                                    <div class="col-lg-6 slider-item-cate__img">
                                        <a href="/contact">
                                            <img src="<?php echo $img ?>/Outdoor.jpeg"/>
                                        </a>
                                    </div>
                                    <div class="col-lg-6 slider-item-cate__text d-flex align-items-center">
                                        <div>
                                            <h2 class="h3 mb-4">
                                                Health and Wellness Futures
                                            </h2>
                                            <div class="description mb-4">
                                                <p>
                                                    Patient metric analysis and pain management via thermal comfort, EMS, TENS and sleep solutions
                                                </p>
                                            </div>
                                            <a href="/contact" class="btn btn-outline-primary text-uppercase">
                                                Learn more
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="threeColsSlider wow fadeInUpBig" data-wow-offset="10" data-wow-delay=".4s">
                                <div class="threeColsSlider__item">
                                    <div class="threeColsSlider__item--in">
                                        <div class="threeColsSlider__img">
                                            <img src="<?php echo $img ?>/Outdoor_1.jpeg"/>
                                        </div>
                                        <h3 class="h4 mb-4 text-green">
                                            Respiration and Sleep
                                        </h3>
                                        <div class="description">
                                            <p>
                                                Soft systems with integrated sensors and actuators to analyze and enhance sleep and respiration
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="threeColsSlider__item">
                                    <div class="threeColsSlider__item--in">
                                        <div class="threeColsSlider__img">
                                            <img src="<?php echo $img ?>/Health_2.jpeg"/>
                                        </div>
                                        <h3 class="h4 mb-4 text-green">
                                            Frequency Therapy
                                        </h3>
                                        <div class="description">
                                            <p>
                                                Our feedback suite contains three main technologies, Haptics, TENS, and EMS. Our seamlessly integrated haptic system is extremely versatile and has seen use-cases ranging from vibration for posture correction, and tactile feedback to the creation of immersive devices.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="threeColsSlider__item">
                                    <div class="threeColsSlider__item--in">
                                        <div class="threeColsSlider__img">
                                            <img src="<?php echo $img ?>/Health_3.jpeg"/>
                                        </div>
                                        <h3 class="h4 mb-4 text-green">
                                            Remote Patient Monitoring
                                        </h3>
                                        <div class="description">
                                            <p>
                                                Wearable technology that enables patients to safely spend more time outside of the hospital
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="threeColsSlider__item">
                                    <div class="threeColsSlider__item--in">
                                        <div class="threeColsSlider__img">
                                            <img src="<?php echo $img ?>/Health_4.jpeg"/>
                                        </div>
                                        <h3 class="h4 mb-4 text-green">
                                            Pain Management
                                        </h3>
                                        <div class="description">
                                            <p>
                                                Non-invasive pain management solutions leveraging thermal regulation and TENS/EMS feedback
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- 11: text-media-block -->
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


