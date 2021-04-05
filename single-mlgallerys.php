<?php
get_header();
?>

<!-- Gallery Section Start -->
<section id="portfolio">
	<!--  title-->
	<div class="title">
		<h1 class="title-text ">Single Gallery</h1>
		<div class="title-underline"></div>
	</div>
	<!--  end of title-->
	<div class="portfolio-center">
		<?php
		if (have_posts()) : while (have_posts()) : the_post();
				$postData = get_post_meta(get_the_ID());
				$photos_query = $postData['gallery_data'][0];
				$photos_array = unserialize($photos_query);
				$url_array = $photos_array['image_url'];
				$count = sizeof($url_array);
			endwhile;
		endif;
		?>
		<!-- single work item-->

		<?php for ($i = 0; $i < $count; $i++) {	?>
			<div class="work">
				<a href="<?php echo $url_array[$i]; ?>" data-lightbox="mygallery" data-title="<?php the_title(); ?>">
					<img class="img-box" src="<?php echo $url_array[$i]; ?>">
				</a>


				<div class="image-overlay">
					<div class="image-text">
						<p><?php the_title(); ?></p>
					</div>
				</div>
			</div>
		<?php
			if ($i == 0) {
				$i = 0;
			}
		}
		?>
		<!-- end single work item-->
	</div>

</section>
<!-- Gallery Section End -->

<?php

get_footer();

?>