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
<!-- <?php query_posts('post_type=services'); ?>
 --> 
			

			<?php while ( have_posts() ) : the_post(); 

				
				$size = "full";
				$about = get_field( 'about_accelerate_text' );
				$our_services = get_field ( 'about_services_blurb');
				$service1 = get_field( 'service_1_title' );
				$description1 = get_field ( 'service_1_description');
				$image1 = get_field ( 'service_1_image' );
				$service2 = get_field ( 'service_2_title' );
				$description2 = get_field ( 'service_2_description');
				$image2 = get_field ( 'service_2_image' );
				$service3 = get_field( 'service_3_title' );
				$description3 = get_field ( 'service_3_description');
				$image3 = get_field ( 'service_3_image' );
				$service4 = get_field ( 'service_4_title' );
				$description4 = get_field ( 'service_4_description');
				$image4 = get_field ( 'service_4_image' ); ?>

			<section class="services">

				<p><?php echo $about; ?></p>

				<h6><?php the_title(); ?></h6>	

				<p><?php echo $our_services; ?></p>


				<h2><?php echo $service1; ?></h2>
				<p><?php echo $description1; ?></p>
				<figure>
					<?php if ($image1) { ?>
					<?php echo wp_get_attachment_image( $image1, $size ); ?>
					<?php } ?>
				</figure>

				
				<h2><?php echo $service2; ?></h2>
				<p><?php echo $description2; ?></p>
				<figure>
					<?php if ($image2) { ?>
					<?php echo wp_get_attachment_image( $image2, $size ); ?>
					<?php } ?>
				</figure>

				
				<h2><?php echo $service3; ?></h2>
				<p><?php echo $description3; ?></p>
				<figure>
					<?php if ($image3) { ?>
					<?php echo wp_get_attachment_image( $image3, $size ); ?>
					<?php } ?>
				</figure>

				
				<h2><?php echo $service4; ?></h2>
				<p><?php echo $description4; ?></p>
				<figure>
					<?php if ($image4) { ?>
					<?php echo wp_get_attachment_image( $image4, $size ); ?>
					<?php } ?>
				</figure>
				
				
			</section>

			<?php endwhile; // end of the loop. ?>

<!-- 		<?php wp_reset_query(); // resets the altered query back to the original ?>
 -->			
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>