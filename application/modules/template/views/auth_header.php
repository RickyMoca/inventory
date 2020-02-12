<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Metronic | Login Form 1</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="<?= base_url(); ?>assets/admin/pages/css/login.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME STYLES -->
    <link href="<?= base_url(); ?>assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/global/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="<?= base_url(); ?>assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css" />
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>

<body class="login">
    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    <div class="menu-toggler sidebar-toggler">
    </div>
    <!-- END SIDEBAR TOGGLER BUTTON -->
    <!-- BEGIN LOGO -->
    <div class="logo">
        <a href="index.html">
            <img src="<?= base_url(); ?>assets/admin/layout3/img/logo-big.png" alt="" />
        </a>
    </div>
    <!-- END LOGO -->


    <!-- BEGIN FORGOT PASSWORD FORM -->
    <!-- <form class="forget-form" action="index.html" method="post">
            <h3>Forget Password ?</h3>
            <p>
                Enter your e-mail address below to reset your password.
            </p>
            <div class="form-group">
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" />
            </div>
            <div class="form-actions">
                <button type="button" id="back-btn" class="btn btn-default">Back</button>
                <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
            </div>
        </form> -->
    <!-- END FORGOT PASSWORD FORM -->

    <!-- BEGIN REGISTRATION FORM -->
    <!-- <form class="register-form" action="index.html" method="post">
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
        </form> -->
    <!-- END REGISTRATION FORM -->