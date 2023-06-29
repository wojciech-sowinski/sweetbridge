<section class="section-our-services" id="section-our-services">
    <div class="container">
        <div class="row py-3" data-aos="fade-up">
            <div class="col-12" >
                <?php if (get_field( 'or_services_first' ) == 1): ?>
                    <h1>
                        <?php the_field('or_services_title'); ?>
                    </h1>
                <?php else: ?>
                    <h2>
                        <?php the_field('or_services_title'); ?>
                    </h2>
                <?php endif; ?>

            </div>
        </div>

        <?php
        if (!empty(get_field('or_services_excerpt'))) {
            ?>
            <div class="row py-3" data-aos="fade-up">
                <div class="col-12">
                    <p>
                        <?php the_field('or_services_excerpt'); ?>
                    </p>
                </div>
            </div>
            <?php
        }
        ?>
        <div class="row py-3 cards d-flex align-items-strech">
            <?php
            $args = array(
                'post_type' => 'service',
                'posts_per_page' => 6,
                'orderby' => 'date',
                'order' => 'DESC'
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) {
                $cardsDelayTime=0;
                while ($query->have_posts()) {
                    $query->the_post();
                    ?>
                    <a class="col-12 col-lg-4" title="<?= get_the_title(); ?>" href="<?= get_the_permalink(); ?>"  data-aos="fade-up" data-aos-delay="<?= $cardsDelayTime+=100;?>">
                        <div class=" d-flex flex-column gap-3 py-3 px-3 py-lg-4 px-lg-4 service-panel h-100">
                            <div class="d-flex justify-content-between">
                                <span  class=" <?php the_field('service_icon'); ?> card-icon icon"></span>
                                <span  class="icon-arrow-right"></span>
                            </div>
                            <p>
                                <?php the_field('service_excerpt'); ?>
                            </p>
                        </div>
                    </a>
                    <?php
                }
                wp_reset_postdata();
            } else {
                echo 'Brak postów do wyświetlenia.';
            }

            ?>
            
        </div>
        <?php
        if (!empty(get_field('or_services_motto'))) {
            ?>
            <div class="row py-3">
                <div class="col-12 d-flex flex-column primary-gradient align-items-center p-3 p-lg-5">
                    <p class="motto-sign col-2 p-0  px-md-3">
                        <img src="<?= get_theme_file_uri('/media/img/motto-sign.svg'); ?>" alt="motto sign"
                            title="motto sign">
                    </p>
                    <p class="motto text-white px-3 px-xl-3 col-10 text-center">
                        <?php textToBlur(get_field('or_services_motto')); ?>
                    </p>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</section>