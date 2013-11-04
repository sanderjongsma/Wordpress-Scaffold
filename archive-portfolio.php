<?php get_header(); ?>

	<div class="container page">

		<div class="row">
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
					<div class="col-md-6 col-lg-4">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail( 'full', array( 'class' => 'portfolio-thumb img-responsive' ) ); ?></a>
					</div>

			<?php endwhile; endif; ?>

		</div>
	</div>
	
<?php get_footer(); ?>