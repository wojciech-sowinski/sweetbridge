<?php $experts_logo = get_field('experts_logo'); ?>
<?php $size = 'full'; ?>
<section class="experts bg-white">
    <div class="container">
        <div class="row d-flex flex-column gap-4">
            <?php if ($experts_logo): ?>
                <div class="col-12 d-flex justify-content-center px-5">
                    <?php echo wp_get_attachment_image($experts_logo, $size, false, ['class' => 'img-fluid']); ?>
                </div>
            <?php endif; ?>
            <?php
            if (!empty(get_field('experts_excerpt'))) {
                ?>
                <div class="col-12 col-md-10 col-xl-8 pb-4 mx-auto">
                    <p class="experts-exc text-center">
                        <?php 
                        
                        textToBlend(get_field('experts_excerpt')); 
                        
                        ?>
                    </p>
                </div>
                <?php
            } ?>
        </div>
        <?php if (have_rows('experts_cards')): ?>
            <div class="row d-flex flex-wrap justify-content-center">
                <?php 
                $expertsCardDelay = 0;
                ?>
                <?php while (have_rows('experts_cards')):
                    the_row(); ?>
                    <div
                    data-aos="flip-up" data-aos-duration="1000" data-aos-delay="<?= $expertsCardDelay+=500 ?>"
                        class="col-12 col-lg-6 col-xl-4 d-flex flex-column gap-3 py-4 px-4 expert-card align-items-center align-items-xl-start">
                        <div class="d-flex justify-content-center justify-content-lg-start expert-img">
                            <?php $experts_cards_card_img = get_sub_field('experts_cards_card_img'); ?>
                            <?php $size = 'full'; ?>
                            <?php if ($experts_cards_card_img): ?>
                                <?php echo wp_get_attachment_image($experts_cards_card_img, $size, false, ['class' => 'rounded-circle img-cover']); ?>
                            <?php endif; ?>
                        </div>
                        <p class="fw-bolder text-center text-lg-start">
                            <?php the_sub_field('experts_cards_card_name'); ?>
                        </p>
                        <div>
                            <p class="m-0 text-center text-xl-start">
                                <?php the_sub_field('experts_cards_card_excerpt_first_part'); ?>
                            </p>
                            <p class="expert-excerpt collapse m-0 text-center text-xl-start" id="expertsCollapse<?= get_row_index(); ?>">
                                <?php the_sub_field('experts_cards_card_excerpt_second_part'); ?>
                            </p>
                        </div>
                        <span class="expert-excerpt-btn collapsed" data-bs-toggle="collapse"
                            href="#expertsCollapse<?= get_row_index(); ?>" role="button" aria-expanded="false"
                            aria-controls="expertsCollapse<?= get_row_index(); ?>">
                            <span class="show-btn secondary-hover">
                                <?= __('Collapse', 'swiftbridge') ?>
                            </span>
                            <span class="hide-btn secondary-hover">
                                <?= __('Read more', 'swiftbridge') ?>
                            </span>
                        </span>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>

</section>

