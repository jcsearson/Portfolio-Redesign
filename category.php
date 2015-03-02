<?php include("parts/doctype.php"); ?>

	<body>
		<!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


		<div class="head-container">
			<a id="top-page-jump"></a>
				<div class="head-wrap">
					<?php include("parts/header.php"); ?>

					<?php include("parts/nav.php"); ?>
				</div>  <!-- .head-wrap -->
		</div>  <!-- .head-container -->

	<div class="main-container single-blog-wrap">
		<section class="about-container">
			<div class="cont-about tint">
				<div class="wrapper">
					<div class="thoughts">
						<p></p>
					</div>  <!-- .thoughts -->
				</div>  <!-- .wrapper -->
			</div>  <!-- .cont-about -->
		</section>  <!-- .about-container -->

		<section class="single-post-container">

			<div class="blog-post-container">
				<div class="category-archive-title">
					<h2 class="category-title">Blog Posts about Category</h2>
				</div>  <!-- .blog-title -->
				<section class="single-cat-post">
					<div class="post-img-thumb">
						<img src="images/content/thumbnail-demo.png" alt="">
					</div>
					<div class="main-post-cont">
						<h2 class="post-sample-title"><a href="#">Some Handy Code Pieces</a></h2>
						<h3 class="post-time-stamp">February 9, 2015</h3>
						<p class="post-excerpt">I constantly have to go back and search for snippets of code whenever I encounter a problem building a site. This can be frustrating especially when I know that I have already solved that very same issue at some prior point in time. As a result I have decided it is time to add a […]</p>
					</div>
					<div class="button-wrapper">
						<a href="#" class="read-on-button">Read Post</a>
					</div>
				</section>
				<section class="single-cat-post">
					<div class="post-img-thumb">
						<img src="images/content/thumbnail-demo.png" alt="">
					</div>
					<div class="main-post-cont">
						<h2 class="post-sample-title"><a href="#">Helpful Things to know about Contact Forms</a></h2>
						<h3 class="post-time-stamp">February 3, 2015</h3>
						<p class="post-excerpt">I was redesigning the contact portion of my portfolio site today, and as per usual spent quite a bit of time googling and searching things to get the form jusssst right.  Here are a few of the things I incorporated into the final product:   1.  Placeholder Text It’s fairly simple to add placeholder text […]</p>
					</div>
					<div class="button-wrapper">
						<a href="#" class="read-on-button">Read Post</a>
					</div>
				</section>
				<section class="single-cat-post">
					<div class="post-img-thumb">
						<img src="images/content/thumbnail-demo.png" alt="">
					</div>
					<div class="main-post-cont">
						<h2 class="post-sample-title"><a href="#">A Small (but Incredibly Handy) Sublime Text Setting</a></h2>
						<h3 class="post-time-stamp">February 3, 2015</h3>
						<p class="post-excerpt">A handy little setting in Sublime Text that I encourage everyone to use is: “save_on_focus_lost”: true, Save this little block of code in the user-settings and from then on when you switch windows from Sublime Text to something else like Chrome, Sublime automatically saves your files. […]</p>
					</div>
					<div class="button-wrapper">
						<a href="#" class="read-on-button">Read Post</a>
					</div>
				</section>
				<section class="single-cat-post">
					<div class="post-img-thumb">
						<img src="images/content/thumbnail-demo.png" alt="">
					</div>
					<div class="main-post-cont">
						<h2 class="post-sample-title"><a href="#">How Can Cache Affect You?</a></h2>
						<h3 class="post-time-stamp">January 14, 2015</h3>
						<p class="post-excerpt">Recently I got Premium WordPress Hosting with MediaTemple.  I have been working on a site for several months now and decided that I would need to have a host that could be more accessible to me in my times of need.  I use WebHosting For Students for my portfolio and have no complaints but I […]</p>
					</div>
					<div class="button-wrapper">
						<a href="#" class="read-on-button">Read Post</a>
					</div>
				</section>
			</div>  <!-- .single-blog-post   .post-styles-->

			<section class="sidebar-nav-wrap">
				<div class="sidebar-nav">
					<ol class="categories-wrap">
						<div class="title-sidebar-wrap">
							<h2>Categories</h2><span class="line-bar"></span>
						</div>
						<li><span>></span><a href="#">Web Development</a></li><br>
						<li><span>></span><a href="#">Mathematics</a></li><br>
						<li><span>></span><a href="#">Social</a></li><br>
						<li><span>></span><a href="#">Film</a></li><br>
					</ol>
					<ol class="recent-post-wrap">
						<div class="title-sidebar-wrap">
							<h2>Blog Posts</h2><span class="line-bar"></span>
						</div>
						<li><span>></span><a href="#">Some Handy Code Pieces</a></li><br>
						<li><span>></span><a href="#">Helpful Things to know about Contact Forms</a></li><br>
						<li><span>></span><a href="#">A Small (but Incredibly Handy) Sublime Text Setting</a></li><br>
						<li><span>></span><a href="#">How Can Cache Affect You?</a></li><br>
						<li><span>></span><a href="#">Web Fundamentals</a></li><br>
					</ol>
				</div>  <!-- .sidebar-nav -->
			</section>  <!-- .sidebar-nav-wrap -->

		</section>  <!-- .single-post-container -->


		<a href="#top-page-jump" class="link-to-top">
			<section class="jump-top-wrap">
				<div class="jump-top-outer">
					<div class="jump-top-inner"></div>
				</div>
			</section>
		</a>

			<?php include("parts/footer.php"); ?>
	</body>
</html>