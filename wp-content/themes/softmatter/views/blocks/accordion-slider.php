<?php
$img = get_template_directory_uri().'/assets/images';
$title = get_field('title');
$items = get_field('items');
$background_color = get_field('background_color') ?: 'salmon';
?>
<!-- horizontal-accordion-slider-block:  bg-salmon, bg-mint, bg-dush -->
<?php if( have_rows('items') ): ?>
<div class="tpl-block accordion-slider-block accordion-slider-block-secondary bg-<?php echo $background_color; ?> pt-0 position-relative horizontal-accordion-slider-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <!-- ID of accordion should be dynamic-->
                <div class="accordion wow bounceInUp p-0" data-wow-offset="10" id="accordion4567">
                    <?php
                    foreach ($items as $key => $item) :
                        $randomkey = rand();
                        $items[$key]['key'] = $randomkey;
                    ?>
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button btn-icon <?php echo ($key == 0) ? '' : 'collapsed'; ?>" type="button" data-slider="<?php echo $randomkey; ?>" data-bs-toggle="collapse" data-bs-target="#accordion-body-<?php echo $randomkey; ?>" aria-expanded="<?php echo ($key == 0) ? 'true' : 'false'; ?>" >
                                <div class="d-flex align-items-center">
                                    <div class="white-line"></div>
                                    <div class="slider-title"><?php echo $item['title']; ?></div>
                                </div>
                            </button>
                        </h3>
                        <div id="accordion-body-<?php echo $randomkey; ?>" class="accordion-collapse collapse <?php echo ($key == 0) ? 'show' : ''; ?>"  data-bs-parent="#accordion4567" >
                            <div class="slider-description mt-4"><?php echo $item['sub_title']; ?></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container-slider-right">
        <div class="accordion-slider">
            <?php
            foreach ($items as $key => $item) :
                $slide = $item['slide'];
            ?>
            <div data-accordion="<?php echo $item['key']; ?>" class="accordion-slider-container <?php echo $key == 0 ? 'active is-open' : ''; ?>">
                <div class="accordion-slider-items accordion-slider-vertical">
                    <?php
                    foreach ($slide as $key => $slide_item):
                        $icons = $slide_item['icons'];
                    ?>
                    <div class="tab-slider-item">
                        <div class="tab-slider__image position-relative ">
                            <div class="image image-zoomin-effect">
                                <img src="<?php echo $slide_item['image']; ?>" alt="" />
                                <div class="group-icons">
                                    <?php foreach ($icons as $icon): ?>
                                    <?php if ($icon == 'outdoor'): ?>
                                    <div class="group-icons__item d-flex">
                                        <img src="<?php echo $img?>/icon-<?php echo $icon; ?>.svg" alt="" />
                                        <span class="bg-salmon">Outdoor and workwear</span>
                                    </div>
                                    <?php endif; ?>
                                    <?php if ($icon == 'heath'): ?>
                                        <div class="group-icons__item d-flex">
                                            <img src="<?php echo $img?>/icon-<?php echo $icon; ?>.svg" alt="" />
                                            <span class="bg-mint">Heath</span>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($icon == 'consumer'): ?>
                                        <div class="group-icons__item d-flex">
                                            <img src="<?php echo $img?>/icon-<?php echo $icon; ?>.svg" alt="" />
                                            <span class="bg-chalk">Consumer Tech</span>
                                        </div>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-slider__body"  >
                            <div class="tab-slider__title h4"><?php echo $slide_item['title']; ?></div>
                            <div class="tab-slider__text">
                                <?php echo $slide_item['content']; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php endif; ?>
