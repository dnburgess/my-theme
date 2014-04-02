<?php get_header(); ?>
<article>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail();
		} ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
</article><!-- end article -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>