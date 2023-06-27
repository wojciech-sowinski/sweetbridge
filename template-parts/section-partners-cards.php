<?php if (have_rows('partners_cards')): ?>
    <section id="section-partners" class="bg-white">
        <div class="partners container pb-3 pb-lg-5 ">
            <div class="row pb-4">
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
    </section>
    <script>
        document.addEventListener('DOMContentLoaded',()=>{
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
        })
    </script>
<?php endif; ?>