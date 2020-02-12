<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN LOGIN FORM -->
	<form class="login-form" action="index.html" method="post">
		<h3 class="form-title">Sign In</h3>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
				Enter any username and password. </span>
		</div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Username</label>
			<input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" />
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" />
		</div>
		<div class="form-group">
			<button type="submit" class="btn green btn-block">Login</button>
			<br>
			<center><a href="javascript:;" id="forget-password">Forgot Password?</a></center>
		</div>
		<div class=" create-account">
			<p>
				<a href="javascript:;" id="register-btn" class="uppercase">Belum Punya account ?</a>
			</p>
		</div>
	</form>

	<!-- END LOGIN FORM -->
</div>
