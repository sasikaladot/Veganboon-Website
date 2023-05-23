<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="admin panel" />
	<meta name="author" content="RedstarHospital" />
	<title>Admin Panel</title>
	<!-- google font -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="<?=base_url();?>/assets/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="<?=base_url();?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!--bootstrap -->

	<link href="<?=base_url();?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="<?=base_url();?>/assets/material/material.min.css">
	<link rel="stylesheet" href="css/material_style.css">
	<!-- Theme Styles -->
	<link href="<?=base_url();?>css/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="<?=base_url();?>css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="<?=base_url();?>css/style.css" rel="stylesheet" type="text/css" />
	<link href="<?=base_url();?>css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="<?=base_url();?>css/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="img/login.png"/>
</head>
<!-- END HEAD -->
<?=$username=$this->session->userdata('username');?>
<?=$image=$this->session->userdata('image');?>
<body data-path="<?=base_url();?>" class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
	<div class="page-wrapper">
	<!-- start header -->
	<div class="page-header navbar navbar-fixed-top">
	<div class="page-header-inner ">
		<!-- logo start -->
		<div style="background: #f5f5f5;" class="page-logo">
		 <img src="<?=base_url();?>img/logo.png" style="width:200px;" alt="logo" class="logo-default" />
		</div>
		<!-- logo end -->
		<ul class="nav navbar-nav navbar-left in">
			<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
		</ul>
		
		<!-- start mobile menu -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
			<span></span>
		</a>
		<!-- end mobile menu -->
		<!-- start header menu -->
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">
				<!-- start manage user dropdown -->
				<li class="dropdown dropdown-user">
					
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<img alt="" class="img-circle " src="<?=base_url();?>/uploads/user/<?=$image;?>"/>
						<span class="username username-hide-on-mobile"> <?=$username;?> </span>
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-default">
						<li>
							<a href="<?=base_url();?>change-password">
								<i class="icon-user"></i> Change Password </a>
						</li>
						
						<li>
							<a href="<?=base_url();?>logout">
								<i class="icon-logout"></i> Log Out </a>
						</li>
					</ul>
				</li>
				<!-- end manage user dropdown -->
				<li class="dropdown dropdown-quick-sidebar-toggler">
					
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- end header -->