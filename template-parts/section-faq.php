<section class="section-faq" id="section-faq">
    <div class="container">
        <div class="row">
            <?php if (have_rows('section_faq_questions')): ?>
                <div class="col-12 d-flex flex-column gap-5">
                    <h1>
                        <?php the_field('section_faq_title'); ?>
                    </h1>
                    <div class="accordion accordion-flush" id="faqAccordion">
                        <?php while (have_rows('section_faq_questions')):
                            the_row(); ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed faq-question-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse<?= get_row_index(); ?>" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        <?php the_sub_field('section_faq_questions_question'); ?>
                                    </button>
                                </h2>
                                <div id="flush-collapse<?= get_row_index(); ?>" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <?php the_sub_field('section_faq_questions_answear'); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>