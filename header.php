<!DOCTYPE html>
<html lang="en">
<head>
<!--wp_head() responsable for Loading every thing to our wordpress head-->
    <?php wp_head(); ?>
</head>

<body>

  <!--header-->
<header class="lc-header">
	<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light <?php if(is_home() || is_page('contact')  || is_single() || is_page('search')) echo 'lc-nav-background-black'?>">
	<div class="container-fluid">
		<!--live chat logo-->
		<a class="navebar-brand lc-logo" href="<?php echo site_url();?>"><i class="far fa-comments"></i>LIVECHATESOFTWARE</a>
		<!--navigation button-->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarResponsive">
		  <ul class="navbar-nav ml-auto">
			  <li class="nav-item <?php if(is_page('home')) {
                echo 'active';
                }?>">
				  <a class="nav-link " href="/home"><i class="fas fa-home"></i>Home</a>
			</li>
			<li class="nav-item <?php if(is_home()) {
                echo 'active';
                }?>">
					<a class="nav-link" href="/blog"><i class="fas fa-leaf"></i>Blog</a>
			  </li>
			  <li class="nav-item <?php if(is_page('contact')) {
                echo 'active';
                }?>">
					<a class="nav-link" href="/contact"><i class="fas fa-envelope"></i>Contact</a>
			  </li>
			  <li class="nav-item <?php if(is_page('search')) {
                echo 'active';
                }?>">
                    <a class="lc-searchTrigger nav-link" href="#"><i class="lc-main-search-icon fas fa-search"></i></a>
					
			  </li>
		  </ul>
		  
		</div>
	</div>
</nav>
<!--header Content-->
<section class="lc-header-content">
	<div class="lc-header-text">
        <div>
            <h1><?php if(is_page('contact')){echo 'Contact';} 
            else if(is_page('home')) echo 'BEST LIVE CHAT SOFTWARE';?> 
            </h1>
            <?php if(is_page('home')) echo '<p>DO YOU OFFER LIVE HELP SUPPORT ON YOUR WEBSITE?</p>'?>
        </div>
    </div>
    <img class="lc-main-banner" src="<?php 
    if(is_page('home')) {
        echo get_theme_file_uri('img/hero_bg.jpg');
    }
    else if(is_page('contact')){echo get_theme_file_uri('img/hero_contact.jpg'); } 
    else if(is_page('search')){echo get_theme_file_uri('img/hero_blog.jpg'); }
    else if(is_home()){echo get_theme_file_uri('img/hero_blog.jpg'); }
    else if(is_single()){echo get_theme_file_uri('img/hero_blog.jpg'); }
    ?>" alt="">
</section>
</header>  
