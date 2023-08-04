<?php
$title = wrap_br(get_field('title'));
$content = wrap_br(get_field('content'));
$block_title = get_field('block_title');
$background_color = get_field('background_color');
$layout = get_field('layout');
$heading_color = get_field('heading_color');
$small_content_tab = get_field('small_content_tab');
?>
<?php if ($layout == '1-level') {
    $tabs = get_field('tab');
    ?>
    <section
            class="tpl-block tab-block tab-block-secondary bg-<?php echo $background_color ?> text-<?php echo $heading_color ?>">
        <!-- Options:  text-salmon/ text-dush / text-mint --->
        <?php if ($tabs) { ?>
            <div class="container">
            <?php if ($title || $content) { ?>
                <div class="heading text-center mb-5 pb-md-3">
                    <h3 class="mb-0"><?php echo $title ?></h3>
                    <p class="mt-5"><?php echo $content ?></p>
                </div>
            <?php } ?>
            <!-- Child tabs -->
            <ul class="nav nav-tabs  wow fadeIn" data-wow-offset="10" role="tablist">
                <?php
                foreach ($tabs as $key => $tab) {
                    $randomkey = rand();
                    $tabs[$key]['key'] = $randomkey;
                    ?>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link <?php echo ($key == 0) ? 'active' : '' ?>" data-bs-toggle="tab"
                                data-bs-target="#tab-<?php echo $randomkey ?>" data-text="<?php echo $randomkey ?>"
                                type="button" role="tab">
                            <div class="tab-title"><?php echo $tab['heading'] ?></div>
                        </button>
                    </li>
                    <?php
                }
                ?>
            </ul>
            <div class="tab-content wow fadeInUpBig">
                <?php
                foreach ($tabs as $key => $tab) {
                    ?>
                    <div class="tab-pane fade <?php echo ($key == 0) ? 'show active' : '' ?>"
                         id="tab-<?php echo $tabs[$key]['key'] ?>">
                        <div class="row">
                            <div class="col-lg-6 image" style="background-image: url('<?php echo $tab['image'] ?>')"></div>
                            <div class="col-lg-6 text bg-dush">
                                <div class="text-in">
                                    <?php if ($tab['icon']) { ?>
                                        <div class="icons">
                                            <img src="<?php echo $tab['icon'] ?>">
                                        </div>
                                    <?php } ?>
                                    <?php if ($tab['title']): ?>
                                    <h2 class="title h3"><?php echo wrap_br($tab['title']) ?></h2>
                                    <?php endif; ?>
                                    <div class="paragraph <?php echo $small_content_tab ? 'small-text' : ''; ?>">
                                        <?php echo wrap_br($tab['content']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>

        </div>
        <?php } ?>
    </section>

<?php } else {
    $tab_with_icons = get_field('tab_with_icon');
    ?>
    <section
            class="tpl-block tab-block tab-block-secondary bg-<?php echo $background_color ?> text-<?php echo $heading_color ?>">
        <!-- Options:  text-salmon/ text-dush / text-mint --->
        <?php if ($tab_with_icons) { ?>
            <div class="container">
            <?php if ($title || $content) { ?>
                <div class="heading text-center mb-5 pb-md-3">
                    <h2 class="h3 mb-0"><?php echo $title ?></h2>
                    <p class="mt-5"><?php echo $content ?></p>
                </div>
            <?php } ?>
            <!-- Parent tabs -->
            <ul class="nav nav-tabs parent-tab" id="myTab" role="tablist">
                <?php
                foreach ($tab_with_icons as $key => $tab_with_icon) {
                    $randomkey = rand();
                    $tab_with_icons[$key]['key'] = $randomkey;
                    ?>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link <?php echo ($key == 0) ? 'active' : '' ?>" data-bs-toggle="tab"
                                data-bs-target="#tab-<?php echo $randomkey ?>" data-text="<?php echo $randomkey ?>"
                                type="button" role="tab">
                            <div class="parent-icon">
                                <img class="default" src="<?php echo $tab_with_icon['icon'] ?>"/>
                                <img class="hover" src="<?php echo $tab_with_icon['icon_active'] ?>"/>
                            </div>
                            <span class="wow fadeInUp" data-wow-duration="0.4s"><?php echo $tab_with_icon['name'] ?></span>
                        </button>
                    </li>
                    <?php
                }
                ?>
            </ul>

            <div class="tab-content" id="myTabContent">

                <?php
                foreach ($tab_with_icons as $key => $tab_with_icon) {
                    ?>
                    <div class="tab-pane fade <?php echo ($key == 0) ? 'show active' : '' ?>"
                         id="tab-<?php echo $tab_with_icons[$key]['key'] ?>">
                        <!-- Child tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <?php
                            foreach ($tab_with_icon['tab'] as $key => $tab) {
                                $randomkey = rand();
                                $tab_with_icon['tab'][$key]['key'] = $randomkey;
                                ?>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link <?php echo ($key == 0) ? 'active' : '' ?>"
                                            data-bs-toggle="tab" data-bs-target="#tab-<?php echo $randomkey ?>"
                                            data-text="<?php echo $randomkey ?>" type="button" role="tab">
                                        <div class="tab-title fadeInUpBig animated duration-0-54s"><?php echo $tab['heading'] ?></div>
                                    </button>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                        <div class="tab-content fadeInUpBig animated duration-0-46s">
                            <?php
                            foreach ($tab_with_icon['tab'] as $key => $tab) {
                                ?>
                                <div class="tab-pane fade <?php echo ($key == 0) ? 'show active' : '' ?>"
                                     id="tab-<?php echo $tab_with_icon['tab'][$key]['key'] ?>">
                                    <div class="row">
                                        <div class="col-md-6 image">
                                            <img src="<?php echo $tab['image'] ?>">
                                        </div>
                                        <div class="col-md-6 text bg-dush">
                                            <div class="text-in">
                                                <?php if ($tab['icon']) { ?>
                                                    <div class="icons">
                                                        <img src="<?php echo $tab['icon'] ?>"/>
                                                    </div>
                                                <?php } ?>
                                                <?php if ($tab['title']): ?>
                                                <h2 class="title h3"><?php echo wrap_br($tab['title']) ?></h2>
                                                <?php endif; ?>
                                                <div class="paragraph <?php echo $small_content_tab ? 'small-text' : ''; ?>">
                                                    <?php echo wrap_br($tab['content']) ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <?php } ?>
    </section>
<?php } ?>
