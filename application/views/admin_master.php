<!---->
<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: Arup-->
<!-- * Date: 12/11/2018-->
<!-- * Time: 10:33 AM-->
<!-- */-->
<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Hospital Management Template" />
	<meta name="author" content="Link Up Technology" />
	<title>Hospital Management | Dashboard</title>
	<!-- google font -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="<?= base_url()?>assets/plugin/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url()?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!--bootstrap -->

	<link href="<?= base_url()?>assets/plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url()?>assets/plugin/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?= base_url()?>assets/plugin/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url()?>assets/plugin/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
	<link href="<?= base_url()?>assets/plugin/bootstrap-editable/bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url()?>assets/plugin/bootstrap-editable/inputs-ext/address/address.css" rel="stylesheet" type="text/css" />
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="<?= base_url()?>assets/plugin/material/material.min.css">
	<link rel="stylesheet" href="<?= base_url()?>assets/css/material_style.css">
	<!-- Theme Styles -->
	<link href="<?= base_url()?>assets/css/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="<?= base_url()?>assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url()?>assets/css/style.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url()?>assets/css/formlayout.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url()?>assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url()?>assets/css/theme-color.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url()?>assets/plugin/summernote/summernote.css" rel="stylesheet">
	<!--select2-->
	<link href="<?= base_url()?>assets/plugin/select2/css/select2.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url()?>assets/plugin/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="<?= base_url()?>assets/img/favicon.ico" />
	<script src="<?= base_url()?>assets/plugin/jquery.min.js" ></script>
</head>
<!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
<div class="page-wrapper">
	<!-- start header -->
	<div class="page-header navbar navbar-fixed-top">
		<div class="page-header-inner ">
			<!-- logo start -->
			<div class="page-logo">
				<a href="index-2.html">
					<span class="logo-icon fa fa-stethoscope fa-rotate-45"></span>
					<span class="logo-default" >REDSTAR</span> </a>
			</div>
			<!-- logo end -->
			<ul class="nav navbar-nav navbar-left in">
				<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
			</ul>
			<form class="search-form-opened" action="#" method="GET">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search..." name="query">
					<span class="input-group-btn">
                          <a href="javascript:;" class="btn submit">
                             <i class="icon-magnifier"></i>
                           </a>
                        </span>
				</div>
			</form>
			<!-- start mobile menu -->
			<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
				<span></span>
			</a>
			<!-- end mobile menu -->
			<!-- start header menu -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<i class="fa fa-bell-o"></i>
							<span class="badge headerBadgeColor1"> 6 </span>
						</a>

					</li>
					<li class="dropdown dropdown-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<img alt="" class="img-circle " src="img/dp.jpg" />
							<span class="username username-hide-on-mobile"> Kiran </span>
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li>
								<a href="user_profile.html">
									<i class="icon-user"></i> Profile </a>
							</li>
							<li>
								<a href="#">
									<i class="icon-settings"></i> Settings
								</a>
							</li>
							<li>
								<a href="#">
									<i class="icon-directions"></i> Help
								</a>
							</li>
							<li class="divider"> </li>
							<li>
								<a href="lock_screen.html">
									<i class="icon-lock"></i> Lock
								</a>
							</li>
							<li>
								<a href="login.html">
									<i class="icon-logout"></i> Log Out </a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- end header -->

	<!-- start page container -->
	<div class="page-container">
		<!-- start sidebar menu -->
		<?php $this->load->view('includes/sidebar');?>
		<!-- end sidebar menu -->
		<!-- start page content -->
		<div class="page-content-wrapper">
			<div class="page-content">
				<?php  if(isset($content) && $content){ $this->load->view($content, TRUE); }?>
			</div>
		</div>
		<!-- end page content -->
	</div>
	<!-- end page container -->
	<!-- start footer -->
	<div class="page-footer">
		<div class="page-footer-inner"> 2017 &copy; RedStar Hospital Theme By
			<a href="mailto:redstartheme@gmail.com" target="_top" class="makerCss">RT Theme maker</a>
		</div>
		<div class="scroll-to-top">
			<i class="icon-arrow-up"></i>
		</div>
	</div>
	<!-- end footer -->
</div>
<!-- start js include path -->

<script src="<?= base_url()?>assets/plugin/popper/popper.js" ></script>
<script src="<?= base_url()?>assets/plugin/jquery.blockui.min.js" ></script>
<script src="<?= base_url()?>assets/plugin/jquery.slimscroll.js"></script>

<script src="<?= base_url()?>assets/plugin/jquery-validation/js/jquery.validate.min.js" ></script>
<script src="<?= base_url()?>assets/plugin/jquery-validation/js/additional-methods.min.js" ></script>

<!-- bootstrap -->
<script src="<?= base_url()?>assets/plugin/bootstrap/js/bootstrap.min.js" ></script>
<script src="<?= base_url()?>assets/plugin/bootstrap-switch/js/bootstrap-switch.min.js" ></script>
<!-- data tables -->
<script src="<?= base_url()?>assets/plugin/datatables/jquery.dataTables.min.js" ></script>
<script src="<?= base_url()?>assets/plugin/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js" ></script>
<script src="<?= base_url()?>assets/plugin/table_data.js" ></script>
<!--data time piker-->
<script src="<?= base_url()?>assets/plugin/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"  charset="UTF-8"></script>
<script src="<?= base_url()?>assets/plugin/bootstrap-datetimepicker/js/bootstrap-datetimepicker-init.js"  charset="UTF-8"></script>
<!-- counterup -->
<script src="<?= base_url()?>assets/plugin/counterup/jquery.waypoints.min.js" ></script>
<script src="<?= base_url()?>assets/plugin/counterup/jquery.counterup.min.js" ></script>
<!-- Common js-->
<script src="<?= base_url()?>assets/plugin/app.js" ></script>
<script src="<?= base_url()?>assets/plugin/form-validation.js" ></script>
<script src="<?= base_url()?>assets/plugin/layout.js" ></script>
<script src="<?= base_url()?>assets/plugin/theme-color.js" ></script>
<!-- material -->
<script src="<?= base_url()?>assets/plugin/material/material.min.js"></script>
<!--select2-->
<script src="<?= base_url()?>assets/plugin/select2/js/select2.js" ></script>
<script src="<?= base_url()?>assets/plugin/select2/js/select2-init.js" ></script>
<!-- end js include path -->
<script src="<?= base_url()?>assets/plugin/summernote/summernote.js" ></script>
<script >
	$(document).ready(function() {
		$('#summernote').summernote();
	});
</script>
</body>

</html>
