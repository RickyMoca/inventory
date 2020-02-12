<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN LOGIN FORM -->
	<form class="login-form" action="<?= base_url(); ?>auth/login" method="post">
		<h3 class="form-title">Daftar Akun</h3>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
				Enter any username and password. </span>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Username login</label>
			<input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" />
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Email</label>
			<input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="email" name="email" />
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" />
		</div>
		<div class="form-group">
			<button type="submit" class="btn green btn-block">Daftar Sekarang</button>
			<br>
			<center><a href="<?= base_url(); ?>auth/login" id="forget-password">Sudah punya akun ?</a></center>
		</div>
		<div class=" create-account">
			<p>
				<sapan class="label blue uppercase">silahkan hubungin admin jika ada kendala !</sapan>
			</p>
		</div>
	</form>

	<!-- END LOGIN FORM -->
</div>