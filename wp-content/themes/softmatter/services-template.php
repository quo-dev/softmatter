<?php
/**
 * Template Name: Page Services
 * Description: Page template  Page Services
 * Application
 *
 */

get_header();
$img = get_template_directory_uri().'/assets/images';

?>

<main class="main">
    <!-- 0 : Hero block -->
    <section class="tpl-block text-media-block image bg-dush"><!-- Option: .bg-chalk/.bg-mint/.bg-dush; .image | .video  -->
        <div class="background">
            <div class="image"><img src="<?php echo $img ?>/bg-11.jpg" alt="Industry Focused Innovation"></div>
        </div>
        <div class="container-fluid g-0">
            <div class="row g-0 align-items-stretch">
                <!-- Option: Image -->
                <div class="col-lg-6 image-col order-lg-2"><!-- Option: .full-height (when the content is too long) -->
                    <div class="image image-zoomin-effect"><!-- Default 1x1 | .size-4x3 -->
                        <img class="img" src="<?php echo $img ?>/services.jpg" alt="Sketch-to-scale partner">
                    </div>
                </div>

                <div class="col-lg-6 content-col">
                    <div class="content-box" ><!-- Option: .text-white -->
                        <h1 class="h2 title wow bounceInUp" data-wow-duration="1s" data-wow-offset="10">Sketch-to-scale
                            partner</h1>
                        <div class="content wow bounceInUp" data-wow-duration="1.1s" data-wow-offset="10" >
                            <p>Your end-to-end solution provider all things
                                soft and smart</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 1 : Title block -->
    <section class="tpl-block title-block bg-chalk">
        <div class="container wow fadeInUp" data-wow-offset="10" >
          <h3 class="sub-title">COLLABORATE WITH US</h3>
          <h2 class="heading-title heading-title-sm">Partnership for Success</h2>
          <div class="desc">
            <p>Innovate with our proven concept development process. Our commitment to sustainability and engineered craftsmanship means that we are thoughtful in both design and function.</p>
          </div>
          <!--        <a href="#" class="btn btn-dark">Platform Features</a>-->
        </div>
      </section>

    <!-- 2.new Content Slider -->
    
    <!-- 2.1: Title Block-->
    <!-- Option:
    1. bg-salmon / bg-dush / bg-chalk / bg-mint
    2. Heading Color : default - no need add class / white-heading / green-heading / salmon-heading
    3. Sub Title Color : default - no need add class /white-sub-title / green-sub-title / salmon-sub-title
     -->
    <section class="tpl-block title-block bg-dush green-sub-title">
        <div class="container wow fadeInUp" data-wow-offset="10" >
            <h3 class="sub-title">TAILORED SERVICES FOR UNIQUE PRODUCTS</h3>
            <h2 class="heading-title">Concept to Delivery</h2>
            <div class="desc">
                <p>Innovate with our proven concept development process. Our commitment to sustainability and engineered craftsmanship means that we are thoughtful in both design and function.</p>
            </div>
            <!--        <a href="#" class="btn btn-dark">Platform Features</a>-->
        </div>
    </section>

    <!-- 2.1new Slider-3-cards Slider -->
    <!--option background color class name is :  bg-chalk, bg-mint, bg-dush-->
    <section class="tpl-block block-4-cols slider-3-cards bg-dush">
        <div class="container">
            <div class="row block-3-cols-slider wow bounceInUp" data-wow-duration="1s" data-wow-offset="10">
                <div class="col-xl-3 col-lg-6">
                    <div class="card preShow card-no-effect">
                        <div class="card-body">
                            <div class="card__top d-flex align-items-center">
                                <img src="<?php echo $img?>/Design.svg" alt="" class="card__icon">
                                <img src="<?php echo $img?>/Design-Active.svg" alt="" class="card__icon card__icon-hover">
                            </div>
                            <div class="card__bottom">
                                <div class="card__title">Lightweight</div>
                                <div class="card__text"><p>Our ability to turn design into a next-to-skin concept is unapparelled. We have expanded our Industrial Design capabilities, apparel ID, and knit-to-shape programming</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card preShow card-no-effect">
                        <div class="card-body">
                            <div class="card__top d-flex align-items-center">
                                <img src="<?php echo $img?>/Product-Development.svg" alt="" class="card__icon">
                                <img src="<?php echo $img?>/Product-Development-Active.svg" alt="" class="card__icon card__icon-hover">
                            </div>
                            <div class="card__bottom">
                                <div class="card__title">Product Development</div>
                                <div class="card__text">
                                    <p>Transforming designs into prototypes via Electronic, Design and Product validation.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card preShow card-no-effect">
                        <div class="card-body">
                            <div class="card__top d-flex align-items-center">
                                <img src="<?php echo $img?>/Rapid-Prototyping.svg" alt="" class="card__icon">
                                <img src="<?php echo $img?>/Rapid-Prototyping-Active.svg" alt="" class="card__icon card__icon-hover">
                            </div>
                            <div class="card__bottom">
                                <div class="card__title">Rapid Prototyping</div>
                                <div class="card__text"><p>Safely proofing your product through functional and wash testing, for elevated performance.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card preShow card-no-effect">
                        <div class="card-body">
                            <div class="card__top d-flex align-items-center">
                                <img src="<?php echo $img?>/Raw-Material-Sourcing.svg" alt="" class="card__icon">
                                <img src="<?php echo $img?>/Raw-Material-Sourcing-Active.svg" alt="" class="card__icon card__icon-hover">
                            </div>
                            <div class="card__bottom">
                                <div class="card__title">Raw Material Sourcing</div>
                                <div class="card__text"><p>Our wide ecosystem drives easy access to reliable suppliers that provide the right parts of the puzzle. Expansion with an East-Asia sourcing hub for non-core material. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card preShow card-no-effect">
                        <div class="card-body">
                            <div class="card__top d-flex align-items-center">
                                <img src="<?php echo $img?>/Scaled-Manufacturing.svg" alt="" class="card__icon">
                                <img src="<?php echo $img?>/Scaled-Manufacturing-Active.svg" alt="" class="card__icon card__icon-hover">
                            </div>
                            <div class="card__bottom">
                                <div class="card__title">Scaled Manufacturing</div>
                                <div class="card__text"><p>Our large production facilities, located across the globe, allows us to scale-up at your discretion just like that. Expansion of custom tooling and jig development for automated product validation, outgoing QC, serialization, and traceability </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card preShow card-no-effect">
                        <div class="card-body">
                            <div class="card__top d-flex align-items-center">
                                <img src="<?php echo $img?>/Logistics.svg" alt="" class="card__icon">
                                <img src="<?php echo $img?>/Logistics-Active.svg" alt="" class="card__icon card__icon-hover">
                            </div>
                            <div class="card__bottom">
                                <div class="card__title">Logistics</div>
                                <div class="card__text"><p>Delivering our customers' products to the market in adherence to specific smart product protocol.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <!-- 3.old Content Slider -->
    <!--option background color class name is :  bg-chalk, bg-mint, bg-dush-->
    <section class="tpl-block block-3-cols bg-dush"  >
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="block-3-cols__heading  wow fadeInDown"  data-wow-offset="10">
                        <div class="f-16 text-uppercase">Tailored services<br/> for unique products</div>
                        <h3 class="title">From concept to delivery</h3>
                        <div class="decs"><!-- Option: Show Description -->
                            <p>With our proprietary ideation and development process, you can rest assured that we have thought of everything. We offer in-house prototyping, product design, scaled manufacturing, and scaled deployment across global markets.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row block-3-cols-slider wow bounceInUp" data-wow-duration="1s" data-wow-offset="10">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card preShow">
                        <div class="card-body">
                            <div class="card__top d-flex align-items-center">
                                <img src="<?php echo $img?>/1.png" alt="" class="card__icon" />
                                <div class="card__title-top">Design</div>
                            </div>
                            <div class="card__bottom">
                                <div class="card__title">Design</div>
                                <p class="card__text">
                                    With our proprietary ideation and development...
                                </p>
                                <p class="card__text-fade">
                                    In diam lorem, condimentum non tempus blandit, lacinia sed purus. Ut maximus est et dui auctor tempor sit amet sed ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices .
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card preShow">
                        <div class="card-body">
                            <div class="card__top d-flex align-items-center">
                                <img src="<?php echo $img?>/2.png" alt="" class="card__icon" />
                                <div class="card__title-top">Development</div>
                            </div>
                            <div class="card__bottom">
                                <div class="card__title">Development</div>
                                <p class="card__text">
                                    With our proprietary ideation and development...
                                </p>
                                <p class="card__text-fade">
                                    In diam lorem, condimentum non tempus blandit, lacinia sed purus. Ut maximus est et dui auctor tempor sit amet sed ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices .
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card preShow">
                        <div class="card-body">
                            <div class="card__top d-flex align-items-center">
                                <img src="<?php echo $img?>/3.png" alt="" class="card__icon" />
                                <div class="card__title-top">Testing</div>
                            </div>
                            <div class="card__bottom">
                                <div class="card__title">Testing</div>
                                <p class="card__text">
                                    With our proprietary ideation and development...
                                </p>
                                <p class="card__text-fade">
                                    In diam lorem, condimentum non tempus blandit, lacinia sed purus. Ut maximus est et dui auctor tempor sit amet sed ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices .
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xl-3 col-lg-6 col-md-6">
                    <div class="card preShow">
                        <div class="card-body">
                            <div class="card__top d-flex align-items-center">
                                <img src="<?php echo $img?>/4.png" alt="" class="card__icon" />
                                <div class="card__title-top">Sourcing</div>
                            </div>
                            <div class="card__bottom">
                                <div class="card__title">Sourcing</div>
                                <p class="card__text">
                                    Vestibulum ante ipsum primis in faucibus orci...
                                </p>
                                <p class="card__text-fade">
                                    In diam lorem, condimentum non tempus blandit, lacinia sed purus. Ut maximus est et dui auctor tempor sit amet sed ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices .
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 ">
                    <div class="card preShow">
                        <div class="card-body">
                            <div class="card__top d-flex align-items-center">
                                <img src="<?php echo $img?>/5.png" alt="" class="card__icon" />
                                <div class="card__title-top">Manufacturing</div>
                            </div>
                            <div class="card__bottom">
                                <div class="card__title">Manufacturing</div>
                                <p class="card__text">
                                    With our proprietary ideation and development...
                                </p>
                                <p class="card__text-fade">
                                    In diam lorem, condimentum non tempus blandit, lacinia sed purus. Ut maximus est et dui auctor tempor sit amet sed ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices .
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card preShow">
                        <div class="card-body">
                            <div class="card__top d-flex align-items-center">
                                <img src="<?php echo $img?>/6.png" alt="" class="card__icon" />
                                <div class="card__title-top">Logistics</div>
                            </div>
                            <div class="card__bottom">
                                <div class="card__title">Logistics</div>
                                <p class="card__text">
                                    Vestibulum ante ipsum primis in faucibus orci...
                                </p>
                                <p class="card__text-fade">
                                    In diam lorem, condimentum non tempus blandit, lacinia sed purus. Ut maximus est et dui auctor tempor sit amet sed ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices .
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- 4 : Text media block 7:5
     Options cols: 7:5 or 6:6
     -->
  <section class="tpl-block text-media-block bg-chalk image image-right full-text"><!-- Add class .image-right / set-padding-top / set-padding-bottom --><!-- Add class .full-text -->
    <div class="container-fluid g-0">
      <div class="row g-0 flex-lg-row-reverse flex-column-reverse"><!-- Option: .flex-row-reverse and flex-md-column-reverse : reverse for both desktop and mobile -->
        <div class="col-lg-6 image-col wow fadeInRightBig"  data-wow-duration="1s">
          <div class="image image-zoomin-effect size-4x3"><!-- Default 1x1 | .size-4x3 -->
            <img src="<?php echo $img ?>/Services/2.jpg" alt="Consumer Health &amp; Wellness">
          </div>
        </div>
        <div class="col-lg-6 content-col wow fadeInUpBig" data-wow-duration="1.8s" >
          <div class="content-box" >
            <h3 class="title">Softmatter Lab</h3>
            <div class="content">
              <p>We are pioneers of engineered soft-goods, integrating soft-goods with structure and embedded electronics.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- 5 : Tab block -->
  <section class="tpl-block tab-block tab-block-secondary bg-chalk" >
    <div class="container">
      <ul class="nav nav-tabs wow fadeIn"  data-wow-offset="10" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab-1" data-text="1" type="button" role="tab">
            <div  class="tab-title" >Design and Development</div>
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link"  data-bs-toggle="tab" data-bs-target="#tab-2" data-text="2" type="button" role="tab" >

            <div  class="tab-title">Materials</div>
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link"  data-bs-toggle="tab" data-bs-target="#tab-3" data-text="3" type="button" role="tab">

            <div  class="tab-title">Adavanced Engineering & Testing</div>
          </button>
        </li>
      </ul>
      <div class="tab-content" >
        <div class="tab-pane fade show active" id="tab-1" >
          <div class="row">
            <div class="col-lg-6 image">
              <img src="<?php echo $img?>/Services/3.jpg"/>
            </div>
            <div class="col-lg-6 text bg-dush">
              <div class="text-in">
                <div class="paragraph">
                  <p>Transforming designs into prototypes via electronic, design and product validation. Thats why an experienced partner can support you with your idea - safely and quickly. We will focus on diligent scoping and upfront risk detection and help you bridge a gap between a vision and a scaled product.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="tab-2" >
          <div class="row">
            <div class="col-lg-6 image">
                <img src="<?php echo $img?>/Services/3.jpg"/>
            </div>
            <div class="col-lg-6 text bg-dush">
              <div class="text-in">
                <div class="paragraph">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid culpa cumque debitis dignissimos doloribus fugit illum iure laudantium, minima nemo numquam sapiente, veniam. Dolor harum impedit laborum optio provident reiciendis.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="tab-3">
          <div class="row">
            <div class="col-lg-6 image">
                <img src="<?php echo $img?>/Services/3.jpg"/>
            </div>
            <div class="col-lg-6 text bg-dush">
              <div class="text-in">
                <div class="paragraph">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid culpa cumque debitis dignissimos doloribus fugit illum iure laudantium, minima nemo numquam sapiente, veniam. Dolor harum impedit laborum optio provident reiciendis.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <!-- 6: Title block -->
    <div class="tpl-block text-media-block bg-white  image  "><!-- Option: .bg-chalk; .image | .video  -->
        <div class="container-fluid g-0">
            <div class="row g-0 ">
                <!-- Option: Image -->
                <div class="col-lg-6 image-col full-height">
                    <div class="image image-zoomin-effect "><!-- Option: Default 1x1 | .size-4x3 -->
                        <img src="https://softmatter.project-staging.com/wp-content/uploads/2022/03/text-image-8.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 content-col" style="background-image: url('https://softmatter.project-staging.com/wp-content/uploads/2022/03/text-image-12.jpg')">
                    <div class="content-box  wow fadeInUp" data-wow-duration="1.5s" data-wow-offset="10">
                        <h6 class="sub-title">We Build with Purpose</h6>
                        <h3 class="title">We are the world’s
                            largest smart apparel
                            manufacturer</h3>
                        <div class="content">
                            <p>We integrate technology and fabric, and our commitment to sustainability and engineered craftsmanship means that we thoughtfully engage with both form and function.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 7 : Tab block 2 -->
    <section class="tpl-block tab-block tab-block-secondary bg-chalk" >
        <div class="container">
            <ul class="nav nav-tabs  wow fadeIn"  data-wow-offset="10" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab-21" data-text="1" type="button" role="tab">
                        <div  class="tab-title">NPI</div>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link"  data-bs-toggle="tab" data-bs-target="#tab-22" data-text="2" type="button" role="tab" >

                        <div  class="tab-title">Advanced Manufacturing</div>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link"  data-bs-toggle="tab" data-bs-target="#tab-23" data-text="3" type="button" role="tab">

                        <div  class="tab-title">Supply Chain</div>
                    </button>
                </li>
            </ul>
            <div class="tab-content" >
                <div class="tab-pane fade show active" id="tab-21" >
                    <div class="row">
                        <div class="col-lg-6 image">
                            <img src="<?php echo $img?>/Services/tab-1.jpg"/>
                        </div>
                        <div class="col-lg-6 text bg-dush">
                            <div class="text-in">
                                <div class="paragraph">
                                  <p>Transforming designs into prototypes via electronic, design and product validation. Thats why an experienced partner can support you with your idea - safely and quickly. We will focus on diligent scoping and upfront risk detection and help you bridge a gap between a vision and a scaled product.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-22" >
                    <div class="row">
                        <div class="col-lg-6 image">
                            <img src="<?php echo $img?>/Services/tab-1.jpg"/>
                        </div>
                        <div class="col-lg-6 text bg-dush">
                            <div class="text-in">
                                <div class="paragraph">
                                  <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aut autem consequatur facilis illum laboriosam magnam modi molestiae mollitia nobis nostrum numquam obcaecati odit omnis optio quas, ratione tempore tenetur!
                                  </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-23">
                    <div class="row">
                        <div class="col-lg-6 image">
                            <img src="<?php echo $img?>/Services/tab-1.jpg"/>
                        </div>
                        <div class="col-lg-6 text bg-dush">
                            <div class="text-in">
                              <div class="paragraph">
                                <p>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aut autem consequatur facilis illum laboriosam magnam modi molestiae mollitia nobis nostrum numquam obcaecati odit omnis optio quas, ratione tempore tenetur!
                                </p>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 8 : Text media Right
     Add more options padding-top: set-padding-top, padding-bottom: set-padding-bottom . Default none padding.
     -->
    <!-- CASE: IMAGE RIGHT -->
    <section class="tpl-block text-media-block bg-chalk image image-right set-padding-bottom full-text"><!-- Add class .image-right / set-padding-bottom / set-padding-top -->
        <div class="container-fluid g-0">
            <div class="row g-0 flex-row-reverse"><!-- Option: .flex-row-reverse : Reverse only desktop -->
                <div class="col-lg-6 image-col">
                    <div class="image image-zoomin-effect size-4x3"><!-- Default 1x1 | .size-4x3 -->
                        <img src="<?php echo $img ?>/Services/6.jpg" alt="Consumer Health & Wellness">
                    </div>
                </div>
                <div class="col-lg-6 content-col wow fadeInUpBig" data-wow-duration="1.8s" >
                    <div class="content-box">
                        <h3 class="title">Our commitment<br/>
                            to quality</h3>
                        <div class="content">
                            <p>We create life-changing products to meet and exceed customer expectations. We strive for the highest quality possible in our innovations within our emerging industry and are committed to continuous improvement. Softmatter operates within a global quality management system adhering to the requirements of ISO 9001, 14001 & 13485, OHSAS 18001 and LEED compliance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 9: Content Slider -->
    <section class="content-slider bg-dush tpl-block">
        <div class="d-lg-flex">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-sm-6 content-slider__left">
                        <div class="text wow fadeInUpBig" data-wow-duration="2s" data-wow-offset="10">
                            <div class="sub-title">PARTNERS</div>
                            <h2 class="title h3">Partners in
                                Innovation</h2>
                            <div class="paragraph">Our partners support our mission to advance human potential.</div>
                            <a href="" class="btn btn-success">Partner With Us</a>
                        </div>
                    </div>
                    <!--      <div class="col-md-8 ontent-slider__right">-->
                    <!--      </div>-->
                </div>
            </div>

            <div class="slider-container ">
                <div class="slider">
                    <div class="slider-item wow fadeInUpBig" data-wow-duration="2.3s" data-wow-offset="10">
                        <div class="slider__image slider__image-to-text">
                            <div>
                                <div class="slider__image--logo">
                                    <img src="<?php echo $img?>/Services/logo-1.svg"/>
                                </div>
                                <div class="slider__image--text">
                                    Loughborough University is a public research university, renowned for the excellence and relevance of research; their results help shape public policy, improve lives, and enable business and industry to compete more effectively.
                                </div>
                            </div>
                        </div><!-- Options replace image by text content : slider__image-to-text -->
                        <div class="slider__body">
                            <h3 class="slider__title">RESEARCH PARTNERS</h3>
                            <div class="slider__text">University of Loughborough
                        </div>
                    </div>
                </div>
                <div class="slider-item wow fadeInUpBig" data-wow-duration="2.3s" data-wow-offset="10">
                    <div class="slider__image slider__image-to-text">
                        <div>
                            <div class="slider__image--logo">
                                <img src="<?php echo $img?>/Services/logo-2.svg"/>
                            </div>
                            <div class="slider__image--text">
                                Loughborough University is a public research university, renowned for the excellence and relevance of research; their results help shape public policy, improve lives, and enable business and industry to compete more effectively.
                            </div>
                        </div>
                    </div>
                    <div class="slider__body">
                        <h3 class="slider__title">INDUSTRIAL DESIGN PART</h3>
                        <div class="slider__text">Priority Design</div>
                    </div>
                </div>
                <div class="slider-item wow fadeInUpBig" data-wow-duration="2.3s" data-wow-offset="10">
                    <div class="slider__image slider__image-to-text">
                        <div>
                            <div class="slider__image--logo">
                                <img src="<?php echo $img?>/Services/logo-1.svg"/>
                            </div>
                            <div class="slider__image--text">
                                Loughborough University is a public research university, renowned for the excellence and relevance of research; their results help shape public policy, improve lives, and enable business and industry to compete more effectively.
                            </div>
                        </div>
                    </div>
                    <div class="slider__body">
                        <h3 class="slider__title">INDUSTRIAL DESIGN PART</h3>
                        <div class="slider__text">University of Loughborough
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="container container-navigation d-none d-sm-flex justify-content-end position-relative">
            <!-- navigation for slider-->
            <ul class="slick-dots" >
                <li class="slick-active" data-slide="1">
                    <button type="button" role="tab" >1</button>
                </li>
                <li data-slide="2">
                    <button type="button" role="tab" >2</button>
                </li>
                <li data-slide="3">
                    <button type="button" role="tab" >3</button>
                </li>
            </ul>

            <!--Show this blog when have more 3 item-->
            <div class="d-inline-flex position-relative ">
                <button class="slick-prev slick-arrow position-static"></button>
                <button class="slick-next slick-arrow position-static"></button>
            </div>
        </div>
    </section>
    <!-- 10 : Title block Left -->
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
            <h2 class="title wow fadeInUp" data-wow-duration="1.5s" data-wow-offset="10">How to Engage</h2>
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


