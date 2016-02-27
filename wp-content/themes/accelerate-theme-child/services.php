<?php
/**
 * The template for displaying Services and About Us
 *
 *
 * @package WordPress
 * @subpackage Accelerate_Theme
 * @since Accelerate Theme
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			
		<?php query_posts('posts_per_page=4&post_type=services'); ?>

			<?php while ( have_posts() ) : the_post(); 



				$size = "full";
				$icon = get_field('service_type_icon');
			?>

			<section class="services">
				<h6>IS THIS WORKING? NO, I DON'T THINK SO!!! WHY NOT</h3>
				<h2><?php the_title(); ?></h2>
				<p><?php the_content(); ?></p>

				<figure>
				<?php if ($icon) { ?>
					<?php echo wp_get_attachment_image( $icon, $size ); ?>
				<?php } ?>
				</figure>
				
			</section>
			<?php endwhile; // end of the loop. ?>

		<?php wp_reset_query(); // resets the altered query back to the original ?>
			
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>