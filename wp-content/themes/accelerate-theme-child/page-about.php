<?php
/**
 * 
 * This page will override the generic page.php 
 * for the About Page
 * 
 * It pulls in several fields defined in the Advanced Custom Fields Plug-in
 *
 */

get_header(); ?>

<?php //variables
    // $about = get_field( 'about_accelerate_text' );
	$our_services = get_field ( 'our_services_blurb'); 
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
	$image4 = get_field ( 'service_4_image' ); 
	$size = "full";
?>

<section class="home-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="hero-about-text">
				<p><?php the_content(); ?></p>
			</div>

		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->

<div class="site-content"> 

			<?php while ( have_posts() ) : the_post(); ?>

                <section class="services-blurb">	
					<h1><?php the_title(); ?></h1> 
					<p><?php echo $our_services; ?></p>
				</section>
		
				<article>
					<figure class="service-image-left">
						<?php echo wp_get_attachment_image( $image1, $size ); ?>
					</figure>
					<div class="text-right">
					<h2><?php echo $service1; ?></h2>
					<p><?php echo $description1; ?></p>
					</div>
				</article>

				<div class="clearfix"></div>

				<article>
					<div class="text-left">
					<h2><?php echo $service2; ?></h2>
					<p><?php echo $description2; ?></p>
					</div>
					<figure class="service-image-right">
						<?php echo wp_get_attachment_image( $image2, $size ); ?>
					</figure>
				</article>

				<div class="clearfix"> </div>

				<article>
					<figure class="service-image-left">
						<?php echo wp_get_attachment_image( $image3, $size ); ?>
					</figure>
					<div class="text-right">
					<h2><?php echo $service3; ?></h2>
					<p><?php echo $description3; ?></p>
					</div>
				</article>

				<div class="clearfix"></div>

				<article>
					<div class="text-left">
						<h2><?php echo $service4; ?></h2>
						<p><?php echo $description4; ?></p>
					</div>
					<figure class="service-image-right">
						<?php echo wp_get_attachment_image( $image4, $size ); ?>
					</figure>
				</article>

				<div class="clearfix"></div>

				<section class="work-with-us">
					<h3>Interested in working with us?</h3>
					<a class="work-button" href="<?php echo home_url(); ?>/contact_form/">Contact Us</a>
				</section>

			<?php endwhile; // end of the loop. ?>

</div>


<?php get_footer(); ?>