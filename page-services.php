<?php
/**
 * Template Name: Services-Page
 * Description: Page template
 * @author Wojciech Sowiński <wojciech.sowinski@innhouse.pl>
 */
get_header();
get_template_part( 'template-parts/section', 'simple-banner');
get_template_part( 'template-parts/section', 'our-services');


get_template_part('template-parts/section', 'industries'); 
get_template_part('template-parts/section', 'partners-carousel'); 
get_template_part('template-parts/section', 'cooperation'); 
get_footer();