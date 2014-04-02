<?php get_header(); ?>
<article>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail();
		} ?>
		<?php get_template_part('meta','data'); ?>
		<?php the_content(); ?>
	<?php endwhile; else: ?>
		<h3>Nothing Found!</h3>
	<?php endif; ?>
</article><!-- end article -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>