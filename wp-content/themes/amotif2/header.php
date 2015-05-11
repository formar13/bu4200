<!DOCTYPE html>

<html>

	<head>

		<meta charset="utf-8">
		<title>Åmot Idrettsforening</title>

		<meta name="description" content="Hjemmesiden til Åmot idrettsforening. Åmot IF driver med fotball, håndball, boksing, alpint og ski.">
		<meta name="keywords" content="Åmot, IF, Idrettsforening, Fotball, Håndball, Boksing, Alpin, Ski">
		<meta name="author" content="Fredrik Gabrielsen">

		<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url')?>/favicon/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url')?>/favicon/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url')?>/favicon/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url')?>/favicon/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url')?>/favicon/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url')?>/favicon/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url')?>/favicon/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url')?>/favicon/apple-touch-icon-152x152.png">
		<link rel="icon" type="image/png" href="<?php bloginfo('template_url')?>/favicon/favicon-160x160.png" sizes="160x160">
		<link rel="icon" type="image/png" href="<?php bloginfo('template_url')?>/favicon/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="<?php bloginfo('template_url')?>/favicon/favicon-16x16.png" sizes="16x16">
		<link rel="icon" type="image/png" href="<?php bloginfo('template_url')?>/favicon/favicon-32x32.png" sizes="32x32">

		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/mstile-144x144.png">

		<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>">
		<script language="javascript" type="text/javascript" src="<?php bloginfo('template_url')?>/js/jquery-1.11.0.min.js"></script>

		<?php wp_head(); ?>

	</head>

	<body>

		<div id="totalWrap">

			<header>

				<div id="headerWrap">

					<img src="<?php bloginfo('template_url')?>/img/logo<?php $category=get_the_category(); echo $category[0]->cat_name; ?>.png" alt="Logo" height="110px">

					<nav>

						<ul>

							<?php wp_nav_menu(); ?>

						</ul>

					</nav>

				</div> <!-- headerWrap -->

			</header>