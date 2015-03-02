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
				<div class="blog-title">
					<h2 class="blog-post-heading">Helpful Things to know about Contact Forms</h2>
					<h3 class="blog-post-date">Published by James Searson on February 3, 2015</h3>
					<img src="images/content/feature-img-v1.jpg" alt="Baltimore in the Morning" class="post-featured-image">
				</div>  <!-- .blog-title -->
				<div class="single-blog-post post-styles">
					<p>I was redesigning the contact portion of my portfolio site today, and as per usual spent quite <em>a bit of time googling and searching things</em> to get the form jusssst right.  Here are a few of the things I incorporated into the final product:</p>
					<h2>1.  Placeholder Text (h2)</h2>
					<h3>1.  Placeholder Text (h3)</h3>
					<h4>1.  Placeholder Text (h4)</h4>
					<h5>1.  Placeholder Text (h5)</h5>
					<p>It’s fairly simple to add placeholder text to all inputs / textarea parts of your form.  Simply add something like this to your input tags:</p>
					<pre rel="Markdown"><code markup="tt" class="language-markup">&lt;button class="submit" value="submit">
						&lt;svg>&lt;/svg>
					&lt;/button></code></pre>
					<p>What I ended up playing around with for a little while however was the effects you can use with this text. First and foremost, you can play with the styles in your css file by using something like in this example:</p>
					<pre><code class="language-css">input::-webkit-input-placeholder {
						color: #ABABAB;
						font-size: 16px;
						padding: 5px 0 0 10px;
					}</code></pre>
					<p>What really bothers me about web forms is when the placeholder text does not disappear after clicking on the input or textarea.  Having the text remain until a person begins to type may cause confusion in someone who is not as familiar with using the web (e.g. the elderly).  So how did I do it?</p>
					<pre><code class="language-css">input:focus::-webkit-input-placeholder {
						opacity: 0;
						transition: opacity 0.2s 0.2s linear;
					}</code></pre>
					<p>The transition property in the above code was something I picked up from this <a href="http://css-tricks.com/hang-on-placeholders/">post</a> by Chris Coyier and I think it is a fair compromise.  The text doesn’t disappear immediately upon clicking, but also will not remain their waiting for the visitor to begin typing.</p>
					<h3>2. The Submit Button</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla dignissimos quae exercitationem et, fuga cumque, quas ex libero blanditiis ducimus expedita hic doloribus ea laboriosam quasi quos. Ratione, adipisci suscipit!</p>
					<img src="images/content/feature-img-v2.png" class="aligncenter" alt="">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem dolorem, doloribus quisquam nam ipsum vitae velit consectetur nobis illum itaque architecto odio cumque. Eius modi dolores, laudantium quos error deserunt!</p>
					<p>The standard submit button is rather ugly and comes with all these pre-supplied styles attached to it.  This is related to one such method of creating a button, which would involve using an input field and then attempting to style through it.  I did not like this method for the reason above and decided to go an alternative route.  The button tags!</p>
					<img src="images/content/post-img-v1.png" class="aligncenter" alt="">
					<p>Along with what I believe is a more accessible method for styling, I now can also use an <strong>SVG</strong> icon in place of the boring and unappealing “Submit” text that we have grown so accustomed to seeing.  Assign a class to your button, use the background css property to call for your icon, and then style away.</p>
					<p class="media-wrap">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/tymWDB7gtK4" frameborder="0" allowfullscreen></iframe>
					</p>  <!-- .media-wrap -->
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident nihil cumque asperiores nostrum tempore, quam nemo facilis maiores iusto deserunt eum veniam, possimus assumenda quis natus vitae dolorum et adipisci!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis ad, eos odit. Et veniam quos vel ipsum eos eum a molestiae, qui quam, perferendis quas, recusandae mollitia inventore optio quod.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed quis molestias esse. Vitae reprehenderit voluptate laudantium provident quasi magni id nulla error ut ipsum, ab, veniam, esse, aliquam tempora pariatur.</p>
					<p>As a favorite author of mine once said:</p>
					<blockquote>Twenty years from now you will be more disappointed by the things that you didn’t do than by the ones you did do, so throw off the bowlines, sail away from safe harbor, catch the trade winds in your sails.  Explore, Dream, Discover. –Mark Twain</blockquote>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos explicabo suscipit doloremque modi assumenda iusto! Distinctio optio perferendis soluta, omnis perspiciatis impedit fuga possimus, laborum est odit tempora deserunt autem.</p>
					<ul>
						<li><a href="#">Mercury</a></li>
						<li>Venus</li>
						<li>Earth</li>
						<li>Mars</li>
						<li>Jupiter</li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati animi, iusto alias nesciunt nostrum quae magni <code>background: url('../images/content/img.jpg') no-repeat;</code> molestias dignissimos ad tenetur voluptas at, reiciendis deserunt maxime et similique illum eligendi numquam.</p>
					<code>background: rgba( 248, 248, 248, 0.6);</code>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora reprehenderit optio repellendus ut quas totam ipsum nulla ratione culpa, vitae labore rem, pariatur architecto iure quaerat accusamus cum laudantium eum.</p>
				</div>  <!-- .single-blog-post   .post-styles-->

				<div class="blog-post-footer">
					<span class="blog-post-meta">
						<span>Tags: </span>
						<a href="#" rel="tag">Web Design, </a>
						<a href="#" rel="tag">Web Development, </a>
						<a href="#" rel="tag">Wordpress</a>
					</span>
				</div>
			</div>  <!-- .blog-post-container -->

			<section class="sidebar-nav-wrap">
				<div class="sidebar-nav">
					<ol class="categories-wrap">
						<div class="title-sidebar-wrap">
							<h2>Categories</h2>
							<span class="line-bar-after"></span>
						</div>
						<li><span>></span><a href="category.php">Web Development</a></li><br>
						<li><span>></span><a href="category.php">Mathematics</a></li><br>
						<li><span>></span><a href="category.php">Social</a></li><br>
						<li><span>></span><a href="category.php">Film</a></li><br>
					</ol>
					<ol class="recent-post-wrap">
						<div class="title-sidebar-wrap">
							<h2>Blog Posts</h2>
							<span class="line-bar-after"></span>
						</div>
						<li><span>></span><a href="category.php">Some Handy Code Pieces</a></li><br>
						<li><span>></span><a href="category.php">Helpful Things to know about Contact Forms</a></li><br>
						<li><span>></span><a href="category.php">A Small (but Incredibly Handy) Sublime Text Setting</a></li><br>
						<li><span>></span><a href="category.php">How Can Cache Affect You?</a></li><br>
						<li><span>></span><a href="category.php">Web Fundamentals</a></li><br>
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