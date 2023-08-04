<?php
/**
 * Template Name: Page About
 * Description: About Page Demo
 *
 */

get_header();
$img = get_template_directory_uri().'/assets/images';
?>
<main class="main">
    <section class="tpl-block text-media-block image bg-dush"><!-- Option: .bg-chalk; .image | .video  -->
        <div class="background">
            <div class="image"><img src="<?php echo $img ?>/bg-11.jpg" alt="Industry Focused Innovation"></div>
        </div>
        <div class="container-fluid g-0">
            <div class="row g-0 align-items-stretch">
                <!-- Option: Image -->
                <div class="col-lg-6 image-col order-lg-2"><!-- Option: .full-height (when the content is too long) -->
                    <div class="image image-zoomin-effect"><!-- Default 1x1 | .size-4x3 -->
                        <img class="img" src="<?php echo $img ?>/demo/about-hero-banner.png" alt="Consumer Health &amp; Wellness">
                    </div>
                </div>

                <div class="col-lg-6 content-col">
                    <div class="content-box" ><!-- Option: .text-white -->
                        <h1 class="title wow bounceInUp" data-wow-duration="1s" data-wow-offset="10">
                            Re-imagining <br>the future of <br>textiles</h1>
                        <div class="content wow bounceInUp" data-wow-duration="1.1s" data-wow-offset="10" >
                            <p>Crafting a smarter future via consumer centricity</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tpl-block title-block bg-chalk">
        <div class="container"  >
            <h3 class="sub-title wow fadeInUpBig" data-wow-duration="1s" data-wow-offset="10">EMPOWERING HUMAN EXPERIENCES</h3>
            <h2 class="heading-title heading-title-sm wow fadeInUpBig" data-wow-duration="1.5s" data-wow-offset="10">
                Intertwining elements that embody <br>the human experience
            </h2>
            <div class="desc wow fadeInUpBig" data-wow-duration="2s" data-wow-offset="10">
                <p>Born from innovation, we seek to intertwine elements that embody <br>human experience and technology, to craft complete next-to-skin <br>solutions that transform the way we live.</p>
            </div>
            <!--        <a href="#" class="btn btn-dark">Platform Features</a>-->
        </div>
    </section>

    <section class="tpl-block title-block bg-dush">
        <div class="container wow fadeInUp" data-wow-offset="10" >
            <!-- <h3 class="sub-title">OUR PADDING</h3>-->
            <h2 class="heading-title text-green">We are Purpose Driven</h2>
            <div class="desc">
                <p>“Redefining how technology feels by integrating the smart with the soft, <br>to positively impact everyday lives”</p>
            </div>
            <!--        <a href="#" class="btn btn-dark">Platform Features</a>-->
        </div>
    </section>

    <!--  TEXT MEDIA BLOCK with Content Slider -->
    <section class="tpl-block text-media-block bg-dush image image-left has-content-slider"><!-- Add class .image-right .content-slider -->
        <div class="container-fluid g-0">
            <div class="row g-0 "><!-- Option: .flex-row-reverse -->
                <div class="col-lg-6 image-col">
                    <div class="image image-zoomin-effect size-4x3"><!-- Default 1x1 | .size-4x3 -->
                        <img src="<?php echo $img ?>/demo/ezgif.com-gif-maker.jpg" alt="Consumer Health &amp; Wellness">
                    </div>
                </div>

                <div class="col-lg-6 content-col wow fadeInUpBig" data-wow-duration="1.8s" >
                    <div class="content-box">
                        <h3 class="title">Our Story</h3>
                        <div class="content text-slider"><!-- Add class .content-slider -->
                            <div class="content-item">
                                <p>As we bring technology closer to people, we are threading progress and empowerment into the fabric of the future.</p>
                            </div>
                            <div class="content-item">
                                <p>When was the last time you felt a sense of wonder when experiencing technology? When a real need was met by a solution that simply worked? It’s a rare feeling, isn’t it? We see this in our industry. Wearables become gimmicky, textiles become unsustainable and innovation becomes disconnected from need.</p>
                                <p class="text-green">We are here to change all that.</p>
                            </div>
                            <div class="content-item">
                                <p>By weaving technology into textiles, we push the boundaries of what is imaginable – and accessible –  for our users, our partners and our industry. We amplify creative vision with manufacturing scale to redefine how technology feels to people.</p>
                            </div>
                            <div class="content-item">
                                <p>We’re driven by thoughtful momentum, where our inventiveness is rooted in real-world needs. From a moment of fun to a sigh of relief, we’re intrinsic to people’s lives.</p>
                            </div>
                            <div class="content-item">
                                <p>We are a diverse global team spun from a rich common heritage. We combine the entrepreneurial spirit of a newcomer with the credibility of a veteran. From sketch to shelf, from technology to healthcare, and from startups to large enterprises, we are the partner of choice to integrate the smart with the soft at scale. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END TEXT MEDIA BLOCK with Content Slider -->

    <!-- TEXT THREE COLS -->
    <section class="tpl-block text-three-cols three-cols-slider bg-dush">
        <div class="container">
            <h2 class="block-title wow fadeInUpBig" data-wow-duration="1.8s">Who we are</h2>
            <div class="wrap-slider wow fadeInUpBig" data-wow-duration="2.3s" data-wow-offset="10">
                <div class="text-slider">
                    <div class="text-item">
                        <h3 class="title">Speed</h3>
                        <div class="desc">
                            to Market Best production and delivery approach
                        </div>
                    </div>
                    <div class="text-item">
                        <h3 class="title">Excellence</h3>
                        <div class="desc">
                            in quality Deep industry and cross-industry expertise
                        </div>
                    </div>
                    <div class="text-item">
                        <h3 class="title">Vertically</h3>
                        <div class="desc">
                            integrated supply chain
                        </div>
                    </div>
                    <div class="text-item">
                        <h3 class="title">Pioneers</h3>
                        <div class="desc">
                            of Smart soft goods, with a portfolio of patented technologies.
                        </div>
                    </div>
                    <div class="text-item">
                        <h3 class="title">Powered by</h3>
                        <div class="desc">
                            MAS Holdings – SA’s largest apparel-tech conglomerate
                        </div>
                    </div>
                    <div class="text-item">
                        <h3 class="title">Best in class</h3>
                        <div class="desc">
                            DFM, DFA and DFX
                        </div>
                    </div>
                    <div class="text-item">
                        <h3 class="title">Eco-system</h3>
                        <div class="desc">
                            Leveraging broad capabilities and longstanding partners
                        </div>
                    </div>
                    <div class="text-item">
                        <h3 class="title">Largest</h3>
                        <div class="desc">
                            smart apparel manufacturer
                        </div>
                    </div>
                    <div class="text-item">
                        <h3 class="title">Low impact</h3>
                        <div class="desc">
                            Manufacturing processes and building towards circularity
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- TEXT THREE COLS -->

    <!-- Content Slider -->
    <section class="content-slider bg-salmon tpl-block"><!-- Case Slider has 3 cols add class .slider-3-items -->
        <div class="d-lg-flex">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-sm-6 content-slider__left">
                        <div class="text wow fadeInUpBig" data-wow-duration="2s" data-wow-offset="10">
                            <div class="sub-title">AWARDS</div>
                            <h2 class="title h3">Revolutionary Thinking with Purpose based Design</h2>
                            <div class="paragraph">We have received numerous global accolades for our proprietary wearable technology platforms and product development. Our track record of innovation and foresight is well recognized by startups and industry leaders alike.</div>
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
                        <div class="slider__image botttom-radito-120 image-zoomin-effect"><!-- add class .bottom-ratio-120 for case The image is longer than it is tall -->
                            <img src="<?php echo $img ?>/demo/ezgif-1.jpg" alt="Demo Image"/>
                        </div>
                        <div class="slider__body">
                            <h3 class="slider__title">ISPO 2018 and CES 2017</h3>
                            <div class="slider__text">Awarded for our work in creating a state-of-the-art washable lighting system via LEDs that provides lighting up to 450 feet.next-to-skin structures without hindering functionality and long-term use.</div>
                        </div>
                    </div>
                    <div class="slider-item wow fadeInUpBig" data-wow-duration="2.2s" data-wow-offset="10">
                        <div class="slider__image botttom-radito-120 image-zoomin-effect"><!-- add class .bottom-ratio-120 for case The image is longer than it is tall -->
                            <img src="<?php echo $img ?>/demo/ezgif-2.jpg" alt="Demo Image"/>
                        </div>
                        <div class="slider__body">
                            <h3 class="slider__title ">ISPO 2019 and CES 2019</h3>
                            <div class="slider__text">Awarded for our collaboration with Odlo and Clim8 in creating an on-demand smart heating mid layer with temperature sensors integrated seamlessly for automatic regulation.</div>
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
            </ul>

            <!--Show this blog when have more 3 item-->
            <div class="d-inline-flex position-relative ">
                <button class="slick-prev slick-arrow position-static"></button>
                <button class="slick-next slick-arrow position-static"></button>
            </div>
        </div>
    </section>
    <!-- Content Slider -->


    <!-- VIDEO BLOCK -->
    <section class="tpl-block video-block-yt bg-chalk">
        <div class="container">
            <h3 class="sub-title wow fadeInUpBig" data-wow-duration="1.5s" data-wow-offset="10">POWERED BY</h3>
            <h2 class="title wow fadeInUpBig" data-wow-duration="1.5s" data-wow-offset="10" data-wow-delay="0.25s">MAS Holdings</h2>
            <div class="desc wow fadeInUpBig" data-wow-duration="1.5s" data-wow-offset="10" data-wow-delay="0.25s">
                <p>MAS is Southeast Asia’s largest textile and apparel manufacturer, with over 30 years of experience.  Through the expertise gained by working with some of the largest global consumer brands, we have built  unparalleled knowledge of the human body, material science, and textile wearability. We have evolved to  become more than just a manufacturer but a valued technology partner. Softmatter is backed by MAS  and born through innovation to pioneer robust, sustainable, and integrated textile innovations.</p>
            </div>

            <div class="ratio ratio-4x2 wow fadeInUpBig" data-wow-duration="1.5s" data-wow-offset="10" data-wow-delay="0.25s">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/RbUAKdTTUII" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>

     <?php include('views/blocks/leadership.php') ?>

    <section class="tpl-block title-block bg-chalk">
        <div class="container">
            <h3 class="sub-title wow fadeInUpBig" data-wow-duration="1s" data-wow-offset="10" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUpBig;">OUR APPROACH TO</h3>
            <h2 class="heading-title heading-title-sm wow fadeInUpBig" data-wow-duration="1.5s" data-wow-offset="10" style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUpBig;">Sustainability</h2>
            <div class="desc wow fadeInUpBig" data-wow-duration="2s" data-wow-offset="10" style="visibility: visible; animation-duration: 2s; animation-name: fadeInUpBig;">
                <p>At Softmatter, we are committed to creating sustainable value for all our stakeholders: we continuously innovate to provide the best solutions for our customers. We invest in the development of our employees and partners, and apply eco-efficient practices across all our business activities.</p>
            </div>
            <a href="#" class="btn btn-dark wow fadeInUpBig" data-wow-duration="2s" data-wow-offset="10">Learn More</a>
        </div>
    </section>

    <section class="tpl-block card-hover-block bg-chalk">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="car-hover-item wow fadeInUpBig" data-wow-duration="1s" data-wow-offset="10">
                        <div class="image">
                            <img class="img" src="<?php echo $img?>/demo/card-hover-1.jpg" alt="Demo Image">
                            <div class="hover-info">
                                <img src="<?php echo $img ?>/svg/icon-earth.svg" alt="SoftMater" class="icon">
                                <ul class="list-info">
                                    <li>+ Craftsmanship</li>
                                    <li>+ Designed to Last</li>
                                    <li>+ Technical Efficacy</li>
                                </ul>
                            </div>
                        </div>
                        <div class="content">
                            <h2 class="title">Product Goals</h2>
                            <h3 class="sub-title">Built to Last</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="car-hover-item wow fadeInUpBig" data-wow-duration="1.5s" data-wow-offset="10">
                        <div class="image">
                            <<img class="img" src="<?php echo $img?>/demo/card-hover-2.jpg" alt="Demo Image">
                            <div class="hover-info">
                                <img src="<?php echo $img ?>/svg/icon-diamond.svg" alt="SoftMater" class="icon">
                                <ul class="list-info">
                                    <li>+ Responsible Materials</li>
                                    <li>+ Considered Process</li>
                                </ul>
                            </div>
                        </div>
                        <div class="content">
                            <h2 class="title">Product Goals</h2>
                            <h3 class="sub-title">Built to Last</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="car-hover-item wow fadeInUpBig" data-wow-duration="2s" data-wow-offset="10">
                        <div class="image">
                            <img class="img" src="<?php echo $img?>/demo/card-hover-3.jpg" alt="Demo Image">
                            <div class="hover-info">
                                <img src="<?php echo $img ?>/svg/people.svg" alt="SoftMater" class="icon">
                                <ul class="list-info">
                                    <li>+ Gender Parity</li>
                                    <li>+ Health Equity</li>
                                    <li>+ Accessibility</li>
                                </ul>
                            </div>
                        </div>
                        <div class="content">
                            <h2 class="title">Product Goals</h2>
                            <h3 class="sub-title">Built to Last</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tpl-block text-media-block bg-chalk image"><!-- Option: .bg-chalk; .image | .video  -->
        <div class="container-fluid g-0">
            <div class="row g-0 align-items-stretch">
                <!-- Option: Image -->
                <div class="col-lg-6 image-col full-height"><!-- Option: .full-height (when the content is too long) -->
                    <div class="image image-zoomin-effect"><!-- Default 1x1 | .size-4x3 -->
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/how-to-get-start-green.jpg" alt="Consumer Health & Wellness">
                        <!--option logo-->
                        <span class="image-logo">
                          <img src="<?php echo get_template_directory_uri() ?>/assets/images/big-logo.png" alt="Consumer Health & Wellness">
                        </span>
                    </div>
                </div>
                <!-- Option: Video -->
                <!--        <div class="col-lg-6 video-col">-->
                <!--            <div class="video-wrap size-4x3">-->
                <!--                <video width="400" autoplay muted loop>-->
                <!--                    <source src="--><!--/BrandTexture.mov" type="video/mp4">-->
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
                        <a href="/contact" class="btn btn-success wow pulse"  data-wow-offset="10">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>


