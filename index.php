<?php get_header();?>
<!--- Content Section -->
<div id="blog" class="lc-card-content container">
		<!--blog cards-->
		<div class="container">
				<div class="row lc-section-title text-center padding">
					<div class="col-12">
					<h1>Welcome to our blog</h1>
					</div>
				</div>
				<div class="lc-cards row padding justify-content-md-center justify-content-sm-center">
                <?php
                        while(have_posts()){
                            the_post();
                            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                            ?>
                            <div class="col-md-4 col-lg-4 col-xs-10 col-sm-10">
							<div class="card">
                                <img  src="<?php echo $url ?>" class="card-img-top" alt="img1">
							  <div class="card-body">
								<h5 class="card-title"><?php echo wp_trim_words(get_the_title(),5);?></h5>
								<p class="card-text"><?php echo wp_trim_words(get_the_content(),30);?>
								</p>
								<a href="<?php echo get_the_permalink(); ?>" class="btn btn-primary">Read more</a>

							  </div>
							</div>
					</div> 
                        <?php }
                  
                        ?>
				  </div>
				</div>
               <div class="row padding justify-content-md-center justify-content-sm-center">
                <?php echo paginate_links(); ?> 
               </div><!-- row-->

</div>

<?php
get_footer();
?>