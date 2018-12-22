
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
<div id="loader"  style="display: none;  position: fixed; z-index: 1000; margin: auto; height: 100%; width: 100%; background:rgba(255, 255, 255, 0.72);;">
	<img src="<?php echo base_url(); ?>assets/img/loader.gif" style="top: 30%; left: 50%; opacity: 1; position: fixed;">
</div>
    <div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
				<form id="login_form" class="login100-form validate-form" >
					<span class="login100-form-logo">
						<img alt="" src="<?= base_url()?>assets/img/hospital.png">
					</span>
					<span class="login100-form-title p-b-15 p-t-20">
						Log in
					</span>
					<p class="text text-center " id="message"></p>
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="identity" id="identity" placeholder="Username Or Email">
					</div>
					<span class="text" style="font-size: 13px; color:#a50000; font-weight: 600; margin-top: -15px; display: none;" id="user_msg"> Username Or Email Required</span>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" id="password" placeholder="Password">
					</div>
					<span class="text" style="font-size: 13px; color:#a50000; font-weight: 600; margin-top: -15px; display: none;" id="password_msg"></span>

					<div class="container-login100-form-btn">
						<button type="button" onclick="admin_login_submit();" class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

    <!-- start js include path -->
    <script src="<?= base_url()?>assets/plugin/jquery.min.js" ></script>
	<script>

		$('input').keypress(function (e) {
			if (e.which == 13) {
				admin_login_submit();
				return false;    //<---- Add this line
			}
		});

		function admin_login_submit() {

			$('#user_msg').hide();
			$('#identity').parent('div').css('border-color','rgba(255, 255, 255, 0.24)');
			$('#password_msg').hide();
			$('#password').parent('div').css('border-color','rgba(255, 255, 255, 0.24)');

			var identity = $('#identity').val();
			var password = $('#password').val();

			if(identity === ''){
				$('#identity').parent('div').css('border-color','red');
				$('#user_msg').show();
				return false;
			}
			if(password === ''){
				$('#password').parent('div').css('border-color','red');
				$('#password_msg').show();
				$('#password_msg').html('Password filed is required..!');
				return false;
			}
			if(password.length < 6){
				$('#password').parent('div').css('border-color','red');
				$('#password_msg').show();
				$('#password_msg').html('Password filed min 6 character ...!');
				return false;
			}
			$('#message').html('');
			$.ajax({
				url:'<?= base_url(); ?>admin_login',
				type:'POST',
				dataType:'json',
				data:$('#login_form').serialize(),
				success:function(data){
					if(data === 1){
						$('#message').css('color', '#21fb06');
						$('#message').html('WelCome Back.! You are Successfully Logged in.');
						setTimeout(function(){
							document.location.href = '<?= base_url('dashboard')?>';
						}, 2000);
					}else{
						$('#message').css('color', 'red');
						$('#message').html('Sorry! Logging Credentials are not match or Account is not Active ');
					}
				}
			});
		}

		$(document).ajaxStart(function(){
			$('#loader').show();
		}).ajaxStop(function(){
			$('#loader').hide();
		});
	</script>
    <!-- bootstrap -->
    <script src="<?= base_url()?>assets/plugin/bootstrap/js/bootstrap.min.js" ></script>
    <script src="<?= base_url()?>assets/plugin/login.js"></script>
    <!-- end js include path -->
</body>
</html>
