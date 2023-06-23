<section class="home-page-about-us">
	<div class="container px-3 py-5 py-lg-5 d-flex flex-column gap-4 ">
		<div class="row ">
			<div class="col-12 col-lg-11 offset-0 offset-lg-1">
				<h2>
					<?php the_field('home_page_about_us_title'); ?>
				</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-10 col-lg-8 offset-0 offset-lg-1">
				<p>
					<?php the_field('home_page_about_us_excerpt'); ?>
				</p>
			</div>
		</div>
	</div>
	<div class="container-fluid position-relative">
		<div class="position-absolute d-none d-lg-block primary-gradient col-6 d-lg-block"
			style="z-index:2; height:100%; "></div>
		<div class="container ">
			<div class="row">
				<div class="d-flex col-12 col-lg-6 justify-content-center px-0 py-5 primary-gradient-lg"
					style="z-index:100;">
					<div class="col-10 d-flex flex-column justify-content-center">
						<div class="d-flex">
							<p class="motto-sign col-2 p-0  px-md-3">
								<img src="http://swiftbridge/wp-content/themes/swiftbridge/media/img/motto-sign.svg"
									alt="motto sign" title="motto sign">
							</p>
							<p class="motto text-white px-3 px-xl-3 col-10">
								<?php the_field('home_page_about_us_motto'); ?>
							</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-6 py-3 py-lg-0">
					<p class="py-3 px-0 px-lg-5 py-lg-3 fw-semibold">
						<?php the_field('home_page_about_us_cards_section_title'); ?>
					</p>
					<?php if (have_rows('home_page_about_us_cards')): ?>
						<div class="d-flex flex-wrap">
							<?php while (have_rows('home_page_about_us_cards')):
								the_row(); ?>
								<div
									class="col-12 col-sm-8 mx-auto col-md-6 px-0 py-3 px-lg-3 py-lg-3 px-xl-5 d-flex flex-column align-items-center align-items-md-start gap-3">
									<div class="card-icon-mini d-flex ">
										<?php $home_page_about_us_cards_card_img = get_sub_field('home_page_about_us_cards_card_img'); ?>
										<?php $size = 'full'; ?>
										<?php if ($home_page_about_us_cards_card_img): ?>
											<?php echo wp_get_attachment_image($home_page_about_us_cards_card_img, $size); ?>
										<?php endif; ?>
									</div>
									<p class="text-center text-md-start" style="font-size:14px">
										<?php the_sub_field('home_page_about_us_cards_card_text'); ?>
									</p>
								</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
					<?php if (have_rows('home_page_about_us_btns')): ?>
						<div class="px-5 py-3 d-flex flex-wrap justify-content-center justify-content-lg-start">
							<?php while (have_rows('home_page_about_us_btns')):
								the_row(); ?>
								<a class="btn btn-primary" title="<?php the_sub_field('home_page_about_us_btns_btn_text'); ?>"
									href="<?php the_sub_field('home_page_about_us_btns_btn_url'); ?>">
									<?php the_sub_field('home_page_about_us_btns_btn_text'); ?>
								</a>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>