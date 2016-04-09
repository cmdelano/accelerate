<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
* @package WordPress
 * @subpackage Accelerate_Theme_Child
 * @since Accelerate Theme
 */

get_header(); ?>


<section class="error-page">

	<div class="site-content">

		<section class="error-message">		
			<h1 class="page-title"><?php _e( 'Page non trouvée', 'accelerate' ); ?></h1>

			<h2 class="not-found-message">
				<a href="index.php?page_id=5">Désolé. Retour à l'accueil</a>
			</h2>

		</section><!-- .error-message -->
	</div><!-- .site-content -->
</section><!-- .404-page -->
		
<?php get_footer(); ?>