<?php require_once('../config.php'); ?> 


<!doctype html>
<html lang="en">
<head>
	<title>Page Title Here</title>
	<style>
	#preloader {
		position: fixed;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		background: #fff;
		z-index: 999999;
	}
	#status {
		width: 200px;
		height: 200px;
		position: absolute;
		left: 50%;
		top: 50%;
		background-image: url(../assets/images/css/preload.gif);
		background-repeat: no-repeat;
		background-position: center;
		margin: -100px 0 0 -100px;
	}
	</style>

	<!-- meta -->
	<meta charset="utf-8">
	<meta name="description" content="...">
	<meta name="keywords" content="..." />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Mahmoud Zadah"/>

	<!-- mobile viewport -->
	<meta id="viewport" name="viewport" content ="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- icons -->
	<link rel="shortcut icon" href="../assets/images/icons/favicon.ico?v=2" type="image/x-icon" />
	<link rel="apple-touch-icon" href="../assets/images/icons/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="../assets/images/icons/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="../assets/images/icons/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/images/icons/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="../assets/images/icons/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="../assets/images/icons/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="../assets/images/icons/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="../assets/images/icons/apple-touch-icon-152x152.png" />

	<!-- MS tile icon -->
	<meta name="application-name" content="...." />
	<meta name="msapplication-TileColor" content="#000" />
	<meta name="msapplication-TileImage" content="../assets/images/icons/ie-icon.png" />


	<!-- CSS libs -->
	<link href="../assets/css/libs/prettyPhoto.css" rel="stylesheet" media="all">

	<!-- CSS -->
<?php
	if ($compress == "yes") {
	echo '

	<link href="../assets/fonts/fontawesome.css" rel="stylesheet" media="all">
	<link href="../assets/css/01-normalize.min.css" rel="stylesheet" media="all">
	<link href="../assets/css/02-base.min.css" rel="stylesheet" media="all">
	<link href="../assets/css/03-global.min.css" rel="stylesheet" media="all">
	<!-- <link href="../assets/css/04-global-ar.min.css" rel="stylesheet" media="all"> -->
	<link href="../assets/css/09-mediaqueries.min.css" rel="stylesheet" media="all">
	<link href="../assets/css/10-print.min.css" rel="stylesheet" media="print">

	';
	} else {
	echo '

	<link href="../assets/fonts/fontawesome.css" rel="stylesheet" media="all">
	<link href="../assets/css/01-normalize.css" rel="stylesheet" media="all">
	<link href="../assets/css/02-base.css" rel="stylesheet" media="all">
	<link href="../assets/css/03-global.css" rel="stylesheet" media="all">
	<!-- <link href="../assets/css/04-global-ar.css" rel="stylesheet" media="all"> -->
	<link href="../assets/css/09-mediaqueries.css" rel="stylesheet" media="all">
	<link href="../assets/css/10-print.css" rel="stylesheet" media="print">

	';
	}
?>

	<!-- JS -->
	<script src="../assets/js/libs/modernizr.js"></script>
	<!-- enable Media Queries in browsers that don't support it -->
	<script src="../assets/js/libs/respond.js"></script>

</head>