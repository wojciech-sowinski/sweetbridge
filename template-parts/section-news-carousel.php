<?php
$args = array(
    'post_type' => 'news',
    'posts_per_page' => 9, 
);
$query = new WP_Query($args);
?>

<?php
if ($query->have_posts()) { ?>
    <section data-aos="fade-up" data-aos-delay="300" class="news-carousel" id="section-news-carousel">
        <div class="container">
            <div class="row py-4">
                <div class="col-12">
                    <h2 class="d-flex justify-content-between">
                        <span>
                            <?= __('News', 'swiftbridge'); ?>
                        </span>
                        <?php
                        $news_archive_link = get_post_type_archive_link('news');
                        if ($news_archive_link) {
                            echo '<a title="News" href="' . esc_url($news_archive_link) . '"><i class="icon-arrow-right"></i></a>';
                        }
                        ?>
                    </h2>
                </div>
            </div>
            <section class="splide" aria-label="Splide Basic Slider">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php
                        while ($query->have_posts()) {
                            $query->the_post();
                            ?>
                                <li class="splide__slide">
                                    <a class="news-card" title="<?php echo get_the_title(); ?>" href="<?php permalink_link(  ); ?>">
                                    <div class="news-card-img">
                                        <?php the_post_thumbnail('full', ['class' => 'img-cover']); ?>
                                    </div>
                                    <p class="post-date">
                                        <?php the_date(); ?>
                                    </p>
                                    <p class="title">
                                        <?php the_title(); ?>
                                    </p>
                                    <p class="excerpt">
                                        <?php the_excerpt(); ?>
                                    </p>
                                    <p class="author">
                                        <?php echo __('Autor', 'swiftbridge') . ': ' . get_the_author(); ?>
                                    </p>
                                </a>
                                </li>
                            <?php
                            wp_reset_postdata();
                        }
                        ?>
                    </ul>
                </div>
            </section>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            new Splide('#section-news-carousel .splide', {
                arrows: false,
                pagination: true,
                gap: 20,
                perPage: 3,
                breakpoints: {
                    992: {
                        perPage: 2,
                    },
                    576: {
                        perPage: 1,
                    },
                },
            }).mount();
        })
    </script>

    <?php
}
?>