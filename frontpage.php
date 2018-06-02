
<?php
/**
 * The template for displaying all pages
 *
 * Template name: Front Page
**/
?>
<?php get_header(); ?>
	<div id="banner">
		</div>
		<blockquote class="quoteBanner">
		<?php dynamic_sidebar('quote');?>

			</blockquote>

	<main role="main"  class="wrapper frontPage">		
		
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>
			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php endif; ?>

	</main>

<?php get_footer(); ?>
