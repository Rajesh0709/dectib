<?php get_header(); ?>  
		<div class="content"><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
			<div class="post-main">
		
				<div class="post">
					<?php the_content(); ?><?php comments_template(); ?>
				</div>
			</div>
			<?php endwhile; ?>			
			<?php endif; ?></article>
		</div>

</div>
</div>
<?php get_footer(); ?>