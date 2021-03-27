<?
/**
 * Template name: About Page
 */
?>
<?php
get_header();
?>
		
		<!-- Breadcrumb -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<!-- Bread Menu -->
							<div class="bread-menu">
								<ul>
									<li><a href="<?php echo site_url(); ?>">Home</a></li>
									<li><a href="<?php echo site_url('about-me'); ?>">About Me</a></li>
								</ul>
							</div>
							<!-- Bread Title -->
							 
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- / End Breadcrumb -->
		
		<!-- About Me -->
		<section class="about-us">
			<div class="container">

						<div class="about_title">
							<p>Details about me</p>
						</div>
						<div class="row">
								<?php
									$args = array(  
										'post_type' => 'aboutme',
										'post_status' => 'publish',
									
										
										
									); 
									$loop = new WP_Query( $args ); 
										
									while ( $loop->have_posts() ) : $loop->the_post(); 
								?>


									<div class="columna">
										<div class="card">
										
											<div class="about-text">
												<h5><?php the_title(); ?></h5>
													
												<?php the_content(); ?>
												
											</div>
										</div>
									</div> 
								<?php endwhile;	?>
						</div>
			
			</div>
		</section>	
				<!--/ End About Us -->
				
				
				 
		<?php
		
		get_footer();
		
		?>