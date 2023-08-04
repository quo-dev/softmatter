<?php
$title = get_field('title');
$sub_title = get_field('sub_title');
$background = get_field('background');

$arrProductsIds  = get_field('products');

$args = array(
    'post_type'             => 'product',
    'post_status'           => 'publish',
    'include' => $arrProductsIds,
//	'posts_per_page' => -1,
    'ignore_sticky_posts'   => 1,
    'tax_query'   => array(
        array(
            'taxonomy'      => 'product_visibility',
            'field'         => 'slug',
            'terms'         => 'exclude-from-catalog', // Possibly 'exclude-from-search' too
            'operator'      => 'NOT IN'
        )
    ),
);

$products = wc_get_products( $args );
$arrProducts = array();
$iconLink = get_template_directory_uri().'/assets/images';

foreach ($products as $i => $product){
    $productId = $product->get_id();
    $arrProducts[$i]['id'] = $productId;
    $arrProducts[$i]['title'] = $product->get_title();
    $arrProducts[$i]['image'] = aq_resize(get_the_post_thumbnail_url($productId, 'full'), 620, 499, false, true, true);
    $arrProducts[$i]['price'] = $product->get_price();
    $arrProducts[$i]['link'] = $product->get_permalink();
    $arrProducts[$i]['content'] = $product->post_content;
    $arrProducts[$i]['excerpt'] = $product->post->post_excerpt;
    $itemCount = $i + 1;
    $arrProducts[$i]['count'] = $itemCount;
    $itemCountImage = ($i < 3) ? $i + 1 :  $i - 2 ;
    $arrProducts[$i]['imageNumber'] = $itemCountImage;
    $kits = get_field('kits',$productId);
    $arrProducts[$i]['kits'] = $kits;
    $arrProducts[$i]['category'] = get_the_terms( $productId, 'product_cat' );
}


?>

<section class="tpl-block title-block bg-dush title-block-components">
    <div class="container">
        <h3 class="sub-title wow fadeInUp" data-wow-duration="1.8s" data-wow-offset="100" ><?php echo $sub_title ?></h3>
        <h2 class="heading-title  wow fadeInUp" data-wow-duration="1.8s" data-wow-offset="100" ><?php echo $title ?></h2>
    </div>
</section>

<section class="tpl-block tab-block bg-dush">
    <div class="container">
        <ul class="nav nav-tabs wow fadeIn" data-wow-offset="10" role="tablist" >
            <?php
                foreach ($arrProducts as $key => $item):
                    $active = ($key == 0) ? 'active' : '';
            ?>
                <li class="nav-item" role="presentation">
                    <button class="nav-link <?php echo $active ?>" data-bs-toggle="tab" data-bs-target="#tab-<?php echo $item['count'] ?>"  type="button" role="tab" aria-selected="true">
                        <div class="icon">
                            <img class="tab-icon" src="<?php echo $iconLink ?>/tab-<?php echo $item['imageNumber'] ?>.svg" alt="">
                            <img class="tab-icon tab-icon-active" src="<?php echo $iconLink ?>/tab-<?php echo $item['imageNumber'] ?>-green.svg" alt="">
                        </div>
                        <div class="tab-title"><?php echo $item['title'] ?></div>
                    </button>
                </li>
            <?php
                endforeach;
            ?>
        </ul>
        <div class="tab-content">
            <?php
            foreach ($arrProducts as $key => $item):
                $active = ($key == 0) ? 'active' : '';
            ?>
                <div class="tab-pane <?php echo $active ?>" id="tab-<?php echo $item['count'] ?>" >
                    <div class="row">
                        <div class="col-lg-6 image">
                            <img src="<?php echo aq_resize($item['image'], 400, 323, true, true, true); ?>">
                        </div>
                        <div class="col-lg-6 text">
                            <div class="text-in">
                                <div class="sub-title"><?php echo $item['category'][0]->name ?></div>
                                <h2 class="title h3"><?php echo $item['title'] ?></h2>
                                <div class="paragraph">
                                    <?php echo  wp_trim_words( $item['excerpt'], $num_words = 20, $more = '...' ) ?>
                                </div>
                                <a href="<?php echo $item['link']?>" class="btn btn-success">Buy now</a>
                            </div>
                        </div>
                    </div>
                    <?php if(count($item['kits'])): ?>
                        <div class="kits-container">
                            <h4 class="text-chalk">What’s in the Kit?</h4>
                            <div class="kits-slider f-14 text-center text-chalk ">
                                <?php
                                foreach($item['kits'] as $kit){
                                    ?>
                                    <div class="kits-item">
                                        <a href="<?php echo $kit['image']['url'] ?>"
                                           data-fancybox="image" class="kits-item__image ratio ratio-1x1 d-block">
                                            <img src="<?php echo $kit['image']['url'] ?>" alt="<?php echo $kit['detail']?>">
                                        </a>
                                        <div class="kits-item__text"><?php echo $kit['text_detail']?></div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    <?php endif ?>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
</section>
