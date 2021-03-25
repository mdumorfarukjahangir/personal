<?
/**
 * Template name: Gallery Page
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
									<li><a href="about.html">Gallery</a></li>
								</ul>
							</div>
							<!-- Bread Title -->
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- / End Breadcrumb -->
		
		 <!-- Gallery Section Start -->
		 <section id="portfolio">
      <!--  title-->
      <div class="title">
        <h1 class="title-text ">Gallery Image</h1>
        <div class="title-underline"></div>
      </div>
      <!--  end of title-->
      <div class="portfolio-center">
	  <?php
	  					$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
						$args = array(  
							'post_type' => 'imagegallery',
							'post_status' => 'publish',
							'posts_per_page' => 6,
					     	'paged' => $paged
						 
							 
							
						); 
						$loop = new WP_Query( $args ); 
							
						while ( $loop->have_posts() ) : $loop->the_post(); 
		?>
        <!-- single work item-->
        <div class="work">
          <img src="<?php echo get_the_post_thumbnail_url();?>" class="img-box" />
          <div class="image-overlay">
            <div class="image-text">
              <p><?php the_title(); ?></p>
            </div>
          </div>
					</div>
        <!-- end single work item-->
		<?php endwhile;	?>
      </div>
	  <div class="row">
					<div class="col-12">
						<!-- Pagination -->
						<div class="pagination-pluginss">
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
    </section>
		 <!-- Gallery Section End -->
		
		

		<?php
		
		get_footer();
		
		?>