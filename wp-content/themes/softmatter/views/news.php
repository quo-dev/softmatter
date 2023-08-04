<?php /* Template Name: News Page */ ?>
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
                        <h1 class="wow fadeInUpBig" data-wow-duration="1s" data-wow-offset="10">Latest from Softmatter</h1>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- 2 : NEWS BLOCK:

    -->
    <div class="tpl-block news-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 news-block__left">
                    <ul class="ul news d-flex flex-wrap wow fadeInUpBig" data-wow-duration="1s" >
                        <li class="news__item view-all innovation sustainability" >
                            <a href="/news-detail" class="news__image">
                                <img src="<?php echo $img?>/news/mfd.jpeg"/>
                            </a>
                            <h2 class="news__title">
                                <a href="/news-detail">
                                    MFD for electronically enhanced Soft goods:
                                </a>
                            </h2>
                            <div class="news__description">
                                <p>
                                    18th August 2022 | Ross D Alcazar – Chief Operating Officer, Softmatter
                                </p>
                                <p>
                                    The topic of productization and some of our challenges today is at the forefront of our evolution. By finding ways to continually innovate
                                </p>
                            </div>
                            <div class="news__cta">
                                <a href="/news-detail">Read More</a>
                            </div>
                        </li>
                        <li class="news__item view-all innovation consumer-technology">
                            <a href="/news-detail" class="news__image">
                                <img src="<?php echo $img?>/news/blog_metavers.jpeg"/>
                            </a>
                            <h2 class="news__title">
                                <a href="/news-detail">
                                    Unlocking the Potential Of The Metaverse:
                                </a>
                            </h2>
                            <div class="news__description">
                                <p>
                                    16th August 2022 | Nivantha Bandara – Program Manager, Softmatter
                                </p>
                                <p>
                                    Why should we be excited about the rising popularity of the integration between virtual and physical spaces?
                                </p>
                            </div>
                            <div class="news__cta">
                                <a href="/news-detail">Read More</a>
                            </div>
                        </li>

                        <li class="news__item view-all innovation consumer-technology">
                            <a href="/news-detail" class="news__image">
                                <img src="<?php echo $img?>/news/Post1.jpeg"/>
                            </a>
                            <h2 class="news__title">
                                <a href="/news-detail">
                                    Reinventing devices for today and tomorrow:
                                </a>
                            </h2>
                            <div class="news__description">
                                <p>
                                    Through the lens of wearable technology and smart textiles
                                </p>
                                <p>
                                    Sep 16, 2021 | Product Engineering, Audio Devices, Smart Textiles
                                </p>
                                <p>
                                    Smart soft technologies ushering a new age of advanced personal devices – with a focus in the audio device market.
                                </p>
                            </div>
                            <div class="news__cta">
                                <a href="/news-detail">Read More</a>
                            </div>
                        </li>
                        <li class="news__item view-all innovation consumer-technology">
                            <a href="/news-detail" class="news__image">
                                <img src="<?php echo $img?>/news/Post2.jpeg"/>
                            </a>
                            <h2 class="news__title">
                                <a href="/news-detail">
                                    Game Changer for AR and VR: Smart Textiles
                                </a>
                            </h2>
                            <div class="news__description">
                                <p>
                                    Sep 16, 2021 | Product Engineering, AR/VR, Smart TextilesThrough the lens of wearable technology and smart textiles
                                </p>
                                <p>
                                    The first stereoscope. Arcade machines. And a Sayre Glove. Snapchat lenses, Microsoft HoloLens and Google maps AR navigation systems that superimposing...
                                </p>
                            </div>
                            <div class="news__cta">
                                <a href="/news-detail">Read More</a>
                            </div>
                        </li>

                        <li class="news__item view-all innovation consumer-technology outdoor-performance">
                            <a href="/news-detail" class="news__image">
                                <img src="<?php echo $img?>/news/Post3.jpeg"/>
                            </a>
                            <h2 class="news__title">
                                <a href="/news-detail">
                                    Evolved from a futuristic accessory to a ubiquitous health & wellness wearable:
                                </a>
                            </h2>
                            <div class="news__description">
                                <p>
                                    Engineering human factors in smartwatches and wristables
                                </p>
                                <p>
                                    16th October 2021 | Health and wellness Wearables, Engineered Knit, Product Engineering
                                </p>
                                <p>
                                    What factors will gear more consumers to be more comfortable in having a virtual health assistant strapped to their wrist?
                                </p>
                            </div>
                            <div class="news__cta">
                                <a href="/news-detail">Read More</a>
                            </div>
                        </li>
                        <li class="news__item view-all innovation healthcare consumer-technology outdoor-performance">
                            <a href="/news-detail" class="news__image">
                                <img src="<?php echo $img?>/news/Post4.jpeg"/>
                            </a>
                            <h2 class="news__title">
                                <a href="/news-detail">
                                    Tomorrow’s challenges demand new approaches:
                                </a>
                            </h2>
                            <div class="news__description">
                                <p>
                                    Smart soft technology integration in medical devices
                                </p>
                                <p>
                                    Making accessibility and affordability core to medtech product innovation in RPM, pain, sleep and respiratory care.
                                </p>
                            </div>
                            <div class="news__cta">
                                <a href="/news-detail">Read More</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 news-block__right">
                    <h3 class="widget__title wow fadeInRight" data-wow-offset="10" data-wow-delay="0.2s">Topics</h3>
                    <ul class="ul topics">
                        <li class="topics__item active wow fadeInRight" data-wow-offset="10" data-wow-delay="0.4s">
                            <a href="javascript:void(0)" data-type="view-all">
                                view all
                            </a>
                        </li>
                        <li class="topics__item wow fadeInRight" data-wow-offset="10" data-wow-delay="0.6s">
                            <a href="javascript:void(0)" data-type="innovation">
                                INNOVATION
                            </a>
                        </li>
                        <li class="topics__item wow fadeInRight" data-wow-offset="10" data-wow-delay="0.8s">
                            <a href="javascript:void(0)" data-type="sustainability">
                                SUSTAINABILITY
                            </a>
                        </li>
                        <li class="topics__item wow fadeInRight" data-wow-offset="10" data-wow-delay="1s">
                            <a href="javascript:void(0)" data-type="healthcare">
                                HEALTHCARE
                            </a>
                        </li>
                        <li class="topics__item wow fadeInRight" data-wow-offset="10" data-wow-delay="1.2s">
                            <a href="javascript:void(0)" data-type="consumer-technology">
                               CONSUMER TECHNOLGY
                            </a>
                        </li>
                        <li class="topics__item wow fadeInRight" data-wow-offset="10" data-wow-delay="1.4s">
                            <a href="javascript:void(0)" data-type="outdoor-performance">
                               OUTDOOR and PERFORMANCE
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>











<?php
echo '</main>';

get_footer();
?>





