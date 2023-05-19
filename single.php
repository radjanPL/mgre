<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mgre
 */

get_header();
?>
	<section class="site-banner site-banner-mini">
		<?php 
		if ( function_exists( 'the_custom_logo' ) ) {
			echo '<div class="theme-logo">';
			the_custom_logo();
			echo '</div>';
		}
		?>
	</section>
	<main id="primary" class="site-main">
		<div class="container">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

				the_post_navigation(
					array(
						'prev_text' => '<button class="btn"><span class="nav-subtitle">' . esc_html__( 'Previous:', 'mgre' ) . '</span> <span class="nav-title">%title</span></button>',
						'next_text' => '<button class="btn"><span class="nav-subtitle">' . esc_html__( 'Next:', 'mgre' ) . '</span> <span class="nav-title">%title</span></button>',
					)
				);

				// If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;

			endwhile; // End of the loop.
			?>
		</div>
	</main><!-- #main -->

<?php
get_footer();
