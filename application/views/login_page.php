
<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: Arup-->
<!-- * Date: 12/11/2018-->
<!-- * Time: 10:07 AM-->
<!-- */-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Hospital Management Template" />
    <meta name="author" content="Link Up Technology" />
    <title>Hospital Management | Login</title>
    <!-- google font -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="<?= base_url()?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="<?= base_url()?>assets/plugin/iconic/css/material-design-iconic-font.min.css">
    <!-- bootstrap -->
	<link href="<?= base_url()?>assets/plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- style -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/extra_pages.css">
	<!-- favicon -->
    <link rel="shortcut icon" href="<?= base_url()?>assets/img/favicon.ico" />
</head>
<body>
    <div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
				<form class="login100-form validate-form" >
					<span class="login100-form-logo">
						<img alt="" src="<?= base_url()?>assets/img/hospital.png">
					</span>
					<span class="login100-form-title p-b-15 p-t-20">
						Log in
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="container-login100-form-btn">
						<a href="<?= base_url('dashboard')?>" class="login100-form-btn">
							Login
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
    <!-- start js include path -->
    <script src="<?= base_url()?>assets/plugin/jquery.min.js" ></script>
    <!-- bootstrap -->
    <script src="<?= base_url()?>assets/plugin/bootstrap/js/bootstrap.min.js" ></script>
    <script src="<?= base_url()?>assets/plugin/login.js"></script>
    <!-- end js include path -->
</body>
</html>
