<?php
$img = get_template_directory_uri().'/assets/images';
$items = get_field('items');
$sub_title_color = get_field('sub_title_color') ?: '';
$title_color = get_field('title_color') ?: '';
$background_color = get_field('background_color');
$button_color = get_field('button_color') ?: 'primary';
if($button_color =='dark'){
    $btnClass = 'btn btn-dark';
}elseif($button_color =='outline-secondary'){
    $btnClass = 'btn btn-outline-secondary';
}elseif($button_color =='outline-primary'){
    $btnClass = 'btn btn-outline-primary';
} elseif($button_color =='outline-salmon'){
    $btnClass = 'btn btn-outline-salmon';
} elseif($button_color =='green'){
    $btnClass = 'btn btn-success';
} else{
    $btnClass = 'btn btn-primary';
}
?>

<!-- 10.2:  ThreeCols-tab-slider-block -->
<!-- Options:1.Background:  bg-chalk / bg-dush/ bg-mint / bg-salmon --->
<?php if ($items): ?>
<section class="tpl-block tab-block tab-block-secondary bg-<?php echo $background_color; ?> full-image-tab-slider-block" >
    <div class="container">
        <nav>
            <div class="nav nav-tabs wow fadeInUp" data-wow-offset="10" data-wow-delay=".2s" id="nav-tab-2" role="tablist">
                <?php
                foreach ($items as $key => $item):
                    $randomKey = rand();
                    $items[$key]['key'] = $randomKey;
                ?>
                <button class="nav-link <?php echo $key==0 ? 'active' : ''; ?>" id="nav-profile-tab" data-text="2" data-bs-toggle="tab" data-bs-target="#nav-tab<?php echo $randomKey; ?>" type="button" role="tab" aria-controls="nav-profile" aria-selected="<?php echo $key==0 ? 'true' : 'false'; ?>">
                    <div class="full-image-tab d-flex align-items-center">
                        <div class="full-image-tab__image">
                            <img class="default" src="<?php echo $item['icon']; ?>"/>
                            <img class="active" src="<?php echo $item['icon_active'] ?: $item['icon']; ?>"/>
                        </div>
                        <div class="full-image-tab__text">
                            <?php echo $item['header']; ?>
                        </div>
                    </div>
                </button>
                <?php endforeach; ?>
            </div>
        </nav>
    </div>
    <div class="full-image-tab-slider-block__body">
        <div class="tab-content" id="nav-tabContent">
            <?php
            foreach ($items as $key => $item):
                $sliders = $item['sliders'];
            ?>
            <div class="tab-pane fade <?php echo ($key == 0) ? 'show active' : ''; ?> " id="nav-tab<?php echo $item['key']; ?>" role="tabpanel" aria-labelledby="nav-<?php echo $item['key']; ?>">
                <div class="container">
                    <div class="wrap-slider-item">
                        <div class="slider-item-cate wow fadeInUpBig" data-wow-offset="10" data-wow-delay=".2s">
                            <div class="row">
                                <div class="col-lg-6 slider-item-cate__img">
                                    <a href="/contact">
                                        <img src="<?php echo $item['image']; ?>"/>
                                    </a>
                                </div>
                                <div class="col-lg-6 slider-item-cate__text d-flex align-items-center">
                                    <div>
                                        <div class="description mb-4 <?php echo $sub_title_color;?>">
                                            <p><?php echo $item['sub_title']; ?></p>
                                        </div>
                                        <h2 class="h3 mb-4 <?php echo $title_color;?>">
                                            <?php echo $item['title']; ?>
                                        </h2>
                                        <div class="description mb-4">
                                            <?php echo $item['content']; ?>
                                        </div>
                                        <?php if ($item['link']): ?>
                                        <a href=" <?php echo $item['link']['url']; ?>" class="<?php echo $btnClass; ?> text-uppercase">
                                            <?php echo $item['link']['title']; ?>
                                        </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if ($sliders): ?>
                        <div class="threeColsSlider wow fadeInUpBig" data-wow-offset="10" data-wow-delay=".4s">
                            <?php
                            foreach ($sliders as $key => $slider):
                            ?>
                            <div class="threeColsSlider__item">
                                <div class="threeColsSlider__item--in">
                                    <div class="threeColsSlider__img">
                                        <img src="<?php echo $slider['image'] ?>"/>
                                    </div>
                                    <h3 class="h4 mb-4 text-green">
                                        <?php echo $slider['title'] ?>
                                    </h3>
                                    <div class="description">
                                        <?php echo $slider['content'] ?>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>