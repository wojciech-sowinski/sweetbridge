<div class="d-flex flex-column gap-4 search-column py-5 px-4 mb-3">
    <div>
        <?php get_search_form(); ?>
    </div>
    <h3>
        <?= __('Categories', 'swiftbridge') ?>
    </h3>
    <div class="d-flex flex-column px-3 search-column-categories-container gap-3">
        <?php
        $categories = get_categories(
            array(
                'taxonomy' => 'category',
                'object_type' => 'news',
                'hide_empty' => true,
            )
        );
        foreach ($categories as $category) {
            $categoryCount = $category->count;
            ?>

            <a title="<?= $category->name ?>" class="d-block text-white  <?php
            if (single_cat_title('', false) == $category->name) {
                echo 'active';
            }
            ;
            ?>" href="<?= get_term_link($category); ?>">
                <?= $category->name; ?>
            </a>
            <?php
        }
        ?>
    </div>
    <h3>
        <?= __('Tags', 'swiftbridge') ?>
    </h3>
    <div class="tag-cloud-container d-flex gap-2 flex-wrap">
        <?php
        $postType = get_sub_field('tags_cloud_type') ? get_sub_field('tags_cloud_type') : 'post';
        $args = array(
            'format' => 'array',
            'order' => 'asc',
        );
        $tags = wp_tag_cloud($args);
        foreach ($tags as $tag) {
            echo $tag;
        }
        ?>
    </div>
</div>