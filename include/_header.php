<?php require_once('config.php'); ?>

<!doctype html>
<html lang="en">
<head>
	<title>Sandbox</title>
	<style>
		#preloader {
			position: fixed;
			top: 0; left: 0; right: 0; bottom: 0;
			background: #fff;
			z-index: 999999;
		}
			#preloader #status {
				width: 200px; height: 200px;
				position: absolute;
				left: 50%; top: 50%;
				background: url(assets/images/css/preload.gif) no-repeat center;
				margin: -100px 0 0 -100px;
			}
		#upgrade {
			position: fixed;
			top: 0; left: 0; right: 0; bottom: 0;
			background: #EAEDF1;
			z-index: 999999;
		}
			#upgrade #message {
				width: 100%;
				max-width: 1000px;
				margin: 0 auto;
			}
	</style>

	<!-- meta -->
	<meta charset="utf-8">
	<meta name="description" content="........................."/>
	<meta name="keywords" content="............................"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="author" content="Mahmoud Zadah"/>

	<!-- icons -->
	<link rel="shortcut icon" href="assets/images/icons/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="assets/images/icons/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="assets/images/icons/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="assets/images/icons/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/images/icons/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="assets/images/icons/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="assets/images/icons/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="assets/images/icons/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="assets/images/icons/apple-touch-icon-152x152.png" />

	<!-- MS tile icon -->
	<meta name="application-name" content="...." />
	<meta name="msapplication-TileColor" content="#000" />
	<meta name="msapplication-TileImage" content="assets/images/icons/ie-icon.png" />

	<!-- mobile viewport -->
	<meta id="viewport" name="viewport" content ="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- CSS -->
	<link href="assets/fonts/fontawesome.css" rel="stylesheet" media="all">


<?php
	if ( $compress == "yes" ) {
	echo '

	<link href="assets/css/style.min.css?v=1.1" rel="stylesheet" media="all">

	';
	} else {
	echo '

	<link href="assets/css/01-reset.css" rel="stylesheet" media="all">
	<link href="assets/css/02-plugins.css" rel="stylesheet" media="all">
	<link href="assets/css/03-grid.css" rel="stylesheet" media="all">
	<link href="assets/css/04-base.css" rel="stylesheet" media="all">
	<link href="assets/css/05-formz.css" rel="stylesheet" media="all">
	<link href="assets/css/06-animations.css" rel="stylesheet" media="all">
	<link href="assets/css/07-fonts.css" rel="stylesheet" media="all">
	<link href="assets/css/08-main.css" rel="stylesheet" media="all">
	<link href="assets/css/10-mediaqueries.css" rel="stylesheet" media="all">

	';
	}
?>

	<!-- JS -->
	<script src="assets/js/01-modernizr.js"></script>

</head>