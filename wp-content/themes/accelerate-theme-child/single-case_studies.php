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
			
			<?php while ( have_posts() ) : the_post();
	
			$size = "full";
			$services = get_field('services');
			$client = get_field('client');
			$site = get_field('site');
			$image_1 = get_field('image_1');
			$image_2 = get_field('image_2');
			$image_3 = get_field('image_3'); ?>

		<div class="clearfix">

		<aside class="case-study-sidebar">
			<h2><?php the_title(); ?></h2>
			<h5><?php echo $services; ?></h5>
			<h3><?php echo $client; ?></h3>
				<p><?php the_content(); ?></p>
			<h4><a href="<?php echo $site; ?>">Project Site</a></h4>
		</aside>

		<div class="case-study-images-archive">
				<?php if ($image_1) { ?>
					<?php echo wp_get_attachment_image( $image_1, $size ); ?>
				<?php } ?>

				<?php if ($image_2) { ?>
					<?php echo wp_get_attachment_image( $image_2, $size ); ?>
				<?php } ?>

				<?php if ($image_3) { ?>
					<?php echo wp_get_attachment_image( $image_3, $size ); ?>
				<?php } ?>	
		</div>	

		</div><!-- .clearfix -->
			
		<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>