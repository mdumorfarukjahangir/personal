<?
/**
 * Template name: Biography Page
 */
?>
<?php
get_header();
?>
		
		<!-- Breadcrumb -->
		<div class="breadcrumbs overlay" >
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<!-- Bread Menu -->
							<div class="bread-menu">
								<ul>
									<li><a href="<?php echo site_url(); ?>">Home</a></li>
									<li><a href="<?php echo site_url('biography'); ?>">Biography</a></li>
								</ul>
							</div>
							<!-- Bread Title -->
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- / End Breadcrumb -->
		
		<!-- About Us -->
		<section class="about-us section-space">
			<div class="container">
				<div class="row">
					<?php
						$args = array(  
							'post_type' => 'biography',
							'post_status' => 'publish',
							'posts_per_page' => 1,
							
						); 
						$loop = new WP_Query( $args ); 
							
						while ( $loop->have_posts() ) : $loop->the_post(); 
					?>
					
					<div class="col-lg-12 col-md-12 col-12">
					<img src="<?php echo get_the_post_thumbnail_url();?>" class="biagraphy-image-size border border-secondary single-post-image-size"> 
					<h3 class="biography-title"><?php the_title(); ?></h3>
					<div class="biography-text"><?php the_content(); ?> </div>
					</div>
					<?php endwhile;	?>
				</div>	
			</div>
		</section>	
		<!--/ End About Us -->
		
		

		<?php
		
		get_footer();
		
		?>