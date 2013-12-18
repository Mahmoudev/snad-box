<?php $menupage="home"; include("includes/_header.php");?>
<body>
	<div style="background:#fff; padding:50px;">
		<!-- formz-->
		<form class="formz" action="" parsley-validate novalidate >
			<!-- form 1-->
			<fieldset>
				<legend>Form Sample 1</legend>

				<!-- row -->
				<div class="col-1-2">
					<label>First name<em class="animated formz-req">*</em></label>
					<input class="animated" type="text" name="" placeholder="Please enter your first name" required/>
				</div>
				<div class="col-1-2">
					<label>Last name<em class="animated formz-req">*</em></label>
					<input class="animated" type="text" name="" placeholder="Please enter your first name" required/>
				</div>

				<!-- row -->
				<div class="col-1-1">
					<label>Email<em class="animated formz-req">*</em></label>
					<input class="animated" type="text" name="" placeholder="email@example.com" required parsley-type="email"/>
				</div>

				<!-- row -->
				<div class="col-1-1">
					<label>Phone<em class="animated formz-req">*</em></label>
					<input class="animated" type="text" name="" placeholder="xxx-xxxx-xxxx" required parsley-type="phone">
				</div>

				<!-- row -->
				<div class="col-1-1">
					<label>Message</label>
					<textarea class="animated" rows="" cols=""></textarea>
				</div>

				<!-- row -->
				<div class="col-1-1">
					<button class="animated right btn" onclick="$(this).closest('form').parsley('validate');">Submit</button>
				</div>
			</fieldset>
		</form>




		<form class="formz" action="" parsley-validate novalidate >
			<!-- media request-->
			<fieldset>
				<legend>FORM SAMPLE 2</legend>

				<!-- row -->
				<div class="col-1-3">
					<label>Publishing date<em class="animated formz-req">*</em></label>
					<input class="animated" type="text" name="" placeholder="Fill up the field" required parsley-error-message="*** You must enter a name ***" parsley-error-container="#errors-box p"/>
				</div>
				<div class="col-1-3">
					<label>Publishing date<em class="animated formz-req">*</em></label>
					<input class="animated" type="text" name="" placeholder="Fill up the field" required parsley-error-message="*** You must enter a name ***" parsley-error-container="#errors-box p"/>
				</div>
				<div class="col-1-3">
					<label>Is it urgent?<em class="animated formz-req">*</em></label>
					<ul class="animated formz-list">
						<li><label><input name="radio-01" type="radio"/>Yes</label></li>
						<li><label><input name="radio-01" type="radio"/>No</label></li>
					</ul>
				</div>

				<!-- row -->
				<div id="errors-box" class="col-1-1">
					<div class="animated formz-msg-error">
						<i class="animated fontawesome-remove left"></i>
						<h5>Error</h5>
						<p></p>
					</div>
				</div>


				<!-- row -->
				<div class="col-1-1">
					<button class="animated left btn" onclick="$(this).closest('form').parsley('validate');">Submit</button>
				</div>
			</fieldset>
		</form>




		<form class="formz" action="" parsley-validate novalidate >
			<fieldset>
				<legend>Legend</legend>
				<div class="col-1-1">
					<label>Field Label <em class="animated formz-req">*</em></label>
					<input class="animated" type="text" name="" placeholder="Fill up the field"/>
				</div>
				<div class="col-1-1">
					<label>Field Label <em class="animated formz-req">*</em></label>
					<textarea class="animated" rows="" cols=""></textarea>
				</div>
				<div class="col-1-1">
					<label>Field Label <em class="animated formz-req">*</em></label>
					<input type="text" name="" class="animated formz-small" placeholder="Fill up the field"/>
					<input type="text" name="" class="animated formz-medium" placeholder="Fill up the field"/>
					<input class="animated btn" type="submit" title="Send" placeholder="Send"/>
				</div>
				<div class="col-1-1">
					<label>Field Label <em class="animated formz-req">*</em></label>
					<input type="text" name="" class="animated formz-small" placeholder="Fill up the field"/>
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
					<input class="animated btn" type="submit" title="Send" placeholder="Send"/>
					<input class="animated btn" type="submit" title="Send" placeholder="Send"/>
					<input class="animated btn" type="submit" title="Send" placeholder="Send"/>
				</div>
				<div class="col-1-1">
					<label>Field Label <em class="animated formz-req">*</em></label>
					<input type="file" class="animated formz-small" placeholder="Fill up the field"/>
				</div>



				<!-- borwse clone -->
				<div class="col-1-1 browse">
					<label>Field Label <em class="animated formz-req">*</em></label>
					<input type="file" class="animated formz-small input-01 hidden" placeholder="Fill up the field"/>
					<input type="text" name="" class="animated formz-small" placeholder="" disabled/>
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
					<input class="animated right btn" type="submit" title="Send" placeholder="Send"/>
				</div>

			</fieldset>
			<fieldset>
				<legend>4 columns col form system</legend>
				<div class="col-1-1">
					<label>1-1 <em class="animated formz-req">*</em></label>
					<input class="animated" type="text" name="" placeholder="Fill up the field"/>
				</div>




				<div class="col-1-2">
					<label>1-2 <em class="animated formz-req">*</em></label>
					<input class="animated" type="text" name="" placeholder="Fill up the field"/>
				</div>
				<div class="col-1-2">
					<label>1-2 <em class="animated formz-req">*</em></label>
					<input class="animated" type="text" name="" placeholder="Fill up the field"/>
				</div>


				<div class="col-1-3">
					<label>1-3 <em class="animated formz-req">*</em></label>
					<input class="animated" type="text" name="" placeholder="Fill up the field"/>
				</div>
				<div class="col-1-3">
					<label>1-3 <em class="animated formz-req">*</em></label>
					<input class="animated" type="text" name="" placeholder="Fill up the field"/>
				</div>
				<div class="col-1-3">
					<label>1-3 <em class="animated formz-req">*</em></label>
					<input class="animated" type="text" name="" placeholder="Fill up the field"/>
				</div>





				<div class="col-1-4">
					<label>1-4</label>
					<input class="animated" type="text" name="" placeholder=""/>
				</div>
				<div class="col-1-4">
					<label>1-4</label>
					<input class="animated" type="text" name="" placeholder=""/>
				</div>
				<div class="col-1-4">
					<label>1-4</label>
					<input class="animated" type="text" name="" placeholder=""/>
				</div>
				<div class="col-1-4">
					<label>1-4</label>
					<input class="animated" type="text" name="" placeholder=""/>
				</div>





				<div class="col-1-5">
					<label>1-5</label>
					<input class="animated" type="text" name="" placeholder=""/>
				</div>
				<div class="col-1-5">
					<label>1-5</label>
					<input class="animated" type="text" name="" placeholder=""/>
				</div>
				<div class="col-1-5">
					<label>1-5</label>
					<input class="animated" type="text" name="" placeholder=""/>
				</div>
				<div class="col-1-5">
					<label>1-5</label>
					<input class="animated" type="text" name="" placeholder=""/>
				</div>
				<div class="col-1-5">
					<label>1-5</label>
					<input class="animated" type="text" name="" placeholder=""/>
				</div>


				<div class="col-1-6">
					<label>1-6</label>
					<input class="animated" type="text" name="" placeholder=""/>
				</div>
				<div class="col-1-6">
					<label>1-6</label>
					<input class="animated" type="text" name="" placeholder=""/>
				</div>
				<div class="col-1-6">
					<label>1-6</label>
					<input class="animated" type="text" name="" placeholder=""/>
				</div>
				<div class="col-1-6">
					<label>1-6</label>
					<input class="animated" type="text" name="" placeholder=""/>
				</div>
				<div class="col-1-6">
					<label>1-6</label>
					<input class="animated" type="text" name="" placeholder=""/>
				</div>
				<div class="col-1-6">
					<label>1-6</label>
					<input class="animated" type="text" name="" placeholder=""/>
				</div>









			</fieldset>
			<fieldset>
				<legend>Message box</legend>
				<div class="col-1-1">
					<div class="animated formz-msg-info">
						<i class="animated fontawesome-exclamation-sign left"></i>
						<h5>Information Message</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
					</div>
				</div>
				<div class="col-1-1">
					<div class="animated formz-msg-warning">
						<i class="animated fontawesome-warning-sign left"></i>
						<h5>Warning Message</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
					</div>
				</div>
				<div class="col-1-1">
					<div class="animated formz-msg-error">
						<i class="animated fontawesome-remove left"></i>
						<!-- <h5>Error Message</h5> -->
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
					</div>
				</div>
				<div class="col-1-1">
					<div class="animated formz-msg-success">
						<i class="animated fontawesome-ok left"></i>
						<h5>Success Message</h5>
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p> -->
					</div>
				</div>
			</fieldset>
			<fieldset>
				<legend>Example of form using Message Box (single)</legend>
				<div class="col-1-1">
					<div class="animated formz-msg-error">
						<h5>Please enter a valid <strong>E-Mail ID</strong>.</h5>
					</div>
				</div>
				<div class="col-1-1">
					<label>Login<em class="animated formz-req">*</em></label>
					<input type="text" name="" class="animated formz-error" placeholder="Fill up the field"/>
				</div>
			</fieldset>
			<fieldset>
				<legend>Example</legend>
				<div class="col-1-2">
					<label>Login<em class="animated formz-req">*</em></label>
					<input type="text" name="" class="animated formz-error" placeholder="Fill up the field"/>
				</div>
				<div class="col-1-2">
					<label>Password <em class="animated formz-req">*</em></label>
					<input type="Password" name="Password" class="animated formz-error" placeholder="Fill up the field"/>
				</div>
				<div class="col-1-1">
					<div class="animated formz-msg-error">
						<h5>Can you fix please?</h5>
						<ul>
							<li>Please enter a valid <strong>E-Mail ID</strong>.</li>
							<li>Please enter a valid <strong>Password</strong>.</li>
						</ul>
					</div>
				</div>

				<div class="col-1-2">
					<input class="animated left btn" type="submit" title="Send" placeholder="Send"/>
				</div>

			</fieldset>
			<fieldset>
				<legend>Login or Register</legend>
				<div class="animated login">
					<div class="col-1-1">
						<label>Login<em class="animated formz-req">*</em></label>
						<input class="animated" type="text" name="" placeholder="Fill up the field"/>
					</div>
					<div class="col-1-1 clear">
						<label>Password <em class="animated formz-req">*</em></label>
						<input class="animated" type="Password" name="Password" placeholder="Fill up the field"/>
					</div>
					<div class="col-1-1 clear">
						<ul class="animated formz-list">
							<li><label><input name="checkbox-01" type="checkbox"/>Keep me signed in for today. Don't check this box if you're at a public or shared computer.</label></li>
							<li><label><input name="checkbox-01" type="checkbox"/>I may receive communications from Project and can change my notification preferences in My Project.</label></li>
						</ul>
					</div>
					<div class="col-1-2">
						<input class="animated left btn" type="submit" title="Send" placeholder="Send"/>
					</div>
				</div>
			</fieldset>
			<fieldset>
				<legend>News letter</legend>
				<div class="col-1-1">
					<label>Email <em class="animated formz-req">*</em></label>
					<input type="text" name="" class="animated formz-medium" placeholder="email@example.com"/>
					<input class="animated btn" type="submit" title="Add me to newsletter" placeholder="Add me to newsletter"/>
				</div>
			</fieldset>
			<fieldset>
				<legend>Create an account</legend>

				<div class="col-1-2">
					<label>First Name <em class="animated formz-req">*</em></label>
					<input class="animated" type="text" name="" placeholder="Fill up the field"/>
				</div>
				<div class="col-1-2">
					<label>Last Name <em class="animated formz-req">*</em></label>
					<input class="animated" type="text" name="" placeholder="Fill up the field"/>
				</div>
				<!-- row -->

				<div class="col-1-2">
					<label>E-mail Address <em class="animated formz-req">*</em></label>
					<input class="animated" type="text" name="" placeholder="Fill up the field"/>
				</div>
				<div class="col-1-2">
					<label>Confirm E-mail Address <em class="animated formz-req">*</em></label>
					<input class="animated" type="text" name="" placeholder="Fill up the field"/>
				</div>
				<!-- row -->

				<div class="col-1-2">
					<label>Password <em class="animated formz-req">*</em></label>
					<input class="animated" type="Password" name="Password" placeholder="Fill up the field"/>
				</div>
				<div class="col-1-2">
					<label>Confirm Password <em class="animated formz-req">*</em></label>
					<input class="animated" type="Password" name="Password" placeholder="Fill up the field"/>
				</div>
				<!-- row -->


				<div class="col-1-1">
					<label>Type what you see in the box<em class="animated formz-req">*</em></label>
					<input class="solid animated formz-small" type="text" name="" placeholder="1 + 5 =" disabled/>
					<input class="animated formz-small" type="text" name="" placeholder="Answer"/>
				</div>
				<!-- row -->


				<div class="col-1-1">
					<ul class="animated formz-list">
						<li><label><input name="checkbox-01" type="checkbox"/>I accept the <a href="#">terms and conditions</a></label></li>
					</ul>
				</div>
				<!-- row -->

				<div class="col-1-1">
					<p><small>We will use the information you submit in a manner consistent with our Privacy Policy. By clicking on "Create account" you agree with our Terms of Service and Privacy Policy and consent to the collection, storage and use of this information in the U.S. subject to U.S. laws and regulations.</small></p>
				</div>
				<!-- row -->

				<div class="col-1-1">
					<input class="animated right btn" type="submit" title="Create account" placeholder="Create account"/>
				</div>
				<!-- row -->


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
					<input class="animated" type="text" name="" placeholder="Fill up the field"/>
				</div>
				<div class="col-1-3">
					<label>Your e-mail address <em class="animated formz-req">*</em></label>
					<input class="animated" type="text" name="" placeholder="Fill up the field"/>
				</div>
				<div class="col-1-1">
					<label>Subject <em class="animated formz-req">*</em></label>
					<input class="animated" type="text" name="" placeholder="Fill up the field"/>
				</div>
				<div class="col-1-1 clear">
					<label>Please type your message below <em class="animated formz-req">*</em></label>
					<textarea class="animated" name="" id="" cols="30" rows="10"></textarea>
				</div>
				<div class="col-1-1">
					<input class="animated right btn" type="submit" title="Send" placeholder="Send"/>
				</div>
			</fieldset>
		</form>
		<!-- formz-->
	</div>
	<!--- end content -->
</section>

</div>
<?php include("includes/_footer.php");?>