<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header(); 
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">


			<div class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentynineteen' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content page-text">
					<p>We could not find the page your are looking for. It probably got lost in the baking supplies.</p>
					<p>Maybe try a search?</p>
					<?php get_search_form(); ?>
				</div><!-- .page-content -->

				<div class="page-contet page-image">
					<img src="<?php echo  get_stylesheet_directory_uri() ?>/images/404-image.png" alt="Page not found">
				</div>
			</div><!-- .error-404 -->
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
