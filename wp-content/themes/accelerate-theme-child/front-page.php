<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>




<section class="home-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
				<a class="button" href="<?php echo home_url(); ?>/case-studies">View Our Work</a>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->


<section class="featured-work">
	<h4>Featured Work</h4>	
	<div class="site-content">
		<section class="homepage-featured-work">
			<?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
				<?php while ( have_posts() ) : the_post(); 
					$image_1 = get_field("image_1");
					$size = "medium";?>
					<li>
						<figure>
						<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image($image_1, $size); ?></a>
						</figure>
						<a href="<?php the_permalink(); ?>"><h3><?php  the_title(); ?></h3></a>
 					</li>
				<?php endwhile; // end of the loop. ?>
			<?php wp_reset_query(); // resets the altered query back to the original ?>
		</section><!-- .homepage-featured-work -->
	</div><!-- .site-content -->
</section><!-- .featured-work -->

<!-- this is the aread that I so confused about! -->

<section class="services-images"><!-- should this be moved inside "site-content"? -->
	<div class="site-content">
		<h4>Our Services</h4>
			<?php query_posts('post_type=page'); ?>
					<?php while ( have_posts() ) : the_post();


					$image1 = get_field ( 'service_1_image' );
   					$image2 = get_field ( 'service_2_image' );
					$image3 = get_field ( 'service_3_image' );
					$image4 = get_field ( 'service_4_image' );
					$services1 = get_field ( 'service_1_title');
					$services2 = get_field ( 'service_2_title');
					$services3 = get_field ( 'service_3_title');
					$services4 = get_field ( 'service_4_title');
					$size = "full"; ?>
					
					<figure>
						<?php echo wp_get_attachment_image( $image1, $size ); ?>
						<?php echo wp_get_attachment_image( $image2, $size ); ?>
						<?php echo wp_get_attachment_image( $image3, $size ); ?>
						<?php echo wp_get_attachment_image( $image4, $size ); ?>
					</figure>

					<ul class="services-title">
						<li><?php echo $services1; ?></li>
						<li><?php echo $services2; ?></li>
						<li><?php echo $services3; ?></li>
						<li><?php echo $services4; ?></li>
					</ul>		

				<?php endwhile; // end of the loop. ?>
			<?php wp_reset_query(); ?>


	</div>
</section>


<section class="recent-posts">
	<div class="site-content">
		<div class="blog-post">
			<h4>From the Blog</h4>

			<?php query_posts('posts_per_page=1'); ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>" class="read-more-link">Read More<span>&rsaquo;</span></a>
			<?php endwhile; // end of the loop. ?>

			<?php wp_reset_query(); // resets the altered query back to the original ?>
		</div>
	</div>
</section>




<?php get_footer(); ?>