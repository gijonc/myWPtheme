<?php get_header(); ?>
	<div class="container">
		<div class="content">
    

			<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class( 'single single-post' ); ?>>

					<?php 
						$post_format = get_post_format();
					?>
					
					<div class="post-header">
						<h2>
							<?php the_title(); ?>
						</h2>

					</div>

					<div class="divider"></div>

					<div class="post-inner">
						<div class="post-content">
							<?php the_content(); ?>
						</div><!-- .post-content -->
						
					</div><!-- .post-inner -->
					
				</div><!-- .post -->
				
		</div><!-- .content -->
			
		<?php 
			endwhile; 
		else: ?>

			<p><?php _e( "We couldn't find any posts that matched your query. Please try again.", "hitchcock" ); ?></p>
	
			<?php endif; ?>    
		</div>
	</div>

<?php get_footer(); ?>
		
