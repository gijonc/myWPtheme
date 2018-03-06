	
		<?php 
			$asset_dir_url = get_stylesheet_directory_uri();
		?>

<!--       <div class="row">
        <div class="col s12 m12">
          <div class="card">
            <div class="card-image">
              <img src="<?php echo $asset_dir_url . '/assets/img/project-bg.jpg' ?>">
              <h1 class="card-title">Projects</h1>
            </div>
          </div>
        </div>
      </div> -->
  	<div class="bg-container">
		<img src="<?php echo $asset_dir_url . '/assets/img/project-bg2.jpg' ?>"  alt="bg">
		<div class="bg-title">
			<i class="medium material-icons">code</i>
			Projects
		</div>
	</div>
<div class="container">

	<?php if ( have_posts() ) : ?>
		<?php
			$page_object = get_queried_object();
			$cat_name = "projects";
			$project_query_args = array(
				'category_name' => $cat_name
			);
			$project_posts_query = new WP_Query( $project_query_args );
		?>

		<?php while ( $project_posts_query->have_posts() ) : $project_posts_query->the_post(); ?>
			<div class="row">
				<div class="col s12 m12">
					<div class="card hoverable">
						<a class="post-link black-text" id="<?php the_id(); ?>" rel="<?php the_permalink(); ?>" href="<?php the_permalink(); ?>">
							<div class="card-content">
								<span class="card-title blue-text">
									<?php the_title(); ?>
								</span>
								
								<?php 
									the_excerpt(); 
								?>

								
							</div>
						</a>
						<div class="divider"></div>
						<div class="project-tags">
							<?php
								$posttags = get_the_tags();
								if ($posttags) {
									foreach($posttags as $tag) {
							?>
								<div class="chip">
									<?php echo $tag->name . ' '; ?>
								</div>
							<?php
									}
								}
							?>
						</div>
						

					</div>
				</div>
			</div>
		<?php endwhile; ?>

		<div class="center">
			<p>	
				<?php 
					$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
					$total_post_count = wp_count_posts();
					$published_post_count = $total_post_count->publish;
					$total_pages = ceil( $published_post_count / $posts_per_page );
					printf( __( 'Page %s of %s'), $paged, $wp_query->max_num_pages ); 
				?>
			</p>
		</div>

	<?php endif; ?>
</div>
