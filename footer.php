<!-- Footer -->
<footer class="footer">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<!-- Footer About -->		
							<div class="single-widget footer-about widget">	
								<?php
									$args = array(  
										'post_type' => 'biography',
										'post_status' => 'publish',
										'posts_per_page' => 1,
										
									); 
									$loop = new WP_Query( $args ); 
								
									while ( $loop->have_posts() ) : $loop->the_post(); 
								?>
								<div class="logo">
									<div class="img-logo">
										<a class="logo" href="index.html">
											<img class="img-responsive" src="<?php echo get_the_post_thumbnail_url();?>" alt="logo">
										</a>
									</div>
							    </div>
							    <div class="footer-widget-about-description">
								<span class="footer-excerpt"><?php  the_excerpt( ); ?> </span>
								 
								</div>
								
								<?php endwhile;	?>
							 
							</div>		
							<!--/ End Footer About -->		
						</div>
						<div class="col-lg-2 col-md-6 col-12">
							<!-- Footer Links -->		
							<div class="single-widget f-link widget">
								<h3 class="widget-title">Quick Link </h3>
								 <?php
								 wp_nav_menu( array(
									'theme_location' => 'footer-menu',
									'menu_id'        => 'footer-menu',
									'menu_class'     => '',
									 
								) );
								 
								 
								 ?>
							</div>			
							<!--/ End Footer Links -->			
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<!-- Footer News -->
							<div class="single-widget footer-news widget">	
								<h3 class="widget-title">Recent Post</h3>
								<?php 
									$args = array(  
										'post_type' => 'post',
										'order'      => 'DSC',
										'post_status' => 'publish',
										'posts_per_page' => 2,
										
									); 
									$loop = new WP_Query( $args ); 
						
									while ( $loop->have_posts() ) : $loop->the_post(); 
								?>



								<!-- Single News --> 
								<div class="single-f-news">
									<div class="post-thumb"><a href="#"><img src="<?php echo get_the_post_thumbnail_url();?>" alt="#"></a></div>
									<div class="content">
										<p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i><?php echo get_the_date(); ?></time></p>
										<h4 class="title"><a href="<?php echo get_the_permalink(); ?>"><?php echo mb_substr(get_the_title(),0,50); ?></a></h4>
									</div>
								</div> 
								<?php endwhile;	?>
							</div>			
							<!--/ End Footer News -->			
						</div>
						<div class="col-lg-3 col-md-6 col-12">	
						<?php
							$args = array(  
								'post_type' => 'contactinfo',
								'post_status' => 'publish',
								'posts_per_page' => 1,
								
							); 
							$loop = new WP_Query( $args ); 
								
							while ( $loop->have_posts() ) : $loop->the_post(); 
					    ?>
							<!-- Footer Contact -->		
							<div class="single-widget footer_contact widget">	
								<h3 class="widget-title"><?php the_title(); ?></h3>
								 
								<ul class="address-widget-list">
									<li class="footer-mobile-number"><i class="fa fa-phone"></i><?php echo get_field('phone'); ?></li>
									<li class="footer-mobile-number"><i class="fa fa-envelope"></i><?php echo get_field('email'); ?></li>
									<li class="footer-mobile-number"><i class="fa fa-map-marker"></i><?php echo get_field('address'); ?></li>
								</ul>
							</div>		
							<!--/ End Footer Contact -->
							<?php endwhile;	?>
						</div>
					</div>
				</div>
			</div>
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="copyright-content">
							<?php 
									if ( is_active_sidebar( 'copywritesection' ) ){
									dynamic_sidebar('copywritesection');
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<?php 
		wp_footer();
		?>
	</body>
</html>