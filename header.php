<!DOCTYPE html>
<html lang="zxx">
	<head>
		<!-- Meta Tag -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv= " Content-Type " content= " text/html; charset=utf-8"/>


		<meta name='copyright' content='pavilan'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title Tag  -->
		<title>
		<?php bloginfo("name"); ?>
		</title>
		
		<!-- Favicon -->
		<link rel="icon" type="image/favicon.png" href="img/favicon.png">
		
		<!-- Web Font -->
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
		<?php 
		wp_head();
		?>
		
	</head>
	<body id="bg" <?php body_class(); ?>>
	
		<!-- Boxed Layout -->
		<div id="page" class="site boxed-layout"> 
		
		<!-- Preloader -->
		<div class="preeloader">
			<div class="preloader-spinner"></div>
		</div>
		<!--/ End Preloader -->
	
		<!-- Header -->
		<header class="header">
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-12">
							<!-- Top Contact -->
							<?php
								$args = array(  
									'post_type' => 'contactinfo',
									'post_status' => 'publish',
									'posts_per_page' => 1,
									
								); 
								$loop = new WP_Query( $args ); 
									
								while ( $loop->have_posts() ) : $loop->the_post(); 
							?>
							<div class="top-contact">
								<div class="single-contact"><i class="fa fa-phone"></i>Phone: <?php echo get_field('phone'); ?></div> 
								<div class="single-contact"><i class="fa fa-envelope-open"></i><?php echo get_field('email'); ?></div>	
								
							</div>
							<!-- End Top Contact -->
							<?php endwhile;	?>
						</div>	
						<div class="col-lg-4 col-12">
							<div class="topbar-right">
								<!-- Social Icons -->
							
								<ul class="social-icons">
								<?php 
									if ( is_active_sidebar( 'footersocial' ) ){
									dynamic_sidebar('footersocial');
								}
								?>
								</ul>															
								<div class="button">
									<a href="<?php echo site_url('contact')?>" class="bizwheel-btn">Get a Quote</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Topbar -->
			<!-- Middle Header -->
			<?php get_template_part("/template-parts/common/navigation"); ?>
			<!--/ End Middle Header -->
		</header>
		<!--/ End Header -->