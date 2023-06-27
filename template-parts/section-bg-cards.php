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
								<span style="font-size:40px;"
									class="text-primary <?php the_sub_field('cards_bg_cards_card_img'); ?>"></span>

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
								<span style="font-size:40px;"
									class="text-primary <?php the_sub_field('cards_bg_cards_card_img'); ?>"></span>
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