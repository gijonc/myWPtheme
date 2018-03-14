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

		<?php 
			$base_url = get_bloginfo('url');
		    $asset_dir_url = get_stylesheet_directory_uri();

			$user_info = get_userdata(1);
		    $name = $user_info->nickname . " " . $user_info->last_name;
		    $email_addr = get_bloginfo('admin_email');
		    $linkedin_url = "https://www.linkedin.com/in/jiongcheng/";
		    $fb_url = "https://www.facebook.com/rogerljc";
		    $github_url = "https://github.com/gijoncheng";
		?>


			<ul class="tabs side-nav fixed">
				<li>
					<div class="pf-card">
					  <img src="<?php echo $asset_dir_url . '/assets/img/prof-1.jpg' ?>" alt="roger" class="avatar">
					  <h4><?php echo $name ?></h4>
					  <p class="title">Software-Developer</p>
					</div>
				</li>

				<li><div class="divider"></div></li>

				<li>
					<div>
						<a href="<?php echo $fb_url ?>" class="fa fa-facebook"></a>
						<a href="<?php echo $linkedin_url ?>" class="fa fa-linkedin"></a>
						<a href="<?php echo $github_url ?>" class="fa fa-github"></a>
					</div>
				</li>				

				<li><div class="divider"></div></li>

				<li>
					<a class="hoverable" style="color:#ffb74d;" href="<?php echo $base_url ?>/about">
						<i class="material-icons" style="color:#ffb74d;">person</i>
						About
					</a>
				</li>

				<li>
					<a class="hoverable" style="color:#ffb74d;" href="<?php echo $base_url ?>/category/projects/">
						<i class="material-icons" style="color:#ffb74d;">code</i>
						Projects
					</a>
				</li>

				<li>
					<a class="hoverable" style="color:#ffb74d;" href="<?php echo $base_url ?>/gallery">
						<i class="material-icons" style="color:#ffb74d;">photo_album</i>
						Gallery
					</a>
				</li>

				<li>
					<a class="hoverable" style="color: #ffb74d;" href="<?php echo $base_url ?>/resume">
						<i class="material-icons" style="color: #ffb74d;">attach_file</i>
						Resume
					</a>
				</li>

				<li>
					<a class="hoverable" style="color: #ffb74d;" href="<?php echo $base_url ?>/contact">
						<i class="material-icons" style="color: #ffb74d;">email</i>
						Contact
					</a>
				</li>
			</ul>
		</header>
				
			
				

