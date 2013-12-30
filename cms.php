<!---------------------------------------------------
// Syntax
---------------------------------------------------->

<div id="core-about" class="editable">
	<p>Your content goes here</p>
</div>


<!-- orce plain-text editing -->
<div id="core-about" class="editable-text">
	<p>Your content goes here</p>
</div>




<!---------------------------------------------------
// Repeatable Regions
---------------------------------------------------->

<!-- Repeatable Regions good for (articles, event listings, photo galleries, or anything else that has a dynamic number of items requiring the same HTML structure)-->
<!-- Repeatable regions should not contain id attributes -->

<div id="core-about" class="editable">
	<div class="repeatable">
		<h1>Article Title</h1>
		<p class="article-date">Posted on August 20, 2010</p>
		<p>Lorem ipsum dolor sit amet...</p>
	</div>
</div>







<!---------------------------------------------------
// Disable javascript in the CMS
---------------------------------------------------->

<!--cms-disable-->
<script>alert('This will alert on the site but not in the CMS');</script>
<!--/cms-disable-->



<script>
if(window.isCMS ) {
	alert('Page is being rendered in the CMS');
}
</script>



<meta name="is-cms" content="true" />

<script type="text/javascript">
	if( $('META[name=is-cms]').attr('content') === 'true' ) {
	    // Page is being rendered in the CMS
	} else {
	    // Page is NOT being rendered in the CMS
	}
</script>
