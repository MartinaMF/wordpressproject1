<?php
get_header();
 ?>
 <div id="lc-contact" class="lc-card-content container">
        <div class="row lc-section-title text-center padding">
            <div class="col-12">
            <h1>contact</h1>
            </div>
        </div>
            <div class="row justify-content-center">
              <div class="col-lg-10 col-md-10 col-sm-12">
            <?php while(have_posts()){
              the_post();
              the_content();
            }?>
            </div>
            </div>
            
  </div>

 <?php get_footer();
?>