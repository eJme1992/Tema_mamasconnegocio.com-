<?php
/**
 * @package WordPress
 * @subpackage ID-Peru-Theme-Wordpress
 * @since HTML5 ID 2.0
 */
?>
<footer id="footer">		
	<div class="container-fluid">
		<div class="row clearfix">
			<div class="col-md-12 text-center">		
			<h4>2017 COBRIT. Todos los derechos reservados</h4>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<!-- concatenate and minify for production -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css" />
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />

 <!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/_/css/bootstrap.min.css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Lea Verou's Prefix Free, lets you use only un-prefixed properties in yuor CSS files -->
<script src="<?php echo get_template_directory_uri(); ?>/_/js/prefixfree.min.js"></script>

<!-- This is an un-minified, complete version of Modernizr.
	 Before you move to production, you should generate a custom build that only has the detects you need. -->
<script src="<?php echo get_template_directory_uri(); ?>/_/js/modernizr-2.8.0.dev.js"></script>

<!-- jQuery is called via the WordPress-friendly way via functions.php -->

<!-- this is where we put our custom functions -->
<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php bloginfo('template_directory'); ?>/_/js/bootstrap.min.js"></script>

</body>

</html>
