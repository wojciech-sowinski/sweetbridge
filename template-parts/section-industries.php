<?php if (have_rows('industries_cards')): ?>
		<section class="industries pb-5 pb-lg-5">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-8 mx-auto px-3 py-5 p-md-5">
						<h2 class="motto text-center text-gray">
							<?php the_field('industries'); ?>
						</h2>
					</div>
				</div>
				<div class="row cards d-none d-sm-flex">
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
				<div class="row cards d-flex d-sm-none">
					<section class="splide splide-industries" aria-label="Splide partners carousel">
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
		<script>
	document.addEventListener('DOMContentLoaded', () => {
		new Splide('.splide.splide-industries', {
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
	<?php endif; ?>