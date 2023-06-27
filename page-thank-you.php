<?php
/**
 * Template Name: Thank-You-Page
 * Description: Page template
 * @author Wojciech Sowiński <wojciech.sowinski@innhouse.pl>
 */
get_header();
?>

<section class="section-thank-you" id="section-thank-you">
    <div class="container">
        <div class="row">
            <div class="col-12 col-6 d-flex flex-column justify-content-center align-items-center gap-4">
                <h1 class="text-center" style="font-size:32px;">
                    <?php the_field('than_you_page'); ?>
                </h1>
                <div>
                    <span style="font-size:55px;" class="text-primary <?php the_field('than_you_page_icon'); ?>"></span>
                </div>
                <div class="text-center">
                    <?php the_field('than_you_page_content'); ?>
                </div>
                <?php if (have_rows('than_you_page_btns')): ?>
                    <div class="d-flex flex-column gap-1">
                        <?php while (have_rows('than_you_page_btns')):
                            the_row(); ?>

                            <?php $than_you_page_btns_btn_url = get_sub_field('than_you_page_btns_btn_url'); ?>
                            <?php if ($than_you_page_btns_btn_url): ?>
                                <a class="btn btn-primary" href="<?php echo esc_url($than_you_page_btns_btn_url); ?>"><?php the_sub_field('than_you_page_btns_btn_text'); ?></a>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

</section>

<?php
get_footer();