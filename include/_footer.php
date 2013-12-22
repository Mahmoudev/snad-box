<?php require_once('config.php'); ?>

<!--<div id="bg"><img src="http://lorempixel.com/1920/1080/technics/" alt="" width="800" height="600" /></div>-->
<div id="bg"><img src="assets/images/bgs/bg-01.jpg" alt="" width="800" height="600" /></div>


<div class="JS">
	<script src="assets/js/01-jquery.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script>$(window).load(function() {$("#status").fadeOut();$("#preloader").delay(350).fadeOut("slow");})</script>


<?php
if ( $compress == "yes" ) {
echo '

	<script src="assets/js/plugins.min.js?v=1.1"></script>

';
} else {
echo '

	<!--<script src="assets/js/02-api-gmap.js"></script>-->

	<script src="assets/js/02-cycle2.js"></script>

	<script src="assets/js/02-debouncedResize.js"></script>

	<script src="assets/js/02-gmap3.js"></script>

	<script src="assets/js/02-jqueryEasing.js"></script>

	<script src="assets/js/02-prettyPhoto.js"></script>

	<script src="assets/js/02-scrollUp.js"></script>

	<script src="assets/js/03-parsley.js"></script>

	<script src="assets/js/03-localScroll.js"></script>

	<script src="assets/js/03-onePageNav.js"></script>

	<script src="assets/js/03-scrollTo.js"></script>

	<script src="assets/js/04-flexslider.js"></script>

	<script src="assets/js/04-fullscreen.js"></script>

	<script src="assets/js/04-isotope.js"></script>

	<script src="assets/js/04-appear.js"></script>

	<script src="assets/js/04-smoothScroll.js"></script>

	<script src="assets/js/04-ajaxml.js"></script>

	<script src="assets/js/04-ajaxml-hashchange.js"></script>

	<script src="assets/js/10-main.js"></script>

	';
	}
?>


<!--
	<script>
		var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
		g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
		s.parentNode.insertBefore(g,s)}(document,"script"));
	</script>
-->

<!--
	<script>gohome();</script>
-->

</div><!-- end JS -->

</body>
</html>
