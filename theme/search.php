<?php get_header(); ?>
<article>
	<h1>Search Results</h1>
	<?php if ( have_posts() ) :  // results found?>
		<?php while ( have_posts() ) : the_post(); ?>
			<h3><a href="<?php the_permalink(); ?>"><?php the_title();  ?></a></h3>
			<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			} ?>
			<?php get_template_part('meta','data'); ?>
			<p><?php the_excerpt(); ?></p>
		<?php endwhile; ?>
	<?php else :  // no results?>
		<h1>No Results Found.</h1>
	<?php endif; ?>
</article><!-- end article -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>