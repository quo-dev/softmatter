<?php /* Template Name: Homepage 2022 */ ?>
<?php
get_header();
$img = get_template_directory_uri().'/assets/images';
echo '<main class="main">';
?>
    <!-- 1 : Hero
    Options :
        1. Background : image / video
        2. Type: full screen / two cols
            2.1: Full screen
            2.2: Two cols : add class '.two-cols'
                - Background type: bg-dush / bg-salmon / bg-chalk
        3. Height Hero: full screen (default) / .h-80vh (height: 80% screen)
    -->
    <section class="hero "><!-- h-80vh -->
        <div class="hero__item">
            <div class="hero__media">
                <!-- image for desktop-->
                <!-- <img src="--><?php //echo $img ?><!--/Home/1.jpg" class="d-none d-lg-block"/>-->
                <!-- image for mobile-->
                <img src="<?php echo $img ?>/Home/1.jpg" class="d-block d-lg-none"/>
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
            </div>
        </div>
    </section>


    <!-- 2 : TITLE BLOCK: CASE DEFAULT (Homepage)
        Classes in parent element:
        - Alignment: blank is center | .align-left for left
        - Background: blank is White | .bg-chalk : Yellow
        - Image:
    -->
    <!--option background color class name is :  bg-chalk, bg-mint, bg-dush-->
    <section class="tpl-block title-block bg-chalk">
        <div class="container">
            <div class="title-block__logo wow fadeInUp aligncenter" data-wow-duration="1.8s" data-wow-offset="100">
                <img src="<?php echo $img?>/logo-sm.svg"/>
            </div>
            <h2 class="heading-title heading-title-sm wow fadeInUp" data-wow-duration="1.8s" data-wow-offset="100">We are Softmatter</h2>
            <div class="desc wow fadeInUp" data-wow-duration="1.8s" data-wow-offset="100">
                <p>
                    A sketch to scale technology company that functions at the intersect of soft goods and wearables. Driven by this vision, we work towards crafting complete next-to-skin solutions that transform the way we live.</p>
            </div>
        </div>
    </section>

    <!-- 3: Title block for  Slider -->
    <section class="tpl-block title-block bg-dush">
        <div class="container wow fadeInUp" data-wow-offset="10" style="visibility: visible; animation-name: fadeInUp;">
            <h3 class="sub-title wow fadeInUp" data-wow-duration="1.8s" data-wow-offset="100" style="visibility: visible; animation-duration: 1.8s; animation-name: fadeInUp;">WHAT WE OFFER</h3>
            <h2 class="heading-title">Your end-to-end solution<br/> provider for all things smart.</h2>
            <div class="desc">
                <p>By combining years of expertise with stellar integration techniques, we bring ideas to life by crafting solutions that create new digital and functional experiences.</p>
            </div>
            <a href="platforms" class="btn btn-success wow fadeInUp" data-wow-duration="1.8s" data-wow-offset="100" style="visibility: visible; animation-duration: 1.8s; animation-name: fadeInUp;">Learn More</a>
        </div>
    </section>
    <!-- 4: Content Slider Columns -->
    <section class="content-slider bg-dush tpl-block content-slider-cols">
        <div class="container">
            <div class="slider-container">
                <div class=" sliderCols">
                    <div class="slider-item wow fadeInUpBig" data-wow-duration="2.3s" data-wow-offset="10">
                        <div class="slider__image image-zoomin-effect">
                            <img src="<?php echo $img ?>/Home/2.jpg" alt=""/>
                        </div>
                        <div class="slider__body">
                            <h3 class="slider__title">CONCEPT-TO-DELIVERY</h3>
                            <div class="slider__text">Enabling value creation from ideation to scaled manufacturing
                            </div>
                        </div>
                    </div>
                    <div class="slider-item wow fadeInUpBig" data-wow-duration="2.2s" data-wow-offset="10">
                        <div class="slider__image image-zoomin-effect">
                            <img src="<?php echo $img ?>/Home/proprietaryDevelopment.jpg" alt=""/>
                        </div>
                        <div class="slider__body">
                            <h3 class="slider__title ">Proprietary development process</h3>
                            <div class="slider__text">Our commitment to sustainability and engineered craftsmanship means that we are thoughtful in both design and function.

                            </div>
                        </div>
                    </div>
                    <div class="slider-item wow fadeInUpBig" data-wow-duration="2.1s" data-wow-offset="10">
                        <div class="slider__image image-zoomin-effect">
                            <img src="<?php echo $img ?>/Home/configurableTechstacks2.jpg" alt=""/>
                        </div>
                        <div class="slider__body">
                            <h3 class="slider__title ">Configurable Technology Stacks</h3>
                            <div class="slider__text">Pioneers of engineered soft-goods. Integrating soft-goods with structure and embedded electronics.

                            </div>
                        </div>
                    </div>

                    <div class="slider-item wow fadeInUpBig" data-wow-duration="2.1s" data-wow-offset="10">
                        <div class="slider__image image-zoomin-effect">
                            <img src="<?php echo $img ?>/Home/industrialStandards.jpg" alt=""/>
                        </div>
                        <div class="slider__body">
                            <h3 class="slider__title ">Industrial Standards</h3>
                            <div class="slider__text">
                                ISO 9001, 14001 & 13485, OHSAS 18001 and LEED compliant manufacturing facilities globally.

                            </div>
                        </div>
                    </div>

                    <div class="slider-item wow fadeInUpBig" data-wow-duration="2.1s" data-wow-offset="10">
                        <div class="slider__image image-zoomin-effect">
                            <img src="<?php echo $img ?>/Home/Manufacturing.JPG" alt=""/>
                        </div>
                        <div class="slider__body">
                            <h3 class="slider__title ">Manufacturing</h3>
                            <div class="slider__text">
                                Innovative manufacturing solutions - merging craftsmanship with consumer-electronics repeatability and scale.

                            </div>
                        </div>
                    </div>
                </div>
                <!--Show this blog when have more 3 item-->
                <button class="slick-prev slick-arrow position-static button-slick-alone"></button>
                <button class="slick-next slick-arrow position-static button-slick-alone"></button>
            </div>
        </div>
        <!-- if qty item slider > 3 add class .d-sm-flex -->
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
              <li data-slide="4">
                <button type="button" role="tab" >4</button>
              </li>
              <li data-slide="5">
                <button type="button" role="tab" >5</button>
              </li>
            </ul>


        </div>
    </section>

    <!-- 4.2: Content Slider Columns - qty item = 3 -->
    <section class="content-slider bg-dush tpl-block content-slider-cols">
        <div class="container">
            <div class="slider-container">
                <div class=" sliderCols">
                    <div class="slider-item wow fadeInUpBig" data-wow-duration="2.3s" data-wow-offset="10">
                        <div class="slider__image image-zoomin-effect">
                            <img src="<?php echo $img ?>/Home/2.jpg" alt=""/>
                        </div>
                        <div class="slider__body">
                            <h3 class="slider__title">CONCEPT-TO-DELIVERY</h3>
                            <div class="slider__text">Enabling value creation from ideation to scaled manufacturing
                            </div>
                        </div>
                    </div>
                    <div class="slider-item wow fadeInUpBig" data-wow-duration="2.2s" data-wow-offset="10">
                        <div class="slider__image image-zoomin-effect">
                            <img src="<?php echo $img ?>/Home/proprietaryDevelopment.jpg" alt=""/>
                        </div>
                        <div class="slider__body">
                            <h3 class="slider__title ">Proprietary development process</h3>
                            <div class="slider__text">Our commitment to sustainability and engineered craftsmanship means that we are thoughtful in both design and function.

                            </div>
                        </div>
                    </div>
                    <div class="slider-item wow fadeInUpBig" data-wow-duration="2.1s" data-wow-offset="10">
                        <div class="slider__image image-zoomin-effect">
                            <img src="<?php echo $img ?>/Home/configurableTechstacks2.jpg" alt=""/>
                        </div>
                        <div class="slider__body">
                            <h3 class="slider__title ">Configurable Technology Stacks</h3>
                            <div class="slider__text">Pioneers of engineered soft-goods. Integrating soft-goods with structure and embedded electronics.

                            </div>
                        </div>
                    </div>


                </div>
                <!--Show this blog when have more 3 item-->
                <button class="slick-prev slick-arrow position-static button-slick-alone"></button>
                <button class="slick-next slick-arrow position-static button-slick-alone"></button>
            </div>
        </div>
        <!-- if qty item slider <=3 remove class .d-sm-flex -->
        <div class="container container-navigation  d-none justify-content-end position-relative d-md-none">
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
        </div>
    </section>

        <!-- 5: List Text Block -->
        <!-- Options:
            1. Background: bg-mint/ bg-dush / bg-chalk -->
        <section class="list-text-block tpl-block bg-mint">
            <div class="container">
                <div class="row">
                    <h2 class="sub-title wow fadeInDown">AT A GLANCE</h2>
                    <div class="list-text-slider wow fadeInUpBig" data-wow-duration="1s" data-wow-offset="10">
                        <div class="list">
                            <div class="title title-lg">4</div>
                            <div class="sub-text">Countries</div>
                        </div>
                        <div class="list">
                            <div class="title title-lg">ISO 9001 </div>
                            <div class="sub-text"> and ISO 13485 COMPLIANT</div>
                        </div>
                        <div class="list">
                            <div class="title title-lg">50</div>
                            <div class="sub-text"> Products Launched</div>
                        </div>
                        <div class="list">
                            <div class="title title-lg">25+</div>
                            <div class="sub-text">Patents</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    <!-- 6 TITLE BLOCK: CASE DEFAULT (Homepage)
        Classes in parent element:
        - Alignment: blank is center | .align-left for left
        - Background: blank is White | .bg-chalk : Yellow
    -->
    <!--option background color class name is :  bg-chalk, bg-mint, bg-dush-->
    <section class="tpl-block title-block bg-chalk">
        <div class="container">
            <h3 class="sub-title wow fadeInUp" data-wow-duration="1.8s" data-wow-offset="100">THE TECHNOLOGY</h3>
            <h2 class="heading-title wow fadeInUp" data-wow-duration="1.8s" data-wow-offset="100">Platforms</h2>
            <div class="desc wow fadeInUp" data-wow-duration="1.8s" data-wow-offset="100">
                <p>
                    A collection of passive and active technologies that have been
                    built via strong consumer research, to solve for real needs.
                </p>
            </div>
            <a href="platforms" class="btn btn-dark wow fadeInUp" data-wow-duration="1.8s" data-wow-offset="100">Explore all Platforms</a>
        </div>
    </section>

   <!-- 7: CARD 3 BLOCK : CASE DEFAULT (Homepage)
        - Have read more

        Classes in parent element:
        - Have List content: .has-list-content
    -->
    <section class="tpl-block card-3-cols-block bg-chalk">
        <div class="container">
            <div class="row cards-layout">
                <div class="col-md-4">
                    <div class="card-item wow fadeInUpBig" data-wow-duration="1.8s" data-wow-offset="100">
                        <!-- Option: Image -->
                        <a href="#" class="image image-zoomin-effect"  ><!-- Can switch <a> or <div> -->
                            <img src="<?php echo $img ?>/card-img-6.jpg" alt="Textile Engineering Image">
                        </a>
                        <!-- Option: Video -->
                        <!--                    <div class="video-wrap size-1x1">-->
                        <!--                        <video width="400" autoplay muted loop>-->
                        <!--                            <source src="--><?php //echo $img ?><!--/BrandTexture.mov" type="video/mp4">-->
                        <!--                        </video>-->
                        <!--                    </div>-->
                        <div class="wrap-content">
                            <h3 class="title"><a href="#">Textile engineering</a></h3>
                            <div class="content">
                                <p>
                                    Powering Soft Textile Integration
                                </p>
                            </div>
                            <div class="cta">
                                <a href="/textile-engineering" class="btn btn-outline-secondary">
                                    Learn more
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-item wow fadeInUpBig" data-wow-duration="1.9s" data-wow-offset="100">
                        <a href="#" class="image image-zoomin-effect"><!-- Can switch <a> or <div> -->
                            <img src="<?php echo $img ?>/card-img-7.jpg" alt="Advanced Materials">
                        </a>
                        <div class="wrap-content"  >
                            <h3 class="title"><a href="#">Integrated Technologies</a></h3>
                            <div class="content">
                                <p>
                                    Integrated Technologies
                                </p>
                            </div>
                            <div class="cta">
                                <a href="/integrated-technologies" class="btn btn-outline-secondary">
                                    Learn more
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-item wow fadeInUpBig" data-wow-duration="2.1s" data-wow-offset="100">
                        <a href="#" class="image image-zoomin-effect"><!-- Can switch <a> or <div> -->
                            <img src="<?php echo $img ?>/card-img-8.jpg" alt="Advanced Materials">
                        </a>
                        <div class="wrap-content"  >
                            <h3 class="title"><a href="#">Advanced Materials</a></h3>
                            <div class="content">
                                <p>Elevated circuitry and materiality</p>
                            </div>
                            <div class="cta">
                                <a href="/advanced-material" class="btn btn-outline-secondary">
                                    Learn more
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- 7: Content Slider -->
    <section class="content-slider bg-dush tpl-block">
        <div class="d-lg-flex">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-sm-6 content-slider__left">
                      <div class="text wow fadeInUpBig" data-wow-duration="2s" data-wow-offset="10">
                            <div class="sub-title">APPLICATIONS</div>
                            <h2 class="title h3" >Unlocking new dimensions of Smarter Living.</h2>
                            <div class="paragraph">
                              Our Global labs create and accelerate solutions for our customer partners with industry-focused Innovation. Solutions built across a variety of applications
                            </div>
                            <a href="" class="btn btn-outline-secondary">Learn more</a>
                    </div>
                </div>
                <!--      <div class="col-md-8 ontent-slider__right">-->
                <!--      </div>-->
            </div>
        </div>
        <div class="slider-container">
            <div class="slider">
                <div class="slider-item wow fadeInUpBig" data-wow-duration="2.3s" data-wow-offset="10">
                    <div class="slider__image image-zoomin-effect">
                        <img src="<?php echo $img?>/Unlocking/Wearables.gif" alt="" />
                    </div>
                    <div class="slider__body">
                        <h3 class="slider__title">WEARABLES</h3>
                        <div class="slider__text">
                          Pioneers in the wearable tech space with a portfolio of patented smart soft technologies
                        </div>
                    </div>
                </div>
                <div class="slider-item wow fadeInUpBig" data-wow-duration="2.2s" data-wow-offset="10">
                    <div class="slider__image image-zoomin-effect">
                        <img src="<?php echo $img?>/Unlocking/Connected-Clothing.gif" alt="" />
                    </div>
                    <div class="slider__body">
                        <h3 class="slider__title ">Connected Clothing</h3>
                        <div class="slider__text">Utilizing fabric-integrated sensors and actuators to create next-generation connected clothing solutions.</div>
                    </div>
                </div>
                <div class="slider-item wow fadeInUpBig" data-wow-duration="2.1s" data-wow-offset="10">
                    <div class="slider__image image-zoomin-effect">
                        <img src="<?php echo $img?>/Unlocking/Connected-Devices.png" alt="" />
                    </div>
                    <div class="slider__body">
                        <h3 class="slider__title ">Connected Devices</h3>
                        <div class="slider__text">Improving both aesthetics and functionality via the replacement of rigid exteriors with smart textiles for connected devices are endless.
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


    <!-- 8: -->
    <!-- TITLE BLOCK : CASE 2 (Homepage)
        - Background White
        - No sub-title
        - No Button

        Classes in parent elements:
        - Background: blank is White | .bg-chalk : Yellow
        - Alignment: blank is center | .align-left for left
    -->
    <!--option background color class name is :  bg-chalk, bg-mint, bg-dush-->
    <section class="tpl-block title-block bg-chalk">
        <div class="container wow fadeInUp"  data-wow-offset="10">
            <h3 class="sub-title wow fadeInUp" data-wow-duration="1.8s" data-wow-offset="100">INDUSTRIES</h3>
            <h2 class="heading-title">Areas of Play</h2>
            <div class="desc">
                <p>Pioneering groundbreaking innovations, to craft a smarter tomorrow for a variety of brands</p>
            </div>
            <a href="platforms" class="btn btn-dark wow fadeInUp" data-wow-duration="1.8s" data-wow-offset="100">Learn More</a>
        </div>
    </section>

    <!-- 9 -->
    <!-- TEXT MEDIA BLOCK: text-media-block.php
        Case options:
        1. Background Block: White | Yellow Light
        2. Image + Video Column: Left | Right;
        3. Button in content col
        4. Is Hero Banner (First block in Application page)
        5. Set full height for Image & Video when the content is too long (Application page)
     -->
    <!--option background color class name is :  bg-chalk, bg-mint, bg-dush-->
    <!-- CASE: IMAGE RIGHT -->
    <section class="tpl-block text-media-block bg-chalk image image-right"><!-- Add class .image-right -->
        <div class="container-fluid g-0">
            <div class="row g-0 flex-row-reverse"><!-- Option: .flex-row-reverse -->
                <div class="col-lg-6 image-col">
                    <div class="image image-zoomin-effect size-4x3" style="background-image: url('<?php echo $img ?>/text-image-20.jpg')"><!-- Default 1x1 | .size-4x3 -->
<!--                        <img src="--><?php //echo $img ?><!--/text-image-20.jpg" alt="Consumer Health & Wellness">-->
                    </div>
                </div>
                <div class="col-lg-6 content-col wow fadeInUpBig" data-wow-duration="1.8s" >
                    <div class="content-box">
                        <h3 class="title">Consumer Health<br/> and Wellness</h3>
                        <div class="content">
                            <p>Building products that improve health outcomes while enabling increased consumer adoption and adherence by solving for wearability.</p>
                        </div>
                        <a href="#" class="btn btn-outline-secondary">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CASE: IMAGE LEFT (default) -->
    <section class="tpl-block text-media-block bg-chalk"><!-- Option: .bg-chalk; .image | .video  -->
        <div class="container-fluid g-0">
            <div class="row g-0">
                <!-- Option: Image -->
                <div class="col-lg-6 image-col">
                    <div class="image image-zoomin-effect size-4x3"  style="background-image: url('<?php echo $img ?>/text-image-21.jpg')"><!-- Option: Default 1x1 | .size-4x3 -->
<!--                        <img src="--><?php //echo $img ?><!--/text-image-21.jpg" alt="Consumer Health & Wellness">-->
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
                        <h3 class="title">Consumer Technology</h3>
                        <div class="content">
                            <p>Re-configuring devices around softer interfaces amidst the drive to make technology invisible.</p>
                        </div>
                        <a href="#" class="btn btn-outline-secondary">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CASE: IMAGE RIGHT -->
    <section class="tpl-block text-media-block bg-chalk image image-right"><!-- Add class .image-right -->
        <div class="container-fluid g-0">
            <div class="row g-0 flex-row-reverse"><!-- Option: .flex-row-reverse -->
                <div class="col-lg-6 image-col">
                    <div class="image image-zoomin-effect size-4x3" style="background-image: url('<?php echo $img ?>/text-image-22.jpg')"><!-- Default 1x1 | .size-4x3 -->
<!--                        <img src="--><?php //echo $img ?><!--/text-image-22.jpg" alt="Consumer Health & Wellness">-->
                    </div>
                </div>
                <div class="col-lg-6 content-col wow fadeInUpBig" data-wow-duration="1.8s" >
                    <div class="content-box">
                        <h3 class="title">Outdoor & Workwear</h3>
                        <div class="content">
                            <p>Leveraging our wide technology collection to build soft goods that allow you to perform at your best, while staying safe.</p>
                        </div>
                        <a href="#" class="btn btn-outline-secondary">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- 10:
    option background color class name is :  bg-chalk, bg-mint, bg-dush
    -->
    <section class="tpl-block our-stories bg-dush">
<!--        <div class="bg-image">-->
<!--            <img class="bg-image-img" src="--><?php //echo $img?><!--/bg-stories.jpg" >-->
<!--        </div>-->
        <div class="container-fluid g-0">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="our-stories__left wow bounceInUp" data-wow-duration="1.8s" data-wow-offset="10">
                        <div class="sub-title">OUR SUCCESS STORIES</div>
                        <ul class="nav story-nav flex-column">
                            <li class="current" data-slide="1">
                                <a href="">Odlo I-Thermic</a>
                            </li>
                            <li data-slide="2">
                                <a href="">Napapijiri - VF</a>
                            </li>
                            <li data-slide="3">
                                <a href="">Nivea</a>
                            </li>
                            <li data-slide="4">
                                <a href="">Athos</a>
                            </li>
                            <li data-slide="5">
                                <a href="">Lifesense</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="our-stories__right story wow " data-wow-duration="1.8s" data-wow-offset="10" >
                        <div class="story-item" style="background-image: url('<?php echo $img?>/bg-stories.jpg')">
                            <div>
                                <div class="story-item__text">
                                    “I-Thermic gives you the freedom and lightness, your ski-day will not be ruined”
                                </div>
                                <div class="story-item__author">
                                    — Timo Pape, OLDO Brand Director
                                </div>
                                <div class="story-item__bottom">
                                    <p><strong>Smart heating base layer with temperature sensing</strong></p>
                                    In collaboration with the outdoor brand Odlo, our proprietary heating technology was integrated into a washable mid-layer that was targeted at the Ski wear space.
                                </div>
                            </div>

                        </div>
                        <div class="story-item" style="background-image: url('<?php echo $img?>/bg-stories.jpg')">
                            <div>
                                <div class="story-item__bottom">
                                    <p><strong>Rainwear jacket with an illuminated logo</strong></p>
                                    Our proprietary lighting integration allowed the brand to engage with its customers differently and offer an aesthetic point of differentiation.
                                </div>
                            </div>

                        </div>
                        <div class="story-item" style="background-image: url('<?php echo $img?>/bg-stories.jpg')">
                            <div>
                                <div class="story-item__text">
                                    “I-Thermic gives you the freedom and lightness, your ski-day will not be ruined”
                                </div>
                                <div class="story-item__author">
                                    - Beiersdorf team
                                </div>
                                <div class="story-item__bottom">
                                    <p><strong>Sweat-sensing t-shirt</strong></p>
                                    In cooperation with Beiersdorf, we developed a t-shirt that measures sweat, to better understand individual sweating and the effects of NIVEA antiperspirant products.
                                </div>
                            </div>

                        </div>
                        <div class="story-item" style="background-image: url('<?php echo $img?>/bg-stories.jpg')">
                            <div>
                                <div class="story-item__text">

                                    “I-Thermic gives you the freedom and lightness, your ski-day will not be ruined””

                                </div>
                                <div class="story-item__author">
                                    – Dhananjaya Jayalath, Founder, Athos
                                </div>
                                <div class="story-item__bottom">
                                    <p><strong>Sensing and technique correction</strong></p>
                                    Leveraging the power of IMU and ECG sensing, we integrated sensors into an apparel collection targeted at professional athletes for use during their fitness programs.
                                </div>
                            </div>
                        </div>
                        <div class="story-item" style="background-image: url('<?php echo $img?>/bg-stories.jpg')">
                           <div>
                               <!--                <div class="story-item__text">-->
                               <!--                  “I-Thermic gives you the freedom and lightness, your ski-day will not be ruined”-->
                               <!--                </div>-->
                               <!--                <div class="story-item__author">-->
                               <!--                  — Timo Pape, OLDO Brand Director-->
                               <!--                </div>-->
                               <div class="story-item__bottom">
                                   <p><strong>Smart urinary incontinence underwear</strong></p>
                                   In partnership with Carin, we developed patented smart underwear that pairs with a wearable sensor and tracking app, to create a tailored exercise program designed to eliminate leaks in a matter of weeks.
                                   The Softmatter team helped LifeSense provide a high quality and comfortable product for women using the latest production technologies.
                               </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- 11: -->
    <!-- TEXT MEDIA BLOCK: text-media-block-2.php
    Case options:
    1. Background Block: White | Yellow Light
    2. Image + Video Column: Left | Right;
    3. Button in content col
    4. Is Hero Banner (First block in Application page)
    5. Set full height for Image & Video when the content is too long (Application page)
    -->
    <!--option background color class name is :  bg-chalk, bg-mint, bg-dush-->
    <!-- CASE: IMAGE LEFT (default) -->
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



    <!-- 12: Latest News -->
    <!--option background color class name is :  bg-chalk, bg-mint, bg-dush-->
    <section class="latest-block tpl-block">
        <div class="container">
            <h2 class="h3 text-center wow fadeInUpBig" data-wow-duration="1.8s"  data-wow-offset="10">Latest news</h2>
            <div class="row">
                <div class="col-md-4 wow fadeInUpBig" data-wow-duration="1.8s" data-wow-offset="10">
                    <div class="article">
                        <a href="https://moderncraft.io/2021/09/16/reinventing-devices-for-today-and-tomorrow-through-the-lens-of-wearable-technology-and-smart-textiles/" class="article__image image-zoomin-effect">
                            <!-- image size ratio 399x252 19 : 12-->
                            <img src="<?php echo $img ?>/article-1.png" alt="" />
                        </a>
                        <div class="article__body">
                            <h3 class="article__title mb-4">Product & Innovation</h3>
                            <div class="article__text">
                                Reinventing devices for today and tomorrow: Through the lens of wearable technology and smart textiles
                            </div>
                            <a href="https://moderncraft.io/2021/09/16/reinventing-devices-for-today-and-tomorrow-through-the-lens-of-wearable-technology-and-smart-textiles/" class="more">Read more ></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUpBig" data-wow-duration="1.9s" data-wow-offset="10">
                    <div class="article">
                        <a href="https://moderncraft.io/2021/09/16/ar-vr-smart-textile/" class="article__image image-zoomin-effect">
                            <!-- image size ratio 399x252 19 : 12-->
                            <img src="<?php echo $img ?>/article-3.png" alt="" />
                        </a>
                        <div class="article__body">
                            <h3 class="article__title mb-4">Product & Innovation</h3>
                            <div class="article__text">
                                Game Changer for AR and VR: Smart Textiles
                            </div>
                            <a href="https://moderncraft.io/2021/09/16/ar-vr-smart-textile/" class="more">Read more ></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUpBig" data-wow-duration="2.0s" data-wow-offset="10">
                    <div class="article">
                        <a href="https://moderncraft.io/2021/09/15/product-engineering/" class="article__image image-zoomin-effect">
                            <!-- image size ratio 399x252 19 : 12-->
                            <img src="<?php echo $img ?>/article-2.png" alt="" />
                        </a>
                        <div class="article__body">
                            <h3 class="article__title mb-4">sustainability</h3>
                            <div class="article__text">
                                Evolved from a futuristic accessory to a ubiquitous health & wellness wearable: engineering human factors in smartwatches and wristables
                            </div>
                            <a href="https://moderncraft.io/2021/09/15/product-engineering/" class="more">Read more ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>











<?php
echo '</main>';

get_footer();
?>





