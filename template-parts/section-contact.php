<section class="section-contact" id="section-contact">
    <div class="container">
        <div class="row">
            <?php if (have_rows('contact_cards')): ?>
                <div class="col-12 col-lg-6">
                    <h2 class="py-4">
                        <?= __('Kontakt', 'swiftbridge') ?>
                    </h2>
                    <div class="contact-cards d-flex flex-wrap pb-1 pb-lg-5">
                        <?php while (have_rows('contact_cards')):
                            the_row(); ?>
                            <div class="contact-card col-12 col-md-6 pe-4 pt-4 pt-md-4 pb-3 d-flex flex-column gap-1">
                                <div class=" py-3">
                                    <span
                                        class="<?php the_sub_field('contact_cards_card_icon') ?> card-icon-mini text-white"></span>
                                </div>
                                <h3>
                                    <?php the_sub_field('contact_cards_card_title'); ?>
                                </h3>
                                <div>
                                    <?php if (have_rows('contact_cards_card_lines')): ?>
                                        <?php while (have_rows('contact_cards_card_lines')):
                                            the_row(); ?>
                                            <div>
                                                <?php
                                                $type = get_sub_field('contact_cards_card_lines_line_type');
                                                $icon = the_sub_field('contact_cards_card_lines_line_icon');
                                                switch ($type) {
                                                    case '0':
                                                        ?>
                                                        <div>
                                                            <?php
                                                            if (!empty($icon)) {
                                                                ?>
                                                                <span class="<?= $icon ?>"></span>
                                                                <?php
                                                            }
                                                            ;
                                                            ?>
                                                            <span>
                                                                <?php the_sub_field('contact_cards_card_lines_line_text'); ?>
                                                            </span>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case '1':
                                                        ?>
                                                        <div>
                                                            <?php
                                                            if (!empty($icon)) {
                                                                ?>
                                                                <span class="<?= $icon ?>"></span>
                                                                <?php
                                                            }
                                                            ;
                                                            ?>
                                                            <span class="grayed">
                                                                <?php the_sub_field('contact_cards_card_lines_line_text'); ?>
                                                            </span>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case '2':
                                                        ?>
                                                        <a href="mailto:<?php the_sub_field('contact_cards_card_lines_line_text'); ?>">
                                                            <div>
                                                                <?php
                                                                if (!empty($icon)) {
                                                                    ?>
                                                                    <span class="<?= $icon ?>"></span>
                                                                    <?php
                                                                }
                                                                ;
                                                                ?>
                                                                <span>
                                                                    <?php the_sub_field('contact_cards_card_lines_line_text'); ?>
                                                                </span>
                                                            </div>
                                                        </a>
                                                        <?php
                                                        break;
                                                    case '3':
                                                        ?>
                                                        <a href="tel:<?php the_sub_field('contact_cards_card_lines_line_text'); ?>">
                                                            <div>
                                                                <?php
                                                                if (!empty($icon)) {
                                                                    ?>
                                                                    <span class="<?= $icon ?>"></span>
                                                                    <?php
                                                                }
                                                                ;
                                                                ?>
                                                                <span>
                                                                    <?php the_sub_field('contact_cards_card_lines_line_text'); ?>
                                                                </span>
                                                            </div>
                                                        </a>
                                                        <?php
                                                        break;
                                                }
                                                ?>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="col-12 col-lg-6 px-1 ps-lg-5 pe-lg-2">
                <h2 class="py-4">
                    <?= __('Wypełnij formularz', 'swiftbridge') ?>
                </h2>
                <div class="contact-form">
                    <?= do_shortcode('[contact-form-7 id="260" title="contact-form"]') ?>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener('wpcf7mailsent', function (event) {
        location =  '<?= get_field('contact_cards_redirect_url') ?>';
    }, false);
</script>