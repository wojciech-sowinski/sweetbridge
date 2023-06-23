<?php
/**
 * Template Name: About-Us-Page
 * Description: Page template
 * @author Wojciech Sowiński <wojciech.sowinski@innhouse.pl>
 */
get_header();
get_template_part( 'template-parts/section', 'simple-banner');
get_template_part('template-parts/section', 'about-us'); 
get_template_part('template-parts/section', 'partners-cards'); 
get_template_part('template-parts/section', 'bg-cards'); 
get_template_part('template-parts/section', 'cooperation'); 
get_footer();