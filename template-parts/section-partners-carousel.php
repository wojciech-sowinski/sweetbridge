<?php if (have_rows('partners_carousel_btns')): ?>
    <section id="section-partners-carousel" class="partners-carousel container-fluid py-5 bg-white">
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
<?php endif ?>