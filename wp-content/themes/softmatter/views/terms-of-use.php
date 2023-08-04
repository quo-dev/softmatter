<?php /* Template Name: Term of use Page */ ?>
<!-- Header Dark -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--    <link rel="icon" type="image/x-icon" href="">-->
    <!--	--><?php
    //	$ico = get_field('favicon', 'option') ? get_field('favicon', 'option') : get_template_directory_uri() . '/favicon.ico';
    //	?>
    <!--	<link rel="shortcut icon" class="ico-1" href="--><?php //echo $ico; ?><!--" type="image/x-icon">-->
    <!--	<link rel="icon" class="ico-2" type="image/x-icon" href="--><?php //echo $ico; ?><!--">-->
    <style>
        .wow {
            visibility: hidden;
        }
    </style>
    <?php wp_head(); ?>
</head>
<?php
$body_class = (get_field('header_style') === 'dark') ? 'header-dark' : '';

global $woocommerce;
$totalCartItems = $woocommerce->cart->cart_contents_count;
$items = $woocommerce->cart->get_cart();
$woocommerce_menu = get_field('woocommerce_menu');
?>
<body <?php body_class($body_class); ?>>
<div class="wrapper">
    <header class="app-header wow fadeInDownBig header-bg-dark" data-wow-duration="1s" data-wow-offset="0" id="app-header"> <!-- Option dark background: .header-bg-dark (for page no hero)-->
        <div class="container">
            <div class="d-flex flex-wrap align-items-center py-sm-5 top-header">
                <div class="logo d-flex align-items-center me-md-auto text-dark text-decoration-none">
                    <a href="/">
                        <img src="<?php the_field('logo-white', 'option'); ?>" class="logo-white" alt="<?php echo get_bloginfo('name'); ?>" />
                        <!--							<img src="--><?php //the_field('logo-dusk', 'option'); ?><!--" class="logo-dark" alt="--><?php //echo get_bloginfo('name'); ?><!--" />-->
                    </a>
                </div>
                <div class="main-navbar">
                    <!-- Main menu -->
                    <div id="menu-primary">
                        <ul class="nav nav-pills" itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
                            <li id="menu-item-255" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-255 nav-item">
                                <div class="group d-flex align-items-center wows fadeInRight" data-wow-offset="10" data-wow-delay="0.2s">
                                    <a itemprop="url" class="nav-link" href="/platforms/"><span itemprop="name">Platforms</span></a>
                                    <div><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" width="17" class="ml-2 -mr-1"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg></div>
                                </div>
                                <div class="wrap-sub-menu position-absolute pt-5">
                                    <div class="sub-menu">
                                        <div class="d-flex gap-4">
                                            <div>
                                                <div class="sub-menu-group">
                                                    <a href="#" class="sub-heading">
                                                        Textile Engineering
                                                    </a>
                                                    <div class="sub-link text-dusk mb-3">
                                                        <a href="#">
                                                            Engineered Knit
                                                        </a>
                                                    </div>
                                                    <div class="sub-link text-dusk mb-3">
                                                        <a href="#">
                                                            Injection Molding
                                                        </a>
                                                    </div>
                                                    <div class="sub-link text-dusk mb-3">
                                                        <a href="#">
                                                            Narrow Width Fabrics
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="sub-menu-group">
                                                    <a href="#" class="sub-heading">
                                                        Advanced Material
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="sub-menu-group">
                                                    <a href="#" class="sub-heading">
                                                        Integrated Technologies
                                                    </a>
                                                    <div class="d-flex gap-4">
                                                        <div>
                                                            <div class="sub-link text-dusk mb-3">
                                                                <a href="#">
                                                                    Thermal Regulation
                                                                </a>
                                                            </div>
                                                            <div class="sub-link text-dusk mb-3">
                                                                <a href="#">
                                                                    Visibility
                                                                </a>
                                                            </div>
                                                            <div class="sub-link text-dusk mb-3">
                                                                <a href="#">
                                                                    Sensing
                                                                </a>
                                                            </div>
                                                            <div class="sub-link text-dusk mb-3">
                                                                <a href="#">
                                                                    Textile Circuitry
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="sub-link text-dusk mb-3">
                                                                <a href="#">
                                                                    Touch Textiles
                                                                </a>
                                                            </div>
                                                            <div class="sub-link text-dusk mb-3">
                                                                <a href="#">Feedback</a>
                                                            </div>
                                                            <div class="sub-link text-dusk mb-3">
                                                                <a href="#">Data Transfer</a>
                                                            </div>
                                                            <div class="sub-link text-dusk mb-3">
                                                                <a href="#">
                                                                    Flexible Battery
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap-sub-menu-mobile">
                                    <div class="sub-menu-mobile">
                                        <div class="sub-menu-mobile__item wows fadeInRight" data-wow-offset="10" data-wow-delay="0.4s">
                                            <a href="#" class="sub-heading open-child-menu" data-link="#textile-engineering">
                                                <!-- add this class .open-child-menu if need open child menu -->
                                                <!-- add data-link attribute to destination Child Menu  -->
                                                Textile Engineering
                                            </a>
                                        </div>
                                        <div class="sub-menu-mobile__item wows fadeInRight" data-wow-offset="10" data-wow-delay="0.6s">
                                            <a href="#" class="sub-heading open-child-menu" data-link="#integrated-technologies">
                                                <!-- add this class .open-child-menu if need open child menu -->
                                                <!-- add data-link attribute to destination Child Menu  -->
                                                Integrated Technologies
                                            </a>
                                        </div>
                                        <div class="sub-menu-mobile__item wows fadeInRight" data-wow-offset="10" data-wow-delay="0.8s">
                                            <a href="index.php" class="sub-heading">
                                                Advanced Materials
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li id="menu-item-254" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-254 nav-item ">
                                <a itemprop="url" class="nav-link wows fadeInRight" data-wow-offset="10" data-wow-delay="1s" href="/applications/" >
                                    <span itemprop="name">Applications</span>
                                </a>
                            </li>
                            <li id="menu-item-256" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-248 current_page_item active menu-item-256 nav-item "><a itemprop="url" class="nav-link wows fadeInRight" data-wow-offset="10" data-wow-delay="1.2s" href="/services/" aria-current="page"><span itemprop="name">Services</span></a></li>
                            <li id="menu-item-956" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-956 nav-item ">
                                <div class="group d-flex align-items-center wows fadeInRight" data-wow-offset="10" data-wow-delay="1.4s">
                                    <a itemprop="url" class="nav-link open-child-menu d-none d-lg-block" href="/about/">
                                        <!-- add this class .open-child-menu if need open child menu -->
                                        <!-- add data-link attribute to destination Child Menu  -->
                                        <span itemprop="name">About Us</span>
                                    </a>
                                    <a itemprop="url" class="nav-link open-child-menu d-lg-none" href="/about/" data-link="#about-us">
                                        <span itemprop="name">About Us</span>
                                    </a>
                                    <div><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" width="17" class="ml-2 -mr-1"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg></div>
                                </div>
                                <div class="wrap-sub-menu position-absolute pt-5">
                                    <div class="sub-menu">
                                        <div class="d-flex gap-4">
                                            <div>
                                                <div class="sub-menu-group">
                                                    <div class="sub-link text-dusk mb-3">
                                                        <a href="#">
                                                            Leadership and Team
                                                        </a>
                                                    </div>
                                                    <div class="sub-link text-dusk mb-3">
                                                        <a href="#">
                                                            Sustainability
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li id="menu-item-976" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-976 nav-item"><a itemprop="url" class="nav-link wows fadeInRight" data-wow-offset="10" data-wow-delay="1.6s" href="#"><span itemprop="name">News</span></a></li>
                            <li id="menu-item-553" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-553 nav-item"><a itemprop="url" class="nav-link wows fadeInRight" data-wow-offset="10" data-wow-delay="1.8s" href="/"><span itemprop="name">Toolbox</span></a></li>
                            <li id="menu-item-957" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-957 nav-item"><a itemprop="url" class="nav-link wows fadeInRight" data-wow-offset="10" data-wow-delay="2s" href="/contact/"><span itemprop="name">Contact</span></a></li>
                        </ul>
                    </div>

                    <!-- Child menu on mobile-->
                    <div id="textile-engineering" class="menu-child nav nav-pill">
                        <div>
                            <div class="back-menu-mobile d-flex align-items-center wow fadeInRight" data-wow-offset="10" data-wow-delay="0.2s" >
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="text-white" width="15">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                                </svg>
                                <div class="text-md"><div>Back</div></div>
                            </div>
                            <div class="sub-menu-group">
                                <a href="#" class="sub-heading wow fadeInRight" data-wow-offset="10" data-wow-delay="0.4s">
                                    Textile Engineering
                                </a>
                                <div class="d-flex gap-4">
                                    <div>
                                        <div class="sub-link text-dusk mb-3 wow fadeInRight" data-wow-offset="10" data-wow-delay="0.6s">
                                            <a href="#">
                                                Engineered Knit
                                            </a>
                                        </div>
                                        <div class="sub-link text-dusk mb-3 wow fadeInRight" data-wow-offset="10" data-wow-delay="0.8s">
                                            <a href="#">
                                                Injection Molding
                                            </a>
                                        </div>
                                        <div class="sub-link text-dusk mb-3 wow fadeInRight" data-wow-offset="10" data-wow-delay="1s">
                                            <a href="#">
                                                Narrrow width Fabrics
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="integrated-technologies" class="menu-child nav nav-pill">
                        <div>
                            <div class="back-menu-mobile d-flex align-items-center wow fadeInRight" data-wow-offset="10" data-wow-delay="0.2s" >
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="text-white" width="15">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                                </svg>
                                <div class="text-md"><div>Back</div></div>
                            </div>
                            <div class="sub-menu-group">
                                <a href="#" class="sub-heading wow fadeInRight" data-wow-offset="10" data-wow-delay="0.4s">
                                    Integrated Technologies
                                </a>
                                <div class="d-flex gap-4">
                                    <div>
                                        <div class="sub-link text-dusk mb-3 wow fadeInRight" data-wow-offset="10" data-wow-delay="0.6s">
                                            <a href="#">
                                                Thermal Regulation
                                            </a>
                                        </div>
                                        <div class="sub-link text-dusk mb-3 wow fadeInRight" data-wow-offset="10" data-wow-delay="0.8s">
                                            <a href="#">
                                                Visibility
                                            </a>
                                        </div>
                                        <div class="sub-link text-dusk mb-3  wow fadeInRight" data-wow-offset="10" data-wow-delay="1s">
                                            <a href="#">
                                                Sensing
                                            </a>
                                        </div>
                                        <div class="sub-link text-dusk mb-3 wow fadeInRight" data-wow-offset="10" data-wow-delay="1.2s">
                                            <a href="#">
                                                Textile Circuitry
                                            </a>
                                        </div>
                                        <div class="sub-link text-dusk mb-3 wow fadeInRight" data-wow-offset="10" data-wow-delay="1.5s">
                                            <a href="#">
                                                Touch Textiles
                                            </a>
                                        </div>
                                        <div class="sub-link text-dusk mb-3 wow fadeInRight" data-wow-offset="10" data-wow-delay="1.7s">
                                            <a href="#">Feedback</a>
                                        </div>
                                        <div class="sub-link text-dusk mb-3 wow fadeInRight" data-wow-offset="10" data-wow-delay="1.9s">
                                            <a href="#">Data Transfer</a>
                                        </div>
                                        <div class="sub-link text-dusk mb-3 wow fadeInRight" data-wow-offset="10" data-wow-delay="2.1s">
                                            <a href="#">
                                                Flexible Battery
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="about-us" class="menu-child nav nav-pill">
                        <div>
                            <div class="back-menu-mobile d-flex align-items-center wow fadeInRight" data-wow-offset="10" data-wow-delay="0.2s">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="text-white" width="15">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                                </svg>
                                <div class="text-md"><div>Back</div></div>
                            </div>
                            <div class="sub-menu-group wow fadeInRight" data-wow-offset="10" data-wow-delay="0.4s">
                                <a href="/about" class="sub-heading">
                                    About Us
                                </a>
                                <div class="d-flex gap-4">
                                    <div>
                                        <div class="sub-link text-dusk mb-3 wow fadeInRight" data-wow-offset="10" data-wow-delay="0.6s">
                                            <a href="#">
                                                Leadership and Team
                                            </a>
                                        </div>
                                        <div class="sub-link text-dusk mb-3 wow fadeInRight" data-wow-offset="10" data-wow-delay="0.8s">
                                            <a href="#">
                                                Sustainability
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    //							if($woocozmmerce_menu || is_shop() || is_checkout() || is_cart() || is_product()){
                    //								wp_nav_menu( array(
                    //									'theme_location' => 'woocommerce',
                    //									'container' => false,
                    //									'menu_class' => 'nav nav-pills',
                    //									'walker' => new WP_Bootstrap_Navwalker()
                    //								) );
                    //							}else{
                    //								wp_nav_menu( array(
                    //									'theme_location' => 'primary',
                    //									'container' => false,
                    //									'menu_class' => 'nav nav-pills',
                    //									'walker' => new WP_Bootstrap_Navwalker()
                    //								) );
                    //							}
                    ?>
                </div>
                <form class="d-none form-search mx-1">
                    <div class="position-relative">
                        <input class="form-control form-search__input" type="text" />
                        <button class="btn-icon search-btn d-lg-none" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="text-white cursor-pointer hover:scale-110 duration-100" width="22"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </button>
                    </div>
                </form>
                <button class="btn-icon search-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="text-white cursor-pointer hover:scale-110 duration-100 open-search" width="22"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="text-white close-search" width="22"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
                <?php
                if($woocommerce_menu || is_shop() || is_checkout() || is_cart() || is_product()){
                    ?>
                    <button class="btn-icon cart-btn ms-4 me-4 me-lg-0 position-relative">
                        <i class="icon-cart"></i>
                        <?php if ($totalCartItems): ?>
                            <span class="number-cart"><?php echo $totalCartItems ?></span>
                        <?php endif; ?>
                    </button>
                    <?php
                }
                ?>
                <?php include(get_template_directory() . '/template-parts/cart-popup.php') ?>
                <button class="navbar-toggler collapsed p-0 white" type="button" aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="text-white rotate-180 open-nav" width="30"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h8m-8 6h16"></path></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="text-white close-nav navbar-close" width="30"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
        </div>
    </header>

<!-- End Header Dark -->
<?php
$img = get_template_directory_uri().'/assets/images';
echo '<main class="main">';
?>
    <!-- 2 : NEWS BLOCK: -->
    <div class="tpl-block single-block">
        <div class="container">
            <h1>Terms of Use</h1>
            <div class="m-4r">
                PLEASE READ THESE TERMS OF USE CAREFULLY BEFORE USING THIS PLATFORM.
            </div>
            <hr/>
            <div class="single-content">
                <p>
                    Softmatter is the smart wear technology arm of MAS Innovation (Private) Limited and this platform [Softmatter.io] is owned, controlled and managed by MAS Innovation (Private) Limited a subsidiary of MAS Holdings (Private) Limited (“TWINERY”).
                </p>
                <p>
                    By accessing or using this website or mobile application (collectively the “Platform”) on any computer, mobile phone, tablet, console or other device (collectively, “Device”), you signify that you have read, understand and agree to be bound by these Terms of Use and any other applicable law. . TWINERY may change these Terms of Use at any time without notice, effective upon its posting to the Platform. BY USING THE PLATFORM, YOU AGREE TO THESE TERMS OF USE; IF YOU DO NOT AGREE, DO NOT USE THE PLATFORM.
                </p>
                <br/>
                <p>
                    <strong>CONTENT</strong>
                </p>

                <p>
                    All intellectual property on the Platform is owned by TWINERY or its licensors, which includes materials protected by copyright, trademark, or patent laws. All trademarks, service marks and trade names (e.g., the TWINERY name) are owned, registered and/or licensed by TWINERY. All content on the Platform, including but not limited to text, software, scripts, code, designs, graphics, photos, sounds, music, videos, applications, interactive features and all other content (“Content”) is proprietary to TWINERY, protected by intellectual property laws including copyright and other proprietary rights of the United States and foreign countries. All rights reserved.
                </p>
                <p>
                    The Platform contains features that permit you to submit questions or comments (“User Content”). You retain the rights to your copyrighted User Content except as follows:
                </p>
                <p>
                    By submitting User Content to the Platform, you grant TWINERY a royalty-free, perpetual, irrevocable, non-exclusive, unrestricted, worldwide license to reproduce, prepare derivative works, distribute copies, publicly perform, publicly display and digitally transmit your User Content in any medium and for any purpose, including commercial purposes, and to authorize others to do so.
                </p>
                <p>
                    You also represent that you have the right to submit any User Content you post, and that your User Content does not violate the copyright, trademark, trade secret or any other personal or proprietary right of any other party. Please review the TWINERY Privacy Policy [softmatter.io/privacy-policy] for an explanation of how we may use or share information submitted by you or collected from you.
                </p>
                <p>
                    TWINERY does not endorse User Content in any way. TWINERY takes no responsibility for, we do not expressly or implicitly endorse, and we do not assume any liability for any User Content submitted by you or any other user of the Platform.
                </p>
                <br/>
                <p>
                    <strong>PLATFORM USE RESTRICTIONS</strong>
                </p>
                <p>
                    You may use the Content only for your own non-commercial use to participate in the Platform. You are hereby granted a non-exclusive license to use the Content, but only while accessing the Platform. You are also granted a limited license to print copies of any Content posted at the site, but only for your personal use. Except as expressly provided above, all rights are reserved. Among other things, except to the extent required for the limited purpose of reviewing material on the Platform, electronic reproduction, adaptation, distribution, performance or display is prohibited without the prior written consent of TWINERY. Commercial use of any of the Content is strictly prohibited. Use of any of our trademarks as metatags on other websites also is strictly prohibited. You may not display the Platform in frames (or any of the Content via in-line links) without our express written permission, which may be requested by contacting us at [ amaare@masholdings.com]. You agree not to change or delete any ownership notices from materials downloaded or printed from the Platform. You agree not to use any data mining, robots, scraping or similar data gathering methods. Nothing in these Terms of Use shall be interpreted as granting any license of intellectual property rights to you, except as expressly provided.
                </p>
                <br/>
                <p>
                    <strong>COPYRIGHT, DMCA AND TAKEDOWN OF INFRINGING CONTENT</strong>
                </p>
                <p>
                    TWINERY respects the intellectual property rights of others and will respond to legitimate requests under the Digital Millennium Copyright Act (“DMCA”), and we retain the right to remove User Content on the Platform that we believe, in our discretion, may be infringing the intellectual property rights of others. If you become aware of User Content on the Platform that infringes your copyright rights, you may submit a proper DMCA request (17 U.S.C. § 512) to TWINERY by contacting our agent, as follows:
                </p>
                <p>
                    <strong>Contact:</strong> <span>Tiasha Renganathan</span>
                </p>
                <p>
                    Address: <span>50, Foster Lane, Colombo10, Sri Lanka</span>
                </p>
                <p>
                    email: <a href="mailto:softmatter@masholdings.com">softmatter@masholdings.com</a>
                </p>

            </div>
        </div>
    </div>
<?php
echo '</main>';

get_footer();
?>





