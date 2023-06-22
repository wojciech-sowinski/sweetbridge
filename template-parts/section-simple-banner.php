<?php $simple_banner_img = get_field('simple_banner_img'); ?>
<?php if ($simple_banner_img): ?>
    <section class="simple-banner" id="section-simple-banner" style="
    background-image:url('<?php echo esc_url($simple_banner_img['url']); ?>')">
    </section>
<?php endif; ?>