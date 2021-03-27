<?
/**
 * Template name: Contact Page
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
									<li><a href="index.html">Home</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Breadcrumb -->
		
		<!-- Contact Us -->
		<section class="contact-us section-space">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-md-7 col-12">
						<!-- Contact Form -->
						<div class="contact-form-area">
						<?php 
									if ( is_active_sidebar( 'contactform' ) ){
									dynamic_sidebar('contactform');
								}
								?>
						</div>
						<!--/ End contact Form -->
					</div>
					<div class="col-lg-5 col-md-5 col-12">
					<?php
						$args = array(  
							'post_type' => 'contactinfo',
							'post_status' => 'publish',
							'posts_per_page' => 1,
							
						); 
						$loop = new WP_Query( $args ); 
							
						while ( $loop->have_posts() ) : $loop->the_post(); 
					?>
						<div class="contact-box-main m-top-30">
							<div class="contact-title">
								<h2><?php the_title(); ?></h2>
							</div>
							<!-- Single Contact -->
							<div class="single-contact-box">
								<div class="c-icon"><i class="fa fa-map-marker"></i></div>
								<div class="c-text">
									<h4>Address</h4>
									<?php echo get_field('address'); ?>
									 
								</div>
							</div>
							<!--/ End Single Contact -->
							<!-- Single Contact -->
							<div class="single-contact-box">
								<div class="c-icon"><i class="fa fa-phone"></i></div>
								<div class="c-text">
									<h4>Call Me</h4>
									<?php echo get_field('phone'); ?>
								</div>
							</div>
							<!--/ End Single Contact -->
							<!-- Single Contact -->
							<div class="single-contact-box">
								<div class="c-icon"><i class="fa fa-envelope-o"></i></div>
								<div class="c-text">
									<h4>Email Me</h4>
									<?php echo get_field('email'); ?>
								</div>
							</div>
							<!--/ End Single Contact -->
							 
						</div>

						<?php endwhile;	?>
					</div>
				</div>
			</div>
		</section>	
		<!--/ End Contact Us -->
	<?php 
	
	get_footer();
	
	?>