<?php get_header(); ?>

	<div class="container">
		
		<!-- #content -->
		<div class="content">
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
				<h2><?php the_title(); ?></h2>
				
				<?php the_content(); ?>
				
			<?php endwhile; endif; ?>
			
		</div>
		<!-- /content -->
		
	</div>
	
<?php get_footer(); ?>