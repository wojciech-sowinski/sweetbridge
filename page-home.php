<?php
/**
 * Template Name: Home-Page
 * Description: Page template
 * @author Wojciech Sowiński <wojciech.sowinski@innhouse.pl>
 */

get_header();

the_post();
?>
<section class="home_page_section_1 container-fluid position-relative px-0 pt-0 pb-5 step-gradient">
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
			<h1 class="col-12 col-lg-8 text-white pb-4 text-center text-md-start ">
				<?php
				textToBlur(get_field('home_page_section_1_title'));
				?>
			</h1>
		</div>
		<div class="row d-flex align-items-center gap-3 justify-content-center justify-content-md-start">
			<?php if (have_rows('home_page_section_1_btns')): ?>
				<div class="buttons d-flex gap-2 w-auto ">
					<?php 
					$btnsCounter = 500;
					?>
					<?php while (have_rows('home_page_section_1_btns')):
						the_row(); ?>
						<a data-aos="flip-up" data-aos-duration="500" data-aos-delay="<?= $btnsCounter+=200 ?>"  href="<?php the_sub_field('home_page_section_1_btns_btn_url'); ?>"
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
						<?php 
						$linksCounter = 700;
						?>
						<a data-aos="flip-up" data-aos-duration="500" data-aos-delay="<?= $btnsCounter+=200 ?>" class="text-light fw-semibold secondary-hover "
							title="<?php the_sub_field('home_page_section_1_links_link_text'); ?>"
							href="<?php the_sub_field('home_page_section_1_links_link_url'); ?>">
							<?php the_sub_field('home_page_section_1_links_link_text'); ?>
						</a>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
		<?php if (have_rows('home_page_section_1_cards')): ?>
			<div class="row d-flex  pt-5">
				<?php 
				$cardCouner = 1000;
				?>
				<?php while (have_rows('home_page_section_1_cards')):
					the_row(); ?>
					<div class="col-12 col-md-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="<?= $cardCouner+=200 ?>">
						<div class="px-3 py-1">
							<span class="rounded-number bg-light text-dark">
								<?= get_row_index(); ?>
							</span>
						</div>
						<p class="px-3 py-2 text-light" style="font-weight:600; font-size:15px">
							<?php the_sub_field('home_page_section_1_cards_card_text'); ?>
						</p>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
<?php if (have_rows('home_page_section_2_icon_cards')): ?>
	<section class="home_page_section_2 container pt-0" data-aos="fade-up" data-aos-duration="1000">
		<div class="row step-gradient">
			<?php while (have_rows('home_page_section_2_icon_cards')):
				the_row(); ?>
				<?php
				if (get_row_index() == 1) {
					?>
					<div class="col-12 col-lg-6 p-4 p-md-5 d-flex flex-column gap-4">
						<div class="card-icon card-icon-img">
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
											<div class="card-icon  card-icon-img">
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
	<?php get_template_part('template-parts/section', 'partners-carousel'); ?>
	<?php get_template_part('template-parts/section', 'about-us'); ?>
	<?php get_template_part('template-parts/section', 'partners-cards'); ?>
	<?php get_template_part('template-parts/section', 'bg-cards'); ?>
	<?php get_template_part('template-parts/section', 'experts'); ?>

	<section class="services bg-white pt-5" >
		<div class="banner animate-banner">
			<?php $services_img = get_field('services_img'); ?>
			<?php $size = 'full'; ?>
			<?php if ($services_img): ?>
				<?php echo wp_get_attachment_image($services_img, $size, false, ['class' => 'img-cover']); ?>
			<?php endif; ?>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-6 pt-6 pe-2 pe-lg-5 " data-aos="fade-right" data-aos-delay="1000" >
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
						<?php textToBlur(get_field('services_motto')); ?>
					</p>
					<p class="motto-sign col-2 ">
						<img src="<?= get_theme_file_uri('/media/img/motto-sign.svg') ?>" alt="motto sign"
							title="motto sign">
					</p>
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part('template-parts/section', 'industries') ?>
	<?php get_template_part('template-parts/section', 'news-carousel') ?>

<?php endif; ?>
<script>
	document.addEventListener('DOMContentLoaded', () => {
		new Splide('.home_page_section_2 .splide', {
			arrows: false,
			pagination: true,
		}).mount();

	})
</script>

<?php
get_footer();