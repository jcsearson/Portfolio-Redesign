<?php include("parts/doctype.php"); ?>

	<body>
		<!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


		<div class="head-container">
				<div class="head-wrap">
					<?php include("parts/header.php"); ?>

					<?php include("parts/nav.php"); ?>
				</div>  <!-- .head-wrap -->
		</div>  <!-- .head-container -->

		<div class="main-container">
			<section class="about-container">
				<div class="cont-about tint">
					<div class="wrapper">
						<div class="thoughts">
							<p></p>
						</div>  <!-- .thoughts -->
					</div>  <!-- .wrapper -->
				</div>  <!-- .cont-about -->
			</section>  <!-- .about-container -->



			<div class="blog-post-container">
				<div class="blog-title">
					<h2>Helpful Things to know about Contact Forms</h2>
					<h3>Published by James Searson on February 3, 2015</h3>
				</div>  <!-- .blog-title -->
				<div class="single-blog-post post-styles">
					<p>I was redesigning the contact portion of my portfolio site today, and as per usual spent quite <em>a bit of time googling and searching things</em> to get the form jusssst right.  Here are a few of the things I incorporated into the final product:</p>
					<h2>1.  Placeholder Text h2</h2>
					<h3>1.  Placeholder Text h3</h3>
					<h4>1.  Placeholder Text h4</h4>
					<h5>1.  Placeholder Text h5</h5>
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
					<img src="images/content/baltimore.jpg" class="aligncenter" alt="">
					<p>The standard submit button is rather ugly and comes with all these pre-supplied styles attached to it.  This is related to one such method of creating a button, which would involve using an input field and then attempting to style through it.  I did not like this method for the reason above and decided to go an alternative route.  The button tags!</p>
					<img src="images/content/james.png" class="aligncenter" alt="">
					<p>Along with what I believe is a more accessible method for styling, I now can also use an <strong>SVG</strong> icon in place of the boring and unappealing “Submit” text that we have grown so accustomed to seeing.  Assign a class to your button, use the background css property to call for your icon, and then style away.</p>
					<p class="media-wrap">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/tymWDB7gtK4" frameborder="0" allowfullscreen></iframe>
					</p>  <!-- .media-wrap -->
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident nihil cumque asperiores nostrum tempore, quam nemo facilis maiores iusto deserunt eum veniam, possimus assumenda quis natus vitae dolorum et adipisci!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis ad, eos odit. Et veniam quos vel ipsum eos eum a molestiae, qui quam, perferendis quas, recusandae mollitia inventore optio quod.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed quis molestias esse. Vitae reprehenderit voluptate laudantium provident quasi magni id nulla error ut ipsum, ab, veniam, esse, aliquam tempora pariatur.</p>
					<ul>
						<li><a href="#">Mercury</a></li>
						<li>Venus</li>
						<li>Earth</li>
						<li>Mars</li>
						<li>Jupiter</li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati animi, iusto alias nesciunt nostrum quae magni molestias dignissimos ad tenetur voluptas at, reiciendis deserunt maxime et similique illum eligendi numquam.</p>
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

			<div class="blog-comment-container">
				<h2 class="strikethrough comment-heading"><span>Comments</span></h2>
				<div class="single-comment post-styles">
					<div class="user-meta-data">
						<h3>Matt edwards</h3>
						<h4>Published:  January 21, 2015</h4>

					</div>  <!-- .user-meta-data -->
					<p>Hey Chris,  <br><br>Just a heads up. I’m not sure where the issue lies but I can’t get the video embed to play in chrome on an iPad. It just doesn’t respond to touch.</p>
					<a class="comments-reply-link" href="#">Reply</a>
					<section class="reply-wrap">
						<div class="comment-reply">
							<div class="user-meta-data">
								<h3>Chris Coyier</h3>
								<h4>Published:  January 21, 2015</h4>

							</div>  <!-- .user-meta-data -->
							<p>It’s just a YouTube embed, so I dunno. Do other YouTube embeds work for you? I’m burying this just because it doesn’t have anything to do with the content for this video, but we can keep talking it out if you like.</p>
						</div>  <!-- .comment-reply -->
					</section>  <!-- reply-wrap -->
					<section class="reply-wrap">

						<div class="comment-reply">
							<div class="user-meta-data">
								<h3>Todd</h3>
								<h4>Published:  January 27, 2015</h4>

							</div>  <!-- .user-meta-data -->
							<p>Same here. On Safari iPhone 6</p>
						</div>  <!-- .comment-reply -->
					</section>  <!-- .reply-wrap -->
				</div>  <!-- .single-comment   .post-styles -->
				<div class="single-comment post-styles">
					<div class="user-meta-data">
						<h3>shaneisme</h3>
						<h4>Published:  January 27, 2015</h4>

					</div>  <!-- .user-meta-data -->
					<p>You should get posts once, and then split them after so you only have one query :)</p>
					<a class="comments-reply-link" href="#">Reply</a>
				</div><!-- .single-comment   .post-styles -->
				<div class="single-comment post-styles">
					<div class="user-meta-data">
						<h3>Vitor Melo</h3>
						<h4>Published:  January 29, 2015</h4>

					</div><!-- .user-meta-data -->
					<p>ACF is very userful. I don’t live without it in my projects, thanks for video Chris.</p>
					<a class="comments-reply-link" href="#">Reply</a>
				</div><!-- .single-comment   .post-styles -->
				<div class="single-comment post-styles">
					<div class="user-meta-data">
						<h3>Vitor Melo</h3>
						<h4>Published:  January 29, 2015</h4>

					</div>  <!-- .user-meta-data -->
					<p>I like to plugin Types too (<a href="https://wordpress.org/plugins/types/screenshots/">https://wordpress.org/plugins/types/screenshots/</a>). This plugin combine, CTP with Custom Fields.</p>
					<a class="comments-reply-link" href="#">Reply</a>
				</div>  <!-- .single-comment   .post-styles -->
			</div>  <!-- .blog-comment-container -->



			<div class="user-comments">
				<form action="wp-comments-post.php" method="post" class="comment-form">
					<h2 class="title-comments-form">Leave a Reply</h2>

					<div class="input-comments">
						<span class="first-span">
							<input
								class="comment-field1"
								name="first_name"
								type="text"
								value=""
								tabindex="1"
								placeholder="First Name"		/>
						</span>
						<span>
							<input
								class="comment-field2"
								name="last_name"
								type="text"
								value=""
								tabindex="2"
								placeholder="Last Name"		/>
						</span>
						<div class="email-box">
							<input
								class="comment-field3"
								name="email"
								type="email"
								spellcheck="false"
								class="field text medium"
								value=""
								maxlength="255"
								tabindex="3"
								placeholder="Email   ( hidden )"       />
						</div>
						<div class="msg-box">
							<textarea
								class="comment-field4"
								name="message"
								class="field textarea small"
								spellcheck="true"
								rows="10" cols="50"
								tabindex="4"
								onkeyup=""
								placeholder="Message"
							       ></textarea>
						</div>
						<div class="submit-comment-button">
							<button name="saveForm" class="submit" type="submit" value="Post" tabindex="5">
								<div class="submit-icon-wrap">
									<h3>Post</h3>
								</div>  <!-- .submit-icon-wrap -->
							</button>  <!-- .submit -->
						</div>  <!-- .submit-button -->
					</div>
				</form>
			</div>



			<section class="contact-form">
				<div class="my-social">
					<ul class="foot-social">
						<li class="foot-list-item">
							<div class="foot-connect right-connect"></div>
						</li>  <!-- .foot-list-item -->
						<li class="foot-list-item"><a href="https://www.facebook.com/james.searson.7">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" class="foot-icon facebook" x="0px" y="0px" viewBox="-49 141 512 512" enable-background="new -49 141 512 512" xml:space="preserve"><path class="outer-icon" d="M207 141C65.6 141-49 255.6-49 397S65.6 653 207 653s256-114.6 256-256S348.4 141 207 141z M207 613 C87.7 613-9 516.3-9 397s96.7-216 216-216s216 96.7 216 216S326.3 613 207 613z"/><path class="inner-icon" d="M267.8 357.8h-44.5v-32.5c0-10 10.3-12.3 15.1-12.3c4.8 0 28.8 0 28.8 0v-43.9l-33-0.2 c-45 0-55.2 32.7-55.2 53.7v35.1h-32.6V403h32.6c0 58 0 122 0 122h44.3c0 0 0-64.6 0-122h37.7L267.8 357.8z"/></svg>
									<div class="fallback"></div>
						</a></li>  <!-- .foot-list-item -->
						<li class="foot-list-item">
							<div class="foot-connect"></div>
						</li>  <!-- .foot-list-item -->
						<li class="foot-list-item"><a href="https://twitter.com/GreatSearsino">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" class="foot-icon twitter" x="0px" y="0px" viewBox="-49 141 512 512" enable-background="new -49 141 512 512" xml:space="preserve"><path class="outer-icon" d="M207 141C65.6 141-49 255.6-49 397c0 141.4 114.6 256 256 256c141.4 0 256-114.6 256-256 C463 255.6 348.4 141 207 141z M207 613C87.7 613-9 516.3-9 397c0-119.3 96.7-216 216-216c119.3 0 216 96.7 216 216 C423 516.3 326.3 613 207 613z" class="style0"/><path class="inner-icon" d="M335 311.9c-4.3 2.6-17.2 7.7-29.3 9c7.7-4.5 19.2-19.2 22-30.9c-7.4 5.1-24.5 12.6-33 12.6c0 0 0 0 0 0 c-9.6-10.8-23.2-17.6-38.2-17.6c-29.2 0-52.8 25.5-52.8 56.9c0 4.4 0.5 8.6 1.4 12.7h0c-39.6-1.1-85.8-22.4-111.9-59 c-16 29.9-2.2 63 16 75.1c-6.2 0.5-17.7-0.8-23.1-6.4c-0.4 19.8 8.5 46 40.7 55.6c-6.2 3.6-17.2 2.6-22 1.8 c1.7 16.8 23.4 38.6 47.2 38.6c-8.5 10.5-37.4 29.7-73.1 23.6c24.3 15.9 52.6 25.2 82.6 25.2c85.2 0 151.4-74.4 147.8-166.1 c0-0.1 0-0.2 0-0.3c0-0.2 0-0.5 0-0.7c0-0.3 0-0.6 0-0.9C317.1 335.3 327.5 325.2 335 311.9z" class="style0"/></svg>
									<div class="fallback"></div>
						</a></li>  <!-- .foot-list-item -->
						<li class="foot-list-item">
							<div class="foot-connect"></div>
						</li>  <!-- .foot-list-item -->
						<li class="foot-list-item"><a href="https://www.linkedin.com/profile/view?id=350320926&trk=spm_pic">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" class="foot-icon linkedin" x="0px" y="0px" viewBox="-49 141 512 512" enable-background="new -49 141 512 512" xml:space="preserve"><path class="outer-icon" d="M207 141C65.6 141-49 255.6-49 397S65.6 653 207 653s256-114.6 256-256S348.4 141 207 141z M207 613 C87.7 613-9 516.3-9 397s96.7-216 216-216s216 96.7 216 216S326.3 613 207 613z" class="style0"/><g><g><path class="inner-icon" d="M79.1 524.9h48v-192h-48V524.9z M271.1 332.9c-41.1 0.7-61.3 30.6-64 32v-32h-48v192h48v-112 c0-4.1 10.1-37 48-32c20.3 1.3 31.3 28.2 32 32v112l47.8 0.2V392.2C333.2 373 323.6 333.6 271.1 332.9z M103.1 268.9 c-13.2 0-24 10.7-24 24s10.8 24 24 24s24-10.7 24-24S116.3 268.9 103.1 268.9z" class="style0"/></g></g></svg>
									<div class="fallback"></div>
						</a></li>  <!-- .foot-list-item -->
						<li class="foot-list-item">
							<div class="foot-connect left-connect"></div>
						</li>  <!-- .foot-list-item -->
					</ul>  <!-- .foot-social -->
				</div>  <!-- .my-social -->
			</section>  <!-- .contact-form -->


			<?php include("parts/footer.php"); ?>
		</div>  <!-- .main-container -->
	</body>
</html>