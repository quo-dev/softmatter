<?php
$vimeo_id = get_field('vimeo_id');
$video_thumbnail_image = get_field('video_thumbnail_image');
$items = get_field('items');
$background_color = get_field('background_color') ? get_field('background_color') : 'dush';
?>
<!--option background color class name is :  bg-chalk, bg-mint, bg-dush / Option color job-title : white-style-->
<section class="tpl-block leadership-section bg-dush white-style">
   <div class="container">
        <h2 class="team-name mb-5 wow fadeInUpBig" data-wow-duration="1s" data-wow-offset="10" >Leadership</h2>
        <div class="team-lead">
           <div class="row">
                <div class="col-lg-4 team-lead__image wow fadeInUpBig" data-wow-duration="1s" data-wow-offset="10">
                    <div class="team-lead__image--content">
                        <img src="<?php echo $img?>/demo/leader-1.jpg"/>
                    </div>
                </div>
                <div class="col-lg-8 team-lead__info wow fadeInUpBig" data-wow-duration="1s" data-wow-offset="10">
                    <div class="team-lead__info--content">
                        <h3 class="leader-name">Ulysses Wong</h3>
                        <h3 class="leader-title">Chief Executive Officer</h3>
                        <div class="bio">
                            <p>
                                Ulysses leads the efforts in building and growing the global business of Softmatter.
                            </p>
                            <p>
                                Previously, Ulysses was the President and CEO of Enbi, a Platinum Equity-owned global manufacturing and engineering company. Prior to that, Ulysses held VP-level business and customer engagement positions at international corporations, including: Flex, Logitech, and IBM. Ulysses’ leadership roles have also included General Manager, Sales and Marketing, Product Management, Supply Chain Management, and Systems Engineering.
                            </p>
                        </div>
                        <div class="share-social">
                            <a href="https://www.linkedin.com/in/ulyssesvwong/" class="link-social" target="_blank">
                                <img src="<?php echo $img?>/demo/icon-in.svg"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">

            </div>
        </div>

      <!--   Other team Member  -->
        <div class="other-team-members">
            <div class="team-members-slider">
                <div class="item-member wow fadeInUpBig" data-wow-duration="1s" data-wow-offset="10" data-wow-delay="0.5s">
                    <div class="team-member">
                        <div class="team-member__image mb-4">
                              <img src="<?php echo $img?>/demo/leader-2.jpg"/>
                        </div>
                        <h3 class="leader-name">Tiasha Renganathan</h3>
                          <h3 class="leader-title">Chief Customer Officer</h3>
                          <div class="share-social">
                              <a href="https://www.linkedin.com/in/tiasha-renganathan-646b8095/" class="link-social" target="_blank">
                                  <img src="<?php echo $img?>/icon-in.svg"/>
                              </a>
                          </div>
                          <a href="#" class="team-member-cta btn btn-outline-primary mt-4 btn-sm">Meet the Marketing Team</a>
                      </div>
                </div>
                <div class="item-member wow fadeInUpBig" data-wow-duration="1s" data-wow-offset="10" data-wow-delay="0.5s">
                    <div class="team-member">
                        <div class="team-member__image mb-4">
                              <img src="<?php echo $img?>/demo/leader-3.jpg"/>
                        </div>
                        <h3 class="leader-name">Vishwa Aluthge</h3>
                          <h3 class="leader-title">Chief Product Officer</h3>
                          <div class="share-social">
                              <a href="https://www.linkedin.com/in/vishwaaluthge/" class="link-social" target="_blank">
                                  <img src="<?php echo $img?>/icon-in.svg"/>
                              </a>
                          </div>
                          <a href="#" class="team-member-cta btn btn-outline-primary mt-4 btn-sm">Meet the Marketing Team</a>
                      </div>
                </div>
                <div class="item-member wow fadeInUpBig" data-wow-duration="1s" data-wow-offset="10" data-wow-delay="0.5s">
                    <div class="team-member">
                        <div class="team-member__image mb-4">
                              <img src="<?php echo $img?>/demo/leader-4.jpg"/>
                        </div>
                        <h3 class="leader-name">Ross D Alcazar</h3>
                          <h3 class="leader-title">Chief Operations Officer</h3>
                          <div class="share-social">
                              <a href="https://www.linkedin.com/in/rossalcazar/" class="link-social" target="_blank">
                                  <img src="<?php echo $img?>/icon-in.svg"/>
                              </a>
                          </div>
                          <a href="#" class="team-member-cta btn btn-outline-primary mt-4 btn-sm">Meet the Marketing Team</a>
                      </div>
                </div>
            </div>

        </div>
   </div>
</section>

<section class="tpl-block leadership-section bg-dush">
   <div class="container">
        <h2 class="team-name mb-5 wow fadeInUpBig" data-wow-duration="1s" data-wow-offset="10" >Advisor</h2>
        <div class="team-lead">
           <div class="row">
                <div class="col-lg-4 team-lead__image wow fadeInUpBig" data-wow-duration="1s" data-wow-offset="10">
                    <div class="team-lead__image--content">
                        <img src="<?php echo $img?>/demo/leader-5.jpg"/>
                    </div>
                </div>
                <div class="col-lg-8 team-lead__info wow fadeInUpBig" data-wow-duration="1s" data-wow-offset="10">
                    <div class="team-lead__info--content">
                        <h3 class="leader-name">Donald Jones</h3>
                        <h3 class="leader-title">Cardiff Ocean Group</h3>
                        <div class="bio">
                            <p>
                                Donald Jones is a globally recognized leader in digital medicine, digital therapies, technology enabled health services and virtual-first healthcare delivery. He is a sought out as a speaker, advisor and board member. He works across the spectrum of healthcare, pharmaceutical, medical device, wearable, smart apparel, material science and healthcare companies.

                            </p>
                        </div>
                        <div class="share-social">
                            <a href="https://www.linkedin.com/in/donald-jones-b71b8a2/" class="link-social" target="_blank">
                                <img src="<?php echo $img?>/icon-in.svg"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">

            </div>
        </div>
   </div>
</section>

