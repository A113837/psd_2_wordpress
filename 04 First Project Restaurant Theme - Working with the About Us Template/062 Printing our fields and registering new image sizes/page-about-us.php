<?php get_header();?>

	<?php while(have_posts()): the_post(); ?>
		<div class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
			<div class="hero-content">
				<div class="hero-text">
					<h2><?php the_title(); ?></h2>
					<h4>Hello from page-about-us.php</h4>
				</div><!-- hero-text -->
			</div><!-- hero-content -->
		</div><!-- hero -->

		<div class="main-content container">
			<main class="text-center content-text">
				<?php the_content(); ?>
			</main>
		</div><!-- main-conten -->	

		<div class="box-information container clear">
			<div class="box">
				<?php 
					$id_image = get_field('image_1');
					$image = wp_get_attachment_image_src($id_image, 'boxes');
				 ?>
				 
				 <img src="<?php echo $image[0]; ?>">
				
				<div class="content-box">
					<?php the_field('description_1'); ?>
				</div><!-- content-box -->
			</div><!-- box -->

			<div class="box">
							
				<div class="content-box">
					<?php the_field('description_2'); ?>
				</div><!-- content-box -->

				<?php 
					$id_image = get_field('image_2');
					$image = wp_get_attachment_image_src($id_image, 'boxes');
				 ?>
				 
				 <img src="<?php echo $image[0]; ?>">
			</div><!-- box -->

			<div class="box">
				<?php 
					$id_image = get_field('image_3');
					$image = wp_get_attachment_image_src($id_image, 'boxes');
				 ?>
				 
				 <img src="<?php echo $image[0]; ?>">
				
				<div class="content-box">
					<?php the_field('description_3'); ?>
				</div><!-- content-box -->
			</div><!-- box -->
			
		</div><!-- box-information container clear -->

	<?php endwhile; ?>
	


<?php get_footer();	?>