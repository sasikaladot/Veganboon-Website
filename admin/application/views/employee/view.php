<!-- data tables -->
<link href="<?=base_url();?>/assets/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<?php $this->load->view('includes/header');?>
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			<?php $this->load->view('includes/sidebar');?>
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar col-md-9" style="margin:0px auto;padding:0">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Employee View</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?=base_url();?>/dashboard">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li>&nbsp;<a class="parent-item" href="<?=base_url();?>/employee">Employee</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">View Employee</li>
							</ol>
						</div>
					</div>
					<?php $this->load->view('includes/msg');?>
					<div class="row">
						<div class="col-md-9" style="margin:0px auto;">
							<?php
							if(isset($viewEmployee)&& $viewEmployee->num_rows()>0)
							{
								$view=$viewEmployee->row();
								
								$name=$view->name;
								$roleName=$view->roleName;
								$mobileNumber=$view->mobileNumber;
								$address=$view->address;
								$email=$view->email;
								$image=$view->image;
							}
										
							?>
							<!-- BEGIN PROFILE SIDEBAR -->
								<div class="card card-topline-aqua">
									<div class="card-body no-padding height-9">
										<div class="row">
											<div class="profile-userpic">
												<img src="<?=base_url();?>uploads/user/<?=$image;?>" class="img-responsive" alt=""> </div>
										</div>
										<div class="profile-usertitle">
											<div class="profile-usertitle-name"><?=$name;?></div>
											<div class="profile-usertitle-job"> <?=$roleName;?> </div>
										</div>
										<hr>
										<div class="row">
											<div class="col-md-4 col-xs-6 b-r"> <strong>Mobile Number</strong>
												<br>
												<p class="text-muted"><?=$mobileNumber;?></p>
											</div>
											<div class="col-md-4 col-xs-6 b-r"> <strong>Address</strong>
												<br>
												<p class="text-muted"><?=$address;?></p>
											</div>
											<div class="col-md-4 col-xs-6 b-r"> <strong>Email</strong>
												<br>
												<p class="text-muted"><?=$email;?></p>
											</div>
										</div>
										<!-- END SIDEBAR USER TITLE -->
										<!-- SIDEBAR BUTTONS -->
										
										<!-- END SIDEBAR BUTTONS -->
									</div>
								</div>
								
							<!-- END PROFILE CONTENT -->
							<!-- END BEGIN PROFILE SIDEBAR -->
						</div>
					</div>
				</div>
			</div>
	</div>
	
<?php $this->load->view('includes/footer');?>
			<!-- data tables -->
	<script src="<?=base_url();?>/assets/datatables/jquery.dataTables.min.js"></script>
	<script src="<?=base_url();?>/assets/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js"></script>
	<script src="<?=base_url();?>/assets/table_data.js"></script>
		