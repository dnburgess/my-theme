<div class="meta">
	<time datetime="<?php the_time('F jS, Y') ?>">
		<span itemprop="dateCreated dateModified" class="date">
			<?php the_time('F jS, Y') ?>
		</span>
	</time><!-- end time --> | 
	<span itemprop="author" itemscope itemtype="http://schema.org/Person">
		<span itemprop="name">
			<?php the_author_posts_link() ?>
		</span><!-- end name -->
	</span><!-- end author -->
</div><!-- end .meta -->