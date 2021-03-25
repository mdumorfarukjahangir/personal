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
                            ?>

								<div class="blog-single-main">
									<div class="main-image">
									<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Post Thumbnail" class="single-post-image-size" >
									</div>
									<div class="blog-detail">
										<!-- News meta -->
										<ul class="news-meta">
                                        <li class="author"><i class="fa fa-user"></i><?php the_author(); ?></li>
                                            <li><i class="fa fa-calendar"></i><?php echo get_the_date(); ?></li>
                                             
                                        </ul>
	
										<h2 class="blog-title"><?php the_title(); ?></h2>
										<?php the_content(); ?>
                                        <?php setPostViews(get_the_ID()); ?>

									</div>
								</div>
								<?php
													
												endwhile;
												else: ?>
													<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
												<?php
												endif;
													
												?>
							</div>
							<div class="posts_nav">
                                        <?php previous_post_link( '%link', __( 'Previous Post', 'personal' ), true ); ?> 
                                        <span class="text-right"><?php next_post_link( '%link', __( 'Next Post', 'personal' ), true ); ?> </span>
                                        </div>
	
						</div>							
					</div>		
				</div>
			</div>
	    </section>
<?php 
get_footer();
?>