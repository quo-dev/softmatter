<?php

$title_text = get_field('title_text');
$content_text = get_field('content_text');
$title_email = get_field('title_email');
$email = get_field('email');
$facebook = get_field('facebook', 'option');
$instagram = get_field('instagram', 'option');
$linkedin = get_field('linkedin', 'option');
?>

<section class="tpl-block bg-chalk drop-by-section">
           <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="drop-item">
                        <h3 class="title mb-3"><?php echo $title_text; ?></h3>
                        <p class="mb-0 f-16"><?php echo $content_text; ?></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="drop-item">
                        <h3 class="title mb-3"><?php echo $title_email; ?></h3>
                        <a href="mailto:<?php echo $email; ?>" class="mb-0 f-16 text-decoration-none"><?php echo $email; ?></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="drop-item last-drop-item">
                        <h3 class="title mb-3">Find us on</h3>
                        <ul class="ul-share">
                            <li>
                                <a href="<?php echo $facebook; ?>" target="_blank">
                                    <i class="icon-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $instagram; ?>" target="_blank">
                                    <i class="icon-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $linkedin; ?>" target="_blank">
                                    <i class="icon-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
           </div>
      </section>