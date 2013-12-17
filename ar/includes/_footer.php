<div id="copy">© 2013 Regulation & Supervision Bureau, All rights reserved</div>
</div><!-- end main -->

<!--<div id="bg"><img src="http://lorempixel.com/1920/1080/technics/" alt="" width="800" height="600" /></div>-->
<div id="bg"><img src="../assets/images/bgs/bg-01.jpg" alt="" width="800" height="600" /></div>

<div class="JS">
	
	<script src="../assets/js/libs/jquery.js"></script>

	<script>
		$(window).load(function() {
			$("#status").fadeOut();
			$("#preloader").delay(350).fadeOut("slow");
		})
	</script>

	<script src="../assets/js/libs/jqueryEasing.js"></script>

	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
	<script src="../assets/js/libs/gmap3.js"></script>

	<script src="../assets/js/libs/nav.js"></script>

	<script src="../assets/js/libs/cycle2.js"></script>

	<script src="../assets/js/libs/appear.js"></script>

	<script src="../assets/js/libs/debouncedResize.js"></script>	

	<script src="../assets/js/libs/smoothScroll.js"></script>

	<script src="../assets/js/libs/fullscreen.js"></script>

	<script src="../assets/js/libs/cssParentSelector.js"></script>

	<script src="../assets/js/libs/prettyPhoto.js"></script>

	<script src="../assets/js/libs/scrollTo.js"></script>

	<script src="../assets/js/libs/localScroll.js"></script>

	<script src="../assets/js/libs/scrollUp.js"></script>
	
	<script src="../assets/js/libs/isotope.js"></script>
	
<?php
	if ( $compress == "yes" ) {
	echo '
	<script src="../assets/js/custom.min.js"></script>
	';
	} else {
	echo '
	<script src="../assets/js/custom.js"></script>
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
