
<?php
/*
 * Template Name:  1 column no slideshow
 * Description: Page template without sidebar
 */
?>

		<?php get_template_part('page-templates/head_html'); ?>

	<body <?php body_class( ); ?> >
		<div class="container">

			<!-- 1) header-->
			<header>
				<div class="row">
					<div class=" col-xs-12 col-lg-12 col-md-12 col-sm-12">

						<section class="site-title" >
							<?php echo '<p><a href="'; the_permalink();echo '">'; bloginfo('title');echo '</a></p><br/>'; ?>
							<?php echo '<a href="'; the_permalink();echo '">'; bloginfo('description');echo '</a>'; ?>

						</section>
						<br/>

						<section class="banner col-xs-12 col-lg-12 col-md-12 col-sm-12" >
	                    	<?php dynamic_sidebar('banner'); ?>
						</section>
						<br/>

						<section class="nav" >
							<nav ><?php wp_nav_menu(array('theme_location'=>'Primary') ); ?></nav>
						</section>
						<br/>
						<br/>

					</div>
				</header>
				<!-- 2 ) main -->
				<div class="main">
					<div class="row">

						<!-- 2-1 ) page part -->
						<div class="page">
							<div class=" col-xs-12 col-lg-12 col-md-12 col-sm-12 ">

								<?php get_template_part('page-templates/main_page'); ?>

							</div>
						</div>
						<!-- end page part -->   


					</div>
					<!--End Row -->
				</div>
				<!--End main -->
				<br>
				<!-- 3 ) footer-->
				<footer>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<br/>
							<?php get_footer(); ?>
						</div>
					</div>
				</footer>
				<!-- End footer-->

			</div>
			<!-- End Container-->
			<?php get_template_part('page-templates/script'); ?>

	<!--script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.11.4/themes/ui-darkness/jquery-ui.css"></script-->
		</body>
		</html>