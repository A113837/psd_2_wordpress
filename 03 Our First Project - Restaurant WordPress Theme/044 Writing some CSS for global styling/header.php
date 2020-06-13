<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>La Pizzeria</title>
	<?php wp_head(); ?>
</head>
<body>
	<header class="site-header">
		<div class="container">
			<div class="logo">
				<a href="<?php echo esc_url(home_url('/') ); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" class="logoimage">
				</a>
				
			</div><!-- logo -->
			<div class="header-information">
				<div class="socials">
					<?php 
						$args = array(
							'theme_location'	=>	'social-menu',
							'container'			=>	'nav',
							'container_class'	=>	'socials',
							'container_id'		=>	'socials',
							'link_before'		=>	'<span class = "sr-text">',
							'link_after'		=>	'</span>'
						);
						wp_nav_menu($args);
					 ?>
				</div><!-- socials -->
				<div class="address">
					<p>B179 Bay Avenue Mountain View CA</p>
					<p>Phone Number: +1-453-435-9879</p>
				</div><!-- address -->
			</div><!-- header-information -->		
		</div><!-- container -->
		
	</header>

	<div class="navigation">
		<?php 
			$args = array(
				'theme_location' 	=> 'header-menu',
				'container'			=>	'nav',	
				'container_class'	=>	'site-nav'
			);
			wp_nav_menu($args);
		 ?>
	</div><!-- navigatio -->

