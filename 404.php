<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package personal
 */

get_header();
?>

	<main id="primary" class="site-main">
	<section class="error">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 offset-lg-1 col-md-6 col-12">
						<div class="error-inner">
							<h4>404</h4>
							<h2>Page Not <span>Found!</span></h2>
							<p>It looks like nothing was found at this location. Please try to find something from the search form below. or go to back</p>
							<div class="button">
								<a href="<?php echo get_site_url(); ?>" class="bizwheel-btn"><i class="fa fa-long-arrow-left"></i>Go to home</a>
							</div>
						</div>
					</div>
				 
				</div>
			</div>
		</section>

	</main><!-- #main -->

<?php
get_footer();
