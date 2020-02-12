<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.2
Version: 3.2.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
	<meta charset="utf-8" />
	<title><?= $title ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/global/plugins/select2/select2.css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css" />
	<!-- END PAGE LEVEL STYLES -->
	<!-- BEGIN THEME STYLES -->
	<link href="<?= base_url() ?>assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/global/css/plugins-md.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/admin/layout3/css/layout.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/admin/layout3/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color">
	<link href="<?= base_url() ?>assets/admin/layout3/css/custom.css" rel="stylesheet" type="text/css">
	<!-- END THEME STYLES -->
	<link rel="shortcut icon" href="favicon.ico" />

	<div class="page-header">
		<!-- BEGIN HEADER TOP -->
		<div class="page-header-top fixed">
			<div class="container">

				<!-- BEGIN LOGO -->
				<div class="page-logo">
					<h3 class="font-green-sharp bold">Inevntory DWG</h3>
				</div>
				<!-- END LOGO -->

				<!-- BEGIN TOP NAVIGATION MENU -->
				<div class="top-menu">
					<ul class="nav navbar-nav pull-right">
						<!-- BEGIN USER LOGIN DROPDOWN -->
						<li class="dropdown dropdown-user dropdown-light">

							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
								<img alt="" class="img-circle" src=" <?= base_url() ?>assets/admin/layout3/img/avatar.png"> <i class="fa fa-angle-down ml-2"></i>
							</a>

							<ul class="dropdown-menu dropdown-menu-default">
								<li>
									<a href="extra_profile.html"><i class="icon-user"></i> My Profile </a>
								</li>
								<li>
									<a href="login.html"><i class="icon-key"></i> Log Out </a>
								</li>
							</ul>
						</li>
						<!-- END USER LOGIN DROPDOWN -->
					</ul>
				</div>
				<!-- END TOP NAVIGATION MENU -->


				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<a href="javascript:;" class="menu-toggler"></a>
				<!-- END RESPONSIVE MENU TOGGLER -->


			</div>
			<!-- BEGIN HEADER MENU -->
			<div class="page-header-menu">
				<div class="container">
					<div class="hor-menu">
						<ul class="nav navbar-nav">
							<li class=""><a href="#">Dashboard</a></li>
							<li class="<?= $dashboard ?>"><a href="<?= base_url(); ?>barang/data">Barang</a></li>
							<li class=""><a href="<?= base_url(); ?>PURCHASE/data">Purchase</a></li>
							<li class=""><a href="#">Sales</a></li>
							<li><a href="#">Return</a></li>
						</ul>
					</div>
					<!-- END MEGA MENU -->
				</div>

			</div>
			<!-- END HEADER MENU -->
		</div>
		<!-- BEGIN HEADER MENU -->
	</div>
</head>
<!-- END HEAD -->

<body class="page-md">
	<!-- BEGIN HEADER -->
	<div class="page-header">

		<!-- BEGIN PAGE CONTENT -->
		<div class="container margin-top-5">
			<div class="row">
				<div class="col-md-12">
					<div class="portlet light">
						<div class="portlet-body">