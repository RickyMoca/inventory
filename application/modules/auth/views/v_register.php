<!-- BEGIN REGISTRATION FORM -->

<form class="register-form" action="index.html" method="post">
	<h3>Sign Up</h3>
	<p class="hint">
		Enter your personal details below:
	</p>
	<div class="form-group">
		<label class="control-label visible-ie8 visible-ie9">Full Name</label>
		<input class="form-control placeholder-no-fix" type="text" placeholder="Full Name" name="fullname" />
	</div>
	<div class="form-group">

		<label class="control-label visible-ie8 visible-ie9">Email</label>
		<input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email" />
	</div>
	<div class="form-group">
		<label class="control-label visible-ie8 visible-ie9">Address</label>
		<input class="form-control placeholder-no-fix" type="text" placeholder="Address" name="address" />
	</div>
	<div class="form-group">
		<label class="control-label visible-ie8 visible-ie9">City/Town</label>
		<input class="form-control placeholder-no-fix" type="text" placeholder="City/Town" name="city" />
	</div>
	<div class="form-group">
		<label class="control-label visible-ie8 visible-ie9">Country</label>
		<select name="country" class="form-control">
			<option value="VE">Venezuela</option>
			<option value="VN">Viet Nam</option>
			<option value="VG">Virgin Islands (British)</option>
			<option value="VI">Virgin Islands (U.S.)</option>
			<option value="WF">Wallis and Futuna Islands</option>
			<option value="EH">Western Sahara</option>
			<option value="YE">Yemen</option>
			<option value="ZM">Zambia</option>
			<option value="ZW">Zimbabwe</option>
		</select>
	</div>
	<p class="hint">
		Enter your account details below:
	</p>
	<div class="form-group">
		<label class="control-label visible-ie8 visible-ie9">Username</label>
		<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" />
	</div>
	<div class="form-group">
		<label class="control-label visible-ie8 visible-ie9">Password</label>
		<input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password" />
	</div>
	<div class="form-group">
		<label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
		<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="rpassword" />
	</div>
	<div class="form-group margin-top-20 margin-bottom-20">
		<label class="check">
			<input type="checkbox" name="tnc" /> I agree to the <a href="javascript:;">
				Terms of Service </a>
			& <a href="javascript:;">
				Privacy Policy </a>
		</label>
		<div id="register_tnc_error">
		</div>
	</div>
	<div class="form-actions">
		<button type="button" id="register-back-btn" class="btn btn-default">Back</button>
		<button type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-right">Submit</button>
	</div>
</form>
<!-- END REGISTRATION FORM -->
