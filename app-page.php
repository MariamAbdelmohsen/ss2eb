
<?php
/**
 * The template for displaying all pages
 *
 * Template name: app page
**/
?>
<?php get_header(); ?>
<div id="banner2">
		</div>

	<main role="main" class="wrapper">
		<!-- section -->
		<div class="how2">
		<?php echo get_post_field('post_content', 155);?>
		</div>
		<section>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->
		<?php endwhile; ?>
		<?php endif; ?>

		</section>
		<!-- /section -->
		<aside class="app">
		<?php dynamic_sidebar('sidebar-apps');?>
		</aside>
		</main>
<?php get_footer(); ?>
