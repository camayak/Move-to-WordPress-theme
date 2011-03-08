<?php get_header(); ?>

<div class="main">
	
	<div class="wrap">
		
		<?php
			// Load the text content for the homepage
			$args = array(
				'post_type' => 'page',
				'name' => 'home',
				'posts_per_page' => 1,
			);
			$home = new WP_Query( $args );
		?>
		
		<?php if ( $home->have_posts() ) : ?>
		
		<?php while ( $home->have_posts() ) : $home->the_post(); ?>
			
			<div class="entry">
				<?php the_content(); ?>
			</div>
		
		<?php endwhile; else: ?>
		
			<div class="message info">There's no page with slug of 'home' at the moment</div>
			
		<?php endif; ?>
		
		<?php
			// Load the text content for the "Why WordPress section"
			$args = array(
				'post_type' => 'page',
				'name' => 'why-wordpress',
				'posts_per_page' => 1,
			);
			$why_wordpress = new WP_Query( $args );
		?>
		
		<?php if ( $why_wordpress->have_posts() ) : ?>
		
		<?php while ( $why_wordpress->have_posts() ) : $why_wordpress->the_post(); ?>
			
			<h2><?php the_title(); ?></h2>
			
			<div class="entry">
				<?php the_content(); ?>
			</div>
		
		<?php endwhile; else: ?>
			
			<div class="message info">There's no page with slug of 'why-wordpress' at the moment</div>
			
		<?php endif; ?>
		
		<h2>What you'll need to do to move to WordPress</h2>
		
		<h2>Frequently Asked Questions</h2>
			
		<?php
			// Load the text content for the "Frequently Asked Questions"
			$args = array(
				'post_type' => 'm2wp_faq',
				'posts_per_page' => -1,
			);
			$faqs = new WP_Query( $args );
		?>
		
		<?php if ( $faqs->have_posts() ) : ?>
		
		<?php while ( $faqs->have_posts() ) : $faqs->the_post(); ?>
			
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			
			<div class="entry">
				<?php the_content(); ?>
			</div>
		
		<?php endwhile; else: ?>
			
			<div class="message info">There's no posts in the custom post type 'm2wp_faq'</div>
			
		<?php endif; ?>
		
	</div>
	
</div><!-- END .main -->

<?php get_footer(); ?>