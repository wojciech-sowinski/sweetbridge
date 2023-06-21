<?php
/**
 * Template Name: Home-Page
 * Description: Page template
 *
 */

get_header();

the_post();
?>
<section class="home_page_section_1 container-fluid position-relative px-0">
	<div class="content col-12 col-xxl-11 position-absolute offset-0 offset-xxl-1 h-100" style="z-index:1;background: linear-gradient(0deg, rgba(43, 64, 180,
					<?php the_field('home_page_section_1_opacity'); ?>
				), rgba(43, 64, 180,
					<?php the_field('home_page_section_1_opacity'); ?>
				)), url(<?php echo the_field('home_page_section_1_opacity_bg_img'); ?>);
				background-repeat:no-repeat;
				background-size:cover;
				background-position:center;
		">
	</div>
	<div class="container content" style="z-index:100; position:relative">
		<div class="row py-3">
			<h1 class="col-12 col-lg-8 text-white pb-4 text-center text-md-start">
				<?php the_field('home_page_section_1_title'); ?>
			</h1>
		</div>
		<div class="row d-flex align-items-center gap-3 justify-content-center justify-content-md-start">
			<?php if (have_rows('home_page_section_1_btns')): ?>
				<div class="buttons d-flex gap-2 w-auto ">
					<?php while (have_rows('home_page_section_1_btns')):
						the_row(); ?>
						<a href="<?php the_sub_field('home_page_section_1_btns_btn_url'); ?>"
							class="btn btn-light text-primary">
							<?php the_sub_field('home_page_section_1_btns_btn_text'); ?>
						</a>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
			<?php if (have_rows('home_page_section_1_links')): ?>
				<div class="links d-flex gap-2 w-auto">
					<?php while (have_rows('home_page_section_1_links')):
						the_row(); ?>
						<a class="text-light fw-semibold" title="<?php the_sub_field('home_page_section_1_links_link_text'); ?>"
							href="<?php the_sub_field('home_page_section_1_links_link_url'); ?>">
							<?php the_sub_field('home_page_section_1_links_link_text'); ?>
						</a>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
		<?php if (have_rows('home_page_section_1_cards')): ?>
			<div class="row d-flex  pt-5">
				<?php while (have_rows('home_page_section_1_cards')):
					the_row(); ?>
					<div class="col-12 col-md-4">
						<div class="p-3">
							<span class="rounded-number bg-light text-dark">
								<?= get_row_index(); ?>
							</span>
						</div>
						<p class="p-3 text-light" style="font-weight:600; font-size:15px">
							<?php the_sub_field('home_page_section_1_cards_card_text'); ?>
						</p>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
<?php if (have_rows('home_page_section_2_icon_cards')): ?>
	<section class="home_page_section_2 container py-3 py-lg-5">
		<div class="row">

			<?php while (have_rows('home_page_section_2_icon_cards')):
				the_row(); ?>
				<?php
				if (get_row_index() == 1) {
					?>
					<div class="col-12 col-lg-6 p-4 p-md-5 d-flex flex-column gap-4">
						<div class="card-icon">
							<?php $home_page_section_2_icon_cards_card_img = get_sub_field('home_page_section_2_icon_cards_card_img'); ?>
							<?php $size = 'full'; ?>
							<?php if ($home_page_section_2_icon_cards_card_img): ?>
								<?php echo wp_get_attachment_image($home_page_section_2_icon_cards_card_img, $size); ?>
							<?php endif; ?>
						</div>
						<p class="text-primary fw-bold">
							<?php the_sub_field('tytul_kartyhome_page_section_2_icon_cards_card_title'); ?>
						</p>
						<p>
							<?php the_sub_field('home_page_section_2_icon_cards_card_text'); ?>
						</p>
					</div>
					<?php
				} ?>
			<?php endwhile; ?>
			<?php if (have_rows('home_page_section_2_icon_cards')): ?>
				<div class="col-12 col-lg-6 p-4 p-md-5 pb-0">
					<section class="splide" aria-label="Splide Slider">
						<div class="splide__track">
							<ul class="splide__list ">
								<?php while (have_rows('home_page_section_2_icon_cards')):
									the_row(); ?>
									<?php if (get_row_index() > 1) {
										?>
										<li class="splide__slide  d-flex flex-column gap-4 pb-5">
											<div class="card-icon">
												<?php $home_page_section_2_icon_cards_card_img = get_sub_field('home_page_section_2_icon_cards_card_img'); ?>
												<?php $size = 'full'; ?>
												<?php if ($home_page_section_2_icon_cards_card_img): ?>
													<?php echo wp_get_attachment_image($home_page_section_2_icon_cards_card_img, $size); ?>
												<?php endif; ?>
											</div>
											<p class="text-primary fw-bold">
												<?php the_sub_field('tytul_kartyhome_page_section_2_icon_cards_card_title'); ?>
											</p>
											<p>
												<?php the_sub_field('home_page_section_2_icon_cards_card_text'); ?>
											</p>
										</li>
										<?php
									} ?>
								<?php endwhile; ?>
							</ul>
						</div>
					</section>
				</div>
			<?php endif; ?>
		</div>
	</section>
	<?php if (have_rows('partners_carousel_btns')): ?>
		<section class="partners-carousel container-fluid py-5 bg-white">
			<div class="container d-flex flex-column gap-4">
				<div class="row">
					<div class="col-12">
						<p class="fw-bold">
							<?php the_field('partners_carousel_title'); ?>
						</p>
					</div>
				</div>
				<div class="row">
					<section class="splide" aria-label="Splide partners carousel">
						<div class="splide__track">
							<ul class="splide__list">
								<?php while (have_rows('partners_carousel_btns')):
									the_row(); ?>
									<li class="splide__slide">
										<a class="btn partner-button"
											title="<?php the_sub_field('partners_carousel_btns_btn_text'); ?>"
											href="<?php the_sub_field('partners_carousel_btns_btn_url'); ?>">
											<?php the_sub_field('partners_carousel_btns_btn_text'); ?>
										</a>
									</li>
								<?php endwhile; ?>
							</ul>
						</div>
					</section>
				</div>
			</div>
		</section>
		<section class="home-page-about-us py-3 py-lg-5">
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
							<div class="col-10 d-flex ">
								<p class="motto-sign col-2 p-0  px-md-3">
									<img src="http://swiftbridge/wp-content/themes/swiftbridge/media/img/motto-sign.svg"
										alt="motto sign" title="motto sign">
								</p>
								<p class="motto text-white px-3 px-xl-3 col-10">
									<?php the_field('home_page_about_us_motto'); ?>
								</p>
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
										<div class="col-12 col-md-6 px-0 py-3 px-lg-3 py-lg-3 px-xl-5 d-flex flex-column gap-3">
											<div class="card-icon-mini">
												<?php $home_page_about_us_cards_card_img = get_sub_field('home_page_about_us_cards_card_img'); ?>
												<?php $size = 'full'; ?>
												<?php if ($home_page_about_us_cards_card_img): ?>
													<?php echo wp_get_attachment_image($home_page_about_us_cards_card_img, $size); ?>
												<?php endif; ?>
											</div>
											<p style="font-size:14px">
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
			<?php if (have_rows('partners_cards')): ?>
				<div class="partners container py-3 py-lg-5">
					<div class="row py-4">
						<div class="col-12">
							<h2>
								<?php the_field('partners_title'); ?>
							</h2>
						</div>
					</div>
					<div class="row d-flex  ">
						<?php while (have_rows('partners_cards')):
							the_row(); ?>
							<div class="col-12 col-lg-6 d-flex flex-wrap p-3 justify-content-center justify-content-sm-start gap-3">
								<div class="col-12 col-sm-3 card-icon ">
									<?php $partners_cards_card_flag = get_sub_field('partners_cards_card_flag'); ?>
									<?php $size = 'full'; ?>
									<?php if ($partners_cards_card_flag): ?>
										<?php echo wp_get_attachment_image($partners_cards_card_flag, $size); ?>
									<?php endif; ?>
								</div>
								<div class="col-12 col-sm-9 px-3">
									<p class="text-center text-sm-start">
										<?php the_sub_field('partners_cards_card_excerpt'); ?>
									</p>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
				</div>
			<?php endif; ?>
		</section>
		<?php if (have_rows('cards_bg_cards')): ?>
			<section class="cards-bg pt-0 py-md-5" style="
			overflow-x: hidden;
				background-image: linear-gradient(180deg,rgba(255,255,255,0.8),rgba(255,255,255,1)),
								url('<?php if (get_field('cards_bg_cards_bg')): ?>
								<?php echo the_field('cards_bg_cards_bg'); ?>
								<?php endif ?>');
								">
				<div class="container">
					<div class="row cards">
						<?php while (have_rows('cards_bg_cards')):
							the_row();
							if (get_row_index() != 3) {
								?>
								<div class="col-12 col-lg-4 d-flex flex-column gap-3 py-4 px-3 py-lg-5 px-lg-5 panel<?php
								?>">
									<div class="card-icon-mini">
										<?php $cards_bg_cards_card_img = get_sub_field('cards_bg_cards_card_img'); ?>
										<?php $size = 'full'; ?>
										<?php if ($cards_bg_cards_card_img): ?>
											<?php echo wp_get_attachment_image($cards_bg_cards_card_img, $size); ?>
										<?php endif; ?>
									</div>
									<p class="text-primary fw-bold">
										<?php the_sub_field('cards_bg_cards_card_title'); ?>
									</p>
									<p>
										<?php the_sub_field('cards_bg_cards_card_text'); ?>
									</p>
								</div>
								<?php
							} else {
								?>
								<div
									class="col-12 col-lg-4 d-flex flex-column justify-content-center gap-3 after-primary p-5 order-first order-lg-0 ">
									<h2 class="text-white" style="z-index:10">
										<?php the_field('cards_bg_title'); ?>
									</h2>
									<p class="text-white" style="z-index:10">
										<?php the_field('cards_bg_excerpt'); ?>
									</p>
								</div>
								<div class="col-12 col-lg-4 d-flex flex-column gap-3 py-4 px-3 py-lg-5 px-lg-5 panel">
									<div class="card-icon-mini">
										<?php $cards_bg_cards_card_img = get_sub_field('cards_bg_cards_card_img'); ?>
										<?php $size = 'full'; ?>
										<?php if ($cards_bg_cards_card_img): ?>
											<?php echo wp_get_attachment_image($cards_bg_cards_card_img, $size); ?>
										<?php endif; ?>
									</div>
									<p class="text-primary fw-bold">
										<?php the_sub_field('cards_bg_cards_card_title'); ?>
									</p>
									<p>
										<?php the_sub_field('cards_bg_cards_card_text'); ?>
									</p>
								</div>
								<?php
							}
							?>
						<?php endwhile; ?>
					</div>
				</div>
			</section>
		<?php endif; ?>
		<section class="experts bg-white">
			<div class="container">
				<div class="row">
					<div class="col-12 d-flex justify-content-center p-5">
						<?php $experts_logo = get_field('experts_logo'); ?>
						<?php $size = 'full'; ?>
						<?php if ($experts_logo): ?>
							<?php echo wp_get_attachment_image($experts_logo, $size, false, ['class' => 'img-fluid']); ?>
						<?php endif; ?>
					</div>
					<div class="col-12 col-md-10 col-xl-8 pb-5 mx-auto">
						<p class="experts-exc text-center">
							<?php the_field('experts_excerpt'); ?>
						</p>
					</div>
				</div>
				<?php if (have_rows('experts_cards')): ?>
					<div class="row d-flex flex-wrap justify-content-center">
						<?php while (have_rows('experts_cards')):
							the_row(); ?>
							<div class="col-12 col-lg-6 col-xl-4 d-flex flex-column gap-3 py-4 px-4 ">
								<div class="d-flex justify-content-center justify-content-lg-start expert-img">
									<?php $experts_cards_card_img = get_sub_field('experts_cards_card_img'); ?>
									<?php $size = 'full'; ?>
									<?php if ($experts_cards_card_img): ?>
										<?php echo wp_get_attachment_image($experts_cards_card_img, $size, false, ['class' => 'rounded-circle img-cover']); ?>
									<?php endif; ?>
								</div>
								<p class="fw-bolder text-center text-xl-start">
									<?php the_sub_field('experts_cards_card_name'); ?>
								</p>
								<p>
									<?php the_sub_field('experts_cards_card_excerpt'); ?>
								</p>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
		</section>
		<section class="services bg-white py-5">
			<div class="banner">
				<?php $services_img = get_field('services_img'); ?>
				<?php $size = 'full'; ?>
				<?php if ($services_img): ?>
					<?php echo wp_get_attachment_image($services_img, $size, false, ['class' => 'img-cover']); ?>
				<?php endif; ?>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-6 py-5 pe-5">
						<h2 class="pb-4 d-flex align-items-center justify-content-between">
							<?php the_field('services_title'); ?>
							<?php $services_url = get_field('services_url'); ?>
							<?php if ($services_url): ?>
								<a href="<?php echo esc_url($services_url); ?>"><span class="icon-arrow-right"></span></a>
							<?php endif; ?>
						</h2>
						<div>
							<?php the_field('services_content'); ?>
						</div>
					</div>
					<div class="col-12 col-lg-6 services-motto d-flex  justify-content-center p-5 h-50">
						<p class="motto text-white col-10">
							<?php the_field('services_motto'); ?>
						</p>
						<p class="motto-sign col-2  px-3">
							<img src="<?= get_theme_file_uri('/media/img/motto-sign.svg') ?>" alt="motto sign"
								title="motto sign">
						</p>
					</div>
				</div>
			</div>
		</section>
		<?php if (have_rows('industries_cards')): ?>
			<section class="industries pb-5 pb-lg-5">
				<div class="container">
					<div class="row">
						<div class="col-12 p-5">
							<p class="motto text-center text-gray">
								<?php the_field('industries'); ?>
							</p>
						</div>
					</div>
					<div class="row cards d-none d-md-flex">
						<?php while (have_rows('industries_cards')):
							the_row(); ?>
							<div class="col-12 col-sm-6 col-lg-3 industries-card p-3 p-sm-5 d-flex flex-column gap-3">
								<div class="d-flex justify-content-center">
									<span style="font-size:40px"
										class="<?php the_sub_field('industries_cards_card_icon_class'); ?>"></span>
								</div>
								<p class="text-center">
									<?php the_sub_field('industries_cards_card_title'); ?>
								</p>
							</div>
						<?php endwhile; ?>
					</div>
					<div class="row cards d-flex d-md-none">
						<section class="splide" aria-label="Splide partners carousel">
							<div class="splide__track">
								<ul class="splide__list">
									<?php while (have_rows('industries_cards')):
										the_row(); ?>
										<li class="splide__slide">
											<div class="col-12 col-sm-6 col-lg-3 industries-card p-3 p-sm-5 d-flex flex-column gap-3">
												<div class="d-flex justify-content-center">
													<span style="font-size:40px"
														class="<?php the_sub_field('industries_cards_card_icon_class'); ?>"></span>
												</div>
												<p class="text-center">
													<?php the_sub_field('industries_cards_card_title'); ?>
												</p>
											</div>
										</li>
									<?php endwhile; ?>
								</ul>
							</div>
						</section>
					</div>
			</section>
		<?php endif; ?>
	<?php endif; ?>
<?php endif; ?>
<script>
	document.addEventListener('DOMContentLoaded', () => {
		new Splide('.home_page_section_2 .splide', {
			arrows: false,
			pagination: true,
		}).mount();
		new Splide('.partners-carousel .splide', {
			arrows: false,
			pagination: false,
			type: 'loop',
			drag: 'free',
			focus: 'center',
			perPage: 4,
			gap: 20,
			autoWidth: true,
			autoScroll: {
				speed: 0.5,
			},
		}).mount(window.splide.Extensions);
		new Splide('.industries .splide', {
			arrows: false,
			pagination: false,
			type: 'loop',
			drag: 'free',
			focus: 'center',
			perPage: 4,
			gap: 20,
			autoWidth: true,
			autoScroll: {
				speed: 0.5,
			},
		}).mount(window.splide.Extensions);
	})
</script>

<?php
get_footer();