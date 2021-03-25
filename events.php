<?
/**
 * Template name: Event Page
 */
?>

<?php
get_header();
?>
		<!--/ End Header -->
	 
		
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
									<li><a href="services.html">Events</a></li>
								</ul>
							</div>
							<!-- Bread Title -->
							 
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Breadcrumb -->
		
		<!-- Services -->
		<section class="services section-bg section-space ">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title  style2">
							<div class="section-top ">
								<h1><b>Upcoming Events</b></h1>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
						<?php 
								
										$args = array(  
											'post_type' => 'event',
											'post_status' => 'publish',
											
											
										); 
										$loop = new WP_Query( $args ); 
											
										while ( $loop->have_posts() ) : $loop->the_post(); 
										$format_in = 'Ymd'; // the format your value is saved in (set in the field options)
										$format_out = 'j F, Y'; // the format you want to end up with
		
										$date = DateTime::createFromFormat($format_in, get_field('event_date'));
		
										$pdate =  $date->format( $format_out );
		
										
						?>


						<?php 
						$currentDateTime = date('Ymd');
						if(get_field('event_date') >= $currentDateTime){
							?>
					   <div class="col-lg-4 col-md-6 col-12">
						<!-- Single Service -->
						<div class="single-service">
							<div class="service-head">
								<img src="<?php echo get_the_post_thumbnail_url();?>" class="img-thumbnail eventimageres">
								<div class="icon-bg"><i class="fa fa-handshake-o"></i></div>
							</div>
							<div class="service-content">
							<div class="service-content">
						     	<h5><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h5>
							    <div class="event-icon"><i class="fa fa-calendar"> </i><?php echo $pdate ?> <i class="fa fa-clock-o"></i> <?php echo get_field('event_time'); ?></div>
							 
								 <?php the_excerpt(); ?> 
							
								 
								<a class="btn" href="<?php echo get_the_permalink(); ?>"><i class="fa fa-arrow-circle-o-right"></i>Details</a>
							</div>
							</div>
						</div>
						<!--/ End Single Service -->
				
				     	</div>

							<?php
							
						}
					 
						?>
					 
                       
					<?php 
							 
							endwhile;	
							wp_reset_query();
						
						?>
				</div>
			</div>
		</section>
		<!--/ End Services -->
		<section class="services section-bg section-space">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title  style2 text-center">
							<div class="section-top">
								<h1><b>Previous  Events</b></h1>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
				<?php
				

								$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
								$args = array(  
									'post_type' => 'event',
									'post_status' => 'publish',
									'posts_per_page' => 1,
					              	'paged' => $paged
									
									
								); 
								$loop = new WP_Query( $args ); 
									
								while ( $loop->have_posts() ) : $loop->the_post(); 
							
								// echo $date;
								
								$format_in = 'Ymd'; // the format your value is saved in (set in the field options)
								$format_out = 'j F, Y'; // the format you want to end up with

								$date = DateTime::createFromFormat($format_in, get_field('event_date'));

								$pdate =  $date->format( $format_out );
								

 


								
				?>
										<?php 
						$currentDateTime = date('Ymd');
						if(get_field('event_date') <= $currentDateTime){
							?>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Service -->
						<div class="single-service">
							<div class="service-head">
								<img src="<?php echo get_the_post_thumbnail_url();?>" class="img-thumbnail eventimageres ">
								<div class="icon-bg"><i class="fa fa-handshake-o"></i></div>
							</div>
							<div class="service-content">
							<div class="service-content">
						     	<h5><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h5>
							    <div class="event-icon"><i class="fa fa-calendar"> </i><?php echo $pdate ?> <i class="fa fa-clock-o"></i> <?php echo get_field('event_time'); ?></div>
							 
								 <?php the_excerpt(); ?> 
							
								 
								<a class="btn" href="<?php echo get_the_permalink(); ?>"><i class="fa fa-arrow-circle-o-right"></i>Details</a>
							</div>
							</div>
						</div>
						<!--/ End Single Service -->
						</div>

<?php

}

?>


<?php 
 
endwhile;	
wp_reset_query();

?>
				</div>
				<div class="row">
					<div class="col-12">
						<!-- Pagination -->
						<div class="pagination-pluginse">
						<!-- <ul class="pagination-list"> -->
						<?php 
							$big = 999999999; // need an unlikely integer
								echo paginate_links( array(
								'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
								'format' => '?paged=%#%',
								'current' => max( 1, get_query_var('paged') ),
								'total' =>  $loop->max_num_pages,
								
								'prev_text' => 'Previous',
								'next_text' => 'Next',
								
							) );
						?>
						<!-- </ul> -->
						</div>
						<!--/ End Pagination -->
					</div>
				</div>
			</div>
		</section>
		
		<!-- Footer -->

		<?php
		
		get_footer();
		
		?>