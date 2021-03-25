<?
/**
 * Template name: Blog Page
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
									<li><a href="blog-grid.html">Blog Grid</a></li>
								</ul>
							</div>
							<!-- Bread Title -->
							 
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- / End Breadcrumb -->
		
		<!-- Blog Layout -->
		<section class="blog-layout news-default section-space">
			<div class="container">
				<div class="row">
					<?php 
					$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

					$args = array(  
						'post_type' => 'post',
						'post_status' => 'publish',
						'posts_per_page' => 2,
						'paged' => $paged
						
					); 
					$loop = new WP_Query( $args ); 
						
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
				
					<div class="col-lg-4 col-md-6 col-12" <?php post_class(); ?>>
						<!-- Single Blog -->
						<div class="single-news ">
							<div class="news-head overlay">
								<img src="<?php echo get_the_post_thumbnail_url();?>" alt="#" class="post-image-size" >
								<ul class="news-meta">
									<li class="author"><i class="fa fa-user"></i><?php the_author(); ?></li>
									<li class="date"><i class="fa fa-calendar"></i><?php echo get_the_date(); ?></li>
								</ul>
							</div>
							<div class="news-body">
								<div class="news-content">
									<h3 class="news-title"><a href="<?php echo get_the_permalink(); ?>"><?php echo mb_substr(get_the_title(),0,50);?></a></h3>
									<div class="news-text"><?php echo mb_substr(get_the_content(),0,100);?></div>
									<a href="<?php echo get_the_permalink(); ?>" class="more">Continue reading <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
					</div>
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
				 
			</div>
		</section>
	
		<!-- Footer -->
		<?php
		
		get_footer();
		
		?>