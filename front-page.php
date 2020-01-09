<?php get_header();?>
<!--- Content Section -->
<div id="blog" class="lc-card-content container">
	<!--main text-->
		<div class="row text-center justify-content-md-center lc-p padding">
			<div class="col-lg-8 col-lg-push-1 padding">
				<p class="lc-main-text">We are a team of enthusiate covering all of aspects 
						of live chat software implementation and use. We will try 
						to the effectiveness of Live Chat by doing studies and outlining theme 
						here on this blog.Check back as we will post every day </p>
			</div>
        </div>
        <hr class="my-4">
		<!--blog cards-->
		<div>
				<div class="row lc-section-title text-center padding">
					<div class="col-12">
					<h1>Our Latest Articals</h1>
					</div>
				</div>
				<div class="lc-cards row padding justify-content-md-center justify-content-sm-center">
                <?php
                        $posts = new WP_Query(array(
                            'posts_per_page' => 3
                        ));
                        while($posts->have_posts()){
                            $posts->the_post();
                            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                            ?>
                            <div class="col-md-3 col-lg-3 col-xs-10 col-sm-10">
							<div class="card">
							  <img src="<?php echo $url ?>" class="card-img-top" alt="img1">
							  <div class="card-body">
								<h5 class="card-title"><?php echo wp_trim_words(get_the_title(),5)?></h5>
								<p class="card-text"><?php echo wp_trim_words(get_the_content(),30);?>
								</p>
								<a href="<?php echo get_the_permalink() ?>" class="btn btn-primary">Read more</a>

							  </div>
							</div>
					</div> 
                        <?php }?>
					
				  </div>
				</div>
</div>

<?php
get_footer();
?>