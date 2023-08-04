<?php
$img = get_template_directory_uri().'/assets/images';
$items = get_field('items');
?>

<?php if ($items): ?>
<div class="tpl-block accordion-slider-block accordion-slider-block-secondary bg-dush pt-0 position-relative vertical-accordion-slider-block">
    <div class="container">
        <div class="accordion p-0 wow fadeInUp" data-wow-offset="10" id="accordion1234">
            <?php
            foreach ($items as $key => $item):
                $randomkey = rand();
                $items[$key]['key'] = $randomkey;
            ?>
            <div class="accordion-item">
                <h3 class="accordion-header" >
                    <button class="accordion-button btn-icon <?php echo $key != 0 ? 'collapsed' : ''; ?>" type="button" data-slider="<?php echo $randomkey; ?>" data-bs-toggle="collapse" data-bs-target="#accordion-body-<?php echo $randomkey; ?>" aria-expanded="<?php echo $key != 0 ? 'false' : 'true'; ?>"" >
                        <div class="icon-img">
                            <img class="tab-icon" src="<?php echo $item['icon']; ?>">
                            <img class=" tab-icon tab-icon-active" src="<?php echo $item['icon_active'] ?: $item['icon']; ?>">
                        </div>
                        <?php echo $item['header']; ?>
                    </button>
                </h3>
                <div id="accordion-body-<?php echo $randomkey; ?>" class="accordion-collapse collapse <?php echo $key != 0 ? '' : 'show'; ?>""  data-bs-parent="#accordion1234" >
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="accordion-slider wow fadeInUpBig">
            <?php
            foreach ($items as $key => $item):
                $sliders = $item['sliders'];
            ?>
            <div data-accordion="<?php echo $item['key']; ?>" class="accordion-slider-container <?php echo $key != 0 ? '' : 'active is-open'; ?>">
                <div class="accordion-slider-items accordion-slider-cols">
                    <?php foreach ($sliders as $key => $slider): ?>
                    <div class="tab-slider-item" >
                        <div class="tab-slider__image position-relative ">
                            <a href="<?php echo $item['link'] ? $item['link']['url'] : ''; ?>" class="image image-zoomin-effect">
                                <img src="<?php echo $slider['image']; ?>" alt="" />
                            </a>
                            <a href="<?php echo $item['link'] ? $item['link']['url'] : ''; ?>" class="btn btn-white btn-small">LEARN MORE</a>
                        </div>
                        <div class="tab-slider__body">
                            <div class="tab-slider__title h4"><?php echo $slider['title']; ?></div>
                            <div class="tab-slider__text">
                                <?php echo $slider['content']; ?>
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