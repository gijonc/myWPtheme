<?php get_header(); ?>
	<div class="container">
		<div class="content">
            <?php $flickr_url = "https://www.flickr.com/photos/153925004@N07/"; ?>
    

			<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class( 'single single-post' ); ?>>

					<?php 
						$post_format = get_post_format();
					?>
					
					<div class="post-header">
						<h2>
							<?php the_title(); ?>
						</h2>
						<p class="grey-text lighten-1">
                            - source from Flickr
                            <a href="<?php echo $flickr_url ?>" class="fa fa-flickr"></a>
						</p>
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
		
