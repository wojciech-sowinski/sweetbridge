<?php if (have_rows('partners_carousel_btns')): ?>
    <section id="section-partners-carousel" class="partners-carousel container-fluid bg-white pb-5" data-aos="fade-up" data-aos-delay="300">
        <div class="container d-flex flex-column gap-4">
            <div class="row">
                <div class="col-12">
                    <p class="fw-bold">
                        <?php the_field('partners_carousel_title'); ?>
                    </p>
                </div>
            </div>
            <div class="row">
                <section class="splide partners-carousel-splide" aria-label="Splide partners carousel">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php while (have_rows('partners_carousel_btns')):
                                the_row(); ?>
                                <li class="splide__slide">
                                    <span class="btn partner-button">
                                        <?php the_sub_field('partners_carousel_btns_btn_text'); ?>
                                    </span>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <script>
	document.addEventListener('DOMContentLoaded', () => {
		new Splide('.splide.partners-carousel-splide', {
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
<?php endif ?>