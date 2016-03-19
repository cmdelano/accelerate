 <?php
/**
 * The template for displaying the archive of the case-studies
 *
 *
 * @package WordPress
 * @subpackage Accelerate_Theme
 * @since Accelerate Theme 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
		
			<?php while ( have_posts() ) : the_post(); 

				$size = "full";
				$services = get_field('services');
				$client = get_field('client');
				$site = get_field('site');
				$image_1 = get_field('image_1'); ?>

			<div class="clearfix">

			<aside class="case-study-sidebar">
				<h2><?php the_title(); ?></h2>
				<h5><?php echo $services; ?></h5>
				<h3><?php echo $client; ?></h3>
					<p><?php the_excerpt(); ?></p>
				<h4><a href="<?php echo $site; ?>">Project Site</a></h4>
			</aside>	

			<div class="case-study-images-archive">
				<?php if ($image_1) { ?>
					<?php echo wp_get_attachment_image( $image_1, $size ); ?>
				<?php } ?>
			</div><!-- .case-study-images-archives -->

			</div><!-- .clearfix -->

			<?php endwhile; // end of the loop. ?>

		

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>