<section id="section-cooperation" class="section-cooperation px-5">
    <div class="container d-flex flex-column gap-4">
        <div class="row">
            <div class="col-8 mx-auto">
                <h2 class="text-center">
                    <?php the_field('cooperation_title'); ?>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-8 col-lg-6 mx-auto">
                <p class="text-center">
                    <?php textToBlend(get_field('cooperation_text')); ?>
                </p>
            </div>
        </div>
        <?php if (have_rows('cooperation_btns')): ?>
            <div class="row">
                <div class="col-12 col-lg-8 d-flex gap-3 justify-content-center mx-auto">
                    <?php while (have_rows('cooperation_btns')):
                        the_row(); ?>
                        <?php $cooperation_btns_btn_url = get_sub_field('cooperation_btns_btn_url'); ?>
                        <?php if ($cooperation_btns_btn_url): ?>
                            <a data-aos="zoom-in" data-aos-delay="2000" class="btn btn-primary" title="<?php the_sub_field('cooperation_btns_btn_text');  ?>"
                                alt="<?php the_sub_field('cooperation_btns_btn_text'); ?>"
                                href="<?php echo esc_url($cooperation_btns_btn_url); ?>"><?php the_sub_field('cooperation_btns_btn_text'); ?></a>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>