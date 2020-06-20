<?php 
/*
template name: Our Menu(Specialties)
*/

 ?>


<?php get_header();?>

	<?php while(have_posts()): the_post(); ?>
		<div class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
			<div class="hero-content">
				<div class="hero-text">
					<h2><?php the_title(); ?></h2>
					<h4>Hello from page.php</h4>
				</div><!-- hero-text -->
			</div><!-- hero-content -->
		</div><!-- hero -->

		<div class="main-content container">
			<main class="text-center content-text">
				<?php the_content(); ?>
			</main>
		</div><!-- main-conten -->	

	<?php endwhile; ?>
	


<?php get_footer();	?>