<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>THeme for magazine</title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/node_modules/normalize.css/normalize.css">
</head>
<body>
	<div class="container">
		<div class="isi">
			<header>
				<div class="logo">

				</div>
				<div class="nav">
					<!-- <ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="">House</a></li>
						<li><a href="">Beauty</a></li>
						<li><a href="">Fashion</a></li>
						<li><a href="">Health</a></li>
						<li><a href="">Travelling</a></li>
					</ul> -->
					<?php wp_nav_menu(array('theme_location'=>'top-menu')); ?>
				</div>
			</header>