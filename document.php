<?
/**
 * Template name: Document  Page
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
									<li><a href="about.html">Documents</a></li>
								</ul>
							</div>
							<!-- Bread Title -->
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- / End Breadcrumb -->
		
		<!-- About Us -->
		<section>
		<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Serial</th>
									<th class="cell100 column2">Title</th>
									<th class="cell100 column3">Download</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
						 
							<?php
							$i = 1;
							$file = get_field('file_upload');
							$url = wp_get_attachment_url( $file );  
						 
								$args = array(  
									'post_type' => 'document',
									'post_status' => 'publish',
									 
									
								); 
								$loop = new WP_Query( $args ); 
									
								while ( $loop->have_posts() ) : $loop->the_post(); 
 
								
							?>
								<tr class="row100 body">
									<td class="cell100 column1"><?php echo $i; ?></td>
									<td class="cell100 column2"><?php the_title(); ?></td>
									
									<td class="cell100 column3"><a href="<?php echo get_field('file_upload')['url']; ?>" target="_blank"><i class="fa fa-download"></i></a></td>
									
								</tr>

							<?php 
							$i++; 
						     endwhile;	
							 wp_reset_query();
						    ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	
		</section>	
		<!--/ End About Us -->
		
		

		<?php
		
		get_footer();
		
		?>