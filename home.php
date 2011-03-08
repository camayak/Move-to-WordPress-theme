<?php get_header(); ?>

<div class="main">
	
	<div class="wrap">
		
		<div class="content">
		
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
		
		<h2>Why you should seriously consider WordPress</h2>		
		
		<?php if ( $why_wordpress->have_posts() ) : ?>
		
		<?php while ( $why_wordpress->have_posts() ) : $why_wordpress->the_post(); ?>
			
			<div class="entry">
				<?php the_content(); ?>
			</div>
		
		<?php endwhile; else: ?>
			
			<div class="message info">There's no page with slug of 'why-wordpress' at the moment</div>
			
		<?php endif; ?>
			
		<?php
			// Load the text content for the "What you'll need to do to move to WordPress"
			$args = array(
				'post_type' => 'm2wp_step',
				'posts_per_page' => -1,
				'order' => 'ASC',
			);
			$steps = new WP_Query( $args );
		?>
		
		<h2>What you'll need to do to move to WordPress</h2>		
		
		<?php if ( $steps->have_posts() ) : ?>
		
		<?php while ( $steps->have_posts() ) : $steps->the_post(); ?>
			
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			
			<div class="entry">
				<?php the_content(); ?>
			</div>
		
		<?php endwhile; else: ?>
			
			<div class="message info">There's no posts in the custom post type 'm2wp_step'</div>
			
		<?php endif; ?>
		
		<?php
			// Load the text content for the "Frequently Asked Questions"
			$args = array(
				'post_type' => 'm2wp_faq',
				'posts_per_page' => -1,
				'order' => 'ASC',
			);
			$faqs = new WP_Query( $args );
		?>
		
		<h2>Frequently Asked Questions (<?php echo count($faqs); ?>)</h2>		
		
		<?php if ( $faqs->have_posts() ) : ?>
		
		<?php while ( $faqs->have_posts() ) : $faqs->the_post(); ?>
			
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			
			<div class="entry">
				<?php the_excerpt(); ?> <a href="<?php the_permalink(); ?>">Read the full answer &rarr;</a>
			</div>
		
		<?php endwhile; else: ?>
			
			<div class="message info">There's no posts in the custom post type 'm2wp_faq'</div>
			
		<?php endif; ?>
		
		</div><!-- END .content -->
		
	</div><!-- END .wrap -->
	
</div><!-- END .main -->

<?php get_footer(); ?>