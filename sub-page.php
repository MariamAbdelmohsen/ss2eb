
<?php
/**
 * The template for displaying all pages
 *
 * Template name: sub page
**/
?>
<?php get_header(); ?>
<div id="banner2">
		</div>

	<main role="main" class="wrapper">
	<div class="how2">
	<?php echo get_post_field('post_content', 136);?>
	</div>
		
		<!-- section -->
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

        <aside>
		<?php dynamic_sidebar('sidebar-signupform');?>
        </aside>
        </main>
<div class="textonimg">
<h3>Text On Top Of The Image</h3>
</div>
<div class="wrapper">
	
		<?php dynamic_sidebar('sidebar-sub');?>
        <section id="container-3">
		<?php dynamic_sidebar('sidebar-sub2');?>

<div class="subSteps">
<?php dynamic_sidebar('sidebar-substeps');?>
        </div>

        </section>
        </div>
<?php get_footer(); ?>
