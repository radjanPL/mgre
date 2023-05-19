<?php /* Template name: Home */
/**
 * The home custom page of the theme
 *
 * @package mgre
 */
get_header();
?>

<section class="site-banner">
    <?php 
    if ( function_exists( 'the_custom_logo' ) ) {
        echo '<div class="theme-logo">';
        the_custom_logo();
        echo '</div>';
    }
    ?>
    <div class="container container-1900">
        <div class="site-banner-txt">
            <h1><?php the_field('banner_text'); ?></h1>
        </div>
    </div>
</section>
<?php if( have_rows('layout') ): ?>
    <?php while( have_rows('layout') ): the_row(); ?>
        <?php 
        if (get_row_layout() == 'text_+_image') {
            get_template_part('template-parts/sections/section', 'text-image');
        }
        elseif (get_row_layout() == 'text_items') {
            get_template_part('template-parts/sections/section', 'text-items');
        }
        elseif (get_row_layout() == 'blockquote_items') {
            get_template_part('template-parts/sections/section', 'blockquotes');
        }
        elseif (get_row_layout() == 'cta') {
            get_template_part('template-parts/sections/section', 'cta');
        }
        elseif (get_row_layout() == 'contact') {
            get_template_part('template-parts/sections/section', 'contact');
        }
        elseif (get_row_layout() == 'four_items') {
            get_template_part('template-parts/sections/section', 'four-items');
        }
        ?>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>