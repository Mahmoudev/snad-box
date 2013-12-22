<?php //header("Location: en/index.php");die();?>

<?php $menupage="home"; include("include/_header.php");?>

<body>

<div id="preloader">
	<div id="status">&nbsp;</div>
</div>




<div id="menu">
	<input type="button" id="panLA" value="Pan To Los Angeles" />
	<input type="button" id="panLB" value="Pan To Long Beach"/>
</div>


<div id="googleMap" style="width:1280px;height:720px;"></div>




<?php include("include/_footer.php");?>

