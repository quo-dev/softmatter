<?php
$img = get_template_directory_uri().'/assets/images';
$title = get_field('title');
$items = get_field('items');
$background_color = get_field('background_color') ?: 'salmon';
?>
<!-- horizontal-accordion-slider-block:  bg-salmon, bg-mint, bg-dush -->
<?php if( have_rows('items') ): ?>

<div class="tpl-block accordion-slider-block accordion-slider-2-block accordion-slider-block-secondary bg-<?php echo $background_color; ?> pt-0 position-relative horizontal-accordion-slider-block">
    <div class="container">
        <ul class="nav nav-tabs wow fadeInUpBig"  id="myTab" role="tablist">
            <?php
            foreach ($items as $key => $item) :
                $randomkey = rand();
                $items[$key]['key'] = $randomkey;
                ?>
                <li class="nav-item" role="presentation">
                    <button data-slider="<?php echo $key ?>" class="nav-link <?php echo ($key == 0) ? 'active' : ''; ?>" id="nav-<?php echo $randomkey; ?>-tab" data-bs-toggle="tab" data-bs-target="#nav-<?php echo $randomkey; ?>" type="button" role="tab" aria-controls="home" aria-selected="<?php echo ($key == 0) ? 'true' : 'false'; ?>">
                        <div class="slider-title"><?php echo $item['title']; ?></div>
                    </button>
                </li>
            <?php endforeach; ?>
        </ul>
        <div class="tab-content wow fadeInUpBig" id="myTabContent" >
            <?php
            foreach ($items as $key => $item) :
                $slide = $item['slide'];
                ?>
                <div class="tab-pane fade <?php echo ($key == 0) ? 'show active' : ''; ?>" id="nav-<?php echo $item['key'] ?>" role="tabpanel" aria-labelledby="nav-<?php echo $item['key'] ?>-tab">
                    <div class="sub-title " data-wow-duration="0.8s" data-wow-offset="10">
                        <?php echo $item['sub_title']; ?>
                    </div>

                    <div data-accordion="<?php echo $key ?>" class="accordion-slider-containers <?php echo $key == 0 ? 'active is-open' : ''; ?>" data-wow-duration="1.2s" data-wow-offset="10">

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
                                                            <span class="bg-mint">Health</span>
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
                </div>
            <?php endforeach; ?>
        </div>



    </div>

</div>
<?php endif; ?>
