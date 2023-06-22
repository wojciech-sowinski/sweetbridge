<?php $experts_logo = get_field('experts_logo'); ?>
<?php $size = 'full'; ?>
<section class="experts bg-white">
    <div class="container">
        <div class="row">
            <?php if ($experts_logo): ?>
                <div class="col-12 d-flex justify-content-center p-5">
                    <?php echo wp_get_attachment_image($experts_logo, $size, false, ['class' => 'img-fluid']); ?>
                </div>
            <?php endif; ?>
            <?php
            if (!empty(get_field('experts_excerpt'))) {
                ?>
                <div class="col-12 col-md-10 col-xl-8 pb-5 mx-auto">
                    <p class="experts-exc text-center">
                        <?php the_field('experts_excerpt'); ?>
                    </p>
                </div>
                <?php
            }?>
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