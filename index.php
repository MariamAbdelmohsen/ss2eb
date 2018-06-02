<?php get_header(); ?>

	
	<div id="banner2">
		</div>
		<main role="main" class="wrapper">
		<!-- section -->
		<section>

			<!-- <h1><?php// _e( 'Latest Posts', 'html5blank' ); ?></h1> -->

			<?php get_template_part('loop'); ?>
			<?php the_post_thumbnail() ;?>

			<?php get_template_part('pagination'); ?>
			</section>
		
	
<aside>
<?php dynamic_sidebar('sidebar-followupblog');?>
<?php dynamic_sidebar('sidebar-blog'); ?>
		</aside>
		
		<!-- /section -->
		</main>
<?php get_footer(); ?>
