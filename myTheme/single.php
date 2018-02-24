<?php get_header(); ?>
	<div class="container">
		<div class="content">
			<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class( 'single single-post' ); ?>>
				
				<a class="back_btn" href="/mySite/category/projects">
					back
				</a>

					
					<?php 
						$post_format = get_post_format();
					?>
					
					<div class="post-header">
						<h2>
							<?php the_title(); ?>
						</h2>
						<p class="grey-text lighten-1">
							Last update: <?php the_time( get_option( 'date_format' ) ); ?>
						</p>
					</div>

					<div class="divider"></div>

					<div class="post-inner">
						<div class="post-content">
							<?php the_content(); ?>
						</div><!-- .post-content -->
						
						<div class="post-meta">
					
							<?php if ( has_category() ) : ?>
								<p class="categories">
									<?php the_category( ', ' ); ?>
								</p>
							<?php endif; ?>
							
							<?php if ( has_tag() ) : ?>
								<p class="tags">
									<?php the_tags( '', ' ' ); ?>
								</p>
							<?php endif; ?>
							
							<?php edit_post_link( 'Edit Post', '<p class="post-edit">', '</p>' ); ?>
		
						</div><!-- .post-meta -->
					
					</div><!-- .post-inner -->
					
					<div class="divider"></div>

					<?php comments_template( '', true ); ?>
				
				</div><!-- .post-container -->
				
			</div><!-- .post -->
				
			
			<?php 
			endwhile; 
			else: ?>

				<p><?php _e( "We couldn't find any posts that matched your query. Please try again.", "hitchcock" ); ?></p>
	
			<?php endif; ?>    
		</div>
	</div>

<?php get_footer(); ?>