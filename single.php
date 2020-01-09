<?php
get_header();

while(have_posts()){
    the_post();
    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
    ?>
<div id="blog" class="lc-card-content container padding">
		<div>
                <div class="row">
                <a href="/blog"><button id="lc-all-posts" type="button" class="btn btn-primary">All Posts</button></a>
                </div>
				<div class="row lc-section-title text-center padding">
					<div class="col-12">
					<h1><?php the_title();?></h1>
					</div>
				</div>
                <div class="lc-post-content">
                <!--<img src="<?php echo $url ?>" class="card-img-top" alt="img1">-->
                <?php the_content();?>
                </div><!--lc-post-content-->
				
		</div>
</div>
<?php }
get_footer();
?>