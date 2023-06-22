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