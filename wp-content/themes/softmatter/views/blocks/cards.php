<!-- CARD 3 BLOCK : CASE DEFAULT (Homepage)
    - Have read more

    Classes in parent element:
    - Have List content: .has-list-content
-->
<!--option background color class name is :  bg-chalk, bg-mint, bg-dush-->
<?php
$cards = get_field('cards');
$background_color = get_field('background_color') ? get_field('background_color') : 'white';
$layout = get_field('layout');
?>


<?php
if ($layout == 'list') { ?>
    <section class="tpl-block card-3-cols-block bg-chalk bg-<?php echo $background_color ?>">
        <div class="container">
            <div class="row cards-layout">
                <?php
                $duration = 1.6;
                foreach ($cards as $card) {
                    $duration += 0.2;
                    ?>
                    <div class="col-md-4">
                        <div class="card-item wow fadeInUpBig" data-wow-duration="<?php echo $duration ?>s"
                             data-wow-offset="100">
                            <!-- Option: Image -->
                            <a href="#" class="image image-zoomin-effect"><!-- Can switch <a> or <div> -->
                                <img src="<?php echo $card['image'] ?>" alt="Textile Engineering Image">
                                <?php
                                if (count($card['icons'])) {
                                    if (in_array("heath", $card['icons'])) {
                                        ?>
                                        <div class="icon-hovering">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/heath.jpg"
                                                 alt="">
                                            <div class="name"><span>Heath</span></div>
                                        </div>
                                        <?php
                                    }
                                    if (in_array("technology", $card['icons'])) {
                                        ?>
                                        <div class="icon-hovering">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/consumer.jpg"
                                                 alt="">
                                            <div class="name"><span>Technology</span></div>
                                        </div>
                                        <?php
                                    }
                                    if (in_array("outdoor", $card['icons'])) {
                                        ?>
                                        <div class="icon-hovering">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/outdoor.jpg"
                                                 alt="">
                                            <div class="name"><span>Outdoor</span></div>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </a>
                            <div class="wrap-content">
                                <h3 class="title"><a href="javascript:void(0)"><?php echo wrap_br($card['title']) ?></a>
                                </h3>
                                <div class="content">
                                    <?php echo wrap_br($card['content']) ?>
                                </div>
                                <?php if ($card['button']): ?>
                                <div class="cta">
                                    <a href="<?php echo $card['button']['url'] ?>" class="btn btn-outline-secondary">
                                        <?php echo $card['button']['title'] ?>
                                    </a>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } else { ?>
    <section class="content-slider tpl-block content-slider-cols bg-<?php echo $background_color ?>">
        <div class="container">
            <div class="slider-container">
                <div class=" sliderCols">
                    <?php
                    $duration = 2.1;
                    foreach ($cards as $card) {
                        $duration += 0.2;
                        ?>
                        <div class="slider-item wow fadeInUpBig" data-wow-duration="<?php echo $duration ?>s"
                             data-wow-offset="10">
                            <div class="slider__image image-zoomin-effect">
                                <img src="<?php echo $card['image'] ?>" alt=""/>
                            </div>
                            <div class="slider__body">
                                <h3 class="slider__title"><?php echo wrap_br($card['title']) ?></h3>
                                <div class="slider__text"><?php echo wrap_br($card['content']) ?></div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <!--Show this blog when have more 3 item-->
                <?php
                if (count($cards) > 3) {
                    ?>
                    <button class="slick-prev slick-arrow position-static button-slick-alone"></button>
                    <button class="slick-next slick-arrow position-static button-slick-alone"></button>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="container container-navigation d-none <?php echo (count($cards) > 3) ? 'd-sm-flex' : ''; ?>  justify-content-end position-relative">
            <!-- navigation for slider-->
            <ul class="slick-dots">
                <?php
                foreach ($cards as $key => $card) {
                    if (!$key) {
                        echo '<li class="slick-active" data-slide="' . ++$key . '">';
                    } else {
                        echo '<li data-slide="' . ++$key . '">';
                    }
                    echo '<button type="button" role="tab" >' . ++$key . '</button></li>';
                }
                ?>
            </ul>
        </div>
    </section>
<?php } ?>