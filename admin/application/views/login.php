<!DOCTYPE html>
<html>
<style>
.input-group .input-group-addon {
	border-radius: 0;
    border-color: #d2d6de;
    background-color: #fff;
    border: 1px solid #d2d6de;
	padding: 6px 12px;
}

.form-control{
	    width: 100%;
    height: 34px;
    padding: 6px 12px;
    background-color: #fff;
    border: 1px solid #c2cad8;
	box-shadow: none!important;
	outline: 0!important;
	transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
	font-size: 14px;
    line-height: 1.42857;
    color: #555;
}
.alert-dismissible .close {
	position: absolute;
    right: 0;
    padding: 0px 15px !important;
    color: inherit;
}
.alertClass{
	width:100%
}
.alert.alert-danger.alert-dismissible {
    width: 29% !important;
    margin: 0px auto !important;
}
</style>

<!-- Mirrored from radixtouch.in/templates/admin/redstar/source/light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Aug 2019 14:06:07 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Admin Panel" />
	<meta name="author" content="Admin Panel" />
	<title>Admin Panel</title>
	<!-- google font -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?=base_url();?>/assets/iconic/css/material-design-iconic-font.min.css">
	<!-- bootstrap -->
	<link href="<?=base_url();?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- style -->
	<link rel="stylesheet" href="css/extra_pages.css">
	<!-- favicon -->
     <!--<link rel="shortcut icon" href="<?=base_url();?>assets/img/side/.png">-->
</head>

<body>
	
	<div class="limiter">
		
		<div class="container-login100 page-background">
			<div class="alertClass">
			<?php $this->load->view('includes/msg');?>
			</div>
			<div class="wrap-login100">
			
				<form class="login100-form validate-form" action="<?=base_url()?>login" method="post">
				
					<span class="login100-form-logo">
						<img style="padding:10px" alt="" src="<?=base_url();?>img/login.png">
					</span>
					
					<span class="login100-form-title p-b-34 p-t-27">
						Sign In
					</span>
					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input style="padding:0px;" class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder=""></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input style="padding:0px;" class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" ></span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Submit
						</button>
					</div>
					
				</form>
			</div>
		</div>
	</div>
	<!-- start js include path -->
	<script src="../assets/jquery.min.js"></script>
	<!-- bootstrap -->
	<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/login.js"></script>
	<!-- end js include path -->
</body>


<!-- Mirrored from radixtouch.in/templates/admin/redstar/source/light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Aug 2019 14:06:08 GMT -->
</html>