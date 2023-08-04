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
    <header class="app-header fadeInDownBig"  id="app-header"> <!-- Option dark background: .header-bg-dark (for page no hero)-->
        <div class="container">
            <div class="d-flex flex-wrap align-items-center py-sm-5 top-header">
                <div class="logo d-flex align-items-center me-md-auto text-dark text-decoration-none">
                    <a href="/">
                        <img src="<?php the_field('logo-white', 'option'); ?>" class="logo-white" alt="<?php echo get_bloginfo('name'); ?>" />
                        <!--							<img src="--><?php //the_field('logo-dusk', 'option'); ?><!--" class="logo-dark" alt="--><?php //echo get_bloginfo('name'); ?><!--" />-->
                    </a>
                </div>
                <div class="main-navbar">
                    <?php
                    if ( has_nav_menu( 'primary' ) ) :
                    $items = wp_get_nav_menu_items('primary');
                    $items = recursive_mitems_to_array($items);
                    ?>
                    <!-- Main menu -->
                    <div id="menu-primary">
                        <ul class="nav nav-pills" itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page nav-item">
                                <div class="group d-flex align-items-center wows fadeInRight" data-wow-offset="0" data-wow-delay="0s">
                                    <a itemprop="url" class="nav-link d-none d-md-block" href="/">
                                        <span itemprop="name">Home</span>
                                    </a>
                                </div>
                            </li>
                            <?php
                            foreach ($items as $key => $item){
                                $menu_item = $item['item'];
                                $sub_menu_items = $item['childs'];
                                $no_child_url = 0;
                                if ($item['have_child'] && !$sub_menu_items[array_key_first($sub_menu_items)]['have_child']) {
                                    $no_child_url = 1;
                                }

                                if (count($sub_menu_items) > 2) {
                                    $sub_menu_items = array_chunk($sub_menu_items, ceil(count($sub_menu_items) / 2));
                                }else {
                                    $sub_menu_items = array_chunk($sub_menu_items, 2);
                                }
                                ?>
                                <li id="menu-item-255" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-255 nav-item">
                                    <div class="group d-flex align-items-center wows fadeInRight" data-wow-offset="10" data-wow-delay="0.2s">
                                        <a itemprop="url" class="nav-link <?php echo $no_child_url ? 'open-child-menu d-none d-lg-block' : 'wows fadeInRight'; ?>" href="<?php echo $menu_item->url; ?>">
                                            <span itemprop="name"><?php echo $menu_item->title; ?></span>
                                        </a>
                                        <?php if ($no_child_url): ?>
                                            <a itemprop="url" class="nav-link open-child-menu d-lg-none" href="<?php echo $menu_item->url; ?>" data-link="#<?php echo $item['key_random']; ?>">
                                                <span itemprop="name"><?php echo $menu_item->title; ?></span>
                                            </a>
                                        <?php endif; ?>
                                        <?php if ($sub_menu_items): ?>
                                            <div><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" width="17" class="ml-2 -mr-1"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg></div>
                                        <?php endif; ?>
                                    </div>
                                    <?php if ($sub_menu_items): ?>
                                        <div class="wrap-sub-menu position-absolute pt-5">
                                            <div class="sub-menu">
                                                <div class="d-flex gap-4">
                                                    <?php
                                                    foreach ($sub_menu_items as $sub_menu_item){
                                                        ?>
                                                        <div>
                                                            <?php
                                                            $under_line = 0;
                                                            foreach ($sub_menu_item as $item){
                                                                $item_sub = array_values($item);
                                                                $item_sub['item'] = $item_sub[0];
                                                                $item_sub['childs'] = $item_sub[1];
                                                                $item_sub['have_child'] = $item_sub[2];
                                                                if ($item_sub['have_child']) {
                                                                    $under_line = 1;
                                                                }
                                                                ?>
                                                                <div class="sub-menu-group">
                                                                    <?php if ($item_sub['have_child'] || $under_line): ?>
                                                                        <a href="<?php echo $item_sub['item']->url; ?>" class="sub-heading">
                                                                            <?php echo $item_sub['item']->title; ?>
                                                                        </a>
                                                                        <?php if ($item_sub['childs']): ?>
                                                                            <div class="d-flex gap-4">
                                                                                <?php
                                                                                $item_sub_array = array_chunk($item_sub['childs'], 4);
                                                                                foreach ($item_sub_array as $item_sub_child):
                                                                                    ?>
                                                                                    <div>
                                                                                        <?php foreach ($item_sub_child as $child): ?>
                                                                                            <div class="sub-link text-dusk mb-3">
                                                                                                <a href="<?php echo $child['item']->url; ?>">
                                                                                                    <?php echo $child['item']->title; ?>
                                                                                                </a>
                                                                                            </div>
                                                                                        <?php endforeach; ?>
                                                                                    </div>
                                                                                <?php endforeach; ?>
                                                                            </div>
                                                                        <?php endif; ?>
                                                                    <?php else: ?>
                                                                        <div class="sub-link text-dusk mb-3">
                                                                            <a href="<?php echo $item_sub['item']->url; ?>">
                                                                                <?php echo $item_sub['item']->title; ?>
                                                                            </a>
                                                                        </div>
                                                                    <?php endif; ?>
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wrap-sub-menu-mobile">
                                            <div class="sub-menu-mobile">
                                                <?php foreach ($sub_menu_items as $sub_menu_item){
                                                    $under_line = 0;
                                                    ?>
                                                    <?php foreach ($sub_menu_item as $item){
                                                        $item = array_values($item);
                                                        $item['item'] = $item[0];
                                                        $item['have_child'] = $item[2];
                                                        $item['key_random'] = $item[3];
                                                        if ($item['have_child']) {
                                                            $under_line = 1;
                                                        }
                                                        ?>
                                                        <?php if ($item['have_child'] || $under_line): ?>
                                                            <div class="sub-menu-mobile__item wows fadeInRight" data-wow-offset="10" data-wow-delay="0.4s">
                                                                <a href="<?php echo $item['have_child'] ? '#' : $item['item']->url; ?>" class="sub-heading open-child-menu" <?php if ($item['have_child']): ?> data-link="#<?php echo $item['key_random']; ?>" <?php endif; ?>>
                                                                    <!-- add this class .open-child-menu if need open child menu -->
                                                                    <!-- add data-link attribute to destination Child Menu  -->
                                                                    <?php echo $item['item']->title; ?>
                                                                </a>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php } ?>
                                                <?php } ?>
                                            </div>
                                        </div>

                                    <?php endif; ?>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>

                    <!-- Child menu on mobile-->
                    <?php
                    foreach ($items as $key => $item):
                        $menu_item = $item['item'];
                        $sub_menu_items = $item['childs'];
                        ?>
                        <?php if ($sub_menu_items && $sub_menu_items[array_key_first($sub_menu_items)]['have_child']): ?>
                        <?php foreach ($sub_menu_items as $sub_menu_item):?>
                            <div id="<?php echo $sub_menu_item['key_random']; ?>" class="menu-child nav nav-pill">
                                <div>
                                    <div class="back-menu-mobile d-flex align-items-center wow fadeInRight" data-wow-offset="10" data-wow-delay="0.2s" >
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="text-white" width="15">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                                        </svg>
                                        <div class="text-md"><div>Back</div></div>
                                    </div>
                                    <div class="sub-menu-group">
                                        <a href="<?php echo $sub_menu_item['item']->url; ?>" class="sub-heading wow fadeInRight" data-wow-offset="10" data-wow-delay="0.4s">
                                            <?php echo $sub_menu_item['item']->title; ?>
                                        </a>
                                        <?php if ($sub_menu_item['have_child']): ?>
                                            <div class="d-flex gap-4">
                                                <div>
                                                    <?php
                                                    $delay = 0.4;
                                                    foreach ($sub_menu_item['childs'] as $item):
                                                        $delay += 0.2;
                                                        ?>
                                                        <div class="sub-link text-dusk mb-3 wow fadeInRight" data-wow-offset="10" data-wow-delay="<?php echo $delay;?>">
                                                            <a href="<?php echo $item['item']->url ;?>">
                                                                <?php echo $item['item']->title ;?>
                                                            </a>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div id="<?php echo $item['key_random']; ?>" class="menu-child nav nav-pill">
                            <div>
                                <div class="back-menu-mobile d-flex align-items-center wow fadeInRight" data-wow-offset="10" data-wow-delay="0.2s" >
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="text-white" width="15">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                                    </svg>
                                    <div class="text-md"><div>Back</div></div>
                                </div>
                                <div class="sub-menu-group">
                                    <a href="#" class="sub-heading wow fadeInRight" data-wow-offset="10" data-wow-delay="0.4s">
                                        <?php echo $menu_item->title; ?>
                                    </a>
                                    <div class="d-flex gap-4">
                                        <div>
                                            <?php
                                            $delay = 0.4;
                                            foreach ($sub_menu_items as $item):
                                                $delay += 0.2;
                                                ?>
                                                <div class="sub-link text-dusk mb-3 wow fadeInRight" data-wow-offset="10" data-wow-delay="<?php echo $delay;?>">
                                                    <a href="<?php echo $item['item']->url ;?>">
                                                        <?php echo $item['item']->title ;?>
                                                    </a>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
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
                <?php endif; ?>
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
