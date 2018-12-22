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
	<title>Hospital Management <?= (isset($title)&& $title)? '| '.$title:''?></title>
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
	<!-- dropzone -->
	<link href="<?= base_url()?>assets/plugin/dropzone/dropzone.css" rel="stylesheet" media="screen">
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
	<?php $this->load->view('includes/navbar');?>
	<!-- end header -->

	<!-- start page container -->
	<div class="page-container">
		<!-- start sidebar menu -->
		<?php $this->load->view('includes/sidebar');?>
		<!-- end sidebar menu -->
		<!-- start page content -->
		<div class="page-content-wrapper">

			<div class="page-content">
				<?php $this->load->view('includes/message');?>
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
<!-- dropzone -->
<script src="<?= base_url()?>assets/plugin/dropzone/dropzone.js" ></script>
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
