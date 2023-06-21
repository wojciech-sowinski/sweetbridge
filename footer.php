</main><!-- /#main -->
<footer id="footer" class="bg-primary text-white">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-5 pt-5 pb-3 py-lg-5 d-flex flex-column gap-4  align-items-center align-items-md-start ">
				<div class="footer-logo">
					<?php $footer_logo = get_field('footer_logo', 'option'); ?>
					<?php $size = 'full'; ?>
					<?php if ($footer_logo): ?>
						<?php echo wp_get_attachment_image($footer_logo, $size, false, ['class' => 'img-contain']); ?>
					<?php endif; ?>
				</div>
				<p class="col-10">
					<?php the_field('footer_excerpt', 'option'); ?>
				</p>
				<?php if (have_rows('footer_social_icons', 'option')): ?>
					<div>
						<?php while (have_rows('footer_social_icons', 'option')):
							the_row(); ?>
							<a style="font-size:27px" class="text-white" title="Social Icon"
								href="<?php the_sub_field('urlfooter_social_icons_icon_url'); ?>">
								<span class="<?php the_sub_field('footer_social_icons_icon'); ?>"></span>
							</a>

						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
			<div class="col-12 col-sm-6 col-lg-3 pt-3 pb-3 py-lg-5  align-items-center align-items-md-start">
				<?php
				wp_nav_menu(
					array(
						'menu_class' => 'navbar-nav d-flex text-center text-sm-start',
						'container' => '',
						'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
						'walker' => new WP_Bootstrap_Navwalker(),
						'theme_location' => 'footer-menu',
					)
				) ?>
			</div>
			<div class="col-12  col-sm-6 col-lg-4 d-flex flex-column justify-content-between gap-3 text-white footer-info-lines pt-3 pb-5 py-lg-5  text-center text-sm-start">
				<h3 class="text-white offset-lg-2" style="font-size:22px">
					<?php the_field('footer_contact_title', 'option'); ?>
				</h3>
				<div class="d-flex flex-column justify-content-center offset-lg-2 ">
					<div class="d-flex gap-4 align-items-center justify-content-center justify-content-sm-start">
						<span style="font-size:30px" class="icon-telephone"></span>
						<div class="d-flex flex-column gap-2">
							<span class="kreon-font">
								<?= __('Infolinia', 'swiftbridge') ?>
							</span>
							<span style="font-size:14px; font-weight:500">
								<?php the_field('footer_contact_tel', 'option'); ?>
							</span>
						</div>
					</div>
				</div>
				<div class="d-flex flex-column justify-content-center offset-lg-2 ">
					<div class="d-flex gap-4 align-items-center justify-content-center justify-content-sm-start">
						<span style="font-size:30px" class="icon-mail"></span>
						<div class="d-flex flex-column gap-2">
							<span class="kreon-font">
								<?= __('Adres e-mail', 'swiftbridge') ?>
							</span>
							<span style="font-size:14px; font-weight:500">
								<?php the_field('footer_contact_email', 'option'); ?>
							</span>
						</div>
					</div>
				</div>
				<div class="offset-lg-2">
					<a href="#" class="btn btn-light text-primary btn-sm">
						<?= __('Skontaktuj się z nami', 'swiftbridge') ?>
					</a>
				</div>

			</div>
		</div>
	</div>

</footer><!-- /#footer -->
</div><!-- /#wrapper -->
<?php
wp_footer();
?>
</body>

</html>