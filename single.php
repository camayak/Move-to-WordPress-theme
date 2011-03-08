<?php get_header(); ?>

<div class="main">
	
	<div class="wrap">
		
		<?php if ( have_posts() ) : ?>
			
		<?php while ( have_posts() ) : the_post(); ?>
			
		<div class="post" id="post-<?php the_id(); ?>">
			
			<h2><?php the_title(); ?></h2>
			
			<div class="entry">
				<?php the_content(); ?>
			</div>
			
		</div>	
			
		<?php endwhile; endif; ?>
		
	</div><!-- END .wrap -->
	
</div><!-- END .main -->

<?php get_footer(); ?>