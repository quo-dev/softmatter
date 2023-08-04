<?php /* Template Name: Faqs Page */ ?>
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
    <section class="hero h-80vh">
        <div class="hero__item">
            <div class="hero__media">
                <!-- image for desktop-->
                <img src="<?php echo $img ?>/salmon_texture.jpeg" class="d-none d-lg-block"/>
                <!-- image for mobile-->
                <img src="<?php echo $img ?>/salmon_texture.jpeg" class="d-block d-lg-none"/>
            </div>
            <div class="d-flex text-right-image">
                <div class="container hero__container">
                    <div class="hero__text">
                        <h1 class="wow fadeInUpBig" data-wow-duration="1s" data-wow-offset="10">FAQ</h1>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- 2 : Faqs BLOCK:
    Background type: bg-dush / bg-salmon / bg-chalk
     -->
    <div class="tpl-block faqs-block bg-chalk">
        <div class="container">
            <h2 class="h3 faqs-title">
                Product & Use
            </h2>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                             What is Softmatter?
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                             How do I use Softmatter?
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Is Softmatter waterproff?
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 3 : Faqs BLOCK:
       Background type: bg-dush / bg-salmon / bg-chalk
        -->
    <div class="tpl-block faqs-block bg-chalk">
        <div class="container">
            <h2 class="h3 faqs-title">
                Ordering
            </h2>
            <div class="accordion accordion-flush" id="accordionOrderRing">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="orderRing-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#orderRing-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Is Softmatter available to purchase in retail stores?
                        </button>
                    </h2>
                    <div id="orderRing-collapseOne" class="accordion-collapse collapse" aria-labelledby="orderRing-headingOne" data-bs-parent="#accordionOrderRing">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="orderRing-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#orderRing-collapseTwo" aria-expanded="false" aria-controls="orderRing-collapseTwo">
                            How do I use Softmatter?
                        </button>
                    </h2>
                    <div id="orderRing-collapseTwo" class="accordion-collapse collapse" aria-labelledby="orderRing-headingTwo" data-bs-parent="#accordionOrderRing">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="orderRing-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#orderRing-collapseThree" aria-expanded="false" aria-controls="orderRing-collapseThree">
                            Is Softmatter waterproff?
                        </button>
                    </h2>
                    <div id="orderRing-collapseThree" class="accordion-collapse collapse" aria-labelledby="orderRing-headingThree" data-bs-parent="#accordionOrderRing">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- 4: -->
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
                <!--                    <source src="--><?php //echo $img ?><!--/BrandTexture.mov" type="video/mp4">-->
                <!--                </video>-->
                <!--            </div>-->
                <!--        </div>-->
                <div class="col-lg-6 content-col">
                    <div class="content-box text-center">
                        <h2 class="title wow fadeInUp" data-wow-duration="1.5s" data-wow-offset="10">Connect Us</h2>
                        <div class="content wow fadeInUp" data-wow-duration="1.5s" data-wow-offset="10">
                            <p>At Softmatter, our dynamic team has industry-leading expertise in smart textiles, from design to manufacture. We help you strategically enhance your offering so that it has a profound, global impact.</p>
                            <br/>
                            <p class="f-24">
                                Interested in enabling your idea?
                            </p>
                        </div>
                        <a href="#" class="btn btn-primary wow pulse"  data-wow-offset="10">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>











<?php
echo '</main>';

get_footer();
?>





