<?php
$img = get_template_directory_uri().'/assets/images';
require_once "footer-navwalker.php";
?>
<footer class="app-footer">
	<div class="container">
		<div class="app-footer__top d-flex flex-md-row flex-column justify-content-between ">
			<div class="app-footer__left">
				<a href="" style="max-width: 20rem;">
<!--                    <img src="--><?php //the_field('footer_logo', 'option'); ?><!--" alt="" />-->
					<img src="<?php echo $img?>/animated_logo.gif" alt="" style="max-width: 20rem;" />
				</a>
			</div>
			<div class="app-footer__right">
				<div class="text-widget">
					Softmatter is the wearable technology team <br />of MAS Holdings (Private) Limited.
				</div>
			</div>
		</div>
		<div class="app-footer__middle d-flex flex-lg-row flex-column justify-content-between">
			<div class="app-footer__left">
				<div class="subscribe">
					<label>Subscribe to our newsletter</label>
					<div class="position-relative">
                        <?php echo apply_shortcodes( '[contact-form-7 id="4669" title="Subscribe Form"]' ); ?>
                    </div>
                </div>
			</div>
			<div class="app-footer__right">
				<div class="d-flex justify-content-between">
                    <?php
                     wp_nav_menu( array(
                        'theme_location' => 'footer_column_1',
                        'container' => false,
                        'menu_class' => 'nav flex-column align-items-center align-items-sm-start',
                        'walker' => new Footer_Walker_Nav_Menu
                     ) );
                    ?>
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'footer_column_2',
                        'container' => false,
                        'menu_class' => 'nav flex-column align-items-center align-items-sm-start',
                        'walker' => new Footer_Walker_Nav_Menu
                    ) );
                    ?>
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'footer_column_3',
                        'container' => false,
                        'menu_class' => 'nav flex-column align-items-center align-items-sm-start',
                        'walker' => new Footer_Walker_Nav_Menu
                    ) );
                    ?>
				</div>
			</div>
		</div>
		<div class="app-footer__bottom row d-flex justify-content-between">
			<div class="app-footer__left">
				<div class="copy-right text-center text-sm-start">© Copyright. Softmatter™. <?php
                    function currentYear(){
                        return date('Y');
                    }
                    echo currentYear();
                    ?>. All rights reserved</div>
			</div>
			<div class="app-footer__right">
				<ul class="nav social justify-content-sm-end justify-content-center">
                    <li class="nav-item mx-4">
                        <a href="<?php the_field('facebook', 'option'); ?>" target="_blank" class="nav-link">
                            <img src="<?php echo $img ?>/ico-facebook.png">
                        </a>
                    </li>
					<li class="nav-item mx-4">
						<a href="<?php the_field('instagram', 'option'); ?>" target="_blank" class="nav-link">
							<img src="<?php echo $img ?>/ico-ig.png">
						</a>
                    </li>
					<li class="nav-item mx-4">
						<a href="<?php the_field('linkedin', 'option'); ?>" target="_blank" class="nav-link">
                            <img src="<?php echo $img ?>/ico-LInkedIN.png">
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<?php if(!isset($_COOKIE['CookieConsent'])): ?>
<div class="sticky-footer">
    <div class="container-fluid">
        <div class="sticky-footer__body d-flex sticky-content align-item-center justify-content-between">
            <div class="sticky-footer__body--left">
                This website uses cookies to enhance the user experience.
            </div>
            <div class="sticky-footer__body--right">
                <button id="understand_use_cookie" class="btn ">I understand</button>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<div class="modal fade" id="shippingPolicyModal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog">
		<div class="bg-gadient"></div>
		<div class="modal-content">
			<div class="d-flex justify-content-end">
				<button type="button" class="btn-icon" data-bs-dismiss="modal" aria-label="Close">
					<i class="icon-clear"></i>
				</button>
			</div>
			<div class="modal-body ">
        <div class="scroll-content">
				  <?php the_field('shipping_policy_modal', 'option'); ?>
        </div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="refundModal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog">
		<div class="bg-gadient"></div>
		<div class="modal-content">
			<div class="d-flex justify-content-end">
				<button type="button" class="btn-icon" data-bs-dismiss="modal" aria-label="Close">
					<i class="icon-clear"></i>
				</button>
			</div>
			<div class="modal-body">
        <div class=" scroll-content">
          <?php the_field('refund_modal', 'option'); ?>
        </div>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="privacyPolicyModal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog">
		<div class="bg-gadient"></div>
		<div class="modal-content">
			<div class="d-flex justify-content-end">
				<button type="button" class="btn-icon" data-bs-dismiss="modal" aria-label="Close">
					<i class="icon-clear"></i>
				</button>
			</div>
			<div class="modal-body ">
				<div class="scroll-content">
          <?php the_field('privacy_policy', 'option'); ?>
        </div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade sm-modal" id="modalConfirm" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="d-flex justify-content-end">
				<button type="button" class="btn-icon" data-bs-dismiss="modal" aria-label="Close">
					<i class="icon-clear"></i>
				</button>
			</div>
			<div class="modal-body ">
                <div class="scroll-content">
                  <p class="modal-p">Do you want remove this item? </p>
                  <div class="modal-cta">
                    <button class="btn btn-secondary mr-5" id="btnNo">Cancel</button>
                    <button class="btn btn-primary" id="btnYes">OK</button>
                  </div>
                </div>
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>
</div>
</body>

	<style>
	<?php
		$time = 0.46;
		for ($i=0; $i < 40; $i++) {
			$time += 0.04;
			$timeIsString = number_format((float)$time, 2, '-', '');
			echo '.duration-' . $timeIsString . 's { animation-duration: '. $time .'s } ';
		}
	?>
	</style>

</html>
