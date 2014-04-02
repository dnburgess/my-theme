<?php get_header(); ?>
<article>
	<div itemscope itemtype ="http://schema.org/CreativeWork">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h1 itemprop="name"><?php the_title(); ?></h1>
			<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			} ?>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</div><!-- end CreativeWork -->
</article><!-- end article -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>