<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>
		
		<meta http-equiv="content-type" content="<?php bloginfo( 'html_type' ); ?>" charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
        
        <link rel="profile" href="http://gmpg.org/xfn/11">
		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<header>
			<!-- <a class="nav-btn"><i class="material-icons medium black-text">dehaze</i></a> -->
			<ul class="tabs side-nav fixed">
				<li>
					<div class="user-view">
						<div class="background">
							<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/profile-bg.jpg">
						</div>
						<a href="#!user">
							<img class="circle" src="images/yuna.jpg">
						</a>
						<a href="#!name">
							<span class="white-text name">John Doe</span>
						</a>
						<a href="#!email">
							<span class="white-text email">
								<?php 
									bloginfo('admin_email');
								?>
							</span>
						</a>
					</div>
				</li>
				<li >
					<a class="hoverable" href="<?php bloginfo('url')?>/category/projects/">
						<span class="green-text">
							<i class="material-icons">code</i>
							Projects
						</span>
					</a>
			
				</li>

				<li>
					<a class="hoverable" href="<?php bloginfo('url')?>/about">
						<span class="orange-text">
							<i class="material-icons">person</i>
							About me
						</span>
					</a>
				</li>
				<li>
					<a class="hoverable" href="<?php bloginfo('url')?>/my-gallery">
						<span class="blue-text">
							<i class="material-icons">photo_album</i>
							My Gallery
						</span>
					</a>
				</li>
			</ul>
		</header>
				
			
				

