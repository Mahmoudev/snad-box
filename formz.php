<?php $menupage="home"; include("includes/_header.php");?>
<body>

<div style="background:#fff; padding:50px;">
	<!-- formz-->
	<form class="animated formz" action="">
		<fieldset>
			<legend>Legend</legend>
			<div class="col-1-1">
				<label>Field Label <em class="animated formz-req">*</em></label>
				<input class="animated" type="text" value="Fill up the field"/>
			</div>
			<div class="col-1-1">
				<label>Field Label <em class="animated formz-req">*</em></label>
				<textarea class="animated" rows="" cols=""></textarea>
			</div>
			<div class="col-1-1">
				<label>Field Label <em class="animated formz-req">*</em></label>
				<input type="text" class="animated formz-small" value="Fill up the field"/>
				<input type="text" class="animated formz-medium" value="Fill up the field"/>
				<input class="animated btn" type="submit" title="Send" value="Send"/>
			</div>
			<div class="col-1-1">
				<label>Field Label <em class="animated formz-req">*</em></label>
				<input type="text" class="animated formz-small" value="Fill up the field"/>
				<select class="animated formz-small">
					<option>Select</option>
					<option>Select</option>
					<option>Select</option>
				</select>
			</div>
			<div class="col-1-1">
				<label>Field Label <em class="animated formz-req">*</em></label>
				<select class="animated formz-small">
					<option>Select</option>
					<option>Select</option>
					<option>Select</option>
				</select>
				<select class="animated formz-small">
					<option>Select</option>
					<option>Select</option>
					<option>Select</option>
				</select>
				<input class="animated btn" type="submit" title="Send" value="Send"/>
				<input class="animated btn" type="submit" title="Send" value="Send"/>
				<input class="animated btn" type="submit" title="Send" value="Send"/>
			</div>
			<div class="col-1-1">
				<label>Field Label <em class="animated formz-req">*</em></label>
				<input type="file" class="animated formz-small" value="Fill up the field"/>
			</div>



			<!-- borwse clone -->
			<div class="col-1-1 browse">
				<label>Field Label <em class="animated formz-req">*</em></label>
				<input type="file" class="animated formz-small input-01 hidden" value="Fill up the field"/>
				<input type="text" class="animated formz-small" value="" disabled/>
				<span class="btn browse-01">Browse</span>
			</div>



			<div class="col-1-1">
				<label>Field Label <em class="animated formz-req">*</em></label>
				<ul class="animated formz-list">
					<li><label><input name="checkbox-01" type="checkbox"/>Option 01</label></li>
					<li><label><input name="checkbox-01" type="checkbox"/>Option 02</label></li>
					<li><label><input name="checkbox-01" type="checkbox"/>Option 03</label></li>
					<li><label><input name="checkbox-01" type="checkbox"/>Option 04</label></li>
				</ul>
			</div>

			<div class="col-1-1">
				<label>Field Label <em class="animated formz-req">*</em></label>
				<ul class="animated formz-list">
					<li><label><input name="radio-01" type="radio"/>Option 01</label></li>
					<li><label><input name="radio-01" type="radio"/>Option 02</label></li>
					<li><label><input name="radio-01" type="radio"/>Option 03</label></li>
					<li><label><input name="radio-01" type="radio"/>Option 04</label></li>
				</ul>
			</div>

			<div class="col-1-1">
				<input class="animated right btn" type="submit" title="Send" value="Send"/>
			</div>

		</fieldset>
		<fieldset>
			<legend>4 columns col form system</legend>
			<div class="col-1-4">
				<label>1-4 <em class="animated formz-req">*</em></label>
				<input class="animated" type="text" value="Fill up the field"/>
			</div>
			<div class="col-1-4">
				<label>1-4 <em class="animated formz-req">*</em></label>
				<input class="animated" type="text" value="Fill up the field"/>
			</div>
			<div class="col-1-4">
				<label>1-4 <em class="animated formz-req">*</em></label>
				<input class="animated" type="text" value="Fill up the field"/>
			</div>
			<div class="col-1-4">
				<label>1-4 <em class="animated formz-req">*</em></label>
				<input class="animated" type="text" value="Fill up the field"/>
			</div>
			<div class="col-1-4">
				<label>1-4 <em class="animated formz-req">*</em></label>
				<input class="animated" type="text" value="Fill up the field"/>
			</div>
			<div class="col-1-4">
				<label>1-4 <em class="animated formz-req">*</em></label>
				<input class="animated" type="text" value="Fill up the field"/>
			</div>
			<div class="col-1-4">
				<label>1-4 <em class="animated formz-req">*</em></label>
				<input class="animated" type="text" value="Fill up the field"/>
			</div>
			<div class="col-1-4">
				<label>1-4 <em class="animated formz-req">*</em></label>
				<input class="animated" type="text" value="Fill up the field"/>
			</div>
			<div class="col-1-4">
				<label>1-4 <em class="animated formz-req">*</em></label>
				<input class="animated" type="text" value="Fill up the field"/>
			</div>
			<div class="col-1-4">
				<label>1-4 <em class="animated formz-req">*</em></label>
				<input class="animated" type="text" value="Fill up the field"/>
			</div>
			<div class="col-1-4">
				<label>1-4 <em class="animated formz-req">*</em></label>
				<input class="animated" type="text" value="Fill up the field"/>
			</div>
			<div class="col-1-4">
				<label>1-4 <em class="animated formz-req">*</em></label>
				<input class="animated" type="text" value="Fill up the field"/>
			</div>
		</fieldset>
		<fieldset>
			<legend>Message box</legend>
			<div class="animated formz-msg-info">
				<i class="animated fontawesome-exclamation-sign left"></i>
				<h5>Information Message</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
			</div>
			<div class="animated formz-msg-warning">
				<i class="animated fontawesome-warning-sign left"></i>
				<h5>Warning Message</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
			</div>
			<div class="animated formz-msg-error">
				<i class="animated fontawesome-remove left"></i>
				<!-- <h5>Error Message</h5> -->
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
			</div>
			<div class="animated formz-msg-success">
				<i class="animated fontawesome-ok left"></i>
				<h5>Success Message</h5>
				<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p> -->
			</div>
		</fieldset>
		<fieldset>
			<legend>Example of form using Message Box (single)</legend>
			<div class="animated formz-msg-error">
				<h5>Please enter a valid <strong>E-Mail ID</strong>.</h5>
			</div>
			<div class="col-1-1">
				<label>Login<em class="animated formz-req">*</em></label>
				<input type="text" class="animated formz-error" value="Fill up the field"/>
			</div>
		</fieldset>
		<fieldset>
			<legend>Example of form using Message Box (summary)</legend>
			<div class="animated formz-msg-error">
				<h5>Can you fix please?</h5>
				<ul>
					<li>Please enter a valid <strong>E-Mail ID</strong>.</li>
					<li>Please enter a valid <strong>Password</strong>.</li>
				</ul>
			</div>
			<div class="col-1-2">
				<label>Login<em class="animated formz-req">*</em></label>
				<input type="text" class="animated formz-error" value="Fill up the field"/>
			</div>
			<div class="col-1-2">
				<label>Password <em class="animated formz-req">*</em></label>
				<input type="text" class="animated formz-error" value="Fill up the field"/>
			</div>
		</fieldset>
		<fieldset>
			<legend>Login or Register</legend>
			<div class="animated login">
				<div class="col-1-1">
					<label>Login<em class="animated formz-req">*</em></label>
					<input class="animated" type="text" value="Fill up the field"/>
				</div>
				<div class="col-1-1 clear">
					<label>Password <em class="animated formz-req">*</em></label>
					<input class="animated" type="password" value="Fill up the field"/>
				</div>
				<div class="col-1-1 clear">
					<ul class="animated formz-list">
						<li><label><input name="checkbox-01" type="checkbox"/>Keep me signed in for today. Don't check this box if you're at a public or shared computer.</label></li>
						<li><label><input name="checkbox-01" type="checkbox"/>I may receive communications from Project and can change my notification preferences in My Project.</label></li>
					</ul>
				</div>
				<div class="col-1-2">
					<input class="animated left btn" type="submit" title="Send" value="Send"/>
				</div>
			</div>
		</fieldset>
		<fieldset>
			<legend>Add user</legend>
			<div class="col-1-1">
				<label>Name or Email <em class="animated formz-req">*</em></label>
				<input type="text" class="animated formz-medium" value="Fill up the field"/>
				<input class="animated btn" type="submit" title="add" value="add"/>
			</div>
		</fieldset>
		<fieldset>
			<legend>Create an account</legend>
			<div class="col-1-1">
				<label>E-mail Address <em class="animated formz-req">*</em></label>
				<input class="animated" type="text" value="Fill up the field"/>
			</div>
			<div class="col-1-3 clear">
				<label>Nickname</label>
				<input class="animated" type="text" value="Fill up the field"/>
			</div>
			<div class="col-1-3">
				<label>First Name <em class="animated formz-req">*</em></label>
				<input class="animated" type="text" value="Fill up the field"/>
			</div>
			<div class="col-1-3">
				<label>Last Name <em class="animated formz-req">*</em></label>
				<input class="animated" type="text" value="Fill up the field"/>
			</div>
			<div class="col-1-2 clear">
				<label>Password <em class="animated formz-req">*</em></label>
				<input class="animated" type="text" value="Fill up the field"/>
			</div>
			<div class="col-1-2">
				<label>Confirm Password <em class="animated formz-req">*</em></label>
				<input class="animated" type="text" value="Fill up the field"/>
			</div>
			<div class="col-1-2 clear">
				<ul class="animated formz-list">
					<li><label><input name="checkbox-01" type="checkbox"/>Join our weekly specials newsletter.</label></li>
				</ul>
			</div>
			<div class="col-1-2">
				<input class="animated right btn" type="submit" title="Create" value="Create"/>
			</div>
		</fieldset>
		<fieldset>
			<legend>Contact us</legend>
			<div class="col-1-3">
				<label>Reason for contact</label>
				<select>
					<option>Please select one</option>
					<option>Select</option>
					<option>Select</option>
				</select>
			</div>
			<div class="col-1-3">
				<label>Your name <em class="animated formz-req">*</em></label>
				<input class="animated" type="text" value="Fill up the field"/>
			</div>
			<div class="col-1-3">
				<label>Your e-mail address <em class="animated formz-req">*</em></label>
				<input class="animated" type="text" value="Fill up the field"/>
			</div>
			<div class="col-1-1">
				<label>Subject <em class="animated formz-req">*</em></label>
				<input class="animated" type="text" value="Fill up the field"/>
			</div>
			<div class="col-1-1 clear">
				<label>Please type your message below <em class="animated formz-req">*</em></label>
				<textarea class="animated" name="" id="" cols="30" rows="10"></textarea>
			</div>
			<div class="col-1-1">
				<input class="animated right btn" type="submit" title="Send" value="Send"/>
			</div>
		</fieldset>
	</form>
	<!-- formz-->
</div>
<!--- end content -->
</section>

</div>
<?php include("includes/_footer.php");?>