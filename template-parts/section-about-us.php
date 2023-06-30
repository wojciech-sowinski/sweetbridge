<section class="home-page-about-us" data-aos="fade-up" data-aos-delay="300">
	<div class="container px-3 d-flex flex-column gap-2 pb-5">
		<div class="row ">
			<div class="col-12 col-lg-11 offset-0 offset-lg-1">
				<?php if (get_field('about_us_first') == 1): ?>
					<h1>
						<?php the_field('home_page_about_us_title'); ?>
					</h1>
				<?php else: ?>
					<h2>
						<?php the_field('home_page_about_us_title'); ?>
					</h2>
				<?php endif; ?>
			</div>
		</div>
		<?php
		if (!empty(get_field('home_page_about_us_excerpt'))) {
			?>
			<div class="row">
				<div class="col-12 col-md-10 col-lg-8 offset-0 offset-lg-1">
					<p>
						<?php the_field('home_page_about_us_excerpt'); ?>
					</p>
				</div>
			</div>
			<?php
		}
		?>
	</div>
	<div class="container-fluid position-relative">
		<div class="position-absolute d-none d-lg-block primary-gradient col-6 d-lg-block h-100"
			></div>
		<div class="container ">
			<div class="row">
				<div class="d-flex col-12 col-lg-6 justify-content-center px-0 py-5 primary-gradient-lg"
					style="z-index:100;">
					<div class="col-10 d-flex flex-column justify-content-center">
						<div class="d-flex">
							<p class="motto-sign col-2 p-0  px-md-3">
								<img src="<?= get_theme_file_uri('/media/img/motto-sign.svg'); ?>" alt="motto sign"
									title="motto sign">
							</p>
							<p class="motto text-white px-3 px-xl-3 col-10">
								<?php textToBlur(get_field('home_page_about_us_motto')); ?>
							</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-6 py-3 py-lg-0 d-flex flex-column gap-3">
					<p class="py-3 px-0 px-lg-5 py-lg-3 fw-semibold headline-font">
						<?php the_field('home_page_about_us_cards_section_title'); ?>
					</p>
					<?php if (have_rows('home_page_about_us_cards')): ?>
						<div class="d-flex flex-wrap">
							<?php
							$aboutUsCardCounter = 500;
							?>
							<?php while (have_rows('home_page_about_us_cards')):
								the_row(); ?>
								<div data-aos="flip-up" data-aos-duration="1000"
									data-aos-delay="<?= $aboutUsCardCounter += 200 ?>"
									class="col-12 col-sm-8 mx-auto col-md-6 pe-1 ps-0 py-3 ps-lg-3 py-lg-3 ps-xl-5 d-flex flex-column align-items-center align-items-md-start gap-1">
									<div class="card-icon-mini d-flex ">
										<?php $home_page_about_us_cards_card_img = get_sub_field('home_page_about_us_cards_card_img'); ?>
										<?php $size = 'full'; ?>
										<?php if ($home_page_about_us_cards_card_img): ?>
											<?php echo wp_get_attachment_image($home_page_about_us_cards_card_img, $size); ?>
										<?php endif; ?>
									</div>
									<p class="text-center text-md-start about-us-card" style="font-size:14px; ">
										<?php the_sub_field('home_page_about_us_cards_card_text'); ?>
									</p>
								</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
					<?php if (have_rows('home_page_about_us_btns')): ?>
						<div class="px-5 py-1 d-flex flex-wrap justify-content-center justify-content-lg-start">
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