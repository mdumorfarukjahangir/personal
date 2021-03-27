<?
/**
 * Template name: Homepage 
 */
?>
<?php
get_header();
?>
		
		<!-- Hero Slider -->
		<section class="hero-slider style1">
			<div class="home-slider">
				<!-- Single Slider -->
				<?php
						$args = array(  
							'post_type' => 'imagegallery',
							'post_status' => 'publish',
						 
							 
							
						); 
						$loop = new WP_Query( $args ); 
							
						while ( $loop->have_posts() ) : $loop->the_post(); 
		        ?>
					<div class="single-slider" style="background-image:url('<?php echo get_the_post_thumbnail_url();?>')">
						<div class="container">
							<div class="row">
								<div class="col-lg-7 col-md-8 col-12">
									<div class="welcome-text"> 
										<div class="hero-text"> 
											<h1><?php the_title(); ?></h1>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				<?php endwhile;	?>
				<!--/ End Single Slider -->
			</div>
		</section>
		<!--/ End Hero Slider -->
		
		<!-- Features Area -->
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
					<div class="col-lg-6 col-md-6 col-12">
						<!-- Single Feature -->
						<div class="single-feature">
							<div class="icon-head"><i class="fa fa-podcast"></i></div>
							<h4><a href="<?php  echo get_permalink( get_page_by_path( 'vision-mission' ) ); ?>"><?php the_title(); ?> </a></h4>
							<?php the_excerpt();?>
							<div class="button">
								<a href="<?php  echo get_permalink( get_page_by_path( 'vision-mission' ) ); ?>" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Learn More</a>
							</div>
						</div>
						<!--/ End Single Feature -->
					</div>
				<?php endwhile;	?>
					 
				</div>
			</div>
		</section>
		<!--/ End Features Area -->
		
		
		<!-- Services -->
		<section class="services section-bg section-space">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title style2 text-center">
							<div class="section-top">
								<h1><b>Recent Events </b></h1>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
				<?php 
									$args = array(  
										'post_type' => 'event',
										'order'      => 'DSC',
										'post_status' => 'publish',
										'posts_per_page' => 3,
										
									); 
									$loop = new WP_Query( $args ); 
						
									while ( $loop->have_posts() ) : $loop->the_post(); 
									$format_in = 'Ymd'; // the format your value is saved in (set in the field options)
									$format_out = 'j F, Y'; // the format you want to end up with
	
									$date = DateTime::createFromFormat($format_in, get_field('event_date'));
	
									$pdate =  $date->format( $format_out );
					?>
					<div class="col-lg-4 col-md-4 col-12">
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

					<?php endwhile;	?>
				</div>
			</div>
		</section>
		<!--/ End Services -->
 
 
		<!-- Latest Blog -->
		<section class="latest-blog section-space">
			<div class="container">
				
				<div class="row">
					<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
						<div class="section-title default text-center">
							<div class="section-top">
								<h1><b>Popular Post</b></h1>
							</div>
							<div class="section-bottom">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="blog-latest blog-latest-slider">
						       <?php
									query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC');
									if (have_posts()) : while (have_posts()) : the_post();
									?>
								<div class="single-slider">
									<!-- Single Blog -->
									<div class="single-news ">
										<div class="news-head overlay">
										    
											<span class="news-img">
											<img class="popular-post-img" src="<?php echo get_the_post_thumbnail_url();?>" alt="#">
											</span>
											<a href="<?php the_permalink(); ?>" class="bizwheel-btn theme-2">Read more</a>
										</div>
										<div class="news-body">
											<div class="news-content">
												<h3 class="news-title"><a href="<?php echo get_the_permalink(); ?>"><?php echo mb_substr(get_the_title(),0,50);?></a></h3>
												<div class="news-text"> <?php echo mb_substr(get_the_content(),0,100);?> </div>
												<ul class="news-meta">
													<li class="date"><i class="fa fa-calendar"></i><?php  echo get_the_date(); ?></li>
													<li class="view"><i class="fa fa-user"></i><?php the_author(); ?></li>
												</ul>
											</div>
										</div>
									</div>
									<!--/ End Single Blog -->
							   </div>
										 
									<?php
									endwhile; endif;
									wp_reset_query();
								?>
	
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Latest Blog -->
		<?php
		
		get_footer();
		
		?>