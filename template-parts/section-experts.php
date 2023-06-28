<?php $experts_logo = get_field('experts_logo'); ?>
<?php $size = 'full'; ?>
<section class="experts bg-white">
    <div class="container">
        <div class="row d-flex flex-column gap-5">
            <?php if ($experts_logo): ?>
                <div class="col-12 d-flex justify-content-center px-5">
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
            } ?>
        </div>
        <?php if (have_rows('experts_cards')): ?>
            <div class="row d-flex flex-wrap justify-content-center">
                <?php while (have_rows('experts_cards')):
                    the_row(); ?>
                    <div class="col-12 col-lg-6 col-xl-4 d-flex flex-column gap-3 py-4 px-4 expert-card">
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

                        <?php
                        $text = get_sub_field('experts_cards_card_excerpt');
                        $words = str_word_count($text, 1, 'ąćęłńóśźżĄĆĘŁŃÓŚŻŹ,.-+');

                        $firstPart = array_splice($words, 0, 10);
                        $secondPart = $words;

                        ?>
                        <div>
                            <p class="m-0">
                                <?php
                                foreach ($firstPart as $word) {
                                    echo $word . ' ';
                                }
                                ?>
                            </p>
                            <p class="expert-excerpt collapse m-0" id="expertsCollapse<?= get_row_index(); ?>">
                                <?php
                                foreach ($secondPart as $word) {
                                    echo $word . ' ';
                                }
                                ?>
                            </p>
                        </div>
                        <span class="expert-excerpt-btn collapsed" data-bs-toggle="collapse"
                            href="#expertsCollapse<?= get_row_index(); ?>" role="button" aria-expanded="false"
                            aria-controls="expertsCollapse<?= get_row_index(); ?>">
                            <span class="show secondary-hover">
                                <?= __('Zwiń', 'swiftbridge') ?>
                            </span>
                            <span class="hide secondary-hover">
                                <?= __('Czytaj więcej', 'swiftbridge') ?>
                            </span>
                        </span>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>