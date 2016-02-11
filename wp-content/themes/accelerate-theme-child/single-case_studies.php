<?php
/**
 * The template for displaying all case studies
 *
 *
 * @package WordPress
 * @subpackage Accelerate_Theme
 * @since Accelerate Theme
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>				
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>