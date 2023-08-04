<?php
$img = get_template_directory_uri().'/assets/images';

$tabs = get_field('tab');
$background_color = get_field('background_color') ? get_field('background_color') : 'chalk';
?>

<?php if( have_rows('tabs') ): ?>
<section class="tpl-block tab-block tab-block-secondary bg-<?php echo $background_color; ?> full-image-tab-slider-block" >
    <div class="container">
        <nav>
            <div class="nav nav-tabs wow fadeInUpBig" data-wow-offset="10" data-wow-delay=".2s" id="nav-tab" role="tablist">
                <?php
                while( have_rows('tabs') ) : the_row();
                    $name = get_sub_field('name');
                    $icon = get_sub_field('icon');
                    $active_icon = get_sub_field('active_icon');
                ?>
                <button class="nav-link <?php echo get_row_index() == 1 ? 'active' : ''; ?>" id="nav-home-tab" data-text="1" data-bs-toggle="tab" data-bs-target="#nav-target-<?php echo get_row_index(); ?>" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                    <div class="full-image-tab d-flex align-items-center">
                        <div class="full-image-tab__image">
                            <img class="default" src="<?php echo $icon ?>"/>
                            <img class="active" src="<?php echo $active_icon ?: $icon; ?>"/>
                        </div>
                        <div class="full-image-tab__text">
                            <?php echo $name; ?>
                        </div>
                    </div>
                </button>
                <?php endwhile; ?>
            </div>
        </nav>
    </div>
    <div class="full-image-tab-slider-block__body">
        <div class="tab-content" id="nav-tabContent">
            <?php
            while( have_rows('tabs') ) : the_row();
                $slide = get_sub_field('slide');
            ?>
            <div class="tab-pane fade <?php echo get_row_index() == 1 ? 'active show' : ''; ?>" id="nav-target-<?php echo get_row_index(); ?>" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="full-image-body-slider bg-dush">
                    <?php foreach ($slide as $item): ?>
                    <div class="full-image-body">
                        <div class="full-body__image">
                            <img src="<?php echo $item['image']; ?>"/>
                        </div>
                        <div class="full-body__text bg-dush">
                            <div class="container">
                                <div class="story-info mb-5">
                                    <h3 class=" wow fadeInUpBig" data-wow-offset="10" data-wow-delay=".2s">
                                        <?php echo $item['title']; ?>
                                    </h3>
                                    <div class="story-info__desc wow fadeInUpBig" data-wow-offset="10" data-wow-delay=".4s">
                                        <?php echo $item['sub_title']; ?>
                                    </div>
                                </div>
                                <div class="story-body d-flex">
                                    <div class="story-body__left wow fadeInUpBig" data-wow-offset="10" data-wow-delay=".6s">
                                        <?php echo $item['left_content']; ?>
                                    </div>
                                    <div class="story-body__right wow fadeInUpBig" data-wow-offset="10" data-wow-delay=".8s">
                                        <?php echo $item['right_content']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php endif; ?>

