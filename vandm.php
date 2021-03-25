<?
/**
 * Template name: Vission and Mission Page
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
									<li><a href="about.html">Vission & Mission</a></li>
								</ul>
							</div>
							<!-- Bread Title -->
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- / End Breadcrumb -->
		
        <section class="features-area section-bg">
			<div class="container">
				<div class="row">
				<?php
						$args = array(  
							'post_type' => 'vandm',
							'post_status' => 'publish',
							'posts_per_page' => 2,
							
						); 
						$loop = new WP_Query( $args ); 
							
						while ( $loop->have_posts() ) : $loop->the_post(); 
				?>
					<div class="col-lg-12 col-md-12 col-12">
						<!-- Single Feature -->
						<div class="single-feature-v">
							<div class="icon-head"><i class="fa fa-podcast"></i></div>
							<h4><a href="#"><?php the_title(); ?> </a></h4>
							<?php the_content();?>
						</div>
						<!--/ End Single Feature -->
					</div>
				<?php endwhile;	?>
					 
				</div>
			</div>
		</section>
		<!--/ End Features Area -->

		<?php
		
		get_footer();
		
		?>