<?php
$args = array(
    'post_type' => 'news',
    'posts_per_page' => -1, // Wyświetl wszystkie posty typu "news"
);
$query = new WP_Query($args);
?>

<?php
if ($query->have_posts()) { ?>
    <section class="news-carousel" id="section-news-carousel" style="
    background-image: -webkit-gradient(linear,left top,left bottom,from(hsla(0,0%,84%,.2)),to(hsla(0,0%,100%,0))),-webkit-gradient(linear,left top,left bottom,from(#fff),to(#fff));
    ">
        <div class="container">
            <div class="row py-4">
                <div class="col-12">
                    <h2>
                        <?= __('Aktualności', 'swiftbridge'); ?>
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
                            <li class="splide__slide news-card">
                                <div class="news-card-img">
                                    <?php the_post_thumbnail('full', ['class' => 'img-cover']); ?>
                                </div>
                                <p class="post-date">
                                    <?php echo get_the_date(); ?>
                                </p>
                                <p class="title">
                                    <?php echo get_the_title(); ?>
                                </p>
                                <p class="excerpt">
                                    <?php echo get_the_excerpt(); ?>
                                </p>
                                <p class="author">
                                    <?php echo __('Autor', 'swiftbridge') . ': ' . get_the_author(); ?>
                                </p>
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