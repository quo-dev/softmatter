<?php
$cards = get_field('cards');
$background_color = get_field('background_color');
?>
<section class="tpl-block card-hover-block bg-<?php echo $background_color ?>">
    <div class="container">
        <div class="row">
            <?php
            if(is_array($cards) && count($cards) ){
                foreach ($cards as $key => $card) {
                    ?>
                    <div class="col-lg-4">
                        <div class="car-hover-item wow fadeInUpBig" data-wow-duration="1s" data-wow-offset="10">
                            <div class="image">
                                <img class="img" src="<?php echo $card['image'] ?>" alt="Demo Image">
                                <div class="hover-info">
                                    <img src="<?php echo $card['icon'] ?>" alt="SoftMater" class="icon">
                                    <div class="list-info">
                                        <?php echo $card['content'] ?>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <h2 class="title"><?php echo $card['title'] ?></h2>
                                <h3 class="sub-title"><?php echo $card['sub_title'] ?></h3>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</section>