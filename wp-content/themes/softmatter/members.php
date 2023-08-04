<?php
$heading = get_field('heading');
$members = get_field('members');
$first_member = $members[0];
$member_position_color = get_field('member_position_color');
$background_color = get_field('background_color') ? get_field('background_color') : 'dush';
$img = get_template_directory_uri().'/assets/images';
?>
<!--option background color class name is :  bg-chalk, bg-mint, bg-dush / Option color job-title : white-style-->
<section class="tpl-block leadership-section bg-<?php echo $background_color; if($member_position_color === 'white') echo ' white-style'; ?>">
   <div class="container">
        <h2 class="team-name mb-5 wow fadeInUpBig" data-wow-duration="1s" data-wow-offset="10" ><?php echo $heading ?></h2>
        <div class="team-lead">
           <div class="row">
                <?php
                if($first_member){
                    ?>
                    <div class="col-lg-4 team-lead__image wow fadeInUpBig" data-wow-duration="1s" data-wow-offset="10">
                        <div class="team-lead__image--content">
                            <img src="<?php echo $first_member['image'] ?>"/>
                        </div>
                    </div>
                    <div class="col-lg-8 team-lead__info wow fadeInUpBig" data-wow-duration="1s" data-wow-offset="10">
                        <div class="team-lead__info--content">
                            <h3 class="leader-name"><?php echo $first_member['name'] ?></h3>
                            <h3 class="leader-title"><?php echo $first_member['position'] ?></h3>
                            <?php if($first_member['bio']) echo '<div class="bio">'.$first_member['bio'] . '</div>' ?>
                            <div class="share-social">
                                <a href="<?php echo $first_member['linkedin'] ?>" class="link-social" target="_blank">
                                    <img src="<?php echo $img?>/demo/icon-in.svg"/>
                                </a>
                            </div>
                            <?php if($first_member['button']) {
                                $link_target  = $first_member['button']['target'] ? $first_member['button']['target'] : '_self';
                                ?>
                                <a href="<?php echo esc_url($first_member['button']['url']); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="team-member-cta btn btn-outline-primary mt-4 btn-sm" tabindex="0"><?php echo esc_html($first_member['button']['title']); ?></a>
                            <?php } ?>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="">

            </div>
        </div>

      <!--   Other team Member  -->
       <?php if ($members): ?>
        <div class="other-team-members">
            <div class="team-members-slider">
                <?php 
                if(count($members) > 1){
                    array_shift($members);
                    foreach ($members as $key => $member) {
                        ?>
                        <div class="item-member wow fadeInUpBig" data-wow-duration="1s" data-wow-offset="10" data-wow-delay="0.5s">
                            <div class="team-member">
                                <div class="team-member__image mb-4">
                                    <img src="<?php echo $member['image'] ?>"/>
                                </div>
                                <h3 class="leader-name"><?php echo $member['name'] ?></h3>
                                <h3 class="leader-title"><?php echo $member['position'] ?></h3>
                                <?php if($member['bio']) echo '<div class="bio">'.$member['bio'] . '</div>' ?>
                                <div class="share-social">
                                    <a href="<?php echo $member['linkedin'] ?>" class="link-social" target="_blank">
                                        <img src="<?php echo $img?>/icon-in.svg"/>
                                    </a>
                                </div>
                                <?php if($member['button']) {
                                    $link_target  = $member['button']['target'] ? $member['button']['target'] : '_self';
                                    ?>
                                    <a href="<?php echo esc_url($member['button']['url']); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="team-member-cta btn btn-outline-primary mt-4 btn-sm" tabindex="0"><?php echo esc_html($member['button']['title']); ?></a>
                                <?php } ?>

                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>

        </div>
       <?php endif; ?>
   </div>
</section>

