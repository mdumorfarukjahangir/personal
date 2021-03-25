<?php
get_header();
?>
		<!-- Blog Single -->
		<section class="news-area archive blog-single section-padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-12">
						<div class="row">
							<div class="col-12">
							<?php
														
														if ( have_posts() ) : while ( have_posts() ) : the_post();
														$format_in = 'Ymd'; // the format your value is saved in (set in the field options)
								$format_out = 'j F, Y'; // the format you want to end up with

								$date = DateTime::createFromFormat($format_in, get_field('event_date'));

								$pdate =  $date->format( $format_out );

														?>
								<div class="blog-single-main">
							
									<div>
										 
										<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Post Thumbnail" class="single-post-image-size" >
									</div>
									<div class="blog-detail">
										<!-- News meta -->
													
														<ul class="news-meta">
														<li><i class="fa fa-calendar"></i><?php echo $pdate; ?></li>
														<li class="author"><i class="fa fa-clock-o"></i> <?php echo get_field('event_time'); ?></li>
															
															
														</ul>
														<h2 class="blog-title"><?php the_title(); ?></h2>
														<?php the_content(); ?>
														
														
														<?php
													
													endwhile;
													else: ?>
														<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
													<?php
													endif;
														
													?>
													

										 
 
										<!-- Post Nav -->
									   
									 
									 
									</div>
									
								</div>
							</div>
						</div>						
					</div>		
				</div>
			</div>
		</section>	
		<!--/ End Services -->
		
		
		<!-- Footer --> 

		<?php 
		get_footer();
		?>