<?php

	/*
		Template Name: About
	*/

?>

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

		<div class="main-container bio-landing">
			<section class="about-container">
				<div class="cont-about tint">
					<div class="wrapper">
						<div class="thoughts">
						</div>  <!-- .thoughts -->
					</div>  <!-- .wrapper -->
				</div>  <!-- .cont-about -->
			</section>  <!-- .about-container -->



			<div class="landing-error">
				<section class="wrong-page">
					<h2 class="entry-title">"Oops!  The page you are looking for is not here."</h2>
					<p>Please try refreshing the browser or navigating back to another page.</p>
					<div class="lost-icon">
						<img src="images/svg/error.svg" alt="icon for blog" class="icon">
					</div>
				</section><!-- .error-404 -->
			</div>



		<?php include("parts/footer.php"); ?>
	</body>
</html>